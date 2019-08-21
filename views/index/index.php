<?php

use humhub\widgets\Button;

// Register our module assets, this could also be done within the controller
\humhub\humhub\modules\template\assets\Assets::register($this);

$displayName = (Yii::$app->user->isGuest) ? Yii::t('TemplateModule.base', 'Guest') : Yii::$app->user->getIdentity()->displayName;

// Add some configuration to our js module
$this->registerJsConfig("template", [
    'username' => (Yii::$app->user->isGuest) ? $displayName : Yii::$app->user->getIdentity()->username,
    'text' => [
        'hello' => Yii::t('TemplateModule.base', 'Hi there {name}!', ["name" => $displayName])
    ]
])

?>

<div class="panel-heading"><strong>Template</strong> <?= Yii::t('TemplateModule.base', 'overview') ?></div>

<div class="panel-body">
    <p><?= Yii::t('TemplateModule.base', 'Hello World!') ?></p>

    <?=  Button::primary(Yii::t('TemplateModule.base', 'Say Hello!'))->action("template.hello")->loader(false); ?></div>
