<?php
/**
 * Created by PhpStorm.
 * User: Alejandro
 * Date: 25/12/2015
 * Time: 10:50
 */

namespace frontend\models;

use common\models\JaPaginas;
use common\models\JaUsuarios;
use app\components\FormatosHelper;

class Contenido extends JaPaginas{

    public function getUltimosArticulosCategorias(){
        $datos = JaPaginas::find()
            ->with(['autores','categorias'])
            //->select(['titulo','categorias.titulo'])
            ->select(['*'])
            //->addSelect('f_cortartexto(Leermas, Contenido, '.$max.')')
            ->filterWhere(['not', ['categoria' => 0]])
            ->andFilterWhere(['not', ['categoria' => 1]])
            ->all();

        $imagen_defecto =

        $articulos = [];
        foreach($datos as $item){

            $articulos[] = [
                "id" => $item->id,
                "titulo"=>$item->titulo,
                'contenido'=> $item->contenido,
                'imagen' => $item->imagen_cortada,
                'categoria' => $item->categorias->titulo,
                'leermas' => FormatosHelper::cortarParrafos($item->leermas, $item->contenido, 20),
                'estado' => $item->estado,
                'tipo' => $item->tipo,
                'autor' => $this->getNombreAutor($item->autores), //$item->autores['nombre'],
                'padre' => $item->padre,
                'slug' => strtolower($item->categorias->titulo).'/'.$item->slug,
                'metadescripcion' => $item->meta_descripcion,
                'metapalabras' => $item->meta_palabras,
                'metatitulo' => $item->meta_titulo,
                'dia' => FormatosHelper::dia($item->fecha_creado),
                'mes' => FormatosHelper::mes($item->fecha_creado),
                'anio' => FormatosHelper::anio($item->fecha_creado),
                'fechacreado' => $item->fecha_creado,
                'fechamodificado' => $item->fecha_modificado,
                'configuracion' => $item->configuracion
            ];
        }
        /*
        echo '<pre>';
        //print_r($datos); die();
        print_r($articulos); die();
        echo '</pre>';
        */
        return $articulos;
    }
}