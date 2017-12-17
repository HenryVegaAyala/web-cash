<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class LoginForm extends Model
{
    const USERNAME = 'username';
    const USER_PASS = 'password';
    public $username;
    public $password;
    public $rememberMe = true;
    private $user = false;

    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            [[self::USERNAME, self::USER_PASS], 'required'],
            ['rememberMe', 'boolean'],
            [self::USER_PASS, 'validatePassword'],
            [[self::USERNAME], 'match', 'pattern' => '/^.{1,45}$/', 'message' => 'Mínimo 1 caracter'],
            [[self::USERNAME], 'email', 'message' => 'Tiene que ser un correo válido.'],

        ];
    }

    /**
     * @return array
     */
    public function attributeLabels(): array
    {
        return [
            self::USERNAME => 'Usuario',
            self::USER_PASS => 'Contraseña',
        ];
    }

    /**
     * @param $attribute
     */
    public function validatePassword($attribute)
    {
        if (!$this->hasErrors()) {
            if (!$this->getUser()) {
                $this->addError($attribute, 'Usuario ingresado es incorrecto.');
            } elseif (!$this->getUser()->validatePassword($this->password)) {
                $this->addError($attribute, 'Contraseña ingresada es incorrecta.');
            } elseif (!$this->getUser() && !$this->getUser()->validatePassword($this->password)) {
                $this->addError($attribute, 'Usuario ó Contraseña Incorrecta.');
            }
        }
    }

    /**
     * @return bool
     */
    public function login(): bool
    {
        if ($this->validate()) {
            return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 2592000 : 0);
        }

        return false;
    }

    /**
     * @return array|bool|null|\yii\db\ActiveRecord
     */
    public function getUser()
    {
        if ($this->user === false) {
            $this->user = User::findByUsername($this->username, true);
        }

        return $this->user;
    }
}