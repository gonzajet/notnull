<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_018a74265dafed84df1e4c8cbdb2309779e71d80b055a85859bf080568e3c50c extends Twig_Template
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
        $__internal_f085a837fc01236ec97c3ac1e1d024d1a3099e31ef64d53fb0194c117485debb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f085a837fc01236ec97c3ac1e1d024d1a3099e31ef64d53fb0194c117485debb->enter($__internal_f085a837fc01236ec97c3ac1e1d024d1a3099e31ef64d53fb0194c117485debb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_02257579b203725fcf1451f0ad4ab114e82122aacf437ddc78ab13826f84ef3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02257579b203725fcf1451f0ad4ab114e82122aacf437ddc78ab13826f84ef3e->enter($__internal_02257579b203725fcf1451f0ad4ab114e82122aacf437ddc78ab13826f84ef3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_f085a837fc01236ec97c3ac1e1d024d1a3099e31ef64d53fb0194c117485debb->leave($__internal_f085a837fc01236ec97c3ac1e1d024d1a3099e31ef64d53fb0194c117485debb_prof);

        
        $__internal_02257579b203725fcf1451f0ad4ab114e82122aacf437ddc78ab13826f84ef3e->leave($__internal_02257579b203725fcf1451f0ad4ab114e82122aacf437ddc78ab13826f84ef3e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
