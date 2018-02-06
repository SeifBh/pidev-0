<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_555e8ff27681089862236ebfd49d4f0202c7ae9a72a885bd5e89b695fac94e36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_ead43023f742b176c6e55cbe90a831b4dfb2f705a8c25134653a2b6aae1bfc8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ead43023f742b176c6e55cbe90a831b4dfb2f705a8c25134653a2b6aae1bfc8c->enter($__internal_ead43023f742b176c6e55cbe90a831b4dfb2f705a8c25134653a2b6aae1bfc8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_f5e18c9609399496425f630a925988ebcb3f99e3aea38822e78d745c3c4bb233 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5e18c9609399496425f630a925988ebcb3f99e3aea38822e78d745c3c4bb233->enter($__internal_f5e18c9609399496425f630a925988ebcb3f99e3aea38822e78d745c3c4bb233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ead43023f742b176c6e55cbe90a831b4dfb2f705a8c25134653a2b6aae1bfc8c->leave($__internal_ead43023f742b176c6e55cbe90a831b4dfb2f705a8c25134653a2b6aae1bfc8c_prof);

        
        $__internal_f5e18c9609399496425f630a925988ebcb3f99e3aea38822e78d745c3c4bb233->leave($__internal_f5e18c9609399496425f630a925988ebcb3f99e3aea38822e78d745c3c4bb233_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_077324a68b2737b3280c329edf9eabb52e04eb8f4b6ff28636b52a189a0f3a77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_077324a68b2737b3280c329edf9eabb52e04eb8f4b6ff28636b52a189a0f3a77->enter($__internal_077324a68b2737b3280c329edf9eabb52e04eb8f4b6ff28636b52a189a0f3a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a1001b57102352bc5e77343428c48eafe3b6a16eccce436a493226302c440505 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1001b57102352bc5e77343428c48eafe3b6a16eccce436a493226302c440505->enter($__internal_a1001b57102352bc5e77343428c48eafe3b6a16eccce436a493226302c440505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_a1001b57102352bc5e77343428c48eafe3b6a16eccce436a493226302c440505->leave($__internal_a1001b57102352bc5e77343428c48eafe3b6a16eccce436a493226302c440505_prof);

        
        $__internal_077324a68b2737b3280c329edf9eabb52e04eb8f4b6ff28636b52a189a0f3a77->leave($__internal_077324a68b2737b3280c329edf9eabb52e04eb8f4b6ff28636b52a189a0f3a77_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_0791c139b85b05eb337993526d34b6a256b5c6e1d5f821d2bde2c3b98cad4bef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0791c139b85b05eb337993526d34b6a256b5c6e1d5f821d2bde2c3b98cad4bef->enter($__internal_0791c139b85b05eb337993526d34b6a256b5c6e1d5f821d2bde2c3b98cad4bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_39ad210477304ef4252d23c58edba9a3ffcc401b57ea1ed77e72902cdd35c233 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39ad210477304ef4252d23c58edba9a3ffcc401b57ea1ed77e72902cdd35c233->enter($__internal_39ad210477304ef4252d23c58edba9a3ffcc401b57ea1ed77e72902cdd35c233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_39ad210477304ef4252d23c58edba9a3ffcc401b57ea1ed77e72902cdd35c233->leave($__internal_39ad210477304ef4252d23c58edba9a3ffcc401b57ea1ed77e72902cdd35c233_prof);

        
        $__internal_0791c139b85b05eb337993526d34b6a256b5c6e1d5f821d2bde2c3b98cad4bef->leave($__internal_0791c139b85b05eb337993526d34b6a256b5c6e1d5f821d2bde2c3b98cad4bef_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_095ee0769bc071cb0397981b72f60015b592ff2b1ffe9b7da9dc8629290bd2d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_095ee0769bc071cb0397981b72f60015b592ff2b1ffe9b7da9dc8629290bd2d9->enter($__internal_095ee0769bc071cb0397981b72f60015b592ff2b1ffe9b7da9dc8629290bd2d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_99a8b5b82dd7b13bb5169346d146c14e3fa71b5a1c8ed533482a20db7d3cc6a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99a8b5b82dd7b13bb5169346d146c14e3fa71b5a1c8ed533482a20db7d3cc6a7->enter($__internal_99a8b5b82dd7b13bb5169346d146c14e3fa71b5a1c8ed533482a20db7d3cc6a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_99a8b5b82dd7b13bb5169346d146c14e3fa71b5a1c8ed533482a20db7d3cc6a7->leave($__internal_99a8b5b82dd7b13bb5169346d146c14e3fa71b5a1c8ed533482a20db7d3cc6a7_prof);

        
        $__internal_095ee0769bc071cb0397981b72f60015b592ff2b1ffe9b7da9dc8629290bd2d9->leave($__internal_095ee0769bc071cb0397981b72f60015b592ff2b1ffe9b7da9dc8629290bd2d9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\pidev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
