<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_bfb4ffdef502dcf1316dc0c9faf545e5683823da860a9a5939d9b46f13d6b39a extends Twig_Template
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
        $__internal_6a986fab305fbe52ab3ff4556296121dafbdad7cd675396a55d17d173225ae26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a986fab305fbe52ab3ff4556296121dafbdad7cd675396a55d17d173225ae26->enter($__internal_6a986fab305fbe52ab3ff4556296121dafbdad7cd675396a55d17d173225ae26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_3ca602c364e3ce5ede86c0cb51b33f81381829af98ee9b98c113c4b39a841994 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ca602c364e3ce5ede86c0cb51b33f81381829af98ee9b98c113c4b39a841994->enter($__internal_3ca602c364e3ce5ede86c0cb51b33f81381829af98ee9b98c113c4b39a841994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_6a986fab305fbe52ab3ff4556296121dafbdad7cd675396a55d17d173225ae26->leave($__internal_6a986fab305fbe52ab3ff4556296121dafbdad7cd675396a55d17d173225ae26_prof);

        
        $__internal_3ca602c364e3ce5ede86c0cb51b33f81381829af98ee9b98c113c4b39a841994->leave($__internal_3ca602c364e3ce5ede86c0cb51b33f81381829af98ee9b98c113c4b39a841994_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
