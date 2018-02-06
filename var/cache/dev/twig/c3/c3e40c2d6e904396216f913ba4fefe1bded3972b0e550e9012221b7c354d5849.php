<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_247a75085bf642ce2ef1391161e21c4a5797f987e9b8a1e79c72636d1d3c076a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_69a16ced4688d283b9d847d7dca77fa74753c33d9d466dc2735ddda4c38d00b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69a16ced4688d283b9d847d7dca77fa74753c33d9d466dc2735ddda4c38d00b7->enter($__internal_69a16ced4688d283b9d847d7dca77fa74753c33d9d466dc2735ddda4c38d00b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_42c22ee8e30ac7456e0ff97e6104bfb1f513c952f93e23b6a104b688ecc62a0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42c22ee8e30ac7456e0ff97e6104bfb1f513c952f93e23b6a104b688ecc62a0b->enter($__internal_42c22ee8e30ac7456e0ff97e6104bfb1f513c952f93e23b6a104b688ecc62a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 5, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_69a16ced4688d283b9d847d7dca77fa74753c33d9d466dc2735ddda4c38d00b7->leave($__internal_69a16ced4688d283b9d847d7dca77fa74753c33d9d466dc2735ddda4c38d00b7_prof);

        
        $__internal_42c22ee8e30ac7456e0ff97e6104bfb1f513c952f93e23b6a104b688ecc62a0b->leave($__internal_42c22ee8e30ac7456e0ff97e6104bfb1f513c952f93e23b6a104b688ecc62a0b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "@FOSUser/Profile/show_content.html.twig", "C:\\wamp64\\www\\pidev\\src\\EspritEntreAide\\UserBundle\\Resources\\views\\Profile\\show_content.html.twig");
    }
}
