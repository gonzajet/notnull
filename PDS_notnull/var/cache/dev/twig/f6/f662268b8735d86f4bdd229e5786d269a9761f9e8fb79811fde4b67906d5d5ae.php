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
        $__internal_8808e70144943b6bdbe685ddb962703f8beb71df14c2c62109e8f821b237a9ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8808e70144943b6bdbe685ddb962703f8beb71df14c2c62109e8f821b237a9ea->enter($__internal_8808e70144943b6bdbe685ddb962703f8beb71df14c2c62109e8f821b237a9ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_844ebc88356b85381caa443949efaee71cc4cf2e6af66487f540e42c7100e17a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_844ebc88356b85381caa443949efaee71cc4cf2e6af66487f540e42c7100e17a->enter($__internal_844ebc88356b85381caa443949efaee71cc4cf2e6af66487f540e42c7100e17a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_8808e70144943b6bdbe685ddb962703f8beb71df14c2c62109e8f821b237a9ea->leave($__internal_8808e70144943b6bdbe685ddb962703f8beb71df14c2c62109e8f821b237a9ea_prof);

        
        $__internal_844ebc88356b85381caa443949efaee71cc4cf2e6af66487f540e42c7100e17a->leave($__internal_844ebc88356b85381caa443949efaee71cc4cf2e6af66487f540e42c7100e17a_prof);

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
