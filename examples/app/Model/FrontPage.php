<?php

class Model_FrontPage {

    private $pw;

    public function __construct($pw) {
        $this->pw = $pw;
    }

    public function data() {
        $this->pw->add_data("foo", "Hello World!");
    }

}

?>

