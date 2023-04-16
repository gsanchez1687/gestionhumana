<?php
/* @var $this RrhhCesantiasController */
/* @var $model RrhhCesantias */

$this->breadcrumbs=array(
	'Rrhh Cesantiases'=>array('index'),
	$model->id,
);

?>
<div class="row">
    <div class="col-xs-12 col-md-10 col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading navbar-tool">
                <h1>Cesantias <?php //echo $model->id; ?></h1>
                <div class="actions pull-right">
					<i class="fa fa-expand"></i>
                    <i class="fa fa-chevron-down"></i>
                    <i class="fa fa-times"></i>
                </div>
            </div>
            <div class="panel-footer">         
            	<div class="btn-group">
                     <?php echo CHtml::link('Nuevo', array('rrhhCesantias/create'), array('class' => 'btn btn-info')); ?>                      
                     <?php echo CHtml::link('Actualizar', array('rrhhCesantias/update/'.$model->id), array('class' => 'btn btn-square btn-info')); ?>                      
                     <?php echo CHtml::link('Listado', array('rrhhCesantias/admin'), array('class' => 'btn btn-square btn-info')); ?>                      
                </div>
            </div>
            <div class="panel-body">
         
            </div>
        </div>
    </div>
</div>


<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'nit',
		'codigo',
		'orden_id',
	),
)); ?>
