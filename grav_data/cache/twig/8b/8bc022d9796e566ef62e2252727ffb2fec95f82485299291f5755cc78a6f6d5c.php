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

/* blog.html.twig */
class __TwigTemplate_e76046dfd3d143b13b88469502607d6a82a484fe754df8b7529fcebda9a8da28 extends \Twig\Template
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
        $this->loadTemplate("blog.html.twig", "blog.html.twig", 1, "841004128")->display($context);
        // line 47
        echo "

";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 47,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/base.html.twig' %}

\t{% set collection = page.collection() %}
\t{% set base_url = page.url %}
\t{% set feed_url = base_url %}

    {% if base_url == '/' %}
        {% set base_url = '' %}
    {% endif %}

    {% if base_url == base_url_relative %}
        {% set feed_url = base_url~'/'~page.slug %}
    {% endif  %}

\t{% block content %}
\t\t{% if page.content|raw %}
\t\t<div class=\"blog-header\">
\t\t\t{{ page.content|raw }}
\t\t</div>
\t\t{% endif %}

\t\t{% if config.plugins.breadcrumbs.enabled %}
\t\t\t{% include 'partials/breadcrumbs.html.twig' %}
\t\t{% endif %}

\t\t<div class=\"blog-content-list grid pure-g\">
\t\t\t<div id=\"listing\" class=\"block pure-u-2-3\">
\t\t\t\t{% for child in collection %}
\t\t\t        {% include 'partials/blog_item.html.twig' with {'page':child, 'truncate':true} %}
\t\t\t    {% endfor %}

                {% block pagination %}
                    {% if config.plugins.pagination.enabled and collection.params.pagination %}
                        {% include 'partials/pagination.html.twig' with {'base_url':page.url, 'pagination':collection.params.pagination} %}
                    {% endif %}
                {% endblock %}
\t\t\t</div>
\t\t\t<div id=\"sidebar\" class=\"block size-1-3 pure-u-1-3\">
\t\t\t\t{% include 'partials/sidebar.html.twig' with {'blog':page} %}
\t\t\t</div>
\t\t</div>
\t{% endblock %}



{% endembed %}


", "blog.html.twig", "/Users/aaronsosaruiz/Proyectos/blog/grav_data/user/themes/afterburner2/templates/blog.html.twig");
    }
}


/* blog.html.twig */
class __TwigTemplate_e76046dfd3d143b13b88469502607d6a82a484fe754df8b7529fcebda9a8da28___841004128 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'pagination' => [$this, 'block_pagination'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", [], "method");
        // line 4
        $context["base_url"] = $this->getAttribute(($context["page"] ?? null), "url", []);
        // line 5
        $context["feed_url"] = ($context["base_url"] ?? null);
        // line 7
        if ((($context["base_url"] ?? null) == "/")) {
            // line 8
            $context["base_url"] = "";
        }
        // line 11
        if ((($context["base_url"] ?? null) == ($context["base_url_relative"] ?? null))) {
            // line 12
            $context["feed_url"] = ((($context["base_url"] ?? null) . "/") . $this->getAttribute(($context["page"] ?? null), "slug", []));
        }
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        // line 16
        echo "\t\t";
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 17
            echo "\t\t<div class=\"blog-header\">
\t\t\t";
            // line 18
            echo $this->getAttribute(($context["page"] ?? null), "content", []);
            echo "
\t\t</div>
\t\t";
        }
        // line 21
        echo "
\t\t";
        // line 22
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "breadcrumbs", []), "enabled", [])) {
            // line 23
            echo "\t\t\t";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "blog.html.twig", 23)->display($context);
            // line 24
            echo "\t\t";
        }
        // line 25
        echo "
\t\t<div class=\"blog-content-list grid pure-g\">
\t\t\t<div id=\"listing\" class=\"block pure-u-2-3\">
\t\t\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 29
            echo "\t\t\t        ";
            $this->loadTemplate("partials/blog_item.html.twig", "blog.html.twig", 29)->display(twig_array_merge($context, ["page" => $context["child"], "truncate" => true]));
            // line 30
            echo "\t\t\t    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
                ";
        // line 32
        $this->displayBlock('pagination', $context, $blocks);
        // line 37
        echo "\t\t\t</div>
\t\t\t<div id=\"sidebar\" class=\"block size-1-3 pure-u-1-3\">
\t\t\t\t";
        // line 39
        $this->loadTemplate("partials/sidebar.html.twig", "blog.html.twig", 39)->display(twig_array_merge($context, ["blog" => ($context["page"] ?? null)]));
        // line 40
        echo "\t\t\t</div>
\t\t</div>
\t";
    }

    // line 32
    public function block_pagination($context, array $blocks = [])
    {
        // line 33
        echo "                    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "pagination", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", []))) {
            // line 34
            echo "                        ";
            $this->loadTemplate("partials/pagination.html.twig", "blog.html.twig", 34)->display(twig_array_merge($context, ["base_url" => $this->getAttribute(($context["page"] ?? null), "url", []), "pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", [])]));
            // line 35
            echo "                    ";
        }
        // line 36
        echo "                ";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 36,  249 => 35,  246 => 34,  243 => 33,  240 => 32,  234 => 40,  232 => 39,  228 => 37,  226 => 32,  223 => 31,  209 => 30,  206 => 29,  189 => 28,  184 => 25,  181 => 24,  178 => 23,  176 => 22,  173 => 21,  167 => 18,  164 => 17,  161 => 16,  158 => 15,  153 => 1,  150 => 12,  148 => 11,  145 => 8,  143 => 7,  141 => 5,  139 => 4,  137 => 3,  131 => 1,  32 => 47,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/base.html.twig' %}

\t{% set collection = page.collection() %}
\t{% set base_url = page.url %}
\t{% set feed_url = base_url %}

    {% if base_url == '/' %}
        {% set base_url = '' %}
    {% endif %}

    {% if base_url == base_url_relative %}
        {% set feed_url = base_url~'/'~page.slug %}
    {% endif  %}

\t{% block content %}
\t\t{% if page.content|raw %}
\t\t<div class=\"blog-header\">
\t\t\t{{ page.content|raw }}
\t\t</div>
\t\t{% endif %}

\t\t{% if config.plugins.breadcrumbs.enabled %}
\t\t\t{% include 'partials/breadcrumbs.html.twig' %}
\t\t{% endif %}

\t\t<div class=\"blog-content-list grid pure-g\">
\t\t\t<div id=\"listing\" class=\"block pure-u-2-3\">
\t\t\t\t{% for child in collection %}
\t\t\t        {% include 'partials/blog_item.html.twig' with {'page':child, 'truncate':true} %}
\t\t\t    {% endfor %}

                {% block pagination %}
                    {% if config.plugins.pagination.enabled and collection.params.pagination %}
                        {% include 'partials/pagination.html.twig' with {'base_url':page.url, 'pagination':collection.params.pagination} %}
                    {% endif %}
                {% endblock %}
\t\t\t</div>
\t\t\t<div id=\"sidebar\" class=\"block size-1-3 pure-u-1-3\">
\t\t\t\t{% include 'partials/sidebar.html.twig' with {'blog':page} %}
\t\t\t</div>
\t\t</div>
\t{% endblock %}



{% endembed %}


", "blog.html.twig", "/Users/aaronsosaruiz/Proyectos/blog/grav_data/user/themes/afterburner2/templates/blog.html.twig");
    }
}
