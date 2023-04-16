<?php
/* @var $this RrhhDatosEmpleadoController */
/* @var $model RrhhDatosEmpleado */

$this->breadcrumbs=array('Rrhh Datos Empleados'=>array('index'),$model->id,);?>
<div class="row">
    <div class="col-xs-6 col-md-6 col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading navbar-tool">
                <h1>Datos de Empleado <?php //echo $model->id; ?></h1>            
            </div>
            <div class="container btn-group">
                     <?php echo CHtml::link('Nuevo', array('rrhhDatosEmpleado/create'), array('class' => 'btn btn-square btn-info')); ?>                      
                     <?php echo CHtml::link('Actualizar', array('rrhhDatosEmpleado/update/'.$model->id), array('class' => 'btn btn-square btn-info')); ?>                      
                     <?php echo CHtml::link('Administrador', array('rrhhDatosEmpleado/admin'), array('class' => 'btn  btn-square btn-info')); ?>                      
            </div>
           
            <div class="panel-body">
                <?php $this->widget('zii.widgets.CDetailView', array(
                            'data'=>$model,
                            'attributes'=>array(
                                    'id',
                                    'tipo_documento',
                                    'numero_documento',
                                    'lugar_expedicion',
                                    'primer_nombre',
                                    'segundo_nombre',
                                    'primer_apellido',
                                    'segundo_apellido',
                                    'direccion',
                                    'tel_fijo',
                                    'tel_movil',
                                    'mail_personal',
                                    'mail_corporativo',
                                    'fecha_nacimiento',
                                    'estado_civil',
                                    'escolaridad',
                                    'lugar_nacimiento',
                                    'lugar_residencia',
                                    'avisar',
                                    'numero_contacto',
                                    'parentesco',
                                    'tipo_sangre',
                                    'datos_clinicos',
                                    'eps',
                                    'fondo_pensiones',
                                    'cesantias',
                                    'arl',
                                    'caja_compensacion',
                                    'banco',
                                    'cuenta_bancaria',
                                    'causal_retiro',
                                    'item_retiro',
                                    'poliza',
                                    'ruta_hojadevida',
                                    'foto',
                                    'estado',
                                    'orden_id',
                            ),
                    )); ?>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-md-6 col-lg-6">
         <div class="panel panel-default">
            <div class="panel-heading navbar-tool">
                <h1>Contratos</h1>            
            </div>
           
            <div class="panel-body">
                     <div class="col-lg-12">
                          <?php $this->renderPartial('../rrhhContratos/view_embed',array(
                            'model'=>$model,
                            'contratosDataProvider'=>$contratosDataProvider,
                            'contratos'=>$contratos,
                            'rrhh_centro_costo'=>$rrhh_centro_costo,
                            'rrhh_perfil'=>$rrhh_perfil,
                            'rrhh_tipo_contrato'=>$rrhh_tipo_contrato,                            
                        ));                            
                         ?>                        
                    </div>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-md-6 col-lg-6">
         <div class="panel panel-default">
            <div class="panel-heading navbar-tool">
                <h1>Examenes Medicos</h1>            
            </div>
           
            <div class="panel-body">
                     <div class="col-lg-12">
                        <?php $this->renderPartial('../rrhhExamenMedico/view_embed',array(
                            'model'=>$model,
                            'rrhhexamenmedicoDataProvider'=>$rrhhexamenmedicoDataProvider,
                            'rrhhexamenmedico'=>$rrhhexamenmedico,
                        )); ?>                    
                    </div>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-md-6 col-lg-6">
         <div class="panel panel-default">
            <div class="panel-heading navbar-tool">Incapacidades</div>
           
            <div class="panel-body">
                     <div class="col-lg-12">
                          <?php $this->renderPartial('../rrhhIncapacidades/view_embed',array(
                                'model'=>$model,
                                'rrhhincapacidadesDataProvider'=>$rrhhincapacidadesDataProvider,
                                'rrhhincapacidades'=>$rrhhincapacidades,
                             ));  ?>             
                    </div>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-md-6 col-lg-6">
         <div class="panel panel-default">
            <div class="panel-heading navbar-tool">Vacaciones</div>
           
            <div class="panel-body">
                     <div class="col-lg-12">
                        <?php $this->renderPartial('../rrhhVacaciones/view_embed',array(
                                'model'=>$model,
                                'rrhhvacacionesDataProvider'=>$rrhhvacacionesDataProvider,
                                'rrhhvacaciones'=>$rrhhvacaciones,
                        )); 
                        ?>          
                    </div>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-md-6 col-lg-6">
         <div class="panel panel-default">
            <div class="panel-heading navbar-tool">Personas a Cargo</div>
           
            <div class="panel-body">
                     <div class="col-lg-12">
                        <?php /*$this->renderPartial('../rrhhPersonasACargo/view_embed',array(
                            'model'=>$model,
                            'rrhhpersonasacargoDataProvider'=>$rrhhpersonasacargoDataProvider,
                            'rrhhpersonasacargo'=>$rrhhpersonasacargo,
                        )) */?>         
                    </div>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-md-6 col-lg-6">
         <div class="panel panel-default">
            <div class="panel-heading navbar-tool">Dotaciones</div>
           
            <div class="panel-body">
                     <div class="col-lg-12">
                       <?php
                        $this->renderPartial('../rrhhDotaciones/view_embed',array(
                        'model'=>$model,
                        'rrhhdotacionesDataProvider'=>$rrhhdotacionesDataProvider,
                        'rrhhdotaciones'=>$rrhhdotaciones,
                       ));
                       ?>      
                    </div>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-md-6 col-lg-6">
         <div class="panel panel-default">
            <div class="panel-heading navbar-tool">Veneficios Extra legales</div>
           
            <div class="panel-body">
                     <div class="col-lg-12">
                        <?php
                          $this->renderPartial('../rrhhVeneficiosExtralegales/view_embed',array(
                            'model'=>$model,
                            'rrhhveneficiosextralegalesDataProvider'=>$rrhhveneficiosextralegalesDataProvider,
                            'rrhhveneficiosextralegales'=>$rrhhveneficiosextralegales,
                        ));
                        ?>   
                    </div>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-md-6 col-lg-6">
         <div class="panel panel-default">
            <div class="panel-heading navbar-tool">Otra Informacion</div>
           
            <div class="panel-body">
                     <div class="col-lg-12">
                       <div class="col-lg-12">
                                <table class="table table-condensed">
                           <tr class="warning">
                             <td><b><?php echo CHtml::encode($model->getAttributeLabel('banco')); ?>:</b></td>
                             <td><?php echo $model->banco;?></td>
                           </tr>
                           <tr class="warning">
                             <td><b><?php echo CHtml::encode($model->getAttributeLabel('cuenta_bancaria')); ?>:</b></td>
                             <td><?php echo $model->cuenta_bancaria;?></td>
                           </tr>
                           <tr class="warning">
                              <td><b><?php echo CHtml::encode($model->getAttributeLabel('avisar')); ?>:</b></td>
                             <td><?php echo $model->avisar;?></td>
                           </tr>

                           <tr class="warning">
                              <td><b><?php echo CHtml::encode($model->getAttributeLabel('parentesco')); ?>:</b></td>
                             <td><?php echo $model->parentesco;?></td>
                           </tr>
                           <tr class="warning">
                              <td><b><?php echo CHtml::encode($model->getAttributeLabel('numero_contacto')); ?>:</b></td>
                             <td><?php echo $model->numero_contacto;?></td>
                           </tr>
                          <!-- <tr class="warning">
                              <td><b><?php echo CHtml::encode($model->getAttributeLabel('causal_retiro')); ?>:</b></td>
                             <td><?php echo $model->causal_retiro;?></td>
                           </tr>-->
                           <tr class="warning">
                              <td><b><?php echo CHtml::encode($model->getAttributeLabel('grupo_sangineo')); ?>:</b></td>
                             <td><?php echo $model->tipo_sangre;?></td>
                           </tr>
                            <tr class="warning">
                              <td><b><?php echo CHtml::encode($model->getAttributeLabel('datos_clinicos')); ?>:</b></td>
                             <td><?php echo $model->datos_clinicos;?></td>
                           </tr>
                         

                        </table>

                        </div>
                    </div>
            </div>
        </div>
    </div>
    
    <div class="col-xs-6 col-md-6 col-lg-6">
         <div class="panel panel-default">
            <div class="panel-heading navbar-tool">Formatos</div>
            <div class="panel-body">
                     <div class="col-lg-12">
                         <table class="table table-condensed"> 
                             <colgroup>
                                 <col class="col-xs-1"> 
                                 <col class="col-xs-7"> 
                             </colgroup>
                             <thead> 
                                 <tr> 
                                     <th>Class</th>
                                     <th>Description</th>
                                     <th>ID contrato <input  type="number" id="idcontrato"onchange="asignarIdContrato();" ></th>
                                 </tr> 
                             </thead>
                             <tbody id="archivos" >
                                 <?php foreach ($plantillas as $value): ?>
                                     <tr > 
                                         <th  class="danger" scope="row"> <code> <a id="aplantilla" href="<?php echo Yii::app()->controller->createUrl("word", array("id" => $model->id, 'iddoc' => $value->nombre_documento, "nombre" => '$value->nombre_documento')) ?>"><i class="fa fa-file-word-o"></i></a>
                                             </code> </th>
                                         <td  ><?php echo $value->nombre_documento; //echo $value->archivo;  ?></td> 
                                         <td></td>

                                     </tr> 


                                 <?php endforeach; ?>
                             </tbody>
                         </table>
                    </div>
            </div>
        </div>
    </div>
</div>

<script>
  $(function(){

    $(document).on('click', '[data-action="enabled"]', function(e) {
      e.preventDefault();
      var that=$(this);
      var field = that.attr('data-field');
      that.html('...');
      that.removeClass('btn-success btn-danger');
      $.ajax({
          url: '<?=$this->createUrl("enabled",array("id"=>$model->id))?>',
          type: 'post',
          data: { 'field': field },
          dataType: 'json',
          success: function(data){
              
              if(data.result) {
                setTimeout(function(){
                  that.addClass(data.btn);
                  that.html(data.html);
                },200);
              } else {
                bootbox.alert(data.message);
              }
          },
      });
    });
  })

function asignarIdContrato(){
  
   var idcontrato=document.getElementById("idcontrato").value;
   //var estado = document.getElementsByClassName("archivos");
   
  
  $.ajax({
          url: '<?=$this->createUrl("validarIdContrato",array("id"=>$model->id))?>',
          type: 'post',
          data: { 'id': idcontrato },
          dataType: 'json',
          success: function(data){
              
              if(data.result) {
               
              var link=document.getElementById("aplantilla");
              var href=link.getAttribute("href")+"&idContrato="+data.idcontrato;
              link.href=href;
               //estado.class="success archivos";
               link.onclick=function(){
                return true;
                }

              } else {
               // estado.class="danger archivos";
                bootbox.alert(data.message);
              }
          },
      });

}

var link=document.getElementById("aplantilla");
link.onclick=function(){
  return false;
}

</script>
