<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Institutes */

$this->title = 'Update Institutes: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Institutes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="institutes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
