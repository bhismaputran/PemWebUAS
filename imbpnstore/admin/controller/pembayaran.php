<?php
$con->auth();
$conn=$con->koneksi();
switch (@$_GET['page']){
    case 'laporan':
        $pembayaran="SELECT * FROM pembayaran";
        $pembayaran=$conn->query($pembayaran);
        $content="views/pembayaran/laporan.php";
        include_once 'views/template.php';
    break;
    case 'save':
        if($_SERVER['REQUEST_METHOD']=="POST"){
            //Validasi
            if(empty($_POST['id_pemesanan'])){
                $err['id_pemesanan']= "Id Pemesanan Wajib Diisi";
            }
            if(empty($_POST['total_pembelian'])){
                $err['total_pembelian']= "Total pembelian wajib diisi";
            }
            if(empty($_POST['jmlh_dibayarkan'])){
                $err['jmlh_dibayarkan']= "Uang yang dibayarkan Harus Diisi";
            }
            if(empty($_POST['kembalian'])){
                $err['kembalian']= "Uang kembalian Harus Diisi";
            }
            if(empty($_POST['tanggal_pembayaran'])){
                $err['tanggal_pembayaran']= "Tanggal pembayaran Harus Diisi";
            }
            if(empty($_POST['status_pembayaran'])){
                $err['status_pembayaran']= "Status Harus Diisi";
            }

            if(!isset($err)){
                if(!empty($_POST['id_pembayaran'])){
                    //update
                    $sql="UPDATE pembayaran SET id_pemesanan='$_POST[id_pemesanan]',total_pembelian='$_POST[total_pembelian]',
                    jmlh_dibayarkan='$_POST[jmlh_dibayarkan]',kembalian='$_POST[kembalian]',tanggal_pembayaran='$_POST[tanggal_pembayaran]'
                    ,status_pembayaran='$_POST[status_pembayaran]' WHERE md5(id_pembayaran)='$_POST[id_pembayaran]'";
                }
                else{
                    //save
                $sql = "INSERT INTO pembayaran (id_pemesanan, total_pembelian, jmlh_dibayarkan, kembalian, tanggal_pembayaran, status_pembayaran)
                VALUES ('$_POST[id_pemesanan]','$_POST[total_pembelian]','$_POST[jmlh_dibayarkan]','$_POST[kembalian]','$_POST[tanggal_pembayaran]','$_POST[status_pembayaran]')";
                }
                if ($conn->query($sql) === TRUE) {
                    header('Location: '.$con->site_url().'/admin/index.php?mod=pembayaran');
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
            $content="views/pembayaran/laporan.php";
            include_once 'views/template.php';
        }
    break;
    case 'edit':
        $pembayaran ="SELECT * FROM pembayaran WHERE md5(pembayaran)='$_GET[id]'";
        $pembayaran=$conn->query($pembayaran);
        $_POST=$pembayaran->fetch_assoc();
        $_POST['id_pemabayaran']=md5($_POST['id_pemabayaran']);
        //var_dump($produk);
        $produk="SELECT * FROM produk";
        $produk=$conn->query($produk);
        $content="views/pembayaran/laporan.php";
        include_once 'views/template.php';
    break;
    case 'delete';
        $pembayaran ="DELETE FROM pembayaran WHERE md5(id_pemabayaran)='$_GET[id]'";
        $pembayaran=$conn->query($pembayaran);
        header('Location: '.$con->site_url().'/admin/index.php?mod=pembayaran');
    break;
    default:

    $sql = "SELECT * FROM pembayaran";
    $pembayaran=$conn->query($sql);
    $conn->close();
    $content="views/pembayaran/tampil.php";
    include_once 'views/template.php';
}
?>