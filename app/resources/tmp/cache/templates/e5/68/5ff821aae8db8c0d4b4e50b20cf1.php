<?php

/* create.html.twig */
class __TwigTemplate_e5685ff821aae8db8c0d4b4e50b20cf1 extends \sagalaya\extensions\template\view\adapter\Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 6
        echo "
";
        // line 7
        if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
        if ($_message_) {
            // line 8
            echo "        <div class=\"alert\">";
            if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
            echo $_message_;
            echo "</div>
";
        }
        // line 10
        echo "
";
        // line 11
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "form"), "create", array(), "method");
        echo "
    <fieldset>
        <legend>Create user</legend>

\t\t";
        // line 15
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "form"), "field", array(0 => "profile.fullname", 1 => array("value" => $this->getAttribute($_profile_, "fullname"))), "method");
        echo "
\t\t";
        // line 16
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        echo $this->getAttribute($this, "errors", array(0 => $this->getAttribute($this->getAttribute($_errors_, "profile"), "fullname")), "method");
        echo "

\t\t";
        // line 18
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "form"), "field", array(0 => "profile.address", 1 => array("value" => "")), "method");
        echo "
\t\t";
        // line 19
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "form"), "field", array(0 => "profile.phone", 1 => array("value" => "")), "method");
        echo "

        ";
        // line 21
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "form"), "field", array(0 => "email", 1 => array("value" => $this->getAttribute($_user_, "email"))), "method");
        echo "
\t\t";
        // line 22
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        echo $this->getAttribute($this, "errors", array(0 => $this->getAttribute($_errors_, "email")), "method");
        echo " 

\t\t
<!--
        ";
        // line 26
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "form"), "field", array(0 => "username", 1 => array("value" => $this->getAttribute($_user_, "username"))), "method");
        echo "
\t\t";
        // line 27
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        echo $this->getAttribute($this, "errors", array(0 => $this->getAttribute($_errors_, "username")), "method");
        echo "
-->
\t\t<label for=\"Password\">Password</label>
        ";
        // line 30
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "form"), "password", array(0 => "password", 1 => array("value" => "", "type" => "password")), "method");
        echo "
        ";
        // line 31
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        echo $this->getAttribute($this, "errors", array(0 => $this->getAttribute($_errors_, "password")), "method");
        echo "
        <div class=\"control-group\">
            <div class=\"controls\">
                ";
        // line 34
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "form"), "submit", array(0 => "Create", 1 => array("class" => "btn btn-primary")), "method");
        echo "
            </div>
        </div>
    </fieldset>
";
        // line 38
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "form"), "end", array(), "method");
        echo "

";
    }

    // line 1
    public function geterrors($input = null)
    {
        $context = array_merge($this->env->getGlobals(), array(
            "input" => $input,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "        ";
            if (isset($context["input"])) { $_input_ = $context["input"]; } else { $_input_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_input_);
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 3
                echo "        <div class=\"warning\">";
                if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
                echo $_error_;
                echo "</div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    public function getTemplateName()
    {
        return "create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 3,  120 => 2,  109 => 1,  101 => 38,  93 => 34,  86 => 31,  81 => 30,  74 => 27,  68 => 26,  60 => 22,  54 => 21,  48 => 19,  43 => 18,  37 => 16,  31 => 15,  23 => 11,  20 => 10,  13 => 8,  10 => 7,  7 => 6,);
    }
}
