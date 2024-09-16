
    <body>

		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<h1 style="text-align:center"><?php echo (isset($title)) ? ucwords($title) : ''; ?></h1>
					<table id="report-table" class="table table-bordered table-striped table-hover">
						<thead>
							<tr><td>Entry ID</td><td>Name</td><td>Phone</td><td>Email</td><td>City</td><td>Company</td><td>Plan</td><td>Date</td></tr>
						</thead>
						<tbody>
						</tbody>
					</table>
					
					<input type="button" name="download" value="Export Data" id="download" class="btn btn-primary pull-right">

				</div>
			</div>
		</div>

    
		<script type="text/javascript">
		$(document).ready(function() {
			$.fn.dataTable.moment( 'YYYY-mm-dd HH:mm:ss' );
			
			$("#download").on("click", function(){
				var data = $.param($('#report-table').DataTable().ajax.params());
				var url = '<?php echo site_url("report/relationship_manager_export_CSV") ?>';
				postURL( url+'?'+data);
			});
			
			function postURL(url) {
			  var form = document.createElement("FORM");
			  form.method = "POST";
			  form.style.display = "none";
			  document.body.appendChild(form);
			  form.action = url.replace(/\?(.*)/, function(_, urlArgs) {
				urlArgs.replace(/\+/g, " ").replace(/([^&=]+)=([^&=]*)/g, function(input, key, value) {
				  input = document.createElement("INPUT");
				  input.type = "hidden";
				  input.name = decodeURIComponent(key);
				  input.value = decodeURIComponent(value);
				  form.appendChild(input);
				});
				return "";
			  });
			  form.submit();
			}
			
			table = $('#report-table').DataTable({
				"pageLength" : 10,
				"processing": true,
				"serverSide": true,
				"order": [
				  [0, "desc" ]
				],
				"columns": [
					null,
					null,
					null,
					null,
					null,
					null,
					null,
					null,
				],
				"ajax": {
					url : "<?php echo site_url("report/relationship_manager_report_page") ?>",
					type : 'POST'
				},
				"columnDefs": [
					{ type : 'date', targets : [4] }
				]
			});
		});

		function reload_table()
		{
			table.ajax.reload(null,false); //reload datatable ajax 
		}
		</script>
    </body>