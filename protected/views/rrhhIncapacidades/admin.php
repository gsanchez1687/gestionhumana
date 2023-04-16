<?php
/* @var $this RrhhIncapacidadesController */
/* @var $model RrhhIncapacidades */

$this->breadcrumbs=array(
	'Rrhh Incapacidades'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List RrhhIncapacidades', 'url'=>array('index')),
	array('label'=>'Create RrhhIncapacidades', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#rrhh-incapacidades-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Rrhh Incapacidades</h1>

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
	'id'=>'rrhh-incapacidades-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'origen_licencias',
		'fecha_inicio',
		'fecha_fin',
		'calcular_por',
		'tiempo',
		/*
		'observacion',
		'imgen',
		'orden_id',
		'rrhh_datos_empleado_id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
