<?php
if(isset($_POST['email'])){
    //action
    $conn=$con->koneksi();
    $email=$_POST['email'];$password=md5($_POST['password']);
    $sql = "SELECT * FROM data_login WHERE password ='$password' AND email ='$email' AND active ='Y'";
    $user=$conn->query($sql);
    if($user->num_rows > 0){
        $sess=$user->fetch_array();
        $_SESSION['login']['email']=$sess['email'];
        $_SESSION['login']['id_login']=$sess['id_login'];
        $url="http://localhost/imbpnstore";
        echo '<script>alert("Login Sukses");window.location ="http://localhost/imbpnstore/admin/index.php?mod=home"</script>';
        
    }else{
        $msg="Email dan Password salah!!!";
        echo '<script>alert("Login Gagal")</script>';
        include_once 'views/v_login.php';
    }
}else{
    include_once 'views/v_login.php';
}
?>