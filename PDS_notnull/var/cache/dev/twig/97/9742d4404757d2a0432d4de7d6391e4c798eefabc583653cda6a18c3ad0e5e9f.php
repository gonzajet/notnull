<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_54550814b0f76ae8ebe05a89b8704e21a062f4995d945a0979ef7d4c652fbb77 extends Twig_Template
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
        $__internal_7b3df4a6c85dcc5477b52ed0a81154d847c41e2874e86ae16ef65a710ecc4654 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b3df4a6c85dcc5477b52ed0a81154d847c41e2874e86ae16ef65a710ecc4654->enter($__internal_7b3df4a6c85dcc5477b52ed0a81154d847c41e2874e86ae16ef65a710ecc4654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_deed35724c2600adf2a8d7417e6432349e130f55911a29d7934c2892191f85dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deed35724c2600adf2a8d7417e6432349e130f55911a29d7934c2892191f85dc->enter($__internal_deed35724c2600adf2a8d7417e6432349e130f55911a29d7934c2892191f85dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_7b3df4a6c85dcc5477b52ed0a81154d847c41e2874e86ae16ef65a710ecc4654->leave($__internal_7b3df4a6c85dcc5477b52ed0a81154d847c41e2874e86ae16ef65a710ecc4654_prof);

        
        $__internal_deed35724c2600adf2a8d7417e6432349e130f55911a29d7934c2892191f85dc->leave($__internal_deed35724c2600adf2a8d7417e6432349e130f55911a29d7934c2892191f85dc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
