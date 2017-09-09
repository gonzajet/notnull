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
        $__internal_1e5761c2293a249f691aa219ec0a002c8db42b6fa2104b5f5064eb96d5b43a50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e5761c2293a249f691aa219ec0a002c8db42b6fa2104b5f5064eb96d5b43a50->enter($__internal_1e5761c2293a249f691aa219ec0a002c8db42b6fa2104b5f5064eb96d5b43a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_653aed4bf73c94ffc7c41504c2baa707074527a6dee710be0b87c159694640d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_653aed4bf73c94ffc7c41504c2baa707074527a6dee710be0b87c159694640d5->enter($__internal_653aed4bf73c94ffc7c41504c2baa707074527a6dee710be0b87c159694640d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_1e5761c2293a249f691aa219ec0a002c8db42b6fa2104b5f5064eb96d5b43a50->leave($__internal_1e5761c2293a249f691aa219ec0a002c8db42b6fa2104b5f5064eb96d5b43a50_prof);

        
        $__internal_653aed4bf73c94ffc7c41504c2baa707074527a6dee710be0b87c159694640d5->leave($__internal_653aed4bf73c94ffc7c41504c2baa707074527a6dee710be0b87c159694640d5_prof);

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
