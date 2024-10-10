<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ticketss $model */
/** @var yii\widgets\ActiveForm $form */

?>

<!-- Custom CSS for form styling -->
 
<style>
    .ticketss-form {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    
    .ticketss-form h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        font-weight: bold;
    }

    .form-control {
        padding: 10px;
        border-radius: 4px;
        border: 1px solid #ccc;
        width: 100%;
        box-sizing: border-box;
    }

    .btn-success {
        background-color: #28a745;
        border-color: #28a745;
        padding: 10px 20px;
        font-size: 16px;
    }

    .btn-success:hover {
        background-color: #218838;
        border-color: #1e7e34;
    }
</style>

<div class="ticketss-form">

    <h2>Submit a Ticket</h2>

    <?php $form = ActiveForm::begin(['id' => 'ticket-form']); ?>

    <?= $form->field($model, 'Ticket_ID', ['inputOptions' => ['class' => 'form-control']])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Acctivity')->dropDownList([
            'ICT Assistance Request' => 'ICT Assistance Request',
            'CCTV review request' => 'CCTV review request',
            'BAFE-Website (Posting/Uploading/Modification)' => 'BAFE-Website (Posting/Uploading/Modification)',
        ], ['prompt' => 'Select Request', 'class' => 'form-control', 'id' => 'activity-dropdown']) ?>

    <?= $form->field($model, 'Issue_Discription', ['inputOptions' => ['class' => 'form-control']])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Requested_By', ['inputOptions' => ['class' => 'form-control']])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Office')->dropDownList([
            'OD' => 'OD',
            'AFD' => 'AFD',
            'OAD' => 'OAD',
            'COA' => 'COA',
            'PPMD' => 'PPMD',
            'PKMDD' => 'PKMDD',
            'SEPPD' => 'SEPPD',
            'EPDSD' => 'EPDSD',
        ], ['prompt' => 'Select Division', 'class' => 'form-control']) ?>
    
    <?= $form->field($model, 'Priority')->dropDownList([
            'Highest' => 'Highest',
            'Critical' => 'Critical',
            'Alarming' => 'Alarming',
            'low' => 'low',
        ], ['prompt' => 'Select Priority', 'class' => 'form-control']) ?>

    <?= $form->field($model, 'Status', ['inputOptions' => ['class' => 'form-control']])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Assigned_To', ['inputOptions' => ['class' => 'form-control']])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Date_Resolved', ['inputOptions' => ['class' => 'form-control']])->textInput(['type' => 'date']) ?>

    <?= $form->field($model, 'Remarks', ['inputOptions' => ['class' => 'form-control']])->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success', 'id' => 'submit-button']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<!-- jQuery Script for Redirection on Form Submission -->
<?php
$this->registerJs("
    $('#ticket-form').on('submit', function(e) {
        e.preventDefault(); // Prevent the form from submitting immediately
        
        var selectedValue = $('#activity-dropdown').val();
        
        if (selectedValue === 'ICT Assistance Request') {
            window.location.href = '" . Url::to(['ictassistance/create']) . "'; // Redirect to Assistance page
        } else if (selectedValue === 'CCTV review request') {
            window.location.href = '" . Url::to(['cctv/create']) . "'; // Redirect to CCTV page
        } else if (selectedValue === 'BAFE-Website (Posting/Uploading/Modification)') {
            window.location.href = '" . Url::to(['posting-request/create']) . "'; // Redirect to Website page
        } else {
            alert('Please select a valid option ( error )');
        }
    });
");
?>
