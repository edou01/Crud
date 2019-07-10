<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* pages/index.html.twig */
class __TwigTemplate_be33c56190b50464f101c7803dbea6f2ec15c47898bc15de0eb57ed05bdbd755 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/index.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "pages/inc/header.html.twig");
        echo "
<a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")), "html", null, true);
        echo "app_dev.php/create/\" class=\"btn btn-primary\">
        Create Post</a>
        <h3>Liste des articles</h3>
<table class=\"table table-striped table-hover \">
        <thead>
        <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Category</th>
                <th>Action</th>
        </tr>
        </thead>

        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 17, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 18
            echo "        <tr>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 19), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "description", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "category", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                <td>
                        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")), "html", null, true);
            echo "app_dev.php/view/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "\" class=\"btn btn-primary btn-xs\">View</a>
                        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")), "html", null, true);
            echo "app_dev.php/edit/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "\" class=\"btn btn-success btn-xs\">Edit</a>
                        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")), "html", null, true);
            echo "app_dev.php/delete/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "\" class=\"btn btn-danger btn-xs\">Delete</a>
                </td>
        </tr>

        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 31
            echo "                <tr>
                        <td>No Records Founds ! </td>
                </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
</table>
";
        // line 37
        echo twig_include($this->env, $context, "pages/inc/footer.html.twig");
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pages/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 37,  123 => 35,  114 => 31,  102 => 26,  96 => 25,  90 => 24,  85 => 22,  81 => 21,  77 => 20,  73 => 19,  70 => 18,  65 => 17,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('pages/inc/header.html.twig') }}
<a href=\"{{ absolute_url(asset('')) }}app_dev.php/create/\" class=\"btn btn-primary\">
        Create Post</a>
        <h3>Liste des articles</h3>
<table class=\"table table-striped table-hover \">
        <thead>
        <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Category</th>
                <th>Action</th>
        </tr>
        </thead>

        <tbody>
        {% for post in posts %}
        <tr>
                <td>{{ post.id }}</td>
                <td>{{ post.title }}</td>
                <td>{{ post.description }}</td>
                <td>{{ post.category }}</td>
                <td>
                        <a href=\"{{ absolute_url(asset('')) }}app_dev.php/view/{{ post.id }}\" class=\"btn btn-primary btn-xs\">View</a>
                        <a href=\"{{ absolute_url(asset('')) }}app_dev.php/edit/{{ post.id }}\" class=\"btn btn-success btn-xs\">Edit</a>
                        <a href=\"{{ absolute_url(asset('')) }}app_dev.php/delete/{{ post.id }}\" class=\"btn btn-danger btn-xs\">Delete</a>
                </td>
        </tr>

        {% else %}
                <tr>
                        <td>No Records Founds ! </td>
                </tr>
        {% endfor %}
        </tbody>
</table>
{{ include('pages/inc/footer.html.twig') }}", "pages/index.html.twig", "C:\\xampp\\htdocs\\php\\Crud\\app\\Resources\\views\\pages\\index.html.twig");
    }
}
