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
        $__internal_ece77b5e205b1cf56a3e3e4ee6f45dba0634c453cd73d2195411d1a87a4ad77b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ece77b5e205b1cf56a3e3e4ee6f45dba0634c453cd73d2195411d1a87a4ad77b->enter($__internal_ece77b5e205b1cf56a3e3e4ee6f45dba0634c453cd73d2195411d1a87a4ad77b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_0ce3e894dc908c2eab3fd90f3a1c1b76a27e4f09ddcf02248e00921c2863f6da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ce3e894dc908c2eab3fd90f3a1c1b76a27e4f09ddcf02248e00921c2863f6da->enter($__internal_0ce3e894dc908c2eab3fd90f3a1c1b76a27e4f09ddcf02248e00921c2863f6da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_ece77b5e205b1cf56a3e3e4ee6f45dba0634c453cd73d2195411d1a87a4ad77b->leave($__internal_ece77b5e205b1cf56a3e3e4ee6f45dba0634c453cd73d2195411d1a87a4ad77b_prof);

        
        $__internal_0ce3e894dc908c2eab3fd90f3a1c1b76a27e4f09ddcf02248e00921c2863f6da->leave($__internal_0ce3e894dc908c2eab3fd90f3a1c1b76a27e4f09ddcf02248e00921c2863f6da_prof);

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
