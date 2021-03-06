<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "post_found".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $description
 * @property string $text
 * @property string $created_dt
 * @property string $updated_dt
 * @property integer $post_category_id
 * @property string $state
 *
 * @property Category $Category
 * @property User $user
 */
class Found extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post_found';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'post_category_id'], 'integer'],
            [['description', 'user_id'], 'required'],
            [['text', 'state'], 'string'],
            [['created_dt', 'updated_dt'], 'safe'],
            [['description'], 'string', 'max' => 500],
            [['post_category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['post_category_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('found', 'ID'),
            'user_id' => Yii::t('found', 'User ID'),
            'description' => Yii::t('found', 'Description'),
            'text' => Yii::t('found', 'Text'),
            'created_dt' => Yii::t('found', 'Created Dt'),
            'updated_dt' => Yii::t('found', 'Updated Dt'),
            'post_category_id' => Yii::t('found', 'Post Category ID'),
            'state' => Yii::t('found', 'State'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'post_category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
