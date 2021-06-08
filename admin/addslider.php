<?php 
require('inc/toppart.php');
require('inc/navbar.php');
require('inc/sidebar.php');
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
                    $query ="INSERT INTO sliders (name,h1,p,btn_text,btn_link,img) VALUES('$name','$heading','$text','$btntext','$btnlink','$imglink')";
                    $result = mysqli_query($conn,$query);
                    if($result)
                    {
                        echo "Slider is added successfully.";
                    }
                    else 
                    {
                        echo "Slider couldn't added successfully.";
                    }
                }


              }
            ?>
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Slider</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="#" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Slider Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Slider Heading</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="heading" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Slider Text</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="text" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Slider Button Text</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="btntext" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Slider Button Link</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="btnlink" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Slider Image Link</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="imglink" placeholder="">
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