<?php

require "./PhrameWork/PhrameWork.php";

$pw = PhrameWork\PhrameWork::init(array(

    "content_type" => "text/html", // already default, but here for example
    "charset"      => "utf-8", // already default, but here for example

    "app_dir"      => "./app",

    "paranoid"     => true,

    "routes" => array(

        array(
            "match"      => "/labs/PhrameWork/",
            "controller" => "Controller_FrontPage"
        ),

    )

));

$pw->run();

?>
