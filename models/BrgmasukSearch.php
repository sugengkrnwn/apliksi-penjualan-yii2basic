<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Brgmasuk;

/**
 * BrgmasukSearch represents the model behind the search form of `app\models\Brgmasuk`.
 */
class BrgmasukSearch extends Brgmasuk
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nonota', 'tglmasuk', 'iddistributor', 'idpetugas'], 'safe'],
            [['total'], 'number'],
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
        $query = Brgmasuk::find();

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
            'total' => $this->total,
        ]);

        $query->andFilterWhere(['like', 'nonota', $this->nonota])
            ->andFilterWhere(['like', 'tglmasuk', $this->tglmasuk])
            ->andFilterWhere(['like', 'iddistributor', $this->iddistributor])
            ->andFilterWhere(['like', 'idpetugas', $this->idpetugas]);

        return $dataProvider;
    }
}
