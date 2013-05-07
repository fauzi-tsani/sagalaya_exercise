<?php

/* index.html.twig */
class __TwigTemplate_c93b5bf50fe1480b825a26b36a97e673 extends \sagalaya\extensions\template\view\adapter\Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Lithium is less dense than ";
        if (isset($context["foo"])) { $_foo_ = $context["foo"]; } else { $_foo_ = null; }
        echo $_foo_;
        echo "ium.

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
        echo "
";
        // line 7
        if (isset($context["posts"])) { $_posts_ = $context["posts"]; } else { $_posts_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_posts_);
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 8
            echo "<article>
    <h1>";
            // line 9
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo $this->getAttribute($_post_, "title");
            echo "</h1>
    <p>";
            // line 10
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo $this->getAttribute($_post_, "content");
            echo "</p>
</article>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
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
        return array (  40 => 10,  35 => 9,  32 => 8,  27 => 7,  24 => 6,  17 => 4,  14 => 3,  7 => 1,);
    }
}
