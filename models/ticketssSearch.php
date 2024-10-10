<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ticketss;

/**
 * ticketssSearch represents the model behind the search form of `app\models\ticketss`.
 */
class ticketssSearch extends ticketss
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['Ticket_ID','Acctivity', 'Issue_Discription', 'Requested_By', 'Office', 'Priority', 'Status', 'Assigned_To', 'Date_Resolved', 'Remarks'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = ticketss::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'Date_Resolved' => $this->Date_Resolved,
        ]);
        
        $query->andFilterWhere(['like', 'Ticket_ID', $this->Ticket_ID])
             ->andFilterWhere(['like', 'Acctivity', $this->Acctivity])
            ->andFilterWhere(['like', 'Issue_Discription', $this->Issue_Discription])
            ->andFilterWhere(['like', 'Requested_By', $this->Requested_By])
            ->andFilterWhere(['like', 'Office', $this->Office])
            ->andFilterWhere(['like', 'Priority', $this->Priority])
            ->andFilterWhere(['like', 'Status', $this->Status])
            ->andFilterWhere(['like', 'Assigned_To', $this->Assigned_To])
            ->andFilterWhere(['like', 'Remarks', $this->Remarks]);

        return $dataProvider;
    }
}
