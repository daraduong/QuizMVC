<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>create</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
        <div class="col-3"></div>
        <div class="col-6">
		<a href="index.php"><button>Back</button></a>
					<br><br>
					<div class="card-header">Add Information</div>
            <div class="card">
                <div class="card-body">
                
					
                    <form action="index.php?action=insert" method="post">
                        <div class="form-group">
                            <input type="text" name="firstname" class="form-control" placeholder="firstname" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="lastname" class="form-control" placeholder="lastname" required>
                        </div>
						<div class="form-group">
                            <input type="number" name="age" class="form-control" placeholder="Age" required>
                        </div>
						<div class="form-group">
                            <input type="number" name="salary" class="form-control" placeholder="Salary" required>
                        </div>
                   
					
                </div>
				
            </div>
			<br>
			<button type="submit" name="btn-save">Add</button> </form>
        </div>
		
        <div class="col-3"></div>
    </div>
</body>
</html>