<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_3e7841fbbd3563ce0f1114d03107250d6dda0235822a8fe0682d98dae9bc5cae extends Twig_Template
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
        $__internal_9f9576c213069626e0c8717631120d38c823fd0902659547c2ce8dd5d7dfa12e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f9576c213069626e0c8717631120d38c823fd0902659547c2ce8dd5d7dfa12e->enter($__internal_9f9576c213069626e0c8717631120d38c823fd0902659547c2ce8dd5d7dfa12e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_730f22aab8b78a75d0c72aa7a154526816acffca2cadf47d77a3168420f3074c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_730f22aab8b78a75d0c72aa7a154526816acffca2cadf47d77a3168420f3074c->enter($__internal_730f22aab8b78a75d0c72aa7a154526816acffca2cadf47d77a3168420f3074c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_9f9576c213069626e0c8717631120d38c823fd0902659547c2ce8dd5d7dfa12e->leave($__internal_9f9576c213069626e0c8717631120d38c823fd0902659547c2ce8dd5d7dfa12e_prof);

        
        $__internal_730f22aab8b78a75d0c72aa7a154526816acffca2cadf47d77a3168420f3074c->leave($__internal_730f22aab8b78a75d0c72aa7a154526816acffca2cadf47d77a3168420f3074c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
