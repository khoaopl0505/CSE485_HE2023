<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
  
    <div class="container">
        <h3 class ="text-center text-uppercase text-success">LIST OF EMPLOYEES </h3>
    <a href=" "class='btn btn-success'>+ ADD NEW EMPLOYEE</a>
    <table class="table">
  <thead>
  <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Salary</th>
     

      <th scope="col">Action</th>
      
    </tr></thead>
  <?php
   foreach($employees  as $employee ){
     ?>
      <tr>
      <th scope="row"><?php echo $employee ->getemployeeID();?></th>
      <td scope="row"><?= $employee->getName();?></td>
      <td scope="row"><?= $employee->getAddress();?></td>
      <td scope="row"><?= $employee->getSalary();?></td>
      <td>
          <a href="">Sửa</a>
    
          <a href="">Xóa</a>
      </td>

    </tr>
    <?php
    }
   ?>
  </thead>
 
</table>    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

   
</body>
</html>