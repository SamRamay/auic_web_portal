<?php
    include("db.php");
//About Abasyn page

    function fetch_data($page_name)
    {
        global $con;

        $sql = "SELECT p_description FROM pages_data WHERE p_name='$page_name'";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                        $description = $row["p_description"];
                       return $description;        
            }
        
        } else { echo "Error: " . $sql . "<br>" . $con->error; }
    }

?>
