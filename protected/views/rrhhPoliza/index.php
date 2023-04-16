<?php
/* @var $this RrhhPolizaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rrhh Polizas',
);

$this->menu=array(
	array('label'=>'Create RrhhPoliza', 'url'=>array('create')),
	array('label'=>'Manage RrhhPoliza', 'url'=>array('admin')),
);
?>

<h1>Rrhh Polizas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
