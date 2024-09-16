<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSV File Upload</title>

    <style>
        /* Your existing CSS styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            font-size: 10px;

        }

        h2 {
            text-align: center;
            margin-top: 20px;
        }
       
        #uploadFormContainer {
            text-align: center;
            margin-top: 100px;
        }


        #uploadButton {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        #uploadButton:hover {
            background-color: #45a049;
        }

        .navWrapDetails {
            width: 80%;
            float: right;
            background: #fff;
            padding: 0px 40px;
            box-sizing: border-box;
            margin: 25px 116px 159px 152px;
            position: relative;
        }

      
        /* Styling for header */
        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Styling for footer */
        footer {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
            text-align: center;
        }

        /* Styling for main content */
        main {
            padding: 20px;
            margin-bottom: 60px; /* Adjusted to accommodate the footer */
            text-align: center;
        }
    
        #logout-link {
            color: #fff;
            text-decoration: none;
            margin-left: 20px;
        }
        .header-left, .header-center, .header-right {
            padding: 5px 10px;
        }
        #datePicker {
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 200px;
            box-sizing: border-box;
            font-size: 16px;
        }
     
    </style>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

</head>
<body>
<header>
<div class="header-left">
        <h1>Welcome</h1>
    </div>
    <div class="header-center">
    <h2>Nav Upload</h2>
    </div>
    <div class="header-right">

        <a href="logout" id="logout-link">Logout</a>
    </div>
</header>
    <div>

    <div id="uploadFormContainer">
    <h2>Number of times uploaded</h2>
    <table id="myTable">
    <tr>
    <th></th>
    <th></th>
    </tr>
    <tr>

<td></td>
<td></td>
</tr>

</table>
    </div>

      
        
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.3/jspdf.umd.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.1.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.7.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.68/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.68/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.1.2/js/buttons.html5.min.js"></script>

    <script>
        $(document).ready(function() {
    $('#myTable').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'pdfHtml5'
        ]
    });
});   
    </script>
    <footer class="new-footer">
    <p>&copy; 2024 Kotak. All rights reserved.</p>
    <!-- Add any other footer content here -->
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</body>
</html>
