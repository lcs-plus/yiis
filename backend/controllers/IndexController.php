<?php
/**
 * Created by PhpStorm.
 * User: damai
 * Date: 2019/3/26
 * Time: 16:27
 */

namespace backend\controllers;


use yii\web\Controller;

class IndexController extends Controller
{

    public function actionIndex(){

        return $this->render('index');

    }

}