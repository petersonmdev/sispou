<?php

use yii\db\Migration;

/**
 * Handles adding position to table `cliente`.
 */
class m190618_162027_add_position_column_to_cliente_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('cliente', 'nome_empresa', $this->string(45));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('cliente', 'nome_empresa');
    }
}
