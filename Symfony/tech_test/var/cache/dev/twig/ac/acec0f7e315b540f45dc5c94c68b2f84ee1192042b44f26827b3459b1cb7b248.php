<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_1057a5406f98737a0f6aa607744cdb59f9a16d0d40bace90531ae11e5284e2bb extends Twig_Template
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
        $__internal_5dfb06af2dbc4571951867fc4d73d74f233c51bfae59524634d0910c41cf6bb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dfb06af2dbc4571951867fc4d73d74f233c51bfae59524634d0910c41cf6bb5->enter($__internal_5dfb06af2dbc4571951867fc4d73d74f233c51bfae59524634d0910c41cf6bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_06dbd81e44cefc2abe1797fd893d1f2e9d65380a9ead91ff3f59da189b20a17e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06dbd81e44cefc2abe1797fd893d1f2e9d65380a9ead91ff3f59da189b20a17e->enter($__internal_06dbd81e44cefc2abe1797fd893d1f2e9d65380a9ead91ff3f59da189b20a17e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_5dfb06af2dbc4571951867fc4d73d74f233c51bfae59524634d0910c41cf6bb5->leave($__internal_5dfb06af2dbc4571951867fc4d73d74f233c51bfae59524634d0910c41cf6bb5_prof);

        
        $__internal_06dbd81e44cefc2abe1797fd893d1f2e9d65380a9ead91ff3f59da189b20a17e->leave($__internal_06dbd81e44cefc2abe1797fd893d1f2e9d65380a9ead91ff3f59da189b20a17e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/lionel/Projets/souscr_tech_test/Symfony/tech_test/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
