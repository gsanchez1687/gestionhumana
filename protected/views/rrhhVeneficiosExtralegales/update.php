<?php
/* @var $this RrhhVeneficiosExtralegalesController */
/* @var $model RrhhVeneficiosExtralegales */

$this->breadcrumbs=array(
	'Rrhh Veneficios Extralegales'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List RrhhVeneficiosExtralegales', 'url'=>array('index')),
	array('label'=>'Create RrhhVeneficiosExtralegales', 'url'=>array('create')),
	array('label'=>'View RrhhVeneficiosExtralegales', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage RrhhVeneficiosExtralegales', 'url'=>array('admin')),
);
?>

<h1>Update RrhhVeneficiosExtralegales <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>