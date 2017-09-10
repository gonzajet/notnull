<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_54550814b0f76ae8ebe05a89b8704e21a062f4995d945a0979ef7d4c652fbb77 extends Twig_Template
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
        $__internal_f9a3e756db0d630d5a5596e2f6941dc6af35433bc7bef709d2293b48b0f22fae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9a3e756db0d630d5a5596e2f6941dc6af35433bc7bef709d2293b48b0f22fae->enter($__internal_f9a3e756db0d630d5a5596e2f6941dc6af35433bc7bef709d2293b48b0f22fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_09e4d3fb8798e82523da09c8e7917f698a52feb8b6b1310dcb9a2d38bc10b01b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09e4d3fb8798e82523da09c8e7917f698a52feb8b6b1310dcb9a2d38bc10b01b->enter($__internal_09e4d3fb8798e82523da09c8e7917f698a52feb8b6b1310dcb9a2d38bc10b01b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_f9a3e756db0d630d5a5596e2f6941dc6af35433bc7bef709d2293b48b0f22fae->leave($__internal_f9a3e756db0d630d5a5596e2f6941dc6af35433bc7bef709d2293b48b0f22fae_prof);

        
        $__internal_09e4d3fb8798e82523da09c8e7917f698a52feb8b6b1310dcb9a2d38bc10b01b->leave($__internal_09e4d3fb8798e82523da09c8e7917f698a52feb8b6b1310dcb9a2d38bc10b01b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
