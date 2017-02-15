<?php

use yii\db\Migration;

class m170207_161516_CREATE_TABLE_post_category extends Migration
{
    public function up()
    {
        $this->execute("
            CREATE TABLE IF NOT EXISTS `lostandfound`.`post_category` (
              `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
              `title` VARCHAR(150) NOT NULL,
              `description` VARCHAR(255) NULL,
              `state` ENUM('draft', 'published') NULL DEFAULT 'draft',
              PRIMARY KEY (`id`))
            ENGINE = InnoDB"
        );
    }

    public function down()
    {
        echo "m170207_161516_CREATE_TABLE_post_category cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
