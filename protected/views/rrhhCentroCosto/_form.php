<?php
/* @var $this RrhhCentroCostoController */
/* @var $model RrhhCentroCosto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rrhh-centro-costo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model,null,null,array('class'=>'alert alert-danger')); ?>
	
	<div class="form-group">
        <div class="text-right">
            <?php echo CHtml::submitButton(Yii::app()->params['save-text'], array('class' => Yii::app()->params['save-btn'])); ?>
	    	<?php echo CHtml::link(Yii::app()->params['cancel-text'], Yii::app()->controller->createUrl('admin'), array('class' => Yii::app()->params['cancel-btn'])); ?>
        </div>
    </div>
    
    <div class="form-group">
    	<div class="col-xs-12 col-sm-3">
			<?php echo $form->labelEx($model,'nit'); ?>
		</div>
		<div class="col-xs-12 col-sm-9">
			<?php echo $form->textField($model,'nit',array('size'=>45,'maxlength'=>45)); ?>
			<?php echo $form->error($model,'nit'); ?>
		</div>
	</div>
	
	<div class="form-group">
    	<div class="col-xs-12 col-sm-3">
			<?php echo $form->labelEx($model,'razon_social'); ?>
		</div>
		<div class="col-xs-12 col-sm-9">
			<?php echo $form->textField($model,'razon_social',array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'razon_social'); ?>
		</div>
	</div>
	
	<div class="form-group">
    	<div class="col-xs-12 col-sm-3">
			<?php echo $form->labelEx($model,'direccion'); ?>
		</div>
		<div class="col-xs-12 col-sm-9">
			<?php echo $form->textField($model,'direccion',array('size'=>45,'maxlength'=>45)); ?>
			<?php echo $form->error($model,'direccion'); ?>
		</div>
	</div>
	
	<div class="form-group">
    	<div class="col-xs-12 col-sm-3">
			<?php echo $form->labelEx($model,'telefono'); ?>
		</div>
		<div class="col-xs-12 col-sm-9">
			<?php echo $form->textField($model,'telefono'); ?>
			<?php echo $form->error($model,'telefono'); ?>
		</div>
	</div>
	
	<div class="form-group">
    	<div class="col-xs-12 col-sm-3">
			<?php echo $form->labelEx($model,'ciudad'); ?>
		</div>
		<div class="col-xs-12 col-sm-9">
			<?php echo $form->dropDownList($model, 'ciudad', 
								CHtml::listData(UsersLocationCities::model()
									->findAll('',
										array('order' => 'id ASC')), 
										'id', 'name'
									),
									array('empty'=>'Seleccione')
								);
			?>
			<?php echo $form->error($model,'nombre_examen'); ?>
		</div>
	</div>
	
	<div class="form-group">
    	<div class="col-xs-12 col-sm-3">
			<?php echo $form->labelEx($model,'orden_id'); ?>
		</div>
		<div class="col-xs-12 col-sm-9">
			<?php echo $form->textField($model,'orden_id'); ?>
			<?php echo $form->error($model,'orden_id'); ?>
		</div>
	</div>

	<div class="form-group">
        <div class="text-right">
            <?php echo CHtml::submitButton(Yii::app()->params['save-text'], array('class' => Yii::app()->params['save-btn'])); ?>
	    	<?php echo CHtml::link(Yii::app()->params['cancel-text'], Yii::app()->controller->createUrl('admin'), array('class' => Yii::app()->params['cancel-btn'])); ?>
        </div>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->
