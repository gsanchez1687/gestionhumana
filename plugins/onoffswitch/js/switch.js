/* Function General para el Box Swicth Boostrap con Ajax*/
function GridviewBoxSwitch(idGridview, urlpath) {

    $('.checkbox-active').click(function() {
        
        /* Obtengo el ID del Box presionado*/
        var idchx = $(this).attr('id');
        
        /* Obtengo el Checkbox correspondiente a la seleccion */
        if ($('#' + idchx).is(':checked')) {
            /* Si es Checked el valor es 1 */
            var status = 1;
        } else {
            /* Si no es Checked el valor es 0 */
            var status = 0;
        }
       

        /* Ajuste de la ruta con los valores */
        var ruta = urlpath + '?it=' + idchx + '&s=' + status;

        /* Proceso de Envio de Ajax mediante Jquery */
        jQuery.ajax({'type': 'POST',
            'url': ruta,
            'cache': false,
            'data': jQuery(this).parents('form').serialize(),
            'dataType': "json",                         
            'success': function(html) {
                
              
                /* Update del Gridview */
                jQuery('#' + idGridview).yiiGridView('update');
            }});
    });
    
    $('.checkbox-pend').click(function() {
        
        /* Obtengo el ID del Box presionado*/
        var idchx = $(this).attr('id');
        $(this).remove();
        /* Obtengo el Checkbox correspondiente a la seleccion */
        if ($('#' + idchx).is(':checked')) {
            /* Si es Checked el valor es 1 */
            var status = 0;
        } else {
            /* Si no es Checked el valor es 0 */
            var status = 1;
        }
       

        /* Ajuste de la ruta con los valores */
        var ruta = urlpath + '?it=' + idchx + '&s=' + status;

        /* Proceso de Envio de Ajax mediante Jquery */
        jQuery.ajax({'type': 'POST',
            'url': ruta,
            'cache': false,
            'data': jQuery(this).parents('form').serialize(),
            'dataType': "json",                         
            'success': function(html) {
            	location.reload();
            }});
    });

}