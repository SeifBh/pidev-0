<?php

/* @User/register.html.twig */
class __TwigTemplate_0e180515d54c7a28305cb7f13554ba4ce2d9e37ddb34200386a73a7a84e084e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":default:test.html.twig", "@User/register.html.twig", 1);
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
        $__internal_4c8b503b765eb10dfa07179bbc76ee5cc66f1c3eb9308df5128f2a3732c81060 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c8b503b765eb10dfa07179bbc76ee5cc66f1c3eb9308df5128f2a3732c81060->enter($__internal_4c8b503b765eb10dfa07179bbc76ee5cc66f1c3eb9308df5128f2a3732c81060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/register.html.twig"));

        $__internal_d56b9218d5efc0018ff21b339cf44e3c25c10dc9f35589504e2aab85a5319813 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d56b9218d5efc0018ff21b339cf44e3c25c10dc9f35589504e2aab85a5319813->enter($__internal_d56b9218d5efc0018ff21b339cf44e3c25c10dc9f35589504e2aab85a5319813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c8b503b765eb10dfa07179bbc76ee5cc66f1c3eb9308df5128f2a3732c81060->leave($__internal_4c8b503b765eb10dfa07179bbc76ee5cc66f1c3eb9308df5128f2a3732c81060_prof);

        
        $__internal_d56b9218d5efc0018ff21b339cf44e3c25c10dc9f35589504e2aab85a5319813->leave($__internal_d56b9218d5efc0018ff21b339cf44e3c25c10dc9f35589504e2aab85a5319813_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_9aa876aef9e5899b4951c3c5b66f27d5797d83b578d2b69b1d03e602f2ddcdcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aa876aef9e5899b4951c3c5b66f27d5797d83b578d2b69b1d03e602f2ddcdcf->enter($__internal_9aa876aef9e5899b4951c3c5b66f27d5797d83b578d2b69b1d03e602f2ddcdcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d6fdd2eb92769ede8eaf611dd47a093aa462c2cd6dca235440fd0f8f374d17cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6fdd2eb92769ede8eaf611dd47a093aa462c2cd6dca235440fd0f8f374d17cf->enter($__internal_d6fdd2eb92769ede8eaf611dd47a093aa462c2cd6dca235440fd0f8f374d17cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Index";
        
        $__internal_d6fdd2eb92769ede8eaf611dd47a093aa462c2cd6dca235440fd0f8f374d17cf->leave($__internal_d6fdd2eb92769ede8eaf611dd47a093aa462c2cd6dca235440fd0f8f374d17cf_prof);

        
        $__internal_9aa876aef9e5899b4951c3c5b66f27d5797d83b578d2b69b1d03e602f2ddcdcf->leave($__internal_9aa876aef9e5899b4951c3c5b66f27d5797d83b578d2b69b1d03e602f2ddcdcf_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_8a56344ccfb28bc249189c98266b38ebd6072d46131806c425de4d7f8025fd56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a56344ccfb28bc249189c98266b38ebd6072d46131806c425de4d7f8025fd56->enter($__internal_8a56344ccfb28bc249189c98266b38ebd6072d46131806c425de4d7f8025fd56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e32a032623be72928f5e62808dc228ff8451588d3ea3e31066b9f4c7224f6d0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e32a032623be72928f5e62808dc228ff8451588d3ea3e31066b9f4c7224f6d0d->enter($__internal_e32a032623be72928f5e62808dc228ff8451588d3ea3e31066b9f4c7224f6d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <style type=\"text/css\">
        .important { color: #336699; }

    </style>
";
        
        $__internal_e32a032623be72928f5e62808dc228ff8451588d3ea3e31066b9f4c7224f6d0d->leave($__internal_e32a032623be72928f5e62808dc228ff8451588d3ea3e31066b9f4c7224f6d0d_prof);

        
        $__internal_8a56344ccfb28bc249189c98266b38ebd6072d46131806c425de4d7f8025fd56->leave($__internal_8a56344ccfb28bc249189c98266b38ebd6072d46131806c425de4d7f8025fd56_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_58d6498734150425ee6f6f61f8f29a94980b5b3822b12eabc530667d4c54be65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58d6498734150425ee6f6f61f8f29a94980b5b3822b12eabc530667d4c54be65->enter($__internal_58d6498734150425ee6f6f61f8f29a94980b5b3822b12eabc530667d4c54be65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3b5ae144680543348897d38642eb709df9dfc180a763a7545ae27a365d483443 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b5ae144680543348897d38642eb709df9dfc180a763a7545ae27a365d483443->enter($__internal_3b5ae144680543348897d38642eb709df9dfc180a763a7545ae27a365d483443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    <div class=\"big-div-club\">
        <h1>Sign up</h1>
    </div>
    <p class=\"important\">
        ";
        // line 17
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 18
        echo "
    </p>
";
        
        $__internal_3b5ae144680543348897d38642eb709df9dfc180a763a7545ae27a365d483443->leave($__internal_3b5ae144680543348897d38642eb709df9dfc180a763a7545ae27a365d483443_prof);

        
        $__internal_58d6498734150425ee6f6f61f8f29a94980b5b3822b12eabc530667d4c54be65->leave($__internal_58d6498734150425ee6f6f61f8f29a94980b5b3822b12eabc530667d4c54be65_prof);

    }

    // line 17
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_36e5484cb970db8736f949201ed48e4d59277e15d1163d9cdc60b46f80d61eaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36e5484cb970db8736f949201ed48e4d59277e15d1163d9cdc60b46f80d61eaf->enter($__internal_36e5484cb970db8736f949201ed48e4d59277e15d1163d9cdc60b46f80d61eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1386cb88859ee9e7eddc92332b3d5f7ecaa5c009918962fb097c88b7ad411de0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1386cb88859ee9e7eddc92332b3d5f7ecaa5c009918962fb097c88b7ad411de0->enter($__internal_1386cb88859ee9e7eddc92332b3d5f7ecaa5c009918962fb097c88b7ad411de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_1386cb88859ee9e7eddc92332b3d5f7ecaa5c009918962fb097c88b7ad411de0->leave($__internal_1386cb88859ee9e7eddc92332b3d5f7ecaa5c009918962fb097c88b7ad411de0_prof);

        
        $__internal_36e5484cb970db8736f949201ed48e4d59277e15d1163d9cdc60b46f80d61eaf->leave($__internal_36e5484cb970db8736f949201ed48e4d59277e15d1163d9cdc60b46f80d61eaf_prof);

    }

    public function getTemplateName()
    {
        return "@User/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 17,  104 => 18,  102 => 17,  96 => 13,  87 => 12,  70 => 6,  61 => 5,  43 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \":default:test.html.twig\" %}


{% block title %}Index{% endblock %}
{% block head %}
    {{ parent() }}
    <style type=\"text/css\">
        .important { color: #336699; }

    </style>
{% endblock %}
{% block content %}
    <div class=\"big-div-club\">
        <h1>Sign up</h1>
    </div>
    <p class=\"important\">
        {% block fos_user_content %}{% endblock %}

    </p>
{% endblock %}", "@User/register.html.twig", "C:\\wamp64\\www\\pidev\\src\\EspritEntreAide\\UserBundle\\Resources\\views\\register.html.twig");
    }
}
