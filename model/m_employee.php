<?php
	//function get and return an array()
	function m_get_data(){
		$query = "SELECT * FROM employee";
		include 'connection.php';
		$result = mysqli_query($connection,$query);
		$rows=[];
		if($result && mysqli_num_rows($result)> 0 ){
			while ($get_result_to_array = mysqli_fetch_array($result, MYSQLI_ASSOC)){ //it is an associative array 
				$rows[] = $get_result_to_array;
			}
		}
		return $rows;
		//var_dump($rows);
	}



	function m_add_data(){
	include 'connection.php';
    if(isset($_POST['btn-save'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
        $age = $_POST['age'];
        $salary = $_POST['salary'];

        $query = "INSERT INTO employee (firstname, lastname, age, salary) VALUES ('$firstname','$lastname','$age','$salary')";
		$data= mysqli_query($connection, $query);
	
		if($data){
			return $data;
		}else{
			return "not";
		}
	}
}

function m_delete_employee(){
	include 'connection.php';
	$id=$_GET['id'];
	$query = "DELETE FROM employee where id='$id'";
	$result = mysqli_query($connection,$query);

	return $result;
}

function m_employee_detail(){
	include "connection.php";
	$id=$_GET['id'];

	$query = "SELECT * FROM employee WHERE id = '$id' ";
	$result = mysqli_query($connection,$query);
	// var_dump($result);die();
	return $result;
}

function m_update_employee(){
	include "connection.php";
	$id = $_GET['id'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
        $age = $_POST['age'];
		$salary = $_POST['salary'];
		
		$query = "UPDATE employee SET firstname = '$firstname',lastname ='$lastname',age=$age,salary=$salary WHERE id = '$id' ";
		include 'connection.php';
		$result = mysqli_query($connection,$query);

		return $result;
}



function login(){

include "connection.php";

if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($connection,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($connection,$_POST['txt_pwd']);

    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from user where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($connection,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location: index.php?action=view');
        }else{
            header('Location: index.php?action=loginForm');
        }

    }

}

}

function registerUser(){
	include "connection.php";
    if(isset($_POST['register'])){
    
		$username = $_POST['username'];
		$password = $_POST['psw'];
		
       
    	$query = "INSERT INTO user (username,password) VALUES ('$username','$password')";
		$data= mysqli_query($connection, $query);
	
		if($data){
			header('Location: index.php?action=loginForm');
		}else{
			echo "no";
		}
	}


	
}


function m_get_data_user(){
	$query = "SELECT * FROM user";
	include 'connection.php';
	$result = mysqli_query($connection,$query);
	$rows=[];
	if($result && mysqli_num_rows($result)> 0 ){
		while ($get_result_to_array = mysqli_fetch_array($result, MYSQLI_ASSOC)){ //it is an associative array 
			$rows[] = $get_result_to_array;
		}
	}
	return $rows;
	//var_dump($rows);
}

function m_add_data_user(){
	include "connection.php";
    if(isset($_POST['btn-save'])){
    
		$username = $_POST['username'];
		$password = $_POST['psw'];
		
       
    	$query = "INSERT INTO user (username,password) VALUES ('$username','$password')";
		$data= mysqli_query($connection, $query);
	
		if($data){
			header('Location: index.php?action=loginForm');
		}else{
			echo "no";
		}
	}
}


?>