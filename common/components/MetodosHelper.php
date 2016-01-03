<?php
/**
 * Created by PhpStorm.
 * User: Alejandro
 * Date: 02/01/2016
 * Time: 14:26
 */

namespace common\components;

use Yii;

class MetodosHelper
{
    public static function mostrarEnVista($vista){
        $resultado = false;
        if(empty($vista)){
            return $resultado;
        }
        if(is_array($vista)){
            if (in_array(Yii::$app->controller->action->id, $vista)) {
                $resultado = true;
            }
        }else {
            if (Yii::$app->controller->action->id === $vista) {
                $resultado = true;
            }
        }
        return $resultado;
    }

    public static function ocultarEnVista($vista){
        $resultado = true;
        if(empty($vista)){
            return $resultado;
        }
        if(is_array($vista)){
            if (in_array(Yii::$app->controller->action->id, $vista)) {
                $resultado = false;
            }
        }else {
            if (Yii::$app->controller->action->id === $vista) {
                $resultado = false;
            }
        }
        return $resultado;
    }

}