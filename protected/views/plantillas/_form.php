<?php
/* @var $this PlantillasController */
/* @var $model Plantillas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form = $this->beginWidget('CActiveForm', array('id' => 'plantillas-form', 'enableAjaxValidation' => true, 'htmlOptions' => array('enctype' => 'multipart/form-data'))); ?>

    <p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model,null,null,array('class'=>'alert alert-danger')); ?>
        <div class="form-group">
        <div class="text-right">
            <?php echo CHtml::submitButton(Yii::app()->params['save-text'], array('class' => Yii::app()->params['save-btn'])); ?>
	    <?php echo CHtml::link(Yii::app()->params['cancel-text'], Yii::app()->controller->createUrl('admin'), array('class' => Yii::app()->params['cancel-btn'])); ?>
        </div>
        </div>
        
        <div class="form-group">
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'nombre_documento'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
                 <?php echo $this->widget('ext.inputs.counter.GTextfield',array('model'=>$model,'attribute'=>'nombre_documento','allowed' => 45,'htmlOptions' => array('class'=>'form-control'),),true); ?>
		<?php echo $form->error($model,'nombre_documento'); ?>
            </div>            
        </div>
        <div class="form-group">
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'archivo'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
                <?php echo CHtml::activeFileField($model, 'archivo'); ?>
		<?php echo $form->error($model,'archivo'); ?>
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
