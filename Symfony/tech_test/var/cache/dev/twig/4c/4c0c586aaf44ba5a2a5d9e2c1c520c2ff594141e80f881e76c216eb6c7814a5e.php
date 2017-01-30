<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_dcf09ef115ad475e35053e1e75acf96a2b5ea8f24c2a89da80af25d647968159 extends Twig_Template
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
        $__internal_e4af44739dbef5a354e2c5d868eb2b2aa55bef79f1b9e8793b6ba40e49117055 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4af44739dbef5a354e2c5d868eb2b2aa55bef79f1b9e8793b6ba40e49117055->enter($__internal_e4af44739dbef5a354e2c5d868eb2b2aa55bef79f1b9e8793b6ba40e49117055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_98610895d510194636719b37ea4dee377694e5d3db938cad2a3b581d7fa11439 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98610895d510194636719b37ea4dee377694e5d3db938cad2a3b581d7fa11439->enter($__internal_98610895d510194636719b37ea4dee377694e5d3db938cad2a3b581d7fa11439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_e4af44739dbef5a354e2c5d868eb2b2aa55bef79f1b9e8793b6ba40e49117055->leave($__internal_e4af44739dbef5a354e2c5d868eb2b2aa55bef79f1b9e8793b6ba40e49117055_prof);

        
        $__internal_98610895d510194636719b37ea4dee377694e5d3db938cad2a3b581d7fa11439->leave($__internal_98610895d510194636719b37ea4dee377694e5d3db938cad2a3b581d7fa11439_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/lionel/Projets/souscr_tech_test/Symfony/tech_test/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
