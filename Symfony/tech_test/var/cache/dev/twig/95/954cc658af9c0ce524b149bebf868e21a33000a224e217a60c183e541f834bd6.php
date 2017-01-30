<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_5616e7d110e3a6e60a7dd2dfc55825fe5128bbf96406a592f0b93ee998585e6b extends Twig_Template
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
        $__internal_1cca47e596dd26e1699bc096d576f2241297d383eaff67312c2e8f0092c01c36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cca47e596dd26e1699bc096d576f2241297d383eaff67312c2e8f0092c01c36->enter($__internal_1cca47e596dd26e1699bc096d576f2241297d383eaff67312c2e8f0092c01c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_696056af5f77e344d321e9ebb949eb0c0f232ee33bc362c609480424520b5831 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_696056af5f77e344d321e9ebb949eb0c0f232ee33bc362c609480424520b5831->enter($__internal_696056af5f77e344d321e9ebb949eb0c0f232ee33bc362c609480424520b5831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_1cca47e596dd26e1699bc096d576f2241297d383eaff67312c2e8f0092c01c36->leave($__internal_1cca47e596dd26e1699bc096d576f2241297d383eaff67312c2e8f0092c01c36_prof);

        
        $__internal_696056af5f77e344d321e9ebb949eb0c0f232ee33bc362c609480424520b5831->leave($__internal_696056af5f77e344d321e9ebb949eb0c0f232ee33bc362c609480424520b5831_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/lionel/Projets/souscr_tech_test/Symfony/tech_test/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
