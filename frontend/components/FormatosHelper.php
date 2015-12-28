<?php
/**
 * Created by PhpStorm.
 * User: Alejandro
 * Date: 24/12/2015
 * Time: 16:27
 */
namespace app\components;

use Moment\Moment;

class FormatosHelper{

    public static function cortarParrafos($leermas, $contenido, $limit){
        $text = $leermas !== '' ? $leermas : $contenido;
        $text = strip_tags($text);

        if (str_word_count($text, 0) > $limit) {
            $words = str_word_count($text, 2);
            $pos = array_keys($words);
            $text = substr($text, 0, $pos[$limit]) . '...';
        }
        return $text;
    }
    public static function dia($fecha){
        $fecha = isset($fecha) && $fecha !== '' ? $fecha : '';
        $dato = new Moment($fecha);
        return $dato->getDay();
    }
    public static function mes($fecha){
        $fecha = isset($fecha) && $fecha !== '' ? $fecha : '';
        $dato = new Moment($fecha);
        return $dato->getMonthNameShort();
    }
    public static function anio($fecha){
        $fecha = isset($fecha) && $fecha !== '' ? $fecha : '';
        $dato = new Moment($fecha);
        return $dato->getYear();
    }

}
?>