<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_753e4a9e5e0c8c34fb97e716b33d9bfd20eb0cd544457124ed4a676c24dda39c extends Twig_Template
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
        $__internal_79f1693f9c3cd8722865abfde96985708982e43253926474c3b345f79fa6d81c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79f1693f9c3cd8722865abfde96985708982e43253926474c3b345f79fa6d81c->enter($__internal_79f1693f9c3cd8722865abfde96985708982e43253926474c3b345f79fa6d81c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_688fba2a83ea932c0ae2ed219714c3b26112db86f052f462ea712df897b3d0c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_688fba2a83ea932c0ae2ed219714c3b26112db86f052f462ea712df897b3d0c1->enter($__internal_688fba2a83ea932c0ae2ed219714c3b26112db86f052f462ea712df897b3d0c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_79f1693f9c3cd8722865abfde96985708982e43253926474c3b345f79fa6d81c->leave($__internal_79f1693f9c3cd8722865abfde96985708982e43253926474c3b345f79fa6d81c_prof);

        
        $__internal_688fba2a83ea932c0ae2ed219714c3b26112db86f052f462ea712df897b3d0c1->leave($__internal_688fba2a83ea932c0ae2ed219714c3b26112db86f052f462ea712df897b3d0c1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
