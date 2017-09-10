<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_196fc751e8eff37053a59b16d65991cef582337b190b691419e76d75fd72247f extends Twig_Template
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
        $__internal_f696b4d5445b040765b34d7504838c2d7ed2ab5d3acd90037f0eb216467df94b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f696b4d5445b040765b34d7504838c2d7ed2ab5d3acd90037f0eb216467df94b->enter($__internal_f696b4d5445b040765b34d7504838c2d7ed2ab5d3acd90037f0eb216467df94b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_85573bf35d3dc97e5c51e36da28f4f5d526f34adf7f1582eaece7976667e6160 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85573bf35d3dc97e5c51e36da28f4f5d526f34adf7f1582eaece7976667e6160->enter($__internal_85573bf35d3dc97e5c51e36da28f4f5d526f34adf7f1582eaece7976667e6160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_f696b4d5445b040765b34d7504838c2d7ed2ab5d3acd90037f0eb216467df94b->leave($__internal_f696b4d5445b040765b34d7504838c2d7ed2ab5d3acd90037f0eb216467df94b_prof);

        
        $__internal_85573bf35d3dc97e5c51e36da28f4f5d526f34adf7f1582eaece7976667e6160->leave($__internal_85573bf35d3dc97e5c51e36da28f4f5d526f34adf7f1582eaece7976667e6160_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
