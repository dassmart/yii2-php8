<?php

/* @var $this yii\web\View */
/* @var $model app\models\Products */

$this->title = 'Update Products: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
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