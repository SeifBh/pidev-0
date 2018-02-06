<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_a3dabe89fce5c51ecf1e49d6904d5be213db93448d3a9780f6d109c4a8f0f130 extends Twig_Template
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
        $__internal_295fc98fb4e60a8dd15ad14d980b4dfdd8dc2f8e6936d48712cf41e586e0ef3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_295fc98fb4e60a8dd15ad14d980b4dfdd8dc2f8e6936d48712cf41e586e0ef3b->enter($__internal_295fc98fb4e60a8dd15ad14d980b4dfdd8dc2f8e6936d48712cf41e586e0ef3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_4f6ad6d31f6b7c188e0e106a99f5c8aeb2a3216bbdeec93279d6b73eb142ae04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f6ad6d31f6b7c188e0e106a99f5c8aeb2a3216bbdeec93279d6b73eb142ae04->enter($__internal_4f6ad6d31f6b7c188e0e106a99f5c8aeb2a3216bbdeec93279d6b73eb142ae04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_295fc98fb4e60a8dd15ad14d980b4dfdd8dc2f8e6936d48712cf41e586e0ef3b->leave($__internal_295fc98fb4e60a8dd15ad14d980b4dfdd8dc2f8e6936d48712cf41e586e0ef3b_prof);

        
        $__internal_4f6ad6d31f6b7c188e0e106a99f5c8aeb2a3216bbdeec93279d6b73eb142ae04->leave($__internal_4f6ad6d31f6b7c188e0e106a99f5c8aeb2a3216bbdeec93279d6b73eb142ae04_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b173a0d73c818f0fc9614844a8ee3ccefd80f40cbf00a853a84c98f46f7fcf8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b173a0d73c818f0fc9614844a8ee3ccefd80f40cbf00a853a84c98f46f7fcf8f->enter($__internal_b173a0d73c818f0fc9614844a8ee3ccefd80f40cbf00a853a84c98f46f7fcf8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_adece6ed51c3f8e37a8dcf495d8fbb809db68992fc4a37ad41f132fa4ef2b3ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adece6ed51c3f8e37a8dcf495d8fbb809db68992fc4a37ad41f132fa4ef2b3ac->enter($__internal_adece6ed51c3f8e37a8dcf495d8fbb809db68992fc4a37ad41f132fa4ef2b3ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_adece6ed51c3f8e37a8dcf495d8fbb809db68992fc4a37ad41f132fa4ef2b3ac->leave($__internal_adece6ed51c3f8e37a8dcf495d8fbb809db68992fc4a37ad41f132fa4ef2b3ac_prof);

        
        $__internal_b173a0d73c818f0fc9614844a8ee3ccefd80f40cbf00a853a84c98f46f7fcf8f->leave($__internal_b173a0d73c818f0fc9614844a8ee3ccefd80f40cbf00a853a84c98f46f7fcf8f_prof);

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
", "@FOSUser/Registration/confirmed.html.twig", "C:\\wamp64\\www\\pidev\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\confirmed.html.twig");
    }
}
