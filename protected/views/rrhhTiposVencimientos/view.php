<?php
/* @var $this RrhhTiposVencimientosController */
/* @var $model RrhhTiposVencimientos */

$this->breadcrumbs=array(
	'Rrhh Tipos Vencimientoses'=>array('index'),
	$model->id,
);

?>


<div class="row">
    <div class="col-xs-12 col-md-10 col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading navbar-tool">
               <h1>Detalle Tipo Vencimiento</h1>          
            </div>
            <div class="container btn-group">
                     <?php echo CHtml::link('Crear', array('rrhhTiposVencimientos/create'), array('class' => 'btn btn-square btn-info')); ?>                      
                     <?php echo CHtml::link('Actualizar', array('rrhhTiposVencimientos/update/'.$model->id), array('class' => 'btn btn-square btn-info')); ?>                      
                     <?php echo CHtml::link('Listado', array('rrhhTiposVencimientos/admin'), array('class' => 'btn btn-square btn-info')); ?>                      
                </div>
            <div class="panel-body">
                <?php $this->widget('zii.widgets.CDetailView', array(
                    'data'=>$model,
                    'attributes'=>array(
                            'id',
                            'nombre',
                    ),
            )); ?>
            </div>
        </div>
    </div>
</div>

