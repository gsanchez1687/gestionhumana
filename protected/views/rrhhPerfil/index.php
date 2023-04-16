<?php
/* @var $this RrhhPerfilController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rrhh Perfils',
);

$this->menu=array(
	array('label'=>'Create RrhhPerfil', 'url'=>array('create')),
	array('label'=>'Manage RrhhPerfil', 'url'=>array('admin')),
);
?>

<h1>Rrhh Perfils</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
