<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\IctassistanceSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="ictassistance-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'ictnumber') ?>

    <?= $form->field($model, 'date') ?>

    <?= $form->field($model, 'device_name') ?>

    <?= $form->field($model, 'office_division') ?>

    <?= $form->field($model, 'property_no') ?>

    <?php // echo $form->field($model, 'nature_of_request') ?>

    <?php // echo $form->field($model, 'brand_and_model') ?>

    <?php // echo $form->field($model, 'inclusion_accessories') ?>

    <?php // echo $form->field($model, 'diagnosis') ?>

    <?php // echo $form->field($model, 'action_taken') ?>

    <?php // echo $form->field($model, 'performed_by') ?>

    <?php // echo $form->field($model, 'acknowledge_by') ?>

    <?php // echo $form->field($model, 'reviewed_by') ?>

    <?php // echo $form->field($model, 'completed_date') ?>

    <?php // echo $form->field($model, 'date_of_approval') ?>

    <?php // echo $form->field($model, 'needs_procurement') ?>

 

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
