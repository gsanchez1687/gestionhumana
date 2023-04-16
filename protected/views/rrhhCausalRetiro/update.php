<?php
/* @var $this RrhhCausalRetiroController */
/* @var $model RrhhCausalRetiro */

$this->breadcrumbs=array(
	'Rrhh Causal Retiros'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

?>
<div class="row">
    <div class="col-xs-12 col-md-10 col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading navbar-tool">
                <h1>Actualizar Causal Retiro <?php //echo $model->id; ?></h1>          
            </div>
            <div class="panel-body">
                <?php $this->renderPartial('_form', array('model'=>$model)); ?>
            </div>
        </div>
    </div>
</div>


