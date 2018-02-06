<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_445c210ffb83e3a21e9544cd8d4d55c30f284d085e62ac2235a0ebcaf77791f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@User/register.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@User/register.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_24c7585bc2a98de31de3889072892372691cfd0fc1c303c4aef41996a841de9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24c7585bc2a98de31de3889072892372691cfd0fc1c303c4aef41996a841de9e->enter($__internal_24c7585bc2a98de31de3889072892372691cfd0fc1c303c4aef41996a841de9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_dd877358225e090f8f146d80aaf6da483358f9409ef2f3ed77f2f10d4b56396f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd877358225e090f8f146d80aaf6da483358f9409ef2f3ed77f2f10d4b56396f->enter($__internal_dd877358225e090f8f146d80aaf6da483358f9409ef2f3ed77f2f10d4b56396f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24c7585bc2a98de31de3889072892372691cfd0fc1c303c4aef41996a841de9e->leave($__internal_24c7585bc2a98de31de3889072892372691cfd0fc1c303c4aef41996a841de9e_prof);

        
        $__internal_dd877358225e090f8f146d80aaf6da483358f9409ef2f3ed77f2f10d4b56396f->leave($__internal_dd877358225e090f8f146d80aaf6da483358f9409ef2f3ed77f2f10d4b56396f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_72ace855a12c1239811dd945ceb8230e3ee5eb1c8bcf89e9434a06407787afb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72ace855a12c1239811dd945ceb8230e3ee5eb1c8bcf89e9434a06407787afb3->enter($__internal_72ace855a12c1239811dd945ceb8230e3ee5eb1c8bcf89e9434a06407787afb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4d9fc75ff68ae8ad38b97db27ad8d4ef58093e14d6d9e3bc382e8e8e4e17ce75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d9fc75ff68ae8ad38b97db27ad8d4ef58093e14d6d9e3bc382e8e8e4e17ce75->enter($__internal_4d9fc75ff68ae8ad38b97db27ad8d4ef58093e14d6d9e3bc382e8e8e4e17ce75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_4d9fc75ff68ae8ad38b97db27ad8d4ef58093e14d6d9e3bc382e8e8e4e17ce75->leave($__internal_4d9fc75ff68ae8ad38b97db27ad8d4ef58093e14d6d9e3bc382e8e8e4e17ce75_prof);

        
        $__internal_72ace855a12c1239811dd945ceb8230e3ee5eb1c8bcf89e9434a06407787afb3->leave($__internal_72ace855a12c1239811dd945ceb8230e3ee5eb1c8bcf89e9434a06407787afb3_prof);

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
        return new Twig_Source("{% extends \"@User/register.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\wamp64\\www\\pidev\\src\\EspritEntreAide\\UserBundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
