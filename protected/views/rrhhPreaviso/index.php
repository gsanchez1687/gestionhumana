<?php
/* @var $this RrhhPreavisoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rrhh Preavisos',
);

$this->menu=array(
	array('label'=>'Create RrhhPreaviso', 'url'=>array('create')),
	array('label'=>'Manage RrhhPreaviso', 'url'=>array('admin')),
);
?>

<h1>Rrhh Preavisos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
