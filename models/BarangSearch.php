<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Barang;

/**
 * BarangSearch represents the model behind the search form of `app\models\Barang`.
 */
class BarangSearch extends Barang
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kodebarang', 'namabarang', 'kodejenis'], 'safe'],
            [['harganet', 'hargajual'], 'number'],
            [['stok'], 'integer'],
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
        $query = Barang::find();

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
            'harganet' => $this->harganet,
            'hargajual' => $this->hargajual,
            'stok' => $this->stok,
        ]);

        $query->andFilterWhere(['like', 'kodebarang', $this->kodebarang])
            ->andFilterWhere(['like', 'namabarang', $this->namabarang])
            ->andFilterWhere(['like', 'kodejenis', $this->kodejenis]);

        return $dataProvider;
    }
}
