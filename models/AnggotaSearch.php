<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Anggota;

/**
 * AnggotaSearch represents the model behind the search form of `app\models\Anggota`.
 */
class AnggotaSearch extends Anggota
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_anggota', 'id_pengembalian', 'id_peminjaman', 'id_buku', 'id_petugas'], 'integer'],
            [['nama_anggota', 'no_telp_anggota'], 'safe'],
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
        $query = Anggota::find();

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
            'id_anggota' => $this->id_anggota,
            'id_pengembalian' => $this->id_pengembalian,
            'id_peminjaman' => $this->id_peminjaman,
            'id_buku' => $this->id_buku,
            'id_petugas' => $this->id_petugas,
        ]);

        $query->andFilterWhere(['like', 'nama_anggota', $this->nama_anggota])
            ->andFilterWhere(['like', 'no_telp_anggota', $this->no_telp_anggota]);

        return $dataProvider;
    }
}
