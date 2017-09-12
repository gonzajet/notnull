<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_3357ef541e7c4afc5509752d93bfaf5f38a042282524a0669a78a80b3059b0e3 extends Twig_Template
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
        $__internal_a74df63facf56b11602f1bc4b93cdb30c87530a66bcd8e24625faf4fed1807b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a74df63facf56b11602f1bc4b93cdb30c87530a66bcd8e24625faf4fed1807b3->enter($__internal_a74df63facf56b11602f1bc4b93cdb30c87530a66bcd8e24625faf4fed1807b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_ea0ce7dc33decae52650795762cb2359ae1374730e16523dd1e7d488b8aa91e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea0ce7dc33decae52650795762cb2359ae1374730e16523dd1e7d488b8aa91e1->enter($__internal_ea0ce7dc33decae52650795762cb2359ae1374730e16523dd1e7d488b8aa91e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_a74df63facf56b11602f1bc4b93cdb30c87530a66bcd8e24625faf4fed1807b3->leave($__internal_a74df63facf56b11602f1bc4b93cdb30c87530a66bcd8e24625faf4fed1807b3_prof);

        
        $__internal_ea0ce7dc33decae52650795762cb2359ae1374730e16523dd1e7d488b8aa91e1->leave($__internal_ea0ce7dc33decae52650795762cb2359ae1374730e16523dd1e7d488b8aa91e1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
