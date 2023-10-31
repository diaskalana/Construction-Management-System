<?php
    require 'config.php';
    $user_id_check = $_SESSION['user'];
    $dash_updt = false;

    if(isset($_POST["dashUpdt"])){
        
        if (in_array("fName", $_REQUEST['cb_list'])){
            $firstName = $_REQUEST['ds_firstName'];
            $sql=  "UPDATE customers SET first_name='$firstName' where id=$user_id_check";
            $dash_updt = true;
            $con->query($sql);
        } 
        if (in_array("lName", $_REQUEST['cb_list'])){
            $lastName = $_REQUEST['ds_lastName'];
            $sql=  "UPDATE customers SET last_name='$lastName' where id=$user_id_check";
            $con->query($sql);
            $dash_updt = true;
        } 
        if (in_array("title", $_REQUEST['cb_list'])){
            $workTitle = $_REQUEST['ds_workTitle'];
            $sql=  "UPDATE customers SET title='$workTitle' where id=$user_id_check";
            $con->query($sql);
            $dash_updt = true;
        } 
        if (in_array("cName", $_REQUEST['cb_list'])){
            $companyName = $_REQUEST['ds_companyName'];
            $sql=  "UPDATE customers SET company='$companyName' where id=$user_id_check";
            $con->query($sql);
            $dash_updt = true;
        } 
        if (in_array("cNumber", $_REQUEST['cb_list'])){
            $customerNum = $_REQUEST['ds_customerNum'];
            $sql=  "UPDATE customers SET cNumber='$customerNum' where id=$user_id_check";
            $con->query($sql);
            $dash_updt = true;
        } 
        if (in_array("contact", $_REQUEST['cb_list'])){
            $contact = $_REQUEST['ds_contact'];
            $sql=  "UPDATE customers SET dc_number ='$contact' where id=$user_id_check";
            $con->query($sql);
            $dash_updt = true;
        } 
        if (in_array("email", $_REQUEST['cb_list'])){
            $email = $_REQUEST['ds_email'];
            $sql= "UPDATE customers SET email='$email'  where id=$user_id_check";
            $con->query($sql);
            $dash_updt = true;
        } 
        if($dash_updt == true){

            echo "<script>
                (function ds_success() {
                    var dash_message = document.getElementById('dash_success');
                    dash_message.style.display = 'block';
                })();
            </script>";
            $dash_updt = false;
        }   
        
    }
    $con->close();
?>     

<!-- 
    Student name: D.D.K.S. Dias
    Student ID: IT21220760
    Module: IWT (1st Yr: 2nd Sem: Final Assignment: 2022)
 -->