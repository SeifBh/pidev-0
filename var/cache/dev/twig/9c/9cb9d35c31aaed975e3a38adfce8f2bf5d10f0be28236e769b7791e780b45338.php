<?php

/* :default:test.html.twig */
class __TwigTemplate_9ee65b30abb1ff2057cfddbb16e868a3f391c13bcab5b53c211edb4e07d1c242 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'meta' => array($this, 'block_meta'),
            'title' => array($this, 'block_title'),
            'style' => array($this, 'block_style'),
            'script' => array($this, 'block_script'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a2ded49ded91a6506d314df1c0e62e481a8bfb0c09630658e5fa9cf26a8f1acf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2ded49ded91a6506d314df1c0e62e481a8bfb0c09630658e5fa9cf26a8f1acf->enter($__internal_a2ded49ded91a6506d314df1c0e62e481a8bfb0c09630658e5fa9cf26a8f1acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:test.html.twig"));

        $__internal_3885d1fbe3f454d74c5cf1e065d2e125bf812514b78dace704ed5a22009edaef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3885d1fbe3f454d74c5cf1e065d2e125bf812514b78dace704ed5a22009edaef->enter($__internal_3885d1fbe3f454d74c5cf1e065d2e125bf812514b78dace704ed5a22009edaef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:test.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 121
        echo "</head>
<body>

<div class=\"section-header\">
    ";
        // line 125
        $this->displayBlock('header', $context, $blocks);
        // line 148
        echo "</div>
<div id=\"content\">";
        // line 149
        $this->displayBlock('content', $context, $blocks);
        echo "</div>

</body>
<div class=\"section-footer\">
    ";
        // line 153
        $this->displayBlock('footer', $context, $blocks);
        // line 158
        echo "</div>
</html>";
        
        $__internal_a2ded49ded91a6506d314df1c0e62e481a8bfb0c09630658e5fa9cf26a8f1acf->leave($__internal_a2ded49ded91a6506d314df1c0e62e481a8bfb0c09630658e5fa9cf26a8f1acf_prof);

        
        $__internal_3885d1fbe3f454d74c5cf1e065d2e125bf812514b78dace704ed5a22009edaef->leave($__internal_3885d1fbe3f454d74c5cf1e065d2e125bf812514b78dace704ed5a22009edaef_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_699aa8929ad00438499e720e8b14c5b7ab45b58cb2506c80fb21564fa7ea04bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_699aa8929ad00438499e720e8b14c5b7ab45b58cb2506c80fb21564fa7ea04bd->enter($__internal_699aa8929ad00438499e720e8b14c5b7ab45b58cb2506c80fb21564fa7ea04bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_205e7f0c869a0086e351d19d0f6e268a471df018cd8592f79b0ca5db83801243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_205e7f0c869a0086e351d19d0f6e268a471df018cd8592f79b0ca5db83801243->enter($__internal_205e7f0c869a0086e351d19d0f6e268a471df018cd8592f79b0ca5db83801243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "
    ";
        // line 6
        $this->displayBlock('meta', $context, $blocks);
        // line 9
        echo "
            <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo " </title>

    ";
        // line 12
        $this->displayBlock('style', $context, $blocks);
        // line 96
        echo "
    ";
        // line 97
        $this->displayBlock('script', $context, $blocks);
        // line 119
        echo "
    ";
        
        $__internal_205e7f0c869a0086e351d19d0f6e268a471df018cd8592f79b0ca5db83801243->leave($__internal_205e7f0c869a0086e351d19d0f6e268a471df018cd8592f79b0ca5db83801243_prof);

        
        $__internal_699aa8929ad00438499e720e8b14c5b7ab45b58cb2506c80fb21564fa7ea04bd->leave($__internal_699aa8929ad00438499e720e8b14c5b7ab45b58cb2506c80fb21564fa7ea04bd_prof);

    }

    // line 6
    public function block_meta($context, array $blocks = array())
    {
        $__internal_b7f833e50f7553e86529870fd4d2fc76ec886e3208976d9f492f814d26ec73c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7f833e50f7553e86529870fd4d2fc76ec886e3208976d9f492f814d26ec73c5->enter($__internal_b7f833e50f7553e86529870fd4d2fc76ec886e3208976d9f492f814d26ec73c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        $__internal_d2ea5fe980e9105b5d42bcbd788328e83bac5f35a3c03fb1d4512fd8f0ecafb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2ea5fe980e9105b5d42bcbd788328e83bac5f35a3c03fb1d4512fd8f0ecafb7->enter($__internal_d2ea5fe980e9105b5d42bcbd788328e83bac5f35a3c03fb1d4512fd8f0ecafb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        // line 7
        echo "    <meta charset=\"utf-8\" />
    ";
        
        $__internal_d2ea5fe980e9105b5d42bcbd788328e83bac5f35a3c03fb1d4512fd8f0ecafb7->leave($__internal_d2ea5fe980e9105b5d42bcbd788328e83bac5f35a3c03fb1d4512fd8f0ecafb7_prof);

        
        $__internal_b7f833e50f7553e86529870fd4d2fc76ec886e3208976d9f492f814d26ec73c5->leave($__internal_b7f833e50f7553e86529870fd4d2fc76ec886e3208976d9f492f814d26ec73c5_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_23d8c055fd855c04322ee91ce7a19e1d9e8c8916be104836277b9a7d9b2097f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23d8c055fd855c04322ee91ce7a19e1d9e8c8916be104836277b9a7d9b2097f3->enter($__internal_23d8c055fd855c04322ee91ce7a19e1d9e8c8916be104836277b9a7d9b2097f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7e70cbfa31d7ad6a9657de0bea72c701360e364c492a72cd3102cabc9690f0b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e70cbfa31d7ad6a9657de0bea72c701360e364c492a72cd3102cabc9690f0b3->enter($__internal_7e70cbfa31d7ad6a9657de0bea72c701360e364c492a72cd3102cabc9690f0b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Espace Etudiant 12";
        
        $__internal_7e70cbfa31d7ad6a9657de0bea72c701360e364c492a72cd3102cabc9690f0b3->leave($__internal_7e70cbfa31d7ad6a9657de0bea72c701360e364c492a72cd3102cabc9690f0b3_prof);

        
        $__internal_23d8c055fd855c04322ee91ce7a19e1d9e8c8916be104836277b9a7d9b2097f3->leave($__internal_23d8c055fd855c04322ee91ce7a19e1d9e8c8916be104836277b9a7d9b2097f3_prof);

    }

    // line 12
    public function block_style($context, array $blocks = array())
    {
        $__internal_44d7e4dfc9da8ada3244b44e5c25918c06a566372441dda7aabda32598f8df35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44d7e4dfc9da8ada3244b44e5c25918c06a566372441dda7aabda32598f8df35->enter($__internal_44d7e4dfc9da8ada3244b44e5c25918c06a566372441dda7aabda32598f8df35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_17309ff84b695c5736c3150544ba308c13afcdce1e3892f733090c9db03d4489 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17309ff84b695c5736c3150544ba308c13afcdce1e3892f733090c9db03d4489->enter($__internal_17309ff84b695c5736c3150544ba308c13afcdce1e3892f733090c9db03d4489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 13
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/nav.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/lightbox.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/flexslider.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
            <style>
                    .middlebarmenu {
                            vertical-align: middle;
                            padding-top: 43px;
                            /* display: table-column-group; */
                    }

                    @import url(https://fonts.googleapis.com/css?family=Raleway:400,500);
                    .snip1189 {
                            font-family: 'Raleway', Arial, sans-serif;
                            text-align: center;
                            text-transform: uppercase;
                            font-weight: 500;
                            letter-spacing: 1px;
                    }
                    .snip1189 * {
                            -webkit-box-sizing: border-box;
                            box-sizing: border-box;
                            -webkit-transition: all 0.35s ease;
                            transition: all 0.35s ease;
                    }
                    .snip1189 li {
                            display: inline-block;
                            list-style: outside none none;
                            margin: 0 1em;
                            padding: 0;
                    }
                    .snip1189 a {
                            padding: 0.5em 0.8em;
                            margin: 0.2em 0;
                            display: block;
                            color: rgb(115, 16, 9);
                            position: relative;
                            text-decoration: none;
                    }
                    .snip1189 a:before,
                    .snip1189 a:after {
                            height: 14px;
                            width: 14px;
                            position: absolute;
                            content: '';
                            -webkit-transition: all 0.35s ease;
                            transition: all 0.35s ease;
                            opacity: 0;
                    }
                    .snip1189 a:before {
                            left: 0;
                            top: 0;
                            border-left: 3px solid #c0392b;
                            border-top: 3px solid #c0392b;
                            -webkit-transform: translate(100%, 50%);
                            transform: translate(100%, 50%);
                    }
                    .snip1189 a:after {
                            right: 0;
                            bottom: 0;
                            border-right: 3px solid #c0392b;
                            border-bottom: 3px solid #c0392b;
                            -webkit-transform: translate(-100%, -50%);
                            transform: translate(-100%, -50%);
                    }
                    .snip1189 a:hover,
                    .snip1189 .current a {
                            color: brown;
                    }
                    .snip1189 a:hover:before,
                    .snip1189 .current a:before,
                    .snip1189 a:hover:after,
                    .snip1189 .current a:after {
                            -webkit-transform: translate(0%, 0%);
                            transform: translate(0%, 0%);
                            opacity: 1;
                    }
                    /* Demo purposes only */

            </style>
    ";
        
        $__internal_17309ff84b695c5736c3150544ba308c13afcdce1e3892f733090c9db03d4489->leave($__internal_17309ff84b695c5736c3150544ba308c13afcdce1e3892f733090c9db03d4489_prof);

        
        $__internal_44d7e4dfc9da8ada3244b44e5c25918c06a566372441dda7aabda32598f8df35->leave($__internal_44d7e4dfc9da8ada3244b44e5c25918c06a566372441dda7aabda32598f8df35_prof);

    }

    // line 97
    public function block_script($context, array $blocks = array())
    {
        $__internal_601ae16376ee6f8aa96bfbfc985dd4c3b2a930f36762eade5d902deae3ef9309 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_601ae16376ee6f8aa96bfbfc985dd4c3b2a930f36762eade5d902deae3ef9309->enter($__internal_601ae16376ee6f8aa96bfbfc985dd4c3b2a930f36762eade5d902deae3ef9309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_3e197aac5fc1d4111958afc612824b78f872674dcb81642fd84947585a370156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e197aac5fc1d4111958afc612824b78f872674dcb81642fd84947585a370156->enter($__internal_3e197aac5fc1d4111958afc612824b78f872674dcb81642fd84947585a370156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 98
        echo "            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/uisearch.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/SmoothScroll.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/numscroller-1.0.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/nav.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/move-top.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/lightbox-plus-jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/easing.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/classie.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>

            <script>
            </script>





    ";
        
        $__internal_3e197aac5fc1d4111958afc612824b78f872674dcb81642fd84947585a370156->leave($__internal_3e197aac5fc1d4111958afc612824b78f872674dcb81642fd84947585a370156_prof);

        
        $__internal_601ae16376ee6f8aa96bfbfc985dd4c3b2a930f36762eade5d902deae3ef9309->leave($__internal_601ae16376ee6f8aa96bfbfc985dd4c3b2a930f36762eade5d902deae3ef9309_prof);

    }

    // line 125
    public function block_header($context, array $blocks = array())
    {
        $__internal_830c1744fdfd5689f282214e9dfeeed8aa3d9897a47cae54ed45328bfbfdfc12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_830c1744fdfd5689f282214e9dfeeed8aa3d9897a47cae54ed45328bfbfdfc12->enter($__internal_830c1744fdfd5689f282214e9dfeeed8aa3d9897a47cae54ed45328bfbfdfc12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_73dc45661c9b78970f724f539d04d330015e3f4050874be94c1156a4582bd701 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73dc45661c9b78970f724f539d04d330015e3f4050874be94c1156a4582bd701->enter($__internal_73dc45661c9b78970f724f539d04d330015e3f4050874be94c1156a4582bd701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 126
        echo "            <nav class=\"navbar navbar-default\">
                    <div class=\"container-fluid\">
                            <div class=\"col-md-2\">
                                    <img src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/abcd.png"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-md-8 middlebarmenu\">
                                    <ul class=\"snip1189\">
                                            <li class=\"current\"><a href=\"#\">Home</a></li>
                                            <li><a href=\"";
        // line 134
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_events");
        echo "\">Events</a></li>
                                            <li><a href=\"";
        // line 135
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_club");
        echo "\">Club</a></li>
                                            <li><a href=\"";
        // line 136
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_docs");
        echo "\">Docs</a></li>
                                            <li><a href=\"";
        // line 137
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_spotted");
        echo "\">Spotted</a></li>

                                    </ul>
                            </div>
                            <div class=\"col-md-2\">C</div>
                    </div>
            </nav>



    ";
        
        $__internal_73dc45661c9b78970f724f539d04d330015e3f4050874be94c1156a4582bd701->leave($__internal_73dc45661c9b78970f724f539d04d330015e3f4050874be94c1156a4582bd701_prof);

        
        $__internal_830c1744fdfd5689f282214e9dfeeed8aa3d9897a47cae54ed45328bfbfdfc12->leave($__internal_830c1744fdfd5689f282214e9dfeeed8aa3d9897a47cae54ed45328bfbfdfc12_prof);

    }

    // line 149
    public function block_content($context, array $blocks = array())
    {
        $__internal_eb661a88d69c2dc97011541593325adfe858a9f6c2a0dea08a820ae497fc6f1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb661a88d69c2dc97011541593325adfe858a9f6c2a0dea08a820ae497fc6f1b->enter($__internal_eb661a88d69c2dc97011541593325adfe858a9f6c2a0dea08a820ae497fc6f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ece5e53514e73016468688313f55d4aca75ebb26c3b5d138795330c80eae084b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ece5e53514e73016468688313f55d4aca75ebb26c3b5d138795330c80eae084b->enter($__internal_ece5e53514e73016468688313f55d4aca75ebb26c3b5d138795330c80eae084b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_ece5e53514e73016468688313f55d4aca75ebb26c3b5d138795330c80eae084b->leave($__internal_ece5e53514e73016468688313f55d4aca75ebb26c3b5d138795330c80eae084b_prof);

        
        $__internal_eb661a88d69c2dc97011541593325adfe858a9f6c2a0dea08a820ae497fc6f1b->leave($__internal_eb661a88d69c2dc97011541593325adfe858a9f6c2a0dea08a820ae497fc6f1b_prof);

    }

    // line 153
    public function block_footer($context, array $blocks = array())
    {
        $__internal_701725d0dcb2425118bcf13bc35fe6cdf22e5470a2d3667c12452457fd85f484 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_701725d0dcb2425118bcf13bc35fe6cdf22e5470a2d3667c12452457fd85f484->enter($__internal_701725d0dcb2425118bcf13bc35fe6cdf22e5470a2d3667c12452457fd85f484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_43fa3623e7aea94755419e2d03523137a618ba07e1034e2c56e473abddd67595 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43fa3623e7aea94755419e2d03523137a618ba07e1034e2c56e473abddd67595->enter($__internal_43fa3623e7aea94755419e2d03523137a618ba07e1034e2c56e473abddd67595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 154
        echo "        <div class=\"copyright-agile\">
            <p>© 2018 All rights reserved | Design by <a href=\"#\">Davinci Coders</a></p>
        </div>
    ";
        
        $__internal_43fa3623e7aea94755419e2d03523137a618ba07e1034e2c56e473abddd67595->leave($__internal_43fa3623e7aea94755419e2d03523137a618ba07e1034e2c56e473abddd67595_prof);

        
        $__internal_701725d0dcb2425118bcf13bc35fe6cdf22e5470a2d3667c12452457fd85f484->leave($__internal_701725d0dcb2425118bcf13bc35fe6cdf22e5470a2d3667c12452457fd85f484_prof);

    }

    public function getTemplateName()
    {
        return ":default:test.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  420 => 154,  411 => 153,  394 => 149,  373 => 137,  369 => 136,  365 => 135,  361 => 134,  353 => 129,  348 => 126,  339 => 125,  319 => 109,  315 => 108,  311 => 107,  307 => 106,  303 => 105,  299 => 104,  295 => 103,  291 => 102,  287 => 101,  283 => 100,  279 => 99,  276 => 98,  267 => 97,  179 => 18,  175 => 17,  171 => 16,  167 => 15,  163 => 14,  158 => 13,  149 => 12,  131 => 10,  120 => 7,  111 => 6,  100 => 119,  98 => 97,  95 => 96,  93 => 12,  88 => 10,  85 => 9,  83 => 6,  80 => 5,  71 => 4,  60 => 158,  58 => 153,  51 => 149,  48 => 148,  46 => 125,  40 => 121,  38 => 4,  33 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    {% block head %}

    {% block meta %}
    <meta charset=\"utf-8\" />
    {% endblock %}

            <title>{% block title %}Espace Etudiant 12{% endblock %} </title>

    {% block style %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/nav.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/lightbox.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/font-awesome.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/flexslider.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css') }}\">
            <style>
                    .middlebarmenu {
                            vertical-align: middle;
                            padding-top: 43px;
                            /* display: table-column-group; */
                    }

                    @import url(https://fonts.googleapis.com/css?family=Raleway:400,500);
                    .snip1189 {
                            font-family: 'Raleway', Arial, sans-serif;
                            text-align: center;
                            text-transform: uppercase;
                            font-weight: 500;
                            letter-spacing: 1px;
                    }
                    .snip1189 * {
                            -webkit-box-sizing: border-box;
                            box-sizing: border-box;
                            -webkit-transition: all 0.35s ease;
                            transition: all 0.35s ease;
                    }
                    .snip1189 li {
                            display: inline-block;
                            list-style: outside none none;
                            margin: 0 1em;
                            padding: 0;
                    }
                    .snip1189 a {
                            padding: 0.5em 0.8em;
                            margin: 0.2em 0;
                            display: block;
                            color: rgb(115, 16, 9);
                            position: relative;
                            text-decoration: none;
                    }
                    .snip1189 a:before,
                    .snip1189 a:after {
                            height: 14px;
                            width: 14px;
                            position: absolute;
                            content: '';
                            -webkit-transition: all 0.35s ease;
                            transition: all 0.35s ease;
                            opacity: 0;
                    }
                    .snip1189 a:before {
                            left: 0;
                            top: 0;
                            border-left: 3px solid #c0392b;
                            border-top: 3px solid #c0392b;
                            -webkit-transform: translate(100%, 50%);
                            transform: translate(100%, 50%);
                    }
                    .snip1189 a:after {
                            right: 0;
                            bottom: 0;
                            border-right: 3px solid #c0392b;
                            border-bottom: 3px solid #c0392b;
                            -webkit-transform: translate(-100%, -50%);
                            transform: translate(-100%, -50%);
                    }
                    .snip1189 a:hover,
                    .snip1189 .current a {
                            color: brown;
                    }
                    .snip1189 a:hover:before,
                    .snip1189 .current a:before,
                    .snip1189 a:hover:after,
                    .snip1189 .current a:after {
                            -webkit-transform: translate(0%, 0%);
                            transform: translate(0%, 0%);
                            opacity: 1;
                    }
                    /* Demo purposes only */

            </style>
    {% endblock %}

    {% block script %}
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/uisearch.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/SmoothScroll.min.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/numscroller-1.0.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/nav.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/move-top.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/lightbox-plus-jquery.min.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/jquery-2.1.4.min.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/jquery.flexslider.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/easing.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/classie.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/bootstrap.js') }}\"></script>

            <script>
            </script>





    {% endblock %}

    {% endblock %}
</head>
<body>

<div class=\"section-header\">
    {% block header %}
            <nav class=\"navbar navbar-default\">
                    <div class=\"container-fluid\">
                            <div class=\"col-md-2\">
                                    <img src=\"{{ asset(\"images/abcd.png\") }}\">
                            </div>
                            <div class=\"col-md-8 middlebarmenu\">
                                    <ul class=\"snip1189\">
                                            <li class=\"current\"><a href=\"#\">Home</a></li>
                                            <li><a href=\"{{ path('_events') }}\">Events</a></li>
                                            <li><a href=\"{{ path('_club') }}\">Club</a></li>
                                            <li><a href=\"{{ path('_docs') }}\">Docs</a></li>
                                            <li><a href=\"{{ path('_spotted') }}\">Spotted</a></li>

                                    </ul>
                            </div>
                            <div class=\"col-md-2\">C</div>
                    </div>
            </nav>



    {% endblock %}
</div>
<div id=\"content\">{% block content %}{% endblock %}</div>

</body>
<div class=\"section-footer\">
    {% block footer %}
        <div class=\"copyright-agile\">
            <p>© 2018 All rights reserved | Design by <a href=\"#\">Davinci Coders</a></p>
        </div>
    {% endblock %}
</div>
</html>", ":default:test.html.twig", "C:\\wamp64\\www\\pidev\\app/Resources\\views/default/test.html.twig");
    }
}
