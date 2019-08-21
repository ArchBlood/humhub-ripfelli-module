<?php

namespace humhub\humhub\modules\template;

use Yii;
use yii\helpers\Url;
use humhub\modules\content\components\ContentContainerActiveRecord;
use humhub\modules\space\models\Space;
use humhub\modules\user\models\User;

class Module extends \humhub\modules\content\components\ContentContainerModule
{
    /**
    * @inheritdoc
    */
    public function getContentContainerTypes()
    {
        return [
            Space::class,
            User::class
        ];
    }

    /**
    * @inheritdoc
    */
    public function getConfigUrl()
    {
        return Url::to(['/template/admin']);
    }

    /**
    * @inheritdoc
    */
    public function disable()
    {
        // Cleanup all module data, don't remove the parent::disable()!!!
        parent::disable();
    }

    /**
    * @inheritdoc
    */
    public function disableContentContainer(ContentContainerActiveRecord $container)
    {
        // Clean up space related data, don't remove the parent::disable()!!!
        parent::disable();
    }

    /**
    * @inheritdoc
    */
    public function getContentContainerName(ContentContainerActiveRecord $container)
    {
        return Yii::t('TemplateModule.base', 'Template');
    }

    /**
    * @inheritdoc
    */
    public function getContentContainerDescription(ContentContainerActiveRecord $container)
    {
        return Yii::t('TemplateModule.base', 'This is just a template module.');
    }
}
