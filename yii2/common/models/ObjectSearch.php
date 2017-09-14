<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Object;

/**
 * ObjectSearch represents the model behind the search form about `common\models\Object`.
 */
class ObjectSearch extends Object
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'status', 'price', 'top', 'coditioning', 'heating', 'balcony', 'dishwasher', 'pool', 'internet', 'terrace', 'microwave', 'fridge', 'cable_tv', 'security_camera', 'ceiling_height', 'floor', 'total_floor', 'rooms', 'year', 'country_id', 'region_id', 'city_id', 'agent_id', 'object_type_id', 'operation_id'], 'integer'],
            [['created_at', 'lt', 'lg'], 'safe'],
            [['area', 'area_kitch', 'area_live'], 'number'],
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
        $query = Object::find();

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
            'created_at' => $this->created_at,
            'status' => $this->status,
            'price' => $this->price,
            'top' => $this->top,
            'coditioning' => $this->coditioning,
            'heating' => $this->heating,
            'balcony' => $this->balcony,
            'dishwasher' => $this->dishwasher,
            'pool' => $this->pool,
            'internet' => $this->internet,
            'terrace' => $this->terrace,
            'microwave' => $this->microwave,
            'fridge' => $this->fridge,
            'cable_tv' => $this->cable_tv,
            'security_camera' => $this->security_camera,
            'area' => $this->area,
            'area_kitch' => $this->area_kitch,
            'area_live' => $this->area_live,
            'ceiling_height' => $this->ceiling_height,
            'floor' => $this->floor,
            'total_floor' => $this->total_floor,
            'rooms' => $this->rooms,
            'year' => $this->year,
            'country_id' => $this->country_id,
            'region_id' => $this->region_id,
            'city_id' => $this->city_id,
            'agent_id' => $this->agent_id,
            'object_type_id' => $this->object_type_id,
            'operation_id' => $this->operation_id,
        ]);

        $query->andFilterWhere(['like', 'lt', $this->lt])
            ->andFilterWhere(['like', 'lg', $this->lg]);

        return $dataProvider;
    }
}
