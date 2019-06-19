<?php

use yii\db\Migration;

/**
 * Handles adding position to table `cliente`.
 */
class m190618_161346_add_position_column_to_cliente_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('cliente', 'cliente_tipo', $this->string(10)->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('cliente', 'cliente_tipo');
    }
}
