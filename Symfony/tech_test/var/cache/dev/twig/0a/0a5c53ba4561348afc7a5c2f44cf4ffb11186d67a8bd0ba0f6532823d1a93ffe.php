<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_61527599f1b475fa210386663620b0946261ed9584f826e23e33dd4604fb2a6e extends Twig_Template
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
        $__internal_b9223d6d66580b4e5f19084256ec5052c9289163e8b4b761ee9de346e92ad2a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9223d6d66580b4e5f19084256ec5052c9289163e8b4b761ee9de346e92ad2a0->enter($__internal_b9223d6d66580b4e5f19084256ec5052c9289163e8b4b761ee9de346e92ad2a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_30db0f00e20dc04cd1ab7d7cbfb51b27dbe3923115bcf679bc7be5808372ec95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30db0f00e20dc04cd1ab7d7cbfb51b27dbe3923115bcf679bc7be5808372ec95->enter($__internal_30db0f00e20dc04cd1ab7d7cbfb51b27dbe3923115bcf679bc7be5808372ec95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_b9223d6d66580b4e5f19084256ec5052c9289163e8b4b761ee9de346e92ad2a0->leave($__internal_b9223d6d66580b4e5f19084256ec5052c9289163e8b4b761ee9de346e92ad2a0_prof);

        
        $__internal_30db0f00e20dc04cd1ab7d7cbfb51b27dbe3923115bcf679bc7be5808372ec95->leave($__internal_30db0f00e20dc04cd1ab7d7cbfb51b27dbe3923115bcf679bc7be5808372ec95_prof);

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
", "@Framework/Form/form_end.html.php", "/home/lionel/Projets/souscr_tech_test/Symfony/tech_test/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
