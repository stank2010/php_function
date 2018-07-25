<?php
    $singleton = array("area", "base", "br", "col", "command", "embed", "hr", "img", "input", "keygen", "link", "meta", "param", "source", "track", "wbr");
    $tags = array("a", "abbr", "address", "article", "aside", "audio", "b", "bdi", "bdo", "blockquote", "body", "button", "canvas", "caption", "cite", "code", "colgroup", "data", "datalist", "dd", "del", "details", "dfn", "dialog", "div", "dl", "dt", "em", "fieldset", "figcaption", "figure", "footer", "form", "h1", "h2", "h3", "h4", "h5", "h6", "head", "header", "html", "i", "iframe", "ins", "kbd", "label", "legend", "li", "main", "map", "mark", "meter", "nav", "noscript", "object", "ol", "optgroup", "option", "output", "p", "picture", "pre", "progress", "q", "rp", "rt", "ruby", "s", "samp", "script", "section", "select", "small", "span", "strong", "style", "sub", "summary", "sup", "svg", "table", "tbody", "td", "template", "textarea", "tfoot", "th", "thead", "time", "title", "tr", "u", "ul", "var", "video");

    function t_init($singleton, $tags){
        foreach($singleton as $tag) t_start($tag);
        foreach($tags as $tag){
            t_start($tag);
            t_stop($tag);
        }
    }

    function t_start($tag){
        eval('function h_'.$tag.'($param = null){ echo "<'.$tag.'"; if($param != null) echo " ".$param; echo ">"; }');
    }
    function t_stop($tag){
        eval('function h_'.$tag.'_end(){ echo "</'.$tag.'>"; }');
    }
    function h_print($context){
        echo $context;
    }

    t_init($singleton, $tags);
?>
