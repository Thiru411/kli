<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Dashboard</title>

  <?php $this->load->view('admin/inc/common-scripts-top.php');?>

</head>


<body class="sidebar-collapse layout-top-nav layout-navbar-fixed">
<div class="wrapper">

<?php $this->load->view('admin/inc/nav-top.php');?>
  
<?php //$this->load->view('admin/inc/nav-side.php');?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Dashboard  <small></small></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li><!-- 
              <li class="breadcrumb-item"><a href="#">Layout</a></li> -->
              <li class="breadcrumb-item active">Top Navigation</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
    
    <div class="content">
      <div class="container">



      <div class="row">
      
      <div class="col-12 col-sm-6 col-md-3">
          <a href="<?=base_url()?>advisors-for-life/admin/customer-details">
          
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span><!-- info-box-icon bg-success elevation-1 -->
              <div class="info-box-content">
                <span class="info-box-number"><?php echo $totalUsersResultinsurance;?></span>
                <span class="info-box-text">Total Customers</span>
              </div>
            </div>           
            </a>
          </div>  
          <div class="col-12 col-sm-6 col-md-3">
          <a href="<?=base_url()?>advisors-for-life/admin/life-advisor-details">
          
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span><!-- info-box-icon bg-success elevation-1 -->
              <div class="info-box-content">
                <span class="info-box-number"><?php echo $totalUsersResultadvisor;?></span>
                <span class="info-box-text">Total Life Advisors</span>
              </div>
            </div>           
            </a>
          </div>  
          <div class="clearfix hidden-md-up"></div>  
             
          
          <div class="col-12 col-sm-6 col-md-3">
          <a href="<?=base_url()?>city"></a>
          </div>              
        </div> 
      </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php $this->load->view('admin/inc/footer.php');?>

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<?php $this->load->view('admin/inc/common-scripts-bottom.php');?>  
</body>
</html>