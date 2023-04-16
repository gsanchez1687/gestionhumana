<?php
/* @var $this RrhhCajaCompensacionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rrhh Caja Compensacions',
);

$this->menu=array(
	array('label'=>'Create RrhhCajaCompensacion', 'url'=>array('create')),
	array('label'=>'Manage RrhhCajaCompensacion', 'url'=>array('admin')),
);
?>

<h1>Rrhh Caja Compensacions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
