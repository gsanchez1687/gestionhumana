<?php
/* @var $this RrhhDotacionesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rrhh Dotaciones',
);

$this->menu=array(
	array('label'=>'Create RrhhDotaciones', 'url'=>array('create')),
	array('label'=>'Manage RrhhDotaciones', 'url'=>array('admin')),
);
?>

<h1>Rrhh Dotaciones</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
