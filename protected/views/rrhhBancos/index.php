<?php
/* @var $this RrhhBancosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rrhh Bancoses',
);

$this->menu=array(
	array('label'=>'Create RrhhBancos', 'url'=>array('create')),
	array('label'=>'Manage RrhhBancos', 'url'=>array('admin')),
);
?>

<h1>Rrhh Bancoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
