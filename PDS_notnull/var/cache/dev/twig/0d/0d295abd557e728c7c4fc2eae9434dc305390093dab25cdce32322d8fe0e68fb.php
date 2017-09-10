<?php

/* @WebProfiler/Profiler/table.html.twig */
class __TwigTemplate_b8f4ea3306cd6c7c484263b04f557fc25d6fae4ad7bb61c454d76e2f4249a033 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_313270f862290c89a9c06d0988b7bbfe0b98e792d8a64624e4f247be052e45cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_313270f862290c89a9c06d0988b7bbfe0b98e792d8a64624e4f247be052e45cf->enter($__internal_313270f862290c89a9c06d0988b7bbfe0b98e792d8a64624e4f247be052e45cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/table.html.twig"));

        $__internal_a16d1bb4689813acca261f796da9013395fe6bb394086dae8d84599c2ddf9175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a16d1bb4689813acca261f796da9013395fe6bb394086dae8d84599c2ddf9175->enter($__internal_a16d1bb4689813acca261f796da9013395fe6bb394086dae8d84599c2ddf9175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/table.html.twig"));

        // line 1
        echo "<table class=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter(($context["class"] ?? $this->getContext($context, "class")), "")) : ("")), "html", null, true);
        echo "\">
    <thead>
        <tr>
            <th scope=\"col\" class=\"key\">";
        // line 4
        echo twig_escape_filter($this->env, ((array_key_exists("labels", $context)) ? ($this->getAttribute(($context["labels"] ?? $this->getContext($context, "labels")), 0, array(), "array")) : ("Key")), "html", null, true);
        echo "</th>
            <th scope=\"col\">";
        // line 5
        echo twig_escape_filter($this->env, ((array_key_exists("labels", $context)) ? ($this->getAttribute(($context["labels"] ?? $this->getContext($context, "labels")), 1, array(), "array")) : ("Value")), "html", null, true);
        echo "</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter(($context["data"] ?? $this->getContext($context, "data")))));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 10
            echo "            <tr>
                <th scope=\"row\">";
            // line 11
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</th>
                <td>";
            // line 12
            echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), $context["key"], array(), "array")));
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </tbody>
</table>
";
        
        $__internal_313270f862290c89a9c06d0988b7bbfe0b98e792d8a64624e4f247be052e45cf->leave($__internal_313270f862290c89a9c06d0988b7bbfe0b98e792d8a64624e4f247be052e45cf_prof);

        
        $__internal_a16d1bb4689813acca261f796da9013395fe6bb394086dae8d84599c2ddf9175->leave($__internal_a16d1bb4689813acca261f796da9013395fe6bb394086dae8d84599c2ddf9175_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 15,  54 => 12,  50 => 11,  47 => 10,  43 => 9,  36 => 5,  32 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table class=\"{{ class|default('') }}\">
    <thead>
        <tr>
            <th scope=\"col\" class=\"key\">{{ labels is defined ? labels[0] : 'Key' }}</th>
            <th scope=\"col\">{{ labels is defined ? labels[1] : 'Value' }}</th>
        </tr>
    </thead>
    <tbody>
        {% for key in data|keys|sort %}
            <tr>
                <th scope=\"row\">{{ key }}</th>
                <td>{{ profiler_dump(data[key]) }}</td>
            </tr>
        {% endfor %}
    </tbody>
</table>
", "@WebProfiler/Profiler/table.html.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\table.html.twig");
    }
}
