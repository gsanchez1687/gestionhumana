<?php
/* @var $this RrhhTiposVencimientosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rrhh Tipos Vencimientoses',
);

$this->menu=array(
	array('label'=>'Create RrhhTiposVencimientos', 'url'=>array('create')),
	array('label'=>'Manage RrhhTiposVencimientos', 'url'=>array('admin')),
);
?>

<h1>Rrhh Tipos Vencimientoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
