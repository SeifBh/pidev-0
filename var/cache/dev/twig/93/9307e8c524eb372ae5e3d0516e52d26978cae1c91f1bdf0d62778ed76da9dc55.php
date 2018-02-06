<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_cf7d45a091fd43d41052341793089a8e70ac24030e8a73c06f8ebedb46198c8a extends Twig_Template
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
        $__internal_43e6e15cb765aca26157da578d8fbd75f10d1c743176f5ee719a1da0da6fcedb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43e6e15cb765aca26157da578d8fbd75f10d1c743176f5ee719a1da0da6fcedb->enter($__internal_43e6e15cb765aca26157da578d8fbd75f10d1c743176f5ee719a1da0da6fcedb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d414e6adb4607c287660666a7a7b3556b8db3357ae07a1e81037af4545079135 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d414e6adb4607c287660666a7a7b3556b8db3357ae07a1e81037af4545079135->enter($__internal_d414e6adb4607c287660666a7a7b3556b8db3357ae07a1e81037af4545079135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43e6e15cb765aca26157da578d8fbd75f10d1c743176f5ee719a1da0da6fcedb->leave($__internal_43e6e15cb765aca26157da578d8fbd75f10d1c743176f5ee719a1da0da6fcedb_prof);

        
        $__internal_d414e6adb4607c287660666a7a7b3556b8db3357ae07a1e81037af4545079135->leave($__internal_d414e6adb4607c287660666a7a7b3556b8db3357ae07a1e81037af4545079135_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8774deedddd5d8f62ac26df8509d01e134d47ee8aa6504755bb97640b8b6be0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8774deedddd5d8f62ac26df8509d01e134d47ee8aa6504755bb97640b8b6be0f->enter($__internal_8774deedddd5d8f62ac26df8509d01e134d47ee8aa6504755bb97640b8b6be0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e68561f249f5987802949d006706134201b39bb7d7986892e5eb3eadc5ef7d50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e68561f249f5987802949d006706134201b39bb7d7986892e5eb3eadc5ef7d50->enter($__internal_e68561f249f5987802949d006706134201b39bb7d7986892e5eb3eadc5ef7d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e68561f249f5987802949d006706134201b39bb7d7986892e5eb3eadc5ef7d50->leave($__internal_e68561f249f5987802949d006706134201b39bb7d7986892e5eb3eadc5ef7d50_prof);

        
        $__internal_8774deedddd5d8f62ac26df8509d01e134d47ee8aa6504755bb97640b8b6be0f->leave($__internal_8774deedddd5d8f62ac26df8509d01e134d47ee8aa6504755bb97640b8b6be0f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2b97e3acbf0a8aa5cc6f42677852e35ac8ab99366896e1ac147f17f6f8eb9627 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b97e3acbf0a8aa5cc6f42677852e35ac8ab99366896e1ac147f17f6f8eb9627->enter($__internal_2b97e3acbf0a8aa5cc6f42677852e35ac8ab99366896e1ac147f17f6f8eb9627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8fd23ea15a8da3061b92a2525291d972fd2620777b299b7ab3f0be78bdbe88a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fd23ea15a8da3061b92a2525291d972fd2620777b299b7ab3f0be78bdbe88a5->enter($__internal_8fd23ea15a8da3061b92a2525291d972fd2620777b299b7ab3f0be78bdbe88a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8fd23ea15a8da3061b92a2525291d972fd2620777b299b7ab3f0be78bdbe88a5->leave($__internal_8fd23ea15a8da3061b92a2525291d972fd2620777b299b7ab3f0be78bdbe88a5_prof);

        
        $__internal_2b97e3acbf0a8aa5cc6f42677852e35ac8ab99366896e1ac147f17f6f8eb9627->leave($__internal_2b97e3acbf0a8aa5cc6f42677852e35ac8ab99366896e1ac147f17f6f8eb9627_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8aa4600ece05cda3899c640d886af88250ae0d7cf1443ff2ef72dc19086be4fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aa4600ece05cda3899c640d886af88250ae0d7cf1443ff2ef72dc19086be4fe->enter($__internal_8aa4600ece05cda3899c640d886af88250ae0d7cf1443ff2ef72dc19086be4fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_20283d4a4823695546caaa36db4466f68776d283a5802d37d0c54be16df207f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20283d4a4823695546caaa36db4466f68776d283a5802d37d0c54be16df207f5->enter($__internal_20283d4a4823695546caaa36db4466f68776d283a5802d37d0c54be16df207f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_20283d4a4823695546caaa36db4466f68776d283a5802d37d0c54be16df207f5->leave($__internal_20283d4a4823695546caaa36db4466f68776d283a5802d37d0c54be16df207f5_prof);

        
        $__internal_8aa4600ece05cda3899c640d886af88250ae0d7cf1443ff2ef72dc19086be4fe->leave($__internal_8aa4600ece05cda3899c640d886af88250ae0d7cf1443ff2ef72dc19086be4fe_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\pidev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
