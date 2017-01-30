<?php

/* base.html.twig */
class __TwigTemplate_46ec375f9412574a4b1648f4d27c7e0c4c3693fb4dba3003e23cdbf45b02ddb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0371ec9901acf13e9a5c062b3e4dfe7987ae8ad261343cb2ce25e0f32fe43dea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0371ec9901acf13e9a5c062b3e4dfe7987ae8ad261343cb2ce25e0f32fe43dea->enter($__internal_0371ec9901acf13e9a5c062b3e4dfe7987ae8ad261343cb2ce25e0f32fe43dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_e85d96d61aa46a87e2295008ed1062a3557c02877137ad331d4b15fbf8364706 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e85d96d61aa46a87e2295008ed1062a3557c02877137ad331d4b15fbf8364706->enter($__internal_e85d96d61aa46a87e2295008ed1062a3557c02877137ad331d4b15fbf8364706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_0371ec9901acf13e9a5c062b3e4dfe7987ae8ad261343cb2ce25e0f32fe43dea->leave($__internal_0371ec9901acf13e9a5c062b3e4dfe7987ae8ad261343cb2ce25e0f32fe43dea_prof);

        
        $__internal_e85d96d61aa46a87e2295008ed1062a3557c02877137ad331d4b15fbf8364706->leave($__internal_e85d96d61aa46a87e2295008ed1062a3557c02877137ad331d4b15fbf8364706_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a0d433f523e2146dcbd76ae38ebd3deb7110b6fa77eb3c975ec88015f56b67a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a0d433f523e2146dcbd76ae38ebd3deb7110b6fa77eb3c975ec88015f56b67a->enter($__internal_5a0d433f523e2146dcbd76ae38ebd3deb7110b6fa77eb3c975ec88015f56b67a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1da6ebea1ef2b07c8b432ad77c5c687d3c6aacca672084c9f47d1cc93e96a3f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1da6ebea1ef2b07c8b432ad77c5c687d3c6aacca672084c9f47d1cc93e96a3f2->enter($__internal_1da6ebea1ef2b07c8b432ad77c5c687d3c6aacca672084c9f47d1cc93e96a3f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1da6ebea1ef2b07c8b432ad77c5c687d3c6aacca672084c9f47d1cc93e96a3f2->leave($__internal_1da6ebea1ef2b07c8b432ad77c5c687d3c6aacca672084c9f47d1cc93e96a3f2_prof);

        
        $__internal_5a0d433f523e2146dcbd76ae38ebd3deb7110b6fa77eb3c975ec88015f56b67a->leave($__internal_5a0d433f523e2146dcbd76ae38ebd3deb7110b6fa77eb3c975ec88015f56b67a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_79ce1bd2868bc7bc5adb95876abbffe09c1bbfce074d9b01ada6d66bbabd4a27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79ce1bd2868bc7bc5adb95876abbffe09c1bbfce074d9b01ada6d66bbabd4a27->enter($__internal_79ce1bd2868bc7bc5adb95876abbffe09c1bbfce074d9b01ada6d66bbabd4a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e3ffdd1d70d18bd058dd8662a24c1d7b183360d43527d2ee43347efa5fab5613 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3ffdd1d70d18bd058dd8662a24c1d7b183360d43527d2ee43347efa5fab5613->enter($__internal_e3ffdd1d70d18bd058dd8662a24c1d7b183360d43527d2ee43347efa5fab5613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e3ffdd1d70d18bd058dd8662a24c1d7b183360d43527d2ee43347efa5fab5613->leave($__internal_e3ffdd1d70d18bd058dd8662a24c1d7b183360d43527d2ee43347efa5fab5613_prof);

        
        $__internal_79ce1bd2868bc7bc5adb95876abbffe09c1bbfce074d9b01ada6d66bbabd4a27->leave($__internal_79ce1bd2868bc7bc5adb95876abbffe09c1bbfce074d9b01ada6d66bbabd4a27_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b5e9af7896e21655e916c5de31b3df73ead9d714eecc3d4d00f7b32b5f4337b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b5e9af7896e21655e916c5de31b3df73ead9d714eecc3d4d00f7b32b5f4337b->enter($__internal_0b5e9af7896e21655e916c5de31b3df73ead9d714eecc3d4d00f7b32b5f4337b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eb132db7c1cbcf09c947c3a8243c83797944a97b3d9ad9228ccb49fcd3ab917e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb132db7c1cbcf09c947c3a8243c83797944a97b3d9ad9228ccb49fcd3ab917e->enter($__internal_eb132db7c1cbcf09c947c3a8243c83797944a97b3d9ad9228ccb49fcd3ab917e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_eb132db7c1cbcf09c947c3a8243c83797944a97b3d9ad9228ccb49fcd3ab917e->leave($__internal_eb132db7c1cbcf09c947c3a8243c83797944a97b3d9ad9228ccb49fcd3ab917e_prof);

        
        $__internal_0b5e9af7896e21655e916c5de31b3df73ead9d714eecc3d4d00f7b32b5f4337b->leave($__internal_0b5e9af7896e21655e916c5de31b3df73ead9d714eecc3d4d00f7b32b5f4337b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3c9bf7622d726a724e3abda998e66c5ede7454a7ac91f68661414b411940e9cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c9bf7622d726a724e3abda998e66c5ede7454a7ac91f68661414b411940e9cc->enter($__internal_3c9bf7622d726a724e3abda998e66c5ede7454a7ac91f68661414b411940e9cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ca4a0e9de939491c7bf9ff6aefe517bfa9ea12ce020e79ed28fe60d4994cca42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca4a0e9de939491c7bf9ff6aefe517bfa9ea12ce020e79ed28fe60d4994cca42->enter($__internal_ca4a0e9de939491c7bf9ff6aefe517bfa9ea12ce020e79ed28fe60d4994cca42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ca4a0e9de939491c7bf9ff6aefe517bfa9ea12ce020e79ed28fe60d4994cca42->leave($__internal_ca4a0e9de939491c7bf9ff6aefe517bfa9ea12ce020e79ed28fe60d4994cca42_prof);

        
        $__internal_3c9bf7622d726a724e3abda998e66c5ede7454a7ac91f68661414b411940e9cc->leave($__internal_3c9bf7622d726a724e3abda998e66c5ede7454a7ac91f68661414b411940e9cc_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/lionel/Projets/souscr_tech_test/Symfony/tech_test/app/Resources/views/base.html.twig");
    }
}
