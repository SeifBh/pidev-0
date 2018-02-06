<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_faba8faa7f0056a9da90989b85d80932bf4b72fa5001e1337a846281f19bab3d extends Twig_Template
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
        $__internal_2e5b8afe4184ed965ba6ba7a2a3aa8e110b914fe40c6d58bdb940e3131001549 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e5b8afe4184ed965ba6ba7a2a3aa8e110b914fe40c6d58bdb940e3131001549->enter($__internal_2e5b8afe4184ed965ba6ba7a2a3aa8e110b914fe40c6d58bdb940e3131001549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $__internal_116cf4439eb25ff78fc61a49cf053367b84501f142cd3e06d9b2dcab569f3058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_116cf4439eb25ff78fc61a49cf053367b84501f142cd3e06d9b2dcab569f3058->enter($__internal_116cf4439eb25ff78fc61a49cf053367b84501f142cd3e06d9b2dcab569f3058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_2e5b8afe4184ed965ba6ba7a2a3aa8e110b914fe40c6d58bdb940e3131001549->leave($__internal_2e5b8afe4184ed965ba6ba7a2a3aa8e110b914fe40c6d58bdb940e3131001549_prof);

        
        $__internal_116cf4439eb25ff78fc61a49cf053367b84501f142cd3e06d9b2dcab569f3058->leave($__internal_116cf4439eb25ff78fc61a49cf053367b84501f142cd3e06d9b2dcab569f3058_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "@FOSUser/Registration/register_content.html.twig", "C:\\wamp64\\www\\pidev\\src\\EspritEntreAide\\UserBundle\\Resources\\views\\Registration\\register_content.html.twig");
    }
}
