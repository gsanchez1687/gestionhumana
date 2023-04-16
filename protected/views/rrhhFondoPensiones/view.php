<?php
/* @var $this RrhhFondoPensionesController */
/* @var $model RrhhFondoPensiones */

$this->breadcrumbs = array(
    'Rrhh Fondo Pensiones' => array('index'),
    $model->id,
);
?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Fondo de Pensiones <?php //echo $model->id; ?></h1>
                <div class="actions pull-right">
                    <i class="fa fa-expand"></i>
                    <i class="fa fa-chevron-down"></i>
                    <i class="fa fa-times"></i>
                </div>
            </div>
            <div class="panel-footer">
                <div class="btn-group">
                   <?php echo CHtml::link('Nuevo', array('rrhhFondoPensiones/create'), array('class' => 'btn btn-square btn-info')); ?>                      
                     <?php echo CHtml::link('Actualizar', array('rrhhFondoPensiones/update/'.$model->id), array('class' => 'btn btn-square btn-info')); ?>                      
                     <?php echo CHtml::link('Listado', array('rrhhFondoPensiones/admin'), array('class' => 'btn btn-square btn-info')); ?>                      
                </div>
            </div>
            <div class="panel-body">
                <?php
                $this->widget('zii.widgets.CDetailView', array(
                    'data' => $model,
                    'attributes' => array(
                        'id',
                        'nombre',
                        'nit',
                        'codigo',
                        'orden_id',
                    ),
                ));
                ?>
            </div>

        </div>
    </div>
</div>
