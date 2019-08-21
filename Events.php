<?php

namespace  humhub\humhub\modules\template;

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
            'label' => 'Template',
            'icon' => '<i class="fa fa-exclamation-triangle"></i>',
            'url' => Url::to(['/template/index']),
            'sortOrder' => 99999,
            'isActive' => (Yii::$app->controller->module && Yii::$app->controller->module->id == 'template' && Yii::$app->controller->id == 'index'),
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
            'label' => 'Template',
            'url' => Url::to(['/template/admin']),
            'group' => 'manage',
            'icon' => '<i class="fa fa-exclamation-triangle"></i>',
            'isActive' => (Yii::$app->controller->module && Yii::$app->controller->module->id == 'template' && Yii::$app->controller->id == 'admin'),
            'sortOrder' => 99999,
        ]);
    }
}
