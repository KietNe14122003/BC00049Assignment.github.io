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

/* information/home.html.twig */
class __TwigTemplate_42af3dea4c0aa1c8225c9e0f8cccce5d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "information/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "information/home.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

  <head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link href=\"https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap\" rel=\"stylesheet\">

    <title>NVK Store</title>

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

    ";
        // line 38
        $this->loadTemplate("header.html.twig", "information/home.html.twig", 38)->display($context);
        // line 39
        echo "
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class=\"banner header-text\">
      <div class=\"owl-banner owl-carousel\">
        <div class=\"banner-item-01\" style=\"\tbackground-image: url(cssK/price_3.jpg);\">
          <div class=\"text-content\">
            <h4 style=\"font-size: 2.5rem;\">NVK Store</h4>
            <h2>Good product, good price, prestige and quality</h2>
          </div>
        </div>
        <div class=\"banner-item-02\" style=\"\tbackground-image: url(cssK/price_2.jpg);\">
          <div class=\"text-content\">
            <h4 style=\"font-size: 3rem;\">NVK Store</h4>
            <h2>Good product, good price, prestige and quality</h2>
          </div>
        </div>
        <div class=\"banner-item-03\" style=\"\tbackground-image: url(cssK/price_1.jpg)\">
          <div class=\"text-content\">
            <h4 style=\"font-size: 3rem;\">NVK Store/h4>
            <h2>Good product, good price, prestige and quality</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <div class=\"latest-products\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            <div class=\"section-heading\">
              <h2>Latest Products</h2>
              <a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product");
        echo "\">view all products <i class=\"fa fa-angle-right\"></i></a>
            </div>
          </div>
          <div class=\"col-md-4\">
            <div class=\"product-item\">
              <a href=\"#\"><img src=\"/uploads/product/12-64dd18855c796.jpg\" alt=\"\"></a>
              <div class=\"down-content\">
                <a href=\"#\"><h4>Turtle  </h4></a>
                <h6>70.00\$</h6>
                <p>Supper Cute! Good for people who are Water Living</p>
                <ul class=\"stars\">
                  <li><i class=\"fa fa-star\"></i></li>
                  <li><i class=\"fa fa-star\"></i></li>
                  <li><i class=\"fa fa-star\"></i></li>
                  <li><i class=\"fa fa-star\"></i></li>
                  <li><i class=\"fa fa-star\"></i></li>
                </ul>
              </div>
            </div>
          </div>
          <div class=\"col-md-4\">
            <div class=\"product-item\">
              <a href=\"#\"><img src=\"/uploads/product/toyguns02-64dd194aa4dec.webp\" alt=\"\"></a>
              <div class=\"down-content\">
                <a href=\"#\"><h4>Snorlax</h4></a>
                <h6>90.00\$</h6>
                <p>Supper Cute! Good for people who are Water Living</p>
                <ul class=\"stars\">
                  <li><i class=\"fa fa-star\"></i></li>
                  <li><i class=\"fa fa-star\"></i></li>
                  <li><i class=\"fa fa-star\"></i></li>
                  <li><i class=\"fa fa-star\"></i></li>
                  <li><i class=\"fa fa-star\"></i></li>
                </ul>
              </div>
            </div>
          </div>
          <div class=\"col-md-4\">
            <div class=\"product-item\">
              <a href=\"#\"><img src=\"/uploads/product/11-64dd17b691696.webp\" alt=\"\"></a>
              <div class=\"down-content\">
                <a href=\"#\"><h4>Gengar</h4></a>
                <h6>70.00\$</h6>
                <p>Supper Cute! Good for people who are Water Living</p>
                <ul class=\"stars\">
                  <li><i class=\"fa fa-star\"></i></li>
                  <li><i class=\"fa fa-star\"></i></li>
                  <li><i class=\"fa fa-star\"></i></li>
                  <li><i class=\"fa fa-star\"></i></li>
                  <li><i class=\"fa fa-star\"></i></li>
                </ul>
              </div>
            </div>
          </div>
    </div>

    <div class=\"best-features\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            <div class=\"section-heading\">
              <h2>General introduction about Semi shop</h2>
            </div>
          </div>
          <div class=\"col-md-6\">
            <div class=\"left-content\">
              <h4>What's at Semi Shop?</h4>
              <p>At NVK Shop, we bring you a rich and exciting world of toys. With a wide range of products, you are sure to find great products for all ages. Explore now to experience the fun and growth at NVK Shop!</P>
              <ul class=\"featured-list\">
              <p><b>Ensure</b></p>
                <li><a>Quality</a></li>
                <li><a>Reliable quality</a></li>
                <li><a>Various styles and colors</a></li>
                <li><a>Non-toxic</a></li>
              </ul>
              <a href=\"";
        // line 147
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        echo "\" class=\"filled-button\">Read More</a>
            </div>
          </div>
          <div class=\"col-md-6\">
            <div class=\"right-image\">
              <img src=\"assets/images/best-logo2.png\" alt=\"\" style=\"max-width: 435px; height:auto\">
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class=\"call-to-action\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            <div class=\"inner-content\">
              <div class=\"row\">
                <div class=\"col-md-8\">
                  <h4>See more about <em>unique</em> and <em>innovative</em> products</h4>
                  <p>Unique and creative toys encourage children to think and be creative in finding new and different approaches. They help us discover and create unique solutions to problems and challenges.</p>
                </div>
                <div class=\"col-md-4\">
                  <a href=\"";
        // line 171
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product");
        echo "\" class=\"filled-button\">Purchase Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
    <!-- Start footer-->
<link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<link rel=\"stylesheet\" href=\"assets/css/footer.css\">
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
<script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>

\t<section id=\"footer\">
    <div class=\"container\">
        <div class=\"row text-center text-xs-center text-sm-left text-md-left\">
            <div class=\"col-xs-12 col-sm-4 col-md-4\">
                <h5>About us</h5>
                <p style=\"color:white;\">
                    Semi Company, a seasoned player in the toy industry, takes pride in crafting and distributing top-tier, diverse, and secure toy items for kids. Our dedication lies in offering customers unforgettable moments and genuine worth through distinct playthings. Every creation encapsulates ingenuity and refined design. Our focus is on nurturing children's cognitive faculties, exploration, and inventiveness, as we continually refresh our toy lineup. Quality remains our foremost concern, guaranteeing that each toy delivers happiness while fostering children's growth.
                </p>
            </div>
            <div class=\"col-xs-12 col-sm-4 col-md-4\">
                <h5>Features</h5>
                <ul class=\"list-unstyled quick-links\">
                    <li><a href=\"";
        // line 198
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\"><i class=\"fa fa-angle-double-right\"></i>Home</a></li>
                    <li><a href=\"";
        // line 199
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product");
        echo "\"><i class=\"fa fa-angle-double-right\"></i>Products</a></li>
                    <li><a href=\"";
        // line 200
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        echo "\"><i class=\"fa fa-angle-double-right\"></i>About</a></li>
                    <li><a href=\"";
        // line 201
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\"><i class=\"fa fa-angle-double-right\"></i>Contact Us</a></li>
                    <li><a href=\"https://www.freeprivacypolicy.com/live/79ca156c-5de1-4bc6-8e67-45cd62f7129e\"><i class=\"fa fa-angle-double-right\"></i>Privacy Policy</a></li>
                </ul>
            </div>
            <div class=\"col-xs-12 col-sm-4 col-md-4\">
                <h5>Other contact information</h5>
                <ul class=\"list-unstyled quick-links\" style=\"color: white;\">
                    <li><i>didmxbc00058@fpt.edu.vn| +070 2845 756</i></li>
                    <li><i>phuonghtnbc00052@fpt.edu.vn| +091 6198 548</i></li>
                    <li><i>kietnvbc00049@fpt.edu.vn| +036 5338 322</i></li>
                </ul>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5\">
                <ul class=\"list-unstyled list-inline social text-center\">
                    <li class=\"list-inline-item\"><a href=\"https://www.facebook.com/xuandi03\"><i class=\"fa fa-facebook\"></i></a></li>
                    <li class=\"list-inline-item\"><a href=\"mailto:didmxbc00058@fpt.edu.vn\" target=\"_blank\"><i class=\"fa fa-envelope\"></i></a></li>
                </ul>
            </div>
            <hr>
        </div>
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white\">
                <p class=\"h6\" style=\"font-size:2.5rem; color:orange;\">BTEC FPT Can Tho</p>
            </div>
            <hr>
        </div>
    </div>
</section>


    <!-- End footer-->

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
        return "information/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 201,  262 => 200,  258 => 199,  254 => 198,  224 => 171,  197 => 147,  119 => 72,  84 => 39,  82 => 38,  43 => 1,);
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

    <title>NVK Store</title>

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

    {% include \"header.html.twig\" %}

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class=\"banner header-text\">
      <div class=\"owl-banner owl-carousel\">
        <div class=\"banner-item-01\" style=\"\tbackground-image: url(cssK/price_3.jpg);\">
          <div class=\"text-content\">
            <h4 style=\"font-size: 2.5rem;\">NVK Store</h4>
            <h2>Good product, good price, prestige and quality</h2>
          </div>
        </div>
        <div class=\"banner-item-02\" style=\"\tbackground-image: url(cssK/price_2.jpg);\">
          <div class=\"text-content\">
            <h4 style=\"font-size: 3rem;\">NVK Store</h4>
            <h2>Good product, good price, prestige and quality</h2>
          </div>
        </div>
        <div class=\"banner-item-03\" style=\"\tbackground-image: url(cssK/price_1.jpg)\">
          <div class=\"text-content\">
            <h4 style=\"font-size: 3rem;\">NVK Store/h4>
            <h2>Good product, good price, prestige and quality</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <div class=\"latest-products\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            <div class=\"section-heading\">
              <h2>Latest Products</h2>
              <a href=\"{{path('app_product')}}\">view all products <i class=\"fa fa-angle-right\"></i></a>
            </div>
          </div>
          <div class=\"col-md-4\">
            <div class=\"product-item\">
              <a href=\"#\"><img src=\"/uploads/product/12-64dd18855c796.jpg\" alt=\"\"></a>
              <div class=\"down-content\">
                <a href=\"#\"><h4>Turtle  </h4></a>
                <h6>70.00\$</h6>
                <p>Supper Cute! Good for people who are Water Living</p>
                <ul class=\"stars\">
                  <li><i class=\"fa fa-star\"></i></li>
                  <li><i class=\"fa fa-star\"></i></li>
                  <li><i class=\"fa fa-star\"></i></li>
                  <li><i class=\"fa fa-star\"></i></li>
                  <li><i class=\"fa fa-star\"></i></li>
                </ul>
              </div>
            </div>
          </div>
          <div class=\"col-md-4\">
            <div class=\"product-item\">
              <a href=\"#\"><img src=\"/uploads/product/toyguns02-64dd194aa4dec.webp\" alt=\"\"></a>
              <div class=\"down-content\">
                <a href=\"#\"><h4>Snorlax</h4></a>
                <h6>90.00\$</h6>
                <p>Supper Cute! Good for people who are Water Living</p>
                <ul class=\"stars\">
                  <li><i class=\"fa fa-star\"></i></li>
                  <li><i class=\"fa fa-star\"></i></li>
                  <li><i class=\"fa fa-star\"></i></li>
                  <li><i class=\"fa fa-star\"></i></li>
                  <li><i class=\"fa fa-star\"></i></li>
                </ul>
              </div>
            </div>
          </div>
          <div class=\"col-md-4\">
            <div class=\"product-item\">
              <a href=\"#\"><img src=\"/uploads/product/11-64dd17b691696.webp\" alt=\"\"></a>
              <div class=\"down-content\">
                <a href=\"#\"><h4>Gengar</h4></a>
                <h6>70.00\$</h6>
                <p>Supper Cute! Good for people who are Water Living</p>
                <ul class=\"stars\">
                  <li><i class=\"fa fa-star\"></i></li>
                  <li><i class=\"fa fa-star\"></i></li>
                  <li><i class=\"fa fa-star\"></i></li>
                  <li><i class=\"fa fa-star\"></i></li>
                  <li><i class=\"fa fa-star\"></i></li>
                </ul>
              </div>
            </div>
          </div>
    </div>

    <div class=\"best-features\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            <div class=\"section-heading\">
              <h2>General introduction about Semi shop</h2>
            </div>
          </div>
          <div class=\"col-md-6\">
            <div class=\"left-content\">
              <h4>What's at Semi Shop?</h4>
              <p>At NVK Shop, we bring you a rich and exciting world of toys. With a wide range of products, you are sure to find great products for all ages. Explore now to experience the fun and growth at NVK Shop!</P>
              <ul class=\"featured-list\">
              <p><b>Ensure</b></p>
                <li><a>Quality</a></li>
                <li><a>Reliable quality</a></li>
                <li><a>Various styles and colors</a></li>
                <li><a>Non-toxic</a></li>
              </ul>
              <a href=\"{{path('app_about')}}\" class=\"filled-button\">Read More</a>
            </div>
          </div>
          <div class=\"col-md-6\">
            <div class=\"right-image\">
              <img src=\"assets/images/best-logo2.png\" alt=\"\" style=\"max-width: 435px; height:auto\">
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class=\"call-to-action\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            <div class=\"inner-content\">
              <div class=\"row\">
                <div class=\"col-md-8\">
                  <h4>See more about <em>unique</em> and <em>innovative</em> products</h4>
                  <p>Unique and creative toys encourage children to think and be creative in finding new and different approaches. They help us discover and create unique solutions to problems and challenges.</p>
                </div>
                <div class=\"col-md-4\">
                  <a href=\"{{path('app_product')}}\" class=\"filled-button\">Purchase Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
    <!-- Start footer-->
<link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<link rel=\"stylesheet\" href=\"assets/css/footer.css\">
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
<script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>

\t<section id=\"footer\">
    <div class=\"container\">
        <div class=\"row text-center text-xs-center text-sm-left text-md-left\">
            <div class=\"col-xs-12 col-sm-4 col-md-4\">
                <h5>About us</h5>
                <p style=\"color:white;\">
                    Semi Company, a seasoned player in the toy industry, takes pride in crafting and distributing top-tier, diverse, and secure toy items for kids. Our dedication lies in offering customers unforgettable moments and genuine worth through distinct playthings. Every creation encapsulates ingenuity and refined design. Our focus is on nurturing children's cognitive faculties, exploration, and inventiveness, as we continually refresh our toy lineup. Quality remains our foremost concern, guaranteeing that each toy delivers happiness while fostering children's growth.
                </p>
            </div>
            <div class=\"col-xs-12 col-sm-4 col-md-4\">
                <h5>Features</h5>
                <ul class=\"list-unstyled quick-links\">
                    <li><a href=\"{{path('app_home')}}\"><i class=\"fa fa-angle-double-right\"></i>Home</a></li>
                    <li><a href=\"{{path('app_product')}}\"><i class=\"fa fa-angle-double-right\"></i>Products</a></li>
                    <li><a href=\"{{path('app_about')}}\"><i class=\"fa fa-angle-double-right\"></i>About</a></li>
                    <li><a href=\"{{path('app_contact')}}\"><i class=\"fa fa-angle-double-right\"></i>Contact Us</a></li>
                    <li><a href=\"https://www.freeprivacypolicy.com/live/79ca156c-5de1-4bc6-8e67-45cd62f7129e\"><i class=\"fa fa-angle-double-right\"></i>Privacy Policy</a></li>
                </ul>
            </div>
            <div class=\"col-xs-12 col-sm-4 col-md-4\">
                <h5>Other contact information</h5>
                <ul class=\"list-unstyled quick-links\" style=\"color: white;\">
                    <li><i>didmxbc00058@fpt.edu.vn| +070 2845 756</i></li>
                    <li><i>phuonghtnbc00052@fpt.edu.vn| +091 6198 548</i></li>
                    <li><i>kietnvbc00049@fpt.edu.vn| +036 5338 322</i></li>
                </ul>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5\">
                <ul class=\"list-unstyled list-inline social text-center\">
                    <li class=\"list-inline-item\"><a href=\"https://www.facebook.com/xuandi03\"><i class=\"fa fa-facebook\"></i></a></li>
                    <li class=\"list-inline-item\"><a href=\"mailto:didmxbc00058@fpt.edu.vn\" target=\"_blank\"><i class=\"fa fa-envelope\"></i></a></li>
                </ul>
            </div>
            <hr>
        </div>
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white\">
                <p class=\"h6\" style=\"font-size:2.5rem; color:orange;\">BTEC FPT Can Tho</p>
            </div>
            <hr>
        </div>
    </div>
</section>


    <!-- End footer-->

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

", "information/home.html.twig", "C:\\Users\\Laptop\\Website Selling Toy Guns\\templates\\information\\home.html.twig");
    }
}
