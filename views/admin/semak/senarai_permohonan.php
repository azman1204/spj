<?php
use app\models\Rujukan;
?>
<legend>Senarai Permohonan</legend>
<table class="table table-bordered table-striped">
    <tr>
        <td>Bil</td>
        <td>Nama Pemohon</td>
        <td>Jenis Exam</td>
        <td></td>
    </tr>
    <?php
    $i = 1;
    foreach ($p as $permohonan) :
        $ruj = Rujukan::getData('exam', $permohonan->jenisexam);
    ?>
        <tr>
            <td><?=$i++?>.</td>
            <td><?= $permohonan->nama ?></td>
            <td><?= $permohonan->jenisexam ?> <?= $ruj->keterangan ?></td>
            <td>
                <a href="index.php?r=admin/semak/kemaskini&id=<?=$permohonan->id_mohon?>"><span class="glyphicon glyphicon-pencil"></span></a>
                <a href="index.php?r=admin/semak/sejarah&noic=<?=$permohonan->noic?>">sejarah</a>
                <a onclick="return andaPasti()" href="index.php?r=admin/semak/hapus&id=<?=$permohonan->id_mohon?>"><span class="glyphicon glyphicon-trash"></span></a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<script>
    function andaPasti() {
        return confirm('Anda pasti utk hapus rekod ini ?');
    }
</script>