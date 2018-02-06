<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_4ffbb1c026ea8464b5f54b246ddd5599c0257fdde510641fb5a21c05d8346410 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f1e6f0bb29455ed63ec9811be173b87afd472cc668becfd2a58f0fc70676f57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f1e6f0bb29455ed63ec9811be173b87afd472cc668becfd2a58f0fc70676f57->enter($__internal_8f1e6f0bb29455ed63ec9811be173b87afd472cc668becfd2a58f0fc70676f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_1d1cbf8453ffeb978aab451e6eae497b7d3c1cf03e4e60b185effba829f6afec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d1cbf8453ffeb978aab451e6eae497b7d3c1cf03e4e60b185effba829f6afec->enter($__internal_1d1cbf8453ffeb978aab451e6eae497b7d3c1cf03e4e60b185effba829f6afec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        <div>
            ";
        // line 8
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 9
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 9, $this->getSourceContext()); })()), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 10
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 14
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 16
        echo "        </div>

        ";
        // line 18
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 18, $this->getSourceContext()); })()), "request", array()), "hasPreviousSession", array())) {
            // line 19
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 19, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 20
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 21
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 22
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "        ";
        }
        // line 27
        echo "
        <div>
            ";
        // line 29
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 31
        echo "        </div>
    </body>
</html>
";
        
        $__internal_8f1e6f0bb29455ed63ec9811be173b87afd472cc668becfd2a58f0fc70676f57->leave($__internal_8f1e6f0bb29455ed63ec9811be173b87afd472cc668becfd2a58f0fc70676f57_prof);

        
        $__internal_1d1cbf8453ffeb978aab451e6eae497b7d3c1cf03e4e60b185effba829f6afec->leave($__internal_1d1cbf8453ffeb978aab451e6eae497b7d3c1cf03e4e60b185effba829f6afec_prof);

    }

    // line 29
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b9cfa389c6cd6e4ed68f7ef0b5645e264df257f6faf2cfdeef85b698631d17d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9cfa389c6cd6e4ed68f7ef0b5645e264df257f6faf2cfdeef85b698631d17d3->enter($__internal_b9cfa389c6cd6e4ed68f7ef0b5645e264df257f6faf2cfdeef85b698631d17d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bf54ab83d332688f016373d963a73be383532ea9cee4d1b18acd58d92d9c1c45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf54ab83d332688f016373d963a73be383532ea9cee4d1b18acd58d92d9c1c45->enter($__internal_bf54ab83d332688f016373d963a73be383532ea9cee4d1b18acd58d92d9c1c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 30
        echo "            ";
        
        $__internal_bf54ab83d332688f016373d963a73be383532ea9cee4d1b18acd58d92d9c1c45->leave($__internal_bf54ab83d332688f016373d963a73be383532ea9cee4d1b18acd58d92d9c1c45_prof);

        
        $__internal_b9cfa389c6cd6e4ed68f7ef0b5645e264df257f6faf2cfdeef85b698631d17d3->leave($__internal_b9cfa389c6cd6e4ed68f7ef0b5645e264df257f6faf2cfdeef85b698631d17d3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 30,  118 => 29,  105 => 31,  103 => 29,  99 => 27,  96 => 26,  90 => 25,  81 => 22,  76 => 21,  71 => 20,  66 => 19,  64 => 18,  60 => 16,  52 => 14,  46 => 11,  42 => 10,  37 => 9,  35 => 8,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        <div>
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                <a href=\"{{ path('fos_user_security_logout') }}\">
                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                </a>
            {% else %}
                <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
            {% endif %}
        </div>

        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
    </body>
</html>
", "@FOSUser/layout.html.twig", "C:\\wamp64\\www\\pidev\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\layout.html.twig");
    }
}
