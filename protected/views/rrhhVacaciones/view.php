<?php
/* @var $this RrhhVacacionesController */
/* @var $model RrhhVacaciones */

$this->breadcrumbs=array(
	'Rrhh Vacaciones'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List RrhhVacaciones', 'url'=>array('index')),
	array('label'=>'Create RrhhVacaciones', 'url'=>array('create')),
	array('label'=>'Update RrhhVacaciones', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete RrhhVacaciones', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RrhhVacaciones', 'url'=>array('admin')),
);
?>

<h1>View RrhhVacaciones #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'dias_tomados',
		'periodo_afectado',
		'fecha_salida',
		'fecha_reintegro',
		'rrhh_datos_empleado_id',
		'imagen',
		'orden_id',
	),
)); ?>
