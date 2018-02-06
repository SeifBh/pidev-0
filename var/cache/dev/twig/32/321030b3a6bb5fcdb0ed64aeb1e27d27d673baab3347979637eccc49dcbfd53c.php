<?php

/* @User/login.html.twig */
class __TwigTemplate_d5e6c8041a89b3b7e5146c10ee14989aed18743fabcdc7d1931a92b1f4636d50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":default:test.html.twig", "@User/login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":default:test.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4056068eb5ac4677526df43ac6dd375d59ee78fdde510640bb5690db742acaa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4056068eb5ac4677526df43ac6dd375d59ee78fdde510640bb5690db742acaa2->enter($__internal_4056068eb5ac4677526df43ac6dd375d59ee78fdde510640bb5690db742acaa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/login.html.twig"));

        $__internal_80f1abf4585687205f4f84569264d9ff9fcd2bada3b70a11d8930dc6cc0de4f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80f1abf4585687205f4f84569264d9ff9fcd2bada3b70a11d8930dc6cc0de4f0->enter($__internal_80f1abf4585687205f4f84569264d9ff9fcd2bada3b70a11d8930dc6cc0de4f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4056068eb5ac4677526df43ac6dd375d59ee78fdde510640bb5690db742acaa2->leave($__internal_4056068eb5ac4677526df43ac6dd375d59ee78fdde510640bb5690db742acaa2_prof);

        
        $__internal_80f1abf4585687205f4f84569264d9ff9fcd2bada3b70a11d8930dc6cc0de4f0->leave($__internal_80f1abf4585687205f4f84569264d9ff9fcd2bada3b70a11d8930dc6cc0de4f0_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_faa29e54c4d247b8dc95dc04f5d991cf1bf3be07a95b6a8b615fdaab1b5b24c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faa29e54c4d247b8dc95dc04f5d991cf1bf3be07a95b6a8b615fdaab1b5b24c5->enter($__internal_faa29e54c4d247b8dc95dc04f5d991cf1bf3be07a95b6a8b615fdaab1b5b24c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_97ad4f9a907cce0a154b66c1387c430e335105612f0e7fdbdca51d86cd09c2c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97ad4f9a907cce0a154b66c1387c430e335105612f0e7fdbdca51d86cd09c2c5->enter($__internal_97ad4f9a907cce0a154b66c1387c430e335105612f0e7fdbdca51d86cd09c2c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Login";
        
        $__internal_97ad4f9a907cce0a154b66c1387c430e335105612f0e7fdbdca51d86cd09c2c5->leave($__internal_97ad4f9a907cce0a154b66c1387c430e335105612f0e7fdbdca51d86cd09c2c5_prof);

        
        $__internal_faa29e54c4d247b8dc95dc04f5d991cf1bf3be07a95b6a8b615fdaab1b5b24c5->leave($__internal_faa29e54c4d247b8dc95dc04f5d991cf1bf3be07a95b6a8b615fdaab1b5b24c5_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_44c28622e867a3e060c7aefacfe29259a21ef545924769a50d266d9f7063738b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44c28622e867a3e060c7aefacfe29259a21ef545924769a50d266d9f7063738b->enter($__internal_44c28622e867a3e060c7aefacfe29259a21ef545924769a50d266d9f7063738b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_db25c109cf0ff95068649d3a0de7e212699c74db0a209fa842c8f27933551985 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db25c109cf0ff95068649d3a0de7e212699c74db0a209fa842c8f27933551985->enter($__internal_db25c109cf0ff95068649d3a0de7e212699c74db0a209fa842c8f27933551985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <style type=\"text/css\">
        .important { color: #336699; }

    </style>
";
        
        $__internal_db25c109cf0ff95068649d3a0de7e212699c74db0a209fa842c8f27933551985->leave($__internal_db25c109cf0ff95068649d3a0de7e212699c74db0a209fa842c8f27933551985_prof);

        
        $__internal_44c28622e867a3e060c7aefacfe29259a21ef545924769a50d266d9f7063738b->leave($__internal_44c28622e867a3e060c7aefacfe29259a21ef545924769a50d266d9f7063738b_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_e81fcafd9c16e8d469cf5c6cdf8f65a61022185985f8479056e02c3285344875 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e81fcafd9c16e8d469cf5c6cdf8f65a61022185985f8479056e02c3285344875->enter($__internal_e81fcafd9c16e8d469cf5c6cdf8f65a61022185985f8479056e02c3285344875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d4182ec13edea93f79603d73b5269b7a10a25b60820db39a69495a3ba69bc4c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4182ec13edea93f79603d73b5269b7a10a25b60820db39a69495a3ba69bc4c0->enter($__internal_d4182ec13edea93f79603d73b5269b7a10a25b60820db39a69495a3ba69bc4c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    <div class=\"big-div-club\">
        <h1>Login</h1>
    </div>
    <p class=\"important\">
        ";
        // line 17
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 21
        echo "
    </p>
";
        
        $__internal_d4182ec13edea93f79603d73b5269b7a10a25b60820db39a69495a3ba69bc4c0->leave($__internal_d4182ec13edea93f79603d73b5269b7a10a25b60820db39a69495a3ba69bc4c0_prof);

        
        $__internal_e81fcafd9c16e8d469cf5c6cdf8f65a61022185985f8479056e02c3285344875->leave($__internal_e81fcafd9c16e8d469cf5c6cdf8f65a61022185985f8479056e02c3285344875_prof);

    }

    // line 17
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_335b259fc170d78e6c449c728f3716825239806d940b931c57c4d6b8c82f76f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_335b259fc170d78e6c449c728f3716825239806d940b931c57c4d6b8c82f76f4->enter($__internal_335b259fc170d78e6c449c728f3716825239806d940b931c57c4d6b8c82f76f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e048c038e442fe780109b03103c64769cdcf9a9f1901a8a9e435865d50fd5c1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e048c038e442fe780109b03103c64769cdcf9a9f1901a8a9e435865d50fd5c1e->enter($__internal_e048c038e442fe780109b03103c64769cdcf9a9f1901a8a9e435865d50fd5c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 18
        echo "            ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "

        ";
        
        $__internal_e048c038e442fe780109b03103c64769cdcf9a9f1901a8a9e435865d50fd5c1e->leave($__internal_e048c038e442fe780109b03103c64769cdcf9a9f1901a8a9e435865d50fd5c1e_prof);

        
        $__internal_335b259fc170d78e6c449c728f3716825239806d940b931c57c4d6b8c82f76f4->leave($__internal_335b259fc170d78e6c449c728f3716825239806d940b931c57c4d6b8c82f76f4_prof);

    }

    public function getTemplateName()
    {
        return "@User/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 18,  116 => 17,  104 => 21,  102 => 17,  96 => 13,  87 => 12,  70 => 6,  61 => 5,  43 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \":default:test.html.twig\" %}


{% block title %}Login{% endblock %}
{% block head %}
    {{ parent() }}
    <style type=\"text/css\">
        .important { color: #336699; }

    </style>
{% endblock %}
{% block content %}
    <div class=\"big-div-club\">
        <h1>Login</h1>
    </div>
    <p class=\"important\">
        {% block fos_user_content %}
            {{ include('@FOSUser/Security/login_content.html.twig') }}

        {% endblock %}

    </p>
{% endblock %}", "@User/login.html.twig", "C:\\wamp64\\www\\pidev\\src\\EspritEntreAide\\UserBundle\\Resources\\views\\login.html.twig");
    }
}
