<?php 
  if($data['employee_data']  != "") {
    foreach($data['employee_data'] as $result) {
  ?>
<form class="form-horizontal" action="index.php?action=update&id=<?php echo $result['id'] ?>" method="POST">
      
  <div class="form-group">
    <label class="control-label col-sm-2">Firstname:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="firstname" value="<?php echo $result['firstname'] ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2">Lastname:</label>
    <div class="col-sm-8">
      <input type="text" name="lastname" class="form-control" value="<?php echo $result['lastname'] ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2">Title:</label>
    <div class="col-sm-8">
      <input type="text" name="title" class="form-control" value="<?php echo $result['title'] ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2">Age:</label>
    <div class="col-sm-8">
      <input type="text" name="age" class="form-control" value="<?php echo $result['age'] ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2">YearOfService:</label>
    <div class="col-sm-8">
      <input type="text" name="yearofservice" class="form-control" value="<?php echo $result['yearofservice'] ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2">Salary:</label>
    <div class="col-sm-8">
      <input type="text" name="salary" class="form-control" value="<?php echo $result['salary'] ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2">Perk</label>
    <div class="col-sm-8">
      <input type="text" name="perk" class="form-control" value="<?php echo $result['perks'] ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2">Email:</label>
    <div class="col-sm-8">
      <input type="email" name="email" class="form-control" value="<?php echo $result['email']?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2">DepartmentID:</label>
    <div class="col-sm-8">
      <input type="text" name="departmentid" class="form-control" value="<?php echo $result['departmentid'] ?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-8">
      <button type="submit" name="btn-update" class="btn btn-primary">Submit</button>
      <a href="http://localhost/php_mvc/first_project/index.php" class="btn btn-info">Cancel</a>
    </div>
  </div>
</form>
<?php
  }
}
?>