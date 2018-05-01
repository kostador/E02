<?php
// put file requests here (load, upload, delete)
switch ($_SERVER['REQUEST_METHOD']) {
    case "GET":
        // put database query here
        $result = ["1" => "file1", "2" => "file2"];
        echo json_encode($result);
        break;
    case "POST":
        // save file and put it in the database
        header('Location: ' . $_SERVER["HTTP_REFERER"]);
        break;
}