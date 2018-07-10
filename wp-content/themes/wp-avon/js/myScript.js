$j = jQuery.noConflict();
$j(document).ready(function($) {

    $('#become-a-rep , #quick-form    ').on('submit',function(e) {
        e.preventDefault();
        $ajaxdata = $(this).serialize();

        var ajaxdata = {
            action     : 'myajax-submit',
            nonce_code : myajax.nonce
        };
        jQuery.post( myajax.url, $ajaxdata+'&action=myajax-submit&nonce_code='+myajax.nonce,   function( response ) {
            // alert( response );
            if(response == 'OK') {
                $this.before( '<div id="note"></div>');
                result = '<div class="ok">Сообщение отправлено</div>';
                $("#note").html(result).animate( 5000, "linear", function() {
                    $( this ).html("");
                });
            }
            else {
                result = msg;
                $('#note').html(result);
                $("#note").html(result).animate( 5000, "linear", function() {
                    $( this ).html("");
                });
            }
        });
    });
});
