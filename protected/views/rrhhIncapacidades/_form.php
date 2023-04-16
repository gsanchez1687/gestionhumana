<?php
/* @var $this RrhhIncapacidadesController */
/* @var $model RrhhIncapacidades */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rrhh-incapacidades-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'origen_licencias'); ?>
		<?php echo $form->textField($model,'origen_licencias',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'origen_licencias'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_inicio'); ?>
		<?php echo $form->textField($model,'fecha_inicio'); ?>
		<?php echo $form->error($model,'fecha_inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_fin'); ?>
		<?php echo $form->textField($model,'fecha_fin'); ?>
		<?php echo $form->error($model,'fecha_fin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calcular_por'); ?>
		<?php echo $form->textField($model,'calcular_por'); ?>
		<?php echo $form->error($model,'calcular_por'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tiempo'); ?>
		<?php echo $form->textField($model,'tiempo'); ?>
		<?php echo $form->error($model,'tiempo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observacion'); ?>
		<?php echo $form->textField($model,'observacion',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'observacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'imgen'); ?>
		<?php echo $form->textField($model,'imgen',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'imgen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'orden_id'); ?>
		<?php echo $form->textField($model,'orden_id'); ?>
		<?php echo $form->error($model,'orden_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rrhh_datos_empleado_id'); ?>
		<?php echo $form->textField($model,'rrhh_datos_empleado_id'); ?>
		<?php echo $form->error($model,'rrhh_datos_empleado_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->