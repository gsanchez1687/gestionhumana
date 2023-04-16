<?php
/* @var $this RrhhVencimientosController */
/* @var $model RrhhVencimientos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rrhh-vencimientos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
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
                <?php echo $form->labelEx($model,'vencimiento'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
                <?php echo FormHelper::dropDownList($form, $model, 'vencimiento', RrhhTiposVencimientos::model()->findAll(''), 'id', 'nombre') ?>
		<?php echo $form->error($model,'vencimiento'); ?>
            </div>            
        </div>
        <div class="form-group">
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'fecha'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
                <?php
                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                    'options' => array('showAnim' => 'fadeIn', 'showButtonPanel' => true,),
                    'model' => $model,
                    'language' => 'es',
                    'attribute' => 'fecha',
                    'value' => $model->fecha,
                    'options' => array('dateFormat' => 'dd/mm/yy', 'changeMonth' => 'true', 'changeYear' => 'true', 'yearRange' => 'Y:Y',
                    ),
                ));
                ?>
		<?php echo $form->error($model,'fecha'); ?>
            </div>                
        </div>
        <div class="form-group">
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'repetir'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
                <?php echo $this->widget('ext.inputs.counter.GTextfield',array('model'=>$model,'attribute'=>'repetir','allowed' => 11,'htmlOptions' => array('class'=>'form-control'),),true); ?>
		<?php echo $form->error($model,'repetir'); ?>
            </div>            
        </div>
        <div class="form-group">
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'rrhh_datos_empleado_id'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
                 <?php echo FormHelper::dropDownList($form, $model, 'rrhh_datos_empleado_id', RrhhDatosEmpleado::model()->findAll(''), 'id', 'numero_documento') ?>
		<?php echo $form->error($model,'rrhh_datos_empleado_id'); ?>
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