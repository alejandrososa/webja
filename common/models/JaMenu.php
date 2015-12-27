<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ja_menu".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $clase
 * @property string $enlace
 * @property string $tipo_enlace
 * @property string $target
 * @property integer $padre
 * @property string $categoria
 */
class JaMenu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ja_menu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tipo_enlace', 'target', 'categoria'], 'string'],
            [['padre'], 'integer'],
            [['nombre', 'clase', 'enlace'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nombre' => Yii::t('app', 'Nombre'),
            'clase' => Yii::t('app', 'Clase'),
            'enlace' => Yii::t('app', 'Enlace'),
            'tipo_enlace' => Yii::t('app', 'Tipo Enlace'),
            'target' => Yii::t('app', 'Target'),
            'padre' => Yii::t('app', 'Padre'),
            'categoria' => Yii::t('app', 'Categoria'),
        ];
    }
}
