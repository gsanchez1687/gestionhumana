<?php
/* @var $this RrhhNombreExamenesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rrhh Nombre Examenes',
);

$this->menu=array(
	array('label'=>'Create RrhhNombreExamenes', 'url'=>array('create')),
	array('label'=>'Manage RrhhNombreExamenes', 'url'=>array('admin')),
);
?>

<h1>Rrhh Nombre Examenes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
