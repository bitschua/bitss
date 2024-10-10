<?php

use app\models\Ictassistance;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\widgets\LinkPager;

/** @var yii\web\View $this */
/** @var app\models\IctassistanceSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Ictassistances';
$this->params['breadcrumbs'][] = $this->title;



?>

<div class="ictassistance-index">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php Pjax::begin(); ?>
    <p>
        <?= Html::a('Create Ticketss', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <table class="table table-bordered table-condensed table-striped table-hover">
        
        <thead class="table-dark">
    

            <tr>
                <th>ICT Number</th>
                <th>Date</th>
                <th>Device Name</th>
                <th>Office Division</th>
                <th>Property No</th>
                <th>Nature of Request</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dataProvider->getModels() as $key => $value) : ?>
                <tr>
                    <td><?= Html::encode($value->ictnumber) ?></td>
                    <td><?= Html::encode($value->date) ?></td>
                    <td><?= Html::encode($value->device_name) ?></td>
                    <td style="width: 10%;"><?= Html::encode($value->office_division) ?></td>
                    <td style="width: 20%;"><?= Html::encode($value->property_no) ?></td>
                    <td><?= Html::encode($value->nature_of_request) ?></td>
                    <td style="width: 10%;">
                        <?= Html::a('<span class="material-icons">remove_red_eye</span>', ['view', 'ictnumber' => $value->ictnumber], ['class' => 'myButton', 'style' => 'color: #0099cc']) ?>
                        <?= Html::a('<span class="material-icons">edit</span>', ['update', 'ictnumber' => $value->ictnumber], ['class' => 'myButton', 'style' => 'color: #008000']) ?>
                        <?= Html::a('<span class="material-icons">delete</span>', ['delete', 'ictnumber' => $value->ictnumber], [
                            'class' => 'myButton',
                            'style' => 'color: #cc0000',
                            'data' => [
                                'confirm' => 'Are you sure you want to delete this item?',
                                'method' => 'post',
                            ],
                        ]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <?= LinkPager::widget([
        'pagination' => $dataProvider->pagination,
    ]); ?>

    <?php Pjax::end(); ?>
</div>
