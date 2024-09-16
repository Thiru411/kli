<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view('inc/script-top.php'); ?> 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="<?=body_style?>">
<div class="wrapper">

  <?php $this->load->view('inc/nav-top.php'); ?> 
  <?php $this->load->view('inc/nav-side.php'); ?> 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Blogs </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blogs</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Blog Add</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" action="<?php echo base_url('blogsinsert')?>" method="post" enctype='multipart/form-data'>
                <div class="card-body row">
                  <div class="form-group col-md-12">
                    <label for="bodyContent">Body Content Url - CMS URL</label>
                    <input type="text" name="bodyContent" class="form-control" id="bodyContent" placeholder="Enter Body Content URL">
                  </div>
                  <div class="form-group col-md-12">
                    <label for="pageTitle">Page Title</label>
                    <input type="text" name="pageTitle" class="form-control" id="pageTitle" placeholder="Enter Page Title">
                  </div>
                  <div class="form-group col-md-12">
                    <label for="metaFDesc">Meta Description</label>
                    <input type="text" name="metaFDesc" class="form-control" id="metaFDesc" placeholder="Enter Meta Description">
                  </div>
                  <div class="form-group col-md-12">
                    <label for="page_url">Page Url</label>
                    <input type="text" name="page_url" class="form-control" id="page_url" placeholder="Enter Page Url">
                  </div>
                  <div class="form-group col-md-12">
                    <label for="page_schema">Page Schema</label>
                    <textarea name="page_schema" class="form-control" id="page_schema"></textarea>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="breadcrumbs">Breadcrumbs - Link & URL</label>
                    <div id="dynamic_fields"></div>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="additional_data">Additional Data</label>
                    <textarea name="additional_data" class="form-control" id="additional_data"></textarea>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6"></div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php $this->load->view('inc/footer.php'); ?> 
  
</div>
<!-- ./wrapper -->

<?php $this->load->view('inc/script-bottom.php'); ?> 
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="<?=base_url() ?>assets/plugins/jquery-validation/jquery.validate.min.js"></script>

<script>
$(document).ready(function() {
  $('#quickForm').validate({
    rules: {
      pageTitle: {
        required: true,
        minlength: 3
      },
      metaFDesc: {
        required: true,
        minlength: 5
      },
      page_url: {
        required: true,
        url: true
      },
      bodyContent: {
        required: true,
        url: true
      }
    },
    messages: {
      pageTitle: {
        required: "Please enter a page title",
        minlength: "Your title must be at least 3 characters long"
      },
      metaFDesc: {
        required: "Please provide a meta description",
        minlength: "Your meta description must be at least 5 characters long"
      },
      page_url: {
        required: "Please enter a page URL",
        url: "Please enter a valid URL"
      },
      bodyContent: {
        required: "Please enter a body content URL",
        url: "Please enter a valid URL"
      }
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });

  function generateFields() {
    var html = '<div class="breadcrumb-group row">';
    html += '<div class="form-group col-md-4">';
    html += '    <input type="text" name="breadcrumbs_links[]" class="form-control" placeholder="Breadcrumb">';
    html += '</div>';
    html += '<div class="form-group col-md-4">';
    html += '    <input type="text" name="breadcrumbs_urls[]" class="form-control" placeholder="Breadcrumb URL">';
    html += '</div>';
    html += '<div class="form-group col-md-4">';
    html += '    <button class="btn btn-outline-secondary add_button" type="button">+</button>';
    html += '    <button class="btn btn-outline-secondary remove_button" type="button">-</button>';
    html += '</div>';
    html += '</div>';
    return html;
  }

  function updateButtons() {
    $('#dynamic_fields .breadcrumb-group').each(function(index) {
      var addBtn = $(this).find('.add_button');
      var removeBtn = $(this).find('.remove_button');
      if (index === 0) {
        removeBtn.hide();
      } else {
        removeBtn.show();
      }
      if (index === $('#dynamic_fields .breadcrumb-group').length - 1) {
        addBtn.show();
      } else {
        addBtn.hide();
      }
    });
  }

  $(document).on('click', '.add_button', function() {
    $("#dynamic_fields").append(generateFields());
    updateButtons();
  });

  $("#dynamic_fields").append(generateFields());
  updateButtons();

  $(document).on('click', '.remove_button', function() {
    $(this).closest('.breadcrumb-group').remove();
    updateButtons();
  });

  $('#quickForm').on('submit', function(event) {
    var breadcrumbs = {};
    $('input[name="breadcrumbs_links[]"]').each(function(index, element) {
      var link = $(element).val();
      var url = $('input[name="breadcrumbs_urls[]"]').eq(index).val();
      if (link && url) {
        breadcrumbs[link] = url;
      }
    });

    var breadcrumbsJson = JSON.stringify(breadcrumbs);
    $('<input>').attr({
      type: 'hidden',
      name: 'breadcrumbs',
      value: breadcrumbsJson
    }).appendTo('#quickForm');
  });
});
</script>

</body>
</html>
