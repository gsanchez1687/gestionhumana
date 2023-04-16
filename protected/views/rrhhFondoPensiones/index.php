<?php
/* @var $this RrhhFondoPensionesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rrhh Fondo Pensiones',
);

$this->menu=array(
	array('label'=>'Create RrhhFondoPensiones', 'url'=>array('create')),
	array('label'=>'Manage RrhhFondoPensiones', 'url'=>array('admin')),
);
?>

<h1>Rrhh Fondo Pensiones</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
