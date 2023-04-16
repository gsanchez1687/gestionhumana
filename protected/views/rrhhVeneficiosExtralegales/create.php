<?php
/* @var $this RrhhVeneficiosExtralegalesController */
/* @var $model RrhhVeneficiosExtralegales */

$this->breadcrumbs=array(
	'Rrhh Veneficios Extralegales'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RrhhVeneficiosExtralegales', 'url'=>array('index')),
	array('label'=>'Manage RrhhVeneficiosExtralegales', 'url'=>array('admin')),
);
?>

<h1>Create RrhhVeneficiosExtralegales</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>