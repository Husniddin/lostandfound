<?php

use yii\db\Migration;

class m170207_161527_CREATE_TABLE_post_lost extends Migration
{
    public function up()
    {
        $this->execute("
            CREATE TABLE IF NOT EXISTS `lostandfound`.`post_lost` (
              `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
              `user_id` INT(11) NULL,
              `description` VARCHAR(500) NOT NULL,
              `text` TEXT NULL,
              `created_dt` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `updated_dt` DATETIME NULL,
              `post_category_id` INT UNSIGNED NULL,
              `state` ENUM('draft', 'moderated', 'published', 'deleted') NOT NULL DEFAULT 'draft',
              PRIMARY KEY (`id`),
              INDEX `fk_post_lost_user1_idx` (`user_id` ASC),
              INDEX `fk_post_lost_post_category1_idx` (`post_category_id` ASC),
              CONSTRAINT `fk_post_lost_user1`
                FOREIGN KEY (`user_id`)
                REFERENCES `lostandfound`.`user` (`id`)
                ON DELETE SET NULL
                ON UPDATE CASCADE,
              CONSTRAINT `fk_post_lost_post_category1`
                FOREIGN KEY (`post_category_id`)
                REFERENCES `lostandfound`.`post_category` (`id`)
                ON DELETE NO ACTION
                ON UPDATE NO ACTION)
            ENGINE = InnoDB
            COMMENT = 'Yo\'qotilgan buyumlar uchun.'"
        );
    }

    public function down()
    {
        echo "m170207_161527_CREATE_TABLE_post_lost cannot be reverted.\n";

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
