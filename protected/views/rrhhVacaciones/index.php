<?php
/* @var $this RrhhVacacionesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rrhh Vacaciones',
);

$this->menu=array(
	array('label'=>'Create RrhhVacaciones', 'url'=>array('create')),
	array('label'=>'Manage RrhhVacaciones', 'url'=>array('admin')),
);
?>

<h1>Rrhh Vacaciones</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
