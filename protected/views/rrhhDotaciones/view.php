<?php
/* @var $this RrhhDotacionesController */
/* @var $model RrhhDotaciones */

$this->breadcrumbs=array(
	'Rrhh Dotaciones'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List RrhhDotaciones', 'url'=>array('index')),
	array('label'=>'Create RrhhDotaciones', 'url'=>array('create')),
	array('label'=>'Update RrhhDotaciones', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete RrhhDotaciones', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RrhhDotaciones', 'url'=>array('admin')),
);
?>

<h1>View RrhhDotaciones #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'fecha',
		'observacion',
		'comprobante',
		'orden_id',
		'rrhh_datos_empleado_id',
	),
)); ?>
