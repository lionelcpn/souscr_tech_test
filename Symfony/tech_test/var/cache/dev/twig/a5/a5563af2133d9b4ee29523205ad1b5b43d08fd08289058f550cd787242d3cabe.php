<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_35d98a022057ca5bdfc03d9ffba3c0e8600495754e41c1bb6f80f952b9e68132 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_02f2ba6014e956f21443a37d11f1b2b5aa91e23017634dbe7001a225273381b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02f2ba6014e956f21443a37d11f1b2b5aa91e23017634dbe7001a225273381b9->enter($__internal_02f2ba6014e956f21443a37d11f1b2b5aa91e23017634dbe7001a225273381b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_e9d484497e86d93ae802f4be5854c12081894ec996af6132dc47c7fd191da466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9d484497e86d93ae802f4be5854c12081894ec996af6132dc47c7fd191da466->enter($__internal_e9d484497e86d93ae802f4be5854c12081894ec996af6132dc47c7fd191da466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_02f2ba6014e956f21443a37d11f1b2b5aa91e23017634dbe7001a225273381b9->leave($__internal_02f2ba6014e956f21443a37d11f1b2b5aa91e23017634dbe7001a225273381b9_prof);

        
        $__internal_e9d484497e86d93ae802f4be5854c12081894ec996af6132dc47c7fd191da466->leave($__internal_e9d484497e86d93ae802f4be5854c12081894ec996af6132dc47c7fd191da466_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f9a025187b2f3e14801a2c79e25ef1517738a9d1089a20ac59884eb58a125bc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9a025187b2f3e14801a2c79e25ef1517738a9d1089a20ac59884eb58a125bc3->enter($__internal_f9a025187b2f3e14801a2c79e25ef1517738a9d1089a20ac59884eb58a125bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dc64d2f281b5a0d6e883530203ee886fe591b574de1c8a2e8a27350f5e3b62d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc64d2f281b5a0d6e883530203ee886fe591b574de1c8a2e8a27350f5e3b62d9->enter($__internal_dc64d2f281b5a0d6e883530203ee886fe591b574de1c8a2e8a27350f5e3b62d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_dc64d2f281b5a0d6e883530203ee886fe591b574de1c8a2e8a27350f5e3b62d9->leave($__internal_dc64d2f281b5a0d6e883530203ee886fe591b574de1c8a2e8a27350f5e3b62d9_prof);

        
        $__internal_f9a025187b2f3e14801a2c79e25ef1517738a9d1089a20ac59884eb58a125bc3->leave($__internal_f9a025187b2f3e14801a2c79e25ef1517738a9d1089a20ac59884eb58a125bc3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/lionel/Projets/souscr_tech_test/Symfony/tech_test/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
