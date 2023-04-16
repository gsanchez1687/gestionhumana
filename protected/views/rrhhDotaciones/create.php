<?php
/* @var $this RrhhDotacionesController */
/* @var $model RrhhDotaciones */

$this->breadcrumbs=array(
	'Rrhh Dotaciones'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RrhhDotaciones', 'url'=>array('index')),
	array('label'=>'Manage RrhhDotaciones', 'url'=>array('admin')),
);
?>

<h1>Create RrhhDotaciones</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>