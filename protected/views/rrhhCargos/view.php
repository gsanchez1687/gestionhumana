<?php
/* @var $this RrhhCargosController */
/* @var $model RrhhCargos */

$this->breadcrumbs=array(
	'Rrhh Cargoses'=>array('index'),
	$model->id,
);
?>
<div class="row">
    <div class="col-xs-12 col-md-10 col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading navbar-tool">
                <h1>Detalle Cargo</h1>       
            </div>
            <br />
            <div class="container btn-group">
                     <?php echo CHtml::link('Nuevo', array('rrhhCargos/create'), array('class' => 'btn btn-square btn-info')); ?>                      
                     <?php echo CHtml::link('Actualizar', array('rrhhCargos/update/'.$model->id), array('class' => 'btn btn-square btn-info')); ?>                      
                     <?php echo CHtml::link('Listado', array('rrhhCargos/admin'), array('class' => 'btn  btn-square btn-info')); ?>                      
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



