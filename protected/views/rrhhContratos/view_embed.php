<?php
/* @var $this ContratosController */
/* @var $model RrhhContratos */


/* 
////////////////////////////////////////////////
// REPLACE THIS ON VIEW OR UPDATE CONTROLLER  //
////////////////////////////////////////////////

$model=$this->loadModel($id);

$contratos=new RrhhContratos;
$criteria=new CDbCriteria;
$criteria->compare('rrhh_datos_empleado_id',$id);
$contratosDataProvider=new CActiveDataProvider('RrhhContratos',array(
	"criteria"=>$criteria,
));


$typeRender=Yii::app()->request->isAjaxRequest?"renderPartial":"render";
$this->{$typeRender}('view',array(
	'model'=>$model,
	'contratos'=>$contratos,
	'contratosDataProvider'=>$contratosDataProvider,
));

////////////////////////////////////////////////////////////
// PASTE THIS CONTENT ON THE VIE OF SAME CONTROLLER ABOVE //
////////////////////////////////////////////////////////////

<?php $this->renderPartial('../contratos/view_embed',array(
	'model'=>$model,
	'contratosDataProvider'=>$contratosDataProvider,
	'contratos'=>$contratos,
))?>

 */
?>

<?php #if(count($contratosDataProvider->getData())<12):?>
<div class="col-lg-12 text-right">
<?php // echo CHtml::link('<i class="fa fa-plus-circle"></i>', array('contratos/create','rrhh_datos_empleado_id'=>$model->id), 
//array('class'=>'btn btn-primary','data-action'=>'crud-contratos','data-type'=>'create')); ?>
</div>
<?php #endif;?>

<h4><i class="fa fa-mobile"></i> <?php echo Yii::t('app','Contratos')?> <span class="loading"></span></h4>
<?php 
    $this->widget('zii.widgets.CListView',array(
	'id'=>'rrhh-contratos-list',
	'dataProvider'=>$contratosDataProvider,
	'itemView'=>'../rrhhContratos/_detail_each',
	'pager'=>array('htmlOptions'=>array('class'=>'pagination'),'header'=>false),
	'itemsTagName'=>'ul',
	'cssFile'=>false,
	'itemsCssClass'=>'list-group',
	'summaryCssClass'=>'text-right',
));
        ?>


<!-- ////////////////////////////////////////////////// -->
<!-- Modal in order to update or create a detail record -->
<!-- ////////////////////////////////////////////////// -->
<div class="modal fade" id="rrhh-contratos-modal" tabindex="-1" role="rrhh-contratos-modal" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="fa fa-mobile"></i> <?php echo Yii::t('app','Contratos')?></h4>
        </div>
    	<div class="modal-body">
        	<?php echo $this->renderPartial('../rrhhContratos/_form',array('model'=>$contratos))?>
        </div>
        </div>
    </div>
</div>


<!-- ////////////////////////////////////////////////// -->
<!-- Modal in order to view detail of -->
<!-- ////////////////////////////////////////////////// -->
<div class="modal fade" id="rrhh-contratos-view-modal" tabindex="-1" role="rrhh-contratos-view-modal" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
           <h4 class="modal-title"><i class="fa fa-mobile"></i> <?php echo Yii::t('app','Contratos')?></h4>
        </div>
    	<div class="modal-body">
        	<?php echo $this->renderPartial('../rrhhContratos/_detail_view',array('model'=>$contratos))?>
        </div>
        </div>
    </div>
</div>
<script>
$(function () {
	$(document).on('click', '[data-action=crud-contratos]', function (e) {
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
	   				$('#rrhh-contratos-form').attr('action',action);
					$('#RrhhContratos_id').val(data.id);
					$('#RrhhContratos_tipo_contrato').val(data.tipo_contrato);
					$('#RrhhContratos_fecha_inicio').val(data.fecha_inicio);
					$('#RrhhContratos_fecha_terminacion').val(data.fecha_terminacion);
					$('#RrhhContratos_duracion').val(data.duracion);
					$('#RrhhContratos_valor_salario').val(data.valor_salario);
					$('#RrhhContratos_fecha_preaviso').val(data.fecha_preaviso);
					$('#RrhhContratos_estado').attr('checked',data.estado);
					$('#RrhhContratos_observacion').val(data.observacion);
					$('#RrhhContratos_orden_id').val(data.orden_id);
					$('#RrhhContratos_rrhh_centro_costo_id').val(data.rrhh_centro_costo_id);
					$('#RrhhContratos_rrhh_punto_operacion_id').val(data.rrhh_punto_operacion_id);
					$('#RrhhContratos_rrhh_perfil_id').val(data.rrhh_perfil_id);
					$('#RrhhContratos_rrhh_datos_empleado_id').val(data.rrhh_datos_empleado_id);
					$('#RrhhContratos_contrato_firmado_en_pdf').val(data.contrato_firmado_en_pdf);
					$('.rrhh-contratos-submit').val('Guardar');
					$('#rrhh-contratos-modal').modal('show');
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
					$('#RrhhContratos_id_label').html(data.id);
					$('#RrhhContratos_tipo_contrato_label').html(data.tipo_contrato);
					$('#RrhhContratos_fecha_inicio_label').html(data.fecha_inicio);
					$('#RrhhContratos_fecha_terminacion_label').html(data.fecha_terminacion);
					$('#RrhhContratos_duracion_label').html(data.duracion);
					$('#RrhhContratos_valor_salario_label').html(data.valor_salario);
					$('#RrhhContratos_fecha_preaviso_label').html(data.fecha_preaviso);
					$('#RrhhContratos_estado_label').html(data.estado);
					$('#RrhhContratos_observacion_label').html(data.observacion);
					$('#RrhhContratos_orden_id_label').html(data.orden_id);
					$('#RrhhContratos_rrhh_centro_costo_id_label').html(data.rrhh_centro_costo_id);
					$('#RrhhContratos_rrhh_punto_operacion_id_label').html(data.rrhh_punto_operacion_id);
					$('#RrhhContratos_rrhh_perfil_id_label').html(data.rrhh_perfil_id);
					$('#RrhhContratos_rrhh_datos_empleado_id_label').html(data.rrhh_datos_empleado_id);
					$('#RrhhContratos_contrato_firmado_en_pdf_label').html(data.contrato_firmado_en_pdf);
					$('#rrhh-contratos-view-modal').modal('show');
	   			}
	   		});
   		} 
   		
   		if(type==='create') {
				$('#rrhh-contratos-form').attr('action',action).each(function(i,v){
	              this.reset();
	            });
					$('.rrhh-contratos-submit').val('Crear');
	   				$('#rrhh-contratos-modal').modal('show');
   		}

   		if(type==='delete') {
			var name = $(this).attr('data-name');
		    bootbox.confirm("¿Está seguro que desea <strong>BORRAR</strong> el registro "+name+"?", function(result) {
		        if(result) {
		            $.ajax({
		                type: 'post',
		                url: action,
		                success:function (data) {
		                    $.fn.yiiListView.update('rrhh-contratos-list');
		                }
		            });
		        }
		    });
   		}
    });

	$("#rrhh-contratos-list ul").sortable({
    	update: function() {
    		var that = $(this);
			$('.loading').html('<i class="fa fa-refresh fa-spin"></i>');
    		setTimeout(function () {
	        	var order = that.sortable("toArray");
		        $.post('<?php echo $this->createUrl("rrhhContratos/order") ?>', {order: order}, function(datos){
	    			$('.loading').empty();
		        });
    		},500);
        }
    });
});
</script>