<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_4078abc49a60432fb79832f1dd40d9d6c6e110f57742a12ed28485a2e425418d extends Twig_Template
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
        $__internal_6cd4af89725656ce9545587316ffd6c345393da66ed78109c1fa3c92c207c82f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cd4af89725656ce9545587316ffd6c345393da66ed78109c1fa3c92c207c82f->enter($__internal_6cd4af89725656ce9545587316ffd6c345393da66ed78109c1fa3c92c207c82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_a31f8865353294a05d1e326377c47d9191f70acbea96ebbf2ebef090e08b5631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a31f8865353294a05d1e326377c47d9191f70acbea96ebbf2ebef090e08b5631->enter($__internal_a31f8865353294a05d1e326377c47d9191f70acbea96ebbf2ebef090e08b5631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_6cd4af89725656ce9545587316ffd6c345393da66ed78109c1fa3c92c207c82f->leave($__internal_6cd4af89725656ce9545587316ffd6c345393da66ed78109c1fa3c92c207c82f_prof);

        
        $__internal_a31f8865353294a05d1e326377c47d9191f70acbea96ebbf2ebef090e08b5631->leave($__internal_a31f8865353294a05d1e326377c47d9191f70acbea96ebbf2ebef090e08b5631_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
