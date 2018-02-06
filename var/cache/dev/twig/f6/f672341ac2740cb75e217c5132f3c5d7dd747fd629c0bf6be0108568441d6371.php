<?php

/* default/index.html.twig */
class __TwigTemplate_4673fba760491fd2eb2ceccfb52eeb1d4dca5588b6d705a27cc9d403d367e2c1 extends Twig_Template
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
            'section1' => array($this, 'block_section1'),
            'section2' => array($this, 'block_section2'),
            'section3' => array($this, 'block_section3'),
            'section4' => array($this, 'block_section4'),
            'section5' => array($this, 'block_section5'),
            'section6' => array($this, 'block_section6'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_487af5cbca70f4738d8cbf7f82e97bd8e962ff781d6cc7f3fe2b0ac3a77b7d07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_487af5cbca70f4738d8cbf7f82e97bd8e962ff781d6cc7f3fe2b0ac3a77b7d07->enter($__internal_487af5cbca70f4738d8cbf7f82e97bd8e962ff781d6cc7f3fe2b0ac3a77b7d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_1abda492bdb09b847dcc643bc9da5aedb80f7e006513022122da33c470097ad9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1abda492bdb09b847dcc643bc9da5aedb80f7e006513022122da33c470097ad9->enter($__internal_1abda492bdb09b847dcc643bc9da5aedb80f7e006513022122da33c470097ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        // line 1
        echo "<html>
<head>
    ";
        // line 3
        $this->displayBlock('head', $context, $blocks);
        // line 120
        echo "</head>


<div class=\"section-header\">
    ";
        // line 124
        $this->displayBlock('header', $context, $blocks);
        // line 147
        echo "</div>

<body>

<div class=\"section1\">
    ";
        // line 152
        $this->displayBlock('section1', $context, $blocks);
        // line 258
        echo "</div>




<div class=\"section2\">
    ";
        // line 264
        $this->displayBlock('section2', $context, $blocks);
        // line 319
        echo "</div>



<div class=\"section3\">
    ";
        // line 324
        $this->displayBlock('section3', $context, $blocks);
        // line 436
        echo "</div>




<div class=\"section4\">
    ";
        // line 442
        $this->displayBlock('section4', $context, $blocks);
        // line 509
        echo "</div>




<div class=\"section5\">
    ";
        // line 515
        $this->displayBlock('section5', $context, $blocks);
        // line 588
        echo "</div>


<div class=\"section6\">
    ";
        // line 592
        $this->displayBlock('section6', $context, $blocks);
        // line 640
        echo "</div>






</body>


<div class=\"section-footer\">
    ";
        // line 651
        $this->displayBlock('footer', $context, $blocks);
        // line 656
        echo "</div>

</html>

";
        
        $__internal_487af5cbca70f4738d8cbf7f82e97bd8e962ff781d6cc7f3fe2b0ac3a77b7d07->leave($__internal_487af5cbca70f4738d8cbf7f82e97bd8e962ff781d6cc7f3fe2b0ac3a77b7d07_prof);

        
        $__internal_1abda492bdb09b847dcc643bc9da5aedb80f7e006513022122da33c470097ad9->leave($__internal_1abda492bdb09b847dcc643bc9da5aedb80f7e006513022122da33c470097ad9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_497395e1d6a8d4c4b4c5effd13a201e20dc04a32ef7e5af02c2fe823013d78d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_497395e1d6a8d4c4b4c5effd13a201e20dc04a32ef7e5af02c2fe823013d78d8->enter($__internal_497395e1d6a8d4c4b4c5effd13a201e20dc04a32ef7e5af02c2fe823013d78d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c63f21ca0618434ee9c112f237aa992c1f36cda2091b81dcb732294a6a4dbaa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c63f21ca0618434ee9c112f237aa992c1f36cda2091b81dcb732294a6a4dbaa3->enter($__internal_c63f21ca0618434ee9c112f237aa992c1f36cda2091b81dcb732294a6a4dbaa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "
        ";
        // line 5
        $this->displayBlock('meta', $context, $blocks);
        // line 8
        echo "
        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo " </title>

        ";
        // line 11
        $this->displayBlock('style', $context, $blocks);
        // line 95
        echo "
        ";
        // line 96
        $this->displayBlock('script', $context, $blocks);
        // line 118
        echo "
    ";
        
        $__internal_c63f21ca0618434ee9c112f237aa992c1f36cda2091b81dcb732294a6a4dbaa3->leave($__internal_c63f21ca0618434ee9c112f237aa992c1f36cda2091b81dcb732294a6a4dbaa3_prof);

        
        $__internal_497395e1d6a8d4c4b4c5effd13a201e20dc04a32ef7e5af02c2fe823013d78d8->leave($__internal_497395e1d6a8d4c4b4c5effd13a201e20dc04a32ef7e5af02c2fe823013d78d8_prof);

    }

    // line 5
    public function block_meta($context, array $blocks = array())
    {
        $__internal_ea36924068217b649d1cf474dac8effa4c08bbb46ae6435caf30e8d091c33469 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea36924068217b649d1cf474dac8effa4c08bbb46ae6435caf30e8d091c33469->enter($__internal_ea36924068217b649d1cf474dac8effa4c08bbb46ae6435caf30e8d091c33469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        $__internal_7208e0508ecd29fb9ad3c659e331761af4a77ec27e65ad5bc53040f34e500115 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7208e0508ecd29fb9ad3c659e331761af4a77ec27e65ad5bc53040f34e500115->enter($__internal_7208e0508ecd29fb9ad3c659e331761af4a77ec27e65ad5bc53040f34e500115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        // line 6
        echo "            <meta charset=\"utf-8\" />
        ";
        
        $__internal_7208e0508ecd29fb9ad3c659e331761af4a77ec27e65ad5bc53040f34e500115->leave($__internal_7208e0508ecd29fb9ad3c659e331761af4a77ec27e65ad5bc53040f34e500115_prof);

        
        $__internal_ea36924068217b649d1cf474dac8effa4c08bbb46ae6435caf30e8d091c33469->leave($__internal_ea36924068217b649d1cf474dac8effa4c08bbb46ae6435caf30e8d091c33469_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_0f888dfda4ae744f9039b6328039efc5467405fa28fb742b9a2600ab39c1032b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f888dfda4ae744f9039b6328039efc5467405fa28fb742b9a2600ab39c1032b->enter($__internal_0f888dfda4ae744f9039b6328039efc5467405fa28fb742b9a2600ab39c1032b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b888645d6f05145402c7e94049954e7278df20d0ff83cf33a446a2a3f26d436f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b888645d6f05145402c7e94049954e7278df20d0ff83cf33a446a2a3f26d436f->enter($__internal_b888645d6f05145402c7e94049954e7278df20d0ff83cf33a446a2a3f26d436f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Espace Etudiant 12";
        
        $__internal_b888645d6f05145402c7e94049954e7278df20d0ff83cf33a446a2a3f26d436f->leave($__internal_b888645d6f05145402c7e94049954e7278df20d0ff83cf33a446a2a3f26d436f_prof);

        
        $__internal_0f888dfda4ae744f9039b6328039efc5467405fa28fb742b9a2600ab39c1032b->leave($__internal_0f888dfda4ae744f9039b6328039efc5467405fa28fb742b9a2600ab39c1032b_prof);

    }

    // line 11
    public function block_style($context, array $blocks = array())
    {
        $__internal_f9c524687b3bbff7ce622b9e538941edfd472155f3cc2a165c7ed664c0e8cdd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9c524687b3bbff7ce622b9e538941edfd472155f3cc2a165c7ed664c0e8cdd5->enter($__internal_f9c524687b3bbff7ce622b9e538941edfd472155f3cc2a165c7ed664c0e8cdd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_4f79ded86d573e49e3717fd28e217ba359cd1011d93c9d59a426edc08fd03fa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f79ded86d573e49e3717fd28e217ba359cd1011d93c9d59a426edc08fd03fa7->enter($__internal_4f79ded86d573e49e3717fd28e217ba359cd1011d93c9d59a426edc08fd03fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 12
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/nav.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/lightbox.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/flexslider.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 17
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
        
        $__internal_4f79ded86d573e49e3717fd28e217ba359cd1011d93c9d59a426edc08fd03fa7->leave($__internal_4f79ded86d573e49e3717fd28e217ba359cd1011d93c9d59a426edc08fd03fa7_prof);

        
        $__internal_f9c524687b3bbff7ce622b9e538941edfd472155f3cc2a165c7ed664c0e8cdd5->leave($__internal_f9c524687b3bbff7ce622b9e538941edfd472155f3cc2a165c7ed664c0e8cdd5_prof);

    }

    // line 96
    public function block_script($context, array $blocks = array())
    {
        $__internal_c6986b66a7fa256ae115d68c9931c86b5eab59ad06a808a593128a80ea951d3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6986b66a7fa256ae115d68c9931c86b5eab59ad06a808a593128a80ea951d3e->enter($__internal_c6986b66a7fa256ae115d68c9931c86b5eab59ad06a808a593128a80ea951d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_db88cbc66551940174f2ead257a026153e50581c7c84762e6e6ec5d93e19b5a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db88cbc66551940174f2ead257a026153e50581c7c84762e6e6ec5d93e19b5a2->enter($__internal_db88cbc66551940174f2ead257a026153e50581c7c84762e6e6ec5d93e19b5a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 97
        echo "        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/uisearch.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/SmoothScroll.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/numscroller-1.0.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/nav.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/move-top.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/lightbox-plus-jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/easing.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/classie.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>

    <script>
    </script>





    ";
        
        $__internal_db88cbc66551940174f2ead257a026153e50581c7c84762e6e6ec5d93e19b5a2->leave($__internal_db88cbc66551940174f2ead257a026153e50581c7c84762e6e6ec5d93e19b5a2_prof);

        
        $__internal_c6986b66a7fa256ae115d68c9931c86b5eab59ad06a808a593128a80ea951d3e->leave($__internal_c6986b66a7fa256ae115d68c9931c86b5eab59ad06a808a593128a80ea951d3e_prof);

    }

    // line 124
    public function block_header($context, array $blocks = array())
    {
        $__internal_ddcd580cc9cb520e797c9abff1f2ff0f6697c178c8e150859d7f0509cef49f2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddcd580cc9cb520e797c9abff1f2ff0f6697c178c8e150859d7f0509cef49f2c->enter($__internal_ddcd580cc9cb520e797c9abff1f2ff0f6697c178c8e150859d7f0509cef49f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_0042850441b8e9566812448d87f8932fda0bee25e50eee494396543ba0bf33d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0042850441b8e9566812448d87f8932fda0bee25e50eee494396543ba0bf33d6->enter($__internal_0042850441b8e9566812448d87f8932fda0bee25e50eee494396543ba0bf33d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 125
        echo "        <nav class=\"navbar navbar-default\">
            <div class=\"container-fluid\">
                <div class=\"col-md-2\">
                    <img src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/abcd.png"), "html", null, true);
        echo "\">
                </div>
                <div class=\"col-md-8 middlebarmenu\">
                    <ul class=\"snip1189\">
                        <li class=\"current\"><a href=\"#\">Home</a></li>
                        <li><a href=\"";
        // line 133
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_events");
        echo "\">Events</a></li>
                        <li><a href=\"";
        // line 134
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_club");
        echo "\">Club</a></li>
                        <li><a href=\"";
        // line 135
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_docs");
        echo "\">Docs</a></li>
                        <li><a href=\"";
        // line 136
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_spotted");
        echo "\">Spotted</a></li>

                    </ul>
                </div>
                <div class=\"col-md-2\">C</div>
            </div>
        </nav>



    ";
        
        $__internal_0042850441b8e9566812448d87f8932fda0bee25e50eee494396543ba0bf33d6->leave($__internal_0042850441b8e9566812448d87f8932fda0bee25e50eee494396543ba0bf33d6_prof);

        
        $__internal_ddcd580cc9cb520e797c9abff1f2ff0f6697c178c8e150859d7f0509cef49f2c->leave($__internal_ddcd580cc9cb520e797c9abff1f2ff0f6697c178c8e150859d7f0509cef49f2c_prof);

    }

    // line 152
    public function block_section1($context, array $blocks = array())
    {
        $__internal_4dcaccada93ffdea973775a74ad048fe61cae3f6031a3ef9fce040de108201b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dcaccada93ffdea973775a74ad048fe61cae3f6031a3ef9fce040de108201b4->enter($__internal_4dcaccada93ffdea973775a74ad048fe61cae3f6031a3ef9fce040de108201b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section1"));

        $__internal_40a31abd84a5ba9e917f83ab86c3bd97fbc9c652f94fcde2c0522320b004a4d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40a31abd84a5ba9e917f83ab86c3bd97fbc9c652f94fcde2c0522320b004a4d9->enter($__internal_40a31abd84a5ba9e917f83ab86c3bd97fbc9c652f94fcde2c0522320b004a4d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section1"));

        // line 153
        echo "

        <div class=\"w3l-banner\">
            <div class=\"banner-dott\">
                <div class=\"header\">
                    <!-- //Header -->
                    <div class=\"container\">
                        <div class=\"flexslider-info\">
                            <section class=\"slider\">
                                <div class=\"flexslider\">
                                    <div class=\"flex-viewport\" style=\"overflow: hidden; position: relative;\">
                                        <ul class=\"slides\" style=\"width: 1000%; transition-duration: 0s; transform: translate3d(-1140px, 0px, 0px);\">
                                            <li class=\"clone\" style=\"width: 1140px; float: left; display: block;\">
                                                <div class=\"w3l-info\">
                                                    <h3>Because you care...</h3>
                                                    <div class=\"col-md-4\">
                                                        <div class=\"grid1\">
                                                            <i aria-hidden=\"true\" class=\"fa fa-book\"></i>
                                                            <p>SAVING THE PLANET By educating people</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-4\">
                                                        <div class=\"grid1\">
                                                            <i aria-hidden=\"true\" class=\"fa fa-pencil\"></i>
                                                            <p>Education is to unlock the freedom</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-4\">
                                                        <div class=\"grid1\">
                                                            <i aria-hidden=\"true\" class=\"fa fa-graduation-cap\"></i>
                                                            <p>The aim of education is not knowledge</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"clearfix\"></div>
                                                </div>
                                            </li>
                                            <li class=\"flex-active-slide\" style=\"width: 1140px; float: left; display: block;\">
                                                <div class=\"w3l-info\">
                                                    <h2>Because you care...</h2>
                                                    <div class=\"col-md-4\">
                                                        <div class=\"grid1\">
                                                            <i aria-hidden=\"true\" class=\"fa fa-graduation-cap\"></i>
                                                            <p>5 Derniers Collocation</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-4\">
                                                        <div class=\"grid1\">
                                                            <i aria-hidden=\"true\" class=\"fa fa-pencil\"></i>
                                                            <p>5 Derniers Objets perdues</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-4\">
                                                        <div class=\"grid1\">
                                                            <i aria-hidden=\"true\" class=\"fa fa-book\"></i>
                                                            <p>5 Derniers evenements</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"clearfix\"></div>
                                                </div>
                                            </li>
                                            <li class=\"\" style=\"width: 1140px; float: left; display: block;\">
                                                <div class=\"w3l-info\">
                                                    <h3>Education is important to our life</h3>
                                                    <div class=\"col-md-4\">
                                                        <div class=\"grid1\">
                                                            <i aria-hidden=\"true\" class=\"fa fa-pencil\"></i>
                                                            <p>Education is not pail but lighting of fire.</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-4\">
                                                        <div class=\"grid1\">
                                                            <i aria-hidden=\"true\" class=\"fa fa-graduation-cap\"></i>
                                                            <p>Education is the key to success in life</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-4\">
                                                        <div class=\"grid1\">
                                                            <i aria-hidden=\"true\" class=\"fa fa-book\"></i>
                                                            <p>Education is not preparation,is life</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"clearfix\"></div>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>

                                    <ul class=\"flex-direction-nav\">
                                        <li>
                                            <a class=\"flex-prev\" href=\"#\">Previous</a>
                                        </li>
                                        <li>
                                            <a class=\"flex-next\" href=\"#\">Next</a>
                                        </li>
                                    </ul>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    ";
        
        $__internal_40a31abd84a5ba9e917f83ab86c3bd97fbc9c652f94fcde2c0522320b004a4d9->leave($__internal_40a31abd84a5ba9e917f83ab86c3bd97fbc9c652f94fcde2c0522320b004a4d9_prof);

        
        $__internal_4dcaccada93ffdea973775a74ad048fe61cae3f6031a3ef9fce040de108201b4->leave($__internal_4dcaccada93ffdea973775a74ad048fe61cae3f6031a3ef9fce040de108201b4_prof);

    }

    // line 264
    public function block_section2($context, array $blocks = array())
    {
        $__internal_0f09dd79af6ff733dd289652e5786b6f867880d3232adca3cebdabe94d9b3b86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f09dd79af6ff733dd289652e5786b6f867880d3232adca3cebdabe94d9b3b86->enter($__internal_0f09dd79af6ff733dd289652e5786b6f867880d3232adca3cebdabe94d9b3b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

        $__internal_53ba16b9132353e18a198fce6f888febc5569dfebdb7bc34a1d6652bd8ddafec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53ba16b9132353e18a198fce6f888febc5569dfebdb7bc34a1d6652bd8ddafec->enter($__internal_53ba16b9132353e18a198fce6f888febc5569dfebdb7bc34a1d6652bd8ddafec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

        // line 265
        echo "        <div class=\"about\" id=\"about\">
            <div class=\"container\">
                <div class=\"about-head text-center \">
                    <h3>About</h3>
                </div>
                <div class=\"about-top-grids\">
                    <div class=\"col-md-3 grid\">
                        <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                        <h3>Education-key to unlock door of freedom</h3>
                    </div>
                    <div class=\"col-md-3 grid\">
                        <i class=\"fa fa-book\" aria-hidden=\"true\"></i>
                        <h3>Education is the passport to the future</h3>
                    </div>
                    <div class=\"col-md-3 grid\">
                        <i class=\"fa fa-flask\" aria-hidden=\"true\"></i>
                        <h3>Education is the premise of the progress</h3>
                    </div>
                    <div class=\"col-md-3 grid\">
                        <i class=\"fa fa-graduation-cap\" aria-hidden=\"true\"></i>
                        <h3>Education is the most powerful weapon</h3>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"about-bottom-grid1\">
                    <div class=\"col-md-6 bottomgridtext\">
                        <h3>Lorem ipsum dolor sit amet ?</h3>
                        <p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem , eaque ipsa quae ab illo inventore </p>
                        <div class=\"readmore-w3\">
                            <a class=\"readmore\" href=\"#\" data-toggle=\"modal\" data-target=\"#myModal1\">Read More<i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i></a>
                        </div>
                    </div>
                    <div class=\"col-md-6 bottomgridimg\">
                        <img src=";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/about1.jpg"), "html", null, true);
        echo " alt=\"\">
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"about-bottom-grid2\">
                    <div class=\"col-md-6 bottomgridimg\">
                        <img src=";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/about2.jpg"), "html", null, true);
        echo " alt=\"\">
                    </div>
                    <div class=\"col-md-6 bottomgridtext bottomleft\">
                        <h3>Lorem ipsum dolor sit amet ?</h3>
                        <p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem , eaque ipsa quae ab illo inventore </p>
                        <div class=\"readmore-w3\">
                            <a class=\"readmore\" href=\"#\" data-toggle=\"modal\" data-target=\"#myModal1\">Read More<i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i></a>
                        </div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>

    ";
        
        $__internal_53ba16b9132353e18a198fce6f888febc5569dfebdb7bc34a1d6652bd8ddafec->leave($__internal_53ba16b9132353e18a198fce6f888febc5569dfebdb7bc34a1d6652bd8ddafec_prof);

        
        $__internal_0f09dd79af6ff733dd289652e5786b6f867880d3232adca3cebdabe94d9b3b86->leave($__internal_0f09dd79af6ff733dd289652e5786b6f867880d3232adca3cebdabe94d9b3b86_prof);

    }

    // line 324
    public function block_section3($context, array $blocks = array())
    {
        $__internal_662fdf817a2a90d9858ef1138cb5fe83362848ed7a8d96a3178bcd8b912596db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_662fdf817a2a90d9858ef1138cb5fe83362848ed7a8d96a3178bcd8b912596db->enter($__internal_662fdf817a2a90d9858ef1138cb5fe83362848ed7a8d96a3178bcd8b912596db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

        $__internal_bbf925aaab2230c9832615a55d8c00cf9b9bc99022c24621078c5cc6f6230b4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbf925aaab2230c9832615a55d8c00cf9b9bc99022c24621078c5cc6f6230b4f->enter($__internal_bbf925aaab2230c9832615a55d8c00cf9b9bc99022c24621078c5cc6f6230b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

        // line 325
        echo "        <div class=\"services\" id=\"services\">
            <div class=\"banner-dott1\">
                <div class=\"container\">
                    <div class=\"about-head text-center \">
                        <h3>Services</h3>
                    </div>

                    <div class=\"service-top-grids\">
                        <div class=\"col-md-3\">
                            <div class=\"service1\">
                                <div class=\"col-md-4 icon\">
                                    <i class=\"fa fa-graduation-cap\" aria-hidden=\"true\"></i>
                                </div>
                                <div class=\"col-md-8 serviceicon\">
                                    <h4>Lorem ipsum dolor sit amet</h4>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"service2\">
                                <div class=\"col-md-4 icon\">
                                    <i class=\"fa fa-book\" aria-hidden=\"true\"></i>
                                </div>
                                <div class=\"col-md-8 serviceicon\">
                                    <h4>Lorem ipsum dolor sit amet</h4>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"service3\">
                                <div class=\"col-md-4 icon\">
                                    <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                                </div>
                                <div class=\"col-md-8 serviceicon\">
                                    <h4>Lorem ipsum dolor sit amet</h4>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"service4\">
                                <div class=\"col-md-4 icon\">
                                    <i class=\"fa fa-flask\" aria-hidden=\"true\"></i>
                                </div>
                                <div class=\"col-md-8 serviceicon\">
                                    <h4>Lorem ipsum dolor sit amet</h4>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"service-bottom-grids\">
                        <div class=\"col-md-3\">
                            <div class=\"service1\">
                                <div class=\"col-md-4 icon\">
                                    <i class=\"fa fa-book\" aria-hidden=\"true\"></i>
                                </div>
                                <div class=\"col-md-8 serviceicon\">
                                    <h4>Lorem ipsum dolor sit amet</h4>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"service2\">
                                <div class=\"col-md-4 icon\">
                                    <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                                </div>
                                <div class=\"col-md-8 serviceicon\">
                                    <h4>Lorem ipsum dolor sit amet</h4>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"service3\">
                                <div class=\"col-md-4 icon\">
                                    <i class=\"fa fa-flask\" aria-hidden=\"true\"></i>
                                </div>
                                <div class=\"col-md-8 serviceicon\">
                                    <h4>Lorem ipsum dolor sit amet</h4>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"service4\">
                                <div class=\"col-md-4 icon\">
                                    <i class=\"fa fa-graduation-cap\" aria-hidden=\"true\"></i>
                                </div>
                                <div class=\"col-md-8 serviceicon\">
                                    <h4>Lorem ipsum dolor sit amet</h4>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"col-md-6 servicebottomtext\">
                        <p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem , eaque ipsa quae ab illo inventore
                            Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem , eaque ipsa quae ab illo inventore
                            Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem , eaque ipsa quae ab illo inventore</p>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
    ";
        
        $__internal_bbf925aaab2230c9832615a55d8c00cf9b9bc99022c24621078c5cc6f6230b4f->leave($__internal_bbf925aaab2230c9832615a55d8c00cf9b9bc99022c24621078c5cc6f6230b4f_prof);

        
        $__internal_662fdf817a2a90d9858ef1138cb5fe83362848ed7a8d96a3178bcd8b912596db->leave($__internal_662fdf817a2a90d9858ef1138cb5fe83362848ed7a8d96a3178bcd8b912596db_prof);

    }

    // line 442
    public function block_section4($context, array $blocks = array())
    {
        $__internal_1c929157894a08a0f0300913112dd56fac3b94331ccfd43b8e132d5086a03539 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c929157894a08a0f0300913112dd56fac3b94331ccfd43b8e132d5086a03539->enter($__internal_1c929157894a08a0f0300913112dd56fac3b94331ccfd43b8e132d5086a03539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section4"));

        $__internal_663d20ab20050a7438947c79c237205a3f1586d50cb3be13064bce167e0ba0f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_663d20ab20050a7438947c79c237205a3f1586d50cb3be13064bce167e0ba0f9->enter($__internal_663d20ab20050a7438947c79c237205a3f1586d50cb3be13064bce167e0ba0f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section4"));

        // line 443
        echo "        <section class=\"team\" id=\"team\">
            <div class=\"container\">
                <div class=\"about-head text-center \">
                    <h3>Meet our Professors</h3>
                </div>

                <div class=\"team-grid-top\">
                    <div class=\"col-md-3 team1\">
                        <div class=\"inner-team1\">
                            <img src=";
        // line 452
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/t1.jpg"), "html", null, true);
        echo " alt=\"\">
                            <h3>Selena</h3>
                            <h4>Head Master</h4>
                            <p>Lorem ipsum dolor sit amet, Phasselleous carnivel dolor</p>
                            <div class=\"team-social\">
                                <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-pinterest-p\"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 team1\">
                        <div class=\"inner-team1\">
                            <img src=";
        // line 465
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/t3.jpg"), "html", null, true);
        echo " alt=\"\">
                            <h3>Mary louis</h3>
                            <h4>Science Professor</h4>
                            <p>Lorem ipsum dolor sit amet, Phasselleous carnivel dolor</p>
                            <div class=\"team-social\">
                                <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-pinterest-p\"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 team1\">
                        <div class=\"inner-team1\">
                            <img src=";
        // line 478
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/t2.jpg"), "html", null, true);
        echo " alt=\"\">
                            <h3>Paul kerry</h3>
                            <h4>Staff</h4>
                            <p>Lorem ipsum dolor sit amet, Phasselleous carnivel dolor</p>
                            <div class=\"team-social\">
                                <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-pinterest-p\"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 team1\">
                        <div class=\"inner-team1\">
                            <img src=";
        // line 491
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/t4.jpg"), "html", null, true);
        echo " alt=\"\">
                            <h3>john watson</h3>
                            <h4>Lab Staff</h4>
                            <p>Lorem ipsum dolor sit amet, Phasselleous carnivel dolor</p>
                            <div class=\"team-social\">
                                <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-pinterest-p\"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"clearfix\"></div>

            </div>
        </section>
    ";
        
        $__internal_663d20ab20050a7438947c79c237205a3f1586d50cb3be13064bce167e0ba0f9->leave($__internal_663d20ab20050a7438947c79c237205a3f1586d50cb3be13064bce167e0ba0f9_prof);

        
        $__internal_1c929157894a08a0f0300913112dd56fac3b94331ccfd43b8e132d5086a03539->leave($__internal_1c929157894a08a0f0300913112dd56fac3b94331ccfd43b8e132d5086a03539_prof);

    }

    // line 515
    public function block_section5($context, array $blocks = array())
    {
        $__internal_78e5240484b2ba76324c8e7c7d48f52a1e4ee4bdf51c2cdc8d5bdb0903ccbed1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78e5240484b2ba76324c8e7c7d48f52a1e4ee4bdf51c2cdc8d5bdb0903ccbed1->enter($__internal_78e5240484b2ba76324c8e7c7d48f52a1e4ee4bdf51c2cdc8d5bdb0903ccbed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section5"));

        $__internal_f9f6383dd88fd8778e2e77f404afe31a9cd7d8d6d6409338b842b3ebf763c167 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9f6383dd88fd8778e2e77f404afe31a9cd7d8d6d6409338b842b3ebf763c167->enter($__internal_f9f6383dd88fd8778e2e77f404afe31a9cd7d8d6d6409338b842b3ebf763c167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section5"));

        // line 516
        echo "        <div class=\"gallery\" id=\"gallery\">
            <div class=\"container\">
                <div class=\"about-head text-center \">
                    <h3>Gallery</h3>
                </div>
                <div class=\"gallery-info\">
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p1.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 524
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p2.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 529
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p2.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p3.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 534
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p3.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p4.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 539
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p4.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p5.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 544
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p5.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p6.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 549
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p6.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p7.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 554
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p7.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p8.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 559
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p8.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p9.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 564
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p9.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p10.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 569
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p10.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p11.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 574
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p11.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p12.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"";
        // line 579
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p12.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"clearfix\"> </div>
                </div>
                <script src=\"js/lightbox-plus-jquery.min.js\"></script>
            </div>
        </div>
    ";
        
        $__internal_f9f6383dd88fd8778e2e77f404afe31a9cd7d8d6d6409338b842b3ebf763c167->leave($__internal_f9f6383dd88fd8778e2e77f404afe31a9cd7d8d6d6409338b842b3ebf763c167_prof);

        
        $__internal_78e5240484b2ba76324c8e7c7d48f52a1e4ee4bdf51c2cdc8d5bdb0903ccbed1->leave($__internal_78e5240484b2ba76324c8e7c7d48f52a1e4ee4bdf51c2cdc8d5bdb0903ccbed1_prof);

    }

    // line 592
    public function block_section6($context, array $blocks = array())
    {
        $__internal_ddd173082ef8750541c6d66ccf758024c1e7ac64d3cd6a8e6688d25d42337f01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddd173082ef8750541c6d66ccf758024c1e7ac64d3cd6a8e6688d25d42337f01->enter($__internal_ddd173082ef8750541c6d66ccf758024c1e7ac64d3cd6a8e6688d25d42337f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section6"));

        $__internal_1d1efc1e81155f2e14aa94ac2ac62f0fce280fb3a95d378c0d97b22a74b171ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d1efc1e81155f2e14aa94ac2ac62f0fce280fb3a95d378c0d97b22a74b171ce->enter($__internal_1d1efc1e81155f2e14aa94ac2ac62f0fce280fb3a95d378c0d97b22a74b171ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section6"));

        // line 593
        echo "        <div class=\"count-agileits\" id=\"stats\">
            <div id=\"particles-js\"></div>
            <div class=\"about-head text-center \">
                <h3>stats</h3>
            </div>
            <div class=\"count-grids\">
                <div class=\"count-bgcolor-w3ls\">
                    <div class=\"col-md-3 count-grid\">
                        <div class=\"count hvr-bounce-to-bottom\">
                            <div class=\"numscroller numscroller-big-bottom roller-title-number-1 scrollzip isShown\" data-slno=\"1\" data-min=\"0\" data-max=\"1052\" data-delay=\".5\" data-increment=\"5\">1052</div>
                            <span></span>
                            <h5>Services available</h5>
                        </div>
                    </div>
                    <div class=\"col-md-3 count-grid\">
                        <div class=\"count hvr-bounce-to-bottom\">
                            <div class=\"numscroller numscroller-big-bottom roller-title-number-2 scrollzip isShown\" data-slno=\"2\" data-min=\"0\" data-max=\"2372\" data-delay=\".5\" data-increment=\"5\">2372</div>
                            <span></span>
                            <h5>Clients</h5>
                        </div>
                    </div>
                    <div class=\"col-md-3 count-grid\">
                        <div class=\"count hvr-bounce-to-bottom\">
                            <div class=\"numscroller numscroller-big-bottom roller-title-number-3 scrollzip isShown\" data-slno=\"3\" data-min=\"0\" data-max=\"3272\" data-delay=\".5\" data-increment=\"5\">3272</div>
                            <span></span>
                            <h5>our projects</h5>
                        </div>
                    </div>
                    <div class=\"col-md-3 count-grid\">
                        <div class=\"count hvr-bounce-to-bottom\">
                            <div class=\"numscroller numscroller-big-bottom roller-title-number-4 scrollzip isShown\" data-slno=\"4\" data-min=\"0\" data-max=\"1509\" data-delay=\".5\" data-increment=\"5\">1509</div>
                            <span></span>
                            <h5>Viewers</h5>
                        </div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
            <div class=\"statsimg\">
                <div class=\"quote\">
                    <span></span>
                    <h3>Education doesn't give life instead knowledge gives</h3>
                    <span></span>
                </div>
            </div>
        </div>
    ";
        
        $__internal_1d1efc1e81155f2e14aa94ac2ac62f0fce280fb3a95d378c0d97b22a74b171ce->leave($__internal_1d1efc1e81155f2e14aa94ac2ac62f0fce280fb3a95d378c0d97b22a74b171ce_prof);

        
        $__internal_ddd173082ef8750541c6d66ccf758024c1e7ac64d3cd6a8e6688d25d42337f01->leave($__internal_ddd173082ef8750541c6d66ccf758024c1e7ac64d3cd6a8e6688d25d42337f01_prof);

    }

    // line 651
    public function block_footer($context, array $blocks = array())
    {
        $__internal_cc71208bef74fe86fbcb29e3d74097f6eb5a9104f7a3668bca3bda9a485a45d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc71208bef74fe86fbcb29e3d74097f6eb5a9104f7a3668bca3bda9a485a45d6->enter($__internal_cc71208bef74fe86fbcb29e3d74097f6eb5a9104f7a3668bca3bda9a485a45d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_59a7093e61977c1642d3e00059402bc2ebd4f1ef5db2e98a9f8751786f1c520c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59a7093e61977c1642d3e00059402bc2ebd4f1ef5db2e98a9f8751786f1c520c->enter($__internal_59a7093e61977c1642d3e00059402bc2ebd4f1ef5db2e98a9f8751786f1c520c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 652
        echo "        <div class=\"copyright-agile\">
            <p>© 2018 All rights reserved | Design by <a href=\"#\">Davinci Coders</a></p>
        </div>
    ";
        
        $__internal_59a7093e61977c1642d3e00059402bc2ebd4f1ef5db2e98a9f8751786f1c520c->leave($__internal_59a7093e61977c1642d3e00059402bc2ebd4f1ef5db2e98a9f8751786f1c520c_prof);

        
        $__internal_cc71208bef74fe86fbcb29e3d74097f6eb5a9104f7a3668bca3bda9a485a45d6->leave($__internal_cc71208bef74fe86fbcb29e3d74097f6eb5a9104f7a3668bca3bda9a485a45d6_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1086 => 652,  1077 => 651,  1021 => 593,  1012 => 592,  993 => 579,  985 => 574,  977 => 569,  969 => 564,  961 => 559,  953 => 554,  945 => 549,  937 => 544,  929 => 539,  921 => 534,  913 => 529,  905 => 524,  895 => 516,  886 => 515,  858 => 491,  842 => 478,  826 => 465,  810 => 452,  799 => 443,  790 => 442,  670 => 325,  661 => 324,  636 => 304,  627 => 298,  592 => 265,  583 => 264,  469 => 153,  460 => 152,  439 => 136,  435 => 135,  431 => 134,  427 => 133,  419 => 128,  414 => 125,  405 => 124,  385 => 108,  381 => 107,  377 => 106,  373 => 105,  369 => 104,  365 => 103,  361 => 102,  357 => 101,  353 => 100,  349 => 99,  345 => 98,  342 => 97,  333 => 96,  245 => 17,  241 => 16,  237 => 15,  233 => 14,  229 => 13,  224 => 12,  215 => 11,  197 => 9,  186 => 6,  177 => 5,  166 => 118,  164 => 96,  161 => 95,  159 => 11,  154 => 9,  151 => 8,  149 => 5,  146 => 4,  137 => 3,  123 => 656,  121 => 651,  108 => 640,  106 => 592,  100 => 588,  98 => 515,  90 => 509,  88 => 442,  80 => 436,  78 => 324,  71 => 319,  69 => 264,  61 => 258,  59 => 152,  52 => 147,  50 => 124,  44 => 120,  42 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
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

<body>

<div class=\"section1\">
    {% block section1 %}


        <div class=\"w3l-banner\">
            <div class=\"banner-dott\">
                <div class=\"header\">
                    <!-- //Header -->
                    <div class=\"container\">
                        <div class=\"flexslider-info\">
                            <section class=\"slider\">
                                <div class=\"flexslider\">
                                    <div class=\"flex-viewport\" style=\"overflow: hidden; position: relative;\">
                                        <ul class=\"slides\" style=\"width: 1000%; transition-duration: 0s; transform: translate3d(-1140px, 0px, 0px);\">
                                            <li class=\"clone\" style=\"width: 1140px; float: left; display: block;\">
                                                <div class=\"w3l-info\">
                                                    <h3>Because you care...</h3>
                                                    <div class=\"col-md-4\">
                                                        <div class=\"grid1\">
                                                            <i aria-hidden=\"true\" class=\"fa fa-book\"></i>
                                                            <p>SAVING THE PLANET By educating people</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-4\">
                                                        <div class=\"grid1\">
                                                            <i aria-hidden=\"true\" class=\"fa fa-pencil\"></i>
                                                            <p>Education is to unlock the freedom</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-4\">
                                                        <div class=\"grid1\">
                                                            <i aria-hidden=\"true\" class=\"fa fa-graduation-cap\"></i>
                                                            <p>The aim of education is not knowledge</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"clearfix\"></div>
                                                </div>
                                            </li>
                                            <li class=\"flex-active-slide\" style=\"width: 1140px; float: left; display: block;\">
                                                <div class=\"w3l-info\">
                                                    <h2>Because you care...</h2>
                                                    <div class=\"col-md-4\">
                                                        <div class=\"grid1\">
                                                            <i aria-hidden=\"true\" class=\"fa fa-graduation-cap\"></i>
                                                            <p>5 Derniers Collocation</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-4\">
                                                        <div class=\"grid1\">
                                                            <i aria-hidden=\"true\" class=\"fa fa-pencil\"></i>
                                                            <p>5 Derniers Objets perdues</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-4\">
                                                        <div class=\"grid1\">
                                                            <i aria-hidden=\"true\" class=\"fa fa-book\"></i>
                                                            <p>5 Derniers evenements</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"clearfix\"></div>
                                                </div>
                                            </li>
                                            <li class=\"\" style=\"width: 1140px; float: left; display: block;\">
                                                <div class=\"w3l-info\">
                                                    <h3>Education is important to our life</h3>
                                                    <div class=\"col-md-4\">
                                                        <div class=\"grid1\">
                                                            <i aria-hidden=\"true\" class=\"fa fa-pencil\"></i>
                                                            <p>Education is not pail but lighting of fire.</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-4\">
                                                        <div class=\"grid1\">
                                                            <i aria-hidden=\"true\" class=\"fa fa-graduation-cap\"></i>
                                                            <p>Education is the key to success in life</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-4\">
                                                        <div class=\"grid1\">
                                                            <i aria-hidden=\"true\" class=\"fa fa-book\"></i>
                                                            <p>Education is not preparation,is life</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"clearfix\"></div>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>

                                    <ul class=\"flex-direction-nav\">
                                        <li>
                                            <a class=\"flex-prev\" href=\"#\">Previous</a>
                                        </li>
                                        <li>
                                            <a class=\"flex-next\" href=\"#\">Next</a>
                                        </li>
                                    </ul>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    {% endblock %}
</div>




<div class=\"section2\">
    {% block section2 %}
        <div class=\"about\" id=\"about\">
            <div class=\"container\">
                <div class=\"about-head text-center \">
                    <h3>About</h3>
                </div>
                <div class=\"about-top-grids\">
                    <div class=\"col-md-3 grid\">
                        <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                        <h3>Education-key to unlock door of freedom</h3>
                    </div>
                    <div class=\"col-md-3 grid\">
                        <i class=\"fa fa-book\" aria-hidden=\"true\"></i>
                        <h3>Education is the passport to the future</h3>
                    </div>
                    <div class=\"col-md-3 grid\">
                        <i class=\"fa fa-flask\" aria-hidden=\"true\"></i>
                        <h3>Education is the premise of the progress</h3>
                    </div>
                    <div class=\"col-md-3 grid\">
                        <i class=\"fa fa-graduation-cap\" aria-hidden=\"true\"></i>
                        <h3>Education is the most powerful weapon</h3>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"about-bottom-grid1\">
                    <div class=\"col-md-6 bottomgridtext\">
                        <h3>Lorem ipsum dolor sit amet ?</h3>
                        <p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem , eaque ipsa quae ab illo inventore </p>
                        <div class=\"readmore-w3\">
                            <a class=\"readmore\" href=\"#\" data-toggle=\"modal\" data-target=\"#myModal1\">Read More<i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i></a>
                        </div>
                    </div>
                    <div class=\"col-md-6 bottomgridimg\">
                        <img src={{ asset(\"images/about1.jpg\") }} alt=\"\">
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"about-bottom-grid2\">
                    <div class=\"col-md-6 bottomgridimg\">
                        <img src={{ asset(\"images/about2.jpg\") }} alt=\"\">
                    </div>
                    <div class=\"col-md-6 bottomgridtext bottomleft\">
                        <h3>Lorem ipsum dolor sit amet ?</h3>
                        <p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem , eaque ipsa quae ab illo inventore </p>
                        <div class=\"readmore-w3\">
                            <a class=\"readmore\" href=\"#\" data-toggle=\"modal\" data-target=\"#myModal1\">Read More<i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i></a>
                        </div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>

    {% endblock %}
</div>



<div class=\"section3\">
    {% block section3 %}
        <div class=\"services\" id=\"services\">
            <div class=\"banner-dott1\">
                <div class=\"container\">
                    <div class=\"about-head text-center \">
                        <h3>Services</h3>
                    </div>

                    <div class=\"service-top-grids\">
                        <div class=\"col-md-3\">
                            <div class=\"service1\">
                                <div class=\"col-md-4 icon\">
                                    <i class=\"fa fa-graduation-cap\" aria-hidden=\"true\"></i>
                                </div>
                                <div class=\"col-md-8 serviceicon\">
                                    <h4>Lorem ipsum dolor sit amet</h4>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"service2\">
                                <div class=\"col-md-4 icon\">
                                    <i class=\"fa fa-book\" aria-hidden=\"true\"></i>
                                </div>
                                <div class=\"col-md-8 serviceicon\">
                                    <h4>Lorem ipsum dolor sit amet</h4>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"service3\">
                                <div class=\"col-md-4 icon\">
                                    <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                                </div>
                                <div class=\"col-md-8 serviceicon\">
                                    <h4>Lorem ipsum dolor sit amet</h4>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"service4\">
                                <div class=\"col-md-4 icon\">
                                    <i class=\"fa fa-flask\" aria-hidden=\"true\"></i>
                                </div>
                                <div class=\"col-md-8 serviceicon\">
                                    <h4>Lorem ipsum dolor sit amet</h4>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"service-bottom-grids\">
                        <div class=\"col-md-3\">
                            <div class=\"service1\">
                                <div class=\"col-md-4 icon\">
                                    <i class=\"fa fa-book\" aria-hidden=\"true\"></i>
                                </div>
                                <div class=\"col-md-8 serviceicon\">
                                    <h4>Lorem ipsum dolor sit amet</h4>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"service2\">
                                <div class=\"col-md-4 icon\">
                                    <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                                </div>
                                <div class=\"col-md-8 serviceicon\">
                                    <h4>Lorem ipsum dolor sit amet</h4>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"service3\">
                                <div class=\"col-md-4 icon\">
                                    <i class=\"fa fa-flask\" aria-hidden=\"true\"></i>
                                </div>
                                <div class=\"col-md-8 serviceicon\">
                                    <h4>Lorem ipsum dolor sit amet</h4>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"service4\">
                                <div class=\"col-md-4 icon\">
                                    <i class=\"fa fa-graduation-cap\" aria-hidden=\"true\"></i>
                                </div>
                                <div class=\"col-md-8 serviceicon\">
                                    <h4>Lorem ipsum dolor sit amet</h4>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"col-md-6 servicebottomtext\">
                        <p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem , eaque ipsa quae ab illo inventore
                            Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem , eaque ipsa quae ab illo inventore
                            Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem , eaque ipsa quae ab illo inventore</p>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
    {% endblock %}
</div>




<div class=\"section4\">
    {% block section4 %}
        <section class=\"team\" id=\"team\">
            <div class=\"container\">
                <div class=\"about-head text-center \">
                    <h3>Meet our Professors</h3>
                </div>

                <div class=\"team-grid-top\">
                    <div class=\"col-md-3 team1\">
                        <div class=\"inner-team1\">
                            <img src={{ asset(\"images/t1.jpg\") }} alt=\"\">
                            <h3>Selena</h3>
                            <h4>Head Master</h4>
                            <p>Lorem ipsum dolor sit amet, Phasselleous carnivel dolor</p>
                            <div class=\"team-social\">
                                <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-pinterest-p\"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 team1\">
                        <div class=\"inner-team1\">
                            <img src={{ asset(\"images/t3.jpg\") }} alt=\"\">
                            <h3>Mary louis</h3>
                            <h4>Science Professor</h4>
                            <p>Lorem ipsum dolor sit amet, Phasselleous carnivel dolor</p>
                            <div class=\"team-social\">
                                <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-pinterest-p\"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 team1\">
                        <div class=\"inner-team1\">
                            <img src={{ asset(\"images/t2.jpg\") }} alt=\"\">
                            <h3>Paul kerry</h3>
                            <h4>Staff</h4>
                            <p>Lorem ipsum dolor sit amet, Phasselleous carnivel dolor</p>
                            <div class=\"team-social\">
                                <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-pinterest-p\"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 team1\">
                        <div class=\"inner-team1\">
                            <img src={{ asset(\"images/t4.jpg\") }} alt=\"\">
                            <h3>john watson</h3>
                            <h4>Lab Staff</h4>
                            <p>Lorem ipsum dolor sit amet, Phasselleous carnivel dolor</p>
                            <div class=\"team-social\">
                                <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-pinterest-p\"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"clearfix\"></div>

            </div>
        </section>
    {% endblock %}
</div>




<div class=\"section5\">
    {% block section5 %}
        <div class=\"gallery\" id=\"gallery\">
            <div class=\"container\">
                <div class=\"about-head text-center \">
                    <h3>Gallery</h3>
                </div>
                <div class=\"gallery-info\">
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p1.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"{{ asset(\"images/p1.jpg\") }}\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p2.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"{{ asset(\"images/p2.jpg\") }}\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p3.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"{{ asset(\"images/p3.jpg\") }}\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p4.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"{{ asset(\"images/p4.jpg\") }}\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p5.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"{{ asset(\"images/p5.jpg\") }}\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p6.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"{{ asset(\"images/p6.jpg\") }}\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p7.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"{{ asset(\"images/p7.jpg\") }}\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p8.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"{{ asset(\"images/p8.jpg\") }}\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p9.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"{{ asset(\"images/p9.jpg\") }}\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p10.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"{{ asset(\"images/p10.jpg\") }}\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p11.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"{{ asset(\"images/p11.jpg\") }}\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"col-md-3 gallery-grids\">
                        <a href=\"images/p12.jpg\") }}\" class=\"gallery-box\" data-lightbox=\"example-set\" data-title=\"\">
                        <img src=\"{{ asset(\"images/p12.jpg\") }}\" alt=\"\" class=\"img-responsive zoom-img\">
                        </a>
                    </div>
                    <div class=\"clearfix\"> </div>
                </div>
                <script src=\"js/lightbox-plus-jquery.min.js\"></script>
            </div>
        </div>
    {% endblock %}
</div>


<div class=\"section6\">
    {% block section6 %}
        <div class=\"count-agileits\" id=\"stats\">
            <div id=\"particles-js\"></div>
            <div class=\"about-head text-center \">
                <h3>stats</h3>
            </div>
            <div class=\"count-grids\">
                <div class=\"count-bgcolor-w3ls\">
                    <div class=\"col-md-3 count-grid\">
                        <div class=\"count hvr-bounce-to-bottom\">
                            <div class=\"numscroller numscroller-big-bottom roller-title-number-1 scrollzip isShown\" data-slno=\"1\" data-min=\"0\" data-max=\"1052\" data-delay=\".5\" data-increment=\"5\">1052</div>
                            <span></span>
                            <h5>Services available</h5>
                        </div>
                    </div>
                    <div class=\"col-md-3 count-grid\">
                        <div class=\"count hvr-bounce-to-bottom\">
                            <div class=\"numscroller numscroller-big-bottom roller-title-number-2 scrollzip isShown\" data-slno=\"2\" data-min=\"0\" data-max=\"2372\" data-delay=\".5\" data-increment=\"5\">2372</div>
                            <span></span>
                            <h5>Clients</h5>
                        </div>
                    </div>
                    <div class=\"col-md-3 count-grid\">
                        <div class=\"count hvr-bounce-to-bottom\">
                            <div class=\"numscroller numscroller-big-bottom roller-title-number-3 scrollzip isShown\" data-slno=\"3\" data-min=\"0\" data-max=\"3272\" data-delay=\".5\" data-increment=\"5\">3272</div>
                            <span></span>
                            <h5>our projects</h5>
                        </div>
                    </div>
                    <div class=\"col-md-3 count-grid\">
                        <div class=\"count hvr-bounce-to-bottom\">
                            <div class=\"numscroller numscroller-big-bottom roller-title-number-4 scrollzip isShown\" data-slno=\"4\" data-min=\"0\" data-max=\"1509\" data-delay=\".5\" data-increment=\"5\">1509</div>
                            <span></span>
                            <h5>Viewers</h5>
                        </div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
            <div class=\"statsimg\">
                <div class=\"quote\">
                    <span></span>
                    <h3>Education doesn't give life instead knowledge gives</h3>
                    <span></span>
                </div>
            </div>
        </div>
    {% endblock %}
</div>






</body>


<div class=\"section-footer\">
    {% block footer %}
        <div class=\"copyright-agile\">
            <p>© 2018 All rights reserved | Design by <a href=\"#\">Davinci Coders</a></p>
        </div>
    {% endblock %}
</div>

</html>

", "default/index.html.twig", "C:\\wamp64\\www\\pidev\\app\\Resources\\views\\default\\index.html.twig");
    }
}
