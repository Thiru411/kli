<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSV File Upload</title>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/nav-css.css">
</head>
<body>
<?php  $this->load->view('nav-upload/header');?>
    <div>

    <div id="uploadFormContainer">
    <p id="textfor-file"><p>

    <input type="date" id="datePicker" name="datePicker" min="<?php echo date('Y-m-d'); ?>">
        <label for="fileInput" id="uploadButton">Choose File</label>
        <input type="file" id="fileInput" onchange="displayFileName()" accept=".csv">
        <button class="upload" style='font-size:24px' id="upload" onclick="uploadFile()" disabled>Upload <svg class='fontawesomesvg' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Free 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. --><path d="M288 109.3V352c0 17.7-14.3 32-32 32s-32-14.3-32-32V109.3l-73.4 73.4c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l128-128c12.5-12.5 32.8-12.5 45.3 0l128 128c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L288 109.3zM64 352H192c0 35.3 28.7 64 64 64s64-28.7 64-64H448c35.3 0 64 28.7 64 64v32c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V416c0-35.3 28.7-64 64-64zM432 456c13.3 0 24-10.7 24-24s-10.7-24-24-24s-24 10.7-24 24s10.7 24 24 24z"/></svg>
</button>
<input type="radio" name="dateOption" id="dateOptionYes" value="yes" onchange="checkPreviousDayData()"> Enable Previous Date

    </div>

        <p id="filePath"></p> <!-- Element to display file path -->
        <div class="loader"></div>
    
    <div class="navWrapDetails" id="latest_NAV_div">
        
    </div>
    </div>
    <script src="<?php echo base_url()?>assets/js/nav-js.js"></script>

    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js" > </script>
    <?php  $this->load->view('nav-upload/footer');?>

</body>
</html>
