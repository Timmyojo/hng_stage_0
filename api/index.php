<?php

header("content-type: application/json; charset=UTF-8");

date_default_timezone_set("Africa/Lagos");

if ($_SERVER['REQUEST_METHOD'] === "GET") {
    echo json_encode([
            "email" => "ojobabatundetimothy@gmail.com",
            "current_datetime" => date('Y-m-d\TH:i:s.u\Z'),
            "github_url" => "https://github.com/Timmyojo/hng_stage_0"
        ]); 
} else {
    http_response_code(405);
    header("ALLOW: GET");
}
die();