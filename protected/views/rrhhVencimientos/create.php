<?php
/* @var $this RrhhVencimientosController */
/* @var $model RrhhVencimientos */

$this->breadcrumbs=array(
	'Rrhh Vencimientoses'=>array('index'),
	'Create',
);

?>
<div class="row">
    <div class="col-xs-12 col-md-10 col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading navbar-tool">
                <h1>Crear Vencimiento</h1>          
            </div>
            <div class="panel-body">
                <?php $this->renderPartial('_form', array('model'=>$model)); ?>
            </div>
        </div>
    </div>

