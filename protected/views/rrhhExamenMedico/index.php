<?php
/* @var $this RrhhExamenMedicoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rrhh Examen Medicos',
);

$this->menu=array(
	array('label'=>'Create RrhhExamenMedico', 'url'=>array('create')),
	array('label'=>'Manage RrhhExamenMedico', 'url'=>array('admin')),
);
?>

<h1>Rrhh Examen Medicos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
