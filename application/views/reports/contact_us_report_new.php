<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h1 style="text-align:center"><?php echo (isset($title)) ? ucwords($title) : ''; ?></h1>
                <table id="report-table" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr><td>Policy Number</td><td>DOB</td><td>Phone no</td><td>Email Id</td><td>SR Group</td><td>SR Type</td><td>Comment</td><td>Kotak Server Path</td><td>File Path</td><td>SR Response</td><td>Date</td></tr>
                      <!-- <tr><td>Entry ID</td><td>Feedback Type</td><td>Name</td><td>Email</td><td>Phone no</td><td>Feedback</td><td>Date</td></tr>-->
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
            $.fn.dataTable.moment('YYYY-mm-dd HH:mm:ss');

            $("#download").on("click", function () {
                var data = $.param($('#report-table').DataTable().ajax.params());
                var url = '<?php echo site_url("report/contact_us_export_CSV_new") ?>';
                postURL(url + '?' + data);
            });

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
                    null,
                    null,
                    null,
					 null,
                ],
                "ajax": {
                    url: "<?php echo site_url("report/contact_us_report_page_new") ?>",
                    type: 'POST'
                },
                "columnDefs": [
                    {type: 'date', targets: [4]}
                ]
            });
        });

        function reload_table()
        {
            table.ajax.reload(null, false); //reload datatable ajax 
        }
    </script>
</body>