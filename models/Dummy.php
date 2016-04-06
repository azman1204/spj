<?php
namespace app\models;
// model ini point / connect table dummy dlm db spj
class Dummy extends \yii\db\ActiveRecord {
    public function tableName() {
        return 'dummy';
    }
}