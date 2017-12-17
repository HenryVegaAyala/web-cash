<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "usuario".
 *
 * @property integer $id
 * @property string  $nombres
 * @property string  $correo
 * @property string  $authKey
 * @property string  $accessToken
 * @property string  $fecha_digitada
 * @property string  $fecha_modificada
 * @property string  $fecha_eliminada
 * @property string  $usuario_digitado
 * @property string  $usuario_modificado
 * @property string  $usuario_eliminado
 * @property string  $ip
 * @property string  $host
 * @property integer $estado
 * @property string  $contrasena
 */
class User extends ActiveRecord implements IdentityInterface
{
    const MESSAGE_MIN_6_PW = 'Mínimo 6 digitos para la contraseña.';
    const MESSAGE_MIN_6_PW_REP = 'Mínimo 6 digitos para la contraseña repetida.';
    const MESSAGE_COMPARE = 'Las contraseñas no coinciden.';
    const FIELD_VALID = 'El campo correo debe de ser válido.';
    const MESSAGE_MIN_3 = 'Mínimo 3 caracteres del correo corporativo.';

    public $contrasena_desc;
    public $change_password;
    public $change_password_repeat;

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
            [['fecha_digitada', 'fecha_modificada', 'fecha_eliminada'], 'safe'],
            [['estado'], 'integer'],
            [['nombres', 'correo'], 'string', 'max' => 80],
            [['authKey', 'accessToken', 'host'], 'string', 'max' => 150],
            [['usuario_digitado', 'usuario_modificado', 'usuario_eliminado'], 'string', 'max' => 50],
            [['ip'], 'string', 'max' => 30],
            [['contrasena'], 'string', 'max' => 250],
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
            'authKey' => 'Auth Key',
            'accessToken' => 'Access Token',
            'fecha_digitada' => 'Fecha Digitada',
            'fecha_modificada' => 'Fecha Modificada',
            'fecha_eliminada' => 'Fecha Eliminada',
            'usuario_digitado' => 'Usuario Digitado',
            'usuario_modificado' => 'Usuario Modificado',
            'usuario_eliminado' => 'Usuario Eliminado',
            'ip' => 'Ip',
            'host' => 'Host',
            'estado' => 'Estado',
            'contrasena' => 'Contraseña',
            'change_password' => 'Contraseña',
            'contrasena_desc' => 'Repetir Contraseña',
            'change_password_repeat' => 'Repetir Contraseña',
        ];
    }

    /**
     * @param int|string $id
     * @return User|array|null|ActiveRecord
     */
    public static function findIdentity($id)
    {
        return static::find()->select([
            'id',
            'nombres',
            'correo',
        ])->where('id = :id', [':id' => $id])->one();
    }

    /**
     * @param mixed $token
     * @param null  $type
     * @return User|array|null|ActiveRecord
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::find()->select([
            'id',
            'nombres',
            'correo',
        ])->where('accessToken = :token', [':token' => $token])->one();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * @param string $authKey
     * @return bool
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * @param $username
     * @param $estado
     * @return User|array|null|ActiveRecord
     */
    public static function findByUsername($username, $estado)
    {
        return self::find()->select([
            'id',
            'nombres',
            'correo',
            'contrasena',
        ])->where([
            'correo' => $username,
            'estado' => (int)$estado,
        ])->one();
    }

    /**
     * @param $password
     * @return bool
     */
    public function validatePassword($password): bool
    {
        return Yii::$app->getSecurity()->validatePassword($password, $this->contrasena);
    }

    /**
     * @param $password
     */
    public function setPassword($password)
    {
        $this->contrasena = Yii::$app->getSecurity()->generatePasswordHash($password);
    }
}
