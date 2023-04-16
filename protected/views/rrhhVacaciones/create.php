<?php
/* @var $this RrhhVacacionesController */
/* @var $model RrhhVacaciones */

$this->breadcrumbs=array(
	'Rrhh Vacaciones'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RrhhVacaciones', 'url'=>array('index')),
	array('label'=>'Manage RrhhVacaciones', 'url'=>array('admin')),
);
?>

<h1>Create RrhhVacaciones</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>