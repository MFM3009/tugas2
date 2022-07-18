<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "buku".
 *
 * @property int $id_buku
 * @property string $judul_buku
 * @property string $penerbit_buku
 */
class Buku extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'buku';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['judul_buku', 'penerbit_buku'], 'required'],
            [['judul_buku', 'penerbit_buku'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_buku' => 'Id Buku',
            'judul_buku' => 'Judul Buku',
            'penerbit_buku' => 'Penerbit Buku',
        ];
    }
}
