<?php

/* view.html.twig */
class __TwigTemplate_3343b71a4db16b7e5ff78a7c04fd202a extends \sagalaya\extensions\template\view\adapter\Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"span4\">
    <h3>General Information</h3>
    <table class=\"table table-bordered\">
        <tr>
            <th></th>
            <td></td>
        </tr>
    </table>
</div>
<div class=\"span8\">
    <h3>Detail Information</h3>
    <table class=\"table table-bordered\">
        <thead>
            <tr>
                <th>No</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 19
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_user_);
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["users"]) {
            // line 20
            echo "                <tr>
                    <td>";
            // line 21
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo $this->getAttribute($_loop_, "index");
            echo "</td>
                    <td>";
            // line 22
            if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
            echo $this->getAttribute($_users_, "email");
            echo "</td>
                </tr>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['users'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 25
        echo "        </tbody>
    </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 25,  53 => 22,  48 => 21,  45 => 20,  27 => 19,  7 => 1,);
    }
}
