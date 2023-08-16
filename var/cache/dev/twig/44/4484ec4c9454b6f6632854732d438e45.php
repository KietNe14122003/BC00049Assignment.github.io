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

/* category/index.html.twig */
class __TwigTemplate_3fea7387f97afa8d22972a310ec54607 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "category/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<!DOCTYPE html>
<html>
<head>
  <title>Add Product</title>
  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM\" crossorigin=\"anonymous\">
  <style>
  :root{
    --black: #000000;
  }
    .container {
    position: relative;
    width: 400px;
    ";
        // line 17
        echo "    top: -100px;
    /* background: transparent; */
    border: 1px solid var(--black);
    
    /* backdrop-filter: blur(20px);
    box-shadow: 0 0 30 rgba(0, 0, 0, .5); */
    background-color:#ffffff;
    color: rgb(0, 0, 0);
    margin-top: 200px; 
    border-radius: 10px;
    }

    form {
      ";
        // line 32
        echo "    }

    form > div {
      padding: 10px;
    }

    .image-preview-container {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }

    .preview-image {
      max-width: 150px;
      max-height: 150px;
      width: 150px; 
      height: 150px;
      object-fit: contain; 
    }
    .btn {
    width: 100%;
    height: 45px;
    background-color:#3d4953;
     border: none;
     outline: none;
     border-radius: 4px;
     cursor: pointer;
     font-size: 0.5cm;
     color: #fff;
     font-weight: 500;
    }
  
  </style>
</head>

<body>
  <div class=\"container\">
    ";
        // line 69
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["product_form"]) || array_key_exists("product_form", $context) ? $context["product_form"] : (function () { throw new RuntimeError('Variable "product_form" does not exist.', 69, $this->source); })()), 'form_start');
        echo "
   <h3 style=\" center;margin-top:10%;margin-left:12%\">Category Information</h3>  
      <div class=\"col\">
        <label for=\"product_name\">";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldLabel(twig_get_attribute($this->env, $this->source, (isset($context["product_form"]) || array_key_exists("product_form", $context) ? $context["product_form"] : (function () { throw new RuntimeError('Variable "product_form" does not exist.', 72, $this->source); })()), "Name", [], "any", false, false, false, 72)), "html", null, true);
        echo "</label>
        <input type=\"text\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, (isset($context["product_form"]) || array_key_exists("product_form", $context) ? $context["product_form"] : (function () { throw new RuntimeError('Variable "product_form" does not exist.', 73, $this->source); })()), "Name", [], "any", false, false, false, 73)), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["product_form"]) || array_key_exists("product_form", $context) ? $context["product_form"] : (function () { throw new RuntimeError('Variable "product_form" does not exist.', 73, $this->source); })()), "Name", [], "any", false, false, false, 73)), "html", null, true);
        echo "\" class=\"form-control\">
      </div>
    <div>
      <label for=\"product_Photo\">";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldLabel(twig_get_attribute($this->env, $this->source, (isset($context["product_form"]) || array_key_exists("product_form", $context) ? $context["product_form"] : (function () { throw new RuntimeError('Variable "product_form" does not exist.', 76, $this->source); })()), "Photo", [], "any", false, false, false, 76)), "html", null, true);
        echo "</label>
      <input type=\"file\" name=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["product_form"]) || array_key_exists("product_form", $context) ? $context["product_form"] : (function () { throw new RuntimeError('Variable "product_form" does not exist.', 77, $this->source); })()), "Photo", [], "any", false, false, false, 77)), "html", null, true);
        echo "\" class=\"form-control\" id=\"photoInput\">
    </div>
    <div class=\"image-preview-container\">
      <img src=\"#\" alt=\"Preview Image\" class=\"preview-image\" id=\"previewImage\">
    </div>
    <div class=\"d-flex justify-content-center my-3\">
      <input type=\"submit\" value=\"Submit\" class=\"btn btn-danger\">
    </div>
   

    ";
        // line 87
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["product_form"]) || array_key_exists("product_form", $context) ? $context["product_form"] : (function () { throw new RuntimeError('Variable "product_form" does not exist.', 87, $this->source); })()), 'form_end');
        echo "
  </div>
  <script>
    document.getElementById(\"photoInput\").addEventListener(\"change\", function() {
      const file = this.files[0];
      if (file) {
        const reader = new FileReader();
        reader.addEventListener(\"load\", function() {
          document.getElementById(\"previewImage\").src = reader.result;
        });
        reader.readAsDataURL(file);
      }
    });
  </script>
</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "category/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 87,  158 => 77,  154 => 76,  146 => 73,  142 => 72,  136 => 69,  97 => 32,  82 => 17,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<!DOCTYPE html>
<html>
<head>
  <title>Add Product</title>
  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM\" crossorigin=\"anonymous\">
  <style>
  :root{
    --black: #000000;
  }
    .container {
    position: relative;
    width: 400px;
    {# height: 400px;  #}
    top: -100px;
    /* background: transparent; */
    border: 1px solid var(--black);
    
    /* backdrop-filter: blur(20px);
    box-shadow: 0 0 30 rgba(0, 0, 0, .5); */
    background-color:#ffffff;
    color: rgb(0, 0, 0);
    margin-top: 200px; 
    border-radius: 10px;
    }

    form {
      {# margin-bottom: 20px;
      background-color:#F5F5F5; #}
    }

    form > div {
      padding: 10px;
    }

    .image-preview-container {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }

    .preview-image {
      max-width: 150px;
      max-height: 150px;
      width: 150px; 
      height: 150px;
      object-fit: contain; 
    }
    .btn {
    width: 100%;
    height: 45px;
    background-color:#3d4953;
     border: none;
     outline: none;
     border-radius: 4px;
     cursor: pointer;
     font-size: 0.5cm;
     color: #fff;
     font-weight: 500;
    }
  
  </style>
</head>

<body>
  <div class=\"container\">
    {{ form_start(product_form) }}
   <h3 style=\" center;margin-top:10%;margin-left:12%\">Category Information</h3>  
      <div class=\"col\">
        <label for=\"product_name\">{{ field_label(product_form.Name) }}</label>
        <input type=\"text\" value=\"{{ field_value(product_form.Name) }}\" name=\"{{ field_name(product_form.Name) }}\" class=\"form-control\">
      </div>
    <div>
      <label for=\"product_Photo\">{{ field_label(product_form.Photo) }}</label>
      <input type=\"file\" name=\"{{ field_name(product_form.Photo) }}\" class=\"form-control\" id=\"photoInput\">
    </div>
    <div class=\"image-preview-container\">
      <img src=\"#\" alt=\"Preview Image\" class=\"preview-image\" id=\"previewImage\">
    </div>
    <div class=\"d-flex justify-content-center my-3\">
      <input type=\"submit\" value=\"Submit\" class=\"btn btn-danger\">
    </div>
   

    {{ form_end(product_form) }}
  </div>
  <script>
    document.getElementById(\"photoInput\").addEventListener(\"change\", function() {
      const file = this.files[0];
      if (file) {
        const reader = new FileReader();
        reader.addEventListener(\"load\", function() {
          document.getElementById(\"previewImage\").src = reader.result;
        });
        reader.readAsDataURL(file);
      }
    });
  </script>
</body>
</html>
{% endblock %}
", "category/index.html.twig", "C:\\Users\\Laptop\\Website Selling Toy Guns\\templates\\category\\index.html.twig");
    }
}
