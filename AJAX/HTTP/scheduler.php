<?php
    require "../../vendor/autoload.php";
    require "../../config.php";
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__, "../../.env");
    $dotenv->load();
    $url = "http://".$_ENV["SERVER_IP"].":".$flaskPort."/get_estimates";
    echo $url;
    $location = $_POST["location"];
    $platform = $_POST["platform"];
    $start_date = $_POST["start_date"];
    $end_date = $_POST["end_date"];
    $data = array("location" => $location, "platform" => $platform, "start_date"=>$start_date, "end_date"=>$end_date);
    $CURL = curl_init();
    curl_setopt($CURL, CURLOPT_URL, $url);
    curl_setopt($CURL, CURLOPT_POST, true);
    curl_setopt($CURL, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($CURL, CURLOPT_CONNECTTIMEOUT, 0);
    curl_setopt($CURL, CURLOPT_TIMEOUT, 0);
    curl_setopt($CURL, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($CURL, CURLOPT_USERAGENT, "Mogle");
    $result = curl_exec($CURL);
    curl_close($CURL);
    echo $result;
?>