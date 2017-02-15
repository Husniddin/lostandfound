<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\LostSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lost-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'text') ?>

    <?= $form->field($model, 'created_dt') ?>

    <?php // echo $form->field($model, 'updated_dt') ?>

    <?php // echo $form->field($model, 'post_category_id') ?>

    <?php // echo $form->field($model, 'state') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('lost', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('lost', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
