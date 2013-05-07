<?php

/* index.html.twig */
class __TwigTemplate_ae368c42d2cbf4d55a2665d44de83d58 extends \sagalaya\extensions\template\view\adapter\Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "    <h2>Users</h2>

   <!-- <ul>
        ";
        // line 4
        if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_users_);
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 5
            echo "            <li>";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo $this->getAttribute($_user_, "email");
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 7
        echo "
    </ul>-->
<br>
\tuser
\t<ul>
        ";
        // line 12
        if (isset($context["usersfilter"])) { $_usersfilter_ = $context["usersfilter"]; } else { $_usersfilter_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_usersfilter_);
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 13
            echo "            <li>";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo $this->getAttribute($_user_, "email");
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo $this->getAttribute($this->getAttribute($_user_, "profile"), "phone");
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 15
        echo "\t</ul>
\tadmin
\t<ul>
        ";
        // line 18
        if (isset($context["usersfilter2"])) { $_usersfilter2_ = $context["usersfilter2"]; } else { $_usersfilter2_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_usersfilter2_);
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 19
            echo "            <li>";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo $this->getAttribute($_user_, "email");
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo $this->getAttribute($this->getAttribute($_user_, "profile"), "phone");
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 21
        echo "\t</ul>
";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 21,  61 => 19,  56 => 18,  51 => 15,  39 => 13,  34 => 12,  27 => 7,  17 => 5,  12 => 4,  7 => 1,);
    }
}
