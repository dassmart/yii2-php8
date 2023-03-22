<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Products */

$this->title = 'Create Products';
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container-fluid">
    <div class='d-flex justify-content-center '>
        <div class="row">
            <div class="col-md-12">
                <?=$this->render('_form', [
                    'model' => $model
                ]) ?>
            </div>
        </div>
    </div>
</div>