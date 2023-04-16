<?php
/* @var $this RrhhCargosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rrhh Cargoses',
);

$this->menu=array(
	array('label'=>'Create RrhhCargos', 'url'=>array('create')),
	array('label'=>'Manage RrhhCargos', 'url'=>array('admin')),
);
?>

<h1>Rrhh Cargoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
