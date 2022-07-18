<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Anggota */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="anggota-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_anggota')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_telp_anggota')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_pengembalian')->textInput() ?>

    <?= $form->field($model, 'id_peminjaman')->textInput() ?>

    <?= $form->field($model, 'id_buku')->textInput() ?>

    <?= $form->field($model, 'id_petugas')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
