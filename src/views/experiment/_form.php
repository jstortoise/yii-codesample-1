<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Experiment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="experiment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php //$form->field($model, 'date')->textInput(['maxlength' => 30]) ?>

    <?php //$form->field($model, 'time')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'bones_num')->textInput() ?>

    <?= $form->field($model, 'throws')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
