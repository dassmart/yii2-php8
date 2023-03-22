
<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;use kartik\export\ExportMenu;


/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;

$coloumns=[
['class' => 'yii\grid\SerialColumn'],

                            'id',
                            'name',
                            'description:ntext',
                            'price',
                            'created',
                            //'modified',
                            //'status',

['class' => 'hail812\adminlte3\yii\grid\ActionColumn'],
];
$exportMenu = ExportMenu::widget([
'dataProvider' => $dataProvider,
'columns' => $coloumns,
]);
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class='d-flex justify-content-center'>


                                    <?php Pjax::begin(); ?>
                                                        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
                
                                    <div class="mb-2 row">
                        <div class="col-md-12">
                            <div class="float-left"><h2 > <?=   $this->title ?></h2></div>
                            <div class="float-right">  <?= Html::a('Create Products', ['create'], ['class' => 'btn btn-success']) ?></div>
                        </div>
                    </div>
                                    <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'striped'=>false,
                    'layout'=>Yii::$app->appcomponent->gridLayout($exportMenu),
                    'filterModel' => $searchModel,
                        'columns' => $coloumns,

                    'summaryOptions' => ['class' => 'summary mb-2'],
                    'pager' => [
                    'class' => 'yii\bootstrap4\LinkPager',
                    ]
                    ]); ?>
                
                                    <?php Pjax::end(); ?>
                </div>

            </div>
            <!--.col-md-12-->
        </div>
        <!--.row-->
    </div>