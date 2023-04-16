<?php
/* @var $this RrhhNotificationsController */
/* @var $model RrhhNotifications */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rrhh-notifications-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

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
                <?php echo $form->labelEx($model,'nombre'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
                <?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombre'); ?>
            </div>            
        </div>
        <div class="form-group">
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'detalle'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
                <?php echo $form->textField($model,'detalle',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'detalle'); ?>
            </div>            
        </div>
        <div class="form-group">
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'fecha_y_hora'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
                <?php
                   $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                    'options' => array('showAnim' => 'fadeIn', 'showButtonPanel' => true,),
                    'model' => $model,
                    'language' => 'es',
                    'attribute' => 'fecha_y_hora',
                    'value' => $model->fecha_y_hora,                       
                    'options' => array('format' => 'YYYY-MM-DD HH:mm', 'changeMonth' => 'true', 'changeYear' => 'true', 'yearRange' => 'Y:Y',
                    ),
                ));
                ?>
		<?php echo $form->error($model,'fecha_y_hora'); ?>
            </div>            
        </div>
        <div class="form-group">
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'estado'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
                <?php
                    $this->widget('application.extensions.SwitchToggleJD.SwitchToggleJD', array(
                    'id' => 'RrhhNotifications_estado',
                    'attribute' => 'RrhhNotifications[estado]',
                    'state' => $model->estado,
                    'type' => 'item',
                    'coloron' => 'color1'));
                ?>
		<?php echo $form->error($model,'estado'); ?>
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
