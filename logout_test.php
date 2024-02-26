<?php
session_start();
unset($_SESSION['nik']);
{
    session_destroy();
    ?>
<script type="text/javascript">
alert('Anda Telah Logout, TERIMAKASIH');
window.location = "index.php";
</script>
<?php
}
?>