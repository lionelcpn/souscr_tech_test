<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c04aae403a0f20b772cf8876df3d12a345a6f2d0fc4211b26c942dd4104714b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a285c8d70ffd5ca26bfa12d41ca4406d91c7ba18ee6dcc65bcfa0bbd141ab3e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a285c8d70ffd5ca26bfa12d41ca4406d91c7ba18ee6dcc65bcfa0bbd141ab3e7->enter($__internal_a285c8d70ffd5ca26bfa12d41ca4406d91c7ba18ee6dcc65bcfa0bbd141ab3e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_53e8425e5763c397ba2df6c81472638257ddc175606e418c1a4b985a0b47e679 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53e8425e5763c397ba2df6c81472638257ddc175606e418c1a4b985a0b47e679->enter($__internal_53e8425e5763c397ba2df6c81472638257ddc175606e418c1a4b985a0b47e679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a285c8d70ffd5ca26bfa12d41ca4406d91c7ba18ee6dcc65bcfa0bbd141ab3e7->leave($__internal_a285c8d70ffd5ca26bfa12d41ca4406d91c7ba18ee6dcc65bcfa0bbd141ab3e7_prof);

        
        $__internal_53e8425e5763c397ba2df6c81472638257ddc175606e418c1a4b985a0b47e679->leave($__internal_53e8425e5763c397ba2df6c81472638257ddc175606e418c1a4b985a0b47e679_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_17893ca5f665c832a21d1c149c3b464b4067324cf481365cd17417d6199c826b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17893ca5f665c832a21d1c149c3b464b4067324cf481365cd17417d6199c826b->enter($__internal_17893ca5f665c832a21d1c149c3b464b4067324cf481365cd17417d6199c826b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_75ad30aa0561a59c7fe1de822410e4c21101cc013f075580bce587942d8f8232 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75ad30aa0561a59c7fe1de822410e4c21101cc013f075580bce587942d8f8232->enter($__internal_75ad30aa0561a59c7fe1de822410e4c21101cc013f075580bce587942d8f8232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_75ad30aa0561a59c7fe1de822410e4c21101cc013f075580bce587942d8f8232->leave($__internal_75ad30aa0561a59c7fe1de822410e4c21101cc013f075580bce587942d8f8232_prof);

        
        $__internal_17893ca5f665c832a21d1c149c3b464b4067324cf481365cd17417d6199c826b->leave($__internal_17893ca5f665c832a21d1c149c3b464b4067324cf481365cd17417d6199c826b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2c239768535b74a18198b3de3db20507797c6b190e37c090d86bb686cdc2643d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c239768535b74a18198b3de3db20507797c6b190e37c090d86bb686cdc2643d->enter($__internal_2c239768535b74a18198b3de3db20507797c6b190e37c090d86bb686cdc2643d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_84e694896fc111c4247a386e6f32ffcf5f11513049eb21f4e1c85a98300d60fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84e694896fc111c4247a386e6f32ffcf5f11513049eb21f4e1c85a98300d60fc->enter($__internal_84e694896fc111c4247a386e6f32ffcf5f11513049eb21f4e1c85a98300d60fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_84e694896fc111c4247a386e6f32ffcf5f11513049eb21f4e1c85a98300d60fc->leave($__internal_84e694896fc111c4247a386e6f32ffcf5f11513049eb21f4e1c85a98300d60fc_prof);

        
        $__internal_2c239768535b74a18198b3de3db20507797c6b190e37c090d86bb686cdc2643d->leave($__internal_2c239768535b74a18198b3de3db20507797c6b190e37c090d86bb686cdc2643d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_84c1082b2857c94bbf499a245013365e75db27eb2266ec0d079967bd17ce60b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84c1082b2857c94bbf499a245013365e75db27eb2266ec0d079967bd17ce60b8->enter($__internal_84c1082b2857c94bbf499a245013365e75db27eb2266ec0d079967bd17ce60b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e55a9efbde1bd45be56c7f9f754940db10aaa70c60e1b0c3226e82cb32a8dde7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e55a9efbde1bd45be56c7f9f754940db10aaa70c60e1b0c3226e82cb32a8dde7->enter($__internal_e55a9efbde1bd45be56c7f9f754940db10aaa70c60e1b0c3226e82cb32a8dde7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e55a9efbde1bd45be56c7f9f754940db10aaa70c60e1b0c3226e82cb32a8dde7->leave($__internal_e55a9efbde1bd45be56c7f9f754940db10aaa70c60e1b0c3226e82cb32a8dde7_prof);

        
        $__internal_84c1082b2857c94bbf499a245013365e75db27eb2266ec0d079967bd17ce60b8->leave($__internal_84c1082b2857c94bbf499a245013365e75db27eb2266ec0d079967bd17ce60b8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/lionel/Projets/souscr_tech_test/Symfony/tech_test/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
