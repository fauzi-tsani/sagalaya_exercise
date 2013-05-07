<?php

/* development.html.twig */
class __TwigTemplate_925ae8cf6c86a17093215d3430e9bcc8 extends \sagalaya\extensions\template\view\adapter\Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        $context["exception"] = $this->getAttribute($_info_, "exception");
        // line 2
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        $context["title"] = $this->getAttribute($_this_, "title", array(0 => "Unhandled Exception"), "method");
        // line 3
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "html"), "script", array(0 => array(0 => "syntax/shCore", 1 => "syntax/shLegacy", 2 => "syntax/shAutoloader", 3 => "syntax/shBrushPhp")), "method");
        echo "
";
        // line 4
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "html"), "style", array(0 => array(0 => "debug", 1 => "lithium", 2 => "syntax/shCore", 3 => "syntax/shThemeDefault")), "method");
        echo "
   
<div id=\"header\">
\t<h1>An unhandled exception was thrown</h1>
</div>

<div id=\"content\">
\t<h3>Exception</h3>
\t
\t<div class=\"lithium-exception-class\">
\t    ";
        // line 14
        if (isset($context["exception_class"])) { $_exception_class_ = $context["exception_class"]; } else { $_exception_class_ = null; }
        echo $_exception_class_;
        echo "
\t    ";
        // line 15
        if (isset($context["exception"])) { $_exception_ = $context["exception"]; } else { $_exception_ = null; }
        if ($this->getAttribute($_exception_, "getCode", array(), "method")) {
            echo "    \t
\t        <span class=\"code\">(code ";
            // line 16
            if (isset($context["exception"])) { $_exception_ = $context["exception"]; } else { $_exception_ = null; }
            echo $this->getAttribute($_exception_, "getCode", array(), "method");
            echo ")</span>
\t    ";
        }
        // line 18
        echo "\t    </div>
\t
\t    <div class=\"lithium-exception-message\">";
        // line 20
        if (isset($context["exception"])) { $_exception_ = $context["exception"]; } else { $_exception_ = null; }
        echo $this->getAttribute($_exception_, "getMessage", array(), "method");
        echo "</div>
\t
\t    <h3 id=\"source\">Source</h3>
\t
\t    <div id=\"sourceCode\"></div>
\t
\t<h3>Stack Trace</h3>
\t
\t<div class=\"lithium-stack-trace\">
\t    <ol>
\t    ";
        // line 30
        if (isset($context["stack"])) { $_stack_ = $context["stack"]; } else { $_stack_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_stack_);
        foreach ($context['_seq'] as $context["id"] => $context["frame"]) {
            echo "    \t    \t
\t        <li>
\t\t        <tt>
\t\t        \t<a href=\"#source\" id=\"";
            // line 33
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo $_id_;
            echo "\" class=\"display-source-excerpt\">
\t\t        \t\t";
            // line 34
            if (isset($context["frame"])) { $_frame_ = $context["frame"]; } else { $_frame_ = null; }
            echo $this->getAttribute($_frame_, "functionRef");
            echo "
\t\t        \t</a>
\t\t        </tt>
\t\t\t\t<div id=\"sourceCode";
            // line 37
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo $_id_;
            echo "\" style=\"display:none;\">
\t\t\t\t\t<div class=\"lithium-exception-location\">
\t\t\t\t\t\t\t";
            // line 39
            if (isset($context["frame"])) { $_frame_ = $context["frame"]; } else { $_frame_ = null; }
            echo $this->getAttribute($_frame_, "file");
            echo " : ";
            if (isset($context["frame"])) { $_frame_ = $context["frame"]; } else { $_frame_ = null; }
            echo $this->getAttribute($_frame_, "line");
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"lithium-code-dump\">
\t\t\t\t\t\t<pre class=\"brush: php\">\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            // line 43
            if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
            if (isset($context["frame"])) { $_frame_ = $context["frame"]; } else { $_frame_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_this_, "sourceCode"), "lines", array(0 => $this->getAttribute($_frame_, "file"), 1 => ($this->getAttribute($_frame_, "line") - 7), 2 => ($this->getAttribute($_frame_, "line") + 7)), "method"));
            foreach ($context['_seq'] as $context["num"] => $context["content"]) {
                // line 44
                echo "\t";
                if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
                if (isset($context["num"])) { $_num_ = $context["num"]; } else { $_num_ = null; }
                if ((($_content_ != "") && ($_num_ != ""))) {
                    // line 45
                    echo "\t\t";
                    if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
                    echo $_content_;
                    echo "
\t";
                }
                // line 47
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['num'], $context['content'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t</pre>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t        </li>
\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['frame'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 53
        echo "\t    </ol>
\t</div>
</div>
<script type=\"text/javascript\">
\tSyntaxHighlighter.all();
    window.onload = function() {    \t
        var \$ = function() { return document.getElementById.apply(document, arguments); };
        var links = document.getElementsByTagName('a');

        for (i = 0; i < links.length; i++) {
            if (links[i].className.indexOf('display-source-excerpt') >= 0) {
                links[i].onclick = function() {
                    \$('sourceCode').innerHTML = \$('sourceCode' + this.id).innerHTML;
                }
            }
        }
        \$('sourceCode').innerHTML = \$('sourceCode0').innerHTML;
    }
</script>";
    }

    public function getTemplateName()
    {
        return "development.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 53,  122 => 47,  115 => 45,  110 => 44,  104 => 43,  93 => 39,  87 => 37,  80 => 34,  75 => 33,  66 => 30,  52 => 20,  48 => 18,  42 => 16,  37 => 15,  32 => 14,  18 => 4,  13 => 3,  10 => 2,  7 => 1,);
    }
}
