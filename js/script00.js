if (navigator.userAgent.indexOf('Mac') > 0) {
	var elemHTML = document.getElementsByTagName('html')[0];
	
	elemHTML.className += " mac-os";
	
	if (navigator.userAgent.indexOf('Safari') > 0) elemHTML.className += " mac-safari";
	if (navigator.userAgent.indexOf('Chrome') > 0) elemHTML.className += " mac-chrome";
}
$(document).ready(function(){


	$(document).on('click','.button_menu ',function(){

		if($(this).hasClass('closed')){
            $(this).removeClass('closed')
			$('body').removeClass('block_animate');
			$('.menu_content').removeClass('active');
			$('.section').removeClass('animate_block');
		}
		else{
            $(this).addClass('closed')
			$('body').addClass('block_animate');
			$('.menu_content').addClass('active');
			$('.section').addClass('animate_block');
		}
	});

	$('.menu_content .menu li, .section').click(function(){
		$('.menu_content .menu').find('.active').removeClass('active');
		$(this).addClass('active');
		$('.button_menu.closed').click();
	});

	$('footer span').click(function(){
		if($(this).hasClass('opened')){
            $(this).removeClass('opened');
			$('footer').find('.opened').removeClass('opened');
		}
		else {
			$('footer').find('.opened').removeClass('opened');
            $(this).addClass('opened');
		}
	});

	$(document).on('click','.close_modal',function(){
		$('.modal_box').removeClass('foto').removeClass('active');
		$('.modal iframe').remove();
		$('.gallery').removeClass('view_part');
		$('.full').removeAttr('src');
	});

	$(document).on('click','.gallery ul li img',function(){
		$(this).parents('.gallery').addClass('view_part');
		$(this).closest('li').addClass('open');
        $('.modal_box').addClass('foto').find('.full').attr('src',$(this).attr('src'));

	});

	function open_img(){
        $('.full').attr('src',$('.view_part').find('.open').children('img').attr('src'));

	};

	$(document).on('click','.step_right',function(){
		var next_class = $('.view_part').find('.open').removeClass('open').next('li').addClass('open');
		open_img();
		if (!next_class.length) {
			$('.view_part').find('.open').removeClass('open');
			$('.view_part ul li').first().addClass('open');
			open_img();
		}
	});

	$(document).on('click','.step_left',function(){
		var prev_class = $('.view_part').find('.open').removeClass('open').prev('li').addClass('open');
		open_img();
		if (!prev_class.length) {
			$('.view_part').find('.open').removeClass('open');
			$('.view_part ul li').last().addClass('open');
			open_img();
		}
	});

	$(document).keydown(function(events){
		if ($('.modal_box').hasClass('foto')){
			if ( events.keyCode == 39)		{
				$('.step_right').click();
			}
			else if ( events.keyCode == 37)		{
				$('.step_left').click();
			}
			else if ( events.keyCode == 27)		{
				$('.close_modal').click();
			}
		}

	});


	function protect(){
		$('body').attr('oncontextmenu', 'return false');
		$(document).keydown(function(events){
			if (events.keyCode == 123 || events.shiftKey && events.ctrlKey && events.keyCode == 73)	{
				// $('body').detach();
				// $('head').detach();
				window.close();
				window.location = "https://www.google.com/"
			}
		});
		$(document).keydown(function(events){
			if (events.ctrlKey && events.keyCode  == 83 || events.ctrlKey && events.keyCode == 85 || events.keyCode == 154)		{
				// $('body').detach();
				// $('head').detach();
				window.close();
				window.location = "https://www.google.com/"

			}
		});
	};

	$(window).resize(function() {
		var w = $(window).outerWidth();
		if(w > 992) {
			$('#fullpage').fullpage({
				menu: 'true',
				onLeave: function(index, nextIndex, direction){
				}
			});
		} else
		if(w <= 991) {
			$('.section').each(function() {

				//var b = $(this).attr('id',$(this).attr('data-anchor'));
			});
			//fucking bug
			$.fn.fullpage.destroy('all');
		}
	});

	$(function(){
		var w = $(window).outerWidth();
		if(w > 992) {
			$('#fullpage').fullpage({
				menu: 'true',
				onLeave: function(index, nextIndex, direction){
				}
			});
		} else
		if(w <= 991) {

			$('.section').each(function() {
				var b = $(this).attr('id',$(this).attr('data-anchor'));
			});

			$("#menu li a").on("click", function(event) {
				event.preventDefault();
				var id = $(this).attr('href'),
				top = $(id).offset().top;
				$('body,html').animate({
					scrollTop: top
				}, 1500);
				$('.button_menu.closed ').click();
			});

			//$.fn.fullpage.destroy('all');
			
		}
	});

});
