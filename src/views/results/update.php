<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Results */

$this->title = 'Update Results: ' . ' ' . $model->id_result;
$this->params['breadcrumbs'][] = ['label' => 'Results', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_result, 'url' => ['view', 'id' => $model->id_result]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="results-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
