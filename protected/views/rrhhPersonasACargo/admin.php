<?php
/* @var $this RrhhPersonasACargoController */
/* @var $model RrhhPersonasACargo */

$this->breadcrumbs=array(
	'Rrhh Personas Acargos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List RrhhPersonasACargo', 'url'=>array('index')),
	array('label'=>'Create RrhhPersonasACargo', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#rrhh-personas-acargo-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Rrhh Personas Acargos</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'rrhh-personas-acargo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nombre',
		'parentesco',
		'tipo_documento',
		'identificacion',
		'fecha_nacimiento',
		/*
		'edad',
		'sexo',
		'orden_id',
		'rrhh_datos_empleado_id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
