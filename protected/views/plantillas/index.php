<?php
/* @var $this PlantillasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Plantillases',
);

$this->menu=array(
	array('label'=>'Create Plantillas', 'url'=>array('create')),
	array('label'=>'Manage Plantillas', 'url'=>array('admin')),
);
?>

<h1>Plantillases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
