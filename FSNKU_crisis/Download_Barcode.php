<?php
    //Includes
    include("includes/header.php");

    include("includes/db.php");

    include("includes/functions_personals.php");

    include("includes/rows_info.php");


    //Get the Asin From
    $query = "SELECT $pdf_usa FROM $table WHERE FSNKU_USA = 'X000Q79PLX'";
    $result = mysqli_query($connection, $query);
    $result_db = mysqli_fetch_array($result);

    $file = "D:\\xampp\\htdocs\\xampp\\Backend-repository\\AGPFVEN\\FSNKU_crisis\\wetransfer-686ade\\Archivo comprimido\\OS1 USA\\X000KI1JEJ_result_db.pdf";
    $gestor = fopen($file, "w+");
    fwrite($gestor, (base64_decode($result_db["Barcode_USA"])));
    fclose($gestor);

    // header("Content-type: application/pdf");
    // // header('Content-Disposition: inline; filename="' . $file . '"');
    // header('Content-Transfer-Encoding: binary');
    // header('Accept-Ranges: bytes');
    // readfile($file);

    print("KK");
?>