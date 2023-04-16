<?php
/* @var $this RrhhAreaODepartamentosController */
/* @var $model RrhhAreaODepartamentos */

$this->breadcrumbs=array(
	'Rrhh Area Odepartamentoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RrhhAreaODepartamentos', 'url'=>array('index')),
	array('label'=>'Manage RrhhAreaODepartamentos', 'url'=>array('admin')),
);
?>

<h1>Crear Area/Departamento</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>