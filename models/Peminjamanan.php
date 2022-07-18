<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "peminjamanan".
 *
 * @property int $id_peminjaman
 * @property string $tanggal_pinjam
 * @property string $tanggal_kembali
 */
class Peminjamanan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'peminjamanan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal_pinjam', 'tanggal_kembali'], 'required'],
            [['tanggal_pinjam', 'tanggal_kembali'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_peminjaman' => 'Id Peminjaman',
            'tanggal_pinjam' => 'Tanggal Pinjam',
            'tanggal_kembali' => 'Tanggal Kembali',
        ];
    }
}
