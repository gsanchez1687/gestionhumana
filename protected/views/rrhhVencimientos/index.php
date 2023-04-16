<?php
/* @var $this RrhhVencimientosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rrhh Vencimientoses',
);

$this->menu=array(
	array('label'=>'Create RrhhVencimientos', 'url'=>array('create')),
	array('label'=>'Manage RrhhVencimientos', 'url'=>array('admin')),
);
?>

<h1>Rrhh Vencimientoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
