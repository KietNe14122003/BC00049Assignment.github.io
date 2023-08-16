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

/* product/Admin/details.html.twig */
class __TwigTemplate_95dcc1636b9905e979117aaf24878bce extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/Admin/details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/Admin/details.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/Admin/details.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Detail of Product";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo " <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">
 <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM\" crossorigin=\"anonymous\">
  <style>
     :root{
    --black: #000000;
    }
    .display-product-table table {
      width: 80%;
      text-align: center;
    }

    .container{
    font-family:Palatino;
    border: 1px solid var(--black);
    border-radius: 10px;
      

    
}
    .display-product-table table td {
      padding: 1.5rem;
      font-size: 1rem;
    }
      
    .product-image {
      max-width: 400px; 
      max-height: 300px; 
      object-fit: contain; 
    }
    .logout{
    padding: 10px 60px; 
    text-decoration: none;
    color: rgb(73, 70, 70);
    }
  
  </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 43
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 44
        echo "<div class=\"container\">
    <div style=\"align-items: center\">
        ";
        // line 47
        echo "        <div style=\"display: flex; justify-content: center;\">
            <table class=\"table\">
                <tbody>
                    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 50, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 51
            echo "                    <tr>
                       <th style=\" font-weight: bold;\">Image</th>
                       <td style=\"vertical-align: middle;\"><img src=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/product/" . twig_get_attribute($this->env, $this->source, $context["product"], "getPhoto", [], "method", false, false, false, 53))), "html", null, true);
            echo "\" class=\"product-image\" /></td>
                    </tr>
                    <tr>
                       <th style=\" font-weight: bold;\">ID</th>
                       <td style=\"vertical-align: middle;\">";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "method", false, false, false, 57), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                       <th style=\" font-weight: bold;\">Category</th>
                       <td style=\"vertical-align: middle;\">";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "getCate", [], "any", false, false, false, 61), "getName", [], "method", false, false, false, 61), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                       <th style=\" font-weight: bold;\">Price</th>
                       <td style=\"vertical-align: middle;\">";
            // line 65
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getPrice", [], "method", false, false, false, 65), 2, ".", ","), "html", null, true);
            echo "\$</td>
                    </tr>
                    <tr>
                       <th style=\"font-weight: bold;\">Name</th>
                       <td style=\"vertical-align: middle;\">";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getName", [], "method", false, false, false, 69), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                       <th style=\"font-weight: bold;\">Description</th>
                       <td style=\"vertical-align: middle;\">";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getDescription", [], "method", false, false, false, 73), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                    
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                </tbody>
            </table>
            </div>
        </section>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 86
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 87
        echo "  <script>
    function delete123(url) {
      if (confirm(\"Go go go!\")) {
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
        return "product/Admin/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 87,  225 => 86,  209 => 78,  198 => 73,  191 => 69,  184 => 65,  177 => 61,  170 => 57,  163 => 53,  159 => 51,  155 => 50,  150 => 47,  146 => 44,  136 => 43,  90 => 5,  80 => 4,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Detail of Product{% endblock %}

{% block stylesheets %}
 <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">
 <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM\" crossorigin=\"anonymous\">
  <style>
     :root{
    --black: #000000;
    }
    .display-product-table table {
      width: 80%;
      text-align: center;
    }

    .container{
    font-family:Palatino;
    border: 1px solid var(--black);
    border-radius: 10px;
      

    
}
    .display-product-table table td {
      padding: 1.5rem;
      font-size: 1rem;
    }
      
    .product-image {
      max-width: 400px; 
      max-height: 300px; 
      object-fit: contain; 
    }
    .logout{
    padding: 10px 60px; 
    text-decoration: none;
    color: rgb(73, 70, 70);
    }
  
  </style>
{% endblock %}

{% block body %}
<div class=\"container\">
    <div style=\"align-items: center\">
        {# <section class=\"display-product-table\"> #}
        <div style=\"display: flex; justify-content: center;\">
            <table class=\"table\">
                <tbody>
                    {% for product in data %}
                    <tr>
                       <th style=\" font-weight: bold;\">Image</th>
                       <td style=\"vertical-align: middle;\"><img src=\"{{ asset('uploads/product/' ~ product.getPhoto()) }}\" class=\"product-image\" /></td>
                    </tr>
                    <tr>
                       <th style=\" font-weight: bold;\">ID</th>
                       <td style=\"vertical-align: middle;\">{{ product.getId() }}</td>
                    </tr>
                    <tr>
                       <th style=\" font-weight: bold;\">Category</th>
                       <td style=\"vertical-align: middle;\">{{ product.getCate.getName() }}</td>
                    </tr>
                    <tr>
                       <th style=\" font-weight: bold;\">Price</th>
                       <td style=\"vertical-align: middle;\">{{ product.getPrice()|number_format(2, '.', ',') }}\$</td>
                    </tr>
                    <tr>
                       <th style=\"font-weight: bold;\">Name</th>
                       <td style=\"vertical-align: middle;\">{{ product.getName() }}</td>
                    </tr>
                    <tr>
                       <th style=\"font-weight: bold;\">Description</th>
                       <td style=\"vertical-align: middle;\">{{ product.getDescription() }}</td>
                    </tr>
                    <tr>
                    
                    {% endfor %}
                </tbody>
            </table>
            </div>
        </section>
    </div>
</div>
{% endblock %}

{% block javascripts %}
  <script>
    function delete123(url) {
      if (confirm(\"Go go go!\")) {
        window.location.href = url;
      }
    }
  </script>
{% endblock %}
", "product/Admin/details.html.twig", "C:\\Users\\Laptop\\Website Selling Toy Guns\\templates\\product\\Admin\\details.html.twig");
    }
}
