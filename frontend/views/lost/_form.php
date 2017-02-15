<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Lost */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lost-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'created_dt')->textInput() ?>

    <?= $form->field($model, 'updated_dt')->textInput() ?>

    <?= $form->field($model, 'post_category_id')->textInput() ?>

    <?= $form->field($model, 'state')->dropDownList([ 'draft' => 'Draft', 'moderated' => 'Moderated', 'published' => 'Published', 'deleted' => 'Deleted', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('lost', 'Create') : Yii::t('lost', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
