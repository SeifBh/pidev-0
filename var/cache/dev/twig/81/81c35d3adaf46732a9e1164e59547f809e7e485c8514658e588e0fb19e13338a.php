<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_89fb9a45f51f49d5af574942310dcaf0059ff1fd7a118b07085879ec809a26c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_f4e471194cd14072d9d1b1c13200501b71ddc6d9e3bd1a04029a9323db3a4ff8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4e471194cd14072d9d1b1c13200501b71ddc6d9e3bd1a04029a9323db3a4ff8->enter($__internal_f4e471194cd14072d9d1b1c13200501b71ddc6d9e3bd1a04029a9323db3a4ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ade3bd69562ce26d951f7043284edcc2a8eeb6ff3d983fd2976fd570e74a8826 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ade3bd69562ce26d951f7043284edcc2a8eeb6ff3d983fd2976fd570e74a8826->enter($__internal_ade3bd69562ce26d951f7043284edcc2a8eeb6ff3d983fd2976fd570e74a8826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4e471194cd14072d9d1b1c13200501b71ddc6d9e3bd1a04029a9323db3a4ff8->leave($__internal_f4e471194cd14072d9d1b1c13200501b71ddc6d9e3bd1a04029a9323db3a4ff8_prof);

        
        $__internal_ade3bd69562ce26d951f7043284edcc2a8eeb6ff3d983fd2976fd570e74a8826->leave($__internal_ade3bd69562ce26d951f7043284edcc2a8eeb6ff3d983fd2976fd570e74a8826_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e8759eecf219883ab824b7e5406a300de426fdb420bf43d1202367005351fbe7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8759eecf219883ab824b7e5406a300de426fdb420bf43d1202367005351fbe7->enter($__internal_e8759eecf219883ab824b7e5406a300de426fdb420bf43d1202367005351fbe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1e92c21928e8c15bf7aa7daebc9783e649e39e101aeafbc3c39ff18f1d67ac80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e92c21928e8c15bf7aa7daebc9783e649e39e101aeafbc3c39ff18f1d67ac80->enter($__internal_1e92c21928e8c15bf7aa7daebc9783e649e39e101aeafbc3c39ff18f1d67ac80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_1e92c21928e8c15bf7aa7daebc9783e649e39e101aeafbc3c39ff18f1d67ac80->leave($__internal_1e92c21928e8c15bf7aa7daebc9783e649e39e101aeafbc3c39ff18f1d67ac80_prof);

        
        $__internal_e8759eecf219883ab824b7e5406a300de426fdb420bf43d1202367005351fbe7->leave($__internal_e8759eecf219883ab824b7e5406a300de426fdb420bf43d1202367005351fbe7_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b8d382a012cc0402c768d315e52ec2931239c7bcef85f8612d43f8f8c7299399 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8d382a012cc0402c768d315e52ec2931239c7bcef85f8612d43f8f8c7299399->enter($__internal_b8d382a012cc0402c768d315e52ec2931239c7bcef85f8612d43f8f8c7299399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7801ff663f48e7def78738d367ed4605115194902a1e6623321b1b4a7f0d1481 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7801ff663f48e7def78738d367ed4605115194902a1e6623321b1b4a7f0d1481->enter($__internal_7801ff663f48e7def78738d367ed4605115194902a1e6623321b1b4a7f0d1481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_7801ff663f48e7def78738d367ed4605115194902a1e6623321b1b4a7f0d1481->leave($__internal_7801ff663f48e7def78738d367ed4605115194902a1e6623321b1b4a7f0d1481_prof);

        
        $__internal_b8d382a012cc0402c768d315e52ec2931239c7bcef85f8612d43f8f8c7299399->leave($__internal_b8d382a012cc0402c768d315e52ec2931239c7bcef85f8612d43f8f8c7299399_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bdef4ed29a99288920d15b99a730c80348e907523a87c045810a87986925d9a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdef4ed29a99288920d15b99a730c80348e907523a87c045810a87986925d9a1->enter($__internal_bdef4ed29a99288920d15b99a730c80348e907523a87c045810a87986925d9a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b518b03de1b1be1e4a4feff973b196fdb0adf499ab6acdbd010a2145b68f0cf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b518b03de1b1be1e4a4feff973b196fdb0adf499ab6acdbd010a2145b68f0cf5->enter($__internal_b518b03de1b1be1e4a4feff973b196fdb0adf499ab6acdbd010a2145b68f0cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_b518b03de1b1be1e4a4feff973b196fdb0adf499ab6acdbd010a2145b68f0cf5->leave($__internal_b518b03de1b1be1e4a4feff973b196fdb0adf499ab6acdbd010a2145b68f0cf5_prof);

        
        $__internal_bdef4ed29a99288920d15b99a730c80348e907523a87c045810a87986925d9a1->leave($__internal_bdef4ed29a99288920d15b99a730c80348e907523a87c045810a87986925d9a1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\pidev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
