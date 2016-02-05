<?php

use yii\helpers\Html;
use shiyang\infinitescroll\InfiniteScrollPager;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CountrySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Test Countries';
?>
<div class="country-index">

    <ul>
        <?php foreach($result as $rs): ?>
            <li><label>国家名</label>: <?= Html::encode($rs->name) ?>,&nbsp;<label>人口</label>: <?= Html::encode($rs->population) ?></li>
        <?php endforeach;?>
    </ul>

</div>
