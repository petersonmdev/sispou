<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "excursao".
 *
 * @property int $id
 * @property int $pousada_id
 * @property string $nome
 * @property string $razao_social
 * @property string $cpf
 * @property string $uf
 * @property string $cidade
 * @property string $telefone
 * @property string $email
 * @property string $created_at
 *
 * @property Pousada $pousada
 */
class Excursao extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'excursao';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pousada_id', 'nome', 'razao_social', 'cpf', 'telefone', 'email', 'cidade'], 'required'],
            [['pousada_id'], 'integer'],
            [['created_at'], 'safe'],
            [['nome', 'razao_social', 'cpf', 'uf', 'cidade', 'email', 'tipo'], 'string', 'max' => 255],
            [['telefone'], 'string', 'max' => 16],
            [['pousada_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pousada::className(), 'targetAttribute' => ['pousada_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pousada_id' => 'Pousada ID',
            'nome' => 'Nome',
            'razao_social' => 'Empresa',
            'cpf' => 'CPF',
            'uf' => 'UF',
            'cidade' => 'Cidade',
            'telefone' => 'Telefone',
            'email' => 'Email',
            'tipo' => 'Tipo',
            'created_at' => 'Cadastrado em',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPousada()
    {
        return $this->hasOne(Pousada::className(), ['id' => 'pousada_id']);
    }
}
