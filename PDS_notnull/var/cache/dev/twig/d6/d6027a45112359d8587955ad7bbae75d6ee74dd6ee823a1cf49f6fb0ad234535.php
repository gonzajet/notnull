<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_d1dfbc545999c961ea51c4573e762c043572812bf8db887f2229c0de9a3ca07a extends Twig_Template
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
        $__internal_27fef9fcfc9f9e14bd67d4a5f826efae8d5e4b3aa47a522051bdd292238b1a6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27fef9fcfc9f9e14bd67d4a5f826efae8d5e4b3aa47a522051bdd292238b1a6b->enter($__internal_27fef9fcfc9f9e14bd67d4a5f826efae8d5e4b3aa47a522051bdd292238b1a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_125a9971693174d2f66764c6cb574a5588f02951c5fb5e9b4e966fb05ddcce4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_125a9971693174d2f66764c6cb574a5588f02951c5fb5e9b4e966fb05ddcce4f->enter($__internal_125a9971693174d2f66764c6cb574a5588f02951c5fb5e9b4e966fb05ddcce4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_27fef9fcfc9f9e14bd67d4a5f826efae8d5e4b3aa47a522051bdd292238b1a6b->leave($__internal_27fef9fcfc9f9e14bd67d4a5f826efae8d5e4b3aa47a522051bdd292238b1a6b_prof);

        
        $__internal_125a9971693174d2f66764c6cb574a5588f02951c5fb5e9b4e966fb05ddcce4f->leave($__internal_125a9971693174d2f66764c6cb574a5588f02951c5fb5e9b4e966fb05ddcce4f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
