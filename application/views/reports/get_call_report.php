
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
                        <tr><td>Entry ID</td><td>Name</td><td>Phone no</td><td>Email</td><td>Query</td><td>Date</td></tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>

                <input type="button" name="download" value="Export Data" id="download" class="btn btn-primary pull-right">

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
                var url = '<?php echo site_url("report/get_call_export_CSV") ?>';
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
                    ],
                    "ajax": {
                        url: "<?php echo site_url("report/get_call_report_page") ?>",
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

        function reload_table()
        {
            table.ajax.reload(null, false); //reload datatable ajax 
        }
    </script>
</body>