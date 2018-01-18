<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Experiment */

$this->title = 'Update Experiment: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Experiments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id_exp]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="experiment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
