<?php
    /* @var $model asb\yii2\modules\news_1b_160430\models\News */
    /* @var $modelsI18n array of asb\yii2\modules\news_1b_160430\models\NewsI18n */
    /* @var $this yii\web\View */
    /* @var $activeTab string */

    use yii\helpers\Html;

    $this->title = Yii::t($this->context->tcModule, 'Create News');
    $this->params['breadcrumbs'][] = ['label' => Yii::t($this->context->tcModule, 'News'), 'url' => ['index']];
    $this->params['breadcrumbs'][] = $this->title;

?>
<div class="news-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'modelsI18n' => $modelsI18n,
        'activeTab' => $activeTab,
    ], $this->context) ?>

</div>
