<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ticketss".
 *
 * @property int $id
 * @property string $Ticket_ID
 * @property string $Acctivity
 * @property string $Issue_Discription
 * @property string $Requested_By
 * @property string $Office
 * @property string $Priority
 * @property string $Status
 * @property string $Assigned_To
 * @property string $Date_Resolved
 * @property string $Remarks
 */
class Ticketss extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ticketss';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Ticket_ID','Acctivity', 'Issue_Discription', 'Requested_By', 'Office', 'Priority', 'Status', 'Assigned_To', 'Date_Resolved', 'Remarks'], 'required'],
            [['Date_Resolved'], 'safe'],
            [['Ticket_ID'], 'string', 'max' => 30],
            [['Issue_Discription', 'Requested_By', 'Office', 'Priority', 'Status', 'Assigned_To', 'Remarks'], 'string', 'max' => 250],
        ];
    }
    
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Ticket_ID' => 'Ticket_ID',
            'Acctivity' => 'Acctivity',
            'Issue_Discription' => 'Issue Discription',
            'Requested_By' => 'Requested By',
            'Office' => 'Office',
            'Priority' => 'Priority',
            'Status' => 'Status',
            'Assigned To' => 'Assigned_To',
            'Date_Resolved' => 'Date Resolved',
            'Remarks' => 'Remarks',
        ];
    }
}
