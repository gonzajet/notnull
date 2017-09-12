<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_776cd615b8759ed72317ae086378acc489295d2714037f9e3fc9a0e7d4ba460c extends Twig_Template
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
        $__internal_dc8a45eec24cb4923a1144c78790eb107b3effea3ce59eea156401c7013cca14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc8a45eec24cb4923a1144c78790eb107b3effea3ce59eea156401c7013cca14->enter($__internal_dc8a45eec24cb4923a1144c78790eb107b3effea3ce59eea156401c7013cca14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_62c9a2e56e83207fcaf780c8604a834db66fd05866cc25f2df54588b35c3e781 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62c9a2e56e83207fcaf780c8604a834db66fd05866cc25f2df54588b35c3e781->enter($__internal_62c9a2e56e83207fcaf780c8604a834db66fd05866cc25f2df54588b35c3e781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_dc8a45eec24cb4923a1144c78790eb107b3effea3ce59eea156401c7013cca14->leave($__internal_dc8a45eec24cb4923a1144c78790eb107b3effea3ce59eea156401c7013cca14_prof);

        
        $__internal_62c9a2e56e83207fcaf780c8604a834db66fd05866cc25f2df54588b35c3e781->leave($__internal_62c9a2e56e83207fcaf780c8604a834db66fd05866cc25f2df54588b35c3e781_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
