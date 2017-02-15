<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Found */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="found-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'created_dt')->textInput() ?>

    <?= $form->field($model, 'updated_dt')->textInput() ?>

    <?= $form->field($model, 'post_category_id')->textInput() ?>

    <?= $form->field($model, 'state')->dropDownList([ 'draft' => 'Draft', 'moderated' => 'Moderated', 'published' => 'Published', 'deleted' => 'Deleted', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('found', 'Create') : Yii::t('found', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
