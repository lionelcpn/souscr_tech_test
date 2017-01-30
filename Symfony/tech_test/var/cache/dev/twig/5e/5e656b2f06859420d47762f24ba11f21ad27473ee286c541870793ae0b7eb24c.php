<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_c77f1ec3db1d241ec74821bf3638517286e3991bef0b170432a39d181b3d29da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cbe480ca6ac3d8851ce5bcf17472d9f3d4f47ca2e669b859fef88d741e790a32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbe480ca6ac3d8851ce5bcf17472d9f3d4f47ca2e669b859fef88d741e790a32->enter($__internal_cbe480ca6ac3d8851ce5bcf17472d9f3d4f47ca2e669b859fef88d741e790a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_8b7ff9d2ea0fe15747a700a090f058e2fa577f7a00b07b9da64c25cf393a64cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b7ff9d2ea0fe15747a700a090f058e2fa577f7a00b07b9da64c25cf393a64cd->enter($__internal_8b7ff9d2ea0fe15747a700a090f058e2fa577f7a00b07b9da64c25cf393a64cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbe480ca6ac3d8851ce5bcf17472d9f3d4f47ca2e669b859fef88d741e790a32->leave($__internal_cbe480ca6ac3d8851ce5bcf17472d9f3d4f47ca2e669b859fef88d741e790a32_prof);

        
        $__internal_8b7ff9d2ea0fe15747a700a090f058e2fa577f7a00b07b9da64c25cf393a64cd->leave($__internal_8b7ff9d2ea0fe15747a700a090f058e2fa577f7a00b07b9da64c25cf393a64cd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5befa1d1dd39bdb840b6e257b5f0dc5896ec0aad4ddcfd2bbd0a93fef1d98ad1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5befa1d1dd39bdb840b6e257b5f0dc5896ec0aad4ddcfd2bbd0a93fef1d98ad1->enter($__internal_5befa1d1dd39bdb840b6e257b5f0dc5896ec0aad4ddcfd2bbd0a93fef1d98ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5dd5bd4de5403eb1d0594814e99d3902bd61ffc11f5bcf7cbcfbb3da9ad85f36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dd5bd4de5403eb1d0594814e99d3902bd61ffc11f5bcf7cbcfbb3da9ad85f36->enter($__internal_5dd5bd4de5403eb1d0594814e99d3902bd61ffc11f5bcf7cbcfbb3da9ad85f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_5dd5bd4de5403eb1d0594814e99d3902bd61ffc11f5bcf7cbcfbb3da9ad85f36->leave($__internal_5dd5bd4de5403eb1d0594814e99d3902bd61ffc11f5bcf7cbcfbb3da9ad85f36_prof);

        
        $__internal_5befa1d1dd39bdb840b6e257b5f0dc5896ec0aad4ddcfd2bbd0a93fef1d98ad1->leave($__internal_5befa1d1dd39bdb840b6e257b5f0dc5896ec0aad4ddcfd2bbd0a93fef1d98ad1_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_16af390a180d7e58a0afa1513e02e74d513e2258a9298e5b0c1c91cd151b8738 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16af390a180d7e58a0afa1513e02e74d513e2258a9298e5b0c1c91cd151b8738->enter($__internal_16af390a180d7e58a0afa1513e02e74d513e2258a9298e5b0c1c91cd151b8738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_89f011c48416feadabc3c0e8275ac3489ef78fa90dfe25dfc2b490bc0d63adae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89f011c48416feadabc3c0e8275ac3489ef78fa90dfe25dfc2b490bc0d63adae->enter($__internal_89f011c48416feadabc3c0e8275ac3489ef78fa90dfe25dfc2b490bc0d63adae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_89f011c48416feadabc3c0e8275ac3489ef78fa90dfe25dfc2b490bc0d63adae->leave($__internal_89f011c48416feadabc3c0e8275ac3489ef78fa90dfe25dfc2b490bc0d63adae_prof);

        
        $__internal_16af390a180d7e58a0afa1513e02e74d513e2258a9298e5b0c1c91cd151b8738->leave($__internal_16af390a180d7e58a0afa1513e02e74d513e2258a9298e5b0c1c91cd151b8738_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/home/lionel/Projets/souscr_tech_test/Symfony/tech_test/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
