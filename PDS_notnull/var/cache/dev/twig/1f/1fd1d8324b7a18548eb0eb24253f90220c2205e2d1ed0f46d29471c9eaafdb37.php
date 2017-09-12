<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_c8c02e2e7c4c1be191f60bfcf969a441b80a59321483a91ca09e2dd35689d1c2 extends Twig_Template
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
        $__internal_7f1314d89868d050d104447c6b48c7ab6c94d3242b9e32e92aff4c766bd73892 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f1314d89868d050d104447c6b48c7ab6c94d3242b9e32e92aff4c766bd73892->enter($__internal_7f1314d89868d050d104447c6b48c7ab6c94d3242b9e32e92aff4c766bd73892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_17c727d22d71c4e6e70b65637fd9f1b91464b083e9b122889a3d059a056f4f71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17c727d22d71c4e6e70b65637fd9f1b91464b083e9b122889a3d059a056f4f71->enter($__internal_17c727d22d71c4e6e70b65637fd9f1b91464b083e9b122889a3d059a056f4f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_7f1314d89868d050d104447c6b48c7ab6c94d3242b9e32e92aff4c766bd73892->leave($__internal_7f1314d89868d050d104447c6b48c7ab6c94d3242b9e32e92aff4c766bd73892_prof);

        
        $__internal_17c727d22d71c4e6e70b65637fd9f1b91464b083e9b122889a3d059a056f4f71->leave($__internal_17c727d22d71c4e6e70b65637fd9f1b91464b083e9b122889a3d059a056f4f71_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
