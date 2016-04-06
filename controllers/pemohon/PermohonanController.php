<?php
namespace app\controllers\pemohon;
use app\models\Permohonan;

class PermohonanController extends \yii\web\Controller {
    // listkan icon permohonan / doc
    // ...index.php?r=pemohon/permohonan/index
    public function actionIndex() {
        return $this->render('index');
    }
    
    // ...index.php?r=pemohon/permohonan/borang1
    public function actionBorang1() {
        return $this->render('borang1');
    }
    
    public function actionBorang2() {
        return $this->render('borang2');
    }
    
    // insert into db
    public function actionSimpan() {
        $p = new Permohonan();
        $p->noic      = $_POST['noic'];
        $p->nama      = $_POST['nama'];
        $p->jenisexam = $_POST['jenisexam'];
        $p->status    = 'B'; // baru
        $p->save();
        return $this->redirect('index.php?r=pemohon/permohonan/cetak');
    }
    
    public function actionCetak() {
        return $this->render('cetak');
    }
}