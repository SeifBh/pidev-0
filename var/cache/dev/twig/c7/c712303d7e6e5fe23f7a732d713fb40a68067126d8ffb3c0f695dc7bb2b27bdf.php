<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_8593b0bf5111e5c9935022404bd5033b8acf79734ca775798d3a7cc5bd92d9d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_67fc13f01eb01edc29e2e93005250df56108140583d33e01a7869c9e59402ed3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67fc13f01eb01edc29e2e93005250df56108140583d33e01a7869c9e59402ed3->enter($__internal_67fc13f01eb01edc29e2e93005250df56108140583d33e01a7869c9e59402ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_5eda73a9b9fe34614e9ab6d5e15a4ff8329e3398d2172208f0501fa6c506b92e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eda73a9b9fe34614e9ab6d5e15a4ff8329e3398d2172208f0501fa6c506b92e->enter($__internal_5eda73a9b9fe34614e9ab6d5e15a4ff8329e3398d2172208f0501fa6c506b92e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67fc13f01eb01edc29e2e93005250df56108140583d33e01a7869c9e59402ed3->leave($__internal_67fc13f01eb01edc29e2e93005250df56108140583d33e01a7869c9e59402ed3_prof);

        
        $__internal_5eda73a9b9fe34614e9ab6d5e15a4ff8329e3398d2172208f0501fa6c506b92e->leave($__internal_5eda73a9b9fe34614e9ab6d5e15a4ff8329e3398d2172208f0501fa6c506b92e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8129fcaa588fc2ea04eb5fb5b2b5a8e5d48422068f88ae21ea15562ecb335464 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8129fcaa588fc2ea04eb5fb5b2b5a8e5d48422068f88ae21ea15562ecb335464->enter($__internal_8129fcaa588fc2ea04eb5fb5b2b5a8e5d48422068f88ae21ea15562ecb335464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5e4b578cbe08dbb8fca436539ce927eb3166b8053067af9684d257844ff0be88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e4b578cbe08dbb8fca436539ce927eb3166b8053067af9684d257844ff0be88->enter($__internal_5e4b578cbe08dbb8fca436539ce927eb3166b8053067af9684d257844ff0be88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 7, $this->getSourceContext()); })())) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_5e4b578cbe08dbb8fca436539ce927eb3166b8053067af9684d257844ff0be88->leave($__internal_5e4b578cbe08dbb8fca436539ce927eb3166b8053067af9684d257844ff0be88_prof);

        
        $__internal_8129fcaa588fc2ea04eb5fb5b2b5a8e5d48422068f88ae21ea15562ecb335464->leave($__internal_8129fcaa588fc2ea04eb5fb5b2b5a8e5d48422068f88ae21ea15562ecb335464_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "C:\\wamp64\\www\\pidev\\src\\EspritEntreAide\\UserBundle\\Resources\\views\\Registration\\confirmed.html.twig");
    }
}
