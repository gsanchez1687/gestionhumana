<?php
/* @var $this RrhhIncapacidadesController */
/* @var $model RrhhIncapacidades */

$this->breadcrumbs=array(
	'Rrhh Incapacidades'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List RrhhIncapacidades', 'url'=>array('index')),
	array('label'=>'Create RrhhIncapacidades', 'url'=>array('create')),
	array('label'=>'Update RrhhIncapacidades', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete RrhhIncapacidades', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RrhhIncapacidades', 'url'=>array('admin')),
);
?>

<h1>View RrhhIncapacidades #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'origen_licencias',
		'fecha_inicio',
		'fecha_fin',
		'calcular_por',
		'tiempo',
		'observacion',
		'imgen',
		'orden_id',
		'rrhh_datos_empleado_id',
	),
)); ?>
