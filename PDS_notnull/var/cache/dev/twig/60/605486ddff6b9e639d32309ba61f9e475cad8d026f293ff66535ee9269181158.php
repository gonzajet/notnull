<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_6e7a8411032a9e7fc9fee18ab0fb54b26cfafc0b52b476d6a1e159fc6277a230 extends Twig_Template
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
        $__internal_91928d4d46bdc2af1593adce952cf6b785d56191ab17601f058ebdacd98148f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91928d4d46bdc2af1593adce952cf6b785d56191ab17601f058ebdacd98148f5->enter($__internal_91928d4d46bdc2af1593adce952cf6b785d56191ab17601f058ebdacd98148f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_cf61fe79974459b408fe979455a4a714e4203e531b86ce5486b709f6a107bed5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf61fe79974459b408fe979455a4a714e4203e531b86ce5486b709f6a107bed5->enter($__internal_cf61fe79974459b408fe979455a4a714e4203e531b86ce5486b709f6a107bed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_91928d4d46bdc2af1593adce952cf6b785d56191ab17601f058ebdacd98148f5->leave($__internal_91928d4d46bdc2af1593adce952cf6b785d56191ab17601f058ebdacd98148f5_prof);

        
        $__internal_cf61fe79974459b408fe979455a4a714e4203e531b86ce5486b709f6a107bed5->leave($__internal_cf61fe79974459b408fe979455a4a714e4203e531b86ce5486b709f6a107bed5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
