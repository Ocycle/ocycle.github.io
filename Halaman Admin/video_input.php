<?php include("inc_header.php") ?>
<?php
$judul_video       = "";
$video        = "";

$error      = "";
$sukses     = "";

if(isset($_GET['id'])){
    $id = $_GET['id'];
}else{
    $id = "";
}

if($id != ""){
    $sql1   = "select * from video where id = '$id'";
    $q1     = mysqli_query($koneksi,$sql1);
    $r1     = mysqli_fetch_array($q1);
    $judul_video   = $r1['judul_video'];
    $video        = $r1['video'];

    if($id == ''){
        $error  = "Data tidak ditemukan";
    }
}

if (isset($_POST['simpan'])) {
    $judul_video      = $_POST['judul_video'];
    $video        = $_POST['video'];

    if ($judul_video == '' or $video == '') {
        $error     = "Silakan masukkan semua data yakni adalah data judul video dan link video.";
    }
    //Array ( [foto] => Array ( [name] => Budi Rahardjo.jpg [type] => image/jpeg [tmp_name] => C:\xampp2\tmp\php4FDD.tmp [error] => 0 [size] => 2375701 ) )
    // print_r($_FILES);
    // if($_FILES['video']['judul_video']){
    //     $foto_name = $_FILES['foto']['name'];
    //     $foto_file = $_FILES['foto']['tmp_name'];

    //     $detail_file = pathinfo($foto_name);
    //     $foto_ekstensi = $detail_file['extension'];
    //     // Array ( [dirname] => . [basename] => Romi Satrio Wahono.jpg [extension] => jpg [filename] => Romi Satrio Wahono )
    //     $ekstensi_yang_diperbolehkan = array("jpg","jpeg","png","gif");
    //     if(!in_array($foto_ekstensi,$ekstensi_yang_diperbolehkan)){
    //         $error = "Ekstensi yang diperbolehkan adalah jpg, jpeg, png dan gif";
    //     }

    // }

    if (empty($error)) {
        if($id != ""){
            $sql1   = "update video set judul_video = '$judul_video',video='$video' where id = '$id'";
        }else{
            $sql1       = "insert into video(judul_video,video) values ('$judul_video','$video')";
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
<h1>Halaman Admin Input Data Tutors</h1>
<div class="mb-3 row">
    <a href="video.php">
        << Kembali ke halaman admin Tutors</a>
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
<form action="" method="post" enctype="multipart/form-data">
    <div class="mb-3 row">
        <label for="nama" class="col-sm-2 col-form-label">Judul Video</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="judul_video" value="<?php echo $judul_video ?>" name="judul_video">
        </div>
    </div>
    
    <div class="mb-3 row">
        <label for="isi" class="col-sm-2 col-form-label">ID Video</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="video" value="<?php echo $video ?>" name="video">
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