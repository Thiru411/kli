<!-- Navbar -->

<nav class="main-header navbar navbar-expand-md navbar-dark navbar-navy">
    <div class="container">
      <a href="<?=base_url()?>advisors-for-life/admin//dashboard" class="navbar-brand">
        <!-- <img src="<?=base_url()?>assets_admin/images/favicon.png" alt="" class="brand-image img-circle elevation-3"
             style="opacity: .8"> -->
        <span class="brand-text font-weight-light">Admin</span>
      </a>
      
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
          </li>
          
              
            
         <li class="nav-item">
            <a href="<?=base_url()?>advisors-for-life/admin/customer-details" class="nav-link">Customer Details</a>
          </li> 
           <li class="nav-item">
            <a href="<?=base_url()?>advisors-for-life/admin/life-advisor-details" class="nav-link">Life Advisor Details</a>
          </li> 
      </div>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        
        <li class="nav-item">
          <a class="nav-link" href="<?=base_url()?>advisors-for-life/admin//logout"><i class="fa fa-power-off"></i></a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- /.navbar -->