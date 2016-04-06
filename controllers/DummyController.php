<?php
namespace app\controllers;
use yii\web\Controller;
use app\models\Dummy; // import model Dummy

class DummyController extends Controller {
    public function actionTest() {
        $dummy = Dummy::find()->all();
        foreach ($dummy as $d) {
            echo $d->nama;
        }
    }
}