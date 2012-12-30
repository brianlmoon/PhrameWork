<?php

/**
 * This class can be used by views to generate output
 */

namespace PhrameWork;

class Layout extends PhrameWork {

    /**
     * Generates output by using Layout elements
     *
     * @param  array  $element This array can either contain sub-elements or a
     *                         single element that represents an object that
     *                         generates output.
     * @param  array  $data    This is the data that was passed into the view
     *
     * @return void
     */
    public function generate($element, $data) {

        if(isset($element["element"])){
            $el = new $element["element"];
        } else {
            $el = null;
        }

        if(isset($element["elements"])){

            if($el && method_exists($el, "begin")) {
                $el->begin($data);
            }

            foreach($element["elements"] as $e) {
                $this->generate($e, $data);
            }

            if($el && method_exists($el, "end")) {
                $el->end($data);
            }

        } elseif(method_exists($el, "generate")) {

            $el->generate($data);
        }


    }

    /**
     * Factory function for generating output using the Layout object
     *
     * @param  array  $element This array can either contain sub-elements or a
     *                         single element that represents an object that
     *                         generates output.
     * @param  array  $data    This is the data that was passed into the view
     *
     * @return void
     */
    public static function render($element, $data) {

        $inst = new Layout();
        $inst->generate($element, $data);

    }

}

?>