<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_0c02199a9a733f3ff3e47d2b5a3adb79343f31b4395ff6211c58bfd00f1bee3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_84f0770109fc20ae585b2f3bac1015d36d7d3e7009ea9045feab3ae7a4361974 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84f0770109fc20ae585b2f3bac1015d36d7d3e7009ea9045feab3ae7a4361974->enter($__internal_84f0770109fc20ae585b2f3bac1015d36d7d3e7009ea9045feab3ae7a4361974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_303a868773a72fde4a35d66093fee66659c962a008e388daa44b6e4394484ccf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_303a868773a72fde4a35d66093fee66659c962a008e388daa44b6e4394484ccf->enter($__internal_303a868773a72fde4a35d66093fee66659c962a008e388daa44b6e4394484ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_84f0770109fc20ae585b2f3bac1015d36d7d3e7009ea9045feab3ae7a4361974->leave($__internal_84f0770109fc20ae585b2f3bac1015d36d7d3e7009ea9045feab3ae7a4361974_prof);

        
        $__internal_303a868773a72fde4a35d66093fee66659c962a008e388daa44b6e4394484ccf->leave($__internal_303a868773a72fde4a35d66093fee66659c962a008e388daa44b6e4394484ccf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_34bbfd11aa9122c2dc6ab9ec4ee429a49fdd32853cf093b50315b798260f7d3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34bbfd11aa9122c2dc6ab9ec4ee429a49fdd32853cf093b50315b798260f7d3c->enter($__internal_34bbfd11aa9122c2dc6ab9ec4ee429a49fdd32853cf093b50315b798260f7d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4c3c71faf0b6d87000ae208b0ed26d74782c014c903ec425b76fd0662e0e285b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c3c71faf0b6d87000ae208b0ed26d74782c014c903ec425b76fd0662e0e285b->enter($__internal_4c3c71faf0b6d87000ae208b0ed26d74782c014c903ec425b76fd0662e0e285b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4c3c71faf0b6d87000ae208b0ed26d74782c014c903ec425b76fd0662e0e285b->leave($__internal_4c3c71faf0b6d87000ae208b0ed26d74782c014c903ec425b76fd0662e0e285b_prof);

        
        $__internal_34bbfd11aa9122c2dc6ab9ec4ee429a49fdd32853cf093b50315b798260f7d3c->leave($__internal_34bbfd11aa9122c2dc6ab9ec4ee429a49fdd32853cf093b50315b798260f7d3c_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_6ed50f40ef8f8bccdffcad961d107e9431804e6061e806fa826c56605a774572 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ed50f40ef8f8bccdffcad961d107e9431804e6061e806fa826c56605a774572->enter($__internal_6ed50f40ef8f8bccdffcad961d107e9431804e6061e806fa826c56605a774572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_aa839784b10fc7edfd4861cf0e98e51c22e7c9d3756e0600161d5cf51f4bdea1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa839784b10fc7edfd4861cf0e98e51c22e7c9d3756e0600161d5cf51f4bdea1->enter($__internal_aa839784b10fc7edfd4861cf0e98e51c22e7c9d3756e0600161d5cf51f4bdea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_aa839784b10fc7edfd4861cf0e98e51c22e7c9d3756e0600161d5cf51f4bdea1->leave($__internal_aa839784b10fc7edfd4861cf0e98e51c22e7c9d3756e0600161d5cf51f4bdea1_prof);

        
        $__internal_6ed50f40ef8f8bccdffcad961d107e9431804e6061e806fa826c56605a774572->leave($__internal_6ed50f40ef8f8bccdffcad961d107e9431804e6061e806fa826c56605a774572_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_7625b71155b752993f427e4d09a46345671e7e8b14e288126a9d4629494d565a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7625b71155b752993f427e4d09a46345671e7e8b14e288126a9d4629494d565a->enter($__internal_7625b71155b752993f427e4d09a46345671e7e8b14e288126a9d4629494d565a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bf8b2688f7173c3c4c6e83d0389f4720f1c9a55b01116948dd535eba3cdf9bca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf8b2688f7173c3c4c6e83d0389f4720f1c9a55b01116948dd535eba3cdf9bca->enter($__internal_bf8b2688f7173c3c4c6e83d0389f4720f1c9a55b01116948dd535eba3cdf9bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bf8b2688f7173c3c4c6e83d0389f4720f1c9a55b01116948dd535eba3cdf9bca->leave($__internal_bf8b2688f7173c3c4c6e83d0389f4720f1c9a55b01116948dd535eba3cdf9bca_prof);

        
        $__internal_7625b71155b752993f427e4d09a46345671e7e8b14e288126a9d4629494d565a->leave($__internal_7625b71155b752993f427e4d09a46345671e7e8b14e288126a9d4629494d565a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\pidev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
