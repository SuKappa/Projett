<?php

    include('../config/constrants.php');

     $id = $_GET['id'];
     $sql = "DELETE FROM tbl_admin WHERE id=$id";
     $res = mysqli_query($con,$sql);

    if($res == TRUE)
    {                       
        $_SESSION['delete'] = "<div class='succes'> Admin deleted successfully</div>";
        header('location:'.SITEURL.'admin/manage-admin.php');
    }
    else
    {
        //echo "failed to delete admin";
                                                //failed to delete

        $_SESSION['delete'] = "<div class='error'>Failed to delete Admin</div>";
        header('location:'.SITEURL.'admin/manage-admin.php');
    }



?>