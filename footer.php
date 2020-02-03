<footer>

    <span class="contact">Contact</span>

    <span class="services ">Services</span>

    <span class="portfolio">Portfolio</span>

</footer>

<div class="modal_box ">

    <div class="modal">

        <span class="close_modal">×</span>

        <span class="step step_left">‹</span>

        <img  alt="" class="full">

        <span class="step step_right">›</span>

    </div>

    <div class="overlay"></div>

</div>


<script src="<?=esc_url( get_template_directory_uri() )?>/js/jquery-1.12.2.min.js"></script>

<script src="<?=esc_url( get_template_directory_uri() )?>/js/jquery.easings.min.js"></script>

<script src="<?=esc_url( get_template_directory_uri() )?>/js/scrolloverflow.min.js"></script>

<script src="<?=esc_url( get_template_directory_uri() )?>/js/jquery.fullPage.min.js"></script>

<script src="<?=esc_url( get_template_directory_uri() )?>/js/script00.js"></script>


<script>
    $(document).ready(function(){
    $("form").submit(function(e){
        e.preventDefault();
    });
        <?php if ($_COOKIE['guest']!=true):?>
    $(document).on('click','.feedback', function(){
        var message=$(this).parent('form').serialize();
        var button=$(this);
        $.ajax({
            url: '/wp-admin/admin-ajax.php', // point to server-side PHP script
            dataType: 'JSON',  // what to expect back from the PHP script, if anything
            cache: false,
            data: 'action=feedback&nonce='+nonce+'&'+message,
            type: 'POST',
            success: function (res)  { console.log(res);
                try {
                    if (res.status==true){
                        button.disabled();
                       // $('.add_reviews').detach();
                    }
                }
                catch (e)
                {
                    console.log('Nothing was found')
                }
            }
        });
    });
        <?php endif;?>
    });
</script>


</body>

</html>
