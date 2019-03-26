<?php

class DOMExtract extends DOMDocument
{
    private $source;
    private $document;

    public function __construct()
    {
        libxml_use_internal_errors(true);
        $this->preserveWhiteSpace = false;
        $this->strictErrorChecking = false;
        $this->formatOutput = true;
    }

    public function setSource($source)
    {
        $this->source = file_get_contents($source);
        return $this;
    }

    public function getInnerHTML($tag, $id=null, $nodeValue = false)
    {
        if (empty($this->source)) {
            throw new Exception('Error: Missing $this->source, use setSource() first');
        }

        $html = null;
        $this->loadHTML($this->source);
        $element = $this->getElementsByTagName($tag);

        foreach ($element as $tags) {
            if ($id !== null) {
                $attr = explode('=', $id);
                if ($tags->getAttribute($attr[0]) == $attr[1]) {
                    if ($nodeValue == true) {
                        $html .= trim($tags->nodeValue);
                    } else {
                        $html .= $this->innerHTML($tags);
                    }
                }
            } else {
                if ($nodeValue == true) {
                    $html .= trim($tags->nodeValue);
                } else {
                    $html .= $this->innerHTML($tags);
                }
            }
        }
        return $html;
    }

    protected function innerHTML($document)
    {
        $html = "";
        foreach ($document->childNodes as $v) {
            $tmp = new DOMDocument();
            $tmp->appendChild($tmp->importNode($v, true));
            $html .= trim($tmp->saveHTML());
        }
        return $html;
    }

}
