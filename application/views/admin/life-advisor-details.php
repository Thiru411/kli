<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Life Advisor Details</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php $this->load->view('admin/inc/common-scripts-top.php'); ?>

</head>

<body class="sidebar-collapse layout-top-nav layout-navbar-fixed">
  <div class="wrapper">
    <!-- Navbar -->
    <?php $this->load->view('admin/inc/nav-top.php'); ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php //$this->load->view('admin/inc/nav-side.php');
    ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Life Advisor Details</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo base_url() ?>advisors-for-life/admin/dashboard">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url() ?>advisors-for-life/admin/life-advisor-details">Life Advisor Details</a></li>
                <li class="breadcrumb-item active">View</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container fluid">
        <form role="form" id="quickForm" name="myForm" action="<?= base_url() ?>advisors-for-life/admin/life-advisor-details" method="get">
        <div class="card card-default">
          <div class="card-body">   
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>From date</label>
                  <input type="date" required class="form-control" name="from_date" value="<?php if(isset($_GET['from_date'])){echo $_GET['from_date'];}?>">                   
                </div> 
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>To Date</label>
                  <input type="date" required class="form-control" name="to_date" value="<?php if(isset($_GET['to_date'])){echo $_GET['to_date'];}?>">
                </div> 
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label></label>
                  <button type="submit" class="btn btn-primary" style="margin-top: 9%;">Get Details</button>
                </div> 
              </div>
              <div class="card-footer">
                      
                    </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            
            <!-- /.row -->
          </div>
        </div>
        </form>






        </div>
      </section>
      <section class="content">
        <div class="container fluid">
          <div class="row">
            <div class="col-md-12">

              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">View Customer Details</h3>
                </div>
                <div class="card-body">

                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Sl.No</th>
                        <th>Customer Name</th>
						            <th>Email</th>
                        <th>Mobile Number</th>
                        <th>Date</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?php $i=0; if($card_details_results){
                        foreach($card_details_results as $info){?>
                        <tr>
                          <td><?=$i++;?></td>
                          <td><?=$info->cust_name?></td>
                          <td><?=$info->cust_number?></td>
                          <td><?=$info->cust_emailid?></td>
                          <td><?=date('Y-m-d',strtotime($info->save_date))?></td>
                        </tr>
                      <?php   }
                     }?>
                    </tbody>
                  </table>
                </div>

              </div>
            </div> 
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>

    <?php $this->load->view('admin/inc/footer.php'); ?>

  </div>
  <!-- ./wrapper -->


  <?php $this->load->view('admin/inc/common-scripts-bottom.php'); ?>
 
</body>

</html>