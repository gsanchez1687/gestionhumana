<?php
/* @var $this RrhhdotacionesController */
/* @var $data RrhhDotaciones */
?>
<li class="list-group-item cursor-move" id="<?php echo $index . "-" . $data->id ?>">
    <div class="row">	
        <div class="col-lg-7 pls">
            <div class="col-lg-4 pln prn">
                <?php echo CHtml::image($data->comprobante, '', array('class' => 'img-responsive img-thumbnail', 'style' => 'width:100%')); ?></div>
            <div class="col-lg-8">

                <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
                <?php echo CHtml::link(CHtml::encode($data->id), '#'); ?>
                <br />

                <b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
                <?php echo CHtml::encode($data->fecha); ?>
                <br />

                <?php /*
                  <b><?php echo CHtml::encode($data->getAttributeLabel('observacion')); ?>:</b>
                  <?php echo CHtml::encode($data->observacion); ?>
                  <br />

                  <b><?php echo CHtml::encode($data->getAttributeLabel('comprobante')); ?>:</b>
                  <?php echo CHtml::encode($data->comprobante); ?>
                  <br />

                  <b><?php echo CHtml::encode($data->getAttributeLabel('rrhh_datos_empleado_id')); ?>:</b>
                  <?php echo CHtml::encode($data->rrhh_datos_empleado_id); ?>
                  <br />

                 */ ?>
            </div>

        </div>
        <div class="col-lg-5">
            <?php echo CHtml::link('<i class="fa fa-pencil"></i>', array('rrhhdotaciones/update', 'id' => $data->id, 'rrhh_datos_empleado_id' => $data->rrhh_datos_empleado_id), array('class' => 'btn btn-primary mls pull-right', 'data-action' => 'crud-rrhhdotaciones', 'data-type' => 'update', 'data-name' => $data->id));
            ?>  
            <?php #echo CHtml::link('<i class="fa fa-eye"></i>', array('rrhhdotaciones/view', 'id'=>$data->id, 'rrhh_datos_empleado_id'=>$data->rrhh_datos_empleado_id),
            #array('class'=>'btn btn-default mls pull-right','data-action'=>'crud-rrhhdotaciones','data-type'=>'view','data-name'=>$data->id)); 
            ?>
            <?php echo CHtml::link('<i class="fa fa-trash-o"></i>', array('rrhhdotaciones/delete', 'id' => $data->id), array('class' => 'btn btn-default pull-right', 'data-action' => 'crud-rrhhdotaciones', 'data-type' => 'delete', 'data-name' => $data->id));
            ?>    </div>
    </div>

</li>