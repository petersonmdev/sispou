<?php

use yii\db\Migration;

/**
 * Handles the creation of table `pousada`.
 */
class m181105_221840_create_pousada_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('pousada', [
            'id' => $this->primaryKey(),
            'nome_fantasia' => $this->string()->notNull(),
            'razao_social' => $this->string()->notNull(),
            'cnpj' => $this->string(18),
            'cep' => $this->string(9),
            'endereco' => $this->string(),
            'bairro' => $this->string(),
            'numero' => $this->string(),
            'cidade' => $this->string(),
            'uf' => $this->string(2),
            'telefone' => $this->string(14)->notNull(),
            'celular' => $this->string(16),
            'email' => $this->string()->notNull(),
            'password_hash' => $this->string()->notNull(),
            'auth_key' => $this->string(),
            'password_reset_token' => $this->string(),
            'status' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('pousada');
    }
}
