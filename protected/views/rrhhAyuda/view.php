<?php
/* @var $this RrhhAyudaController */
/* @var $model RrhhAyuda */

$this->breadcrumbs=array(
	'Rrhh Ayudas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List RrhhAyuda', 'url'=>array('index')),
	array('label'=>'Create RrhhAyuda', 'url'=>array('create')),
	array('label'=>'Update RrhhAyuda', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete RrhhAyuda', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RrhhAyuda', 'url'=>array('admin')),
);
?>

<h1>View RrhhAyuda #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
	),
)); ?>
