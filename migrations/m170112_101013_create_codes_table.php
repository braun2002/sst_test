<?php

use yii\db\Migration;

/**
 * Handles the creation of table `codes`.
 * Has foreign keys to the tables:
 *
 * - `calculations`
 */
class m170112_101013_create_codes_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('codes', [
            'id' => $this->primaryKey(),
            'id_calc' => $this->integer(),
            'code' => $this->integer()->notNull(),
        ]);

        // creates index for column `id_calc`
        $this->createIndex(
            'idx-codes-id_calc',
            'codes',
            'id_calc'
        );

        // add foreign key for table `calculations`
        $this->addForeignKey(
            'fk-codes-id_calc',
            'codes',
            'id_calc',
            'calculations',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `calculations`
        $this->dropForeignKey(
            'fk-codes-id_calc',
            'codes'
        );

        // drops index for column `id_calc`
        $this->dropIndex(
            'idx-codes-id_calc',
            'codes'
        );

        $this->dropTable('codes');
    }
}
