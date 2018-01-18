<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Experiment */

$this->title = 'Create Experiment';
$this->params['breadcrumbs'][] = ['label' => 'Experiments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="experiment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
