<?php
/* @var $this RrhhSalariosController */
/* @var $model RrhhSalarios */

$this->breadcrumbs=array(
	'Rrhh Salarioses'=>array('index'),
	$model->id,
);

?>


<div class="row">
    <div class="col-xs-12 col-md-10 col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading navbar-tool">
                <h1>Salario</h1>          
            	<div class="actions pull-right">
                    <i class="fa fa-expand"></i>
                    <i class="fa fa-chevron-down"></i>
                    <i class="fa fa-times"></i>
                </div>
            </div>
            <div class="panel-footer">
            	<div class="container btn-group">
                     <?php echo CHtml::link('Nuevo', array('rrhhSalarios/create'), array('class' => 'btn btn-info btn-square')); ?>                      
                     <?php echo CHtml::link('Actualizar', array('rrhhSalarios/update/'.$model->id), array('class' => 'btn btn-info btn-square')); ?>                      
                     <?php echo CHtml::link('Listado', array('rrhhSalarios/admin'), array('class' => 'btn btn-info btn-square')); ?>                      
                </div>
            </div>
            <div class="panel-body">
                <?php $this->widget('zii.widgets.CDetailView', array(
                        'data'=>$model,
                        'attributes'=>array(
                                'id',
                                'valor',
                                'orden_id',
                        ),
                )); ?>
            </div>
        </div>
    </div>
</div>

