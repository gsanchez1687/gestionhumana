<?php
/* @var $this RrhhVeneficiosExtralegalesController */
/* @var $model RrhhVeneficiosExtralegales */

$this->breadcrumbs=array(
	'Rrhh Veneficios Extralegales'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List RrhhVeneficiosExtralegales', 'url'=>array('index')),
	array('label'=>'Create RrhhVeneficiosExtralegales', 'url'=>array('create')),
	array('label'=>'Update RrhhVeneficiosExtralegales', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete RrhhVeneficiosExtralegales', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RrhhVeneficiosExtralegales', 'url'=>array('admin')),
);
?>

<h1>View RrhhVeneficiosExtralegales #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'valor',
		'orden_id',
		'rrhh_datos_empleado_id',
	),
)); ?>
