<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Lost */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('lost', 'Losts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lost-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('lost', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('lost', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('lost', 'Are you sure you want to delete this item?'),
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
