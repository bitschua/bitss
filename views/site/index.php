<?php

use yii\helpers\Html;

$this->title = 'Welcome to the New Project';
?>

<style>
    .site-index {
        font-family: Hack, sans-serif;
        color: #333; /* Default text color (dark grey) */
    }

    /* Header background with solid light grey color */
    .header-background {
        background-color: #f8f9fa; /* Light grey background */
        background-position: center;
        height: 300px;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: 'Georgia', serif; /* Font for header section */
    }

    .header-background h1 {
        font-size: 48px;
        color: #1e90ff; /* Custom color for the header title (DodgerBlue) */
    }

    .header-background p {
        font-size: 18px;
        color: #555; /* Custom color for header text (medium grey) */
    }

    .body-content {
        padding: 40px 0;
        text-align: center;
        color: #333; /* Body text color (dark grey) */
        font-family: 'Verdana', sans-serif; /* Change font for body text */
    }

    .body-content h2 {
        font-size: 24px;
        color: #007bff; /* Blue color for section headings */
    }

    .body-content p {
        font-size: 16px;
        color: #555; /* Custom color for body paragraph text */
    }

    .footer {
        background-color: #f8f9fa; /* Light grey footer */
        padding: 20px;
        text-align: center;
        color: #333; /* Black text for the footer */
        font-family: 'Tahoma', sans-serif; /* Font for footer */
    }

    /* Button styling */
    .btn-default {
        font-family: 'Courier New', monospace; /* Font for buttons */
        color: white;
        background-color: #007bff; /* Blue button background */
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 5px;
        text-transform: uppercase;
    }

    .btn-default:hover {
        background-color: #0056b3; /* Darker blue on hover */
    }
</style>

<div class="site-index">

    <!-- Header with custom font and color -->
    <div class="header-background">
        <div class="jumbotron">
            <h1><?= Html::encode($this->title) ?></h1>
            <p class="lead">This is the front page of your Yii application.</p>
            <p><?= Html::a('Get Started', ['site/about'], ['class' => 'btn btn-lg btn-success']) ?></p>
        </div>
    </div>

    <!-- Body Content with custom font and color -->
    <div class="body-content">
        <div class="row">
            <div class="col-lg-4">
                <h2>Heading 1</h2>
                <p>Description for the first section of your front page. You can customize this text as needed.</p>
                <p><?= Html::a('Learn More', ['site/about'], ['class' => 'btn btn-default']) ?></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading 2</h2>
                <p>Description for the second section of your front page. Feel free to change this content.</p>
                <p><?= Html::a('Learn More', ['site/about'], ['class' => 'btn btn-default']) ?></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading 3</h2>
                <p>Description for the third section of your front page. Add any additional information here.</p>
                <p><?= Html::a('Learn More', ['site/about'], ['class' => 'btn btn-default']) ?></p>
            </div>
        </div>
    </div>

    <!-- Footer with custom font and color -->
    <div class="footer">
        <p>&copy; <?= date('Y') ?> Your Company. All rights reserved.</p>
    </div>
</div>
