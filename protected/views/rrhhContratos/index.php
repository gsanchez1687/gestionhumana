<?php
/* @var $this RrhhContratosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rrhh Contratoses',
);

$this->menu=array(
	array('label'=>'Create RrhhContratos', 'url'=>array('create')),
	array('label'=>'Manage RrhhContratos', 'url'=>array('admin')),
);
?>

<h1>Rrhh Contratoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
