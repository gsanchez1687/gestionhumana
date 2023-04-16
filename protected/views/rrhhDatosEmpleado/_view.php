<?php
/* @var $this RrhhDatosEmpleadoController */
/* @var $data RrhhDatosEmpleado */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_documento')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_documento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero_documento')); ?>:</b>
	<?php echo CHtml::encode($data->numero_documento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lugar_expedicion')); ?>:</b>
	<?php echo CHtml::encode($data->lugar_expedicion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('primer_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->primer_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('segundo_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->segundo_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('primer_apellido')); ?>:</b>
	<?php echo CHtml::encode($data->primer_apellido); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('segundo_apellido')); ?>:</b>
	<?php echo CHtml::encode($data->segundo_apellido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tel_fijo')); ?>:</b>
	<?php echo CHtml::encode($data->tel_fijo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tel_movil')); ?>:</b>
	<?php echo CHtml::encode($data->tel_movil); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mail_personal')); ?>:</b>
	<?php echo CHtml::encode($data->mail_personal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mail_corporativo')); ?>:</b>
	<?php echo CHtml::encode($data->mail_corporativo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_nacimiento')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_nacimiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado_civil')); ?>:</b>
	<?php echo CHtml::encode($data->estado_civil); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('escolaridad')); ?>:</b>
	<?php echo CHtml::encode($data->escolaridad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lugar_nacimiento')); ?>:</b>
	<?php echo CHtml::encode($data->lugar_nacimiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lugar_residencia')); ?>:</b>
	<?php echo CHtml::encode($data->lugar_residencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('avisar')); ?>:</b>
	<?php echo CHtml::encode($data->avisar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero_contacto')); ?>:</b>
	<?php echo CHtml::encode($data->numero_contacto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parentesco')); ?>:</b>
	<?php echo CHtml::encode($data->parentesco); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_sangre')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_sangre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datos_clinicos')); ?>:</b>
	<?php echo CHtml::encode($data->datos_clinicos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('eps')); ?>:</b>
	<?php echo CHtml::encode($data->eps); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fondo_pensiones')); ?>:</b>
	<?php echo CHtml::encode($data->fondo_pensiones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cesantias')); ?>:</b>
	<?php echo CHtml::encode($data->cesantias); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('arl')); ?>:</b>
	<?php echo CHtml::encode($data->arl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('caja_compensacion')); ?>:</b>
	<?php echo CHtml::encode($data->caja_compensacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('banco')); ?>:</b>
	<?php echo CHtml::encode($data->banco); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cuenta_bancaria')); ?>:</b>
	<?php echo CHtml::encode($data->cuenta_bancaria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('causal_retiro')); ?>:</b>
	<?php echo CHtml::encode($data->causal_retiro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('item_retiro')); ?>:</b>
	<?php echo CHtml::encode($data->item_retiro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('poliza')); ?>:</b>
	<?php echo CHtml::encode($data->poliza); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ruta_hojadevida')); ?>:</b>
	<?php echo CHtml::encode($data->ruta_hojadevida); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('foto')); ?>:</b>
	<?php echo CHtml::encode($data->foto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('orden_id')); ?>:</b>
	<?php echo CHtml::encode($data->orden_id); ?>
	<br />

	*/ ?>

</div>