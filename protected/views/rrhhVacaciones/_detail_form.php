<?php
/* @var $this RrhhvacacionesController */
/* @var $model RrhhVacaciones */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rrhh-vacaciones-form',
	'htmlOptions'=>array('class'=>'','role'=>'form'),
	'enableAjaxValidation'=>true,
	'enableClientValidation'=>false,
	'clientOptions'=>array(
		'validateOnChange'=>false,
		'validateOnSubmit'=>true,		
		'beforeValidate'=>"js:function(form){
	    	var newSessing = form.data('settings');
            newSessing.validationUrl = $(form).attr('action');
            form.data('settings', newSessing);
            return true;
		}",
		'afterValidate'=>"js:function(form,data,hasError){ 
			if(!hasError) {
				form.each (function(){
				  this.reset();
				});
				$.fn.yiiListView.update('rrhh-vacaciones-list', {
					// data: { '".get_class($model)."':  }
					
complete: function () {
$(\"#rrhh-vacaciones-list ul\").sortable({
	update: function() {
		var that = $(this);
		$(\".loading\").html('<i class=\"fa fa-refresh fa-spin\"></i>');
		setTimeout(function () {
        	var order = that.sortable(\"toArray\");
	        $.post('".$this->createUrl('rrhhvacaciones/order')."', {order: order}, function(datos){
    			$('.loading').empty();
	        });
		},500);
    }
});
},

				});
				$('#rrhh-vacaciones-modal').modal('hide');
				return false;
			}
			return false;
		}",
	),
)); ?>

<div class="row">
	<div class="pln col-lg-6">

<div class="form-group">
	<?php echo $form->labelEx($model,'dias_tomados',array('class'=>'control-label')); ?>
	<?php echo $this->widget('ext.inputs.counter.GTextfield',array(
					'model'=>$model,
					'attribute'=>'dias_tomados',
					'allowed' => 11,
					'htmlOptions' => array('class'=>'form-control'),
				),true); ?>
	<?php echo $form->error($model,'dias_tomados',array('class'=>'help-block')); ?>
</div>
<div class="form-group">
	<?php echo $form->labelEx($model,'periodo_afectado',array('class'=>'control-label')); ?>
	<?php echo $this->widget('ext.inputs.counter.GTextfield',array(
					'model'=>$model,
					'attribute'=>'periodo_afectado',
					'allowed' => 45,
					'htmlOptions' => array('class'=>'form-control'),
				),true); ?>
	<?php echo $form->error($model,'periodo_afectado',array('class'=>'help-block')); ?>
</div>
	</div>
	<div class="pln prn col-lg-6">
<div class="form-group">
	<?php echo $form->labelEx($model,'fecha_salida',array('class'=>'control-label')); ?>
	<?php echo $this->widget('zii.widgets.jui.CJuiDatePicker', array(
				'model' => $model,
				'attribute' => 'fecha_salida',
				'language' =>  Yii::app()->language,
				'htmlOptions' => array('class'=>'form-control','placeholder'=>'Año / Mes / Dia'),
				'options' => array(
					'showButtonPanel' => true,
					'changeYear' => true,
					'dateFormat' => 'yy-mm-dd',
				),
			),true); ?>
	<?php echo $form->error($model,'fecha_salida',array('class'=>'help-block')); ?>
</div>
<div class="form-group">
	<?php echo $form->labelEx($model,'fecha_reintegro',array('class'=>'control-label')); ?>
	<?php echo $this->widget('zii.widgets.jui.CJuiDatePicker', array(
				'model' => $model,
				'attribute' => 'fecha_reintegro',
				'language' =>  Yii::app()->language,
				'htmlOptions' => array('class'=>'form-control','placeholder'=>'Año / Mes / Dia'),
				'options' => array(
					'showButtonPanel' => true,
					'changeYear' => true,
					'dateFormat' => 'yy-mm-dd',
				),
			),true); ?>
	<?php echo $form->error($model,'fecha_reintegro',array('class'=>'help-block')); ?>
</div>
	</div>
</div>

<div class="modal-footer">
	<button type="button" class="btn default" data-dismiss="modal"><?php echo Yii::t('app','Cancel')?></button>
	<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('app','Create') : Yii::t('app','Save'),array('class'=>'rrhh-vacaciones-submit btn btn-primary btn-large')); ?>
</div>
<?php $this->endWidget(); ?>
