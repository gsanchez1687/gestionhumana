<?php 
Yii::app()->params['IDGridview'] = 'rrhh-datos-empleado-grid';
Yii::app()->params['rutaUrlGridviewBoxSwitch'] = Yii::app()->controller->createUrl('UpdateActive');

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#rrhh-datos-empleado-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div class="row">
    <div class="col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Empleados <small>Admin Empleados</small></h1>
                <br />
                <div class="content">                    
                     <?php echo CHtml::link('Crear', array('rrhhDatosEmpleado/create'), array('class' => 'btn btn-square btn-info')); ?>                                        
                     <?php echo CHtml::link('excel', array(''), array('class' => 'btn btn-square btn-info')); ?>                                        
                </div>
                <div class="menu-tool">

                    <div class="pagesize"> 
                        <?php $dataProvider = $this->PageSize(Yii::app()->params['IDGridview'], $model->search()); ?>
                    </div>         

                </div>        
                
                <div class="actions pull-right">
                    <i class="fa fa-expand"></i>
                    <i class="fa fa-chevron-down"></i>
                    <i class="fa fa-times"></i>
                </div>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <?php $this->widget('zii.widgets.grid.CGridView', array(
                                'id'=>Yii::app()->params['IDGridview'],
                                'dataProvider'=>$model->search(),
                                'filter'=>$model,
                                'columns'=>array(
                                        'id',
//                                      'tipo_documento',
                                        'numero_documento',
//                                      'lugar_expedicion',
                                        'primer_nombre',
                                        'segundo_nombre',
                                        array('name' => 'estado','type' => 'raw','value' => 'Active::checkSwicth($data->estado,$data->id)', 'filter' => Active::getListActive(),'htmlOptions' => array('class' => 'switchactive')),
                                        /*
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
                                        */
                                        array(
                                            'class' => 'CLinkColumn',
                                            'header' => Yii::app()->params['view-text'],
                                            'label' => Yii::app()->params['view-icon'],
                                            'linkHtmlOptions' => array('class' => 'view ' . Yii::app()->params['view-btn']),
                                            'urlExpression' => 'Yii::app()->controller->createUrl("view",array("id"=>$data->id))',
                                        //'visible' => Yii::app()->authRBAC->checkAccess($this->modulo . '_view')
                                        ),
                                    array(
                                            'class' => 'CLinkColumn',
                                            'header' => Yii::app()->params['update-text'],
                                            'label' => Yii::app()->params['update-icon'],
                                            'linkHtmlOptions' => array('class' => 'edit ' . Yii::app()->params['update-btn']),
                                            'urlExpression' => 'Yii::app()->controller->createUrl("update",array("id"=>$data->id))',
                                            //'visible' => Yii::app()->authRBAC->checkAccess($this->modulo . '_update')
                                        ),
                                    array(
                                        'class' => 'CLinkColumn',
                                        'header' => Yii::app()->params['delete-text'],
                                        'label' => Yii::app()->params['delete-icon'],
                                        'linkHtmlOptions' => array('class' => 'delete ' . Yii::app()->params['delete-btn']),
                                        'htmlOptions' => array('onclick' => "return confirm('Está seguro de eliminar el Registro?')"),
                                        'urlExpression' => 'Yii::app()->controller->createUrl("delete",array("id"=>$data->id,"delete"=>$data->estado))',
                                         //'visible' => Yii::app()->authRBAC->checkAccess($this->modulo . '_delete')
                                    ),
                                ),
                        )); ?>
                   
                </div>
            </div>
        </div>
    </div>
</div>




