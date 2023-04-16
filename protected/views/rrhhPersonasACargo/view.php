<?php
/* @var $this RrhhPersonasACargoController */
/* @var $model RrhhPersonasACargo */

$this->breadcrumbs=array(
	'Rrhh Personas Acargos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List RrhhPersonasACargo', 'url'=>array('index')),
	array('label'=>'Create RrhhPersonasACargo', 'url'=>array('create')),
	array('label'=>'Update RrhhPersonasACargo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete RrhhPersonasACargo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RrhhPersonasACargo', 'url'=>array('admin')),
);
?>

<h1>View RrhhPersonasACargo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'parentesco',
		'tipo_documento',
		'identificacion',
		'fecha_nacimiento',
		'edad',
		'sexo',
		'orden_id',
		'rrhh_datos_empleado_id',
	),
)); ?>
