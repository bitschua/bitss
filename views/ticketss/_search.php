<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ticketssSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="ticketss-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'Ticket_ID') ?>
    
    <?= $form->field($model, 'Acctivity') ?>

    <?= $form->field($model, 'Issue_Discription') ?>

    <?= $form->field($model, 'Requested_By') ?>

    <?= $form->field($model, 'Office') ?>

    <?php // echo $form->field($model, 'Priority') ?>

    <?php // echo $form->field($model, 'Status') ?>

    <?php // echo $form->field($model, 'Assigned_To') ?>

    <?php // echo $form->field($model, 'Date_Resolved') ?>

    <?php // echo $form->field($model, 'Remarks') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
