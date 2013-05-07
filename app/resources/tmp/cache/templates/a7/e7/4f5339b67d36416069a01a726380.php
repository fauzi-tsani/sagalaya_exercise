<?php

/* 404.html.twig */
class __TwigTemplate_a7e74f5339b67d36416069a01a726380 extends \sagalaya\extensions\template\view\adapter\Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        $context["title"] = $this->getAttribute($_this_, "title", array(0 => "Your page is not found"), "method");
        // line 2
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "html"), "style", array(0 => array(0 => "lithium")), "method");
        echo "

<h1>Hmmm....i'm tired to explain many times</h1>
<div class=\"center\">
<span>This is not error, this is just...........<strong>404</strong></span>
<br />
<span>
\tI don't know why are you trying to access
\t<strong>";
        // line 10
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "request"), "url");
        echo "</strong> page, 
\tdo you know that <strong>";
        // line 11
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "request"), "url");
        echo "</strong> page is not exists?
</span>

</div> ";
    }

    public function getTemplateName()
    {
        return "404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 11,  22 => 10,  10 => 2,  7 => 1,);
    }
}
