<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Abiturients */

$this->title = 'Create Abiturients';
$this->params['breadcrumbs'][] = ['label' => 'Abiturients', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="abiturients-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
