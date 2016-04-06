<?php
namespace app\models;
class Rujukan extends \yii\db\ActiveRecord {
    public static function getData($kat, $kod) {
        $r = self::find()
                ->where(['kat'=>$kat, 'kod'=>$kod])
                ->one();
        return $r;
    }
}
