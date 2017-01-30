<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_c3ad11703621a00b1b98ffd851127724a96c797605d851888aa7bb10e73ac38e extends Twig_Template
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
        $__internal_091968f946c5e59df3ba2c59a5781f970b1ecc616a96c22885bdf418d5f4727b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_091968f946c5e59df3ba2c59a5781f970b1ecc616a96c22885bdf418d5f4727b->enter($__internal_091968f946c5e59df3ba2c59a5781f970b1ecc616a96c22885bdf418d5f4727b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_5ebd1e391f1772885a45227d2b80e4b3ece2bf4b690b78535552cc4572cbad09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ebd1e391f1772885a45227d2b80e4b3ece2bf4b690b78535552cc4572cbad09->enter($__internal_5ebd1e391f1772885a45227d2b80e4b3ece2bf4b690b78535552cc4572cbad09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_091968f946c5e59df3ba2c59a5781f970b1ecc616a96c22885bdf418d5f4727b->leave($__internal_091968f946c5e59df3ba2c59a5781f970b1ecc616a96c22885bdf418d5f4727b_prof);

        
        $__internal_5ebd1e391f1772885a45227d2b80e4b3ece2bf4b690b78535552cc4572cbad09->leave($__internal_5ebd1e391f1772885a45227d2b80e4b3ece2bf4b690b78535552cc4572cbad09_prof);

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
", "@Framework/Form/container_attributes.html.php", "/home/lionel/Projets/souscr_tech_test/Symfony/tech_test/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
