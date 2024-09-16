<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo (isset($title)) ? ucwords($title) : ''; ?></title>		
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/dataTables.bootstrap.min.css"/>		
		<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
		<script  type="text/javascript" src="<?php echo base_url()?>assets/js/datatables.min.js"></script> 
        <script  type="text/javascript" src="<?php echo base_url()?>assets/js/dataTables.bootstrap.min.js"></script>
		<script  type="text/javascript" src="<?php echo base_url()?>assets/js/moment.min.js"></script>	
		<script  type="text/javascript" src="<?php echo base_url()?>assets/js/datetime-moment.js"></script>
		
		<script  type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-ui.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/jquery-ui-1.10.0.custom.min.css" />
<style type="text/css">
        table.dataTable thead .sorting_desc:after{content: '';}
        table.dataTable thead .sorting:after{content: '';}
        .buttons-excel.buttons-html5{background: #337ab7;border: 1px solid #2e6da4;color: #fff;border-radius: 5px;padding: 6px 12px;font-weight: 400;font-size: 14px;}
        </style>
    </head>	
	<?php echo $contents ?>	
</html>