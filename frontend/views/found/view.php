<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Found */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('found', 'Founds'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="found-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('found', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('found', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('found', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'user_id',
            'description',
            'text:ntext',
            'created_dt',
            'updated_dt',
            'post_category_id',
            'state',
        ],
    ]) ?>

</div>
