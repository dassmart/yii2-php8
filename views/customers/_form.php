<?php

use app\models\Customers;use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\Models\Customers */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="customers-form">



    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    <h4><b>Names</b></h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h4><b>Contacts</b></h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">  <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?></div>
                        <div class="col-md-6"><?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?></div>
                        <div class="col-md-12">
                            <?= $form->field($model, 'address')->textarea(['rows' => 6]) ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4><b>Status</b></h4>
                </div>
                <div class="card-body">
                    <?= $form->field($model, 'status')->checkBox() ?>
                </div>
            </div>

        </div>
    </div>





    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
