<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/base.html.twig */
class __TwigTemplate_fbfbc516f93bf167426c086978edd8a36d4158a19b11aa799703b98c22d50414 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'assets' => [$this, 'block_assets'],
            'header' => [$this, 'block_header'],
            'header_extra' => [$this, 'block_header_extra'],
            'header_navigation' => [$this, 'block_header_navigation'],
            'body' => [$this, 'block_body'],
            'sidebar' => [$this, 'block_sidebar'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'bottom' => [$this, 'block_bottom'],
        ];
        $this->deferred = $this->env->getExtension('Twig\DeferredExtension\DeferredExtension');
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", []))), "html", null, true);
        echo "\">
<head>
";
        // line 4
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "theme", []));
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 49
        echo "</head>
<body id=\"top\" class=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []), "html", null, true);
        echo "\">
    <div id=\"sb-site\">
        ";
        // line 52
        $this->displayBlock('header', $context, $blocks);
        // line 70
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 76
        echo "
        ";
        // line 77
        $this->displayBlock('footer', $context, $blocks);
        // line 82
        echo "    </div>
    <div class=\"sb-slidebar sb-left sb-width-thin\">
        <div id=\"panel\">
        ";
        // line 85
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 85)->display($context);
        // line 86
        echo "        </div>
    </div>
    ";
        // line 88
        $this->displayBlock('bottom', $context, $blocks);
        // line 104
        echo "</body>
</html>
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        // line 6
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 7
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>
    ";
        // line 8
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 8)->display($context);
        // line 9
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/favicon.png", true), "html", null, true);
        echo "\" />
    <link rel=\"preload\" as=\"font\" type=\"font/woff\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://fonts/Biloxi-Script.ttf", true), "html", null, true);
        echo "\" crossorigin=\"\" />

    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 33
        echo "
    ";
        // line 34
        $this->displayBlock('javascripts', $context, $blocks);
        // line 43
        echo "
    ";
        // line 44
        $this->displayBlock('assets', $context, $blocks);
    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 14
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://css/pure-0.5.0/grids-min.css"], "method");
        // line 15
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://css-compiled/nucleus.css"], "method");
        // line 16
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://css-compiled/template.css"], "method");
        // line 17
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://css/font-awesome.min.css"], "method");
        // line 18
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://css/slidebars.min.css"], "method");
        // line 19
        echo "
        ";
        // line 20
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "lightbox", [])) {
            // line 21
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://css/featherlight.min.css"], "method");
            // line 22
            echo "        ";
        }
        // line 23
        echo "
        ";
        // line 24
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) == 10))) {
            // line 25
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/nucleus-ie10.css"], "method");
            // line 26
            echo "        ";
        }
        // line 27
        echo "
        ";
        // line 28
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) >= 8)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) <= 9))) {
            // line 29
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://css/nucleus-ie9.css", 1 => 99], "method");
            // line 30
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/html5shiv-printshiv.min.js", 1 => 99], "method");
            // line 31
            echo "        ";
        }
        // line 32
        echo "    ";
    }

    // line 34
    public function block_javascripts($context, array $blocks = [])
    {
        // line 35
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "jquery", 1 => 101], "method");
        // line 36
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/modernizr.custom.71422.js", 1 => 100], "method");
        // line 37
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/slidebars.min.js"], "method");
        // line 38
        echo "
        ";
        // line 39
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "lightbox", [])) {
            // line 40
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/featherlight.min.js"], "method");
            // line 41
            echo "        ";
        }
        // line 42
        echo "    ";
    }

    public function block_assets($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'assets');
    }

    // line 44
    public function block_assets_deferred($context, array $blocks = [])
    {
        // line 45
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
    ";
        // line 46
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
    ";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 52
    public function block_header($context, array $blocks = [])
    {
        // line 53
        echo "        <header id=\"header\">
                <div class=\"logo-surround\">
                    <a href=\"";
        // line 55
        (((($context["base_url"] ?? null) == "")) ? (print ("/")) : (print (twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true))));
        echo "\" id=\"logo\">Aarón Sosa</a>
                    <span class=\"logo-accent\"></span>
                </div>
                <div id=\"navbar\">
                    ";
        // line 59
        $this->displayBlock('header_extra', $context, $blocks);
        // line 60
        echo "                    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "langswitcher", []), "enabled", [])) {
            // line 61
            echo "                    ";
            $this->loadTemplate("partials/langswitcher.html.twig", "partials/base.html.twig", 61)->display($context);
            // line 62
            echo "                    ";
        }
        // line 63
        echo "                    ";
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 66
        echo "                    <span class=\"panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars\"></span>
                </div>
        </header>
        ";
    }

    // line 59
    public function block_header_extra($context, array $blocks = [])
    {
    }

    // line 63
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 64
        echo "                    ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 64)->display($context);
        // line 65
        echo "                    ";
    }

    // line 70
    public function block_body($context, array $blocks = [])
    {
        // line 71
        echo "        <section id=\"body\">
            ";
        // line 72
        $this->displayBlock('sidebar', $context, $blocks);
        // line 73
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 74
        echo "        </section>
        ";
    }

    // line 72
    public function block_sidebar($context, array $blocks = [])
    {
    }

    // line 73
    public function block_content($context, array $blocks = [])
    {
    }

    // line 77
    public function block_footer($context, array $blocks = [])
    {
        // line 78
        echo "        <footer id=\"footer\">
            <p>Made with <i class=\"fa fa-heart\"></i> by <a href=\"https://aaronsosa.org\" target=\"_blank\" rel=\"noopener\">Aarón S.</a>.</p>
        </footer>
        ";
    }

    // line 88
    public function block_bottom($context, array $blocks = [])
    {
        // line 89
        echo "    <script>
    \$(function () {
        \$(document).ready(function() {
          \$.slidebars({
            hideControlClasses: true,
            scrollLock: true
          });
        });
        ";
        // line 97
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "lightbox", [])) {
            // line 98
            echo "        \$('a[rel=\"lightbox\"]').featherlight();
        ";
        }
        // line 100
        echo "    });
    </script>
    ";
        // line 102
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo " 
    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 102,  345 => 100,  341 => 98,  339 => 97,  329 => 89,  326 => 88,  319 => 78,  316 => 77,  311 => 73,  306 => 72,  301 => 74,  298 => 73,  296 => 72,  293 => 71,  290 => 70,  286 => 65,  283 => 64,  280 => 63,  275 => 59,  268 => 66,  265 => 63,  262 => 62,  259 => 61,  256 => 60,  254 => 59,  247 => 55,  243 => 53,  240 => 52,  233 => 46,  228 => 45,  225 => 44,  216 => 42,  213 => 41,  210 => 40,  208 => 39,  205 => 38,  202 => 37,  199 => 36,  196 => 35,  193 => 34,  189 => 32,  186 => 31,  183 => 30,  180 => 29,  178 => 28,  175 => 27,  172 => 26,  169 => 25,  167 => 24,  164 => 23,  161 => 22,  158 => 21,  156 => 20,  153 => 19,  150 => 18,  147 => 17,  144 => 16,  141 => 15,  138 => 14,  135 => 13,  131 => 44,  128 => 43,  126 => 34,  123 => 33,  121 => 13,  116 => 11,  112 => 10,  109 => 9,  107 => 8,  99 => 7,  96 => 6,  93 => 5,  86 => 104,  84 => 88,  80 => 86,  78 => 85,  73 => 82,  71 => 77,  68 => 76,  65 => 70,  63 => 52,  58 => 50,  55 => 49,  53 => 5,  51 => 4,  46 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
<head>
{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>
    {% include 'partials/metadata.html.twig' %}
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png', true) }}\" />
    <link rel=\"preload\" as=\"font\" type=\"font/woff\" href=\"{{ url('theme://fonts/Biloxi-Script.ttf', true) }}\" crossorigin=\"\" />

    {% block stylesheets %}
        {% do assets.add('theme://css/pure-0.5.0/grids-min.css') %}
        {% do assets.add('theme://css-compiled/nucleus.css') %}
        {% do assets.add('theme://css-compiled/template.css') %}
        {% do assets.add('theme://css/font-awesome.min.css') %}
        {% do assets.add('theme://css/slidebars.min.css') %}

        {% if page.header.lightbox %}
            {% do assets.add('theme://css/featherlight.min.css') %}
        {% endif %}

        {% if browser.getBrowser == 'msie' and browser.getVersion == 10 %}
            {% do assets.addCss('theme://css/nucleus-ie10.css') %}
        {% endif %}

        {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}
            {% do assets.add('theme://css/nucleus-ie9.css',99) %}
            {% do assets.add('theme://js/html5shiv-printshiv.min.js',99) %}
        {% endif %}
    {% endblock %}

    {% block javascripts %}
        {% do assets.add('jquery',101) %}
        {% do assets.add('theme://js/modernizr.custom.71422.js',100) %}
        {% do assets.add('theme://js/slidebars.min.js') %}

        {% if page.header.lightbox %}
            {% do assets.add('theme://js/featherlight.min.js') %}
        {% endif %}
    {% endblock %}

    {% block assets deferred %}
    {{ assets.css()|raw }}
    {{ assets.js()|raw }}
    {% endblock %}
{% endblock head%}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes }}\">
    <div id=\"sb-site\">
        {% block header %}
        <header id=\"header\">
                <div class=\"logo-surround\">
                    <a href=\"{{ base_url == '' ? '/' : base_url }}\" id=\"logo\">Aarón Sosa</a>
                    <span class=\"logo-accent\"></span>
                </div>
                <div id=\"navbar\">
                    {% block header_extra %}{% endblock %}
                    {% if config.plugins.langswitcher.enabled %}
                    {% include 'partials/langswitcher.html.twig' %}
                    {% endif %}
                    {% block header_navigation %}
                    {% include 'partials/navigation.html.twig' %}
                    {% endblock %}
                    <span class=\"panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars\"></span>
                </div>
        </header>
        {% endblock %}
        {% block body %}
        <section id=\"body\">
            {% block sidebar %}{% endblock %}
            {% block content %}{% endblock %}
        </section>
        {% endblock %}

        {% block footer %}
        <footer id=\"footer\">
            <p>Made with <i class=\"fa fa-heart\"></i> by <a href=\"https://aaronsosa.org\" target=\"_blank\" rel=\"noopener\">Aarón S.</a>.</p>
        </footer>
        {% endblock %}
    </div>
    <div class=\"sb-slidebar sb-left sb-width-thin\">
        <div id=\"panel\">
        {% include 'partials/navigation.html.twig' %}
        </div>
    </div>
    {% block bottom %}
    <script>
    \$(function () {
        \$(document).ready(function() {
          \$.slidebars({
            hideControlClasses: true,
            scrollLock: true
          });
        });
        {% if page.header.lightbox %}
        \$('a[rel=\"lightbox\"]').featherlight();
        {% endif %}
    });
    </script>
    {{ assets.js('bottom')|raw }} 
    {% endblock %}
</body>
</html>
", "partials/base.html.twig", "/usr/share/nginx/html/user/themes/afterburner2/templates/partials/base.html.twig");
    }
}
