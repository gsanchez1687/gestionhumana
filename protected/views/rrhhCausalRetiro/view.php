<?php
/* @var $this RrhhCausalRetiroController */
/* @var $model RrhhCausalRetiro */

$this->breadcrumbs=array(
	'Rrhh Causal Retiros'=>array('index'),
	$model->id,
);

?>
<div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h1>Causal Retiro <?php //echo $model->id; ?></h1>
                                <div class="actions pull-right">
                                    <i class="fa fa-expand"></i>
                                    <i class="fa fa-chevron-down"></i>
                                    <i class="fa fa-times"></i>
                                </div>
                            </div>
                            <div class="panel-footer">
                                    <div class="btn-group">
                                         <?php echo CHtml::link('Nuevo', array('rrhhCausalRetiro/create'), array('class' => 'btn btn-info btn-square')); ?>                      
                                         <?php echo CHtml::link('Actualizar', array('rrhhCausalRetiro/update/'.$model->id), array('class' => 'btn btn-info btn-square')); ?>                      
                                         <?php echo CHtml::link('Listado', array('rrhhCausalRetiro/admin'), array('class' => 'btn btn-info btn-square')); ?>                      
                                    </div>
                                </div>
                            <div class="panel-body">
                               <?php $this->widget('zii.widgets.CDetailView', array(
                                'data'=>$model,
                                'attributes'=>array(
                                        'id',
                                        'causal_retiro',
                                        'orden_id',
                                ),
                        )); ?>
                            </div>
                            
                        </div>
                    </div>
                </div>

