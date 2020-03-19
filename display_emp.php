<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<?php
require 'db.php';
$sql = 'SELECT * FROM emp';

$statement = $connection->prepare($sql);
$statement->execute();
$people = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>


<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <center><h2>- All people -</h2></center>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>Empolyee ID</th>
          <th>Empolyee Name</th>
          <th>Job</th>
          <th>Menager</th>
          <th>Hiredate</th>
          <th>Salary</th>
          <th>Commission</th>
          <th>Department</th>
        </tr>
        <?php foreach($people as $person): ?>
          <tr>
            <td><?= $person->EMPNO; ?></td>
            <td><?= $person->ENAME; ?></td>
            <td><?= $person->JOB; ?></td>
            <td><?= $person->MGR; ?></td>
            <td><?= $person->HIREDATE; ?></td>
            <td><?= $person->SAL; ?></td>
            <td><?= $person->COMM; ?></td>
            <td><?= $person->DEPTNO; ?></td>
            <td>
            <a href="edit.php?id=<?=$person->EMPNO ?>" <button class="btn"> <i class="fa fa-edit" style="font-size:24px"></i></button></a>
              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete.php?id=<?=$person->EMPNO ?>" class='btn'><i class="fa fa-eraser" style="font-size:24px"></i> </a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>
  <div class="form-group"><br>
      <center><input type="button" class="btn btn-primary" onclick="window.location='index.php'" value="ออกจากระบบ"></center> 
  </div>



