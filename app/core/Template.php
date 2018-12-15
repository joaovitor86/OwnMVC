<?php
class Template {

    /**
    * Holds the HTML from the template file.
    * This also gets manipulated and will contain the
    * replaced data to display after parsing
    *
    * @var String
    **/
    var $html;

    /**
    * Class constructor. Brings in the template file and makes
    * sure that it really exists. If the template file does not exist
    * the page cannot be displayed so we will need to show an
    * error message and die off.
    *
    * @param String $template_file - Path to the HTML template file
    * @return Template
    */
    function __construct($template_file) {
        // Make sure that the template file exists
        if(file_exists($template_file)) {
            // We have a file that we can work with
            $this->html = file_get_contents($template_file);
        } else {
            // AAAAHHHHH TEMPLATE FILE DOES NOT EXISTS!
            // HIT THE PANIC BUTTON!
            die("SITE PANIC: I cannot find the template file! Please contact your site administrator with this error message.");
        }
    }

    /**
    * Run through the stored html and replace any tags
    * found in the html with the associated key in the array.
    *
    * @param Array $tags - Tag and Replacement associative array
    * @return Boolean - False if parsing fails
    **/
    function parse($tags) {
        $ret = FALSE; // Our return is false unless parsing succeeds
        // Check $tags and ensure it is an array
        if(is_array($tags) && count($tags) > 0) {
            /*
            * We have some tags. The easiest way to replace their
            * content in the template is with a loop and string replace.
            */
            foreach($tags as $tag => $data) {
                $this->html = str_replace('{'.$tag.'}', $data, $this->html);
            }
            $ret = TRUE; // We parsed something
        }
        return $ret;
    }

    /**
    * Displays the parsed template.
    * Generally you do not want to print anything inside a class, however
    * here is an exception seeing as the entire purpose of this class is for display.
    *
    * @param $show_now = TRUE - Will show the template now, if false sends back a string.
    * @return Mixed - TRUE or String
    **/
    function display($show_now = TRUE) {
        $ret = TRUE;
        
        if($show_now) {
            echo $this->html;
        } else {
            $ret = $this->html;
        }
        return $ret;
    }

} // End class template