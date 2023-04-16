<?php
/* @var $this RrhhIncapacidadesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rrhh Incapacidades',
);

$this->menu=array(
	array('label'=>'Create RrhhIncapacidades', 'url'=>array('create')),
	array('label'=>'Manage RrhhIncapacidades', 'url'=>array('admin')),
);
?>

<h1>Rrhh Incapacidades</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
