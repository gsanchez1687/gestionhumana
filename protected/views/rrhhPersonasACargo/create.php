<?php
/* @var $this RrhhPersonasACargoController */
/* @var $model RrhhPersonasACargo */

$this->breadcrumbs=array(
	'Rrhh Personas Acargos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RrhhPersonasACargo', 'url'=>array('index')),
	array('label'=>'Manage RrhhPersonasACargo', 'url'=>array('admin')),
);
?>

<h1>Create RrhhPersonasACargo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>