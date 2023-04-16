<?php
/* @var $this RrhhvacacionesController */
/* @var $model RrhhVacaciones */


/* 
////////////////////////////////////////////////
// REPLACE THIS ON VIEW OR UPDATE CONTROLLER  //
////////////////////////////////////////////////

$model=$this->loadModel($id);

$rrhhvacaciones=new RrhhVacaciones;
$criteria=new CDbCriteria;
$criteria->compare('rrhh_datos_empleado_id',$id);
$rrhhvacacionesDataProvider=new CActiveDataProvider('RrhhVacaciones',array(
	"criteria"=>$criteria,
));


$typeRender=Yii::app()->request->isAjaxRequest?"renderPartial":"render";
$this->{$typeRender}('view',array(
	'model'=>$model,
	'rrhhvacaciones'=>$rrhhvacaciones,
	'rrhhvacacionesDataProvider'=>$rrhhvacacionesDataProvider,
));

////////////////////////////////////////////////////////////
// PASTE THIS CONTENT ON THE VIE OF SAME CONTROLLER ABOVE //
////////////////////////////////////////////////////////////

<?php $this->renderPartial('../rrhhvacaciones/view_embed',array(
	'model'=>$model,
	'rrhhvacacionesDataProvider'=>$rrhhvacacionesDataProvider,
	'rrhhvacaciones'=>$rrhhvacaciones,
))?>

 */
?>

<?php #if(count($rrhhvacacionesDataProvider->getData())<12):?>
<div class="col-lg-12 text-right">
<?php echo CHtml::link('<i class="fa fa-plus-circle"></i>', array('rrhhVacaciones/create','rrhh_datos_empleado_id'=>$model->id), 
array('class'=>'btn btn-primary','data-action'=>'crud-rrhhvacaciones','data-type'=>'create')); ?>
</div>
<?php #endif;?>

<?php $this->widget('zii.widgets.CListView',array(
	'id'=>'rrhh-vacaciones-list',
	'dataProvider'=>$rrhhvacacionesDataProvider,
	'itemView'=>'../rrhhVacaciones/_detail_each',
	'pager'=>array('htmlOptions'=>array('class'=>'pagination'),'header'=>false),
	'itemsTagName'=>'ul',
	'cssFile'=>false,
	'itemsCssClass'=>'list-group',
	'summaryCssClass'=>'text-right',
)); ?>


<!-- ////////////////////////////////////////////////// -->
<!-- Modal in order to update or create a detail record -->
<!-- ////////////////////////////////////////////////// -->
<div class="modal fade" id="rrhh-vacaciones-modal" tabindex="-1" role="rrhh-vacaciones-modal" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="fa fa-sun-o"></i> <?php echo Yii::t('app','Vacaciones ')?></h4>
        </div>
    	<div class="modal-body">
        	<?php echo $this->renderPartial('../rrhhVacaciones/_detail_form',array('model'=>$rrhhvacaciones))?>
        </div>
        </div>
    </div>
</div>


<!-- ////////////////////////////////////////////////// -->
<!-- Modal in order to view detail of -->
<!-- ////////////////////////////////////////////////// -->
<div class="modal fade" id="rrhh-vacaciones-view-modal" tabindex="-1" role="rrhh-vacaciones-view-modal" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
           <h4 class="modal-title"><i class="fa fa-sun-o"></i> <?php echo Yii::t('app','Vacaciones ')?></h4>
        </div>
    	<div class="modal-body">
        	<?php echo $this->renderPartial('../rrhhVacaciones/_detail_view',array('model'=>$rrhhvacaciones))?>
        </div>
        </div>
    </div>
</div>
<script>
$(function () {
	$(document).on('click', '[data-action=crud-rrhhvacaciones]', function (e) {
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
	   				$('#rrhh-vacaciones-form').attr('action',action);
					$('#RrhhVacaciones_id').val(data.id);
					$('#RrhhVacaciones_dias_tomados').val(data.dias_tomados);
					$('#RrhhVacaciones_periodo_afectado').val(data.periodo_afectado);
					$('#RrhhVacaciones_fecha_salida').val(data.fecha_salida);
					$('#RrhhVacaciones_fecha_reintegro').val(data.fecha_reintegro);
					$('#RrhhVacaciones_orden_id').val(data.orden_id);
					$('#RrhhVacaciones_rrhh_datos_empleado_id').val(data.rrhh_datos_empleado_id);
					$('.rrhh-vacaciones-submit').val('Guardar');
					$('#rrhh-vacaciones-modal').modal('show');
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
					$('#RrhhVacaciones_id_label').html(data.id);
					$('#RrhhVacaciones_dias_tomados_label').html(data.dias_tomados);
					$('#RrhhVacaciones_periodo_afectado_label').html(data.periodo_afectado);
					$('#RrhhVacaciones_fecha_salida_label').html(data.fecha_salida);
					$('#RrhhVacaciones_fecha_reintegro_label').html(data.fecha_reintegro);
					$('#RrhhVacaciones_orden_id_label').html(data.orden_id);
					$('#RrhhVacaciones_rrhh_datos_empleado_id_label').html(data.rrhh_datos_empleado_id);
					$('#rrhh-vacaciones-view-modal').modal('show');
	   			}
	   		});
   		} 
   		
   		if(type==='create') {
				$('#rrhh-vacaciones-form').attr('action',action).each(function(i,v){
	              this.reset();
	            });
					$('.rrhh-vacaciones-submit').val('Crear');
	   				$('#rrhh-vacaciones-modal').modal('show');
   		}

   		if(type==='delete') {
			var name = $(this).attr('data-name');
		    bootbox.confirm("¿Está seguro que desea <strong>BORRAR</strong> el registro "+name+"?", function(result) {
		        if(result) {
		            $.ajax({
		                type: 'post',
		                url: action,
		                success:function (data) {
		                    $.fn.yiiListView.update('rrhh-vacaciones-list');
		                }
		            });
		        }
		    });
   		}
    });

	$("#rrhh-vacaciones-list ul").sortable({
    	update: function() {
    		var that = $(this);
			$('.loading').html('<i class="fa fa-refresh fa-spin"></i>');
    		setTimeout(function () {
	        	var order = that.sortable("toArray");
		        $.post('<?php echo $this->createUrl("rrhhVacaciones/order") ?>', {order: order}, function(datos){
	    			$('.loading').empty();
		        });
    		},500);
        }
    });
});
</script>