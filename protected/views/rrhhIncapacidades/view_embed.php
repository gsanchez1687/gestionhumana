<?php
/* @var $this RrhhincapacidadesController */
/* @var $model RrhhIncapacidades */


/* 
////////////////////////////////////////////////
// REPLACE THIS ON VIEW OR UPDATE CONTROLLER  //
////////////////////////////////////////////////

$model=$this->loadModel($id);

$rrhhincapacidades=new RrhhIncapacidades;
$criteria=new CDbCriteria;
$criteria->compare('rrhh_datos_empleado_id',$id);
$rrhhincapacidadesDataProvider=new CActiveDataProvider('RrhhIncapacidades',array(
	"criteria"=>$criteria,
));


$typeRender=Yii::app()->request->isAjaxRequest?"renderPartial":"render";
$this->{$typeRender}('view',array(
	'model'=>$model,
	'rrhhincapacidades'=>$rrhhincapacidades,
	'rrhhincapacidadesDataProvider'=>$rrhhincapacidadesDataProvider,
));

////////////////////////////////////////////////////////////
// PASTE THIS CONTENT ON THE VIE OF SAME CONTROLLER ABOVE //
////////////////////////////////////////////////////////////

<?php $this->renderPartial('../rrhhincapacidades/view_embed',array(
	'model'=>$model,
	'rrhhincapacidadesDataProvider'=>$rrhhincapacidadesDataProvider,
	'rrhhincapacidades'=>$rrhhincapacidades,
))?>

 */
?>

<?php #if(count($rrhhincapacidadesDataProvider->getData())<12):?>
<div class="col-lg-12 text-right">
<?php echo CHtml::link('<i class="fa fa-plus-circle"></i>', array('rrhhIncapacidades/create','rrhh_datos_empleado_id'=>$model->id), 
array('class'=>'btn btn-primary','data-action'=>'crud-rrhhincapacidades','data-type'=>'create')); ?>
</div>
<?php #endif;?>

<h4><i class="fa fa-wheelchair"></i> <?php echo Yii::t('app','Incapacidades')?> <span class="loading"></span></h4>
<?php $this->widget('zii.widgets.CListView',array(
	'id'=>'rrhh-incapacidades-list',
	'dataProvider'=>$rrhhincapacidadesDataProvider,
	'itemView'=>'../rrhhIncapacidades/_detail_each',
	'pager'=>array('htmlOptions'=>array('class'=>'pagination'),'header'=>false),
	'itemsTagName'=>'ul',
	'cssFile'=>false,
	'itemsCssClass'=>'list-group',
	'summaryCssClass'=>'text-right',
)); ?>


<!-- ////////////////////////////////////////////////// -->
<!-- Modal in order to update or create a detail record -->
<!-- ////////////////////////////////////////////////// -->
<div class="modal fade" id="rrhh-incapacidades-modal" tabindex="-1" role="rrhh-incapacidades-modal" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="fa fa-wheelchair"></i> <?php echo Yii::t('app','Incapacidades')?></h4>
        </div>
    	<div class="modal-body">
        	<?php echo $this->renderPartial('../rrhhIncapacidades/_detail_form',array('model'=>$rrhhincapacidades))?>
        </div>
        </div>
    </div>
</div>


<!-- ////////////////////////////////////////////////// -->
<!-- Modal in order to view detail of -->
<!-- ////////////////////////////////////////////////// -->
<div class="modal fade" id="rrhh-incapacidades-view-modal" tabindex="-1" role="rrhh-incapacidades-view-modal" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
           <h4 class="modal-title"><i class="fa fa-wheelchair"></i> <?php echo Yii::t('app','Incapacidades')?></h4>
        </div>
    	<div class="modal-body">
        	<?php echo $this->renderPartial('../rrhhIncapacidades/_detail_view',array('model'=>$rrhhincapacidades))?>
        </div>
        </div>
    </div>
</div>
<script>
$(function () {
	$(document).on('click', '[data-action=crud-rrhhincapacidades]', function (e) {
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
	   				$('#rrhh-incapacidades-form').attr('action',action);
					$('#RrhhIncapacidades_id').val(data.id);
					$('#RrhhIncapacidades_origen_licencias').val(data.origen_licencias);
					$('#RrhhIncapacidades_fecha_inicio').val(data.fecha_inicio);
					$('#RrhhIncapacidades_fecha_fin').val(data.fecha_fin);
					$('#RrhhIncapacidades_calcular_por').attr('checked',data.calcular_por);
					$('#RrhhIncapacidades_tiempo').val(data.tiempo);
					$('#RrhhIncapacidades_observacion').val(data.observacion);
					$('.stick-image').empty();
					$('#RrhhIncapacidades_imgen').val('');
					$('#RrhhIncapacidades_imgen').val(data.imgen);
					$('.stick-image.RrhhIncapacidades_imgen_img').html('<img class="img-responsive img-rounded" src="'+$('.RrhhIncapacidades_imgen_img').attr('data-url')+'/'+data.imgen+'" alt="">');
					$('#RrhhIncapacidades_orden_id').val(data.orden_id);
					$('#RrhhIncapacidades_rrhh_datos_empleado_id').val(data.rrhh_datos_empleado_id);
					$('.rrhh-incapacidades-submit').val('Guardar');
					$('#rrhh-incapacidades-modal').modal('show');
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
					$('#RrhhIncapacidades_id_label').html(data.id);
					$('#RrhhIncapacidades_origen_licencias_label').html(data.origen_licencias);
					$('#RrhhIncapacidades_fecha_inicio_label').html(data.fecha_inicio);
					$('#RrhhIncapacidades_fecha_fin_label').html(data.fecha_fin);
					$('#RrhhIncapacidades_calcular_por_label').html(data.calcular_por);
					$('#RrhhIncapacidades_tiempo_label').html(data.tiempo);
					$('#RrhhIncapacidades_observacion_label').html(data.observacion);
					$('#RrhhIncapacidades_imgen_label').html(data.imgen);
					$('#RrhhIncapacidades_orden_id_label').html(data.orden_id);
					$('#RrhhIncapacidades_rrhh_datos_empleado_id_label').html(data.rrhh_datos_empleado_id);
					$('#rrhh-incapacidades-view-modal').modal('show');
	   			}
	   		});
   		} 
   		
   		if(type==='create') {
				$('#rrhh-incapacidades-form').attr('action',action).each(function(i,v){
	              this.reset();
	            });
					$('.stick-image').empty();
					$('#RrhhIncapacidades_imgen').val('');
					$('.rrhh-incapacidades-submit').val('Crear');
	   				$('#rrhh-incapacidades-modal').modal('show');
   		}

   		if(type==='delete') {
			var name = $(this).attr('data-name');
		    bootbox.confirm("¿Está seguro que desea <strong>BORRAR</strong> el registro "+name+"?", function(result) {
		        if(result) {
		            $.ajax({
		                type: 'post',
		                url: action,
		                success:function (data) {
		                    $.fn.yiiListView.update('rrhh-incapacidades-list');
		                }
		            });
		        }
		    });
   		}
    });

	$("#rrhh-incapacidades-list ul").sortable({
    	update: function() {
    		var that = $(this);
			$('.loading').html('<i class="fa fa-refresh fa-spin"></i>');
    		setTimeout(function () {
	        	var order = that.sortable("toArray");
		        $.post('<?php echo $this->createUrl("rrhhincapacidades/order") ?>', {order: order}, function(datos){
	    			$('.loading').empty();
		        });
    		},500);
        }
    });
});
</script>