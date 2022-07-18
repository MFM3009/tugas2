<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "anggota".
 *
 * @property int $id_anggota
 * @property string $nama_anggota
 * @property string $no_telp_anggota
 * @property int $id_pengembalian
 * @property int $id_peminjaman
 * @property int $id_buku
 * @property int $id_petugas
 */
class Anggota extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'anggota';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_anggota', 'no_telp_anggota', 'id_pengembalian', 'id_peminjaman', 'id_buku', 'id_petugas'], 'required'],
            [['id_pengembalian', 'id_peminjaman', 'id_buku', 'id_petugas'], 'integer'],
            [['nama_anggota', 'no_telp_anggota'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_anggota' => 'Id Anggota',
            'nama_anggota' => 'Nama Anggota',
            'no_telp_anggota' => 'No Telp Anggota',
            'id_pengembalian' => 'Id Pengembalian',
            'id_peminjaman' => 'Id Peminjaman',
            'id_buku' => 'Id Buku',
            'id_petugas' => 'Id Petugas',
        ];
    }
    public function getBuku(){
        return $this->hasOne (Buku::classname(), ['id_buku'=>'id_buku']);
    }
    public function getPeminjaman(){
        return $this->hasOne (Peminjaman::classname(), ['id_peminjaman'=>'id_peminjaman']);
    }
    public function getPengembalian(){
        return $this->hasOne (Pengembalian::classname(), ['id_pengembalian'=>'id_pengembalian']);
    }
    public function getPetugas(){
        return $this->hasOne (Petugas::classname(), ['id_petugas'=>'id_petugas']);
    }
}
