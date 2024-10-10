<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\PostingRequestSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="posting-request-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'Date') ?>

    <?= $form->field($model, 'Name_Request') ?>

    <?= $form->field($model, 'office_division') ?>

    <?= $form->field($model, 'Subject') ?>

    <?php  $form->field($model, 'Remark') ?>

    <?php  $form->field($model, 'Status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
