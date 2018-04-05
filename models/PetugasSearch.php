<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Petugas;

/**
 * PetugasSearch represents the model behind the search form of `app\models\Petugas`.
 */
class PetugasSearch extends Petugas
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idpetugas', 'namapetugas', 'alamat', 'email', 'telpon'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Petugas::find();

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
        $query->andFilterWhere(['like', 'idpetugas', $this->idpetugas])
            ->andFilterWhere(['like', 'namapetugas', $this->namapetugas])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'telpon', $this->telpon]);

        return $dataProvider;
    }
}
