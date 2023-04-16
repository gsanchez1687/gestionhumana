<?php
/* @var $this RrhhAreaODepartamentosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rrhh Area Odepartamentoses',
);

$this->menu=array(
	array('label'=>'Create RrhhAreaODepartamentos', 'url'=>array('create')),
	array('label'=>'Manage RrhhAreaODepartamentos', 'url'=>array('admin')),
);
?>

<h1>Rrhh Area Odepartamentoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
