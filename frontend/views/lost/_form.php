<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Lost */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lost-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php echo $form->field($model, 'description')->textInput(['maxlength' => true]); ?>

    <?php echo $form->field($model, 'text')->textarea(['rows' => 6]); ?>

    <?php //echo $form->field($model, 'post_category_id')->textInput(); ?>

    <?php //echo $form->field($model, 'state')->dropDownList([ 'draft' => 'Draft', 'moderated' => 'Moderated', 'published' => 'Published', 'deleted' => 'Deleted', ], ['prompt' => 'Choose status']); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('found', 'Create') : Yii::t('found', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
