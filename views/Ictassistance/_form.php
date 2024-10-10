<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Ictassistance $model */
/** @var yii\widgets\ActiveForm $form */
?>

<style>
    .ictassistance-form {
        font-size: 11px;
        font-weight: 300;
        margin-top: 50px;
        font-family: Hack, sans-serif;
        
    }

    .ictassistance-form table {
        width: 90%;
        border: 3px solid skyblue;
        border-collapse: separate;
        font-weight: bold;
        margin-top: 20px;
    }

    .ictassistance-form td {
        padding: 4px;
        font-weight: 300;
        font-weight: bold;
        
    }
    .ictassistance-form td {
        padding: 4px;
        font-weight: 300;
        font-weight: bold;
    }
    .header-table {
        width: 80%;
        border: 5px solid darkgreen;
        border-collapse: separate;
        font-size: 12px;
        font-weight: 300;
        text-align: center;
    }

    .header-table img {
        height: 120px;
        width: auto;
        float: left;
        margin-right: auto;
    }

    .header-table h2 {
        position: relative;
    }

    .form-group {
        margin-top: 20px;
    }

    .btn-success {
        padding: 10px 20px;
        font-size: 12px;
        border-radius: 5px;
        background-color: #5cb85c;
        border-color: black;
        color: white;
        text-transform: uppercase;
    }

    .btn-success:hover {
        background-color: #4cae4c;
    }

    .form-field {
        display: flex;
        flex-direction: column;
    }

    .form-field label {
        font-weight: normal;
        margin-bottom: 5px;
    }

    .form-field input,
    .form-field select,
    .form-field textarea {
        font-weight: normal;
        padding: 5px;
        border: 2px solid #ccc;
        border-radius: 4px;
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
            <h5 style="text-align: center;margin: 0;">ICT ASSISTANCE REQUEST FORM</h5>
            </td>
        </tr>
    </table>
        <?php $form = ActiveForm::begin(); ?>
    <table>
        <tbody>

            <td>
                
                <?= $form->field($model, 'date', ['inputOptions' => ['class' => 'form-control']])->textInput(['type' => 'date']) ?>
           
            </td>


            <td>
                <?= $form->field($model, 'device_name')->textInput(['style' => 'border: none; border-bottom: 2px solid black; outline: none;','placeholder' => 'Enter device name','size' => 30,'id' => 'txtOthers']) ?>
            </td>

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
               
            </tr>
            <tr>
                

                <td>
                    <?= $form->field($model, 'property_no')->textInput(['placeholder' => 'Enter property_no or S/N ']) ?>
                </td>

                <td>
                    <?= $form->field($model, 'nature_of_request')->dropDownList([
                        'Simple' => 'Simple',
                        'Complex' => 'Complex',
                        'Highly Technical' => 'Highly Technical',
                    ], ['prompt' => 'Select Nature']) ?>
                </td>
                <td><?= $form->field($model, 'inclusion_accessories')->textInput(['maxlength' => true]) ?></td>
            </tr>
        </tbody>
    </table>



    <table>
        <tbody>
             <tr>
                
                <td>
                    <?= $form->field($model, 'brand_and_model')->textInput([
                    'style' => 'border: none; border-bottom: 2px solid black; outline: none;',
                    'placeholder' => 'Enter device name',
                    'size' => 30,
                    'id' => 'txtOthers'
                    ]) ?>
                </td>

            </tr>
            <tr>
                <td>
                     <?= $form->field($model, 'diagnosis')->textarea(['rows' => 4, 'cols' => 50, 'placeholder' => 'Enter ISSUE']) ?>
                </td>



            </tr>
            
                 <td>
                    <?= $form->field($model, 'action_taken')->dropDownList([
                        'Technical IT test' => 'to test in IT Technical',
                    ], ['rows' => 4, 'cols' => 50, 'prompt' => 'IT Technical action taken ']) ?>
                </td>
        </tbody>
    </table>

    <table>
        <tbody>
            <tr>
                <td><?= $form->field($model, 'performed_by')->textInput(['maxlength' => true]) ?></td>
                
                <td>
                 <?= $form->field($model, 'acknowledge_by')->textInput(['placeholder' => 'Enter name for requestor']) ?>
                </td>

                <td><?= $form->field($model, 'reviewed_by')->textInput(['maxlength' => true]) ?></td>
            </tr>
            <tr>
                <td>
                
                     <?= $form->field($model, 'completed_date', ['inputOptions' => ['class' => 'form-control']])->textInput(['type' => 'date']) ?>
                </td>

                <td>
                   
                    <?= $form->field($model, 'date_of_approval', ['inputOptions' => ['class' => 'form-control']])->textInput(['type' => 'date']) ?>
                </td>
                
                <td>
                    <?= $form->field($model, 'needs_procurement')->radioList([
                        'Yes' => 'Yes',
                        'No' => 'No',
                    ], [
                        'itemOptions' => ['style' => 'margin-right: 10px;'],
                    ]) ?>
                </td>
            </tr>
        </tbody>
    </table>
            
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
