
<?php
// uložení editace
session_start();
include "includes/conn.php";
if(isset($_POST{'submit'})){
    $ID =$_POST['ID'];
    $FIRSTNAME =$_POST['FIRSTNAME'];
    $LASTNAME =$_POST['LASTNAME'];
    $PHONE =$_POST['PHONE'];
    $EMAIL =$_POST['EMAIL'];

    $sql ="UPDATE bookings_record SET FIRSTNAME='$FIRSTNAME', LASTNAME='$LASTNAME', PHONE='$PHONE', EMAIL='$EMAIL'WHERE ID='$ID'";
    if($conn->query($sql)){
        $_SESSION['success'] ="Úprava byla úspěšně provedena";
    }else{
        $_SESSION['error'] = $conn->error;
    }

}else{
    $_SESSION['error'] = "Vyberte čkověka pro editaci";
}
header('location:index.php');   ////////////

?>