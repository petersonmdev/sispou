<?php

use yii\db\Migration;

/**
 * Handles the creation of table `excursao`.
 * Has foreign keys to the tables:
 *
 * - `pousada`
 */
class m181120_220909_create_excursao_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('excursao', [
            'id' => $this->primaryKey(),
            'pousada_id' => $this->integer()->notNull(),
            'nome' => $this->string()->notNull(),
            'razao_social' => $this->string(),
            'cpf' => $this->string(),
            'uf' => $this->string(),
            'cidade' => $this->string(),
            'telefone' => $this->string(16)->notNull(),
            'email' => $this->string(),
            'created_at' => $this->timestamp(),
        ]);

        // creates index for column `pousada_id`
        $this->createIndex(
            'idx-excursao-pousada_id',
            'excursao',
            'pousada_id'
        );

        // add foreign key for table `pousada`
        $this->addForeignKey(
            'fk-excursao-pousada_id',
            'excursao',
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
            'fk-excursao-pousada_id',
            'excursao'
        );

        // drops index for column `pousada_id`
        $this->dropIndex(
            'idx-excursao-pousada_id',
            'excursao'
        );

        $this->dropTable('excursao');
    }
}
