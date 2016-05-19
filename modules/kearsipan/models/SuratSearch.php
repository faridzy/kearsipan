<?php
namespace app\modules\kearsipan\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\kearsipan\models;

/**
 * SuratSearch represents the model behind the search form about `app\models\Surat`.
 */
class SuratSearch extends Surat
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'kategori_id', 'kelurahan_id', 'image_id', 'created_at', 'updated_at'], 'integer'],
            [['nama', 'nomor', 'tanggal'], 'safe'],
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
        $query = Surat::find();

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
            'tanggal' => $this->tanggal,
            'kategori_id' => $this->kategori_id,
            'kelurahan_id' => $this->kelurahan_id,
            'image_id' => $this->image_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama.'%',false])
            ->andFilterWhere(['like', 'nomor', $this->nomor.'%',false]);

        return $dataProvider;
    }
}
