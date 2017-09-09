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
        $__internal_03348c86b45fef542cefa1e4d47b4585db38c3292c78cf1d7859658b85daa2dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03348c86b45fef542cefa1e4d47b4585db38c3292c78cf1d7859658b85daa2dc->enter($__internal_03348c86b45fef542cefa1e4d47b4585db38c3292c78cf1d7859658b85daa2dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_b7a9a88935f38c4123f0044d2266b533777840ee0aca525b2e9aedaf87881f9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7a9a88935f38c4123f0044d2266b533777840ee0aca525b2e9aedaf87881f9a->enter($__internal_b7a9a88935f38c4123f0044d2266b533777840ee0aca525b2e9aedaf87881f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_03348c86b45fef542cefa1e4d47b4585db38c3292c78cf1d7859658b85daa2dc->leave($__internal_03348c86b45fef542cefa1e4d47b4585db38c3292c78cf1d7859658b85daa2dc_prof);

        
        $__internal_b7a9a88935f38c4123f0044d2266b533777840ee0aca525b2e9aedaf87881f9a->leave($__internal_b7a9a88935f38c4123f0044d2266b533777840ee0aca525b2e9aedaf87881f9a_prof);

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
