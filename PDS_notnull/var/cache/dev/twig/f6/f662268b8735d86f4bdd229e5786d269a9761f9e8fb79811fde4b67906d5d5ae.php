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
        $__internal_b51e51a331b129f4fad02a9029ec4c8c48bed0fc8b3a2ddec0f1347ba0998852 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b51e51a331b129f4fad02a9029ec4c8c48bed0fc8b3a2ddec0f1347ba0998852->enter($__internal_b51e51a331b129f4fad02a9029ec4c8c48bed0fc8b3a2ddec0f1347ba0998852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_4ced452e7ad13303b41b9d056511c80a9a5f32ce7a3648eff56b70a6dcd424ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ced452e7ad13303b41b9d056511c80a9a5f32ce7a3648eff56b70a6dcd424ab->enter($__internal_4ced452e7ad13303b41b9d056511c80a9a5f32ce7a3648eff56b70a6dcd424ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_b51e51a331b129f4fad02a9029ec4c8c48bed0fc8b3a2ddec0f1347ba0998852->leave($__internal_b51e51a331b129f4fad02a9029ec4c8c48bed0fc8b3a2ddec0f1347ba0998852_prof);

        
        $__internal_4ced452e7ad13303b41b9d056511c80a9a5f32ce7a3648eff56b70a6dcd424ab->leave($__internal_4ced452e7ad13303b41b9d056511c80a9a5f32ce7a3648eff56b70a6dcd424ab_prof);

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
