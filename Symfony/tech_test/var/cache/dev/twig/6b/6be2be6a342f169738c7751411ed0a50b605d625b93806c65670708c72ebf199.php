<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_badaea7f31119e98727051b89aff003fa57d9ac1331a446306d01003014d9c3b extends Twig_Template
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
        $__internal_fd6e6a7591b2922aeb1603d19eb40551ed4b0a45f59500f7ee55196e0f79ff3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd6e6a7591b2922aeb1603d19eb40551ed4b0a45f59500f7ee55196e0f79ff3e->enter($__internal_fd6e6a7591b2922aeb1603d19eb40551ed4b0a45f59500f7ee55196e0f79ff3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_828a64bd70c9116d79481e56432b90cfa9efb724aa2a2a684b2d8b8c6223d84c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_828a64bd70c9116d79481e56432b90cfa9efb724aa2a2a684b2d8b8c6223d84c->enter($__internal_828a64bd70c9116d79481e56432b90cfa9efb724aa2a2a684b2d8b8c6223d84c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_fd6e6a7591b2922aeb1603d19eb40551ed4b0a45f59500f7ee55196e0f79ff3e->leave($__internal_fd6e6a7591b2922aeb1603d19eb40551ed4b0a45f59500f7ee55196e0f79ff3e_prof);

        
        $__internal_828a64bd70c9116d79481e56432b90cfa9efb724aa2a2a684b2d8b8c6223d84c->leave($__internal_828a64bd70c9116d79481e56432b90cfa9efb724aa2a2a684b2d8b8c6223d84c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/lionel/Projets/souscr_tech_test/Symfony/tech_test/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
