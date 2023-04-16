<?php
/* @var $this RrhhVeneficiosExtralegalesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rrhh Veneficios Extralegales',
);

$this->menu=array(
	array('label'=>'Create RrhhVeneficiosExtralegales', 'url'=>array('create')),
	array('label'=>'Manage RrhhVeneficiosExtralegales', 'url'=>array('admin')),
);
?>

<h1>Rrhh Veneficios Extralegales</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
