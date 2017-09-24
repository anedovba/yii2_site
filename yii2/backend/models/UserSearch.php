<?php

namespace backend\models;

use DateTime;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\User;

/**
 * UserSearch represents the model behind the search form about `backend\models\User`.
 */
class UserSearch extends User
{
    public $from;
    public $to;
    public $from_up;
    public $to_up;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'status', 'created_at', 'updated_at', 'subscribe', 'role' ], 'integer'],
            [['from', 'to','from_up', 'to_up'],'date'],
            [['username', 'auth_key', 'password_hash', 'password_reset_token', 'email'], 'safe'],
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
        $query = User::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
//            'sort'=>[
//                'attributes'=>
//                ''=>
//            ]
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
            'status' => $this->status,
//            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'subscribe' => $this->subscribe,
            'role' => $this->role,
        ]);

        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'auth_key', $this->auth_key])
//            ->andFilterWhere(['and', ['>', 'created_at', $this->created_at],['<', 'created_at', $this->created_at+86400]]) // фильтр - выбор конкретного дня
//            ->andFilterWhere(['>', 'created_at', $this->created_at]) // фильтр - выбор всех дней больше указанного
            ->andFilterWhere(['like', 'password_hash', $this->password_hash])
            ->andFilterWhere(['like', 'password_reset_token', $this->password_reset_token])
            ->andFilterWhere(['like', 'email', $this->email]);
        if(!empty( $this->from)&&!empty( $this->to)){
            $query->andFilterWhere(['and', ['>', 'created_at', (int)(new DateTime($this->from))->format('U')],['<', 'created_at', (int)(new DateTime($this->to))->format('U')]]);

        }
        if(!empty( $this->from_up)&&!empty( $this->to_up)){
            $query->andFilterWhere(['and', ['>', 'updated_at', (int)(new DateTime($this->from_up))->format('U')],['<', 'updated_at', (int)(new DateTime($this->to_up))->format('U')]]);

        }
        return $dataProvider;
    }
}
