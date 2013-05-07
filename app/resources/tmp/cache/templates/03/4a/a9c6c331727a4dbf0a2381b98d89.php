<?php

/* add.html.twig */
class __TwigTemplate_034aa9c6c331727a4dbf0a2381b98d89 extends \sagalaya\extensions\template\view\adapter\Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        $context["message"] = $this->getAttribute($this->getAttribute($_this_, "session"), "message", array(), "method");
        // line 2
        echo "<div class=\"span4\">
    ";
        // line 3
        if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
        if ($_message_) {
            // line 4
            echo "        <div class=\"alert\">";
            if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
            echo $_message_;
            echo "</div>
    ";
        }
        // line 6
        echo "    ";
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "form"), "create", array(0 => null, 1 => array("class" => "form-horizontal")), "method");
        echo "

    <legend>Login</legend>
    <div class=\"control-group\">
        ";
        // line 10
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "form"), "field", array(0 => "email"), "method");
        echo "
    </div>
    <div class=\"control-group\">
        ";
        // line 13
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "form"), "field", array(0 => "password", 1 => array("type" => "password")), "method");
        echo "
    </div>
    <div class=\"control-group\">
        ";
        // line 16
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "form"), "submit", array(0 => "Login", 1 => array("class" => "btn")), "method");
        echo "
    </div>

    ";
        // line 19
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "form"), "end", array(), "method");
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 19,  46 => 16,  39 => 13,  32 => 10,  23 => 6,  16 => 4,  13 => 3,  10 => 2,  7 => 1,);
    }
}
