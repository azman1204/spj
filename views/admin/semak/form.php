<form method="post" action="index.php?r=admin/semak/simpan">
    <input type="hidden" name="id_mohon" value="<?=$p->id_mohon?>">
    <div>
        <div>
            <legend>BUTIRAN PERIBADI</legend>
            <table class="table">
                <tr>
                    <td width="20%">1. Kad Pengenalan</td>
                    <td>: <input type="text" value="<?=$p->noic?>" name="noic" class=""></td>
                </tr>
                <tr>
                    <td>2. Nama Penuh Pemohon</td>
                    <td>: <input type="text" name="nama" value="<?=$p->nama?>" class=""></td>
                </tr>
                <tr>
                    <td>3. Jantina</td>
                    <td>: 
                        <input type="radio" checked="" name="jantina"> Lelaki
                        <input type="radio" name="jantina"> Perempuan
                    </td>
                </tr>
                <tr>
                    <td>4. No Tel Bimbit</td>
                    <td>: <input type="text"> contoh : 012-2220000</td>
                </tr>
            </table>
        </div>
        <div>
            <legend>BUTIRAN CALON ORANG KURANG UPAYA (OKU) / BEKEPERLUAN KHAS</legend>
            <table class="table">
                <tr>
                    <td width="20%">5. No Pendaftaran OKU</td>
                    <td>: <input type="text"></td>
                </tr>
                <tr>
                    <td>6. Kategori OKU</td>
                    <td>: 
                        <input type="checkbox"> Rabun
                        <input type="checkbox"> Buta
                        <input type="checkbox"> Bisu
                        <input type="checkbox"> Pekak
                        <br>
                        <input type="checkbox"> Cacat anggota; sila nyatakan : <input type="text">
                        <br>
                        <input type="checkbox"> Lain-Lain; sila nyatakan : <input type="text">
                    </td>
                </tr>
                <tr>
                    <td>
                        7. Keperluan Semasa Peperiksaan
                        * Tertakluk kepada kesediaan di pusat peperiksaan berkenaan
                    </td>
                    <td>: 
                        <input type="checkbox"> Tambahan Masa
                        <input type="checkbox"> Cetakan Besar
                        <input type="checkbox"> Braille
                        <input type="checkbox"> Pembaca
                        <input type="checkbox"> Jurutulis
                        <input type="checkbox"> Pembantu Khas
                        <input type="checkbox"> Laluan Khas Kerusi Roda
                        <br>
                        <input type="checkbox"> Lain-Lain; sila nyatakan : <input type="text">
                    </td>
                </tr>
            </table>
        </div>
        <div>
            <legend>BUTIRAN PERKHIDMATAN</legend>
            <table class="table">
                <tr>
                    <td width="20%">8. Skim Perkhidmatan</td>
                    <td><input type="text" value="Pembantu Tadbir (Pekeranian/operasi)" class="disabled"></td>
                </tr>
                <tr>
                    <td>9. Gred Jawatan</td>
                    <td><input type="text" value="N17" class="disabled"></td>
                </tr>
                <tr>
                    <td>10. Tarikh lantikan (jawatan semasa)</td>
                    <td><input type="text" value=""></td>
                </tr>
                <tr>
                    <td>11. Tarikh Sah Perkhidmatan</td>
                    <td><input type="text" value=""></td>
                </tr>
                <tr>
                    <td>
                        12. Tarikh memangku <br>
                        * calon memohon ujian kemahiran ICT yang sedang memangku perlu lengkapkan
                        tarikh memangku
                    </td>
                    <td><input type="text" value=""></td>
                </tr>
                <tr>
                    <td>13. Taraf Perkhidmatan</td>
                    <td>
                        <select>
                            <option>--PILIH--</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>14. Taraf Pelantikan</td>
                    <td>
                        <select>
                            <option>--PILIH--</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>15. Gelaran Ketua Pejabat</td>
                    <td><input type="text"> Contoh : Ketua Pengarah</td>
                </tr>
                <tr>
                    <td>16. Jabatan</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>17. Alamat Pejabat</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>18. Poskod</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>19. Negeri</td>
                    <td>
                        <select>
                            <option>--PILIH--</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>20. Bandar</td>
                    <td>
                        <select>
                            <option>--PILIH--</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>21. No. tel Pejabat</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>22. Emel</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>23. Emel ketua jabatan / bahagian</td>
                    <td><input type="text"></td>
                </tr>
            </table>
        </div>
        <div>
            <legend>BUTIRAN PEPERIKSAAN</legend>
            <table class="table">
                <tr>
                    <td width="20%">24. Tarikh Peperiksaan</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>25. Kod Peperiksaan</td>
                    <td><input type="text" name="jenisexam" value="9001" class="disabled"></td>
                </tr>
                <tr>
                    <td>26. Bahagian</td>
                    <td>
                        <input type="checkbox"> I
                        <input type="checkbox"> II
                        <input type="checkbox"> III
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div>
        PENGAKUAN
        <table class="table">
            <tr>
                <td width="20%"><input type="checkbox"></td>
                <td>Saya akui ....</td>
            </tr>
            <tr>
                <td><input type="checkbox"></td>
                <td>Saya mengaku</td>
            </tr>
        </table>
    </div>

    <input type="submit" class="btn btn-primary" value="Hantar">
    <input type="button" class="btn btn-warning" value="Batal">
    <input type="button" class="btn btn-default" value="Kembali">
</form>