<?php

function sja_kavos_cart_shortcode($atts){

    extract( shortcode_atts( array(

            ), $atts ));

        ?>

    <div id="cart_holder">
        <?php echo kbGetCartTable(); ?>
    </div>

    <script type="text/javascript">
        function kbEmptyCart(){

            jQuery.ajax({
                url: 'http://localhost:8888/kb15/wp-content/plugins/kavos-tickets/ajax/emptycart.php',
                type: 'POST',
                data: {
                    //                eventid: $eventid
                },
                success: function(data, textStatus, xhr) {

                    $jsondata = JSON.parse(data);
                    console.dir($jsondata);
                },
                error: function(xhr, textStatus, errorThrown) {
                    console.log(textStatus.reponseText);
                }
            });

        }
    </script>


<?php

}

add_shortcode('Kavos_Cart', 'sja_kavos_cart_shortcode');

?>