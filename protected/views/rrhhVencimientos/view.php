<?php
/* @var $this RrhhVencimientosController */
/* @var $model RrhhVencimientos */

$this->breadcrumbs=array(
	'Rrhh Vencimientoses'=>array('index'),
	$model->id,
);


?>
<div class="row">
    <div class="col-xs-12 col-md-10 col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading navbar-tool">
              <h1>Detalle Vencimiento<Detalle /h1>            
            </div>
            <div class="container btn-group">
                     <?php echo CHtml::link('Crear', array('rrhhVencimientos/create'), array('class' => 'btn btn-square btn-info')); ?>                      
                     <?php echo CHtml::link('Actualizar', array('rrhhVencimientos/update/'.$model->id), array('class' => 'btn btn-square btn-info')); ?>                      
                     <?php echo CHtml::link('Listado', array('rrhhVencimientos/admin'), array('class' => 'btn btn-square btn-info')); ?>                      
                </div>
            <div class="panel-body">
                <?php $this->widget('zii.widgets.CDetailView', array(
                    'data'=>$model,
                    'attributes'=>array(
                            'id',
                            'vencimiento',
                            'fecha',
                            'repetir',
                            'rrhh_datos_empleado_id',
                    ),
            )); ?>
            </div>
        </div>
    </div>
</div>



