<?php
/* @var $this RrhhPersonasACargoController */
/* @var $model RrhhPersonasACargo */

$this->breadcrumbs=array(
	'Rrhh Personas Acargos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List RrhhPersonasACargo', 'url'=>array('index')),
	array('label'=>'Create RrhhPersonasACargo', 'url'=>array('create')),
	array('label'=>'View RrhhPersonasACargo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage RrhhPersonasACargo', 'url'=>array('admin')),
);
?>

<h1>Update RrhhPersonasACargo <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>