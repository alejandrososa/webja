<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ja_usuarios".
 *
 * @property integer $id
 * @property string $usuario
 * @property string $imagen
 * @property string $nombre
 * @property string $apellidos
 * @property string $biografia
 * @property string $correo
 * @property string $telefono
 * @property string $redessociales
 * @property string $clave
 * @property string $direccion
 * @property string $ciudad
 * @property string $pais
 * @property string $fechacreado
 *
 * @property JaAclUsuariosPerfiles[] $jaAclUsuariosPerfiles
 */
class JaUsuarios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ja_usuarios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['usuario', 'nombre', 'apellidos', 'correo', 'clave'], 'required'],
            [['biografia', 'redessociales'], 'string'],
            [['fechacreado'], 'safe'],
            [['usuario', 'apellidos', 'pais'], 'string', 'max' => 45],
            [['imagen', 'telefono'], 'string', 'max' => 100],
            [['nombre', 'correo', 'direccion', 'ciudad'], 'string', 'max' => 50],
            [['clave'], 'string', 'max' => 200],
            [['usuario'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'usuario' => Yii::t('app', 'Usuario'),
            'imagen' => Yii::t('app', 'Imagen'),
            'nombre' => Yii::t('app', 'Nombre'),
            'apellidos' => Yii::t('app', 'Apellidos'),
            'biografia' => Yii::t('app', 'Biografia'),
            'correo' => Yii::t('app', 'Correo'),
            'telefono' => Yii::t('app', 'Telefono'),
            'redessociales' => Yii::t('app', 'Redessociales'),
            'clave' => Yii::t('app', 'Clave'),
            'direccion' => Yii::t('app', 'Direccion'),
            'ciudad' => Yii::t('app', 'Ciudad'),
            'pais' => Yii::t('app', 'Pais'),
            'fechacreado' => Yii::t('app', 'Fechacreado'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJaAclUsuariosPerfiles()
    {
        return $this->hasMany(JaAclUsuariosPerfiles::className(), ['usuario_id' => 'id']);
    }
}
