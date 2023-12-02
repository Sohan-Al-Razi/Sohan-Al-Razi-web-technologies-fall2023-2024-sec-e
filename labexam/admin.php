<?php

    require_once('db.php');
    function login($username, $password){
        $con = getConnection();
        $sql = "select * from admin where username='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $admin = mysqli_fetch_assoc($result);
        
        if(count($admin) > 0){
            return true;
        }else{
            return false;
        }
        function Signup($username, $password,$contact,$ename){
            $con = getConnection();
            $sql = "select * from admin where username='{$username}' ,password='{$password}',contact='{$contact}',ename='{$ename}'";
            $result = mysqli_query($con, $sql);
            $admin = mysqli_fetch_assoc($result);
            
            if(count($admin) > 0){
                return true;
            }else{
                return false;
            }
    }