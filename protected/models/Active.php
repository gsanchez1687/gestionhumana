<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class Active extends CFormModel {

    public function rules() {

        return array(
        );
    }

    /**
     * Declares attribute labels.
     */
    public function attributeLabels() {
        return array(
        );
    }

    /* Metodos Estatico CheckBox  */

    public static function checkSwicth($visible = NULL, $name = NULL, $id = NULL, $class = NULL) {


        if ($visible == 1 OR $visible == 0) {

            if ($visible) {
                $value = ' checked';
            } else {
                $value = '';
            }
            if ($id == NULL) {
                $id = $name;
            }

            //$id = 'item' . $id;

            
            $data = '<div class="onoffswitch">
                    <input type="checkbox" name="' . $name . '" class="onoffswitch-checkbox checkbox-active' . $class . '" id="' . $id . '" ' . $value . '>
                     <label class="onoffswitch-label" for="' . $id . '">
                        <span class="onoffswitch-inner">
                        <span class="onoffswitch-active"><span class="onoffswitch-switch">Si</span></span>
                        <span class="onoffswitch-inactive"><span class="onoffswitch-switch">NO</span></span>
                    </span>
                    </label>
                    </div> ';



            return $data;
        } elseif ($visible == 3) {
        	
        	if ($visible) {
        		$value = ' checked';
        	} else {
        		$value = '';
        	}
        	if ($id == NULL) {
        		$id = $name;
        	}
        	 
        	$data = '<div class="onoffswitch">
                    <input type="checkbox" name="' . $name . '" class="onoffswitch-checkbox checkbox-pend ' . $class . '" id="' . $id . '" ' . $value . '>
                     <label class="onoffswitch-label" for="' . $id . '">
                        <span class="onoffswitch-inner">                       
                       
                     	<span class="onoffswitch-inactive"><span class="onoffswitch-switch">Pendiente</span></span>
                     		 <span class="onoffswitch-active"><span class="onoffswitch-switch">Aprobado</span></span>
                    </span>
                    </label>
                    </div> ';
        	
        	
        	
        	return $data;

           
        }
        return $visible;
    }

    public static function checkSwicthAll($visible, $id, $class = NULL) {

        if ($visible == 1 OR $visible == 0) {
            if ($visible) {
                $value = ' checked';
            } else {
                $value = '';
            }

           $data = '<div class="onoffswitch">
                     <input type="checkbox" name="' . $id . '" class="onoffswitch-checkbox" id="' . $id . '" ' . $value . '>
                     <label class="onoffswitch-label" for="' . $id . '">
                        <span class="onoffswitch-inner">
                        <span class="onoffswitch-active"><span class="onoffswitch-switch">ON</span></span>
                        <span class="onoffswitch-inactive"><span class="onoffswitch-switch">OFF</span></span>
                    </span>
                    </label>
                    </div> ';
           
            return $data;
        } else {
            return 'Delete';
        }
    }

    public static function getListActive() {

        return array(1 => 'Activo', 0 => 'Inactivo');
    }
    public static function getListAprobado() {

        return array(1 => 'Aprobado', 0 => 'No Aprobado');
    }

    public static function getListOpen() {

        return array(1 => 'Violentada', 0 => 'Intacta');
    }
    
    public static function getListPrioridad() {

        return array(1 => 'Baja', 0 => 'Alta');
    }

      public static function checkSwicthLabel($visible, $id = NULL) {

        if ($visible == 1) {

            $label = '<span class="label label-success"> Activo</span>';
        } elseif ($visible == 0) {

            $label = '<span class="label label-danger"> Inactivo</span>';
        } elseif ($visible == 9) {

            $label = '<span class="label-del"><i class="glyph-icon flaticon-information19"></i> Eliminado</span>';
        } else {
            $label = '<span class="btn btn-default btn-xs">' . $visible . '</span>';
        }

        return $label;
    }
    

}
