<?php
/* @var $this RrhhAyudaController */
/* @var $model RrhhAyuda */

$this->breadcrumbs=array(
	'Rrhh Ayudas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List RrhhAyuda', 'url'=>array('index')),
	array('label'=>'Create RrhhAyuda', 'url'=>array('create')),
	array('label'=>'View RrhhAyuda', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage RrhhAyuda', 'url'=>array('admin')),
);
?>

<h1>Update RrhhAyuda <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>