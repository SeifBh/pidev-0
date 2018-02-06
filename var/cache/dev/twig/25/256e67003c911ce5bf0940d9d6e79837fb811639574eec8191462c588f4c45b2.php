<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_754a2f07e4336049d81afbebeaca6f4b79a5fc4468296a76c8c4679335b132f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_14505730a4801602a49820369fc3a8bb28cc11d84c1de041eabc00ca48b68d8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14505730a4801602a49820369fc3a8bb28cc11d84c1de041eabc00ca48b68d8b->enter($__internal_14505730a4801602a49820369fc3a8bb28cc11d84c1de041eabc00ca48b68d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_406b62fcb3476947e5a60a885f5262949694c68ec00968ac0d3d9b545fc5dcdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_406b62fcb3476947e5a60a885f5262949694c68ec00968ac0d3d9b545fc5dcdd->enter($__internal_406b62fcb3476947e5a60a885f5262949694c68ec00968ac0d3d9b545fc5dcdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14505730a4801602a49820369fc3a8bb28cc11d84c1de041eabc00ca48b68d8b->leave($__internal_14505730a4801602a49820369fc3a8bb28cc11d84c1de041eabc00ca48b68d8b_prof);

        
        $__internal_406b62fcb3476947e5a60a885f5262949694c68ec00968ac0d3d9b545fc5dcdd->leave($__internal_406b62fcb3476947e5a60a885f5262949694c68ec00968ac0d3d9b545fc5dcdd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6d95c601659fb6601762b1496d690b1b20eaab7ed266dcf6073d86931cba818a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d95c601659fb6601762b1496d690b1b20eaab7ed266dcf6073d86931cba818a->enter($__internal_6d95c601659fb6601762b1496d690b1b20eaab7ed266dcf6073d86931cba818a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0f8a145a6d9de6178fd26922dc77ee82621401bcfe4c46c68a72bebf1b145bb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f8a145a6d9de6178fd26922dc77ee82621401bcfe4c46c68a72bebf1b145bb5->enter($__internal_0f8a145a6d9de6178fd26922dc77ee82621401bcfe4c46c68a72bebf1b145bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_0f8a145a6d9de6178fd26922dc77ee82621401bcfe4c46c68a72bebf1b145bb5->leave($__internal_0f8a145a6d9de6178fd26922dc77ee82621401bcfe4c46c68a72bebf1b145bb5_prof);

        
        $__internal_6d95c601659fb6601762b1496d690b1b20eaab7ed266dcf6073d86931cba818a->leave($__internal_6d95c601659fb6601762b1496d690b1b20eaab7ed266dcf6073d86931cba818a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "C:\\wamp64\\www\\pidev\\src\\EspritEntreAide\\UserBundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
