<?php
/* @var $this RrhhexamenmedicoController */
/* @var $model RrhhExamenMedico */


/* 
////////////////////////////////////////////////
// REPLACE THIS ON VIEW OR UPDATE CONTROLLER  //
////////////////////////////////////////////////

$model=$this->loadModel($id);

$rrhhexamenmedico=new RrhhExamenMedico;
$criteria=new CDbCriteria;
$criteria->compare('rrhh_datos_empleado_id',$id);
$rrhhexamenmedicoDataProvider=new CActiveDataProvider('RrhhExamenMedico',array(
	"criteria"=>$criteria,
));


$typeRender=Yii::app()->request->isAjaxRequest?"renderPartial":"render";
$this->{$typeRender}('view',array(
	'model'=>$model,
	'rrhhexamenmedico'=>$rrhhexamenmedico,
	'rrhhexamenmedicoDataProvider'=>$rrhhexamenmedicoDataProvider,
));

////////////////////////////////////////////////////////////
// PASTE THIS CONTENT ON THE VIE OF SAME CONTROLLER ABOVE //
////////////////////////////////////////////////////////////

<?php $this->renderPartial('../rrhhexamenmedico/view_embed',array(
	'model'=>$model,
	'rrhhexamenmedicoDataProvider'=>$rrhhexamenmedicoDataProvider,
	'rrhhexamenmedico'=>$rrhhexamenmedico,
))?>

 */
?>

<?php #if(count($rrhhexamenmedicoDataProvider->getData())<12):?>
<div class="col-lg-12 text-right">
<?php echo CHtml::link('<i class="fa fa-plus-circle"></i>', array('rrhhexamenmedico/create','rrhh_datos_empleado_id'=>$model->id), 
array('class'=>'btn btn-primary','data-action'=>'crud-rrhhexamenmedico','data-type'=>'create')); ?>
</div>
<?php #endif;?>

<h4><i class="fa fa-user-md"></i> <?php echo Yii::t('app','Examenes Medicos')?> <span class="loading"></span></h4>
<?php $this->widget('zii.widgets.CListView',array(
	'id'=>'rrhh-examen-medico-list',
	'dataProvider'=>$rrhhexamenmedicoDataProvider,
	'itemView'=>'../rrhhexamenmedico/_detail_each',
	'pager'=>array('htmlOptions'=>array('class'=>'pagination'),'header'=>false),
	'itemsTagName'=>'ul',
	'cssFile'=>false,
	'itemsCssClass'=>'list-group',
	'summaryCssClass'=>'text-right',
)); ?>


<!-- ////////////////////////////////////////////////// -->
<!-- Modal in order to update or create a detail record -->
<!-- ////////////////////////////////////////////////// -->
<div style="z-index:100000000" class="modal fade" id="rrhh-examen-medico-modal" tabindex="-1" role="rrhh-examen-medico-modal" aria-hidden="false">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="fa fa-user-md"></i> <?php echo Yii::t('app','Examenes Medicos')?></h4>
        </div>
    	<div class="modal-body">
        	<?php echo $this->renderPartial('../rrhhExamenMedico/_detail_form',array('model'=>$rrhhexamenmedico))?>
        </div>
        </div>
    </div>
</div>


<!-- ////////////////////////////////////////////////// -->
<!-- Modal in order to view detail of -->
<!-- ////////////////////////////////////////////////// -->
<div class="modal fade" id="rrhh-examen-medico-view-modal" tabindex="-1" role="rrhh-examen-medico-view-modal" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
           <h4 class="modal-title"><i class="fa fa-user-md"></i> <?php echo Yii::t('app','Examenes Medicos')?></h4>
        </div>
    	<div class="modal-body">
        	<?php echo $this->renderPartial('../rrhhExamenMedico/_detail_view',array('model'=>$rrhhexamenmedico))?>
        </div>
        </div>
    </div>
</div>
<script>
$(function () {
	$(document).on('click', '[data-action=crud-rrhhexamenmedico]', function (e) {
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
	   				$('#rrhh-examen-medico-form').attr('action',action);
					$('#RrhhExamenMedico_id').val(data.id);
					$('#RrhhExamenMedico_fecha').val(data.fecha);
					$('#RrhhExamenMedico_nombre_examen').val(data.nombre_examen);
					$('#RrhhExamenMedico_estado').attr('checked',data.estado);
					$('#RrhhExamenMedico_fecha_proximo_examen').val(data.fecha_proximo_examen);
					$('.stick-image').empty();
					$('#RrhhExamenMedico_imagen').val('');
					$('#RrhhExamenMedico_imagen').val(data.imagen);
					$('.stick-image.RrhhExamenMedico_imagen_img').html('<img class="img-responsive img-rounded" src="'+$('.RrhhExamenMedico_imagen_img').attr('data-url')+'/'+data.imagen+'" alt="">');
					$('#RrhhExamenMedico_orden_id').val(data.orden_id);
					$('#RrhhExamenMedico_rrhh_datos_empleado_id').val(data.rrhh_datos_empleado_id);
					$('.rrhh-examen-medico-submit').val('Guardar');
					$('#rrhh-examen-medico-modal').modal('show');
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
					$('#RrhhExamenMedico_id_label').html(data.id);
					$('#RrhhExamenMedico_fecha_label').html(data.fecha);
					$('#RrhhExamenMedico_nombre_examen_label').html(data.nombre_examen);
					$('#RrhhExamenMedico_estado_label').html(data.estado);
					$('#RrhhExamenMedico_fecha_proximo_examen_label').html(data.fecha_proximo_examen);
					$('#RrhhExamenMedico_imagen_label').html(data.imagen);
					$('#RrhhExamenMedico_orden_id_label').html(data.orden_id);
					$('#RrhhExamenMedico_rrhh_datos_empleado_id_label').html(data.rrhh_datos_empleado_id);
					$('#rrhh-examen-medico-view-modal').modal('show');
	   			}
	   		});
   		} 
   		
   		if(type==='create') {
				$('#rrhh-examen-medico-form').attr('action',action).each(function(i,v){
	              this.reset();
	            });
					$('.stick-image').empty();
					$('#RrhhExamenMedico_imagen').val('');
					$('.rrhh-examen-medico-submit').val('Crear');
	   				$('#rrhh-examen-medico-modal').modal('show');
   		}

   		if(type==='delete') {
			var name = $(this).attr('data-name');
		    bootbox.confirm("¿Está seguro que desea <strong>BORRAR</strong> el registro "+name+"?", function(result) {
		        if(result) {
		            $.ajax({
		                type: 'post',
		                url: action,
		                success:function (data) {
		                    $.fn.yiiListView.update('rrhh-examen-medico-list');
		                }
		            });
		        }
		    });
   		}
    });

	$("#rrhh-examen-medico-list ul").sortable({
    	update: function() {
    		var that = $(this);
			$('.loading').html('<i class="fa fa-refresh fa-spin"></i>');
    		setTimeout(function () {
	        	var order = that.sortable("toArray");
		        $.post('<?php echo $this->createUrl("rrhhexamenmedico/order") ?>', {order: order}, function(datos){
	    			$('.loading').empty();
		        });
    		},500);
        }
    });
});
</script>