<?php

/**
 * Debugging class used by the PhrameWork arch for various things
 */

namespace PhrameWork;

class Debug {

    /**
     * Used by the command debug_route to show the route selected
     *
     * @param  object $pw The PhrameWork\Application object
     *
     * @return void
     */
    public function route($pw) {

        ?>
        <!doctype html>
        <html>
            <head>
                <title>PhrameWork Debug - Path Info</title>
            </head>
            <body>
                <pre><?php print_r($pw->path); ?></pre>
            </body>
        </html>
        <?php
        exit();
    }

}

?>
