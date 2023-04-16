<?php
/* @var $this RrhhPreavisoController */
/* @var $model RrhhPreaviso */

$this->breadcrumbs = array(
    'Rrhh Preavisos' => array('index'),
    $model->id,
);
?>


<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Preaviso</h1>
                <div class="actions pull-right">
                    <i class="fa fa-expand"></i>
                    <i class="fa fa-chevron-down"></i>
                    <i class="fa fa-times"></i>
                </div>
            </div>
            <div class="panel-footer">
                <div class="btn-group">
                    <?php echo CHtml::link('Nuevo', array('rrhhPreaviso/create'), array('class' => 'btn btn-info btn-square')); ?>                      
                    <?php echo CHtml::link('Actualizar', array('rrhhPreaviso/update/' . $model->id), array('class' => 'btn btn-info btn-square')); ?>                      
                    <?php echo CHtml::link('Listado', array('rrhhPreaviso/admin'), array('class' => 'btn btn-info btn-square')); ?>                      
                </div>
            </div>
            <div class="panel-body">
                <?php
                $this->widget('zii.widgets.CDetailView', array(
                    'data' => $model,
                    'attributes' => array(
                        'id',
                        'duracion_en_dias',
                    ),
                ));
                ?>
            </div>

        </div>
    </div>
</div>

