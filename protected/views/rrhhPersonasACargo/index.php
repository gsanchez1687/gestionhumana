<?php
/* @var $this RrhhPersonasACargoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rrhh Personas Acargos',
);

$this->menu=array(
	array('label'=>'Create RrhhPersonasACargo', 'url'=>array('create')),
	array('label'=>'Manage RrhhPersonasACargo', 'url'=>array('admin')),
);
?>

<h1>Rrhh Personas Acargos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
