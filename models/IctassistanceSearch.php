<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Ictassistance;

/**
 * IctassistanceSearch represents the model behind the search form of `app\models\Ictassistance`.
 */
class IctassistanceSearch extends Ictassistance
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ictnumber'], 'integer'],
            [['DATE', 'device_name', 'office_division', 'property_no', 'nature_of_request', 'brand_and_model', 'inclusion_accessories', 'diagnosis', 'action_taken', 'performed_by', 'acknowledge_by', 'reviewed_by', 'completed_date', 'date_of_approval', 'needs_procurement'], 'safe'],
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
        $query = Ictassistance::find();

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
            'ictnumber' => $this->ictnumber,
        ]);

        $query->andFilterWhere(['like', 'DATE', $this->date])
            ->andFilterWhere(['like', 'device_name', $this->device_name])
            ->andFilterWhere(['like', 'office_division', $this->office_division])
            ->andFilterWhere(['like', 'property_no', $this->property_no])
            ->andFilterWhere(['like', 'nature_of_request', $this->nature_of_request])
            ->andFilterWhere(['like', 'brand_and_model', $this->brand_and_model])
            ->andFilterWhere(['like', 'inclusion_accessories', $this->inclusion_accessories])
            ->andFilterWhere(['like', 'diagnosis', $this->diagnosis])
            ->andFilterWhere(['like', 'action_taken', $this->action_taken])
            ->andFilterWhere(['like', 'performed_by', $this->performed_by])
            ->andFilterWhere(['like', 'acknowledge_by', $this->acknowledge_by])
            ->andFilterWhere(['like', 'reviewed_by', $this->reviewed_by])
            ->andFilterWhere(['like', 'completed_date', $this->completed_date])
            ->andFilterWhere(['like', 'date_of_approval', $this->date_of_approval])
            ->andFilterWhere(['like', 'needs_procurement', $this->needs_procurement]);
          


        return $dataProvider;
    }
}
