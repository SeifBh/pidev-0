<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_c6aed177d5827080026081dd505fedfc39df6031e6128ca87a4a431035bb4fdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_8015dcee0a3da9cebc62bbb7a0c4eb3618db575d639a2b12a80495817462844b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8015dcee0a3da9cebc62bbb7a0c4eb3618db575d639a2b12a80495817462844b->enter($__internal_8015dcee0a3da9cebc62bbb7a0c4eb3618db575d639a2b12a80495817462844b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_6cdc837441d18eba78e292f6598a5354e2e0cfbb66c2952ded8fe14f48eaa8db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cdc837441d18eba78e292f6598a5354e2e0cfbb66c2952ded8fe14f48eaa8db->enter($__internal_6cdc837441d18eba78e292f6598a5354e2e0cfbb66c2952ded8fe14f48eaa8db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8015dcee0a3da9cebc62bbb7a0c4eb3618db575d639a2b12a80495817462844b->leave($__internal_8015dcee0a3da9cebc62bbb7a0c4eb3618db575d639a2b12a80495817462844b_prof);

        
        $__internal_6cdc837441d18eba78e292f6598a5354e2e0cfbb66c2952ded8fe14f48eaa8db->leave($__internal_6cdc837441d18eba78e292f6598a5354e2e0cfbb66c2952ded8fe14f48eaa8db_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_492cd65c0a44c675f644a56569f7d0254d88366fb4afe228a4f080424a56711d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_492cd65c0a44c675f644a56569f7d0254d88366fb4afe228a4f080424a56711d->enter($__internal_492cd65c0a44c675f644a56569f7d0254d88366fb4afe228a4f080424a56711d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_dde20b28b770eb6c7b3ce52a75670eeb262f81f357fae21a37c0f9dab33f1346 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dde20b28b770eb6c7b3ce52a75670eeb262f81f357fae21a37c0f9dab33f1346->enter($__internal_dde20b28b770eb6c7b3ce52a75670eeb262f81f357fae21a37c0f9dab33f1346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_dde20b28b770eb6c7b3ce52a75670eeb262f81f357fae21a37c0f9dab33f1346->leave($__internal_dde20b28b770eb6c7b3ce52a75670eeb262f81f357fae21a37c0f9dab33f1346_prof);

        
        $__internal_492cd65c0a44c675f644a56569f7d0254d88366fb4afe228a4f080424a56711d->leave($__internal_492cd65c0a44c675f644a56569f7d0254d88366fb4afe228a4f080424a56711d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\wamp64\\www\\pidev\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
