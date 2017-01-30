<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_24831c6ba30ce9f4a261116c59c41da6bba0bae7ad183a78fd8b747b290e5c2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7a4a97e73d51c0bf1b92e329f607d4bd208db7dd5ea383e2d11774fc3a5ae51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7a4a97e73d51c0bf1b92e329f607d4bd208db7dd5ea383e2d11774fc3a5ae51->enter($__internal_d7a4a97e73d51c0bf1b92e329f607d4bd208db7dd5ea383e2d11774fc3a5ae51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_6c35860f564fbdac838d004ebb2c29c8e904bfae1e1d3e1199476cb9865ed956 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c35860f564fbdac838d004ebb2c29c8e904bfae1e1d3e1199476cb9865ed956->enter($__internal_6c35860f564fbdac838d004ebb2c29c8e904bfae1e1d3e1199476cb9865ed956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7a4a97e73d51c0bf1b92e329f607d4bd208db7dd5ea383e2d11774fc3a5ae51->leave($__internal_d7a4a97e73d51c0bf1b92e329f607d4bd208db7dd5ea383e2d11774fc3a5ae51_prof);

        
        $__internal_6c35860f564fbdac838d004ebb2c29c8e904bfae1e1d3e1199476cb9865ed956->leave($__internal_6c35860f564fbdac838d004ebb2c29c8e904bfae1e1d3e1199476cb9865ed956_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a5c14fc8ea78ca9e861e02bb9658dc8b635447cd741b805c968d362f6675e4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a5c14fc8ea78ca9e861e02bb9658dc8b635447cd741b805c968d362f6675e4f->enter($__internal_7a5c14fc8ea78ca9e861e02bb9658dc8b635447cd741b805c968d362f6675e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1f38e18bbe43393848430835109d073f26f7de4eab15c898be9abfa091d5c7c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f38e18bbe43393848430835109d073f26f7de4eab15c898be9abfa091d5c7c8->enter($__internal_1f38e18bbe43393848430835109d073f26f7de4eab15c898be9abfa091d5c7c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1f38e18bbe43393848430835109d073f26f7de4eab15c898be9abfa091d5c7c8->leave($__internal_1f38e18bbe43393848430835109d073f26f7de4eab15c898be9abfa091d5c7c8_prof);

        
        $__internal_7a5c14fc8ea78ca9e861e02bb9658dc8b635447cd741b805c968d362f6675e4f->leave($__internal_7a5c14fc8ea78ca9e861e02bb9658dc8b635447cd741b805c968d362f6675e4f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b68dbd4a0bff5a17007b99c5bd13fc471448fcb40157cca8e1e79110fce954ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b68dbd4a0bff5a17007b99c5bd13fc471448fcb40157cca8e1e79110fce954ad->enter($__internal_b68dbd4a0bff5a17007b99c5bd13fc471448fcb40157cca8e1e79110fce954ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0812425c296cea14ff7cfa4ebba9f630e3a35059618f13b594579d55252cc35b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0812425c296cea14ff7cfa4ebba9f630e3a35059618f13b594579d55252cc35b->enter($__internal_0812425c296cea14ff7cfa4ebba9f630e3a35059618f13b594579d55252cc35b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_0812425c296cea14ff7cfa4ebba9f630e3a35059618f13b594579d55252cc35b->leave($__internal_0812425c296cea14ff7cfa4ebba9f630e3a35059618f13b594579d55252cc35b_prof);

        
        $__internal_b68dbd4a0bff5a17007b99c5bd13fc471448fcb40157cca8e1e79110fce954ad->leave($__internal_b68dbd4a0bff5a17007b99c5bd13fc471448fcb40157cca8e1e79110fce954ad_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/lionel/Projets/souscr_tech_test/Symfony/tech_test/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
