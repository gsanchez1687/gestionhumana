<?php
/* @var $this RrhhArlController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rrhh Arls',
);

$this->menu=array(
	array('label'=>'Create RrhhArl', 'url'=>array('create')),
	array('label'=>'Manage RrhhArl', 'url'=>array('admin')),
);
?>

<h1>Rrhh Arls</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
