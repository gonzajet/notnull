<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_bee41b5fcd1a34ba2ad29b481cff02b28acd654d51a18d067d1adc47889e574c extends Twig_Template
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
        $__internal_f5ca04e286e8ec38f0d4eba6d78a862423403a25b01bf53a4091ed545b66f433 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5ca04e286e8ec38f0d4eba6d78a862423403a25b01bf53a4091ed545b66f433->enter($__internal_f5ca04e286e8ec38f0d4eba6d78a862423403a25b01bf53a4091ed545b66f433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_b906629026bafecd682813f1a2e49920a035df49288049f6cb80f81e49b7be78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b906629026bafecd682813f1a2e49920a035df49288049f6cb80f81e49b7be78->enter($__internal_b906629026bafecd682813f1a2e49920a035df49288049f6cb80f81e49b7be78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_f5ca04e286e8ec38f0d4eba6d78a862423403a25b01bf53a4091ed545b66f433->leave($__internal_f5ca04e286e8ec38f0d4eba6d78a862423403a25b01bf53a4091ed545b66f433_prof);

        
        $__internal_b906629026bafecd682813f1a2e49920a035df49288049f6cb80f81e49b7be78->leave($__internal_b906629026bafecd682813f1a2e49920a035df49288049f6cb80f81e49b7be78_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
