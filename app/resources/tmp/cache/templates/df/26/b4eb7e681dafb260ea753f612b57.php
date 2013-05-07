<?php

/* edit.html.twig */
class __TwigTemplate_df26b4eb7e681dafb260ea753f612b57 extends \sagalaya\extensions\template\view\adapter\Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "form"), "create", array(), "method");
        echo "
<fieldset>
    <legend>Edit user</legend>

\t\t";
        // line 5
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "form"), "field", array(0 => "fullname", 1 => array("value" => $this->getAttribute($_user_, "fullname"))), "method");
        echo "
\t\t";
        // line 6
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        echo $this->getAttribute($this, "errors", array(0 => $this->getAttribute($_errors_, "fullname")), "method");
        echo "

        ";
        // line 8
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "form"), "field", array(0 => "email", 1 => array("value" => $this->getAttribute($_user_, "email"))), "method");
        echo "
\t\t";
        // line 9
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        echo $this->getAttribute($this, "errors", array(0 => $this->getAttribute($_errors_, "email")), "method");
        echo " 

        ";
        // line 11
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "form"), "field", array(0 => "username", 1 => array("value" => $this->getAttribute($_user_, "username"))), "method");
        echo "
\t\t";
        // line 12
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        echo $this->getAttribute($this, "errors", array(0 => $this->getAttribute($_errors_, "username")), "method");
        echo "

\t\t<label for=\"Password\">Password</label>
        ";
        // line 15
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "form"), "password", array(0 => "password", 1 => array("value" => "", "type" => "password")), "method");
        echo "
        ";
        // line 16
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        echo $this->getAttribute($this, "errors", array(0 => $this->getAttribute($_errors_, "password")), "method");
        echo "
    <div class=\"control-group\">
        <div class=\"controls\">
            ";
        // line 19
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "form"), "submit", array(0 => "Edit", 1 => array("class" => "btn btn-primary")), "method");
        echo "
        </div>
    </div>
</fieldset>
";
        // line 23
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "form"), "end", array(), "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 23,  64 => 19,  57 => 16,  52 => 15,  45 => 12,  39 => 11,  33 => 9,  27 => 8,  21 => 6,  15 => 5,  7 => 1,);
    }
}
