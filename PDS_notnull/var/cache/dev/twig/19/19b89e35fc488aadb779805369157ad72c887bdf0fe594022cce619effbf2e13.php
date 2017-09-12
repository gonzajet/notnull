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
        $__internal_c70736c47aba97939d42da65ef0c92c71c744c590b0ab29e1b98126ee442221b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c70736c47aba97939d42da65ef0c92c71c744c590b0ab29e1b98126ee442221b->enter($__internal_c70736c47aba97939d42da65ef0c92c71c744c590b0ab29e1b98126ee442221b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_1b0a9a27abccbf54fdb4a9be61c5ae79ee61eaade8ec283ee4948a6fcac445ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b0a9a27abccbf54fdb4a9be61c5ae79ee61eaade8ec283ee4948a6fcac445ce->enter($__internal_1b0a9a27abccbf54fdb4a9be61c5ae79ee61eaade8ec283ee4948a6fcac445ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_c70736c47aba97939d42da65ef0c92c71c744c590b0ab29e1b98126ee442221b->leave($__internal_c70736c47aba97939d42da65ef0c92c71c744c590b0ab29e1b98126ee442221b_prof);

        
        $__internal_1b0a9a27abccbf54fdb4a9be61c5ae79ee61eaade8ec283ee4948a6fcac445ce->leave($__internal_1b0a9a27abccbf54fdb4a9be61c5ae79ee61eaade8ec283ee4948a6fcac445ce_prof);

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
