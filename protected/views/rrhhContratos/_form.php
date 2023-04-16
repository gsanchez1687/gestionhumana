<?php
use yii\helpers\Url;
?>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array('id' =>'rrhh-contratos-form','enableAjaxValidation'=>true,'htmlOptions' => array('enctype' => 'multipart/form-data'))); ?>

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
                <?php echo $form->labelEx($model,'tipo_contrato'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
                <?php echo FormHelper::dropDownList($form, $model, 'tipo_contrato', RrhhTipoContrato::model()->findAll(''), 'id', 'nombre') ?>
				<?php echo $form->error($model,'tipo_contrato'); ?>
            </div>            
        </div>
        <div class="form-group">
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'fecha_inicio'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
                <?php
                    $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                            'model' => $model,
                            'language' => 'es',
                            'attribute' => 'fecha_inicio',
                            'value' => $model->fecha_inicio,
                            'htmlOptions' => array('class' => 'form-control', 'placeholder' => 'Año / Mes / Dia'),
                            'options' => array(
                                'dateFormat' => 'yy-mm-dd',
                                'changeMonth' => 'true',
                                'changeYear' => 'true',
                                //'yearRange' => 'Y:Y',
                                'showAnim' => 'fadeIn',
                                'showButtonPanel' => true,
                                'onSelect' => "js:function(dateText, inst) {
                                                var fec_fin = jQuery('#RrhhContratos_fecha_terminacion').val();
                                                ".
                                                CHtml::ajax(array(
                                                    'type'=>'GET',
                                                    'datatype'=>'html',
                                                    'url'=> Yii::app()->controller->createUrl('rrhhContratos/calculate'),
                                                    'update' => '#RrhhContratos_duracion', 
                                                    'data'=>array(
                                                            'ini'=> 'js: this.value', 
                                                            'fin'=> 'js: fec_fin'
                                                    ),
                                                    'success'=>'function(data){
                                                        if(data != "error: Verificar Fechas") {
                                                            $("#RrhhContratos_duracion").empty();
                                                            $("#RrhhContratos_duracion").val(data);    
                                                        }else{
                                                            alert(data);
                                                        }
                                                     }',
                                                     

                                                ))."}"
                            ),
                    ));
                ?>
		<?php echo $form->error($model,'fecha_inicio'); ?>
            </div>            
        </div>
        <div class="form-group">
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'fecha_terminacion'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
            	
                <?php
                    $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                    		'attribute'=>'fecha_terminacion',
                    		'model' => $model,
                            'language' => 'es',
                            'attribute' => 'fecha_terminacion',
                            'value' => $model->fecha_terminacion,
                            'htmlOptions' => array('class' => 'form-control', 'placeholder' => 'Año / Mes / Dia'),
                            'options' => array(
                            	'dateFormat' => 'yy-mm-dd',
                            	'changeMonth' => 'true',
                            	'changeYear' => 'true',
                            	//'yearRange' => 'Y:Y',
                            	'showAnim' => 'fadeIn',
                            	'showButtonPanel' => true,
                            	'onSelect' => "js:function(dateText, inst) {
                            					var fec_ini = jQuery('#RrhhContratos_fecha_inicio').val();
                            					".
                                 				CHtml::ajax(array(
	                             					'type'=>'GET',
	                             					'datatype'=>'html',
	                             					'url'=> Yii::app()->controller->createUrl('rrhhContratos/calculate'),
	                                        		'update' => '#RrhhContratos_duracion', 
	                                        		'data'=>array(
                                                            'ini'=> 'js: fec_ini', 
                                                            'fin'=> 'js: this.value'
                                                    ),
	                                        		'success'=>'function(data){
                                                        if(data != "error: Verificar Fechas") {
                                                            $("#RrhhContratos_duracion").empty();
                                                            $("#RrhhContratos_duracion").val(data);    
                                                        }else{
                                                            alert(data);
                                                        }
													 }',
                                                     

												))."}"
                            ),
                    ));
                ?>
				<?php echo $form->error($model,'fecha_terminacion'); ?>
            </div>            
        </div>
        <div class="form-group">
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'duracion'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
                <?php echo $form->textField($model,'duracion',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'duracion'); ?>
            </div>            
        </div>
        <div class="form-group">
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'valor_salario'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
                <?php //echo $form->textField($model,'valor_salario'); ?>
                <?php echo $form->dropDownList($model, 'valor_salario', 
								CHtml::listData(RrhhSalarios::model()
									->findAll('',
										array('order' => 'id ASC')), 
										'id', 'valor'
									),
									array('empty'=>'Seleccione')
								);
			?>
				<?php echo $form->error($model,'valor_salario'); ?>
            </div>            
        </div>
        <div class="form-group">
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'fecha_preaviso'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
                <?php
                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                    'model' => $model,
                    'language' => 'es',
                    'attribute' => 'fecha_preaviso',
                    'value' => $model->fecha_preaviso,
                    'htmlOptions' => array('class' => 'form-control', 'placeholder' => 'Año / Mes / Dia'),
                    'options' => array(
                        'dateFormat' => 'yy-mm-dd', 
                        'changeMonth' => 'true', 
                        'changeYear' => 'true', 
                        'yearRange' => 'Y:Y',
                        'showAnim' => 'fadeIn', 
                        'showButtonPanel' => true,
                    ),
                ));
                ?>
		<?php echo $form->error($model,'fecha_preaviso'); ?>
            </div>            
        </div>
        <div class="form-group">
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'estado_preaviso'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
                <?php echo $form->textField($model,'estado_preaviso'); ?>
		<?php echo $form->error($model,'estado_preaviso'); ?>
            </div>            
        </div>        
        <div class="form-group">
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'observacion'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
                <?php echo $form->textField($model,'observacion',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'observacion'); ?>
            </div>            
        </div>
        <!--
        <div class="form-group">
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'conteo'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
                <?php echo $form->textField($model,'conteo'); ?>
				<?php echo $form->error($model,'conteo'); ?>
            </div>            
        </div>
        -->
        <div class="form-group">
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'rrhh_centro_costo_id'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
                <?php echo FormHelper::dropDownList($form, $model, 'rrhh_centro_costo_id', RrhhCentroCosto::model()->findAll(''), 'id', 'razon_social') ?>
		<?php echo $form->error($model,'rrhh_centro_costo_id'); ?>
            </div>            
        </div>
        <div class="form-group">
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'rrhh_punto_operacion_id'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
                <?php echo FormHelper::dropDownList($form, $model, 'rrhh_punto_operacion_id', RrhhPuntoOperacion::model()->findAll(''), 'id', 'nombre') ?>
		<?php echo $form->error($model,'rrhh_punto_operacion_id'); ?>
            </div>            
        </div>
        <div class="form-group">
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'rrhh_perfil_id'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
                <?php echo FormHelper::dropDownList($form, $model, 'rrhh_perfil_id', RrhhPerfil::model()->findAll(''), 'id', 'cargo') ?>
		<?php echo $form->error($model,'rrhh_perfil_id'); ?>
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
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'contrato_firmado_en_pdf'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
                <?php echo CHtml::activeFileField($model, 'contrato_firmado_en_pdf'); ?>
		<?php echo $form->error($model,'contrato_firmado_en_pdf'); ?>
            </div>            
        </div>
        <div class="form-group">
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'estado'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
                <?php
                $this->widget('application.extensions.SwitchToggleJD.SwitchToggleJD', array(
                    'id' => 'RrhhContratos_estado',
                    'attribute' => 'RrhhContratos[estado]',
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
