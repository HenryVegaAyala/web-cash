<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\caching\DbDependency;
use yii\data\ActiveDataProvider;

/**
 * UserSearch represents the model behind the search form about `app\models\User`.
 */
class UserSearch extends User
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'estado'], 'integer'],
            [
                [
                    'nombres',
                    'correo',
                ],
                'safe',
            ],
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
        $db = Yii::$app->db;
        $dependency = new DbDependency();
        $query = User::getDb()->cache(function ($db) {
            return User::find()->select([
                'id',
                'nombres',
                'correo',
                'estado',
            ])
                ->andWhere('cliente.estado = :estado', [':estado' => 1])
                ->orderBy(['usuario.nombres' => SORT_DESC]);
        }, 3600, $dependency);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'estado' => $this->estado,
        ]);

        $query->andFilterWhere(['like', 'nombres', $this->nombres])
            ->andFilterWhere(['like', 'correo', $this->correo]);

        return $dataProvider;
    }
}
