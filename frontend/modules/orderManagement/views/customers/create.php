<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\orderManagement\models\Customers */

$this->title = 'Create New Customer';
$this->params['breadcrumbs'][] = ['label' => 'Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
