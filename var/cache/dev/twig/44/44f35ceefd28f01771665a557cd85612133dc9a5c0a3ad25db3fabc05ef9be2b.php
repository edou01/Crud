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

/* pages/inc/header.html.twig */
class __TwigTemplate_23a04324e02968a1eae299b92f8a891146cc35fd1fd23ce4d6c9a5af4627b546 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/inc/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/inc/header.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
                <head>
                    <meta charset=\"UTF-8\" />
                    <title>CRUD Symfony 3 Tuto</title>

                    <link rel=\"stylesheet\"  href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.css")), "html", null, true);
        echo "\" />
                </head>
    <body>
                <nav class=\"navbar navbar-inverse\">
                    <div class=\"container-fluid\">
                        <div class=\"navbar-header\">

                            <a class=\"navbar-brand\" href=\"#\">Symfony 3 CRUD TUTO </a>
                        </div>
                        <div class=\"collapse navbar-collapse\" id=\"bs-exmple-navbar-collapse-2\" >


                        </div>
                    </div>
                </nav>
                <div class=\"container\">
                    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "session", [], "any", false, false, false, 23), "flashbag", [], "any", false, false, false, 23), "get", [0 => "message"], "method", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["success_message"]) {
            // line 24
            echo "                        <div class=\"alert alart-sucess\">";
            echo twig_escape_filter($this->env, $context["success_message"], "html", null, true);
            echo "</div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['success_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                </div>

    </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pages/inc/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 26,  74 => 24,  70 => 23,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
                <head>
                    <meta charset=\"UTF-8\" />
                    <title>CRUD Symfony 3 Tuto</title>

                    <link rel=\"stylesheet\"  href=\"{{ absolute_url(asset('css/bootstrap.css')) }}\" />
                </head>
    <body>
                <nav class=\"navbar navbar-inverse\">
                    <div class=\"container-fluid\">
                        <div class=\"navbar-header\">

                            <a class=\"navbar-brand\" href=\"#\">Symfony 3 CRUD TUTO </a>
                        </div>
                        <div class=\"collapse navbar-collapse\" id=\"bs-exmple-navbar-collapse-2\" >


                        </div>
                    </div>
                </nav>
                <div class=\"container\">
                    {% for success_message in app.session.flashbag.get('message') %}
                        <div class=\"alert alart-sucess\">{{ success_message }}</div>
                    {% endfor %}
                </div>

    </body>
</html>", "pages/inc/header.html.twig", "C:\\xampp\\htdocs\\php\\Crud\\app\\Resources\\views\\pages\\inc\\header.html.twig");
    }
}
