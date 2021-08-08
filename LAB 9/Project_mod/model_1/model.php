<?php 

require_once 'db_connect.php';

function signStudent($username,$password)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `user_info` WHERE Username ='$username'  ";
    try
    {
        $stmt = $conn->query($selectQuery);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    
        if (password_verify($password, $rows[0]['Password'])) 
        {
            return $rows;
        } else 
        {
       return null;
        }
}



function showAllStudent()
{
    $conn = db_conn();
    $selectQuery = 'SELECT * FROM `user_info` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function getAllStudentCount_Area($area)
{
    $conn = db_conn();
    $selectQuery = "SELECT COUNT(1) as TOTAL FROM `user_info` WHERE Area LIKE '$area%' ";
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows[0]['TOTAL'];
}

function showAllStudentWithPagination_Area($page, $number_of_rows, $area)
{
    $offset = ($page-1) * $number_of_rows;

    $conn = db_conn();
    $selectQuery = "SELECT * FROM `user_info` WHERE Area LIKE '$area%' LIMIT $number_of_rows OFFSET $offset";
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function showStudent($username)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `user_info` where  Username = ?";

    try 
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$username]);
    } 
    catch (PDOException $e) 
    {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}


function searchUser($user_name)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `user_info` WHERE Username LIKE '%$user_name%'";

    
    try
    {
        $stmt = $conn->query($selectQuery);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function addStudent($data)
{
    $conn = db_conn();
    $selectQuery = "INSERT into user_info (Name, Email, Username, Password, Gender, TGender, Current_Institution, Class, Phone, Area, Salary, DOB)
VALUES (:name, :email, :username, :password, :stgender, :tgender, :ins, :class, :phone, :area, :sal, :dob)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':name' => $data['name'],
            ':email' => $data['email'],
            ':username' => $data['username'],
            ':password' => $data['password'],
            ':stgender' => $data['stgender'],
            ':tgender' => $data['tgender'],
            ':ins' => $data['ins'],
            ':class' => $data['class'],
            ':phone' => $data['phone'],
            ':area' => $data['area'],
            ':sal' => $data['sal'],
            ':dob' => $data['dob'],
            
        ]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}



function updateStudent($username, $data)
{
    $conn = db_conn();
    $selectQuery = "UPDATE user_info set Name = ?, Email = ?, Current_Institution = ?, Phone = ? where Username = ?";
    try
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$data['name'], $data['email'], $data['ins'],$data['phone'], $username]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    $conn = null;   
    return true;
}



function deleteStudent($id)
{
    $conn = db_conn();
    $selectQuery = "DELETE FROM `user_info` WHERE `ID` = ?";
    try
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}

function changePass($username, $data)
{
    $conn = db_conn();
    $selectQuery = "UPDATE user_info set Password = ? where Username = ?";
    try
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$data['password'], $username]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    $conn = null;   
    return true;
}