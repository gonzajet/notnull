<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_4ed3b32a2c8f1e1cb568fdee9d3edf3099294f4695be017a3bbb6b97b328ba4e extends Twig_Template
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
        $__internal_cc112aa88c4331183a68448b19ccded03b6c4a279287937a3f397e9ebdd28e68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc112aa88c4331183a68448b19ccded03b6c4a279287937a3f397e9ebdd28e68->enter($__internal_cc112aa88c4331183a68448b19ccded03b6c4a279287937a3f397e9ebdd28e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_6e395ad353fd2cab9dcac18a6e1e91dd5ae1a94d10ba93bb92f950ff99adb27a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e395ad353fd2cab9dcac18a6e1e91dd5ae1a94d10ba93bb92f950ff99adb27a->enter($__internal_6e395ad353fd2cab9dcac18a6e1e91dd5ae1a94d10ba93bb92f950ff99adb27a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_cc112aa88c4331183a68448b19ccded03b6c4a279287937a3f397e9ebdd28e68->leave($__internal_cc112aa88c4331183a68448b19ccded03b6c4a279287937a3f397e9ebdd28e68_prof);

        
        $__internal_6e395ad353fd2cab9dcac18a6e1e91dd5ae1a94d10ba93bb92f950ff99adb27a->leave($__internal_6e395ad353fd2cab9dcac18a6e1e91dd5ae1a94d10ba93bb92f950ff99adb27a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
