<?php
/* @var $this RrhhVacacionesController */
/* @var $model RrhhVacaciones */

$this->breadcrumbs=array(
	'Rrhh Vacaciones'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List RrhhVacaciones', 'url'=>array('index')),
	array('label'=>'Create RrhhVacaciones', 'url'=>array('create')),
	array('label'=>'View RrhhVacaciones', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage RrhhVacaciones', 'url'=>array('admin')),
);
?>

<h1>Update RrhhVacaciones <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>