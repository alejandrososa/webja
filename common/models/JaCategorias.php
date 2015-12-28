<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ja_categorias".
 *
 * @property string $id
 * @property string $titulo
 * @property string $slug
 */
class JaCategorias extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ja_categorias';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['titulo', 'slug'], 'string', 'max' => 255]
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
            'slug' => Yii::t('app', 'Slug'),
        ];
    }
}
