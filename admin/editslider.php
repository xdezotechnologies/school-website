<?php 
require('inc/toppart.php');
require('inc/navbar.php');
require('inc/sidebar.php');
?>


<?php 
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $select_query = "SELECT * FROM sliders WHERE id=$id";
    $select_result = mysqli_query($conn,$select_query);
    $select_row = $select_result->fetch_assoc();
    $slider_name = $select_row['name'];
    $slider_h1 = $select_row['h1'];
    $slider_p = $select_row['p'];
    $slider_btn_text = $select_row['btn_text'];
    $slider_btn_link = $select_row['btn_link'];
    $slider_img = $select_row['img'];
}
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <?php
              if(isset($_POST['submit'])) {
                $name = $_POST['name'];
                $heading = $_POST['heading'];
                $text = $_POST['text'];
                $btntext = $_POST['btntext'];
                $btnlink = $_POST['btnlink'];
                $imglink = $_POST['imglink'];

                if($name!="" && $heading!="" && $text!="" && $btntext !="" && $imglink !="")
                {
                    $query ="UPDATE sliders SET name='$name', h1='$heading', p='$text', btn_text='$btntext', btn_link='$btnlink', img='$imglink' WHERE id=$id";
                    $result = mysqli_query($conn,$query);
                    if($result)
                    {
                        echo "Slider is updated successfully.";
                    }
                    else 
                    {
                        echo "Slider couldn't updated successfully.";
                    }
                }


              }
            ?>
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Slider</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="#" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Slider Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="" value="<?php echo $slider_name; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Slider Heading</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="heading" placeholder="" value="<?php echo $slider_h1; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Slider Text</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="text" placeholder="" value="<?php echo $slider_p; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Slider Button Text</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="btntext" placeholder="" value="<?php echo $slider_btn_text; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Slider Button Link</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="btnlink" placeholder="" value="<?php echo $slider_btn_link; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Slider Image Link</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="imglink" placeholder="" value="<?php echo $slider_img; ?>">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  
  <?php
  require('inc/footer.php'); 
  ?>