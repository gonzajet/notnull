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
        $__internal_c833a300584bddbe10e05f47fdb848a5bbfaf808245e83e6f121fe9a3ef10e70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c833a300584bddbe10e05f47fdb848a5bbfaf808245e83e6f121fe9a3ef10e70->enter($__internal_c833a300584bddbe10e05f47fdb848a5bbfaf808245e83e6f121fe9a3ef10e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_8b6d69b8673f747f1024dbc03e24422296c65302885263c62a1d3e8d43faaec2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b6d69b8673f747f1024dbc03e24422296c65302885263c62a1d3e8d43faaec2->enter($__internal_8b6d69b8673f747f1024dbc03e24422296c65302885263c62a1d3e8d43faaec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_c833a300584bddbe10e05f47fdb848a5bbfaf808245e83e6f121fe9a3ef10e70->leave($__internal_c833a300584bddbe10e05f47fdb848a5bbfaf808245e83e6f121fe9a3ef10e70_prof);

        
        $__internal_8b6d69b8673f747f1024dbc03e24422296c65302885263c62a1d3e8d43faaec2->leave($__internal_8b6d69b8673f747f1024dbc03e24422296c65302885263c62a1d3e8d43faaec2_prof);

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
