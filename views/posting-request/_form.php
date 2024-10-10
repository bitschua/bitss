<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Cctvform $model */
/** @var yii\widgets\ActiveForm $form */
?>

<style>
.ictassistance-form {
    font-size: 12px;
    font-weight: 300;
    margin-top: 50px;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 80%;
    margin: 0 auto;
    font-family: Hack, sans-serif;
}

.ictassistance-form table {
    width: 100%;
    border: 3px solid skyblue;
    border-collapse: separate;
    margin-top: 20px;
    text-align: left;
    font-size: 12px;
}

.header-table td {
    padding: 10px;
    text-align: left;
}

.header-table h2, .header-table h5, .header-table h6 {
    margin: 0;
    padding: 0;
    color: #333;
}

.header-table h2 {
    font-size: 24px;
    font-weight: bold;
}

.header-table h5 {
    font-size: 18px;
    text-align: center;
}

.header-table img {
    max-width: 100px;
    float: left;
    margin-right: 10px;
}

.cctvform-form {
    width: 100%;
    border: 3px solid skyblue;
    border-collapse: separate;
    margin-top: 20px;
    text-align: left;
    font-size: 12px;
}

.cctvform-form .form-group {
    margin-bottom: 15px;
}

.cctvform-form label {
    font-weight: bold;
}

.cctvform-form .form-control {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

.btn-success {
    background-color: #28a745;
    border-color: #28a745;
    padding: 10px 20px;
    font-size: 16px;
    color: white;
    border-radius: 4px;
    text-align: center;
}

.btn-success:hover {
    background-color: #218838;
    border-color: #1e7e34;
}

.btn-print {
    background-color: #007bff;
    border-color: #007bff;
    padding: 10px 20px;
    font-size: 16px;
    color: white;
    border-radius: 4px;
    text-align: center;
    margin-left: 10px;
}

.btn-print:hover {
    background-color: #0056b3;
}
</style>

<div class="ictassistance-form">
    <table class="header-table">
        <tr>
            <td colspan="4">
                <img src="/image/logo.png" alt="Logotest">
                <h6 style="text-align: left;">Republic of the Philippines</h6>
                <h6 style="text-align: left;">Department of Agriculture</h6>
                <h2 style="text-align: left;font-size: 20px;">Bureau of Agricultural and Fisheries Engineering (BAFE)</h2>
                <h6 style="text-align: left;">Sugar Center, Annex II Building Extension North Ave. Quezon City</h6>
                <br><br><h2 style="text-align: center;margin: 0;">PKMDD Planning Knowledge Management and Digitalization Division</h2></br>
            </td>
        </tr>
        <tr>
            <td colspan="4">
            <h5 style="text-align: center;margin: 0;">BAFE WEBSITE REQUEST FORM</h5>
            </td>
        </tr>
    </table>

    <div class="cctvform-form">

        <?php $form = ActiveForm::begin(); ?>
        

        <?= $form->field($model, 'Date', ['inputOptions' => ['class' => 'form-control']])->textInput(['type' => 'date']) ?>

        <?= $form->field($model, 'Name_Request')->textInput(['maxlength' => true]) ?>
        <td>
                    <?= $form->field($model, 'office_division')->dropDownList([
                        'OD' => 'OD',
                        'AFD' => 'AFD',
                        'OAD' => 'OAD',
                        'COA' => 'COA',
                        'PPMD' => 'PPMD',
                        'PKMDD' => 'PKMDD',
                        'SEPPD' => 'SEPPD',
                        'EPDSD' => 'EPDSD',

                    ], ['prompt' => 'Select Division']) ?>
            </td>

        <?= $form->field($model, 'Subject')->textarea(['rows' => 4, 'cols' => 50, 'placeholder' => 'Enter Subject Request']) ?>

        <?= $form->field($model, 'Remark')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'Status')->textInput(['maxlength' => true]) ?>

        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            <?= Html::button('Print', ['class' => 'btn btn-print', 'onclick' => 'window.print()']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>
