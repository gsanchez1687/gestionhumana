<?php
/* @var $this RrhhIncapacidadesController */
/* @var $model RrhhIncapacidades */

$this->breadcrumbs=array(
	'Rrhh Incapacidades'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RrhhIncapacidades', 'url'=>array('index')),
	array('label'=>'Manage RrhhIncapacidades', 'url'=>array('admin')),
);
?>

<h1>Create RrhhIncapacidades</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>