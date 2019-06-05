<?php
namespace app\models;

use yii\base\Model;
use app\models\Auth;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $nome_fantasia;
    public $razao_social;
    public $cnpj;
    public $cep;
    public $endereco;
    public $bairro;
    public $numero;
    public $cidade;
    public $uf;
    public $site;
    public $telefone;
    public $celular;
    public $email;
    public $password_hash;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [

            [['nome_fantasia', 'cep', 'endereco', 'bairro', 'cidade', 'uf', 'email', 'telefone', 'password_hash'], 'required'],
            [['nome_fantasia', 'razao_social', 'cnpj', 'endereco', 'bairro', 'numero', 'cidade', 'site', 'email', 'telefone', 'celular', 'password_hash'], 'string', 'max' => 255],
            [['cep'], 'string', 'max' => 9],
            [['uf'], 'string', 'max' => 2],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'unique', 'targetClass' => '\app\models\Auth', 'message' => 'Este email já está em uso.'],

            ['password_hash', 'required'],
            ['password_hash', 'string', 'min' => 6],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new Auth();
        $user->nome_fantasia = $this->nome_fantasia;
        $user->razao_social = $this->razao_social;
        $user->cnpj = $this->cnpj;
        $user->cep = $this->cep;
        $user->endereco = $this->endereco;
        $user->bairro = $this->bairro;
        $user->numero = $this->numero;
        $user->cidade = $this->cidade;
        $user->uf = $this->uf;
        $user->email = $this->email;
        $user->telefone = $this->telefone;
        $user->celular = $this->celular;
        //$user->password_hash = $this->password_hash;
        $user->setPassword($this->password_hash);
        //$user->generateAuthKey();
        
        return $user->save() ? $user : null;
    }
}