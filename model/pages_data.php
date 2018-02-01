<?php
    session_start();
    include("db.php");

    $sql = "SELECT p_description FROM pages_data WHERE p_name='About Abasyn'";
    $sql1 = "SELECT p_description FROM pages_data WHERE p_name='vision_mission'";
    $sql2 = "SELECT p_description FROM pages_data WHERE p_name='objectives'";
    $sql3 = "SELECT p_description FROM pages_data WHERE p_name='messages'";
    $sql4 = "SELECT p_description FROM pages_data WHERE p_name='undergraduate'";
    $sql5 = "SELECT p_description FROM pages_data WHERE p_name='graduate'";
    $sql6 = "SELECT p_description FROM pages_data WHERE p_name='department'";
    $sql7 = "SELECT p_description FROM pages_data WHERE p_name='Rules and Policies'";


$result = $con->query($sql);
$result1 = $con->query($sql1);
$result2 = $con->query($sql2);
$result3 = $con->query($sql3);
$result4 = $con->query($sql4);
$result5 = $con->query($sql5);
$result6 = $con->query($sql6);
$result7 = $con->query($sql7);


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $about_desc = $row["p_description"];
        $_SESSION['about_desc'] = $about_desc;
    }
} else {
    echo "0 results";
}

if ($result1->num_rows > 0) {
   while($row = $result1->fetch_assoc()) {
        $vismis_desc = $row["p_description"];
        $_SESSION['vismis_desc'] = $vismis_desc;
    }
} else {
    echo "0 results";
}

if ($result2->num_rows > 0) {
    while($row = $result2->fetch_assoc()) {
         $obj_desc = $row["p_description"];
         $_SESSION['obj_desc'] = $obj_desc;
     }
 } else {
     echo "0 results";
 }

 if ($result3->num_rows > 0) {
    while($row = $result3->fetch_assoc()) {
         $msg_desc = $row["p_description"];
         $_SESSION['msg_desc'] = $msg_desc;
     }
 } else {
     echo "0 results";
 }

 if ($result4->num_rows > 0) {
    while($row = $result4->fetch_assoc()) {
         $undergrad_desc = $row["p_description"];
         $_SESSION['undergrad_desc'] = $undergrad_desc;
     }
 } else {
     echo "0 results";
 }

 if ($result5->num_rows > 0) {
    while($row = $result5->fetch_assoc()) {
         $grad_desc = $row["p_description"];
         $_SESSION['grad_desc'] = $grad_desc;
     }
 } else {
     echo "0 results";
 }

 if ($result6->num_rows > 0) {
    while($row = $result6->fetch_assoc()) {
         $department_desc = $row["p_description"];
         $_SESSION['department_desc'] = $department_desc;
     }
 } else {
     echo "0 results";
 }

 if ($result7->num_rows > 0) {
    while($row = $result7->fetch_assoc()) {
         $rules_desc = $row["p_description"];
         $_SESSION['rules_desc'] = $rules_desc;
     }
 } else {
     echo "0 results";
 }
$con->close();
session_destroy();

?>
