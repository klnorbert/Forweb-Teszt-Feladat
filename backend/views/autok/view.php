<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\query\Autok $model */

$this->title = $model->auto_id;
$this->params['breadcrumbs'][] = ['label' => 'Autók', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="autok-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Frissités', ['update', 'auto_id' => $model->auto_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Törlés', ['delete', 'auto_id' => $model->auto_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Bisztos hogy tötölni akkarod?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'auto_id',
            'gyarto',
            'tipus',
            'rendszam',
            'gyartasi_ev',
            'created_at',
        ],
    ]) ?>

</div>
