<?php 
 if(isset($_POST['submit'])){
    require_once 'db.php';
    $empno = $_POST['empno'];
    $ename = $_POST['ename'];
    $username = $_POST['username'];
    $password = MD5($_POST['password']);
    $sql = "INSERT INTO emp (EMPNO,ENAME,USERNAME,PASSWORD) VALUES (?,?,?,?)";
    $statement = $connection->prepare($sql);
    if ($statement->execute([$empno, $ename, $username, $password])) 
      {
     
      }
} 
?>

<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header"><br>
    <center><img src="m.png" class="img-rounded" alt="Cinque Terre" width="150" height="150"></center><br>
    <center> <h3>- Create account - </h3></center>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
        <?= $message; ?>
        </div>
      <?php endif; ?>
<form name="register" action="" method="post">
<div>
  <input type="text" class="form-control" name="empno" placeholder="Student ID" required>
</div>
<br>
<div>
  <input type="text" class="form-control" name="ename" placeholder="Name" required>
</div>
<br>
<div>
  <input type="text" class="form-control" name="username" placeholder="Email" required>
</div>
<br>
<div>
  <input type="password" class="form-control" name="password" placeholder="Password" required>
</div>
<br>

<center>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Register
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" >Register</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      ยืนยันการลงทะเบียน
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit"name='submit' class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</center>
</form>
<?php require 'footer.php'; ?>