<?php
/* @var $this RrhhveneficiosextralegalesController */
/* @var $model RrhhVeneficiosExtralegales */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rrhh-veneficios-extralegales-form',
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
				$.fn.yiiListView.update('rrhh-veneficios-extralegales-list', {
					// data: { '".get_class($model)."':  }
					
complete: function () {
$(\"#rrhh-veneficios-extralegales-list ul\").sortable({
	update: function() {
		var that = $(this);
		$(\".loading\").html('<i class=\"fa fa-refresh fa-spin\"></i>');
		setTimeout(function () {
        	var order = that.sortable(\"toArray\");
	        $.post('".$this->createUrl('rrhhVeneficiosExtralegales/order')."', {order: order}, function(datos){
    			$('.loading').empty();
	        });
		},500);
    }
});
},

				});
				$('#rrhh-veneficios-extralegales-modal').modal('hide');
				return false;
			}
			return false;
		}",
	),
)); ?>

<div class="row">
	<div class="pln col-lg-6">

<div class="form-group">
	<?php echo $form->labelEx($model,'nombre',array('class'=>'control-label')); ?>
	<?php echo $this->widget('ext.inputs.counter.GTextfield',array(
					'model'=>$model,
					'attribute'=>'nombre',
					'allowed' => 45,
					'htmlOptions' => array('class'=>'form-control'),
				),true); ?>
	<?php echo $form->error($model,'nombre',array('class'=>'help-block')); ?>
</div>
	</div>
	<div class="pln prn col-lg-6">
<div class="form-group">
	<?php echo $form->labelEx($model,'valor',array('class'=>'control-label')); ?>
	<?php echo $form->textField($model,'valor',array('class'=>'form-control')); ?>
	<?php echo $form->error($model,'valor',array('class'=>'help-block')); ?>
</div>
	</div>
</div>

<div class="modal-footer">
	<button type="button" class="btn default" data-dismiss="modal"><?php echo Yii::t('app','Cancel')?></button>
	<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('app','Create') : Yii::t('app','Save'),array('class'=>'rrhh-veneficios-extralegales-submit btn btn-primary btn-large')); ?>
</div>
<?php $this->endWidget(); ?>
