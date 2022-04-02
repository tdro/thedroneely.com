<?php

class DOMExtract extends DOMDocument
{
    private $document;

    public function __construct()
    {
        libxml_use_internal_errors(true);
        $this->preserveWhiteSpace = false;
        $this->strictErrorChecking = false;
        $this->formatOutput = false;
    }

    public function innerHTML($tag, $file)
    {
        $html = '';
        $this->loadHTML(file_get_contents($file));
        $this->document = $this->getElementsByTagName($tag);

        foreach ($this->document as $node)
        {
            /*
            |  TODO: DOMDocument::saveHTML's empty elements list is not updated.
            |  https://bugs.php.net/bug.php?id=73175
            */

            $html .= $this->saveHTML($node);
        }

        return str_replace("</source>", '', $html);
    }
}
