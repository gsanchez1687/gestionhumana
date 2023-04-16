<?php
/* @var $this RrhhCentroCostoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rrhh Centro Costos',
);

$this->menu=array(
	array('label'=>'Create RrhhCentroCosto', 'url'=>array('create')),
	array('label'=>'Manage RrhhCentroCosto', 'url'=>array('admin')),
);
?>

<h1>Rrhh Centro Costos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
