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
        $__internal_fe803aaaafe4c70c510fd6d4caa4d6a8e99f97b0116fcf134a1ab3f7032e4bfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe803aaaafe4c70c510fd6d4caa4d6a8e99f97b0116fcf134a1ab3f7032e4bfe->enter($__internal_fe803aaaafe4c70c510fd6d4caa4d6a8e99f97b0116fcf134a1ab3f7032e4bfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_a02f8859d9a3d9f05ee05a17433f453ed137a3986d62f77cbd8c2f3ccb376802 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a02f8859d9a3d9f05ee05a17433f453ed137a3986d62f77cbd8c2f3ccb376802->enter($__internal_a02f8859d9a3d9f05ee05a17433f453ed137a3986d62f77cbd8c2f3ccb376802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_fe803aaaafe4c70c510fd6d4caa4d6a8e99f97b0116fcf134a1ab3f7032e4bfe->leave($__internal_fe803aaaafe4c70c510fd6d4caa4d6a8e99f97b0116fcf134a1ab3f7032e4bfe_prof);

        
        $__internal_a02f8859d9a3d9f05ee05a17433f453ed137a3986d62f77cbd8c2f3ccb376802->leave($__internal_a02f8859d9a3d9f05ee05a17433f453ed137a3986d62f77cbd8c2f3ccb376802_prof);

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
