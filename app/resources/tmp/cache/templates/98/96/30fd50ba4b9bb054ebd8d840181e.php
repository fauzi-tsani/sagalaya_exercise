<?php

/* home.html.twig */
class __TwigTemplate_989630fd50ba4b9bb054ebd8d840181e extends \sagalaya\extensions\template\view\adapter\Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "html"), "script", array(0 => array(0 => "syntax/shCore", 1 => "syntax/shLegacy", 2 => "syntax/shAutoloader", 3 => "syntax/shBrushPhp", 4 => "syntax/shBrushBash")), "method");
        // line 4
        echo "
";
        // line 5
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "html"), "style", array(0 => array(0 => "syntax/shCore", 1 => "syntax/shThemeDefault")), "method");
        echo "

<div class=\"span8\">
\t<h2>Getting Started</h2>
\t<ul class=\"additional-resources\">
\t\t<li>
\t\t\tClone this code from <pre class=\"brush: bash\">https://github.com/codebe/sagalaya.git</pre>
\t\t</li>
\t\t<li>
\t\t\tSagalaya is a <strong><i>plugin</i></strong> framework, what do you mean? Sagalaya is not a framework that built from scratch,
\t\t\tactually this is just plugin for lithium, that make lithium like a monolithic framework.
\t\t\tSagalaya combine the goods from ";
        // line 16
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "html"), "link", array(0 => "Doctrine", 1 => "http://www.doctrine-project.org/"), "method");
        echo ", 
\t\t\t";
        // line 17
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "html"), "link", array(0 => "Twig", 1 => "http://twig.sensiolabs.org/"), "method");
        echo ", ";
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "html"), "link", array(0 => "Zend", 1 => "http://framework.zend.com/"), "method");
        echo ", and glued by ";
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "html"), "link", array(0 => "Lithium", 1 => "https://github.com/UnionOfRAD/lithium"), "method");
        echo ". 
\t\t</li>\t
\t\t<li>
\t\t\tWhy Lithium? Lithium is a great framework for flexibility. Has a small footprint and very flexible. 
\t\t\tYou can built a monolithic framework with this (like i do), but Lithium always give a choice for you to make a decission.\t\t\t\t\t
\t\t</li>
\t\t<li>Go to the ";
        // line 23
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "html"), "link", array(0 => "tutorial page", 1 => array("controller" => "pages", "action" => "tutorial")), "method");
        echo " for grasp the basic of sagalaya.</li>
\t</ul>
</div>


";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 23,  36 => 17,  31 => 16,  16 => 5,  13 => 4,  10 => 2,  7 => 1,);
    }
}
