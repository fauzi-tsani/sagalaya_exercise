<?php

/* default.html.twig */
class __TwigTemplate_9bdec57567e6af7647cd73bfcf5f86cb extends \sagalaya\extensions\template\view\adapter\Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html
    <head>
        ";
        // line 4
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "html"), "charset", array(), "method");
        echo "
        ";
        // line 5
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "html"), "script", array(0 => array(0 => "jquery/jquery-1.7.1.min", 1 => "bootstrap/bootstrap.min")), "method");
        echo "
        ";
        // line 6
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "html"), "style", array(0 => array(0 => "layout", 1 => "custom")), "method");
        echo "
        ";
        // line 7
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($_this_, "scripts", array(), "method");
        echo "
        <title>Sagalaya</title>
        <link rel=\"icon\" type=\"image/png\" href=\"/favicon.png\" />
        <style type=\"text/css\">
\t      body {
\t        padding-top: 60px;
\t        padding-bottom: 40px;
\t      }
\t\t</style>
    </head>
    <body>    \t
\t\t";
        // line 18
        $this->env->loadTemplate("/elements/navigation.html.twig")->display($context);
        // line 19
        echo "\t\t<div class=\"container\">\t\t\t
\t\t\t";
        // line 20
        $this->env->loadTemplate("/elements/header.html.twig")->display($context);
        echo "\t\t\t
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 22
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($_this_, "content", array(), "method");
        echo "
\t\t\t</div>
\t\t\t";
        // line 24
        $this->env->loadTemplate("/elements/footer.html.twig")->display($context);
        echo "\t\t\t
\t\t</div>     \t
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 24,  47 => 20,  44 => 19,  42 => 18,  27 => 7,  22 => 6,  17 => 5,  12 => 4,  52 => 22,  36 => 17,  31 => 16,  16 => 5,  13 => 4,  10 => 2,  7 => 1,);
    }
}
