<?php
/* @var $this RrhhTipoContratoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rrhh Tipo Contratos',
);

$this->menu=array(
	array('label'=>'Create RrhhTipoContrato', 'url'=>array('create')),
	array('label'=>'Manage RrhhTipoContrato', 'url'=>array('admin')),
);
?>

<h1>Rrhh Tipo Contratos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
