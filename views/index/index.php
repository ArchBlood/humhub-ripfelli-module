<?php

use humhub\widgets\Button;

// Register our module assets, this could also be done within the controller
\humhub\humhub\modules\ripfelli\assets\Assets::register($this);

$displayName = (Yii::$app->user->isGuest) ? Yii::t('RipfelliModule.base', 'Guest') : Yii::$app->user->getIdentity()->displayName;

// Add some configuration to our js module
$this->registerJsConfig("template", [
    'username' => (Yii::$app->user->isGuest) ? $displayName : Yii::$app->user->getIdentity()->username,
    'text' => [
        'hello' => Yii::t('RipfelliModule.base', 'Hi there {name}!', ["name" => $displayName])
    ]
])

?>

<div class="panel-heading"><strong>RIP Felli</strong> <?= Yii::t('RipfelliModule.base', 'overview') ?></div>

<div class="panel-body">
    <p><?= Yii::t('RipfelliModule.base', 'RIP you will be missed dearly!') ?></p>

    <?=  Button::primary(Yii::t('RipfelliModule.base', 'Say Hello!'))->action("ripfelli.rip")->loader(false); ?></div>
