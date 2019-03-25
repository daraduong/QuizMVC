<?php
$data = array();

flexible_function($data);

function flexible_function(&$data){
    $function = 'loginForm';
    if(isset($_GET['action'])){
        $action = $_GET['action'];
        $function = $action;
    }

    $function($data);
}

function loginForm(&$data){
  
  $data['page']='loginForm';
  }

  function loginValidation(&$data){
    $data=login();
  }

  
  function getRegister(&$data){
    $data = registerUser();
  }

  function registerForm(&$data){
		$data['employee_data'] = m_get_data();
		$data['page']='register';
    }

    function view(&$data){
		$data['employee_data'] = m_get_data();
		$data['page']='employee/view';
    }

    function add(&$data){
    $data['employee_data'] =m_add_data();
		$data['page']='employee/add';
    }

    function delete(&$data){
      $data=m_delete_employee();

      if($data){
        $action = "view";
      }
      header("location:index.php?action=$action");
    }


    function detail(&$data){
      $data['employee_data'] = m_employee_detail();
      $data['page']='employee/detail';
      }

    function insert(&$data){
      $data = m_add_data();
      if($data>0){
        header("location:index.php?action=view");
      }
    }

    function edit(&$data){
      $data['employee_data'] = m_employee_detail();
      $data['page'] = "employee/update";
    }

    function update(&$data){
     $id = $_GET['id'];
     $data = m_update_employee();
     if($data){
       $action = 'view';
     }else{
       $action = 'edit&id=$id';
     }
     header('location:index.php?action='. $action);
    }

    function viewUser(&$data){
      $data['employee_data'] = m_get_data_user();
      $data['page']='user/view';
      }

      function create(&$data){
        $data = m_add_data_user();
        if($data>0){
          header("location:index.php?action=view");
        }
      }

      function addForm(&$data){
        $data['employee_data'] =m_add_data_user();
        $data['page']='user/add';
        }
?>