<?php
$con->auth();
$conn=$con->koneksi();
switch (@$_GET['page']){
    case 'add':
        $produk="SELECT * FROM produk";
        $produk=$conn->query($produk);
        $content="views/pemesanan/tambah.php";
        include_once 'views/template.php';
    break;
    case 'save':
        if($_SERVER['REQUEST_METHOD']=="POST"){
            //Validasi
            if(empty($_POST['no_id_pembeli'])){
                $err['no_id_pembeli']= "Id Pembeli Wajib Diisi";
            }
            if(empty($_POST['id_produk'])){
                $err['id_produk']= "Id Produk Wajib Diisi";
            }
            if(empty($_POST['harga_produk'])){
                $err['harga_produk']= "Harga produk Harus Diisi";
            }
            if(empty($_POST['tanggal_pemesanan'])){
                $err['tanggal_pemesanan']= "Tanggal Pemesanan Harus Diisi";
            }
            if(!isset($err)){
                if(!empty($_POST['id_pemesanan'])){
                    //update
                    $sql="UPDATE pemesanan SET no_id_pembeli='$_POST[no_id_pembeli]',id_produk='$_POST[id_produk]',harga_produk='$_POST[harga_produk]',
                    tanggal_pemesanan='$_POST[tanggal_pemesanan]' WHERE md5(id_pemesanan)='$_POST[id_pemesanan]'";
                }
                else{
                    //save
                $sql = "INSERT INTO pemesanan (no_id_pembeli, id_produk, harga_produk, tanggal_pemesanan)
                VALUES ('$_POST[no_id_pembeli]','$_POST[id_produk]','$_POST[harga_produk]','$_POST[tanggal_pemesanan]')";
                }
                if ($conn->query($sql) === TRUE) {
                    header('Location: '.$con->site_url().'/admin/index.php?mod=pemesanan');
                } else {
                    $err['msg']= "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        }else{
            $err['msg']="Tidak diizinkan";
        }
        if(isset($err)){
            $produk="SELECT * FROM produk";
            $produk=$conn->query($produk);
            $content="views/pemesanan/tambah.php";
            include_once 'views/template.php';
        }
    break;
    case 'edit':
        $pemesanan ="SELECT * FROM pemesanan WHERE md5(id_pemesanan)='$_GET[id]'";
        $pemesanan=$conn->query($pemesanan);
        $_POST=$pemesanan->fetch_assoc();
        $_POST['id_pemesanan']=md5($_POST['id_pemesanan']);
        //var_dump($produk);
        $produk="SELECT * FROM produk";
        $produk=$conn->query($produk);
        $content="views/pemesanan/tambah.php";
        include_once 'views/template.php';
    break;
    case 'delete';
        $pemesanan ="DELETE FROM pemesanan WHERE md5(id_pemesanan)='$_GET[id]'";
        $pemesanan=$conn->query($pemesanan);
        header('Location: '.$con->site_url().'/admin/index.php?mod=pemesanan');
    break;
    default:

    $sql = "SELECT * FROM pemesanan";
    $pemesanan=$conn->query($sql);
    $conn->close();
    $content="views/pemesanan/tampil.php";
    include_once 'views/template.php';
}
?>