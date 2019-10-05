<?php
include('../include/mydb.php');
$room_id = $_GET['room_id'];
$qry = "delete FROM `admin_enter_food` where food_id=$room_id";
$run = mysqli_query($con , $qry);

if($run == true)
{

    ?>
    <script>
    alert('Data Delete successfully ');
    window.open('index.php','_self');
    </script>
    <?php

}
else{

    ?>
    <script>
    alert('Data not Deleted');
    window.open('delete_food.php','_self');
    </script>
    <?php

}
?>