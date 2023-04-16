<?php
/* @var $this RrhhdotacionesController */
/* @var $model RrhhDotaciones */


/* 
////////////////////////////////////////////////
// REPLACE THIS ON VIEW OR UPDATE CONTROLLER  //
////////////////////////////////////////////////

$model=$this->loadModel($id);

$rrhhdotaciones=new RrhhDotaciones;
$criteria=new CDbCriteria;
$criteria->compare('rrhh_datos_empleado_id',$id);
$rrhhdotacionesDataProvider=new CActiveDataProvider('RrhhDotaciones',array(
	"criteria"=>$criteria,
));


$typeRender=Yii::app()->request->isAjaxRequest?"renderPartial":"render";
$this->{$typeRender}('view',array(
	'model'=>$model,
	'rrhhdotaciones'=>$rrhhdotaciones,
	'rrhhdotacionesDataProvider'=>$rrhhdotacionesDataProvider,
));

////////////////////////////////////////////////////////////
// PASTE THIS CONTENT ON THE VIE OF SAME CONTROLLER ABOVE //
////////////////////////////////////////////////////////////

<?php $this->renderPartial('../rrhhdotaciones/view_embed',array(
	'model'=>$model,
	'rrhhdotacionesDataProvider'=>$rrhhdotacionesDataProvider,
	'rrhhdotaciones'=>$rrhhdotaciones,
))?>

 */
?>

<?php #if(count($rrhhdotacionesDataProvider->getData())<12):?>
<div class="col-lg-12 text-right">
<?php echo CHtml::link('<i class="fa fa-plus-circle"></i>', array('rrhhDotaciones/create','rrhh_datos_empleado_id'=>$model->id), 
array('class'=>'btn btn-primary','data-action'=>'crud-rrhhdotaciones','data-type'=>'create')); ?>
</div>
<?php #endif;?>

<h4><i class="fa fa-cubes"></i> <?php echo Yii::t('app','Dotaciones')?> <span class="loading"></span></h4>
<?php $this->widget('zii.widgets.CListView',array(
	'id'=>'rrhh-dotaciones-list',
	'dataProvider'=>$rrhhdotacionesDataProvider,
	'itemView'=>'../rrhhDotaciones/_detail_each',
	'pager'=>array('htmlOptions'=>array('class'=>'pagination'),'header'=>false),
	'itemsTagName'=>'ul',
	'cssFile'=>false,
	'itemsCssClass'=>'list-group',
	'summaryCssClass'=>'text-right',
)); ?>


<!-- ////////////////////////////////////////////////// -->
<!-- Modal in order to update or create a detail record -->
<!-- ////////////////////////////////////////////////// -->
<div class="modal fade" id="rrhh-dotaciones-modal" tabindex="-1" role="rrhh-dotaciones-modal" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="fa fa-cubes"></i> <?php echo Yii::t('app','Dotaciones')?></h4>
        </div>
    	<div class="modal-body">
        	<?php echo $this->renderPartial('../rrhhDotaciones/_detail_form',array('model'=>$rrhhdotaciones))?>
        </div>
        </div>
    </div>
</div>


<!-- ////////////////////////////////////////////////// -->
<!-- Modal in order to view detail of -->
<!-- ////////////////////////////////////////////////// -->
<div class="modal fade" id="rrhh-dotaciones-view-modal" tabindex="-1" role="rrhh-dotaciones-view-modal" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
           <h4 class="modal-title"><i class="fa fa-cubes"></i> <?php echo Yii::t('app','Dotaciones')?></h4>
        </div>
    	<div class="modal-body">
        	<?php echo $this->renderPartial('../rrhhDotaciones/_detail_view',array('model'=>$rrhhdotaciones))?>
        </div>
        </div>
    </div>
</div>
<script>
$(function () {
	$(document).on('click', '[data-action=crud-rrhhdotaciones]', function (e) {
   		e.preventDefault();
			var action = $(this).attr('href');
			var type = $(this).attr('data-type');
   		
   		if(type==='update') {
	   		$.ajax({
	   			url: action,
	   			dataType: 'json',
	   			success: function (data) {
	   				// fill data to update
	   				console.log(data);
	   				$('#rrhh-dotaciones-form').attr('action',action);
					$('#RrhhDotaciones_id').val(data.id);
					$('#RrhhDotaciones_fecha').val(data.fecha);
					$('#RrhhDotaciones_observacion').val(data.observacion);
					$('.stick-image').empty();
					$('#RrhhDotaciones_comprobante').val('');
					$('#RrhhDotaciones_comprobante').val(data.comprobante);
					$('.stick-image.RrhhDotaciones_comprobante_img').html('<img class="img-responsive img-rounded" src="'+$('.RrhhDotaciones_comprobante_img').attr('data-url')+'/'+data.comprobante+'" alt="">');
					$('#RrhhDotaciones_orden_id').val(data.orden_id);
					$('#RrhhDotaciones_rrhh_datos_empleado_id').val(data.rrhh_datos_empleado_id);
					$('.rrhh-dotaciones-submit').val('Guardar');
					$('#rrhh-dotaciones-modal').modal('show');
	   			}
	   		});
   		} 

   		if(type==='view') {
				$.ajax({
	   			url: action,
	   			dataType: 'json',
	   			success: function (data) {
	   				// fill data to update
	   				console.log(data);
					$('#RrhhDotaciones_id_label').html(data.id);
					$('#RrhhDotaciones_fecha_label').html(data.fecha);
					$('#RrhhDotaciones_observacion_label').html(data.observacion);
					$('#RrhhDotaciones_comprobante_label').html(data.comprobante);
					$('#RrhhDotaciones_orden_id_label').html(data.orden_id);
					$('#RrhhDotaciones_rrhh_datos_empleado_id_label').html(data.rrhh_datos_empleado_id);
					$('#rrhh-dotaciones-view-modal').modal('show');
	   			}
	   		});
   		} 
   		
   		if(type==='create') {
				$('#rrhh-dotaciones-form').attr('action',action).each(function(i,v){
	              this.reset();
	            });
					$('.stick-image').empty();
					$('#RrhhDotaciones_comprobante').val('');
					$('.rrhh-dotaciones-submit').val('Crear');
	   				$('#rrhh-dotaciones-modal').modal('show');
   		}

   		if(type==='delete') {
			var name = $(this).attr('data-name');
		    bootbox.confirm("¿Está seguro que desea <strong>BORRAR</strong> el registro "+name+"?", function(result) {
		        if(result) {
		            $.ajax({
		                type: 'post',
		                url: action,
		                success:function (data) {
		                    $.fn.yiiListView.update('rrhh-dotaciones-list');
		                }
		            });
		        }
		    });
   		}
    });

	$("#rrhh-dotaciones-list ul").sortable({
    	update: function() {
    		var that = $(this);
			$('.loading').html('<i class="fa fa-refresh fa-spin"></i>');
    		setTimeout(function () {
	        	var order = that.sortable("toArray");
		        $.post('<?php echo $this->createUrl("rrhhdotaciones/order") ?>', {order: order}, function(datos){
	    			$('.loading').empty();
		        });
    		},500);
        }
    });
});
</script>