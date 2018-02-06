<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_5335ec8b26f1135b6bef20173fb8b73a9cb65aa2c214e6c1148dc36b40858f03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_461affda2ce74950bdc3febeb09d25f3e55066ca1ea3e0f59f45c8e8b61d0348 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_461affda2ce74950bdc3febeb09d25f3e55066ca1ea3e0f59f45c8e8b61d0348->enter($__internal_461affda2ce74950bdc3febeb09d25f3e55066ca1ea3e0f59f45c8e8b61d0348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_8e24e4fb2595b85993f0ad270f11d302aece988f5aa020d9b85840157697deec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e24e4fb2595b85993f0ad270f11d302aece988f5aa020d9b85840157697deec->enter($__internal_8e24e4fb2595b85993f0ad270f11d302aece988f5aa020d9b85840157697deec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_461affda2ce74950bdc3febeb09d25f3e55066ca1ea3e0f59f45c8e8b61d0348->leave($__internal_461affda2ce74950bdc3febeb09d25f3e55066ca1ea3e0f59f45c8e8b61d0348_prof);

        
        $__internal_8e24e4fb2595b85993f0ad270f11d302aece988f5aa020d9b85840157697deec->leave($__internal_8e24e4fb2595b85993f0ad270f11d302aece988f5aa020d9b85840157697deec_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9f1a7e3ddf83fc9fff84dd43f6cd1bc3f2e8dd0bb2ce9a5b81e5543f7dd1c912 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f1a7e3ddf83fc9fff84dd43f6cd1bc3f2e8dd0bb2ce9a5b81e5543f7dd1c912->enter($__internal_9f1a7e3ddf83fc9fff84dd43f6cd1bc3f2e8dd0bb2ce9a5b81e5543f7dd1c912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_27b32028a1c9c324393363d0f1ba1b07ee854a17845704764bc5c09ab858f3a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27b32028a1c9c324393363d0f1ba1b07ee854a17845704764bc5c09ab858f3a7->enter($__internal_27b32028a1c9c324393363d0f1ba1b07ee854a17845704764bc5c09ab858f3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_27b32028a1c9c324393363d0f1ba1b07ee854a17845704764bc5c09ab858f3a7->leave($__internal_27b32028a1c9c324393363d0f1ba1b07ee854a17845704764bc5c09ab858f3a7_prof);

        
        $__internal_9f1a7e3ddf83fc9fff84dd43f6cd1bc3f2e8dd0bb2ce9a5b81e5543f7dd1c912->leave($__internal_9f1a7e3ddf83fc9fff84dd43f6cd1bc3f2e8dd0bb2ce9a5b81e5543f7dd1c912_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\pidev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
