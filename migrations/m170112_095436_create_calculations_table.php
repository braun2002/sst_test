<?php

use yii\db\Migration;

/**
 * Handles the creation of table `calculations`.
 */
class m170112_095436_create_calculations_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('calculations', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'data' => $this->text(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('calculations');
    }
}
