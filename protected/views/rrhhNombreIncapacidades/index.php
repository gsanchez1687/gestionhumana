<?php
/* @var $this RrhhNombreIncapacidadesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rrhh Nombre Incapacidades',
);

$this->menu=array(
	array('label'=>'Create RrhhNombreIncapacidades', 'url'=>array('create')),
	array('label'=>'Manage RrhhNombreIncapacidades', 'url'=>array('admin')),
);
?>

<h1>Rrhh Nombre Incapacidades</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
