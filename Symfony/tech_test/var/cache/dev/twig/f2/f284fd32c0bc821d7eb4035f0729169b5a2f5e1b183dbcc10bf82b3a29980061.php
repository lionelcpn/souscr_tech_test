<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_8512ec94405e80af9e1916e241449eda80b2c574b94bde22fc6d8e995040db9d extends Twig_Template
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
        $__internal_31f08ea7845fa4433b2108ede651cfbbb24e5e9e6978cff9ef24f19680c96d7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31f08ea7845fa4433b2108ede651cfbbb24e5e9e6978cff9ef24f19680c96d7b->enter($__internal_31f08ea7845fa4433b2108ede651cfbbb24e5e9e6978cff9ef24f19680c96d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_d9411dbcff69d6a8b830693f8108f00e5c028a3a43a13d288edebdc5657ca709 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9411dbcff69d6a8b830693f8108f00e5c028a3a43a13d288edebdc5657ca709->enter($__internal_d9411dbcff69d6a8b830693f8108f00e5c028a3a43a13d288edebdc5657ca709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_31f08ea7845fa4433b2108ede651cfbbb24e5e9e6978cff9ef24f19680c96d7b->leave($__internal_31f08ea7845fa4433b2108ede651cfbbb24e5e9e6978cff9ef24f19680c96d7b_prof);

        
        $__internal_d9411dbcff69d6a8b830693f8108f00e5c028a3a43a13d288edebdc5657ca709->leave($__internal_d9411dbcff69d6a8b830693f8108f00e5c028a3a43a13d288edebdc5657ca709_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/home/lionel/Projets/souscr_tech_test/Symfony/tech_test/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
