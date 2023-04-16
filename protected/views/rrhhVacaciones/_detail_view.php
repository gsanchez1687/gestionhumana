<div class="panel panel-default mtl">
    
    <div class="panel-heading"><?php echo CHtml::encode($model->getAttributeLabel('id')); ?></div>
    <div class="panel-body">
        <p id="RrhhVacaciones_id_label"></p>
    </div>
	<div class="panel-heading"><?php echo CHtml::encode($model->getAttributeLabel('dias_tomados')); ?></div>
    <div class="panel-body">
        <p id="RrhhVacaciones_dias_tomados_label"></p>
    </div>
	<div class="panel-heading"><?php echo CHtml::encode($model->getAttributeLabel('periodo_afectado')); ?></div>
    <div class="panel-body">
        <p id="RrhhVacaciones_periodo_afectado_label"></p>
    </div>
	<div class="panel-heading"><?php echo CHtml::encode($model->getAttributeLabel('fecha_salida')); ?></div>
    <div class="panel-body">
        <p id="RrhhVacaciones_fecha_salida_label"></p>
    </div>
	<div class="panel-heading"><?php echo CHtml::encode($model->getAttributeLabel('fecha_reintegro')); ?></div>
    <div class="panel-body">
        <p id="RrhhVacaciones_fecha_reintegro_label"></p>
    </div>
	<div class="panel-heading"><?php echo CHtml::encode($model->getAttributeLabel('orden_id')); ?></div>
    <div class="panel-body">
        <p id="RrhhVacaciones_orden_id_label"></p>
    </div>
	<div class="panel-heading"><?php echo CHtml::encode($model->getAttributeLabel('rrhh_datos_empleado_id')); ?></div>
    <div class="panel-body">
        <p id="RrhhVacaciones_rrhh_datos_empleado_id_label"></p>
    </div>
	</div>


<div class="modal-footer">
    <div class="col-lg-12">
        <button type="button" class="btn btn-default" data-dismiss="modal">
        	<?php echo Yii::t('app','Close')?>        </button>
    </div>
</div>
