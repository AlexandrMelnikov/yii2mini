<?php
/**
 * Created by PhpStorm.
 * User: aleksandrcerkasov
 * Date: 16.07.17
 * Time: 2:12
 */

namespace app\controllers;


use yii\web\Controller;

class ShopController extends Controller
{
    public function actionShop() {
        return $this-> render('shop');
    }
}