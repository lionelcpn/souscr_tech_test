<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_16f81aababb64102ebf223bc3f88038d70b8a167117a46a86fee760c718016dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_55246071ad61c607cc9052bff83b6ec07389e9cdb079061404649e3b3a6c0c46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55246071ad61c607cc9052bff83b6ec07389e9cdb079061404649e3b3a6c0c46->enter($__internal_55246071ad61c607cc9052bff83b6ec07389e9cdb079061404649e3b3a6c0c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_fa2a08cd074f6834a4af00083cfc165071997a0a504f5a6baf4b289cb1800b75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa2a08cd074f6834a4af00083cfc165071997a0a504f5a6baf4b289cb1800b75->enter($__internal_fa2a08cd074f6834a4af00083cfc165071997a0a504f5a6baf4b289cb1800b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55246071ad61c607cc9052bff83b6ec07389e9cdb079061404649e3b3a6c0c46->leave($__internal_55246071ad61c607cc9052bff83b6ec07389e9cdb079061404649e3b3a6c0c46_prof);

        
        $__internal_fa2a08cd074f6834a4af00083cfc165071997a0a504f5a6baf4b289cb1800b75->leave($__internal_fa2a08cd074f6834a4af00083cfc165071997a0a504f5a6baf4b289cb1800b75_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_be31f95724fadf8ff2a8ea9fa25271d68113c92009479c5275c98bd8d4a96276 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be31f95724fadf8ff2a8ea9fa25271d68113c92009479c5275c98bd8d4a96276->enter($__internal_be31f95724fadf8ff2a8ea9fa25271d68113c92009479c5275c98bd8d4a96276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5c30b7f29fac11f856c7ffba30e4b852d04e4bcfb77bce02f7d12463b8da3350 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c30b7f29fac11f856c7ffba30e4b852d04e4bcfb77bce02f7d12463b8da3350->enter($__internal_5c30b7f29fac11f856c7ffba30e4b852d04e4bcfb77bce02f7d12463b8da3350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_5c30b7f29fac11f856c7ffba30e4b852d04e4bcfb77bce02f7d12463b8da3350->leave($__internal_5c30b7f29fac11f856c7ffba30e4b852d04e4bcfb77bce02f7d12463b8da3350_prof);

        
        $__internal_be31f95724fadf8ff2a8ea9fa25271d68113c92009479c5275c98bd8d4a96276->leave($__internal_be31f95724fadf8ff2a8ea9fa25271d68113c92009479c5275c98bd8d4a96276_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a3f91743e68600b2c4fe0ed8be897677c3a1e81d57fff261399b21d79eb310a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3f91743e68600b2c4fe0ed8be897677c3a1e81d57fff261399b21d79eb310a1->enter($__internal_a3f91743e68600b2c4fe0ed8be897677c3a1e81d57fff261399b21d79eb310a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a082dcb1a8e5a206a4ed9185cfbc866ec2c1fe9320b928696f790e2d196ec6ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a082dcb1a8e5a206a4ed9185cfbc866ec2c1fe9320b928696f790e2d196ec6ce->enter($__internal_a082dcb1a8e5a206a4ed9185cfbc866ec2c1fe9320b928696f790e2d196ec6ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_a082dcb1a8e5a206a4ed9185cfbc866ec2c1fe9320b928696f790e2d196ec6ce->leave($__internal_a082dcb1a8e5a206a4ed9185cfbc866ec2c1fe9320b928696f790e2d196ec6ce_prof);

        
        $__internal_a3f91743e68600b2c4fe0ed8be897677c3a1e81d57fff261399b21d79eb310a1->leave($__internal_a3f91743e68600b2c4fe0ed8be897677c3a1e81d57fff261399b21d79eb310a1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6ddfcd4de5543a8636028bb6cb7da4e205887968ab5a614d2f9a4deec07eca61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ddfcd4de5543a8636028bb6cb7da4e205887968ab5a614d2f9a4deec07eca61->enter($__internal_6ddfcd4de5543a8636028bb6cb7da4e205887968ab5a614d2f9a4deec07eca61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_077efab1c48cdcd3c4d100c4477cc23562e638dc10141c9473e4ae8e75298c8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_077efab1c48cdcd3c4d100c4477cc23562e638dc10141c9473e4ae8e75298c8e->enter($__internal_077efab1c48cdcd3c4d100c4477cc23562e638dc10141c9473e4ae8e75298c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_077efab1c48cdcd3c4d100c4477cc23562e638dc10141c9473e4ae8e75298c8e->leave($__internal_077efab1c48cdcd3c4d100c4477cc23562e638dc10141c9473e4ae8e75298c8e_prof);

        
        $__internal_6ddfcd4de5543a8636028bb6cb7da4e205887968ab5a614d2f9a4deec07eca61->leave($__internal_6ddfcd4de5543a8636028bb6cb7da4e205887968ab5a614d2f9a4deec07eca61_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/lionel/Projets/souscr_tech_test/Symfony/tech_test/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
