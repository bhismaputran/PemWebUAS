<?php
$con->auth();
$conn=$con->koneksi();
switch (@$_GET['page']){
    case 'add':
        $content="views/produk/tambah.php";
        include_once 'views/template.php';
    break;
    case 'save':
        if($_SERVER['REQUEST_METHOD']=="POST"){
            //Validasi
            if(empty($_POST['nama_produk'])){
                $err['nama_produk']= "Nama Wajib Diisi";
            }
            if(empty($_POST['harga_produk'])){
                $err['harga_produk']= "Harga Wajib Diisi";
            }
            if(empty($_POST['deskripsi'])){
                $err['deskripsi']= "Deskripsi Wajib Diisi";
            }
            //validasi file
            if(!empty($_FILES["fileToUpload"]["name"])){
                $target_dir = "../media/";
                $gambar=basename($_FILES["fileToUpload"]["name"]);
                $target_file = $target_dir . $gambar;
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                // Check if image file is a actual image or fake image
                if(isset($_POST["submit"])) {
                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                if($check !== false) {
                    $err["fileToUpload"]= "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    $err["fileToUpload"]= "File is not an image.";
                    $uploadOk = 0;
                }
                }

                // Check if file already exists
                if (file_exists($target_file)) {
                    $err["fileToUpload"]= "Sorry, file already exists.";
                $uploadOk = 0;
                }

                // Check file size
                if ($_FILES["fileToUpload"]["size"] > 1048576) {
                    $err["fileToUpload"]= "Sorry, your file is too large.";
                $uploadOk = 0;
                }

                // Allow certain file formats
                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                    $err["fileToUpload"]= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
                }

                // Check if $uploadOk is set to 0 by an error
                if ($uploadOk == 1) {
                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                        $_POST['gambar']=$gambar;
                        if(isset($_POST['gambar_old']) && $_POST['gambar_old']!=''){
                            unlink($target_dir.$_POST['gambar_old']);
                        }
                } else {
                    $err["fileToUpload"]= "Sorry, there was an error uploading your file.";
                }
                }
                }
            }
            if(!isset($err)){
                if(!empty($_POST['id_produk'])){
                    //update
                    if(isset($_POST['gambar'])){
                        $sql="UPDATE produk SET nama_produk='$_POST[nama_produk]',harga_produk='$_POST[harga_produk]',
                        deskripsi='$_POST[deskripsi]',gambar='$_POST[gambar]' WHERE md5(id_produk)='$_POST[id_produk]'";
                    }else{
                    $sql="UPDATE produk SET nama_produk='$_POST[nama_produk]',harga_produk='$_POST[harga_produk]',
                    deskripsi='$_POST[deskripsi]' WHERE md5(id_produk)='$_POST[id_produk]'";
                    }
                }
                else{
                    //save
                    if(isset($_POST['gambar'])){
                        $sql = "INSERT INTO produk (nama_produk, harga_produk, deskripsi, gambar)
                        VALUES ('$_POST[nama_produk]','$_POST[harga_produk]','$_POST[deskripsi]','$_POST[gambar]')";
                    } else{
                        $sql = "INSERT INTO produk (nama_produk, harga_produk, deskripsi)
                        VALUES ('$_POST[nama_produk]','$_POST[harga_produk]','$_POST[deskripsi]')";
                    }
                }
                if ($conn->query($sql) === TRUE) {
                    header('Location: '.$con->site_url().'/admin/index.php?mod=produk');
                }else {
                    $err['msg']= "Error: " . $sql . "<br>" . $conn->error;
                }
        }else {
            $err['msg']="Tidak diizinkan";
        }
        if(isset($err)){
            $content="views/produk/tambah.php";
            include_once 'views/template.php';
        }
    break;
    case 'edit':
        $produk ="SELECT * FROM produk WHERE md5(id_produk)='$_GET[id]'";
        $produk=$conn->query($produk);
        $_POST=$produk->fetch_assoc();
        $_POST['id_produk']=md5($_POST['id_produk']);
        $gambar=md5($_POST['id_produk']);
        //var_dump($produk);
        $content="views/produk/tambah.php";
        include_once 'views/template.php';
    break;
    case 'delete';
        $produk ="DELETE FROM produk WHERE md5(id_produk)='$_GET[id]'";
        $produk=$conn->query($produk);
        header('Location: '.$con->site_url().'/admin/index.php?mod=produk');
    break;
    default:

    $sql = "SELECT * FROM produk";
    $produk=$conn->query($sql);
    $conn->close();
    $content="views/produk/tampil.php";
    include_once 'views/template.php';
}
?>