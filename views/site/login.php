<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<style>
/* Styles for the entire page */
body {
    margin: 0;
    padding: 0;
    overflow: hidden; /* Prevent scrolling */
}

/* Styles for the video background */
.video-background {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover; /* Cover the entire viewport */
    z-index: -1; /* Send it to the back */
}

/* Styles for the login form container */
.site-login {
    max-width: 600px;
    margin: 50px auto; /* Center the form vertically and horizontally */
    padding: 20px;
    background-color: rgba(0, 123, 255, 0.5); /* Transparent blue background */
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    font-family: Hack, sans-serif;
}

.site-login h1 {
    font-size: 2rem;
    margin-bottom: 20px;
    color: #fff; /* Changed to white for better visibility */
    text-align: center;
}

.site-login p {
    text-align: center;
    font-size: 1.1rem;
    color: #fff; /* Changed to white for better visibility */
}

.row {
    display: flex;
    justify-content: center;
}

.col-lg-5 {
    flex: 1;
}

.form-control {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ddd;
}

.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
    padding: 10px 20px;
    font-size: 1.1rem;
    width: 100%;
    margin-top: 20px;
}

.custom-checkbox {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
}

.custom-checkbox input {
    margin-right: 10px;
}

.invalid-feedback {
    color: red;
}

@media (max-width: 768px) {
    .site-login {
        padding: 10px;
    }

    .btn-primary {
        font-size: 1rem;
    }
}
</style>

<!-- Video Background with Audio -->
<video autoplay loop class="video-background" id="background-video">
    <source src="<?= Yii::getAlias('@web/image/fish.mp4') ?>" type="video/mp4">
    Your browser does not support the video tag.
</video>

<!-- Button to manually mute/unmute the video -->
<button id="mute-toggle" style="position: fixed; top: 20px; right: 20px; z-index: 1000; background-color: #007bff; color: #fff; padding: 10px; border: none; border-radius: 5px;">
    Mute
</button>

<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to login:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'fieldConfig' => [
                    'template' => "{label}\n{input}\n{error}",
                    'labelOptions' => ['class' => 'col-lg-1 col-form-label mr-lg-3'],
                    'inputOptions' => ['class' => 'col-lg-3 form-control'],
                    'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],
                ],
            ]); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'password')->passwordInput() ?>

            <?= $form->field($model, 'rememberMe')->checkbox([
                'template' => "<div class=\"custom-control custom-checkbox\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
            ]) ?>

            <div class="form-group">
                <div>
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                    <?= Html::submitButton('Create Account', ['class' => 'btn btn-primary', 'name' => 'create-account']) ?>
                </div>
            </div>

            <?php ActiveForm::end(); ?>

            <div style="color:#999;">
                You may login with <strong>admin/admin</strong> or <strong>demo/demo</strong>.<br>
                To modify the username/password, please check out the code <code>app\models\User::$users</code>.
            </div>

        </div>
    </div>
</div>

<!-- JavaScript to handle mute/unmute functionality -->
<script>
    const video = document.getElementById('background-video');
    const muteToggle = document.getElementById('mute-toggle');

    // Set up mute/unmute true or false
    video.muted = true;
    muteToggle.textContent = 'Mute';

    // Toggle mute/unmute on button click
    muteToggle.addEventListener('click', function() {
        if (video.muted) {
            video.muted = false;
            muteToggle.textContent = 'Mute';
        } else {
            video.muted = true;
            muteToggle.textContent = 'Unmute';
        }
    });
</script>
