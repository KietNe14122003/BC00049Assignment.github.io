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

/* product/Customer/products.html.twig */
class __TwigTemplate_61f854fc3a45b6ef45f77a847257b801 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/Customer/products.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/Customer/products.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->loadTemplate("header.html.twig", "product/Customer/products.html.twig", 2)->display($context);
        // line 3
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 37
        echo "

";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 77
        $this->loadTemplate("footer.html.twig", "product/Customer/products.html.twig", 77)->display($context);
        // line 78
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style1.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/templatemo-sixteen.css"), "html", null, true);
        echo "\">
<style>
 .pagination {
  list-style: none;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 18px;
  padding: 0;
}
.pagination li {
  display: inline-block;
  margin-top:20px;
}
.pagination li.active {
  font-weight: bold;
}
.pagination li a {
  display: block;
  padding: 5px 10px;
  text-decoration: none;
  color: black;
  background-color: white;
  border: 1px solid #ccc;
  border-radius: 3px;
}
.pagination li a:hover {
  background-color: gray;
  color: black;
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 39
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 40
        echo "    <div class=\"container\">
        <section class=\"products\">
            <h1 class=\"heading\">ALL PRODUCTS</h1>
            <div class=\"box-container\">
                ";
        // line 44
        $context["productsPerPage"] = 9;
        // line 45
        echo "                ";
        $context["totalProducts"] = twig_length_filter($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 45, $this->source); })()));
        // line 46
        echo "                ";
        $context["totalPages"] = twig_round(((isset($context["totalProducts"]) || array_key_exists("totalProducts", $context) ? $context["totalProducts"] : (function () { throw new RuntimeError('Variable "totalProducts" does not exist.', 46, $this->source); })()) / (isset($context["productsPerPage"]) || array_key_exists("productsPerPage", $context) ? $context["productsPerPage"] : (function () { throw new RuntimeError('Variable "productsPerPage" does not exist.', 46, $this->source); })())), 0, "ceil");
        // line 47
        echo "                ";
        $context["currentPage"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "request", [], "any", false, false, false, 47), "query", [], "any", false, false, false, 47), "get", ["page", 1], "method", false, false, false, 47);
        // line 48
        echo "                ";
        $context["start"] = (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 48, $this->source); })()) - 1) * (isset($context["productsPerPage"]) || array_key_exists("productsPerPage", $context) ? $context["productsPerPage"] : (function () { throw new RuntimeError('Variable "productsPerPage" does not exist.', 48, $this->source); })()));
        // line 49
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 49, $this->source); })()), (isset($context["start"]) || array_key_exists("start", $context) ? $context["start"] : (function () { throw new RuntimeError('Variable "start" does not exist.', 49, $this->source); })()), 9));
        foreach ($context['_seq'] as $context["_key"] => $context["sp"]) {
            // line 50
            echo "                    <form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_add", ["product_id" => twig_get_attribute($this->env, $this->source, $context["sp"], "getId", [], "method", false, false, false, 50)]), "html", null, true);
            echo "\" method=\"post\">
                        <div class=\"box\">
                            <div class=\"image-container\">
                                <img src=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/product/" . twig_get_attribute($this->env, $this->source, $context["sp"], "getPhoto", [], "method", false, false, false, 53))), "html", null, true);
            echo "\" alt=\"\">
                            </div>
                            <h3>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sp"], "getName", [], "method", false, false, false, 55), "html", null, true);
            echo "</h3>
                            <div class=\"price\">";
            // line 56
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sp"], "getPrice", [], "method", false, false, false, 56), 2, ".", ","), "html", null, true);
            echo "\$</div>
                            <button type=\"submit\" class=\"btn\" name=\"add_to_cart\" style=\"background-color:black;line-height:3rem; font-size:1.7rem\">Add to cart</button>
                            <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["sp"], "getId", [], "method", false, false, false, 58)]), "html", null, true);
            echo "\" class=\"btn btn-warning\" style=\"font-weight:bold\">More detail</a>
                            </div>
                    </form>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "            </div>
            <nav>
                <ul class=\"pagination\">
                    ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 65, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 66
            echo "                        <li class=\"pagination pagination-lg ";
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 66, $this->source); })()) == $context["page"])) {
                echo "active";
            }
            echo "\">
                            <a class=\"page-link\" href=\"?page=";
            // line 67
            echo twig_escape_filter($this->env, $context["page"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["page"], "html", null, true);
            echo "</a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                </ul>
            </nav>
                
            </div>
        </section>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 78
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 79
        echo "    <script>
        function deletesp(url){
            if(confirm(\"Do you want to delete the product?\")){
                window.location.href = url;
            }
        }
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "product/Customer/products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 79,  237 => 78,  221 => 70,  210 => 67,  203 => 66,  199 => 65,  194 => 62,  184 => 58,  179 => 56,  175 => 55,  170 => 53,  163 => 50,  158 => 49,  155 => 48,  152 => 47,  149 => 46,  146 => 45,  144 => 44,  138 => 40,  128 => 39,  86 => 5,  81 => 4,  71 => 3,  61 => 78,  59 => 77,  57 => 39,  53 => 37,  51 => 3,  49 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% include \"header.html.twig\" %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/style1.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/templatemo-sixteen.css') }}\">
<style>
 .pagination {
  list-style: none;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 18px;
  padding: 0;
}
.pagination li {
  display: inline-block;
  margin-top:20px;
}
.pagination li.active {
  font-weight: bold;
}
.pagination li a {
  display: block;
  padding: 5px 10px;
  text-decoration: none;
  color: black;
  background-color: white;
  border: 1px solid #ccc;
  border-radius: 3px;
}
.pagination li a:hover {
  background-color: gray;
  color: black;
}
</style>
{% endblock %}


{% block body %}
    <div class=\"container\">
        <section class=\"products\">
            <h1 class=\"heading\">ALL PRODUCTS</h1>
            <div class=\"box-container\">
                {% set productsPerPage = 9 %}
                {% set totalProducts = data|length %}
                {% set totalPages = (totalProducts / productsPerPage)|round(0, 'ceil') %}
                {% set currentPage = app.request.query.get('page', 1) %}
                {% set start = (currentPage - 1) * productsPerPage %}
                {% for sp in data[start:9] %}
                    <form action=\"{{ path('app_cart_add', {'product_id': sp.getId()}) }}\" method=\"post\">
                        <div class=\"box\">
                            <div class=\"image-container\">
                                <img src=\"{{ asset('uploads/product/' ~ sp.getPhoto()) }}\" alt=\"\">
                            </div>
                            <h3>{{ sp.getName() }}</h3>
                            <div class=\"price\">{{ sp.getPrice()|number_format(2, '.', ',') }}\$</div>
                            <button type=\"submit\" class=\"btn\" name=\"add_to_cart\" style=\"background-color:black;line-height:3rem; font-size:1.7rem\">Add to cart</button>
                            <a href=\"{{path('app_product_detail',{'id':sp.getId()})}}\" class=\"btn btn-warning\" style=\"font-weight:bold\">More detail</a>
                            </div>
                    </form>
                {% endfor %}
            </div>
            <nav>
                <ul class=\"pagination\">
                    {% for page in 1..totalPages %}
                        <li class=\"pagination pagination-lg {% if currentPage == page %}active{% endif %}\">
                            <a class=\"page-link\" href=\"?page={{ page }}\">{{ page }}</a>
                        </li>
                    {% endfor %}
                </ul>
            </nav>
                
            </div>
        </section>
    </div>
{% endblock %}
{% include \"footer.html.twig\" %}
{% block javascripts %}
    <script>
        function deletesp(url){
            if(confirm(\"Do you want to delete the product?\")){
                window.location.href = url;
            }
        }
    </script>
{% endblock %}", "product/Customer/products.html.twig", "C:\\Users\\Laptop\\Website Selling Toy Guns\\templates\\product\\Customer\\products.html.twig");
    }
}
