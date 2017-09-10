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
        $__internal_9994295457795beeb674745ee0c1e15d9c80c1d5461a6c4df2afdb222e49d953 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9994295457795beeb674745ee0c1e15d9c80c1d5461a6c4df2afdb222e49d953->enter($__internal_9994295457795beeb674745ee0c1e15d9c80c1d5461a6c4df2afdb222e49d953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_845ef9b62522acb2292d04a976c3e1fbc484c105b7432a8bd79847ae6de0c58a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_845ef9b62522acb2292d04a976c3e1fbc484c105b7432a8bd79847ae6de0c58a->enter($__internal_845ef9b62522acb2292d04a976c3e1fbc484c105b7432a8bd79847ae6de0c58a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_9994295457795beeb674745ee0c1e15d9c80c1d5461a6c4df2afdb222e49d953->leave($__internal_9994295457795beeb674745ee0c1e15d9c80c1d5461a6c4df2afdb222e49d953_prof);

        
        $__internal_845ef9b62522acb2292d04a976c3e1fbc484c105b7432a8bd79847ae6de0c58a->leave($__internal_845ef9b62522acb2292d04a976c3e1fbc484c105b7432a8bd79847ae6de0c58a_prof);

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
