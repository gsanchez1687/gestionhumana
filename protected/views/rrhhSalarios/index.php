<?php
/* @var $this RrhhSalariosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rrhh Salarioses',
);

$this->menu=array(
	array('label'=>'Create RrhhSalarios', 'url'=>array('create')),
	array('label'=>'Manage RrhhSalarios', 'url'=>array('admin')),
);
?>

<h1>Rrhh Salarioses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
