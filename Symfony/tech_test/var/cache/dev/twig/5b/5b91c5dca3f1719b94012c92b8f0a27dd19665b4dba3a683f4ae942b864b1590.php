<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_9d501caf755403338fee31fcd96c6a0e4dac6912f9aa46fcb3c2499266ad6277 extends Twig_Template
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
        $__internal_4a27ddc47aedd8d43da5caecfe15902f004b7863964d68944a9dd135628a1695 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a27ddc47aedd8d43da5caecfe15902f004b7863964d68944a9dd135628a1695->enter($__internal_4a27ddc47aedd8d43da5caecfe15902f004b7863964d68944a9dd135628a1695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_d6f34a90bd41c98b2011e8991d7514cff154128481082dbaae015d6554537203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6f34a90bd41c98b2011e8991d7514cff154128481082dbaae015d6554537203->enter($__internal_d6f34a90bd41c98b2011e8991d7514cff154128481082dbaae015d6554537203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_4a27ddc47aedd8d43da5caecfe15902f004b7863964d68944a9dd135628a1695->leave($__internal_4a27ddc47aedd8d43da5caecfe15902f004b7863964d68944a9dd135628a1695_prof);

        
        $__internal_d6f34a90bd41c98b2011e8991d7514cff154128481082dbaae015d6554537203->leave($__internal_d6f34a90bd41c98b2011e8991d7514cff154128481082dbaae015d6554537203_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/lionel/Projets/souscr_tech_test/Symfony/tech_test/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
