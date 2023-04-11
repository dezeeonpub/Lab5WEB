<?php require('header.php'); ?>

<?php
/**
* Program memanfaatkan Program 10.2 untuk membuat form inputan sederhana.
**/
include "form.php";
include "database.php";
echo "<html><head><title>Mahasiswa</title></head><body>";
$form = new Form("","Input Form");
$form->addField("txtnim", "Nim");
$form->addField("txtnama", "Nama");
$form->addField("txtalamat", "Alamat");
echo "<h3>Silahkan isi form berikut ini :</h3>";
$form->displayForm();

// Menyimpan data ke database
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nim = $_POST['txtnim'];
    $nama = $_POST['txtnama'];
    $alamat = $_POST['txtalamat'];
    $db = new Database();
    $data = array(
        "nim" => $nim,
        "nama" => $nama,
        "alamat" => $alamat
    );
    $result = $db->insert("akmal", $data);
    if ($result === false) {
        echo "Error: Gagal menyimpan data";
    } else {
        echo "Data berhasil disimpan";
    }
}

echo "</body></html>";

?>



<?php require('footer.php'); ?>