<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AnggotaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Anggotas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anggota-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Anggota', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_anggota',
            'nama_anggota',
            'no_telp_anggota',
            // 'id_buku',
            'buku.judul_buku',
            // 'id_peminjaman',
            'peminjaman.tanggal_pinjam',
            'peminjaman.tanggal_kembali',
            // 'id_pengembalian',
            'pengembalian.tanggal_pengembalian',
            'pengembalian.denda',
            // 'id_petugas',
            'petugas.nama_petugas',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_anggota' => $model->id_anggota]);
                 }
            ],
        ],
    ]); ?>


</div>
