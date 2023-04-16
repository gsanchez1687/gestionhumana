<?php
/* @var $this RrhhdotacionesController */
/* @var $model RrhhDotaciones */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rrhh-dotaciones-form',
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
				$.fn.yiiListView.update('rrhh-dotaciones-list', {
					// data: { '".get_class($model)."':  }
					
complete: function () {
$(\"#rrhh-dotaciones-list ul\").sortable({
	update: function() {
		var that = $(this);
		$(\".loading\").html('<i class=\"fa fa-refresh fa-spin\"></i>');
		setTimeout(function () {
        	var order = that.sortable(\"toArray\");
	        $.post('".$this->createUrl('rrhhDotaciones/order')."', {order: order}, function(datos){
    			$('.loading').empty();
	        });
		},500);
    }
});
},

				});
				$('#rrhh-dotaciones-modal').modal('hide');
				return false;
			}
			return false;
		}",
	),
)); ?>

<div class="row">
	<div class="pln col-lg-6">

<div class="form-group">
	<?php echo $form->labelEx($model,'fecha',array('class'=>'control-label')); ?>
	<?php echo $this->widget('zii.widgets.jui.CJuiDatePicker', array(
				'model' => $model,
				'attribute' => 'fecha',
				'language' =>  Yii::app()->language,
				'htmlOptions' => array('class'=>'form-control','placeholder'=>'Año / Mes / Dia'),
				'options' => array(
					'showButtonPanel' => true,
					'changeYear' => true,
					'dateFormat' => 'yy-mm-dd',
				),
			),true); ?>
	<?php echo $form->error($model,'fecha',array('class'=>'help-block')); ?>
</div>
<div class="form-group">
	<?php echo $form->labelEx($model,'observacion',array('class'=>'control-label')); ?>
	<?php echo $this->widget('ext.inputs.counter.GTextfield',array(
					'model'=>$model,
					'attribute'=>'observacion',
					'allowed' => 300,
					'htmlOptions' => array('class'=>'form-control'),
				),true); ?>
	<?php echo $form->error($model,'observacion',array('class'=>'help-block')); ?>
</div>
	</div>
	<div class="pln prn col-lg-6">
<div class="form-group">
	<?php echo $form->labelEx($model,'comprobante',array('class'=>'control-label')); ?>
        <?php echo CHtml::activeFileField($model, 'comprobante'); ?>
	<?php /*echo $this->widget('ext.inputs.uploader.GUpload', array(
			    'model' => $model,
			    'attribute' => 'comprobante',
			    // 'sizeValidate' => array('width'=>'500','height'=>'500'),
			    // 'allowedExtensions' => array('png','jpg','jpeg','pdf','zip'),
			    // 'iconButtom' => 'fa-cloud-upload',
			 	'actionUrl' => $this->createUrl('upload'),
			),true); ?>
	<?php echo $form->error($model,'comprobante',array('class'=>'help-block')); */ ?>
</div>
	</div>
</div>

<div class="modal-footer">
	<button type="button" class="btn default" data-dismiss="modal"><?php echo Yii::t('app','Cancel')?></button>
	<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('app','Create') : Yii::t('app','Save'),array('class'=>'rrhh-dotaciones-submit btn btn-primary btn-large')); ?>
</div>
<?php $this->endWidget(); ?>
