<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%post}}`.
 */
class m240415_132852_create_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%post}}', [
            'id' => $this->primaryKey(10)->unsigned()->notNull(),
            'category_id' => $this->integer(10)->notNull()->unsigned(),
            'title' => $this->string(255)->notNull(),
            'excerpt' => $this->string(255)->notNull(),
            'content' => $this->text()->notNull(),
            'img' => $this->string(255)->null()->defaultValue(null),
            'created_at' => $this->integer()->notNull(),
            'keywords' => $this->string(255)->null()->defaultValue(null),
            'description' => $this->string(255)->null()->defaultValue(null),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%post}}');
    }
}
