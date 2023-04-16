<div class="panel panel-default mtl">

<table class="table table-bordered table-striped"> <colgroup> <col class="col-xs-1"> <col class="col-xs-7"> </colgroup> <thead> <tr> <th>Nombre</th> <th>Dato</th> </tr> </thead> <tbody> 
<tr> <th scope="row"> 
<code><?php echo CHtml::encode($model->getAttributeLabel('origen_licencias')); ?></code> </th> <td> <p id="RrhhIncapacidades_origen_licencias_label"></p></td> </tr>
<tr> <th scope="row"> 
<code><?php echo CHtml::encode($model->getAttributeLabel('fecha_inicio')); ?></code> </th> <td><p id="RrhhIncapacidades_fecha_inicio_label"></p></td> </tr>
<tr> <th scope="row">
<code><?php echo CHtml::encode($model->getAttributeLabel('fecha_fin')); ?></code> </th> <td><p id="RrhhIncapacidades_fecha_fin_label"></p></td> </tr> 
<tr> <th scope="row"> 
<code><?php echo CHtml::encode($model->getAttributeLabel('tiempo')); ?></code> </th> <td><p id="RrhhIncapacidades_tiempo_label"></p> </td> </tr> 
<tr> <th scope="row"> 
<code><?php echo CHtml::encode($model->getAttributeLabel('observacion')); ?></code> </th> <td><p id="RrhhIncapacidades_observacion_label"></p></td> </tr> 


 
 



</tbody> </table>
    
  
</div>


<div class="modal-footer">
    <div class="col-lg-12">
        <button type="button" class="btn btn-default" data-dismiss="modal">
            <?php echo Yii::t('app','Close')?>        </button>
    </div>
</div>
