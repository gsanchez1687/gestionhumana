<?php
/* @var $this RrhhveneficiosextralegalesController */
/* @var $model RrhhVeneficiosExtralegales */


/* 
////////////////////////////////////////////////
// REPLACE THIS ON VIEW OR UPDATE CONTROLLER  //
////////////////////////////////////////////////

$model=$this->loadModel($id);

$rrhhVeneficiosExtralegales=new RrhhVeneficiosExtralegales;
$criteria=new CDbCriteria;
$criteria->compare('rrhh_datos_empleado_id',$id);
$rrhhVeneficiosExtralegalesDataProvider=new CActiveDataProvider('RrhhVeneficiosExtralegales',array(
	"criteria"=>$criteria,
));


$typeRender=Yii::app()->request->isAjaxRequest?"renderPartial":"render";
$this->{$typeRender}('view',array(
	'model'=>$model,
	'rrhhVeneficiosExtralegales'=>$rrhhVeneficiosExtralegales,
	'rrhhVeneficiosExtralegalesDataProvider'=>$rrhhVeneficiosExtralegalesDataProvider,
));

////////////////////////////////////////////////////////////
// PASTE THIS CONTENT ON THE VIE OF SAME CONTROLLER ABOVE //
////////////////////////////////////////////////////////////

<?php $this->renderPartial('../rrhhVeneficiosExtralegales/view_embed',array(
	'model'=>$model,
	'rrhhVeneficiosExtralegalesDataProvider'=>$rrhhVeneficiosExtralegalesDataProvider,
	'rrhhVeneficiosExtralegales'=>$rrhhVeneficiosExtralegales,
))?>

 */
?>

<?php #if(count($rrhhVeneficiosExtralegalesDataProvider->getData())<12):?>
<div class="col-lg-12 text-right">
<?php echo CHtml::link('<i class="fa fa-plus-circle"></i>', array('rrhhVeneficiosExtralegales/create','rrhh_datos_empleado_id'=>$model->id), 
array('class'=>'btn btn-primary','data-action'=>'crud-rrhhVeneficiosExtralegales','data-type'=>'create')); ?>
</div>
<?php #endif;?>

<?php $this->widget('zii.widgets.CListView',array(
	'id'=>'rrhh-veneficios-extralegales-list',
	'dataProvider'=>$rrhhveneficiosextralegalesDataProvider,
	'itemView'=>'../rrhhVeneficiosExtralegales/_detail_each',
	'pager'=>array('htmlOptions'=>array('class'=>'pagination'),'header'=>false),
	'itemsTagName'=>'ul',
	'cssFile'=>false,
	'itemsCssClass'=>'list-group',
	'summaryCssClass'=>'text-right',
)); ?>


<!-- ////////////////////////////////////////////////// -->
<!-- Modal in order to update or create a detail record -->
<!-- ////////////////////////////////////////////////// -->
<div class="modal fade" id="rrhh-veneficios-extralegales-modal" tabindex="-1" role="rrhh-veneficios-extralegales-modal" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="fa fa-money"></i> <?php echo Yii::t('app','Beneficios  Extra legales ')?></h4>
        </div>
    	<div class="modal-body">
        	<?php echo $this->renderPartial('../rrhhVeneficiosExtralegales/_detail_form',array('model'=>$rrhhveneficiosextralegales))?>
        </div>
        </div>
    </div>
</div>


<!-- ////////////////////////////////////////////////// -->
<!-- Modal in order to view detail of -->
<!-- ////////////////////////////////////////////////// -->
<div class="modal fade" id="rrhh-veneficios-extralegales-view-modal" tabindex="-1" role="rrhh-veneficios-extralegales-view-modal" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
           <h4 class="modal-title"><i class="fa fa-money"></i> <?php echo Yii::t('app','Beneficios  Extra legales ')?></h4>
        </div>
    	<div class="modal-body">
        	<?php echo $this->renderPartial('../rrhhVeneficiosExtralegales/_detail_view',array('model'=>$rrhhveneficiosextralegales))?>
        </div>
        </div>
    </div>
</div>
<script>
$(function () {
	$(document).on('click', '[data-action=crud-rrhhVeneficiosExtralegales]', function (e) {
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
	   				$('#rrhh-veneficios-extralegales-form').attr('action',action);
					$('#RrhhVeneficiosExtralegales_id').val(data.id);
					$('#RrhhVeneficiosExtralegales_nombre').val(data.nombre);
					$('#RrhhVeneficiosExtralegales_valor').val(data.valor);
					$('#RrhhVeneficiosExtralegales_orden_id').val(data.orden_id);
					$('#RrhhVeneficiosExtralegales_rrhh_datos_empleado_id').val(data.rrhh_datos_empleado_id);
					$('.rrhh-veneficios-extralegales-submit').val('Guardar');
					$('#rrhh-veneficios-extralegales-modal').modal('show');
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
					$('#RrhhVeneficiosExtralegales_id_label').html(data.id);
					$('#RrhhVeneficiosExtralegales_nombre_label').html(data.nombre);
					$('#RrhhVeneficiosExtralegales_valor_label').html(data.valor);
					$('#RrhhVeneficiosExtralegales_orden_id_label').html(data.orden_id);
					$('#RrhhVeneficiosExtralegales_rrhh_datos_empleado_id_label').html(data.rrhh_datos_empleado_id);
					$('#rrhh-veneficios-extralegales-view-modal').modal('show');
	   			}
	   		});
   		} 
   		
   		if(type==='create') {
				$('#rrhh-veneficios-extralegales-form').attr('action',action).each(function(i,v){
	              this.reset();
	            });
					$('.rrhh-veneficios-extralegales-submit').val('Crear');
	   				$('#rrhh-veneficios-extralegales-modal').modal('show');
   		}

   		if(type==='delete') {
			var name = $(this).attr('data-name');
		    bootbox.confirm("¿Está seguro que desea <strong>BORRAR</strong> el registro "+name+"?", function(result) {
		        if(result) {
		            $.ajax({
		                type: 'post',
		                url: action,
		                success:function (data) {
		                    $.fn.yiiListView.update('rrhh-veneficios-extralegales-list');
		                }
		            });
		        }
		    });
   		}
    });

	$("#rrhh-veneficios-extralegales-list ul").sortable({
    	update: function() {
    		var that = $(this);
			$('.loading').html('<i class="fa fa-refresh fa-spin"></i>');
    		setTimeout(function () {
	        	var order = that.sortable("toArray");
		        $.post('<?php echo $this->createUrl("rrhhVeneficiosExtralegales/order") ?>', {order: order}, function(datos){
	    			$('.loading').empty();
		        });
    		},500);
        }
    });
});
</script>