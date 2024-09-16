<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h1 style="text-align:center"><?php echo (isset($title)) ? ucwords($title) : ''; ?></h1>
                <p id="date_filter">
                    <span id="date-label-from" class="date-label">From: </span><input class="date_range_filter date" type="text" id="datepicker_from" />
                    <span id="date-label-to" class="date-label">To:<input class="date_range_filter date" type="text" id="datepicker_to" />
                        <input type="button" name="customsearch" id="customsearch" value="Search" class="btn btn-info" />
                </p>
                <table id="report-table" class="table table-bordered table-striped table-hover"> 
                    <thead>
                        <tr><td>Entry ID</td><td>Name</td><td>DOB</td><td>Phone no</td><td>Email</td><td>City</td><td>Pincode</td><td>Date</td></tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>

               <!--  <input type="button" name="download" value="Export Data" id="download" class="btn btn-primary pull-right"> -->

            </div>
        </div>
    </div> 


    <script type="text/javascript">
        $(document).ready(function () {
            // Date range filter
            var minDateFilter = "";
            var maxDateFilter = "";

            $.fn.dataTable.moment('YYYY-mm-dd HH:mm:ss');

            $("#download").on("click", function () {
                var data = $.param($('#report-table').DataTable().ajax.params());
                var url = '<?php echo site_url("report/get_life_advisor_joinus_export_CSV") ?>';
                postURL(url + '?' + data);
            });

            fetch_data('no');

            function postURL(url) {
                var form = document.createElement("FORM");
                form.method = "POST";
                form.style.display = "none";
                document.body.appendChild(form);
                form.action = url.replace(/\?(.*)/, function (_, urlArgs) {
                    urlArgs.replace(/\+/g, " ").replace(/([^&=]+)=([^&=]*)/g, function (input, key, value) {
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

function fetch_data(is_date_search, start_date = '', end_date = ''){
 				 table = $('#report-table').DataTable({  
               	  "lengthMenu": ["All"],          	
                    "pageLength": 10,
                    "processing": true,
                    "serverSide": true,
                    "order": [ [0, "desc"] ],
                    "columns": [null,null,null,null,null,null,null,null,],
                    "ajax": {
                        url: "<?php echo site_url("report/get_life_advisor_joinus_report_page") ?>",
                        data: {
                            is_date_search: is_date_search, start_date: start_date, end_date: end_date
                        },
                        type: 'POST'
                    },
                    "columnDefs": [
                        {type: 'date', targets: [2]}
                    ],  
                    dom: 'Bfrtip',
                    buttons: [ 
							{
							    extend: 'excel',
							    text:'Export Data',
							    action: newExportAction
							},
                          ]
                   
                });   
            }
/*


            function fetch_data(is_date_search, start_date = '', end_date = ''){
                table = $('#report-table').DataTable({
                    "pageLength": 10,
                    "processing": true,
                    "serverSide": true,
                    "order": [
                        [0, "desc"]
                    ],
                    "columns": [
                        null,
                        null,
                        null,
                        null,
                        null,
                        null,
                        null,
                    ],
                    "ajax": {
                        url: "<?php echo site_url("report/get_life_advisor_joinus_report_page") ?>",
                        data: {
                            is_date_search: is_date_search, start_date: start_date, end_date: end_date
                        },
                        type: 'POST'
                    },
                    "columnDefs": [
                        {type: 'date', targets: [4]}
                    ]
                });
            }
*/

            $("#datepicker_from").datepicker({
                showOn: "button",
                buttonImage: "<?php echo base_url(); ?>assets/images/admin/calendar.gif",
                buttonImageOnly: true,
                "onSelect": function (date) {
                    minDateFilter = (new Date(date).getTime()) / 1000;
                }
            }).keyup(function () {
                minDateFilter = (new Date(this.value).getTime()) / 1000;
            });

            $("#datepicker_to").datepicker({
                showOn: "button",
                buttonImage: "<?php echo base_url(); ?>assets/images/admin/calendar.gif",
                buttonImageOnly: true,
                "onSelect": function (date) {
                    maxDateFilter = (new Date(date).getTime()) / 1000;
                }
            }).keyup(function () {
                maxDateFilter = (new Date(this.value).getTime()) / 1000;
            });

            $('#customsearch').click(function () {
                var start_date = $('#datepicker_from').val();
                var end_date = $('#datepicker_to').val();
                // if (start_date != '' && end_date != '')
                if (start_date != '' || end_date != '')
                {
                    if (start_date != '' && end_date == '') {
                        maxDateFilter = Math.round((new Date()).getTime() / 1000);
                    }
                    $('#report-table').DataTable().destroy();
                    fetch_data('yes', minDateFilter, maxDateFilter);
                } else {
                    $('#report-table').DataTable().destroy();
                    fetch_data('no');
                }
            });
        });
 var oldExportAction = function (self, e, dt, button, config) {
    	    if (button[0].className.indexOf('buttons-excel') >= 0) {
    	        if ($.fn.dataTable.ext.buttons.excelHtml5.available(dt, config)) {
    	            $.fn.dataTable.ext.buttons.excelHtml5.action.call(self, e, dt, button, config);
    	        }
    	        else {
    	            $.fn.dataTable.ext.buttons.excelFlash.action.call(self, e, dt, button, config);
    	        }
    	    } else if (button[0].className.indexOf('buttons-print') >= 0) {
    	        $.fn.dataTable.ext.buttons.print.action(e, dt, button, config);
    	    }
    	};

    	var newExportAction = function (e, dt, button, config) {
    	    var self = this;
    	    var oldStart = dt.settings()[0]._iDisplayStart;

    	    dt.one('preXhr', function (e, s, data) {
    	        // Just this once, load all data from the server...
    	        data.start = 0;
    	        data.length = 2147483647;

    	        dt.one('preDraw', function (e, settings) {
    	            // Call the original action function 
    	            oldExportAction(self, e, dt, button, config);

    	            dt.one('preXhr', function (e, s, data) {
    	                // DataTables thinks the first item displayed is index 0, but we're not drawing that.
    	                // Set the property to what it was before exporting.
    	                settings._iDisplayStart = oldStart;
    	                data.start = oldStart;
    	            });

    	            // Reload the grid with the original page. Otherwise, API functions like table.cell(this) don't work properly.
    	            setTimeout(dt.ajax.reload, 0);

    	            // Prevent rendering of the full data to the DOM
    	            return false;
    	        });
    	    });

    	    // Requery the server with the new one-time export settings
    	    dt.ajax.reload();
    	};
        function reload_table()
        {
            table.ajax.reload(null, false); //reload datatable ajax 
        }
    </script> 
<script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
</body>