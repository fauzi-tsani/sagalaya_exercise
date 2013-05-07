<?php

/* add.html.twig */
class __TwigTemplate_d6e6192200e46e7f9cbaf3d19f3792b0 extends \sagalaya\extensions\template\view\adapter\Template
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
\t";
        // line 8
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        if (isset($context["wawaw"])) { $_wawaw_ = $context["wawaw"]; } else { $_wawaw_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "form"), "hidden", array(0 => "user", 1 => array("value" => $_wawaw_)), "method");
        echo "\t
\t";
        // line 9
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "form"), "field", array(0 => "title", 1 => array("value" => $this->getAttribute($_post_, "title"))), "method");
        echo "
\t";
        // line 10
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        echo $this->getAttribute($this, "errors", array(0 => $this->getAttribute($_errors_, "title")), "method");
        echo "
\t<label>Content</label>
\t";
        // line 12
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "form"), "text", array(0 => "content", 1 => array("value" => $this->getAttribute($_post_, "content"))), "method");
        echo "
\t";
        // line 13
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        echo $this->getAttribute($this, "errors", array(0 => $this->getAttribute($_errors_, "title")), "method");
        echo "

    ";
        // line 15
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "form"), "submit", array(0 => "Create", 1 => array("class" => "btn-submit")), "method");
        echo "
";
        // line 16
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
        return array (  74 => 3,  68 => 2,  57 => 1,  50 => 16,  45 => 15,  39 => 13,  33 => 12,  27 => 10,  21 => 9,  15 => 8,  10 => 7,  7 => 6,);
    }
}
