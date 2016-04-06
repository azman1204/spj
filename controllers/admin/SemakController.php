<?php
namespace app\controllers\admin;
use app\models\Permohonan;

class SemakController extends \yii\web\Controller {
    public function actionKemaskini($id) {
        $p = Permohonan::findOne($id);
        return $this->render('form', ['p'=>$p]);
    }
    
    public function actionSimpan() {
        $id_mohon = $_POST['id_mohon']; // hidden field dlm form
        $p = Permohonan::findOne($id_mohon);
        $p->nama = $_POST['nama'];
        $p->save();
        return $this->redirect('index.php?r=admin/semak/senarai-permohonan');
    }
    
    
    public function actionHapus($id) {
        $p = Permohonan::findOne($id); // find by primary key
        $p->delete();
        return $this->redirect('index.php?r=admin/semak/senarai-permohonan');
    }
    
    // r=admin/semak/senarai-permohonan/
    public function actionSenaraiPermohonan() {
        $p = Permohonan::find()->all(); // return array of Permohonan
        return $this->render('senarai_permohonan', ['p'=>$p]);
    }
    
    public function actionSejarah($noic) {
        $p = Permohonan::find()->where(['noic'=>$noic])->all();
        return $this->render('sejarah', ['permohonan'=>$p]);
    }
}