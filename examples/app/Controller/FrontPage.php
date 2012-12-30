<?php

class Controller_FrontPage {

    public $models = array(
        array("Model_FrontPage", "data"),
    );

    public $views = array(
        array("View_FrontPage", "render"),
    );

    public $inputs = array(
        INPUT_GET => array(
            "sort" => array(
                "filter" => FILTER_VALIDATE_REGEXP,
                "options" => array(
                    "regexp" => '/^time|popularity$/'
                ),
                "default" => "time"
            )
        )
    );

    protected $pw;

    public function __construct($pw) {
        // This is where you might set your models, views, etc.
        // Maybe you set some cookies here as well.
        // You would also want to set the content type and character set
        // for this response in this code
    }

}

?>