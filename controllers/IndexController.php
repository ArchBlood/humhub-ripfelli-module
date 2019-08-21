<?php

namespace humhub\humhub\modules\ripfelli\controllers;

use humhub\components\Controller;

class IndexController extends Controller
{

    public $subLayout = "@ripfelli/views/layouts/default";

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

