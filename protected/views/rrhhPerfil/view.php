<?php
/* @var $this RrhhPerfilController */
/* @var $model RrhhPerfil */

$this->breadcrumbs=array(
	'Rrhh Perfils'=>array('index'),
	$model->id,
);

?>
<div class="row">
    <div class="col-xs-12 col-md-10 col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading navbar-tool">
               <h1>Perfil</h1>           
            	<div class="actions pull-right">
                    <i class="fa fa-expand"></i>
                    <i class="fa fa-chevron-down"></i>
                    <i class="fa fa-times"></i>
                </div>
            </div>
            <div class="panel-footer">
            	<div class="container btn-group">
                     <?php echo CHtml::link('Crear', array('rrhhPerfil/create'), array('class' => 'btn btn-info')); ?>                      
                     <?php echo CHtml::link('Actualizar', array('rrhhPerfil/update/'.$model->id), array('class' => 'btn btn-info')); ?>                      
                     <?php echo CHtml::link('Listado', array('rrhhPerfil/admin'), array('class' => 'btn btn-info')); ?>                      
                </div>
            </div>
            <div class="panel-body">
                <?php $this->widget('zii.widgets.CDetailView', array(
                        'data'=>$model,
                        'attributes'=>array(
                                'id',
                                'cargo',
                                'area_departamento',
                                'mision',
                                'jefe_directo',
                                'formato_contrato',
                                'orden_id',
                        ),
                )); ?>
            </div>
        </div>
    </div>
</div>




