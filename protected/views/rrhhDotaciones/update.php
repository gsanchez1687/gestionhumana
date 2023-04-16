<?php
/* @var $this RrhhDotacionesController */
/* @var $model RrhhDotaciones */

$this->breadcrumbs=array(
	'Rrhh Dotaciones'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List RrhhDotaciones', 'url'=>array('index')),
	array('label'=>'Create RrhhDotaciones', 'url'=>array('create')),
	array('label'=>'View RrhhDotaciones', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage RrhhDotaciones', 'url'=>array('admin')),
);
?>

<h1>Update RrhhDotaciones <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>