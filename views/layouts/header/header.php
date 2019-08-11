<?php

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;

NavBar::begin([
    'brandLabel' => '<img width="50" height="30" src="/source/win.jpg">',
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'navbar-inverse navbar-fixed-top',
    ],

]);
echo Nav::widget([
    'options' => ['class' => 'navbar-nav navbar-right', 'id' => 'qwe'],
    'items' => [
        ['label' => 'Инста',],
        ['label' => 'Главная', 'url' => ['/site/index']],
        ['label' => 'Цвет', 'url' => ['/site/about']],
        ['label' => 'О себе', 'url' => ['/site/contact']],
        ['label' => 'Связаться со мной', 'url' => ['/site/contact']],
    ],
]);
NavBar::end();
?>