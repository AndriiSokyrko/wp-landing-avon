/**
 * Created by user on 08.05.2018.
 */
$j = jQuery.noConflict();
$j(document).ready(function($) {
    $('#upload_logo_button, #upload_logo').click(function() {
       // e.preventDefault();
        tb_show('Upload a logo', 'media-upload.php?referer=wptuts-settings&type=image&TB_iframe=true&post_id=0', false);
        return false;
    });

    window.send_to_editor = function(html) {
         var image_url = $j(html).attr('src');
        // alert(image_url);

        $('#logo_url').val(image_url);
        tb_remove();
        $('#upload_logo_preview img').attr('src',image_url);

        $('#submit_options_form').trigger('click');
    }

});


