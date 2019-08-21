<?php

namespace  humhub\humhub\modules\ripfelli;

use Yii;
use yii\helpers\Url;

class Events
{
    /**
     * Defines what to do when the top menu is initialized.
     *
     * @param $event
     */
    public static function onTopMenuInit($event)
    {
        $event->sender->addItem([
            'label' => 'RIP Felli',
            'icon' => '<i class="fas fa-cross"></i>',
            'url' => Url::to(['/ripfelli/index']),
            'sortOrder' => 99999,
            'isActive' => (Yii::$app->controller->module && Yii::$app->controller->module->id == 'ripfelli' && Yii::$app->controller->id == 'index'),
        ]);
    }

    /**
     * Defines what to do if admin menu is initialized.
     *
     * @param $event
     */
    public static function onAdminMenuInit($event)
    {
        $event->sender->addItem([
            'label' => 'RIP Felli',
            'url' => Url::to(['/template/admin']),
            'group' => 'manage',
            'icon' => '<i class="fas fa-cross"></i>',
            'isActive' => (Yii::$app->controller->module && Yii::$app->controller->module->id == 'ripfelli' && Yii::$app->controller->id == 'admin'),
            'sortOrder' => 99999,
        ]);
    }
}
