<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Lost */

$this->title = Yii::t('found', 'Create Lost');
$this->params['breadcrumbs'][] = ['label' => Yii::t('found', 'Losts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lost-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
