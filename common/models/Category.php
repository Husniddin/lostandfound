<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%post_category}}".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $state
 *
 * @property Found[] $Founds
 * @property Lost[] $Losts
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['state'], 'string'],
            [['title'], 'string', 'max' => 150],
            [['description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'description' => Yii::t('app', 'Description'),
            'state' => Yii::t('app', 'State'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFounds()
    {
        return $this->hasMany(Found::className(), ['post_category_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLosts()
    {
        return $this->hasMany(Lost::className(), ['post_category_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return PostCategoryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PostCategoryQuery(get_called_class());
    }
}
