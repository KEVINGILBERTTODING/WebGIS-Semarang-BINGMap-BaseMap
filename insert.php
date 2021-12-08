<?php
include('header.php');
if (isset($_POST['submit']) and !empty($_POST['submit'])) {
   $ret_val = $obj->createUser();
   if ($ret_val == 1) {
      echo '<script type="text/javascript">';
      echo 'alert("Record Saved Successfully");';
      echo 'window.location.href = "index.php";';
      echo '</script>';
   }
}
?>
<div class="container">

   <a href="index.php" class="btn btn-primary pull-right mt-4"><span class="glyphicon glyphicon-eye-open"></span> View Records</a>
   <br>

   <div class="container mt-4 mb-4">
      <form class="form-horizontal" method="post">
         <div class="panel-body">

            <div class="form-group">
               <label class="control-label col-sm-2">ID:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" type="number" name="id" required>
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-2">Nama tempat ibadah:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" type="text" name="nama" required>
               </div>
            </div>

            <div class="form-group">
               <label class="control-label col-sm-2">Jenis tempat ibadah:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <select name="jenis" id="jenis">
                     <option value="Gereja">Gereja</option>
                     <option value="Masjid">Masjid</option>
                     <option value="Pura">Pura</option>
                     <option value="Vihara">Vihara</option>
                  </select>
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-2">Latitude:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" name="lat" required>
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-2">Longitude:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" name="lng" required>
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-2"> </label>
               <div class="col-sm-5">
                  <input type="submit" class="btn btn-primary" name="submit" value="Submit">
               </div>
            </div>
         </div>
      </form>
   </div>
</div>
<?php include('footer.php'); ?>