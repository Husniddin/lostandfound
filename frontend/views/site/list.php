<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;
?>
<div class="container-fluid">
      <div class="row">
        <!-- <div class="col-sm-3 col-md-2 sidebar" style="height: 150px;"> -->
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
            <li><a href="<?php echo Url::to(['lost/']); ?>">Yo'qotilgan buyumlar</a></li>
            <li><a href="<?php echo Url::to(['found/']); ?>">Topilgan buyumlar</a></li>
            <li><a href="#">Export</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item</a></li>
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
            <li><a href="">More navigation</a></li>
          </ul>
          <!-- <ul class="nav nav-sidebar">
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
          </ul> -->
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <!-- <h1 class="page-header">Dashboard</h1> -->

          <div class="row">
            <div class="col-lg-6">
              <h2 class="sub-header">Losts</h2>
              <div class="table-responsive">
                <p>
                  <?= Html::a(Yii::t('found', 'Create Lost'), ['lost/create'], ['class' => 'btn btn-success']) ?>
                </p>
                <?php //Pjax::begin(); ?>    
                  <?php 
                    echo GridView::widget([
                      'dataProvider' => $lostDataProvider,
                      // 'filterModel' => $searchModel,
                      // 'layout'=>"{sorter}\n{pager}\n{summary}\n{items}",
                      'layout'=>"{items}\n{pager}",
                      'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],
                        // 'id',
                        'description',
                        [
                          'header' => 'User',
                          'value' => function ($data) {
                            return $data->user?$data->user->username:'';
                          },
                        ],
                        // 'text:ntext',
                        'created_dt',
                        // 'updated_dt',
                        // 'post_category_id',
                        // 'state',
                        // ['class' => 'yii\grid\ActionColumn'],
                      ],
                    ]); 
                  ?>
                <?php //Pjax::end(); ?>
              </div>
            </div>
            <div class="col-lg-6">
              <h2 class="sub-header">Founds</h2>
              <div class="table-responsive">
                <p>
                  <?= Html::a(Yii::t('found', 'Create Found'), ['found/create'], ['class' => 'btn btn-success']) ?>
                </p>
                <?php //Pjax::begin(); ?>
                  <?php 
                    echo GridView::widget([
                      'dataProvider' => $foundDataProvider,
                      // 'filterModel' => $searchModel,
                      // 'layout'=>"{sorter}\n{pager}\n{summary}\n{items}",
                      'layout'=>"{items}\n{pager}",
                      'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],
                        // 'id',
                        'description',
                        [
                          'header' => 'User',
                          'value' => function ($data) {
                            return $data->user?$data->user->username:'';
                          },
                        ],
                        // 'text:ntext',
                        'created_dt',
                        // 'updated_dt',
                        // 'post_category_id',
                        // 'state',
                        // ['class' => 'yii\grid\ActionColumn'],
                      ],
                    ]); 
                  ?>
                <?php //Pjax::end(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<style type="text/css">
  /*
 * Base structure
 */

/* Move down content because we have a fixed navbar that is 50px tall */
body {
  padding-top: 50px;
}


/*
 * Global add-ons
 */

.sub-header {
  padding-bottom: 10px;
  border-bottom: 1px solid #eee;
}

/*
 * Top navigation
 * Hide default border to remove 1px line.
 */
.navbar-fixed-top {
  border: 0;
}

/*
 * Sidebar
 */

/* Hide for mobile, show later */
.sidebar {
  display: none;
}
@media (min-width: 768px) {
  .sidebar {
    position: fixed;
    top: 51px;
    bottom: 0;
    left: 0;
    z-index: 1000;
    display: block;
    padding: 20px;
    overflow-x: hidden;
    overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
    background-color: #f5f5f5;
    border-right: 1px solid #eee;
  }
}

/* Sidebar navigation */
.nav-sidebar {
  margin-right: -21px; /* 20px padding + 1px border */
  margin-bottom: 20px;
  margin-left: -20px;
}
.nav-sidebar > li > a {
  padding-right: 20px;
  padding-left: 20px;
}
.nav-sidebar > .active > a,
.nav-sidebar > .active > a:hover,
.nav-sidebar > .active > a:focus {
  color: #fff;
  background-color: #428bca;
}


/*
 * Main content
 */

.main {
  /*padding: 20px;*/
}
@media (min-width: 768px) {
  .main {
    /*padding-right: 40px;*/
    /*padding-left: 40px;*/
  }
}
.main .page-header {
  margin-top: 0;
}


/*
 * Placeholder dashboard ideas
 */

.placeholders {
  margin-bottom: 30px;
  text-align: center;
}
.placeholders h4 {
  margin-bottom: 0;
}
.placeholder {
  margin-bottom: 20px;
}
.placeholder img {
  display: inline-block;
  border-radius: 50%;
}

</style>