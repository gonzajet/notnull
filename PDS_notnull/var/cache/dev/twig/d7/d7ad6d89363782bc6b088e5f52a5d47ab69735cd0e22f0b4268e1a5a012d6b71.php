<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_cab5a67889bd3a426ce6a939f99ae35d294977358932f5d4e077defbbb342f18 extends Twig_Template
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
        $__internal_d3fbebbd067b3572a673e00e7b034a38a9c197d5c16750806eb257f9c6dabc2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3fbebbd067b3572a673e00e7b034a38a9c197d5c16750806eb257f9c6dabc2a->enter($__internal_d3fbebbd067b3572a673e00e7b034a38a9c197d5c16750806eb257f9c6dabc2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_42dbb9abd7c7a5021fb45d154ad8c3e56263c4d59b6fb4453c593fe75d7f36ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42dbb9abd7c7a5021fb45d154ad8c3e56263c4d59b6fb4453c593fe75d7f36ca->enter($__internal_42dbb9abd7c7a5021fb45d154ad8c3e56263c4d59b6fb4453c593fe75d7f36ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_d3fbebbd067b3572a673e00e7b034a38a9c197d5c16750806eb257f9c6dabc2a->leave($__internal_d3fbebbd067b3572a673e00e7b034a38a9c197d5c16750806eb257f9c6dabc2a_prof);

        
        $__internal_42dbb9abd7c7a5021fb45d154ad8c3e56263c4d59b6fb4453c593fe75d7f36ca->leave($__internal_42dbb9abd7c7a5021fb45d154ad8c3e56263c4d59b6fb4453c593fe75d7f36ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
