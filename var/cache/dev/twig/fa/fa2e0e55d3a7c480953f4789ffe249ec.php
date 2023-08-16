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

/* footer.html.twig */
class __TwigTemplate_a65b982fcbea64f7b1b8d1f311b6632e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        // line 1
        echo "<link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<link rel=\"stylesheet\" href=\"assets/css/footer.css\">
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
<script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>

\t<section id=\"footer\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row text-center text-xs-center text-sm-left text-md-left\">
\t\t\t\t<div class=\"col-xs-12 col-sm-4 col-md-4\">
\t\t\t\t\t<h5>About us</h5>
\t\t\t\t\t<ul class=\"\" style=\"color:white;\">
\t\t\t\t\t<p style=\"color:white\">My website is a website specializing in selling all kinds of jelly bullet toy guns.
</p></ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-12 col-sm-4 col-md-4\">
\t\t\t\t\t<h5>Features</h5>\t\t
\t\t\t\t\t<ul class=\"list-unstyled quick-links\">
\t\t\t\t\t\t<li><a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\"><i class=\"fa fa-angle-double-right\"></i>Home</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product");
        echo "\"><i class=\"fa fa-angle-double-right\"></i>Products</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        echo "\"><i class=\"fa fa-angle-double-right\"></i>About</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\"><i class=\"fa fa-angle-double-right\"></i>Contact Us</a></li>
\t\t\t\t\t\t<li><a href=\"https://www.freeprivacypolicy.com/live/79ca156c-5de1-4bc6-8e67-45cd62f7129e\"><i class=\"fa fa-angle-double-right\"></i>Privacy Policy</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-12 col-sm-4 col-md-4\">
\t\t\t\t\t<h5>Other contact information</h5>
\t\t\t\t\t<ul class=\"list-unstyled quick-links\" style=\"color: white;\">
\t\t\t\t\t\t<li><i></i>kietnvbc00049@fpt.edu.vn| +036 5338 322</i></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5\">
\t\t\t\t\t<ul class=\"list-unstyled list-inline social text-center\">
\t\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"https://www.facebook.com/kid1412dt?mibextid=2JQ9oc7\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"mailto:kietnvbc0049@fpt.edu.vn\" target=\"_blank\"><i class=\"fa fa-envelope\"></i></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<hr>
\t\t\t</div>\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white\">
\t\t\t\t\t<p class=\"h6\" style=\"font-size:2.5rem; color:orange\";> BTEC FPT Can Tho</p>
\t\t\t\t</div>
\t\t\t\t<hr>
\t\t\t</div>\t
\t\t</div>
\t</section>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 21,  70 => 20,  66 => 19,  62 => 18,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<link rel=\"stylesheet\" href=\"assets/css/footer.css\">
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
<script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>

\t<section id=\"footer\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row text-center text-xs-center text-sm-left text-md-left\">
\t\t\t\t<div class=\"col-xs-12 col-sm-4 col-md-4\">
\t\t\t\t\t<h5>About us</h5>
\t\t\t\t\t<ul class=\"\" style=\"color:white;\">
\t\t\t\t\t<p style=\"color:white\">My website is a website specializing in selling all kinds of jelly bullet toy guns.
</p></ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-12 col-sm-4 col-md-4\">
\t\t\t\t\t<h5>Features</h5>\t\t
\t\t\t\t\t<ul class=\"list-unstyled quick-links\">
\t\t\t\t\t\t<li><a href=\"{{path('app_home')}}\"><i class=\"fa fa-angle-double-right\"></i>Home</a></li>
\t\t\t\t\t\t<li><a href=\"{{path('app_product')}}\"><i class=\"fa fa-angle-double-right\"></i>Products</a></li>
\t\t\t\t\t\t<li><a href=\"{{path('app_about')}}\"><i class=\"fa fa-angle-double-right\"></i>About</a></li>
\t\t\t\t\t\t<li><a href=\"{{path('app_contact')}}\"><i class=\"fa fa-angle-double-right\"></i>Contact Us</a></li>
\t\t\t\t\t\t<li><a href=\"https://www.freeprivacypolicy.com/live/79ca156c-5de1-4bc6-8e67-45cd62f7129e\"><i class=\"fa fa-angle-double-right\"></i>Privacy Policy</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-12 col-sm-4 col-md-4\">
\t\t\t\t\t<h5>Other contact information</h5>
\t\t\t\t\t<ul class=\"list-unstyled quick-links\" style=\"color: white;\">
\t\t\t\t\t\t<li><i></i>kietnvbc00049@fpt.edu.vn| +036 5338 322</i></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5\">
\t\t\t\t\t<ul class=\"list-unstyled list-inline social text-center\">
\t\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"https://www.facebook.com/kid1412dt?mibextid=2JQ9oc7\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"mailto:kietnvbc0049@fpt.edu.vn\" target=\"_blank\"><i class=\"fa fa-envelope\"></i></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<hr>
\t\t\t</div>\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white\">
\t\t\t\t\t<p class=\"h6\" style=\"font-size:2.5rem; color:orange\";> BTEC FPT Can Tho</p>
\t\t\t\t</div>
\t\t\t\t<hr>
\t\t\t</div>\t
\t\t</div>
\t</section>", "footer.html.twig", "C:\\Users\\Laptop\\Website Selling Toy Guns\\templates\\footer.html.twig");
    }
}
