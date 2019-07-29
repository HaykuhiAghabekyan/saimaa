<?php
require_once "connect.php";
if(isset($_POST['send_message'])){

    $name=$_POST['name'];
    $last_name=$_POST['last_name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    $date=time();

    $query='INSERT INTO contact(name,last_name,email,subject,message,date)
		VALUES("'.$name.'","'.$last_name.'" ,"'.$email.'" ,"'.$subject.'" , "'.$message.'","'.$date.'")';

    if(!mysqli_query($mysqli,$query)){
        echo "Error".'<br>'.mysqli_error($mysqli);
    }
    $x=mysqli_insert_id($mysqli);

    if (!$x){
        $_SESSION['result']= "Error".$query."<br>".mysqli_error($mysqli);
    }else{
        $_SESSION['result']='ok';

    }

}
header('Location:../contact.php');
?>

