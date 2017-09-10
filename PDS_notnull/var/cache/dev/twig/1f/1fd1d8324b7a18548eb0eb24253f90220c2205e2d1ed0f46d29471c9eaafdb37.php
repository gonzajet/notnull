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
        $__internal_93a455766b747c365a483e864bb0a9c238ffa7dba13b4c07eebb1d8aa1420512 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93a455766b747c365a483e864bb0a9c238ffa7dba13b4c07eebb1d8aa1420512->enter($__internal_93a455766b747c365a483e864bb0a9c238ffa7dba13b4c07eebb1d8aa1420512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_478fce799a3fde7ee48ab1badddfbbae123e1e4a53e05e308d9c10dbc7aa9e5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_478fce799a3fde7ee48ab1badddfbbae123e1e4a53e05e308d9c10dbc7aa9e5a->enter($__internal_478fce799a3fde7ee48ab1badddfbbae123e1e4a53e05e308d9c10dbc7aa9e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_93a455766b747c365a483e864bb0a9c238ffa7dba13b4c07eebb1d8aa1420512->leave($__internal_93a455766b747c365a483e864bb0a9c238ffa7dba13b4c07eebb1d8aa1420512_prof);

        
        $__internal_478fce799a3fde7ee48ab1badddfbbae123e1e4a53e05e308d9c10dbc7aa9e5a->leave($__internal_478fce799a3fde7ee48ab1badddfbbae123e1e4a53e05e308d9c10dbc7aa9e5a_prof);

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
