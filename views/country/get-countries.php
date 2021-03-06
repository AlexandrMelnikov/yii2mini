<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Страны</h1>
<ul>
    <?php foreach ($countries as $country): ?>
        <li>
            <?=  Html::encode("{$country->name} ({$country->code}) ({$country->population}) ({$country->id})") ?>:
            <?= $country->parent_id ?>
        </li>
    <?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>