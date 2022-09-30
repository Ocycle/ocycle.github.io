<?php include("inc_header.php") ?>
<?php
$judul      = "";
$gambar    = "";
$isi        = "";
$error      = "";
$sukses     = "";

if(isset($_GET['id'])){
    $id = $_GET['id'];
}else{
    $id = "";
}

if($id != ""){
    $sql1   = "select * from halaman where id = '$id'";
    $q1     = mysqli_query($koneksi,$sql1);
    $r1     = mysqli_fetch_array($q1);
    $judul  = $r1['judul'];
    $gambar    = $r1['gambar'];
    $isi        = $r1['isi'];

    if($isi == ''){
        $error  = "Data tidak ditemukan";
    }
}

if (isset($_POST['simpan'])) {
    $judul      = $_POST['judul'];
    $isi        = $_POST['isi'];
    $gambar   = $_POST['gambar'];

    if ($judul == '' or $isi == '') {
        $error     = "Silakan masukkan semua data yakni adalah data isi dan judul.";
    }
    if($_FILES['gambar']['name']){
        $gambar_name = $_FILES['gambar']['name'];
        $gambar_file = $_FILES['gambar']['tmp_name'];

        $detail_file = pathinfo($gambar_name);
        $gambar_ekstensi = $detail_file['extension'];
        // Array ( [dirname] => . [basename] => Romi Satrio Wahono.jpg [extension] => jpg [filename] => Romi Satrio Wahono )
        $ekstensi_yang_diperbolehkan = array("jpg","jpeg","png","gif");
        if(!in_array($gambar_ekstensi,$ekstensi_yang_diperbolehkan)){
            $error = "Ekstensi yang diperbolehkan adalah jpg, jpeg, png dan gif";
        }
    }
    if (empty($error)) {
        if($gambar_name){
            $direktori = "../gambar";

            @unlink($direktori."/$gambar"); //delete data

            $gambar_name = "halaman_".time()."_".$gambar_name;
            move_uploaded_file($gambar_file,$direktori."/".$gambar_name);

            $gambar = $gambar_name;
        }else{
            $gambar_name = $gambar; //memasukkan data dari data yang sebelumnya ada
        }
    }
    if (empty($error)) {
        if($id != ""){
            $sql1   = "update halaman set judul = '$judul',gambar='$gambar',isi='$isi',tgl_isi=now() where id = '$id'";
        }else{
            $sql1       = "insert into halaman(judul,gambar,isi) values ('$judul','$gambar','$isi')";
        }
        
        $q1         = mysqli_query($koneksi, $sql1);
        if ($q1) {
            $sukses     = "Sukses memasukkan data";
        } else {
            $error      = "Gagal cuy masukkan data";
        }
    }
}


?>
<h1>Halaman Admin Input Data</h1>
<div class="mb-3 row">
    <a href="halaman.php">
        << Kembali ke halaman admin</a>
</div>
<?php
if ($error) {
?>
    <div class="alert alert-danger" role="alert">
        <?php echo $error ?>
    </div>
<?php
}
?>
<?php
if ($sukses) {
?>
    <div class="alert alert-primary" role="alert">
        <?php echo $sukses ?>
    </div>
<?php
}
?>
<form action="" method="post">
    <div class="mb-3 row">
        <label for="judul" class="col-sm-2 col-form-label">Judul</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="judul" value="<?php echo $judul ?>" name="judul">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
        <div class="col-sm-10">
            <?php 
            if($gambar){
                echo "<img src='../gambar/$gambar' style='max-height:100px;max-width:100px'/>";
            }
            ?>
            <input type="file" class="form-control" id="gambar" name="gambar">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="isi" class="col-sm-2 col-form-label">Isi</label>
        <div class="col-sm-10">
            <textarea name="isi" class="form-control" id="summernote"><?php echo $isi ?></textarea>
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
            <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary" />
        </div>
    </div>
</form>
<?php include("inc_footer.php") ?>