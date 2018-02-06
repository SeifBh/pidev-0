<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_90407599d42b39489fab2db38fcf768d6ded1d376e795e47763cabb0038fa54b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@User/login.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@User/login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3bd5db9cc95f6b5d1369a2b3a2fdbac0dfa7ba29988f8006a33be5192f656eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3bd5db9cc95f6b5d1369a2b3a2fdbac0dfa7ba29988f8006a33be5192f656eb->enter($__internal_c3bd5db9cc95f6b5d1369a2b3a2fdbac0dfa7ba29988f8006a33be5192f656eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_076e08c188ba748621f880857bacbbbe4d54bcaaa24a32a892212bf42dea924c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_076e08c188ba748621f880857bacbbbe4d54bcaaa24a32a892212bf42dea924c->enter($__internal_076e08c188ba748621f880857bacbbbe4d54bcaaa24a32a892212bf42dea924c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3bd5db9cc95f6b5d1369a2b3a2fdbac0dfa7ba29988f8006a33be5192f656eb->leave($__internal_c3bd5db9cc95f6b5d1369a2b3a2fdbac0dfa7ba29988f8006a33be5192f656eb_prof);

        
        $__internal_076e08c188ba748621f880857bacbbbe4d54bcaaa24a32a892212bf42dea924c->leave($__internal_076e08c188ba748621f880857bacbbbe4d54bcaaa24a32a892212bf42dea924c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8d35e1a36d15d26c35abfc0c93fb639730be4988e99153184c56e9731c865ac0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d35e1a36d15d26c35abfc0c93fb639730be4988e99153184c56e9731c865ac0->enter($__internal_8d35e1a36d15d26c35abfc0c93fb639730be4988e99153184c56e9731c865ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f3a7fa1cbd664e1bf0b9e2e076754f1fc06adce554da6276790285faed02571d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3a7fa1cbd664e1bf0b9e2e076754f1fc06adce554da6276790285faed02571d->enter($__internal_f3a7fa1cbd664e1bf0b9e2e076754f1fc06adce554da6276790285faed02571d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_f3a7fa1cbd664e1bf0b9e2e076754f1fc06adce554da6276790285faed02571d->leave($__internal_f3a7fa1cbd664e1bf0b9e2e076754f1fc06adce554da6276790285faed02571d_prof);

        
        $__internal_8d35e1a36d15d26c35abfc0c93fb639730be4988e99153184c56e9731c865ac0->leave($__internal_8d35e1a36d15d26c35abfc0c93fb639730be4988e99153184c56e9731c865ac0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
        return new Twig_Source("{% extends \"@User/login.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\pidev\\src\\EspritEntreAide\\UserBundle\\Resources\\views\\Security\\login.html.twig");
    }
}
