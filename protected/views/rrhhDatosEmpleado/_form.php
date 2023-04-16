

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array('id' =>'rrhh-datos-empleado-form','enableAjaxValidation'=>true,'htmlOptions' => array('enctype' => 'multipart/form-data'))); ?>

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
                <?php echo $form->labelEx($model,'tipo_documento'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
                <?php echo $form->dropDownList($model, 'tipo_documento', CHtml::listData(RrhhTipoDocumento::model()->findAll('',array('order' => 'id ASC')), 'id', 'nombre'),array('empty'=>'Seleccione'));  ?>
		<?php echo $form->error($model,'tipo_documento'); ?>
            </div>            
        </div>
	<div class="form-group">
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'numero_documento'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
                <?php echo $this->widget('ext.inputs.counter.GTextfield',array('model'=>$model,'attribute'=>'numero_documento','allowed' => 45,'htmlOptions' => array('class'=>'form-control'),),true); ?>
		<?php echo $form->error($model,'numero_documento'); ?>
            </div>            
        </div>
        <div class="form-group">
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'lugar_expedicion'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
               <?php echo $form->dropDownList($model, 'estado_civil', CHtml::listData(UsersLocationCities::model()->findAll('',array('order' => 'id ASC')), 'id', 'name'),array('empty'=>'Seleccione'));  ?>
		<?php echo $form->error($model,'lugar_expedicion'); ?>
            </div>            
        </div>
        <div class="form-group">
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'primer_nombre'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
                <?php echo $this->widget('ext.inputs.counter.GTextfield',array('model'=>$model,'attribute'=>'primer_nombre','allowed' => 45,'htmlOptions' => array('class'=>'form-control'),),true); ?>
		<?php echo $form->error($model,'primer_nombre'); ?>
            </div>            
        </div>
        <div class="form-group">
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'segundo_nombre'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
                <?php echo $this->widget('ext.inputs.counter.GTextfield',array('model'=>$model,'attribute'=>'segundo_nombre','allowed' => 45,'htmlOptions' => array('class'=>'form-control'),),true); ?>
		<?php echo $form->error($model,'segundo_nombre'); ?>
            </div>            
        </div>
        <div class="form-group">
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'primer_apellido'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
                <?php echo $this->widget('ext.inputs.counter.GTextfield',array('model'=>$model,'attribute'=>'primer_apellido','allowed' => 45,'htmlOptions' => array('class'=>'form-control'),),true); ?>
		<?php echo $form->error($model,'primer_apellido'); ?>
            </div>            
        </div>
        <div class="form-group">
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'segundo_apellido'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
                 <?php echo $this->widget('ext.inputs.counter.GTextfield',array('model'=>$model,'attribute'=>'segundo_apellido','allowed' => 45,'htmlOptions' => array('class'=>'form-control'),),true); ?>
		<?php echo $form->error($model,'segundo_apellido'); ?>
            </div>            
        </div>
        <div class="form-group">
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'direccion'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
                <?php echo $this->widget('ext.inputs.counter.GTextfield',array('model'=>$model,'attribute'=>'direccion','allowed' => 100,'htmlOptions' => array('class'=>'form-control'),),true); ?>
		<?php echo $form->error($model,'direccion'); ?>
            </div>            
        </div>
        <div class="form-group">
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'tel_fijo'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
                <?php echo $form->textField($model,'tel_fijo',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'tel_fijo'); ?>
            </div>            
        </div>
        <div class="form-group">
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'tel_movil'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
                <?php echo $form->textField($model,'tel_movil'); ?>
		<?php echo $form->error($model,'tel_movil'); ?>
            </div>            
        </div>
        <div class="form-group">
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'mail_personal'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
                <?php echo $this->widget('ext.inputs.counter.GTextfield',array('model'=>$model,'attribute'=>'mail_personal','allowed' =>45,'htmlOptions' => array('class'=>'form-control'),),true); ?>
		<?php echo $form->error($model,'mail_personal'); ?>
            </div>            
        </div>
        <div class="form-group">
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'mail_corporativo'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
                <?php echo $this->widget('ext.inputs.counter.GTextfield',array('model'=>$model,'attribute'=>'mail_corporativo','allowed' => 45,'htmlOptions' => array('class'=>'form-control'),),true); ?>
		<?php echo $form->error($model,'mail_corporativo'); ?>
            </div>            
        </div>
        <div class="form-group">
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'fecha_nacimiento'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
                <?php
                echo $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                    'model' => $model,
                    'attribute' => 'fecha_nacimiento',
                    'language' => Yii::app()->language,
                    'htmlOptions' => array('class' => 'form-control', 'placeholder' => 'Año / Mes / Dia'),
                    'options' => array(
                        'showButtonPanel' => true,
                        'changeYear' => true,
                        'dateFormat' => 'yy-mm-dd',
                    ),
                        ), true);
                ?>
		<?php echo $form->error($model,'fecha_nacimiento'); ?>
            </div>            
        </div>
        <div class="form-group">
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'estado_civil'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">               
                <?php echo $form->dropDownList($model, 'estado_civil', CHtml::listData(RrhhEstadoCivil::model()->findAll('',array('order' => 'id ASC')), 'id', 'nombre'),array('empty'=>'Seleccione'));  ?>
		<?php echo $form->error($model,'estado_civil'); ?>
            </div>            
        </div>
        <div class="form-group">
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'escolaridad'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
               <?php echo $form->dropDownList($model, 'escolaridad', CHtml::listData(RrhhEscolaridad::model()->findAll('',array('order' => 'id ASC')), 'id', 'nombre'),array('empty'=>'Seleccione'));  ?>
		<?php echo $form->error($model,'escolaridad'); ?>
            </div>            
        </div>
	<div class="form-group">
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'lugar_nacimiento'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
                <?php echo $form->dropDownList($model, 'lugar_nacimiento', CHtml::listData(UsersLocationCities::model()->findAll('',array('order' => 'id ASC')), 'id', 'name'),array('empty'=>'Seleccione'));  ?>
		<?php echo $form->error($model,'lugar_nacimiento'); ?>
            </div>            
        </div>
        <div class="form-group">
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'lugar_residencia'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
                <?php echo $form->dropDownList($model, 'lugar_residencia', CHtml::listData(UsersLocationCities::model()->findAll('',array('order' => 'id ASC')), 'id', 'name'),array('empty'=>'Seleccione'));  ?>
		<?php echo $form->error($model,'lugar_residencia'); ?>
            </div>            
        </div>
        <div class="form-group">
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'avisar'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
                <?php echo $this->widget('ext.inputs.counter.GTextfield',array('model'=>$model,'attribute'=>'avisar','allowed' => 45,'htmlOptions' => array('class'=>'form-control'),),true); ?>
		<?php echo $form->error($model,'avisar'); ?>
            </div>            
        </div>
        <div class="form-group">
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'numero_contacto'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
                <?php echo $form->textField($model,'numero_contacto'); ?>
		<?php echo $form->error($model,'numero_contacto'); ?>
            </div>            
        </div>
        <div class="form-group">
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'parentesco'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
                <?php echo $this->widget('ext.inputs.counter.GTextfield',array('model'=>$model,'attribute'=>'parentesco','allowed' => 45,'htmlOptions' => array('class'=>'form-control'),),true); ?>
		<?php echo $form->error($model,'parentesco'); ?>
            </div>            
        </div>
        <div class="form-group">
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'tipo_sangre'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
               <?php echo $form->dropDownList($model, 'tipo_sangre', CHtml::listData(RrhhTiposangre::model()->findAll('',array('order' => 'id ASC')), 'id', 'tipo'),array('empty'=>'Seleccione'));  ?>
		<?php echo $form->error($model,'tipo_sangre'); ?>
            </div>            
        </div>
        <div class="form-group">
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'datos_clinicos'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
                 <?php echo $this->widget('ext.inputs.counter.GTextfield',array('model'=>$model,'attribute'=>'datos_clinicos','allowed' => 45,'htmlOptions' => array('class'=>'form-control'),),true); ?>
		<?php echo $form->error($model,'datos_clinicos'); ?>
            </div>            
        </div>
        <div class="form-group">
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'eps'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
                 <?php echo $form->dropDownList($model, 'eps', CHtml::listData(RrhhEps::model()->findAll('',array('order' => 'id ASC')), 'id', 'nombre'),array('empty'=>'Seleccione'));  ?>
		<?php echo $form->error($model,'eps'); ?>
            </div>            
        </div>
        <div class="form-group">
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'fondo_pensiones'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
                <?php echo $form->dropDownList($model, 'fondo_pensiones', CHtml::listData(RrhhFondoPensiones::model()->findAll('',array('order' => 'id ASC')), 'id', 'nombre'),array('empty'=>'Seleccione'));  ?>
		<?php echo $form->error($model,'fondo_pensiones'); ?>
            </div>            
        </div>
        <div class="form-group">
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'cesantias'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
                <?php echo $form->dropDownList($model, 'cesantias', CHtml::listData(RrhhCesantias::model()->findAll('',array('order' => 'id ASC')), 'id', 'nombre'),array('empty'=>'Seleccione'));  ?>
		<?php echo $form->error($model,'cesantias'); ?>
            </div>            
        </div>
        <div class="form-group">
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'arl'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
                <?php echo $form->dropDownList($model, 'arl', CHtml::listData(RrhhArl::model()->findAll('',array('order' => 'id ASC')), 'id', 'nombre'),array('empty'=>'Seleccione'));  ?>
		<?php echo $form->error($model,'arl'); ?>
            </div>            
        </div>
        <div class="form-group">
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'caja_compensacion'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
               <?php echo $form->dropDownList($model, 'caja_compensacion', CHtml::listData(RrhhCajaCompensacion::model()->findAll('',array('order' => 'id ASC')), 'id', 'nombre'),array('empty'=>'Seleccione'));  ?>
		<?php echo $form->error($model,'caja_compensacion'); ?>
            </div>            
        </div>
        <div class="form-group">
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'banco'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
                <?php echo $form->dropDownList($model, 'banco', CHtml::listData(RrhhBancos::model()->findAll('',array('order' => 'id ASC')), 'id', 'nombre'),array('empty'=>'Seleccione'));  ?>
		<?php echo $form->error($model,'banco'); ?>
            </div>            
        </div>
        <div class="form-group">
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'cuenta_bancaria'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
               <?php echo $this->widget('ext.inputs.counter.GTextfield',array('model'=>$model,'attribute'=>'cuenta_bancaria','allowed' => 60,'htmlOptions' => array('class'=>'form-control'),),true); ?>
		<?php echo $form->error($model,'cuenta_bancaria'); ?>
            </div>            
        </div>
        <div class="form-group">
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'causal_retiro'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
                <?php echo $form->dropDownList($model, 'causal_retiro', CHtml::listData(RrhhCausalRetiro::model()->findAll('',array('order' => 'id ASC')), 'id', 'causal_retiro'),array('empty'=>'Seleccione','class'=>'form-control','ajax'=>array(
                'type'=>'POST',
                'url'=>$this->createUrl('selectitemretiro'),
                'update'=>'#'.CHtml::activeId($model,'item_retiro'),
                )));  ?>
		<?php echo $form->error($model,'causal_retiro'); ?>
            </div>               
        </div>
        <div class="form-group">
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'item_retiro'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
                <?php echo $form->dropDownList($model, 'item_retiro', CHtml::listData(RrhhDatosEmpleado::model()->findAll('',array('order' => 'id ASC')), 'id', 'name'),array('empty'=>'Seleccione','class'=>'form-control'));  ?>
		<?php echo $form->error($model,'item_retiro'); ?>
            </div>            
        </div>
        <div class="form-group">
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'poliza'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
                <?php echo $form->dropDownList($model, 'poliza', CHtml::listData(RrhhPoliza::model()->findAll('',array('order' => 'id ASC')), 'id', 'nombre'),array('empty'=>'Seleccione','class'=>'form-control'));  ?>
		<?php echo $form->error($model,'poliza'); ?>
            </div>               
        </div>
        <div class="form-group">
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'ruta_hojadevida'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
                <?php echo CHtml::activeFileField($model, 'ruta_hojadevida'); ?>
		<?php echo $form->error($model,'ruta_hojadevida'); ?>
            </div>            
        </div>
        <div class="form-group">
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'foto'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
                <?php echo CHtml::activeFileField($model, 'foto'); ?>
		<?php echo $form->error($model,'foto'); ?>
            </div>            
        </div>
        <div class="form-group">
            <div class="col-xs-12 col-sm-3">
                <?php echo $form->labelEx($model,'estado'); ?>
            </div>
            <div class="col-xs-12 col-sm-9">
              <?php
                    $this->widget('application.extensions.SwitchToggleJD.SwitchToggleJD', array(
                                'id' => 'RrhhDatosEmpleado_estado',
                                'attribute' => 'RrhhDatosEmpleado[estado]',
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