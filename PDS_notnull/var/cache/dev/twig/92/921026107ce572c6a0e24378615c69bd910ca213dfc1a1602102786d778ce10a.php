<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_5ed607c29339f1784fb92de8a9a278e8f7a304a35b95959aa5af88e6a003e782 extends Twig_Template
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
        $__internal_7cdfefe2f96797e09f7190d68262225a50e19e5711b970c760cc682aaa7dcd79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cdfefe2f96797e09f7190d68262225a50e19e5711b970c760cc682aaa7dcd79->enter($__internal_7cdfefe2f96797e09f7190d68262225a50e19e5711b970c760cc682aaa7dcd79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_c832b7a648de407375853cb3ac0f6387f64f82f39fa18eaa63105a2b23740e83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c832b7a648de407375853cb3ac0f6387f64f82f39fa18eaa63105a2b23740e83->enter($__internal_c832b7a648de407375853cb3ac0f6387f64f82f39fa18eaa63105a2b23740e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_7cdfefe2f96797e09f7190d68262225a50e19e5711b970c760cc682aaa7dcd79->leave($__internal_7cdfefe2f96797e09f7190d68262225a50e19e5711b970c760cc682aaa7dcd79_prof);

        
        $__internal_c832b7a648de407375853cb3ac0f6387f64f82f39fa18eaa63105a2b23740e83->leave($__internal_c832b7a648de407375853cb3ac0f6387f64f82f39fa18eaa63105a2b23740e83_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}