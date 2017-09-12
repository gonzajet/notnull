<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_6d6c06b96e364367f395c82483451daac5fae51592a7cdd84884e1d19a39a9a5 extends Twig_Template
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
        $__internal_6b9539dd5e3c739a443b94c1f36b763b68b69fd702144c8602ad45526874a635 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b9539dd5e3c739a443b94c1f36b763b68b69fd702144c8602ad45526874a635->enter($__internal_6b9539dd5e3c739a443b94c1f36b763b68b69fd702144c8602ad45526874a635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_30d469ea0ba44987bbfc8c0a10011d75bdb1b7a906fbc44a4c294f01536bd67e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30d469ea0ba44987bbfc8c0a10011d75bdb1b7a906fbc44a4c294f01536bd67e->enter($__internal_30d469ea0ba44987bbfc8c0a10011d75bdb1b7a906fbc44a4c294f01536bd67e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_6b9539dd5e3c739a443b94c1f36b763b68b69fd702144c8602ad45526874a635->leave($__internal_6b9539dd5e3c739a443b94c1f36b763b68b69fd702144c8602ad45526874a635_prof);

        
        $__internal_30d469ea0ba44987bbfc8c0a10011d75bdb1b7a906fbc44a4c294f01536bd67e->leave($__internal_30d469ea0ba44987bbfc8c0a10011d75bdb1b7a906fbc44a4c294f01536bd67e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
