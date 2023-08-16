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

/* information/about.html.twig */
class __TwigTemplate_ff141baca152387eb6cdc425dce3802f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "information/about.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "information/about.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

  <head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link href=\"https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap\" rel=\"stylesheet\">

    <title>Semi</title>

    <!-- Bootstrap core CSS -->
    <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
<!--



-->

    <!-- Additional CSS Files -->
    <link rel=\"stylesheet\" href=\"assets/css/fontawesome.css\">
    <link rel=\"stylesheet\" href=\"assets/css/templatemo-sixteen.css\">
    <link rel=\"stylesheet\" href=\"assets/css/owl.css\">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id=\"preloader\">
        <div class=\"jumper\">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->

";
        // line 43
        $this->loadTemplate("header.html.twig", "information/about.html.twig", 43)->display($context);
        // line 44
        echo "
    <!-- Page Content -->
    <div class=\"page-heading about-heading header-text\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            <div class=\"text-content\">
              <h4>about us</h4>
              <h2>COMPANY NVK</h2>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class=\"best-features about-features\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            <div class=\"section-heading\">
              <h2>Our Background</h2>
            </div>
          </div>
          <div class=\"col-md-6\">
            <div class=\"right-image\">
              <img src=\"assets/images/feature-image.jpg\" alt=\"\">
            </div>
          </div>
          <div class=\"col-md-6\">
            <div class=\"left-content\">
              <h4>Who we are &amp; What we do?</h4>
              <p>At our toy gun store, we are a business with a deep passion for the toys we sell that bring joy to fellow enthusiasts. Our mission is to be the ultimate destination for like-minded people, fostering creativity and creating lasting memories.<br><br> In addition to providing exceptional toys, we believe in making a positive impact on the world. With every purchase, you join us in supporting charitable initiatives that bring the magic of gaming to customers, spreading smiles to those who need it most.
              <br><br> We're not just a toy gun store; We are storytellers, dream weavers and happy ambassadors. Join us on this fun-filled journey where hugs and laughter intertwine, and let our toys light up your world with warmth and magic! </p>
              <ul class=\"social-icons\">
                <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                <li><a href=\"#\"><i class=\"fa fa-instagram\"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class=\"team-members\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            <div class=\"section-heading\">
              <h2>My Contact</h2>
            </div>
          </div>
        
          <div class=\"col-md-4\">
            <div class=\"team-member\">
              <div class=\"thumb-container\">
                <img src=\"assets/images/kiet.jpg\" alt=\"\">
                <div class=\"hover-effect\">
                  <div class=\"hover-content\">
                    <ul class=\"social-icons\">
                      <li><a href=\"https://www.facebook.com/kid1412dt?mibextid=2JQ9oc7\"><i class=\"fa fa-facebook\"></i></a></li>
                      <li><a href=\"mailto:kietnvbc0049@fpt.edu.vn\"><i class=\"fa fa-envelope\"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class=\"down-content\">
                <h4>Nguyen Van Kiet</h4>
                <span>  </span>
                <p> </p>
              </div>
            </div>
          </div>
       

            </div>
          </div>
        </div>
      </div>
    </div>
    
";
        // line 126
        $this->loadTemplate("footer.html.twig", "information/about.html.twig", 126)->display($context);
        // line 127
        echo "

    <!-- Bootstrap core JavaScript -->
    <script src=\"vendor/jquery/jquery.min.js\"></script>
    <script src=\"vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>


    <!-- Additional Scripts -->
    <script src=\"assets/js/custom.js\"></script>
    <script src=\"assets/js/owl.js\"></script>
    <script src=\"assets/js/slick.js\"></script>
    <script src=\"assets/js/isotope.js\"></script>
    <script src=\"assets/js/accordions.js\"></script>


    <script language = \"text/Javascript\"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "information/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 127,  173 => 126,  89 => 44,  87 => 43,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

  <head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link href=\"https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap\" rel=\"stylesheet\">

    <title>Semi</title>

    <!-- Bootstrap core CSS -->
    <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
<!--



-->

    <!-- Additional CSS Files -->
    <link rel=\"stylesheet\" href=\"assets/css/fontawesome.css\">
    <link rel=\"stylesheet\" href=\"assets/css/templatemo-sixteen.css\">
    <link rel=\"stylesheet\" href=\"assets/css/owl.css\">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id=\"preloader\">
        <div class=\"jumper\">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->

{% include \"header.html.twig\" %}

    <!-- Page Content -->
    <div class=\"page-heading about-heading header-text\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            <div class=\"text-content\">
              <h4>about us</h4>
              <h2>COMPANY NVK</h2>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class=\"best-features about-features\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            <div class=\"section-heading\">
              <h2>Our Background</h2>
            </div>
          </div>
          <div class=\"col-md-6\">
            <div class=\"right-image\">
              <img src=\"assets/images/feature-image.jpg\" alt=\"\">
            </div>
          </div>
          <div class=\"col-md-6\">
            <div class=\"left-content\">
              <h4>Who we are &amp; What we do?</h4>
              <p>At our toy gun store, we are a business with a deep passion for the toys we sell that bring joy to fellow enthusiasts. Our mission is to be the ultimate destination for like-minded people, fostering creativity and creating lasting memories.<br><br> In addition to providing exceptional toys, we believe in making a positive impact on the world. With every purchase, you join us in supporting charitable initiatives that bring the magic of gaming to customers, spreading smiles to those who need it most.
              <br><br> We're not just a toy gun store; We are storytellers, dream weavers and happy ambassadors. Join us on this fun-filled journey where hugs and laughter intertwine, and let our toys light up your world with warmth and magic! </p>
              <ul class=\"social-icons\">
                <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                <li><a href=\"#\"><i class=\"fa fa-instagram\"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class=\"team-members\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            <div class=\"section-heading\">
              <h2>My Contact</h2>
            </div>
          </div>
        
          <div class=\"col-md-4\">
            <div class=\"team-member\">
              <div class=\"thumb-container\">
                <img src=\"assets/images/kiet.jpg\" alt=\"\">
                <div class=\"hover-effect\">
                  <div class=\"hover-content\">
                    <ul class=\"social-icons\">
                      <li><a href=\"https://www.facebook.com/kid1412dt?mibextid=2JQ9oc7\"><i class=\"fa fa-facebook\"></i></a></li>
                      <li><a href=\"mailto:kietnvbc0049@fpt.edu.vn\"><i class=\"fa fa-envelope\"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class=\"down-content\">
                <h4>Nguyen Van Kiet</h4>
                <span>  </span>
                <p> </p>
              </div>
            </div>
          </div>
       

            </div>
          </div>
        </div>
      </div>
    </div>
    
{% include \"footer.html.twig\" %}


    <!-- Bootstrap core JavaScript -->
    <script src=\"vendor/jquery/jquery.min.js\"></script>
    <script src=\"vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>


    <!-- Additional Scripts -->
    <script src=\"assets/js/custom.js\"></script>
    <script src=\"assets/js/owl.js\"></script>
    <script src=\"assets/js/slick.js\"></script>
    <script src=\"assets/js/isotope.js\"></script>
    <script src=\"assets/js/accordions.js\"></script>


    <script language = \"text/Javascript\"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
", "information/about.html.twig", "C:\\Users\\Laptop\\Website Selling Toy Guns\\templates\\information\\about.html.twig");
    }
}
