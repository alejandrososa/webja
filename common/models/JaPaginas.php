<?php

namespace common\models;

use Yii;
use karpoff\icrop\CropImageUpload;
use karpoff\icrop\CropImageUploadAsset;
use karpoff\icrop\CropImageUploadBehavior;

use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "ja_paginas".
 *
 * @property string $id
 * @property string $titulo
 * @property string $contenido
 * @property string $imagen
 * @property string $imagen_crop
 * @property string $imagen_cortada
 * @property integer $categoria
 * @property string $leermas
 * @property string $estado
 * @property string $tipo
 * @property integer $autor
 * @property string $padre
 * @property string $slug
 * @property string $meta_descripcion
 * @property string $meta_palabras
 * @property string $meta_titulo
 * @property string $fecha_creado
 * @property string $fecha_modificado
 * @property string $configuracion
 */
class JaPaginas extends \yii\db\ActiveRecord
{

    const TIPO_PORTADA = 'portada';
    const TIPO_CONTACTO = 'contacto';

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ja_paginas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['titulo'], 'required'],
            [['titulo', 'contenido', 'leermas', 'estado', 'tipo', 'slug', 'meta_descripcion', 'meta_palabras', 'configuracion'], 'string'],
            [['categoria', 'autor', 'padre'], 'integer'],
            [['fecha_creado', 'fecha_modificado'], 'safe'],
            [['imagen_crop', 'imagen_cortada'], 'string', 'max' => 200],
            //[['imagen'], 'string', 'max' => 200],
            //'checkExtensionByMimeType'=>false,
            ['imagen', 'file', 'extensions' => 'jpeg, jpg, gif, png', 'on' => ['insert', 'update']],
            [['meta_titulo'], 'string', 'max' => 80],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'titulo' => Yii::t('app', 'Titulo'),
            'contenido' => Yii::t('app', 'Contenido'),
            'imagen' => Yii::t('app', 'Imagen'),
            'imagen_crop' => Yii::t('app', 'Imagen Crop'),
            'imagen_cortada' => Yii::t('app', 'Imagen Cortada'),
            'categoria' => Yii::t('app', 'Categoria'),
            'leermas' => Yii::t('app', 'Leermas'),
            'estado' => Yii::t('app', 'Estado'),
            'tipo' => Yii::t('app', 'Tipo'),
            'autor' => Yii::t('app', 'Autor'),
            'padre' => Yii::t('app', 'Padre'),
            'slug' => Yii::t('app', 'Slug'),
            'meta_descripcion' => Yii::t('app', 'Meta Descripcion'),
            'meta_palabras' => Yii::t('app', 'Meta Palabras'),
            'meta_titulo' => Yii::t('app', 'Meta Titulo'),
            'fecha_creado' => Yii::t('app', 'Fecha Creado'),
            'fecha_modificado' => Yii::t('app', 'Fecha Modificado'),
            'configuracion' => Yii::t('app', 'Configuracion'),
        ];
    }

    /**
     * @inheritdoc
     */
    function behaviors()
    {
        return [
            [
                'class' => CropImageUploadBehavior::className(),
                'attribute' => 'imagen',
                'scenarios' => ['insert', 'update'],
                //'path' => '@webroot/imagenes/paginas',
                //'url' => '@web/imagenes/paginas',
                'path' => '@webrootfrontend/imagenes/paginas',
                'url' => '@webfrontend/imagenes/paginas',
                'ratio' => 1,
                'crop_field' => 'imagen_crop',
                'cropped_field' => 'imagen_cortada',
            ],
        ];
    }

    //RELACIONES
    public function getCategorias(){
        return $this->hasOne(JaCategorias::className(), ['id' => 'categoria']);
    }

    public function getAutores(){
        return $this->hasOne(JaUsuarios::className(), ['id' => 'autor']);
    }

    //METODOS LISTADOS
    public static function getListadoAutores(){
        return ArrayHelper::map(JaUsuarios::find()->all(), 'id','nombre');
    }
    public static function getListadoTiposArticulos(){
        return ArrayHelper::map(JaCategorias::find()->all(), 'id','titulo');
    }

    //METODOS PROPIEDADES
    public function getNombreAutor($autores){
        return ucfirst($autores['nombre']) . ' ' . ucfirst($autores['apellidos']);
    }

}