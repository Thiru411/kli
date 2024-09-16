        function uploadFile() {
            document.querySelector('.loader').style.display = 'block';

            // Show loader before sending the request
            document.getElementById("latest_NAV_div").style.display = 'none';
            var selectedDate = document.getElementById('datePicker').value;
            var fileInput = document.getElementById('fileInput');
            var file = fileInput.files[0];

            if (!selectedDate) {
                document.getElementById('textfor-file').innerHTML = 'Please select a date';
                return; // Stop further execution if validation fails
            }

            // Get the current date
            var currentDate = new Date().toISOString().split('T')[0];

            // Check if the selected date is in the future






            var formData = new FormData();
            formData.append('file', file);
            formData.append('selectedDate', selectedDate); // Append the selected date to FormData

            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'addcsv', true);
            xhr.onload = function() {
                document.getElementById("latest_NAV_div").style.display = 'block';

                if (xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    var errorMessage = response.message; // Renamed to avoid conflict

                    if (response.success != false) {
                        document.querySelector('.loader').style.display = 'none';

                        var t = response.data;
                        var a = "";
                        var o = t.sLastDate,
                            l = t.sNextDate,
                            c = t.schemeRecords,
                            m = t.countrecords,
                            n = t.missingDetails;
                        if (n == 'Missing Details are: ') {
                            n = '';
                        }
                        a += '<div class="navDetailWrapper"><h4>' + n + '<h3>Total uploaded record:' + m + '</h3><h2> Unit Values as on ' + o + '</h2><table><tr><th width="75%">Scheme Name</th><th width="25%">Unit Price</th></tr>';

                        if (c.length) {

                            for (var d = 0; d < c.length; d++) {
                                a += "<tr><td>" + c[d].title + "(" + c[d].scheme_id + ")</td><td>" + parseFloat(c[d].nav_value).toFixed(4) + "</td></tr>";
                            }
                            a += '<tr><th colspan="2">Unit Values will be next updated on ' + l + '</th></tr></table></div>';
                            document.getElementById("latest_NAV_div").innerHTML = a;
                        } else {
                            document.getElementById("latest_NAV_div").innerHTML = errorMessage;
                        }
                    } else {

                        document.querySelector('.loader').style.display = 'none';

                        document.getElementById("latest_NAV_div").innerHTML = errorMessage;
                    }
                } else {
                    document.querySelector('.loader').style.display = 'none';

                    console.log('Error: ' + xhr.status);
                    document.getElementById("latest_NAV_div").innerHTML = errorMessage;
                }
            };
            xhr.send(formData);
        }

        function displayFileName() {
            var fileInput = document.getElementById('fileInput');
            var file = fileInput.files[0];
            var fileName = file.name;
            var expectedFileNamePattern = /^NAV_WEBSITE_\d{8}\.CSV$/; // Pattern for file name like "NAV_WEBSITE_30042024.CSV"
            if (!file) {
                document.getElementById('textfor-file').innerHTML = 'Please choose a file to upload';

                return; // Stop further execution if validation fails
            } else if (!expectedFileNamePattern.test(fileName)) {

                document.getElementById('textfor-file').innerHTML = 'Please select a file with the name pattern "NAV_WEBSITE_YYYYMMDD.CSV';
                return; // Stop further execution if validation fails
            } else {
                var selectedDateStr = document.getElementById('datePicker').value;
                var parts = selectedDateStr.split('-'); // Assuming date format is "YYYY-MM-DD"
                var selectedDate = new Date(parts[0], parts[1] - 1, parts[2]);
                var datePart = fileName.substring(12, 20); // Extract the date part from the file name
                var formattedDate = datePart.substring(2, 4) + '-' + datePart.substring(0, 2) + '-' + datePart.substring(4); // Format the date as DD/MM/YYYY
                var fileDate = new Date(formattedDate); // Convert formatted date to Date object
                if (fileDate.getFullYear() !== selectedDate.getFullYear() ||
                    fileDate.getMonth() !== selectedDate.getMonth() ||
                    fileDate.getDate() !== selectedDate.getDate()) {
                    document.getElementById('textfor-file').innerHTML = 'Selected date does not match the date in the file name';
                    return; // Stop further execution if dates do not match
                }

                var filePath = document.getElementById('filePath');
                filePath.textContent = 'Selected file: ' + fileInput.value;
                document.getElementById('textfor-file').innerHTML = '';
                var uploadButton = document.getElementById('upload'); // Replace 'uploadButton' with the actual ID of your element
                uploadButton.removeAttribute('disabled');

            }

        }

        function checkPreviousDayData() {
            var dateOptionYes = document.getElementById('dateOptionYes');
            document.querySelector('.loader').style.display = 'block';

            if (dateOptionYes.checked) {
                // Send an AJAX request to check if data exists for the previous day
                var xhr = new XMLHttpRequest();
                xhr.open('POST', 'existingdata');
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.onload = function() {
                    if (xhr.status === 200) {
                        var response = JSON.parse(xhr.responseText);
                        if (response.success !== false) {
                            document.querySelector('.loader').style.display = 'none';

                            console.log(response.uploadedfiledate);
                            var currentDate = new Date(response.uploadedfiledate);
                            // Subtract one day (24 hours) from the current date
                            currentDate.setDate(currentDate.getDate() + 1);

                            // Extract the year, month, and day components from the previous date
                            var year = currentDate.getFullYear();
                            var month = ('0' + (currentDate.getMonth() + 1)).slice(-2); // Months are 0-indexed
                            var day = ('0' + currentDate.getDate()).slice(-2);

                            // Format the previous date as yyyy-mm-dd
                            var previousDate = year + '-' + month + '-' + day;
                            $('#datePicker').attr('min', previousDate);
                        } else {
                            document.getElementById('textfor-file').innerHTML = response.message;

                        }
                    } else {
                        document.getElementById('textfor-file').innerHTML = 'Error occurred while checking data.';

                    }
                };
                xhr.send();
            }
        }