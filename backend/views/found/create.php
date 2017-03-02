<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Found */

$this->title = Yii::t('found', 'Create Found');
$this->params['breadcrumbs'][] = ['label' => Yii::t('found', 'Founds'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="found-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
