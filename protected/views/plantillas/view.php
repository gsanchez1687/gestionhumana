<?php
/* @var $this PlantillasController */
/* @var $model Plantillas */

$this->breadcrumbs=array(
	'Plantillases'=>array('index'),
	$model->id,
);

?>

<div class="row">
    <div class="col-xs-12 col-md-10 col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading navbar-tool">
                <h1>Detalle Plantilla</h1>      
            </div>
            <div class="container btn-group">
                     <?php echo CHtml::link('Crear', array('plantillas/create'), array('class' => 'btn btn-square btn-info')); ?>                      
                     <?php echo CHtml::link('Actualizar', array('plantillas/update/'.$model->id), array('class' => 'btn btn-square btn-info')); ?>                      
                     <?php echo CHtml::link('Administrador', array('plantillas/admin'), array('class' => 'btn btn-square btn-info')); ?>                      
                </div>
            <div class="panel-body">
                <?php $this->widget('zii.widgets.CDetailView', array(
                    'data'=>$model,
                    'attributes'=>array(
                            'id',
                            'nombre_documento',
                            'archivo',
                            'orden_id',
                    ),
            )); ?>
            </div>
        </div>
    </div>
</div>

