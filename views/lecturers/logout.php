<?php
    session_start();
    include('include/config.php');
    $_SESSION['aid']=="";
    session_unset();
    
    $_SESSION['errmsg']="You have successfully loggedout";
?>
<script language="javascript">
    document.location="../../index.php";
</script>
