<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Our Site';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-info">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Welcome to our website! This page provides an overview of our site. You can add more details and customize the content according to your needs.
    </p>

    <p>
        Our mission is to provide users with a seamless experience. Explore our site and learn more about what we offer.
    </p>

    <ul>
        <li>Our Services</li>
        <li>Company History</li>
        <li>Team Members</li>
        <li>Contact Information</li>
    </ul>

    <p>
        Feel free to update the content of this page by modifying the following file:
    </p>

    <code><?= __FILE__ ?></code>
</div>
