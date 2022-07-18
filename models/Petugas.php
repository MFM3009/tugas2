<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "petugas".
 *
 * @property int $id_petugas
 * @property string $nama_petugas
 * @property string $jabatan_petugas
 */
class Petugas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'petugas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_petugas', 'jabatan_petugas'], 'required'],
            [['nama_petugas', 'jabatan_petugas'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_petugas' => 'Id Petugas',
            'nama_petugas' => 'Nama Petugas',
            'jabatan_petugas' => 'Jabatan Petugas',
        ];
    }
}
