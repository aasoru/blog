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

/* partials/blog_item.html.twig */
class __TwigTemplate_e70e46ee35703accbccb6f6749e43a7e098db485692830f5ad89f052e10bb9f2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"list-item\">

    ";
        // line 3
        $context["header_image"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image", []), true);
        // line 4
        echo "    ";
        $context["header_image_width"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image_width", []), 900);
        // line 5
        echo "    ";
        $context["header_image_height"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image_height", []), 300);
        // line 6
        echo "    ";
        $context["header_image_file"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image_file", []);
        // line 7
        echo "
    <div class=\"list-blog-header\">
        <span class=\"list-blog-date\">
            <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
            <time class=\"dt-published\" datetime=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "c"), "html", null, true);
        echo "\">
                <!--";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), ($context["dateformat"] ?? null)), "html", null, true);
        echo "-->
                ";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "d"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translateArray("GRAV.MONTHS_OF_THE_YEAR", (twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "n") - 1)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "Y"), "html", null, true);
        echo "
            </time>
        </span>
        ";
        // line 16
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "link", [])) {
            // line 17
            echo "            <h4>
                ";
            // line 18
            if ( !($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "continue_link", []) === false)) {
                // line 19
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", []), "html", null, true);
                echo "\"><i class=\"fa fa-angle-double-right\"></i></a>
                ";
            }
            // line 21
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "link", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
            echo "</a>
            </h4>
        ";
        } else {
            // line 24
            echo "            <h4><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
            echo "</a></h4>
        ";
        }
        // line 26
        echo "
        ";
        // line 27
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", [])) {
            // line 28
            echo "        <span class=\"tags\">
            ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", []));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 30
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["blog"] ?? null), "url", []), "html", null, true);
                echo "/tag";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []), "html", null, true);
                echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
                echo "</a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "        </span>
        ";
        }
        // line 34
        echo "        ";
        if (($context["header_image"] ?? null)) {
            // line 35
            echo "            ";
            if (($context["header_image_file"] ?? null)) {
                // line 36
                echo "                ";
                $context["header_image_media"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), ($context["header_image_file"] ?? null), [], "array");
                // line 37
                echo "            ";
            } else {
                // line 38
                echo "                ";
                $context["header_image_media"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
                // line 39
                echo "            ";
            }
            // line 40
            echo "            ";
            echo $this->getAttribute($this->getAttribute(($context["header_image_media"] ?? null), "cropZoom", [0 => ($context["header_image_width"] ?? null), 1 => ($context["header_image_height"] ?? null)], "method"), "html", []);
            echo "
        ";
        }
        // line 42
        echo "
    </div>

    <div class=\"list-blog-padding\">

    ";
        // line 47
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "continue_link", []) === false)) {
            // line 48
            echo "        <p>";
            echo $this->getAttribute(($context["page"] ?? null), "content", []);
            echo "</p>
        ";
            // line 49
            if ( !($context["truncate"] ?? null)) {
                // line 50
                echo "        ";
                $context["show_prev_next"] = true;
                // line 51
                echo "        ";
            }
            // line 52
            echo "    ";
        } elseif ((($context["truncate"] ?? null) && ($this->getAttribute(($context["page"] ?? null), "summary", []) != $this->getAttribute(($context["page"] ?? null), "content", [])))) {
            // line 53
            echo "        <p>";
            echo $this->getAttribute(($context["page"] ?? null), "summary", []);
            echo "</p>
        <p><a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", []), "html", null, true);
            echo "\" class=\"button\"><i class=\"fa fa-plus\" /></i>Leer más</a></p>
    ";
        } elseif (        // line 55
($context["truncate"] ?? null)) {
            // line 56
            echo "        ";
            if (($this->getAttribute(($context["page"] ?? null), "summary", []) != $this->getAttribute(($context["page"] ?? null), "content", []))) {
                // line 57
                echo "            <p>";
                echo Grav\Common\Utils::truncate($this->getAttribute(($context["page"] ?? null), "content", []), 550);
                echo "</p>
        ";
            } else {
                // line 59
                echo "            <p>";
                echo $this->getAttribute(($context["page"] ?? null), "content", []);
                echo "</p>
        ";
            }
            // line 61
            echo "        <p><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", []), "html", null, true);
            echo "\" class=\"button\"><i class=\"fa fa-plus\" /></i> Leer más</a></p>
    ";
        } else {
            // line 63
            echo "        <p>";
            echo $this->getAttribute(($context["page"] ?? null), "content", []);
            echo "</p>
        ";
            // line 64
            $context["show_prev_next"] = true;
            // line 65
            echo "    ";
        }
        // line 66
        echo "
    ";
        // line 67
        if (($context["show_prev_next"] ?? null)) {
            // line 68
            echo "
        <p class=\"prev-next\">
            ";
            // line 70
            if ( !$this->getAttribute(($context["page"] ?? null), "isFirst", [])) {
                // line 71
                echo "                <a class=\"button\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", []), "url", []), "html", null, true);
                echo "\"><i class=\"fa fa-chevron-left\"></i> Siguiente </a>
            ";
            }
            // line 73
            echo "
            ";
            // line 74
            if ( !$this->getAttribute(($context["page"] ?? null), "isLast", [])) {
                // line 75
                echo "                <a class=\"button\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", []), "url", []), "html", null, true);
                echo "\"> Anterior <i class=\"fa fa-chevron-right\"></i></a>
            ";
            }
            // line 77
            echo "        </p>
    ";
        }
        // line 79
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/blog_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 79,  248 => 77,  242 => 75,  240 => 74,  237 => 73,  231 => 71,  229 => 70,  225 => 68,  223 => 67,  220 => 66,  217 => 65,  215 => 64,  210 => 63,  204 => 61,  198 => 59,  192 => 57,  189 => 56,  187 => 55,  183 => 54,  178 => 53,  175 => 52,  172 => 51,  169 => 50,  167 => 49,  162 => 48,  160 => 47,  153 => 42,  147 => 40,  144 => 39,  141 => 38,  138 => 37,  135 => 36,  132 => 35,  129 => 34,  125 => 32,  111 => 30,  107 => 29,  104 => 28,  102 => 27,  99 => 26,  91 => 24,  82 => 21,  76 => 19,  74 => 18,  71 => 17,  69 => 16,  59 => 13,  55 => 12,  51 => 11,  45 => 7,  42 => 6,  39 => 5,  36 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"list-item\">

    {% set header_image = page.header.header_image|defined(true) %}
    {% set header_image_width  = page.header.header_image_width|defined(900) %}
    {% set header_image_height = page.header.header_image_height|defined(300) %}
    {% set header_image_file = page.header.header_image_file %}

    <div class=\"list-blog-header\">
        <span class=\"list-blog-date\">
            <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
            <time class=\"dt-published\" datetime=\"{{ page.date|date(\"c\") }}\">
                <!--{{ page.date|date(dateformat) }}-->
                {{ page.date|date('d') }} {{ 'GRAV.MONTHS_OF_THE_YEAR'|ta(page.date|date('n') - 1) }} {{ page.date|date('Y') }}
            </time>
        </span>
        {% if page.header.link %}
            <h4>
                {% if page.header.continue_link is not sameas(false) %}
                <a href=\"{{ page.url }}\"><i class=\"fa fa-angle-double-right\"></i></a>
                {% endif %}
                <a href=\"{{ page.header.link }}\">{{ page.title }}</a>
            </h4>
        {% else %}
            <h4><a href=\"{{ page.url }}\">{{ page.title }}</a></h4>
        {% endif %}

        {% if page.taxonomy.tag %}
        <span class=\"tags\">
            {% for tag in page.taxonomy.tag %}
            <a href=\"{{ blog.url }}/tag{{ config.system.param_sep }}{{ tag }}\">{{ tag }}</a>
            {% endfor %}
        </span>
        {% endif %}
        {% if header_image %}
            {% if header_image_file %}
                {% set header_image_media = page.media.images[header_image_file] %}
            {% else %}
                {% set header_image_media = page.media.images|first %}
            {% endif %}
            {{ header_image_media.cropZoom(header_image_width, header_image_height).html|raw }}
        {% endif %}

    </div>

    <div class=\"list-blog-padding\">

    {% if page.header.continue_link is sameas(false) %}
        <p>{{ page.content|raw }}</p>
        {% if not truncate %}
        {% set show_prev_next = true %}
        {% endif %}
    {% elseif truncate and page.summary != page.content %}
        <p>{{ page.summary|raw }}</p>
        <p><a href=\"{{ page.url }}\" class=\"button\"><i class=\"fa fa-plus\" /></i>Leer más</a></p>
    {% elseif truncate %}
        {% if page.summary != page.content %}
            <p>{{ page.content|truncate(550)|raw }}</p>
        {% else %}
            <p>{{ page.content|raw }}</p>
        {% endif %}
        <p><a href=\"{{ page.url }}\" class=\"button\"><i class=\"fa fa-plus\" /></i> Leer más</a></p>
    {% else %}
        <p>{{ page.content|raw }}</p>
        {% set show_prev_next = true %}
    {% endif %}

    {% if show_prev_next %}

        <p class=\"prev-next\">
            {% if not page.isFirst %}
                <a class=\"button\" href=\"{{ page.nextSibling.url }}\"><i class=\"fa fa-chevron-left\"></i> Siguiente </a>
            {% endif %}

            {% if not page.isLast %}
                <a class=\"button\" href=\"{{ page.prevSibling.url }}\"> Anterior <i class=\"fa fa-chevron-right\"></i></a>
            {% endif %}
        </p>
    {% endif %}

    </div>
</div>
", "partials/blog_item.html.twig", "/Users/aaronsosaruiz/Proyectos/blog/grav_data/user/themes/afterburner2/templates/partials/blog_item.html.twig");
    }
}
