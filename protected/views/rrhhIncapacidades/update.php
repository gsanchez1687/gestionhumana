<?php
/* @var $this RrhhIncapacidadesController */
/* @var $model RrhhIncapacidades */

$this->breadcrumbs=array(
	'Rrhh Incapacidades'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List RrhhIncapacidades', 'url'=>array('index')),
	array('label'=>'Create RrhhIncapacidades', 'url'=>array('create')),
	array('label'=>'View RrhhIncapacidades', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage RrhhIncapacidades', 'url'=>array('admin')),
);
?>

<h1>Update RrhhIncapacidades <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>