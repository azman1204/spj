<legend>Sejarah Permohonan</legend>
<table class="table table-bordered table-striped">
    <tr>
        <td>Bil</td>
        <td>Nama Pemohon</td>
        <td>Jenis Exam</td>
    </tr>
    <?php
    $i = 1;
    foreach ($permohonan as $p) :
    ?>
        <tr>
            <td><?=$i++?>.</td>
            <td><?= $p->nama ?></td>
            <td><?= $p->jenisexam ?></td>
        </tr>
    <?php endforeach; ?>
</table>