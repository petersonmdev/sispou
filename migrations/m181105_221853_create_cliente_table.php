<?php

use yii\db\Migration;

/**
 * Handles the creation of table `cliente`.
 * Has foreign keys to the tables:
 *
 * - `pousada`
 */
class m181105_221853_create_cliente_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('cliente', [
            'id' => $this->primaryKey(),
            'pousada_id' => $this->integer()->notNull(),
            'nome' => $this->string()->notNull(),
            'cpf' => $this->string(14),
            'sexo' => $this->string(2),
            'nascimento' => $this->string(10),
            'cep' => $this->string(9),
            'endereco' => $this->string(),
            'numero' => $this->string(),
            'bairro' => $this->string(),
            'cidade' => $this->string(),
            'uf' => $this->string(),
            'telefone' => $this->string(14),
            'celular' => $this->string(16),
            'email' => $this->string(),
            'created_at' => $this->date(),
            'updated_at' => $this->date(),
        ]);

        // creates index for column `pousada_id`
        $this->createIndex(
            'idx-cliente-pousada_id',
            'cliente',
            'pousada_id'
        );

        // add foreign key for table `pousada`
        $this->addForeignKey(
            'fk-cliente-pousada_id',
            'cliente',
            'pousada_id',
            'pousada',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `pousada`
        $this->dropForeignKey(
            'fk-cliente-pousada_id',
            'cliente'
        );

        // drops index for column `pousada_id`
        $this->dropIndex(
            'idx-cliente-pousada_id',
            'cliente'
        );

        $this->dropTable('cliente');
    }
}
