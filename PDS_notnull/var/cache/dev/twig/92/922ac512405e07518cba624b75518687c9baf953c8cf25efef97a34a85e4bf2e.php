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
        $__internal_1745d21c59427f21b1bf2296582a88d9ab969c05e9841b95c530d30a6153821e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1745d21c59427f21b1bf2296582a88d9ab969c05e9841b95c530d30a6153821e->enter($__internal_1745d21c59427f21b1bf2296582a88d9ab969c05e9841b95c530d30a6153821e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_faf561be656dfb7ddd30b6c402f416e9d3f84fd1b9ba05be4d9e33143f4b1a6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faf561be656dfb7ddd30b6c402f416e9d3f84fd1b9ba05be4d9e33143f4b1a6a->enter($__internal_faf561be656dfb7ddd30b6c402f416e9d3f84fd1b9ba05be4d9e33143f4b1a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_1745d21c59427f21b1bf2296582a88d9ab969c05e9841b95c530d30a6153821e->leave($__internal_1745d21c59427f21b1bf2296582a88d9ab969c05e9841b95c530d30a6153821e_prof);

        
        $__internal_faf561be656dfb7ddd30b6c402f416e9d3f84fd1b9ba05be4d9e33143f4b1a6a->leave($__internal_faf561be656dfb7ddd30b6c402f416e9d3f84fd1b9ba05be4d9e33143f4b1a6a_prof);

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
