<?php

/* error.html.twig */
class __TwigTemplate_1a385d5a0e21fee5b3282a4816966448 extends \sagalaya\extensions\template\view\adapter\Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html>
<head>
    ";
        // line 4
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "html"), "charset", array(), "method");
        echo "\t
\t<title>";
        // line 5
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($_this_, "title", array(), "method");
        echo "</title>
\t";
        // line 6
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($_this_, "scripts", array(), "method");
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"/favicon.png\" />
</head>
<body class=\"app\">
\t<div id=\"container\">\t\t\t\t
        ";
        // line 11
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($_this_, "content", array(), "method");
        echo "\t\t\t\t\t
\t</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 11,  17 => 5,  12 => 4,  27 => 11,  22 => 6,  10 => 2,  7 => 1,);
    }
}
