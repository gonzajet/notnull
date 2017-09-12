<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_753e4a9e5e0c8c34fb97e716b33d9bfd20eb0cd544457124ed4a676c24dda39c extends Twig_Template
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
        $__internal_2c3b4829625b783376086f498edf78b94b8dc9a839512e0ed01277dbd5cbfa59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c3b4829625b783376086f498edf78b94b8dc9a839512e0ed01277dbd5cbfa59->enter($__internal_2c3b4829625b783376086f498edf78b94b8dc9a839512e0ed01277dbd5cbfa59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_41e1dca2c94a706e94b732957b622821e5fbf0b40e12ce7b5233d476db6d079c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41e1dca2c94a706e94b732957b622821e5fbf0b40e12ce7b5233d476db6d079c->enter($__internal_41e1dca2c94a706e94b732957b622821e5fbf0b40e12ce7b5233d476db6d079c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_2c3b4829625b783376086f498edf78b94b8dc9a839512e0ed01277dbd5cbfa59->leave($__internal_2c3b4829625b783376086f498edf78b94b8dc9a839512e0ed01277dbd5cbfa59_prof);

        
        $__internal_41e1dca2c94a706e94b732957b622821e5fbf0b40e12ce7b5233d476db6d079c->leave($__internal_41e1dca2c94a706e94b732957b622821e5fbf0b40e12ce7b5233d476db6d079c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
