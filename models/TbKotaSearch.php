<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TbKota;

/**
 * TbKotaSearch represents the model behind the search form of `app\models\TbKota`.
 */
class TbKotaSearch extends TbKota
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kota', 'id_provensi'], 'integer'],
            [['nama_kota'], 'safe'],
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
        $query = TbKota::find();

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
            'id_kota' => $this->id_kota,
            'id_provensi' => $this->id_provensi,
        ]);

        $query->andFilterWhere(['like', 'nama_kota', $this->nama_kota]);

        return $dataProvider;
    }
}
