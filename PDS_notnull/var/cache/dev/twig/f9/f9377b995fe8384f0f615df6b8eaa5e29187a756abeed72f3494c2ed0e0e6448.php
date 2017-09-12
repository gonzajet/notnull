<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_a578328802c4b404def3be14a096784cbfc79376723443982e53544f6003a9cc extends Twig_Template
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
        $__internal_fdafe6ac6031b4a83caa61d564b49e25c7e46e640ce43689fc63b888910858f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdafe6ac6031b4a83caa61d564b49e25c7e46e640ce43689fc63b888910858f8->enter($__internal_fdafe6ac6031b4a83caa61d564b49e25c7e46e640ce43689fc63b888910858f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_a90b94884b86c6bde1b12b5fab8caf45a80abdfc1c8ee9fc6fe33abc65907c36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a90b94884b86c6bde1b12b5fab8caf45a80abdfc1c8ee9fc6fe33abc65907c36->enter($__internal_a90b94884b86c6bde1b12b5fab8caf45a80abdfc1c8ee9fc6fe33abc65907c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_fdafe6ac6031b4a83caa61d564b49e25c7e46e640ce43689fc63b888910858f8->leave($__internal_fdafe6ac6031b4a83caa61d564b49e25c7e46e640ce43689fc63b888910858f8_prof);

        
        $__internal_a90b94884b86c6bde1b12b5fab8caf45a80abdfc1c8ee9fc6fe33abc65907c36->leave($__internal_a90b94884b86c6bde1b12b5fab8caf45a80abdfc1c8ee9fc6fe33abc65907c36_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
