<?php



if(isset($_POST["nama"])){
    $nik = $_POST["nik"];
    $nama = $_POST["nama"];
    $jabatan = $_POST["jabatan"];
    $tgl_masuk = $_POST["tgl_msk"];
    $divisi = $_POST["divisi"];
    echo '<tr>';
    echo '<td>1</td>';
    echo '<td>' ,$nik,'</td>';
    echo '<td>' ,$nama,'</td>';
    echo '<td>' ,$jabatan,'</td>';
    echo '<td>' ,$tgl_masuk,'</td>';
    echo '<td>' ,$divisi,'</td>';
    echo '</tr>';
}
else{
    echo '<tr>';
    echo '<td>1</td>';
    echo '<td></td>';
    echo '<td></td>';
    echo '<td></td>';
    echo '<td></td>';
    echo '<td></td>';
    echo '</tr>';

}
                  ?>