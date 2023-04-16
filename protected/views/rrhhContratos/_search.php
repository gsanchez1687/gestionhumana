<?php
/* @var $this RrhhContratosController */
/* @var $model RrhhContratos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_contrato'); ?>
		<?php echo $form->textField($model,'tipo_contrato',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_inicio'); ?>
		<?php echo $form->textField($model,'fecha_inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_terminacion'); ?>
		<?php echo $form->textField($model,'fecha_terminacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'duracion'); ?>
		<?php echo $form->textField($model,'duracion',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valor_salario'); ?>
		<?php echo $form->textField($model,'valor_salario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_preaviso'); ?>
		<?php echo $form->textField($model,'fecha_preaviso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estado_preaviso'); ?>
		<?php echo $form->textField($model,'estado_preaviso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estado'); ?>
		<?php echo $form->textField($model,'estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'observacion'); ?>
		<?php echo $form->textField($model,'observacion',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'conteo'); ?>
		<?php echo $form->textField($model,'conteo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rrhh_centro_costo_id'); ?>
		<?php echo $form->textField($model,'rrhh_centro_costo_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rrhh_punto_operacion_id'); ?>
		<?php echo $form->textField($model,'rrhh_punto_operacion_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rrhh_perfil_id'); ?>
		<?php echo $form->textField($model,'rrhh_perfil_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rrhh_datos_empleado_id'); ?>
		<?php echo $form->textField($model,'rrhh_datos_empleado_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contrato_firmado_en_pdf'); ?>
		<?php echo $form->textField($model,'contrato_firmado_en_pdf',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'orden_id'); ?>
		<?php echo $form->textField($model,'orden_id',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->