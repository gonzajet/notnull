<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_b8d91127ca5cacceace409ae46b0e14839464fb54360df982c438f07f9a6a455 extends Twig_Template
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
        $__internal_301aeaa587abadd0cc684e3378745218472c820037d906dc680a840b0df751ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_301aeaa587abadd0cc684e3378745218472c820037d906dc680a840b0df751ac->enter($__internal_301aeaa587abadd0cc684e3378745218472c820037d906dc680a840b0df751ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_1c4f041d7b13569e7cce105bd1eb1b2bcd3c8f858b3d8d61f5e8282a2d3cb869 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c4f041d7b13569e7cce105bd1eb1b2bcd3c8f858b3d8d61f5e8282a2d3cb869->enter($__internal_1c4f041d7b13569e7cce105bd1eb1b2bcd3c8f858b3d8d61f5e8282a2d3cb869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            echo "<pre class=\"stacktrace\">
";
            // line 3
            echo $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "class", array());
            echo ":
";
            // line 4
            if ( !twig_test_empty($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()))) {
                // line 5
                echo $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array());
                echo "
";
            }
            // line 7
            echo "
";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 9
                echo "  ";
                echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "</pre>
";
        }
        
        $__internal_301aeaa587abadd0cc684e3378745218472c820037d906dc680a840b0df751ac->leave($__internal_301aeaa587abadd0cc684e3378745218472c820037d906dc680a840b0df751ac_prof);

        
        $__internal_1c4f041d7b13569e7cce105bd1eb1b2bcd3c8f858b3d8d61f5e8282a2d3cb869->leave($__internal_1c4f041d7b13569e7cce105bd1eb1b2bcd3c8f858b3d8d61f5e8282a2d3cb869_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 11,  48 => 9,  44 => 8,  41 => 7,  36 => 5,  34 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
<pre class=\"stacktrace\">
{{ exception.class }}:
{% if exception.message is not empty %}
    {{- exception.message }}
{% endif %}

{% for trace in exception.trace %}
  {{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}
{% endfor %}
</pre>
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/home/gonzalo/notnull/PDS_notnull/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
