<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Detailpenjualan;

/**
 * DetailpenjualanSearch represents the model behind the search form of `app\models\Detailpenjualan`.
 */
class DetailpenjualanSearch extends Detailpenjualan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_detailpenjualan', 'jumlah'], 'integer'],
            [['nofaktur', 'kodebarang'], 'safe'],
            [['subtotal'], 'number'],
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
        $query = Detailpenjualan::find();

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
            'id_detailpenjualan' => $this->id_detailpenjualan,
            'jumlah' => $this->jumlah,
            'subtotal' => $this->subtotal,
        ]);

        $query->andFilterWhere(['like', 'nofaktur', $this->nofaktur])
            ->andFilterWhere(['like', 'kodebarang', $this->kodebarang]);

        return $dataProvider;
    }
}
