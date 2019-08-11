<?php

use yii\db\Migration;

/**
 * Class m190811_114550_createTablesWorks
 */
class m190811_114550_createTablesWorks extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('works',[
            'id'=>$this->primaryKey(),
            'date'=>$this->dateTime()->notNull(),
            'name'=>$this->string(100)->notNull(),
            'description'=>$this->text(),
            'link' => $this->string(100)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('works');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190811_114550_createTablesWorks cannot be reverted.\n";

        return false;
    }
    */
}
