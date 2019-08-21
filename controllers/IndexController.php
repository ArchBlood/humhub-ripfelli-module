<?php

namespace humhub\humhub\modules\template\controllers;

use humhub\components\Controller;

class IndexController extends Controller
{

    public $subLayout = "@template/views/layouts/default";

    /**
     * Renders the index view for the module
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

}

