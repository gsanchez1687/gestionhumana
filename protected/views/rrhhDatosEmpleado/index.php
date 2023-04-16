<?php
/* @var $this RrhhDatosEmpleadoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rrhh Datos Empleados',
);

$this->menu=array(
	array('label'=>'Create RrhhDatosEmpleado', 'url'=>array('create')),
	array('label'=>'Manage RrhhDatosEmpleado', 'url'=>array('admin')),
);
?>

<h1>Rrhh Datos Empleados</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
