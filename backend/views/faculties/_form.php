<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Faculties */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="faculties-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_institute')->textInput() ?>

    <?= $form->field($model, 'title')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
