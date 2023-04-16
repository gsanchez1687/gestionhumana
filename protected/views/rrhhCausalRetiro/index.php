<?php
/* @var $this RrhhCausalRetiroController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rrhh Causal Retiros',
);

$this->menu=array(
	array('label'=>'Create RrhhCausalRetiro', 'url'=>array('create')),
	array('label'=>'Manage RrhhCausalRetiro', 'url'=>array('admin')),
);
?>

<h1>Rrhh Causal Retiros</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
