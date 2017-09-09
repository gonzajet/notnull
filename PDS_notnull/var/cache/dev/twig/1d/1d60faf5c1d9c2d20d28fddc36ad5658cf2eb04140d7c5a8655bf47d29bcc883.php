<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_851b499c1a09de6b5ff59e234923a0fa79f12ce372a047b59f3636edf33bcd85 extends Twig_Template
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
        $__internal_db4000e6d06e9b738a2a04ed0a9f4d1f3eb63f0c048946d6538753527535c48c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db4000e6d06e9b738a2a04ed0a9f4d1f3eb63f0c048946d6538753527535c48c->enter($__internal_db4000e6d06e9b738a2a04ed0a9f4d1f3eb63f0c048946d6538753527535c48c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_ac593a09206506a6123597d76407b9c764054a48e43ca0713414e01cad4703e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac593a09206506a6123597d76407b9c764054a48e43ca0713414e01cad4703e1->enter($__internal_ac593a09206506a6123597d76407b9c764054a48e43ca0713414e01cad4703e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_db4000e6d06e9b738a2a04ed0a9f4d1f3eb63f0c048946d6538753527535c48c->leave($__internal_db4000e6d06e9b738a2a04ed0a9f4d1f3eb63f0c048946d6538753527535c48c_prof);

        
        $__internal_ac593a09206506a6123597d76407b9c764054a48e43ca0713414e01cad4703e1->leave($__internal_ac593a09206506a6123597d76407b9c764054a48e43ca0713414e01cad4703e1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
