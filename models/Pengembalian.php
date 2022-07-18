<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pengembalian".
 *
 * @property int $id_pengembalian
 * @property string $tanggal_pengembalian
 * @property string $denda
 */
class Pengembalian extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pengembalian';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal_pengembalian', 'denda'], 'required'],
            [['tanggal_pengembalian'], 'safe'],
            [['denda'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pengembalian' => 'Id Pengembalian',
            'tanggal_pengembalian' => 'Tanggal Pengembalian',
            'denda' => 'Denda',
        ];
    }
}
