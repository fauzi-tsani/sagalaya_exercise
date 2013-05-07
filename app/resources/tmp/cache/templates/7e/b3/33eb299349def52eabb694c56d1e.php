<?php

/* search.html.twig */
class __TwigTemplate_7eb333eb299349def52eabb694c56d1e extends \sagalaya\extensions\template\view\adapter\Template
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
        echo "<form method=\"post\" action=\"/users/search\">
    <fieldset>
        <legend>filter user data</legend>
        <label>email :</label><input type=\"text\" name=\"email\"><br>
        <label>type :</label><select name=\"type\">
            <option value=\"User\">User</option>
            <option value=\"Administrator\">Admin</option>
        </select> <br>
        <div class=\"control-group\">
            <div class=\"controls\">
                <input type=\"submit\" value=\"Find\" class=\"btn btn-primary\">
            </div>
        </div>
    </fieldset>
</form>
<ul>
    ";
        // line 26
        if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_filter_);
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 27
            echo "        <li>";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo $this->getAttribute($_user_, "email");
            echo " || ";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo $this->getAttribute($this->getAttribute($_user_, "profile"), "phone");
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 29
        echo "</ul>

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
        return "search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 3,  73 => 2,  62 => 1,  56 => 29,  43 => 27,  38 => 26,  20 => 10,  13 => 8,  10 => 7,  7 => 6,);
    }
}
