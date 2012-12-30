<?php

class View_FrontPage {

    private $pw;

    public function __construct($pw) {
        $this->pw = $pw;
    }

    public function render($data) {

        $layout = new PhrameWork\Layout();

        $layout->generate(array(

            "elements" => array(
                array(
                    "element" => "Layout_Header"
                ),
                array(
                    "element" => "Layout_FrontPage"
                ),
                array(
                    "element" => "Layout_Header"
                )
            )
        ), $data);

    }

}

?>