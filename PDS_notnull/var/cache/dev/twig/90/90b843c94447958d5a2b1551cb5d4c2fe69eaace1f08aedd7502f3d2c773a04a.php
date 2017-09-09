<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_2a84195f80aa6238e7cf8df97bc1765a89e796fd7a9b56905858e4c316871b2b extends Twig_Template
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
        $__internal_a686b15c17e129088da59438887912fe1cb4a1adcce6202dc3d12711f86c3b02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a686b15c17e129088da59438887912fe1cb4a1adcce6202dc3d12711f86c3b02->enter($__internal_a686b15c17e129088da59438887912fe1cb4a1adcce6202dc3d12711f86c3b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_e82d6f4405cc45782aec7be0b9b328d36c6332147618f3d938b9bcfc57b8268c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e82d6f4405cc45782aec7be0b9b328d36c6332147618f3d938b9bcfc57b8268c->enter($__internal_e82d6f4405cc45782aec7be0b9b328d36c6332147618f3d938b9bcfc57b8268c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_a686b15c17e129088da59438887912fe1cb4a1adcce6202dc3d12711f86c3b02->leave($__internal_a686b15c17e129088da59438887912fe1cb4a1adcce6202dc3d12711f86c3b02_prof);

        
        $__internal_e82d6f4405cc45782aec7be0b9b328d36c6332147618f3d938b9bcfc57b8268c->leave($__internal_e82d6f4405cc45782aec7be0b9b328d36c6332147618f3d938b9bcfc57b8268c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.rdf.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
