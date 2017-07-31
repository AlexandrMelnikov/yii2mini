<?php
/**
 * Created by PhpStorm.
 * User: aleksandrcerkasov
 * Date: 16.07.17
 * Time: 2:11
 */

namespace app\controllers;


use yii\web\Controller;

class ChessController extends Controller
{
    public function actionChess() {
        return $this-> render('chess');
    }
}