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
        $__internal_10521d038c4feabfbc9259b1fc4c23b5bf4769e48a67b96ad614a8ed80d81a52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10521d038c4feabfbc9259b1fc4c23b5bf4769e48a67b96ad614a8ed80d81a52->enter($__internal_10521d038c4feabfbc9259b1fc4c23b5bf4769e48a67b96ad614a8ed80d81a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_6cb4c53f7774a72d10289d95b9de30788cacf5edc7f8ac5bb948d68f9fb594cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cb4c53f7774a72d10289d95b9de30788cacf5edc7f8ac5bb948d68f9fb594cd->enter($__internal_6cb4c53f7774a72d10289d95b9de30788cacf5edc7f8ac5bb948d68f9fb594cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_10521d038c4feabfbc9259b1fc4c23b5bf4769e48a67b96ad614a8ed80d81a52->leave($__internal_10521d038c4feabfbc9259b1fc4c23b5bf4769e48a67b96ad614a8ed80d81a52_prof);

        
        $__internal_6cb4c53f7774a72d10289d95b9de30788cacf5edc7f8ac5bb948d68f9fb594cd->leave($__internal_6cb4c53f7774a72d10289d95b9de30788cacf5edc7f8ac5bb948d68f9fb594cd_prof);

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
