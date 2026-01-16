<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clienti".
 *
 * @property int $ID
 * @property string $Nume_si_Prenume
 * @property string $CNP
 * @property string $Adresa
 * @property float $Venit_Lunar
 * @property float $Suma_Solicitata
 * @property int $Durata_Creditului
 * @property string $Scopul_Creditului
 * @property string $Tipul_Creditului
 * @property string $Data_Solicitarii
 * @property float $Rata_Dobanzii
 */
class Clienti extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'clienti';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nume_si_Prenume', 'CNP', 'Adresa', 'Venit_Lunar', 'Suma_Solicitata', 'Durata_Creditului', 'Scopul_Creditului', 'Tipul_Creditului', 'Data_Solicitarii', 'Rata_Dobanzii'], 'required'],
            [['Adresa', 'Scopul_Creditului'], 'string'],
            [['Venit_Lunar', 'Suma_Solicitata', 'Rata_Dobanzii'], 'number'],
            [['Durata_Creditului'], 'integer'],
            [['Data_Solicitarii'], 'safe'],
            [['Nume_si_Prenume'], 'string', 'max' => 255],
            [['CNP'], 'string', 'max' => 13],
            [['Tipul_Creditului'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Nume_si_Prenume' => 'Nume Si Prenume',
            'CNP' => 'Cnp',
            'Adresa' => 'Adresa',
            'Venit_Lunar' => 'Venit Lunar',
            'Suma_Solicitata' => 'Suma Solicitata',
            'Durata_Creditului' => 'Durata Creditului',
            'Scopul_Creditului' => 'Scopul Creditului',
            'Tipul_Creditului' => 'Tipul Creditului',
            'Data_Solicitarii' => 'Data Solicitarii',
            'Rata_Dobanzii' => 'Rata Dobanzii',
        ];
    }
}
