<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_0ab1922771524e0e5ef4e9c1568f7d5dad968f30962917eca047a0363bf0add3 extends Twig_Template
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
        $__internal_9fa7acedd15555849ee16f62a8214358445574da6170671dddd005926dc371c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fa7acedd15555849ee16f62a8214358445574da6170671dddd005926dc371c2->enter($__internal_9fa7acedd15555849ee16f62a8214358445574da6170671dddd005926dc371c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_c338b6880045c199048cb1fc4ed581c83043a20fb1801faf5fdd98cdc6b9448a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c338b6880045c199048cb1fc4ed581c83043a20fb1801faf5fdd98cdc6b9448a->enter($__internal_c338b6880045c199048cb1fc4ed581c83043a20fb1801faf5fdd98cdc6b9448a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_9fa7acedd15555849ee16f62a8214358445574da6170671dddd005926dc371c2->leave($__internal_9fa7acedd15555849ee16f62a8214358445574da6170671dddd005926dc371c2_prof);

        
        $__internal_c338b6880045c199048cb1fc4ed581c83043a20fb1801faf5fdd98cdc6b9448a->leave($__internal_c338b6880045c199048cb1fc4ed581c83043a20fb1801faf5fdd98cdc6b9448a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
