<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cctvform;

/**
 * cctvSearch represents the model behind the search form of `app\models\Cctvform`.
 */
class cctvSearch extends Cctvform
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['Date', 'Name_Request', 'OFFICE_DEPARTMENT', 'Subject', 'Remark', 'Status'], 'safe'],
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
        $query = Cctvform::find();

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
            'Date' => $this->Date,
        ]);

        $query->andFilterWhere(['like', 'Name_Request', $this->Name_Request])
            ->andFilterWhere(['like', 'OFFICE_DEPARTMENT', $this->OFFICE_DEPARTMENT])
            ->andFilterWhere(['like', 'Subject', $this->Subject])
            ->andFilterWhere(['like', 'Remark', $this->Remark])
            ->andFilterWhere(['like', 'Status', $this->Status]);

        return $dataProvider;
    }
}
