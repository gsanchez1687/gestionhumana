<?php
/* @var $this RrhhAyudaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rrhh Ayudas',
);

$this->menu=array(
	array('label'=>'Create RrhhAyuda', 'url'=>array('create')),
	array('label'=>'Manage RrhhAyuda', 'url'=>array('admin')),
);
?>

<h1>Rrhh Ayudas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
