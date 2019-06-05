<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pousada".
 *
 * @property int $id
 * @property string $nome_fantasia
 * @property string $razao_social
 * @property string $cnpj
 * @property string $cep
 * @property string $endereco
 * @property string $bairro
 * @property string $numero
 * @property string $cidade
 * @property string $uf
 * @property string $telefone
 * @property string $celular
 * @property string $email
 * @property string $password_hash
 * @property string $auth_key
 * @property string $password_reset_token
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Cliente[] $clientes
 */
class Pousada extends \yii\db\ActiveRecord
{

    public $newPassword;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pousada';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome_fantasia', 'razao_social', 'telefone', 'email', 'password_hash'], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['nome_fantasia', 'razao_social', 'endereco', 'bairro', 'numero', 'cidade', 'email', 'password_hash', 'auth_key', 'password_reset_token', 'rp_nome', 'rp_cpf', 'rp_telefone', 'rp_celular', 'rp_email',], 'string', 'max' => 255],
            [['cnpj'], 'string', 'max' => 18],
            [['cep'], 'string', 'max' => 9],
            [['uf'], 'string', 'max' => 2],
            [['telefone', 'rp_telefone'], 'string', 'max' => 14],
            [['celular', 'rp_celular'], 'string', 'max' => 16],
            [['newPassword'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome_fantasia' => 'Nome Fantasia',
            'razao_social' => 'Razao Social',
            'cnpj' => 'Cnpj',
            'cep' => 'Cep',
            'endereco' => 'Endereco',
            'bairro' => 'Bairro',
            'numero' => 'Numero',
            'cidade' => 'Cidade',
            'uf' => 'Uf',
            'telefone' => 'Telefone',
            'celular' => 'Celular',
            'email' => 'Email',
            'password_hash' => 'Senha',

            'rp_nome' => 'Nome',
            'rp_cpf' => 'CPF',
            'rp_telefone' => 'Telefone',
            'rp_celular' => 'Celular',
            'rp_email' => 'E-mail',


            'auth_key' => 'Auth Key',
            'password_reset_token' => 'Password Reset Token',
            'status' => 'Status',
            'created_at' => 'Criado em',
            'updated_at' => 'Atualizado em',

            'newPassword' => 'Alterar senha?'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClientes()
    {
        return $this->hasMany(Cliente::className(), ['pousada_id' => 'id']);
    }
}