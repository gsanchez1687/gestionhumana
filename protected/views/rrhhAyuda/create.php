<?php
/* @var $this RrhhAyudaController */
/* @var $model RrhhAyuda */

$this->breadcrumbs=array(
	'Rrhh Ayudas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RrhhAyuda', 'url'=>array('index')),
	array('label'=>'Manage RrhhAyuda', 'url'=>array('admin')),
);
?>

<h1>Create RrhhAyuda</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>