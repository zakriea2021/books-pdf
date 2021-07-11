<?php
session_start();
include 'include/connection.php';
include 'include/header.php';
if (!isset($_SESSION['adminInfo'])) {
  header('Location:index.php');
} else {


?>

  <!-- /#sidebar-wrapper -->

  <!-- Page Content -->

  <div class="container-fluid">
    <!-- Start new book -->
    <div class="new-book">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <div class="form-group">
                <label for="title">عنوان الكتاب</label>
                <input type="text" id="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="title">التصنيف</label>
                <select class="form-control">
                    <option value="">كتب دينية</option>
                    <option value="">كتب ثقافية</option>
                </select>
            </div>
            <div class="form-group">
                <label for="img">غلاف الكتاب</label>
                <input type="file" class="form-control">
            </div>
            <div class="form-group">
                <label for="img">نبذة عن الكتاب</label>
                <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <button class="custom-btn">نشر الكتاب</button>
        </form>
    </div>
    <!-- End new book -->
  </div>
  <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->
  <?php
  include 'include/footer.php';
  ?>


<?php
}
?>