<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cctv_form".
 *
 * @property int $id
 * @property string $Date
 * @property string $Name_Request
 * @property string $OFFICE_DEPARTMENT
 * @property string $Subject
 * @property string $Remark
 * @property string $Status
 */
class CctvForm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cctv_form';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Date', 'Name_Request', 'OFFICE_DEPARTMENT', 'Subject', 'Remark', 'Status'], 'required'],
            [['Date'], 'safe'],
            [['Name_Request'], 'string', 'max' => 150],
            [['OFFICE_DEPARTMENT'], 'string', 'max' => 250],
            [['Subject', 'Status'], 'string', 'max' => 100],
            [['Remark'], 'string', 'max' => 11],
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
            'OFFICE_DEPARTMENT' => 'OFFICE_DEPARTMENT',
            'Subject' => 'Subject',
            'Remark' => 'Remark',
            'Status' => 'Status',
        ];
    }
}
