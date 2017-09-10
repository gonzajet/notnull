<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_aaa33a75cf7a0988a5bf811895e3e5ef98796ae4f1bbec179c245af3c83f74b3 extends Twig_Template
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
        $__internal_129ca01f4ff347da7b70ef27171ccf0c2242ea2015bcee67b0421311f4b2b14d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_129ca01f4ff347da7b70ef27171ccf0c2242ea2015bcee67b0421311f4b2b14d->enter($__internal_129ca01f4ff347da7b70ef27171ccf0c2242ea2015bcee67b0421311f4b2b14d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_24d382b473de4f481c906c2611b59e1f0b7bfcdb2b133d01691f07e1881a8cb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24d382b473de4f481c906c2611b59e1f0b7bfcdb2b133d01691f07e1881a8cb7->enter($__internal_24d382b473de4f481c906c2611b59e1f0b7bfcdb2b133d01691f07e1881a8cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_129ca01f4ff347da7b70ef27171ccf0c2242ea2015bcee67b0421311f4b2b14d->leave($__internal_129ca01f4ff347da7b70ef27171ccf0c2242ea2015bcee67b0421311f4b2b14d_prof);

        
        $__internal_24d382b473de4f481c906c2611b59e1f0b7bfcdb2b133d01691f07e1881a8cb7->leave($__internal_24d382b473de4f481c906c2611b59e1f0b7bfcdb2b133d01691f07e1881a8cb7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
