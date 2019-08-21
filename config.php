<?php

use humhub\humhub\modules\template\Events;
use humhub\modules\admin\widgets\AdminMenu;
use humhub\widgets\TopMenu;

return [
	'id' => 'template',
	'class' => 'humhub\humhub\modules\template\Module',
	'namespace' => 'humhub\humhub\modules\template',
	'events' => [
		[
			'class' => TopMenu::class,
			'event' => TopMenu::EVENT_INIT,
			'callback' => [Events::class, 'onTopMenuInit'],
		],
		[
			'class' => AdminMenu::class,
			'event' => AdminMenu::EVENT_INIT,
			'callback' => [Events::class, 'onAdminMenuInit']
		],
	],
];
