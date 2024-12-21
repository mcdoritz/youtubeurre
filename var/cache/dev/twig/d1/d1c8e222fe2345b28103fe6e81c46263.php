<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* indexArchived.html.twig */
class __TwigTemplate_8b81aaeb4f280aa085ce12484ad5291e extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "indexArchived.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "indexArchived.html.twig"));

        // line 3
        if (array_key_exists("archive", $context)) {
            // line 4
            $context["page_title"] = new Markup("        Archive des playlists et des chaînes
    ", $this->env->getCharset());
        } else {
            // line 8
            $context["page_title"] = new Markup("        Index des playlists et des chaînes
    ", $this->env->getCharset());
        }
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "indexArchived.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 13, $this->source); })()), "html", null, true);
        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 16
        yield "    ";
        if ( !array_key_exists("archive", $context)) {
            // line 17
            yield "        <h3>Ajouter une chaine ou une playlist</h3>
        <a href=\"";
            // line 18
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add.mediaList");
            yield "\" class=\"button add-button\">Ajouter</a>
    ";
        }
        // line 20
        yield "    <hr>
    <h3>Playlists ";
        // line 21
        yield ((array_key_exists("archive", $context)) ? (" archivées") : (""));
        yield "</h3>
    <div class=\"table-container\">
        <table>
            <colgroup>
                <col style=\"width: 2.5%;\"> <!-- Première colonne -->
                <col style=\"width: 30%;\"> <!-- Deuxième colonne -->
                <col style=\"width: 35%;\"> <!-- Troisième colonne -->
                <col style=\"width: 15%;\"> <!-- Quatrième colonne -->
                <col style=\"width: 15%;\"> <!-- Cinquième colonne -->
            </colgroup>
            <thead>
            <tr>
                <th class=\"index-th-poster\"></th>
                <th>Nom</th>
                <th>URL</th>
                <th>Cronjob</th>
                <th>Age Max</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["playLists"]) || array_key_exists("playLists", $context) ? $context["playLists"] : (function () { throw new RuntimeError('Variable "playLists" does not exist.', 41, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["playlist"]) {
            // line 42
            yield "                <tr>
                    <td class=\"index-th-poster\"><a href=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show.mediaList", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["playlist"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            yield "\" class=\"table-link\">
                            <img src=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("downloaded/posters/" . CoreExtension::getAttribute($this->env, $this->source, $context["playlist"], "title", [], "any", false, false, false, 44)) . ".jpg")), "html", null, true);
            yield "\"
                                 onerror=\"this.onerror=null; this.src='";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("downloaded/default-poster.jpg"), "html", null, true);
            yield "';\"
                                 class=\"mediaList-poster\"
                                 style=\"max-width: 100px;\"
                                 alt=\"Poster de ";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["playlist"], "title", [], "any", false, false, false, 48), "html", null, true);
            yield "\"/>
                        </a>
                    </td>
                    <td><a href=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show.mediaList", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["playlist"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            yield "\" class=\"table-link\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["playlist"], "title", [], "any", false, false, false, 51), "html", null, true);
            yield "</a></td>
                    <td><a href=\"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show.mediaList", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["playlist"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            yield "\" class=\"table-link\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["playlist"], "url", [], "any", false, false, false, 52), "html", null, true);
            yield "</a></td>
                    <td><a href=\"";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show.mediaList", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["playlist"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            yield "\" class=\"table-link\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["playlist"], "cronjob", [], "any", false, false, false, 53), "html", null, true);
            yield "</a></td>
                    <td><a href=\"";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show.mediaList", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["playlist"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            yield "\" class=\"table-link\">";
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["playlist"], "deleteAfter", [], "any", false, false, false, 54) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["playlist"], "deleteAfter", [], "any", false, false, false, 54) . " jours"), "html", null, true)) : ("Infini"));
            yield "</a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['playlist'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        yield "            </tbody>
        </table>
    </div>
    <hr>
    <h3>Chaînes ";
        // line 61
        yield ((array_key_exists("archive", $context)) ? (" archivées") : (""));
        yield "</h3>
    <div class=\"table-container\">
        <table>
            <colgroup>
                <col style=\"width: 2.5%;\"> <!-- Première colonne -->
                <col style=\"width: 30%;\"> <!-- Deuxième colonne -->
                <col style=\"width: 35%;\"> <!-- Troisième colonne -->
                <col style=\"width: 15%;\"> <!-- Quatrième colonne -->
                <col style=\"width: 15%;\"> <!-- Cinquième colonne -->
            </colgroup>
            <thead>
            <tr>
                <th class=\"index-th-poster\"></th>
                <th>Nom</th>
                <th>URL</th>
                <th>Cronjob</th>
                <th>Age Max</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["channels"]) || array_key_exists("channels", $context) ? $context["channels"] : (function () { throw new RuntimeError('Variable "channels" does not exist.', 81, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
            // line 82
            yield "                <tr>
                    <td class=\"index-th-poster\"><a href=\"";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show.mediaList", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "id", [], "any", false, false, false, 83)]), "html", null, true);
            yield "\" class=\"table-link\">
                            <img src=\"";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("downloaded/posters/" . CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "title", [], "any", false, false, false, 84)) . ".jpg")), "html", null, true);
            yield "\"
                                 onerror=\"this.onerror=null; this.src='";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("downloaded/default-poster.jpg"), "html", null, true);
            yield "';\"
                                 class=\"mediaList-poster\"
                                 style=\"max-width: 100px;\"
                                 alt=\"Poster de ";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "title", [], "any", false, false, false, 88), "html", null, true);
            yield "\"/>
                        </a>
                    </td>
                    <td><a href=\"";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show.mediaList", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "id", [], "any", false, false, false, 91)]), "html", null, true);
            yield "\" class=\"table-link\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "title", [], "any", false, false, false, 91), "html", null, true);
            yield "</a></td>
                    <td><a href=\"";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show.mediaList", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "id", [], "any", false, false, false, 92)]), "html", null, true);
            yield "\" class=\"table-link\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "url", [], "any", false, false, false, 92), "html", null, true);
            yield "</a></td>
                    <td><a href=\"";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show.mediaList", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "id", [], "any", false, false, false, 93)]), "html", null, true);
            yield "\" class=\"table-link\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "cronjob", [], "any", false, false, false, 93), "html", null, true);
            yield "</a></td>
                    <td><a href=\"";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show.mediaList", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "id", [], "any", false, false, false, 94)]), "html", null, true);
            yield "\" class=\"table-link\">";
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "deleteAfter", [], "any", false, false, false, 94) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "deleteAfter", [], "any", false, false, false, 94) . " jours"), "html", null, true)) : ("Infini"));
            yield "</a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['channel'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        yield "            </tbody>
        </table>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "indexArchived.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  291 => 97,  280 => 94,  274 => 93,  268 => 92,  262 => 91,  256 => 88,  250 => 85,  246 => 84,  242 => 83,  239 => 82,  235 => 81,  212 => 61,  206 => 57,  195 => 54,  189 => 53,  183 => 52,  177 => 51,  171 => 48,  165 => 45,  161 => 44,  157 => 43,  154 => 42,  150 => 41,  127 => 21,  124 => 20,  119 => 18,  116 => 17,  113 => 16,  100 => 15,  75 => 13,  64 => 1,  60 => 8,  56 => 4,  54 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% if archive is defined %}
    {% set page_title %}
        Archive des playlists et des chaînes
    {% endset %}
{% else %}
    {% set page_title %}
        Index des playlists et des chaînes
    {% endset %}
{% endif %}

{% block title %} {{ page_title }} {% endblock %}

{% block body %}
    {% if archive is not defined %}
        <h3>Ajouter une chaine ou une playlist</h3>
        <a href=\"{{ path('add.mediaList') }}\" class=\"button add-button\">Ajouter</a>
    {% endif %}
    <hr>
    <h3>Playlists {{ archive is defined ? ' archivées' : '' }}</h3>
    <div class=\"table-container\">
        <table>
            <colgroup>
                <col style=\"width: 2.5%;\"> <!-- Première colonne -->
                <col style=\"width: 30%;\"> <!-- Deuxième colonne -->
                <col style=\"width: 35%;\"> <!-- Troisième colonne -->
                <col style=\"width: 15%;\"> <!-- Quatrième colonne -->
                <col style=\"width: 15%;\"> <!-- Cinquième colonne -->
            </colgroup>
            <thead>
            <tr>
                <th class=\"index-th-poster\"></th>
                <th>Nom</th>
                <th>URL</th>
                <th>Cronjob</th>
                <th>Age Max</th>
            </tr>
            </thead>
            <tbody>
            {% for playlist in playLists %}
                <tr>
                    <td class=\"index-th-poster\"><a href=\"{{ path('show.mediaList', {id: playlist.id}) }}\" class=\"table-link\">
                            <img src=\"{{ asset('downloaded/posters/' ~ playlist.title ~ '.jpg') }}\"
                                 onerror=\"this.onerror=null; this.src='{{ asset('downloaded/default-poster.jpg') }}';\"
                                 class=\"mediaList-poster\"
                                 style=\"max-width: 100px;\"
                                 alt=\"Poster de {{ playlist.title }}\"/>
                        </a>
                    </td>
                    <td><a href=\"{{ path('show.mediaList', {id: playlist.id}) }}\" class=\"table-link\">{{ playlist.title }}</a></td>
                    <td><a href=\"{{ path('show.mediaList', {id: playlist.id}) }}\" class=\"table-link\">{{ playlist.url }}</a></td>
                    <td><a href=\"{{ path('show.mediaList', {id: playlist.id}) }}\" class=\"table-link\">{{ playlist.cronjob }}</a></td>
                    <td><a href=\"{{ path('show.mediaList', {id: playlist.id}) }}\" class=\"table-link\">{{ playlist.deleteAfter > 0 ? playlist.deleteAfter ~ ' jours' : 'Infini' }}</a></td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
    <hr>
    <h3>Chaînes {{ archive is defined ? ' archivées' : '' }}</h3>
    <div class=\"table-container\">
        <table>
            <colgroup>
                <col style=\"width: 2.5%;\"> <!-- Première colonne -->
                <col style=\"width: 30%;\"> <!-- Deuxième colonne -->
                <col style=\"width: 35%;\"> <!-- Troisième colonne -->
                <col style=\"width: 15%;\"> <!-- Quatrième colonne -->
                <col style=\"width: 15%;\"> <!-- Cinquième colonne -->
            </colgroup>
            <thead>
            <tr>
                <th class=\"index-th-poster\"></th>
                <th>Nom</th>
                <th>URL</th>
                <th>Cronjob</th>
                <th>Age Max</th>
            </tr>
            </thead>
            <tbody>
            {% for channel in channels %}
                <tr>
                    <td class=\"index-th-poster\"><a href=\"{{ path('show.mediaList', {id: channel.id}) }}\" class=\"table-link\">
                            <img src=\"{{ asset('downloaded/posters/' ~ channel.title ~ '.jpg') }}\"
                                 onerror=\"this.onerror=null; this.src='{{ asset('downloaded/default-poster.jpg') }}';\"
                                 class=\"mediaList-poster\"
                                 style=\"max-width: 100px;\"
                                 alt=\"Poster de {{ channel.title }}\"/>
                        </a>
                    </td>
                    <td><a href=\"{{ path('show.mediaList', {id: channel.id}) }}\" class=\"table-link\">{{ channel.title }}</a></td>
                    <td><a href=\"{{ path('show.mediaList', {id: channel.id}) }}\" class=\"table-link\">{{ channel.url }}</a></td>
                    <td><a href=\"{{ path('show.mediaList', {id: channel.id}) }}\" class=\"table-link\">{{ channel.cronjob }}</a></td>
                    <td><a href=\"{{ path('show.mediaList', {id: channel.id}) }}\" class=\"table-link\">{{ channel.deleteAfter > 0 ? channel.deleteAfter ~ ' jours' : 'Infini' }}</a></td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
{% endblock %}
", "indexArchived.html.twig", "/home/florian/PhpstormProjects/Dorizonerr/app/templates/indexArchived.html.twig");
    }
}
