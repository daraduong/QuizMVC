<div id="users">
    <div class="col-md-12">
        <div class="pull-left">
		<a href="index.php?action=viewUser"><button>Manage User</button></a>
            <input class="search" placeholder="Search" />
        </div>
		
        <div class="pull-right">
            <a href="index.php?action=add"><i class="glyphicon glyphicon-plus-sign" style="font-size:20px;"></i></a>&nbsp;
        </div>



    </div>
    <form action="employee.php" method="POST">
        <table class="table-bordered col-md-12">
            <th class="sort text-center">ID</th>
            <th class="sort text-center" data-sort="fname">Student Name</th>
            <th class="sort text-center" data-sort="age">Age</th>
            <th class="sort text-center" data-sort="salary">Salary</th>
            <th class="sort text-center">Action</th>
            
            <tbody class="list">
				<?php
				if($data['employee_data'] != ""){
					$index = 1;
				foreach($data['employee_data'] as $row):?>
					<tr>
						<td><?php echo $index?></td>
						<td><?php echo $row['firstname']." ".$row['lastname'];?></td>
						<td><?php echo $row['age'];?></td>
						<td><?php echo $row['salary'];?></td>
						<td class="text-center">
							<a href="index.php?action=detail&id=<?php echo $row['id']?>"><i class="glyphicon glyphicon-eye-open" style="font-size:20px;"></i></a>&nbsp;
							<a href="index.php?action=edit&id=<?php echo $row['id']?>"><i class="glyphicon glyphicon-pencil" style="font-size:20px;"></i></a>&nbsp;
							<a href="index.php?action=delete&id=<?php echo $row['id']?>"><i class="glyphicon glyphicon-trash" style="font-size:20px;"></i></a>&nbsp;
						</td>
					</tr>
				<?php
				$index++;
				endforeach;
				}
					?>
			</tbody>
		</table>
    </form>
</div>

<script>
    var options = {
        valueNames: ['id', 'fname', 'age', 'salary']
    };

    var userList = new List('users', options);
</script>