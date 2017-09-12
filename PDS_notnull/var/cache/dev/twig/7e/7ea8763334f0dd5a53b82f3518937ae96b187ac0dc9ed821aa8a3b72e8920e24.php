<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_9f6224f034cc85d529136e173070785fa907214a81106382bce53c67852f8111 extends Twig_Template
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
        $__internal_d4bbe226b7f83b5390c34b747c6346e3d2cda069c0e56cbe875a587e6b32e172 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4bbe226b7f83b5390c34b747c6346e3d2cda069c0e56cbe875a587e6b32e172->enter($__internal_d4bbe226b7f83b5390c34b747c6346e3d2cda069c0e56cbe875a587e6b32e172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_3eab44de0b0b8728695c78644f785a82799439eddbfce2b32ed9213f1aa466d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eab44de0b0b8728695c78644f785a82799439eddbfce2b32ed9213f1aa466d2->enter($__internal_3eab44de0b0b8728695c78644f785a82799439eddbfce2b32ed9213f1aa466d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_d4bbe226b7f83b5390c34b747c6346e3d2cda069c0e56cbe875a587e6b32e172->leave($__internal_d4bbe226b7f83b5390c34b747c6346e3d2cda069c0e56cbe875a587e6b32e172_prof);

        
        $__internal_3eab44de0b0b8728695c78644f785a82799439eddbfce2b32ed9213f1aa466d2->leave($__internal_3eab44de0b0b8728695c78644f785a82799439eddbfce2b32ed9213f1aa466d2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
