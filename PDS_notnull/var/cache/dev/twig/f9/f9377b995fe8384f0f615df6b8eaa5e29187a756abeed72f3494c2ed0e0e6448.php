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
        $__internal_288284063eb3bcb66cb97de30e0ce4c88950c36f158f2244ab8e5e5a61864368 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_288284063eb3bcb66cb97de30e0ce4c88950c36f158f2244ab8e5e5a61864368->enter($__internal_288284063eb3bcb66cb97de30e0ce4c88950c36f158f2244ab8e5e5a61864368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_3c736041c76313b35f1a101fea884467e5012304236ec25ec826a4d26bb670fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c736041c76313b35f1a101fea884467e5012304236ec25ec826a4d26bb670fa->enter($__internal_3c736041c76313b35f1a101fea884467e5012304236ec25ec826a4d26bb670fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_288284063eb3bcb66cb97de30e0ce4c88950c36f158f2244ab8e5e5a61864368->leave($__internal_288284063eb3bcb66cb97de30e0ce4c88950c36f158f2244ab8e5e5a61864368_prof);

        
        $__internal_3c736041c76313b35f1a101fea884467e5012304236ec25ec826a4d26bb670fa->leave($__internal_3c736041c76313b35f1a101fea884467e5012304236ec25ec826a4d26bb670fa_prof);

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
