<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Lost */

$this->title = Yii::t('found', 'Update {modelClass}: ', [
    'modelClass' => 'Lost',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('found', 'Losts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('found', 'Update');
?>
<div class="lost-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
