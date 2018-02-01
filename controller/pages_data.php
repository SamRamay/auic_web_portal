<?php
    include("../model/pages_data.php");

    function get_about_desc()
    {
    $about_desc = $_SESSION['about_desc'];
    echo "$about_desc";
    }

    function get_vismis_desc()
    {
    $vismis_desc = $_SESSION['vismis_desc'];
    echo "$vismis_desc";
    }

    function get_objectives_desc()
    {
    $obj_desc = $_SESSION['obj_desc'];
    echo "$obj_desc";
    }

    function get_messages_desc()
    {
    $msg_desc = $_SESSION['msg_desc'];
    echo "$msg_desc";
    }

    function get_undergrad_desc()
    {
    $undergrad_desc = $_SESSION['undergrad_desc'];
    echo "$undergrad_desc";
    }

    function get_grad_desc()
    {
    $grad_desc = $_SESSION['grad_desc'];
    echo "$grad_desc";
    }

    function get_department_desc()
    {
    $department_desc = $_SESSION['department_desc'];
    echo "$department_desc";
    }

    function get_rules_desc()
    {
    $rules_desc = $_SESSION['rules_desc'];
    echo "$rules_desc";
    }
?>