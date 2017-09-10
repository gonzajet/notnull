<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_e80bd426376c58c1d5dca3b1cc12ff386d456005d8dcca2ea8a2fe02d8fa5d55 extends Twig_Template
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
        $__internal_bb9cf30176f815e4f8a50813b52eb9f873ef1b8cd80d3f14cabfa17972ceba90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb9cf30176f815e4f8a50813b52eb9f873ef1b8cd80d3f14cabfa17972ceba90->enter($__internal_bb9cf30176f815e4f8a50813b52eb9f873ef1b8cd80d3f14cabfa17972ceba90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_911fe30bbd4aa16bc23ff5cd92a4474994b191ce3838f2536aa8d4e93ac17d2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_911fe30bbd4aa16bc23ff5cd92a4474994b191ce3838f2536aa8d4e93ac17d2d->enter($__internal_911fe30bbd4aa16bc23ff5cd92a4474994b191ce3838f2536aa8d4e93ac17d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_bb9cf30176f815e4f8a50813b52eb9f873ef1b8cd80d3f14cabfa17972ceba90->leave($__internal_bb9cf30176f815e4f8a50813b52eb9f873ef1b8cd80d3f14cabfa17972ceba90_prof);

        
        $__internal_911fe30bbd4aa16bc23ff5cd92a4474994b191ce3838f2536aa8d4e93ac17d2d->leave($__internal_911fe30bbd4aa16bc23ff5cd92a4474994b191ce3838f2536aa8d4e93ac17d2d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
