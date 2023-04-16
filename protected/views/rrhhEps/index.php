<?php
/* @var $this RrhhEpsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rrhh Eps',
);

$this->menu=array(
	array('label'=>'Create RrhhEps', 'url'=>array('create')),
	array('label'=>'Manage RrhhEps', 'url'=>array('admin')),
);
?>

<h1>Rrhh Eps</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
