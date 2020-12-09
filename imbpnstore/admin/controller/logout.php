<?php 
session_destroy();
echo '<script>alert("Anda Telah Logout");window.location ="http://localhost/imbpnstore/admin"</script>';
//header('Location: http://localhost/imbpnstore/admin');
?>