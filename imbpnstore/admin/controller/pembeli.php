<?php
$con->auth();
$conn=$con->koneksi();
switch (@$_GET['page']){
    case 'add':
        $content="views/pembeli/tambah.php";
        include_once 'views/template.php';
    break;
    case 'save':
        if($_SERVER['REQUEST_METHOD']=="POST"){
            //Validasi
            if(empty($_POST['no_id_pembeli'])){
                $err['no_id_pembeli']= "Id Pembeli Wajib Diisi";
            }
            if(empty($_POST['nickname'])){
                $err['nickname']= "Nickname Wajib Diisi";
            }
            if(empty($_POST['level_karakter'])){
                $err['level_karakter']= "Level Karakter Wajib Diisi";
            }
            if(!isset($err)){
                if(!empty($_POST['id_pembeli'])){
                    //update
                    $sql="UPDATE pembeli SET no_id_pembeli='$_POST[no_id_pembeli]',nickname='$_POST[nickname]',
                    level_karakter='$_POST[level_karakter]' WHERE md5(id_pembeli)='$_POST[id_pembeli]'";
                }
                else{
                    //save
                    $sql = "INSERT INTO pembeli (no_id_pembeli, nickname, level_karakter)
                    VALUES ('$_POST[no_id_pembeli]','$_POST[nickname]','$_POST[level_karakter]')";
                }
                if ($conn->query($sql) === TRUE) {
                    header('Location: '.$con->site_url().'/admin/index.php?mod=pembeli');
                } else {
                    $err['msg']= "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        }else{
            $err['msg']="Tidak diizinkan";
        }
        if(isset($err)){
            $content="views/pembeli/tambah.php";
            include_once 'views/template.php';
        }
    break;
    case 'edit':
        $pembeli ="SELECT * FROM pembeli WHERE md5(id_pembeli)='$_GET[id]'";
        $pembeli=$conn->query($pembeli);
        $_POST=$pembeli->fetch_assoc();
        $_POST['id_pembeli']=md5($_POST['id_pembeli']);
        //var_dump($produk);
        $content="views/pembeli/tambah.php";
        include_once 'views/template.php';
    break;
    case 'delete';
        $pembeli ="DELETE FROM pembeli WHERE md5(id_pembeli)='$_GET[id]'";
        $pembeli=$conn->query($pembeli);
        header('Location: '.$con->site_url().'/admin/index.php?mod=pembeli');
    break;
    default:

    $sql = "SELECT * FROM pembeli";
    $pembeli=$conn->query($sql);
    $conn->close();
    $content="views/pembeli/tampil.php";
    include_once 'views/template.php';
}
?>