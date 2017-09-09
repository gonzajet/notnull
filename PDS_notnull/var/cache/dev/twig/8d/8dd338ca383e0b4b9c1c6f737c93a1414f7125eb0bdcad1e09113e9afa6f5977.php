<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_40e6854ef7dcd4193fa676e5c642ea304680c9250d91e61f11cc10d57283ccf0 extends Twig_Template
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
        $__internal_2d1b3cc27e5919c52934de8062854280f5bdf218aece7fd61cebe6d74da60d4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d1b3cc27e5919c52934de8062854280f5bdf218aece7fd61cebe6d74da60d4a->enter($__internal_2d1b3cc27e5919c52934de8062854280f5bdf218aece7fd61cebe6d74da60d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_0552e96768e265c5303c3fb18b4ccaca626727b91c4d691df21b72e3edf0e70c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0552e96768e265c5303c3fb18b4ccaca626727b91c4d691df21b72e3edf0e70c->enter($__internal_0552e96768e265c5303c3fb18b4ccaca626727b91c4d691df21b72e3edf0e70c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_2d1b3cc27e5919c52934de8062854280f5bdf218aece7fd61cebe6d74da60d4a->leave($__internal_2d1b3cc27e5919c52934de8062854280f5bdf218aece7fd61cebe6d74da60d4a_prof);

        
        $__internal_0552e96768e265c5303c3fb18b4ccaca626727b91c4d691df21b72e3edf0e70c->leave($__internal_0552e96768e265c5303c3fb18b4ccaca626727b91c4d691df21b72e3edf0e70c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
