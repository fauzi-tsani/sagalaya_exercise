<?php

/* add.html.twig */
class __TwigTemplate_b6b2ee7656e12d5690b35d1da6ab7086 extends \sagalaya\extensions\template\view\adapter\Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 6
        echo " 
";
        // line 7
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "form"), "create", array(), "method");
        echo "

        ";
        // line 9
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "form"), "field", array(0 => "fullname", 1 => array("value" => $this->getAttribute($_user_, "fullname"))), "method");
        echo "
\t\t";
        // line 10
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        echo $this->getAttribute($this, "errors", array(0 => $this->getAttribute($_errors_, "fullname")), "method");
        echo "

        ";
        // line 12
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "form"), "field", array(0 => "email", 1 => array("value" => $this->getAttribute($_user_, "email"))), "method");
        echo "
\t\t";
        // line 13
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        echo $this->getAttribute($this, "errors", array(0 => $this->getAttribute($_errors_, "email")), "method");
        echo " 

        ";
        // line 15
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "form"), "field", array(0 => "username", 1 => array("value" => $this->getAttribute($_user_, "username"))), "method");
        echo "
\t\t";
        // line 16
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        echo $this->getAttribute($this, "errors", array(0 => $this->getAttribute($_errors_, "username")), "method");
        echo "

\t\t<label for=\"Password\">Password</label>
        ";
        // line 19
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "form"), "password", array(0 => "password", 1 => array("value" => "", "type" => "password")), "method");
        echo "
        ";
        // line 20
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        echo $this->getAttribute($this, "errors", array(0 => $this->getAttribute($_errors_, "password")), "method");
        echo "
<!--
\t\t<label for=\"Password\">Retype Password</label>       
\t\t";
        // line 23
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "form"), "password", array(0 => "retypePassword", 1 => array("value" => "", "type" => "repassword")), "method");
        echo "
        ";
        // line 24
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        echo $this->getAttribute($this, "errors", array(0 => $this->getAttribute($_errors_, "repassword")), "method");
        echo "
-->         
        ";
        // line 26
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "form"), "submit", array(0 => "Create", 1 => array("class" => "btn-submit")), "method");
        echo "
 
";
        // line 28
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
        return "add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 3,  100 => 2,  89 => 1,  82 => 28,  76 => 26,  70 => 24,  65 => 23,  58 => 20,  53 => 19,  46 => 16,  40 => 15,  34 => 13,  28 => 12,  22 => 10,  16 => 9,  10 => 7,  7 => 6,);
    }
}
