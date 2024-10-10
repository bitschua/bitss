<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "posting_request".
 *
 * @property int $id
 * @property string $Date
 * @property string $Name_Request
 * @property string $office_division
 * @property string $Subject
 * @property string $Remark
 * @property string $Status
 */
class PostingRequest extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'posting_request';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Date', 'Name_Request', 'office_division', 'Subject', 'Remark', 'Status'], 'required'],
            [['Date'], 'safe'],
            [['Name_Request', 'office_division'], 'string', 'max' => 150],
            [['Subject', 'Remark', 'Status'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Date' => 'Date',
            'Name_Request' => 'Name Request',
            'office_division' => 'office_division',
            'Subject' => 'Subject',
            'Remark' => 'Remark',
            'Status' => 'Status',
        ];
    }
}
