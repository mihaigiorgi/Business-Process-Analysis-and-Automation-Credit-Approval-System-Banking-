<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Clienti;

/**
 * ClientiSearch represents the model behind the search form of `app\models\Clienti`.
 */
class ClientiSearch extends Clienti
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'Durata_Creditului'], 'integer'],
            [['Nume_si_Prenume', 'CNP', 'Adresa', 'Scopul_Creditului', 'Tipul_Creditului', 'Data_Solicitarii'], 'safe'],
            [['Venit_Lunar', 'Suma_Solicitata', 'Rata_Dobanzii'], 'number'],
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
        $query = Clienti::find();

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
            'ID' => $this->ID,
            'Venit_Lunar' => $this->Venit_Lunar,
            'Suma_Solicitata' => $this->Suma_Solicitata,
            'Durata_Creditului' => $this->Durata_Creditului,
            'Data_Solicitarii' => $this->Data_Solicitarii,
            'Rata_Dobanzii' => $this->Rata_Dobanzii,
        ]);

        $query->andFilterWhere(['like', 'Nume_si_Prenume', $this->Nume_si_Prenume])
            ->andFilterWhere(['like', 'CNP', $this->CNP])
            ->andFilterWhere(['like', 'Adresa', $this->Adresa])
            ->andFilterWhere(['like', 'Scopul_Creditului', $this->Scopul_Creditului])
            ->andFilterWhere(['like', 'Tipul_Creditului', $this->Tipul_Creditului]);

        return $dataProvider;
    }
}
