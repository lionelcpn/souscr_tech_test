<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_2c29634760b17543e9ccd96df4246758ace5a478f063510b15e80269e5d87de4 extends Twig_Template
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
        $__internal_39570ac1d49142bfb1b5cc349d667e1bf3fb0db21e567d503b13e9a0b8e7d74b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39570ac1d49142bfb1b5cc349d667e1bf3fb0db21e567d503b13e9a0b8e7d74b->enter($__internal_39570ac1d49142bfb1b5cc349d667e1bf3fb0db21e567d503b13e9a0b8e7d74b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_ce7e80e2a3aaa379c676b535e099b2cb1101caa64ea929036bd11380891ffb07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce7e80e2a3aaa379c676b535e099b2cb1101caa64ea929036bd11380891ffb07->enter($__internal_ce7e80e2a3aaa379c676b535e099b2cb1101caa64ea929036bd11380891ffb07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_39570ac1d49142bfb1b5cc349d667e1bf3fb0db21e567d503b13e9a0b8e7d74b->leave($__internal_39570ac1d49142bfb1b5cc349d667e1bf3fb0db21e567d503b13e9a0b8e7d74b_prof);

        
        $__internal_ce7e80e2a3aaa379c676b535e099b2cb1101caa64ea929036bd11380891ffb07->leave($__internal_ce7e80e2a3aaa379c676b535e099b2cb1101caa64ea929036bd11380891ffb07_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/lionel/Projets/souscr_tech_test/Symfony/tech_test/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
