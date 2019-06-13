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
    public $email;
    public $password_hash;
    public $rememberMe = true;

    private $_user = false;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // email and password_hash are both required
            [['email', 'password_hash'], 'required'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
            // password_hash is validated by validatePassword()
            ['password_hash', 'validatePassword'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'email' => 'Email',
            'password_hash' => 'Senha',
            'rememberMe' => 'Lembra-me'
        ];
    }

    /**
     * Validates the password_hash.
     * This method serves as the inline validation for password_hash.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();

            if (!$user || !$user->validatePassword($this->password_hash)) {
                $this->addError($attribute, 'Usuário ou senha incorreto.');
            }
        }
    }

    /**
     * Logs in a user using the provided email and password_hash.
     * @return bool whether the user is logged in successfully
     */
    public function login()
    {
        if ($this->validate()) {
            return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600*24*30 : 0);
        }
        return false;
    }

    /**
     * Finds user by [[email]]
     *
     * @return User|null
     */
    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = Auth::findByUsername($this->email);
        }

        return $this->_user;
    }
}
