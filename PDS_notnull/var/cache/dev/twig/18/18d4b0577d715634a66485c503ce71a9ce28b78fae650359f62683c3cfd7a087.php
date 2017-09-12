<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_f8d63f96e59730aa31ded04d89d5ea9d3c00c754f5589fe6da826ecc8d295fd3 extends Twig_Template
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
        $__internal_c7f3ac1b2dfbb47364850331f579e99036e74f18bd132e4e8907a51ffafdb082 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7f3ac1b2dfbb47364850331f579e99036e74f18bd132e4e8907a51ffafdb082->enter($__internal_c7f3ac1b2dfbb47364850331f579e99036e74f18bd132e4e8907a51ffafdb082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_9aa84be631d0a445d1eadbab4a6344440b43ea71b14ce73d8d516df223038499 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aa84be631d0a445d1eadbab4a6344440b43ea71b14ce73d8d516df223038499->enter($__internal_9aa84be631d0a445d1eadbab4a6344440b43ea71b14ce73d8d516df223038499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c7f3ac1b2dfbb47364850331f579e99036e74f18bd132e4e8907a51ffafdb082->leave($__internal_c7f3ac1b2dfbb47364850331f579e99036e74f18bd132e4e8907a51ffafdb082_prof);

        
        $__internal_9aa84be631d0a445d1eadbab4a6344440b43ea71b14ce73d8d516df223038499->leave($__internal_9aa84be631d0a445d1eadbab4a6344440b43ea71b14ce73d8d516df223038499_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
