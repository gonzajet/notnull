<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_57797d445e1ae7026835a8dbf36ce0a3d974979017a5af17014fbde7106a22c8 extends Twig_Template
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
        $__internal_c07db556c2d61ff13bbdeb928a336819e2426b3d1d4220afed20654a04e04c08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c07db556c2d61ff13bbdeb928a336819e2426b3d1d4220afed20654a04e04c08->enter($__internal_c07db556c2d61ff13bbdeb928a336819e2426b3d1d4220afed20654a04e04c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_100404675f759d07cd4f4d777cdf4ad1bbaf3cc0f66c9d439cb47b763a9815c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_100404675f759d07cd4f4d777cdf4ad1bbaf3cc0f66c9d439cb47b763a9815c9->enter($__internal_100404675f759d07cd4f4d777cdf4ad1bbaf3cc0f66c9d439cb47b763a9815c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_c07db556c2d61ff13bbdeb928a336819e2426b3d1d4220afed20654a04e04c08->leave($__internal_c07db556c2d61ff13bbdeb928a336819e2426b3d1d4220afed20654a04e04c08_prof);

        
        $__internal_100404675f759d07cd4f4d777cdf4ad1bbaf3cc0f66c9d439cb47b763a9815c9->leave($__internal_100404675f759d07cd4f4d777cdf4ad1bbaf3cc0f66c9d439cb47b763a9815c9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
