<?php
    include("../model/pages_data.php");

    function get_about_desc()
    {
        $data = fetch_data('About Abasyn');
        
        echo "$data";

    }

    function get_vismis_desc()
    {
        $data = fetch_data('vision_mission');
        
        echo "$data";
    }

    function get_objectives_desc()
    {
        $data = fetch_data('objectives');
        
        echo "$data";
    }

    function get_messages_desc()
    {
        $data = fetch_data('messages');
        
        echo "$data";
    }

    function get_undergrad_desc()
    {
        $data = fetch_data('undergraduate');
        
        echo "$data";
    }

    function get_grad_desc()
    {
        $data = fetch_data('graduate');
        
        echo "$data";
    }

    function get_department_desc()
    {
        $data = fetch_data('department');
        
        echo "$data";
    }

    function get_rules_desc()
    {
        $data = fetch_data('Rules and Policies');
        
        echo "$data";
    }
?>