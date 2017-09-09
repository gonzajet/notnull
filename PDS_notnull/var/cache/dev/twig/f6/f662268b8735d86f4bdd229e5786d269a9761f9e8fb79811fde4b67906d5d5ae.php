<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_82d788d4b72f663169ca0bb8b3c9237314f4ff2eafb4efbe6ea7b1cf19213fb3 extends Twig_Template
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
        $__internal_cff3d6b93184eeb1a6d52a44b6f2d202918ce35dd677825ac800e6ca9a91d7bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cff3d6b93184eeb1a6d52a44b6f2d202918ce35dd677825ac800e6ca9a91d7bb->enter($__internal_cff3d6b93184eeb1a6d52a44b6f2d202918ce35dd677825ac800e6ca9a91d7bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_eb56602be5bc2243a14ae427011b04e4f9ec3a0be6594fc7255d7305bc526008 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb56602be5bc2243a14ae427011b04e4f9ec3a0be6594fc7255d7305bc526008->enter($__internal_eb56602be5bc2243a14ae427011b04e4f9ec3a0be6594fc7255d7305bc526008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_cff3d6b93184eeb1a6d52a44b6f2d202918ce35dd677825ac800e6ca9a91d7bb->leave($__internal_cff3d6b93184eeb1a6d52a44b6f2d202918ce35dd677825ac800e6ca9a91d7bb_prof);

        
        $__internal_eb56602be5bc2243a14ae427011b04e4f9ec3a0be6594fc7255d7305bc526008->leave($__internal_eb56602be5bc2243a14ae427011b04e4f9ec3a0be6594fc7255d7305bc526008_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
