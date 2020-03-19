<?php
require 'db.php';
$message = '';
if (isset ($_POST['EMPNO'])  && isset($_POST['ENAME'])
    && isset ($_POST['JOB'])  && isset($_POST['MGR'])
    && isset ($_POST['HIREDATE'])  && isset($_POST['SAL'])
    && isset ($_POST['COMM'])  && isset($_POST['DEPTNO'])) {
  
  $EMPNO = $_POST['EMPNO'];
  $ENAME = $_POST['ENAME'];
  $JOB = $_POST['JOB'];
  $MGR = $_POST['MGR'];
  $HIREDATE = $_POST['HIREDATE'];
  $SAL = $_POST['SAL'];
  $COMM = $_POST['COMM'];
  $DEPTNO = $_POST['DEPTNO'];

  $sql = 'INSERT INTO emp(EMPNO, ENAME,JOB,MGR,HIREDATE,SAL,COMM,DEPTNO) VALUES(:EMPNO, :ENAME,:JOB,:MGR,:HIREDATE,:SAL,:COMM,:DEPTNO)';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':EMPNO' => $EMPNO, ':ENAME' => $ENAME,
                          ':JOB' => $JOB, ':MGR' => $MGR,
                          ':HIREDATE' => $HIREDATE, ':SAL' => $SAL,
                          ':COMM' => $COMM, ':DEPTNO' => $DEPTNO
                          ])) {
    $message = 'บันทึกข้อมูลเรียบร้อย';
  }

}

 ?>
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
    <center><h3> - Employee records - </h3></center>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">
        <div class="form-group">
          <label for="EMPNO">Empolyee ID :</label>
          <input type="text" name="EMPNO" id="EMPNO" class="form-control">
        </div>

        <div class="form-group">
          <label for="ENAME">Empolyee Name :</label>
          <input type="text" name="ENAME" id="ENAME" class="form-control">
        </div>
        
        <div class="form-group">
          <label for="JOB">Job :</label>
          <input type="text" name="JOB" id="JOB" class="form-control">
        </div>

        <div class="form-group">
          <label for="MGR">Menager :</label>
          <?php
          $sql = "select EMPNO, ENAME from emp where JOB IN ('MANAGER' , 'PRESSIDENT') " ;
          $statement = $connection->prepare($sql);
          $statement->execute();
          $employee = $statement->fetchAll(PDO::FETCH_OBJ);
          ?>
          <select name="MGR" class="form-control">
              <?php
              foreach($employee as $emp){ //loop
              ?>
              
                  <option value="<?=$emp->EMPNO?>"><?=$emp->ENAME;?></option>
              
               <?php
               }
                  ?>
          </select>
          
      
        </div>

        <div class="form-group">
          <label for="HIREDATE">Hiredate :</label>
          <input type="date" name="HIREDATE" id="HIREDATE" class="form-control">
        </div>

        <div class="form-group">
          <label for="email">Salary :</label>
          <input type="NUMBER" name="SAL" id="SAL" class="form-control">
        </div>

        <div class="form-group">
          <label for="name">Commission :</label>
          <input type="text" name="COMM" id="COMM" class="form-control">
        </div>

        <div class="form-group">
          <label for="DEPTNO">Department :</label><br>
        <select name="DEPTNO" id="DEPTNO" class = "form-control">
           <?php
           $sql = "SELECT DEPTNO ,DNAME FROM dept";
           $statement = $connection->prepare($sql);
           $statement->execute();
           $dept = $statement->fetchAll(PDO::FETCH_OBJ);
           foreach($dept as $dept):
           ?>
                <option value="<?=$dept->DEPTNO?>"><?=$dept->DNAME?></option>
           <?php endforeach; ?>
        </select>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-info">บันทึกข้อมูลพนักงาน</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>