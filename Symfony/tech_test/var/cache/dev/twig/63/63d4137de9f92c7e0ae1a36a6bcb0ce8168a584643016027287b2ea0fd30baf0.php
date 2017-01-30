<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_82e2864967a076e2a826abd420b60d0a08656700d06b6b0d98e43ba8d6af745f extends Twig_Template
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
        $__internal_bc8ad826cbcf9c0694813d3ec23f087aa05755270337d76038f667e3cb0357b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc8ad826cbcf9c0694813d3ec23f087aa05755270337d76038f667e3cb0357b5->enter($__internal_bc8ad826cbcf9c0694813d3ec23f087aa05755270337d76038f667e3cb0357b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_5692447f5c3527df7d947e683c59f5fbd4ddf21212ee961268cff97717f2460d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5692447f5c3527df7d947e683c59f5fbd4ddf21212ee961268cff97717f2460d->enter($__internal_5692447f5c3527df7d947e683c59f5fbd4ddf21212ee961268cff97717f2460d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_bc8ad826cbcf9c0694813d3ec23f087aa05755270337d76038f667e3cb0357b5->leave($__internal_bc8ad826cbcf9c0694813d3ec23f087aa05755270337d76038f667e3cb0357b5_prof);

        
        $__internal_5692447f5c3527df7d947e683c59f5fbd4ddf21212ee961268cff97717f2460d->leave($__internal_5692447f5c3527df7d947e683c59f5fbd4ddf21212ee961268cff97717f2460d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/lionel/Projets/souscr_tech_test/Symfony/tech_test/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
