<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ictassistancerequest".
 *
 * @property int $ictnumber
 * @property string $date
 * @property string $device_name
 * @property string $office_division
 * @property string $property_no
 * @property string $nature_of_request
 * @property string $brand_and_model
 * @property string $inclusion_accessories
 * @property string $diagnosis
 * @property string $action_taken
 * @property string $performed_by
 * @property string $acknowledge_by
 * @property string $reviewed_by
 * @property string $completed_date
 * @property string $date_of_approval
 * @property string $needs_procurement
 */
class ictassistance extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ictassistancerequest';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date', 'device_name', 'office_division', 'property_no', 'nature_of_request', 'brand_and_model', 'inclusion_accessories', 'diagnosis', 'action_taken', 'performed_by', 'acknowledge_by', 'reviewed_by', 'completed_date', 'date_of_approval', 'needs_procurement'], 'required'],
            [['date', 'performed_by', 'acknowledge_by', 'reviewed_by', 'date_of_approval'], 'string', 'max' => 20],
            [['device_name', 'office_division', 'property_no', 'nature_of_request'], 'string', 'max' => 30],
            [['brand_and_model', 'completed_date', 'needs_procurement'], 'string', 'max' => 50],
            [['inclusion_accessories'], 'string', 'max' => 40],
            [['diagnosis', 'action_taken'], 'string', 'max' => 250],
            
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ictnumber' => 'Ictnumber',
            'date' => 'Date',
            'device_name' => 'Device Name',
            'office_division' => 'Office Division',
            'property_no' => 'Property No',
            'nature_of_request' => 'Nature Of Request',
            'brand_and_model' => 'Brand And Model',
            'inclusion_accessories' => 'Inclusion Accessories',
            'diagnosis' => 'Diagnosis',
            'action_taken' => 'Action Taken',
            'performed_by' => 'Performed By',
            'acknowledge_by' => 'Acknowledge By',
            'reviewed_by' => 'Reviewed By',
            'completed_date' => 'Completed Date',
            'date_of_approval' => 'Date Of Approval',
            'needs_procurement' => 'Needs Procurement',
           
        ];
    }
}
