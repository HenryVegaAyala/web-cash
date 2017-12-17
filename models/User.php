<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "usuario".
 *
 * @property integer $id
 * @property string  $nombres
 * @property string  $correo
 * @property string  $password
 * @property string  $authKey
 * @property string  $accessToken
 * @property integer $estado
 * @property string  $fecha_digitada
 * @property string  $fecha_modificada
 * @property string  $fecha_eliminada
 * @property string  $usuario_digitado
 * @property string  $usuario_modificado
 * @property string  $usuario_eliminado
 * @property string  $ip
 * @property string  $host
 */
class User extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['estado'], 'integer'],
            [['fecha_digitada', 'fecha_modificada', 'fecha_eliminada'], 'safe'],
            [['nombres', 'correo'], 'string', 'max' => 80],
            [['password', 'authKey', 'accessToken', 'host'], 'string', 'max' => 150],
            [['usuario_digitado', 'usuario_modificado', 'usuario_eliminado'], 'string', 'max' => 50],
            [['ip'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombres' => 'Nombres',
            'correo' => 'Correo',
            'password' => 'Contraseña',
            'authKey' => 'Auth Key',
            'accessToken' => 'Access Token',
            'estado' => 'Estado',
            'fecha_digitada' => 'Fecha Digitada',
            'fecha_modificada' => 'Fecha Modificada',
            'fecha_eliminada' => 'Fecha Eliminada',
            'usuario_digitado' => 'Usuario Digitado',
            'usuario_modificado' => 'Usuario Modificado',
            'usuario_eliminado' => 'Usuario Eliminado',
            'ip' => 'Ip',
            'host' => 'Host',
        ];
    }
}
