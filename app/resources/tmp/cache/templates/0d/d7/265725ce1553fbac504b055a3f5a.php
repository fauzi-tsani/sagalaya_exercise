<?php

/* /elements/navigation.html.twig */
class __TwigTemplate_0dd7265725ce1553fbac504b055a3f5a extends \sagalaya\extensions\template\view\adapter\Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"navbar navbar-fixed-top\">
\t<div class=\"navbar-inner\">
\t\t<div class=\"container\">
\t\t\t<a class=\"btn btn-navbar\" data-toggle=\"collapse\"
\t\t\t\tdata-target=\".nav-collapse\"> <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </a>
          <a class=\"brand\" href=\"#\">Sagalaya</a>
          <div class=\"nav-collapse\">
            <ul class=\"nav\">\t\t\t\t\t\t\t\t            \t
              <li ";
        // line 12
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo ((($this->getAttribute($this->getAttribute($_this_, "request"), "url") == "/")) ? (" class=\"active\"") : (""));
        echo ">";
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "html"), "link", array(0 => "Homepage", 1 => "/"), "method");
        echo "</li>
              <li ";
        // line 13
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo ((($this->getAttribute($this->getAttribute($_this_, "request"), "url") == "pages/tutorial")) ? ("class=\"active\"") : (""));
        echo ">";
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "html"), "link", array(0 => "Tutorial", 1 => array("controller" => "pages", "action" => "tutorial")), "method");
        echo "</li>                       
            </ul>
          </div><!--/.nav-collapse -->
        </div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "/elements/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 13,  20 => 12,  58 => 24,  47 => 20,  44 => 19,  42 => 18,  27 => 7,  22 => 6,  17 => 5,  12 => 4,  52 => 22,  36 => 17,  31 => 16,  16 => 5,  13 => 4,  10 => 2,  7 => 1,);
    }
}
