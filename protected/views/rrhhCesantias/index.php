<?php
/* @var $this RrhhCesantiasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rrhh Cesantiases',
);

$this->menu=array(
	array('label'=>'Create RrhhCesantias', 'url'=>array('create')),
	array('label'=>'Manage RrhhCesantias', 'url'=>array('admin')),
);
?>

<h1>Rrhh Cesantiases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
