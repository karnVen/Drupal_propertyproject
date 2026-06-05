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

/* themes/custom/villa_agency_theme/templates/layout/page--front.html.twig */
class __TwigTemplate_8279c47aa228192f5628b1a34556d813 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!-- ***** Preloader Start ***** -->
<div id=\"js-preloader\" class=\"js-preloader\">
  <div class=\"preloader-inner\">
    <span class=\"dot\"></span>
    <div class=\"dots\">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
</div>
<!-- ***** Preloader End ***** -->

<div class=\"sub-header\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-md-8\">
        <ul class=\"info\">
          <li><i class=\"fa fa-envelope\"></i> info@company.com</li>
          <li><i class=\"fa fa-map\"></i> Sunny Isles Beach, FL 33160</li>
        </ul>
      </div>
      <div class=\"col-lg-4 col-md-4\">
        <ul class=\"social-links\">
          <li><a href=\"#\"><i class=\"fab fa-facebook\"></i></a></li>
          <li><a href=\"https://x.com/minthu\" target=\"_blank\"><i class=\"fab fa-twitter\"></i></a></li>
          <li><a href=\"#\"><i class=\"fab fa-linkedin\"></i></a></li>
          <li><a href=\"#\"><i class=\"fab fa-instagram\"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- ***** Header Area Start ***** -->
<header class=\"header-area header-sticky\">
  <div class=\"container\">
      <div class=\"row\">
          <div class=\"col-12\">
              <nav class=\"main-nav\">
                  <!-- ***** Logo Start ***** -->
                  <a href=\"";
        // line 42
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
        yield "\" class=\"logo\">
                      <h1>Villa</h1>
                  </a>
                  <!-- ***** Logo End ***** -->
                  <!-- ***** Menu Start ***** -->
                  ";
        // line 47
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 48
            yield "                    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 48), "html", null, true);
            yield "
                  ";
        } else {
            // line 50
            yield "                    <ul class=\"nav\">
                      <li><a href=\"";
            // line 51
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
            yield "\" class=\"active\">Home</a></li>
                      <li><a href=\"#\">Properties</a></li>
                      <li><a href=\"#\">Property Details</a></li>
                      <li><a href=\"#\">Contact Us</a></li>
                      <li><a href=\"#\"><i class=\"fa fa-calendar\"></i> Schedule a visit</a></li>
                    </ul>
                  ";
        }
        // line 58
        yield "                  <a class=\x27menu-trigger\x27>
                      <span>Menu</span>
                  </a>
                  <!-- ***** Menu End ***** -->
              </nav>
          </div>
      </div>
  </div>
</header>
<!-- ***** Header Area End ***** -->

";
        // line 69
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 69)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 70
            yield "  <div class=\"header-region\">
    ";
            // line 71
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 71), "html", null, true);
            yield "
  </div>
";
        }
        // line 74
        yield "


  <div class=\"main-banner\">
    <div class=\"owl-carousel owl-banner\">
      <div class=\"item item-1\">
        <div class=\"header-text\">
          <span class=\"category\">Toronto, <em>Canada</em></span>
          <h2>Hurry!<br>Get the Best Villa for you</h2>
        </div>
      </div>
      <div class=\"item item-2\">
        <div class=\"header-text\">
          <span class=\"category\">Melbourne, <em>Australia</em></span>
          <h2>Be Quick!<br>Get the best villa in town</h2>
        </div>
      </div>
      <div class=\"item item-3\">
        <div class=\"header-text\">
          <span class=\"category\">Miami, <em>South Florida</em></span>
          <h2>Act Now!<br>Get the highest level penthouse</h2>
        </div>
      </div>
    </div>
  </div>

  <div class=\"featured section\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-4\">
          <div class=\"left-image\">
            <img src=\"";
        // line 105
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true);
        yield "/assets/images/featured.jpg\" alt=\"\">
            <a href=\"property-details.html\"><img src=\"";
        // line 106
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true);
        yield "/assets/images/featured-icon.png\" alt=\"\" style=\"max-width: 60px; padding: 0px;\"></a>
          </div>
        </div>
        <div class=\"col-lg-5\">
          <div class=\"section-heading\">
            <h6>| Featured</h6>
            <h2>Best Appartment &amp; Sea view</h2>
          </div>
          <div class=\"accordion\" id=\"accordionExample\">
            <div class=\"accordion-item\">
              <h2 class=\"accordion-header\" id=\"headingOne\">
                <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                  Best useful links ?
                </button>
              </h2>
              <div id=\"collapseOne\" class=\"accordion-collapse collapse show\" aria-labelledby=\"headingOne\" data-bs-parent=\"#accordionExample\">
                <div class=\"accordion-body\">
                Get <strong>the best villa</strong> website template in HTML CSS and Bootstrap for your business. TemplateMo provides you the <a href=\"https://www.google.com/search?q=best+free+css+templates\" target=\"_blank\">best free CSS templates</a> in the world. Please tell your friends about it.</div>
              </div>
            </div>
            <div class=\"accordion-item\">
              <h2 class=\"accordion-header\" id=\"headingTwo\">
                <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                  How does this work ?
                </button>
              </h2>
              <div id=\"collapseTwo\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingTwo\" data-bs-parent=\"#accordionExample\">
                <div class=\"accordion-body\">
                  Dolor <strong>almesit amet</strong>, consectetur adipiscing elit, sed doesn\x27t eiusmod tempor incididunt ut labore consectetur <code>adipiscing</code> elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
              </div>
            </div>
            <div class=\"accordion-item\">
              <h2 class=\"accordion-header\" id=\"headingThree\">
                <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
                  Why is Villa Agency the best ?
                </button>
              </h2>
              <div id=\"collapseThree\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingThree\" data-bs-parent=\"#accordionExample\">
                <div class=\"accordion-body\">
                  Dolor <strong>almesit amet</strong>, consectetur adipiscing elit, sed doesn\x27t eiusmod tempor incididunt ut labore consectetur <code>adipiscing</code> elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-lg-3\">
          <div class=\"info-table\">
            <ul>
              <li>
                <img src=\"";
        // line 156
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true);
        yield "/assets/images/info-icon-01.png\" alt=\"\" style=\"max-width: 52px;\">
                <h4>250 m2<br><span>Total Flat Space</span></h4>
              </li>
              <li>
                <img src=\"";
        // line 160
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true);
        yield "/assets/images/info-icon-02.png\" alt=\"\" style=\"max-width: 52px;\">
                <h4>Contract<br><span>Contract Ready</span></h4>
              </li>
              <li>
                <img src=\"";
        // line 164
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true);
        yield "/assets/images/info-icon-03.png\" alt=\"\" style=\"max-width: 52px;\">
                <h4>Payment<br><span>Payment Process</span></h4>
              </li>
              <li>
                <img src=\"";
        // line 168
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true);
        yield "/assets/images/info-icon-04.png\" alt=\"\" style=\"max-width: 52px;\">
                <h4>Safety<br><span>24/7 Under Control</span></h4>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"video section\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-4 offset-lg-4\">
          <div class=\"section-heading text-center\">
            <h6>| Video View</h6>
            <h2>Get Closer View & Different Feeling</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"video-content\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-10 offset-lg-1\">
          <div class=\"video-frame\">
            <img src=\"";
        // line 196
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true);
        yield "/assets/images/video-frame.jpg\" alt=\"\">
            <a href=\"https://youtube.com\" target=\"_blank\"><i class=\"fa fa-play\"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"fun-facts\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <div class=\"wrapper\">
            <div class=\"row\">
              <div class=\"col-lg-4\">
                <div class=\"counter\">
                  <h2 class=\"timer count-title count-number\" data-to=\"34\" data-speed=\"1000\"></h2>
                   <p class=\"count-text \">Buildings<br>Finished Now</p>
                </div>
              </div>
              <div class=\"col-lg-4\">
                <div class=\"counter\">
                  <h2 class=\"timer count-title count-number\" data-to=\"12\" data-speed=\"1000\"></h2>
                  <p class=\"count-text \">Years<br>Experience</p>
                </div>
              </div>
              <div class=\"col-lg-4\">
                <div class=\"counter\">
                  <h2 class=\"timer count-title count-number\" data-to=\"24\" data-speed=\"1000\"></h2>
                  <p class=\"count-text \">Awwards<br>Won 2023</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"section best-deal\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-4\">
          <div class=\"section-heading\">
            <h6>| Best Deal</h6>
            <h2>Find Your Best Deal Right Now!</h2>
          </div>
        </div>
        <div class=\"col-lg-12\">
          <div class=\"tabs-content\">
            <div class=\"row\">
              <div class=\"nav-wrapper \">
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                  <li class=\"nav-item\" role=\"presentation\">
                    <button class=\"nav-link active\" id=\"appartment-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#appartment\" type=\"button\" role=\"tab\" aria-controls=\"appartment\" aria-selected=\"true\">Appartment</button>
                  </li>
                  <li class=\"nav-item\" role=\"presentation\">
                    <button class=\"nav-link\" id=\"villa-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#villa\" type=\"button\" role=\"tab\" aria-controls=\"villa\" aria-selected=\"false\">Villa House</button>
                  </li>
                  <li class=\"nav-item\" role=\"presentation\">
                    <button class=\"nav-link\" id=\"penthouse-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#penthouse\" type=\"button\" role=\"tab\" aria-controls=\"penthouse\" aria-selected=\"false\">Penthouse</button>
                  </li>
                </ul>
              </div>              
              <div class=\"tab-content\" id=\"myTabContent\">
                <div class=\"tab-pane fade show active\" id=\"appartment\" role=\"tabpanel\" aria-labelledby=\"appartment-tab\">
                  <div class=\"row\">
                    <div class=\"col-lg-3\">
                      <div class=\"info-table\">
                        <ul>
                          <li>Total Flat Space <span>185 m2</span></li>
                          <li>Floor number <span>26th</span></li>
                          <li>Number of rooms <span>4</span></li>
                          <li>Parking Available <span>Yes</span></li>
                          <li>Payment Process <span>Bank</span></li>
                        </ul>
                      </div>
                    </div>
                    <div class=\"col-lg-6\">
                      <img src=\"";
        // line 275
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true);
        yield "/assets/images/deal-01.jpg\" alt=\"\">
                    </div>
                    <div class=\"col-lg-3\">
                      <h4>Extra Info About Property</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod tempor pack incididunt ut labore et dolore magna aliqua quised ipsum suspendisse. 
                      <br><br>When you need free CSS templates, you can simply type TemplateMo in any search engine website. In addition, you can type TemplateMo Portfolio, TemplateMo One Page Layouts, etc.</p>
                      <div class=\"icon-button\">
                        <a href=\"property-details.html\"><i class=\"fa fa-calendar\"></i> Schedule a visit</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"tab-pane fade\" id=\"villa\" role=\"tabpanel\" aria-labelledby=\"villa-tab\">
                  <div class=\"row\">
                    <div class=\"col-lg-3\">
                      <div class=\"info-table\">
                        <ul>
                          <li>Total Flat Space <span>250 m2</span></li>
                          <li>Floor number <span>26th</span></li>
                          <li>Number of rooms <span>5</span></li>
                          <li>Parking Available <span>Yes</span></li>
                          <li>Payment Process <span>Bank</span></li>
                        </ul>
                      </div>
                    </div>
                    <div class=\"col-lg-6\">
                      <img src=\"";
        // line 301
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true);
        yield "/assets/images/deal-02.jpg\" alt=\"\">
                    </div>
                    <div class=\"col-lg-3\">
                      <h4>Detail Info About Villa</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod tempor pack incididunt ut labore et dolore magna aliqua quised ipsum suspendisse. <br><br>Swag fanny pack lyft blog twee. JOMO ethical copper mug, succulents typewriter shaman DIY kitsch twee taiyaki fixie hella venmo after messenger poutine next level humblebrag swag franzen.</p>
                      <div class=\"icon-button\">
                        <a href=\"property-details.html\"><i class=\"fa fa-calendar\"></i> Schedule a visit</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"tab-pane fade\" id=\"penthouse\" role=\"tabpanel\" aria-labelledby=\"penthouse-tab\">
                  <div class=\"row\">
                    <div class=\"col-lg-3\">
                      <div class=\"info-table\">
                        <ul>
                          <li>Total Flat Space <span>320 m2</span></li>
                          <li>Floor number <span>34th</span></li>
                          <li>Number of rooms <span>6</span></li>
                          <li>Parking Available <span>Yes</span></li>
                          <li>Payment Process <span>Bank</span></li>
                        </ul>
                      </div>
                    </div>
                    <div class=\"col-lg-6\">
                      <img src=\"";
        // line 326
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true);
        yield "/assets/images/deal-03.jpg\" alt=\"\">
                    </div>
                    <div class=\"col-lg-3\">
                      <h4>Extra Info About Penthouse</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod tempor pack incididunt ut labore et dolore magna aliqua quised ipsum suspendisse. <br><br>Swag fanny pack lyft blog twee. JOMO ethical copper mug, succulents typewriter shaman DIY kitsch twee taiyaki fixie hella venmo after messenger poutine next level humblebrag swag franzen.</p>
                      <div class=\"icon-button\">
                        <a href=\"property-details.html\"><i class=\"fa fa-calendar\"></i> Schedule a visit</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"properties section\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-4 offset-lg-4\">
          <div class=\"section-heading text-center\">
            <h6>| Properties</h6>
            <h2>We Provide The Best Property You Like</h2>
          </div>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-lg-4 col-md-6\">
          <div class=\"item\">
            <a href=\"property-details.html\"><img src=\"";
        // line 358
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true);
        yield "/assets/images/property-01.jpg\" alt=\"\"></a>
            <span class=\"category\">Luxury Villa</span>
            <h6>\$2.264.000</h6>
            <h4><a href=\"property-details.html\">18 New Street Miami, OR 97219</a></h4>
            <ul>
              <li>Bedrooms: <span>8</span></li>
              <li>Bathrooms: <span>8</span></li>
              <li>Area: <span>545m2</span></li>
              <li>Floor: <span>3</span></li>
              <li>Parking: <span>6 spots</span></li>
            </ul>
            <div class=\"main-button\">
              <a href=\"property-details.html\">Schedule a visit</a>
            </div>
          </div>
        </div>
        <div class=\"col-lg-4 col-md-6\">
          <div class=\"item\">
            <a href=\"property-details.html\"><img src=\"";
        // line 376
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true);
        yield "/assets/images/property-02.jpg\" alt=\"\"></a>
            <span class=\"category\">Luxury Villa</span>
            <h6>\$1.180.000</h6>
            <h4><a href=\"property-details.html\">54 Mid Street Florida, OR 27001</a></h4>
            <ul>
              <li>Bedrooms: <span>6</span></li>
              <li>Bathrooms: <span>5</span></li>
              <li>Area: <span>450m2</span></li>
              <li>Floor: <span>3</span></li>
              <li>Parking: <span>8 spots</span></li>
            </ul>
            <div class=\"main-button\">
              <a href=\"property-details.html\">Schedule a visit</a>
            </div>
          </div>
        </div>
        <div class=\"col-lg-4 col-md-6\">
          <div class=\"item\">
            <a href=\"property-details.html\"><img src=\"";
        // line 394
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true);
        yield "/assets/images/property-03.jpg\" alt=\"\"></a>
            <span class=\"category\">Luxury Villa</span>
            <h6>\$1.460.000</h6>
            <h4><a href=\"property-details.html\">26 Old Street Miami, OR 38540</a></h4>
            <ul>
              <li>Bedrooms: <span>5</span></li>
              <li>Bathrooms: <span>4</span></li>
              <li>Area: <span>225m2</span></li>
              <li>Floor: <span>3</span></li>
              <li>Parking: <span>10 spots</span></li>
            </ul>
            <div class=\"main-button\">
              <a href=\"property-details.html\">Schedule a visit</a>
            </div>
          </div>
        </div>
        <div class=\"col-lg-4 col-md-6\">
          <div class=\"item\">
            <a href=\"property-details.html\"><img src=\"";
        // line 412
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true);
        yield "/assets/images/property-04.jpg\" alt=\"\"></a>
            <span class=\"category\">Apartment</span>
            <h6>\$584.500</h6>
            <h4><a href=\"property-details.html\">12 New Street Miami, OR 12650</a></h4>
            <ul>
              <li>Bedrooms: <span>4</span></li>
              <li>Bathrooms: <span>3</span></li>
              <li>Area: <span>125m2</span></li>
              <li>Floor: <span>25th</span></li>
              <li>Parking: <span>2 cars</span></li>
            </ul>
            <div class=\"main-button\">
              <a href=\"property-details.html\">Schedule a visit</a>
            </div>
          </div>
        </div>
        <div class=\"col-lg-4 col-md-6\">
          <div class=\"item\">
            <a href=\"property-details.html\"><img src=\"";
        // line 430
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true);
        yield "/assets/images/property-05.jpg\" alt=\"\"></a>
            <span class=\"category\">Penthouse</span>
            <h6>\$925.600</h6>
            <h4><a href=\"property-details.html\">34 Beach Street Miami, OR 42680</a></h4>
            <ul>
              <li>Bedrooms: <span>4</span></li>
              <li>Bathrooms: <span>4</span></li>
              <li>Area: <span>180m2</span></li>
              <li>Floor: <span>38th</span></li>
              <li>Parking: <span>2 cars</span></li>
            </ul>
            <div class=\"main-button\">
              <a href=\"property-details.html\">Schedule a visit</a>
            </div>
          </div>
        </div>
        <div class=\"col-lg-4 col-md-6\">
          <div class=\"item\">
            <a href=\"property-details.html\"><img src=\"";
        // line 448
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true);
        yield "/assets/images/property-06.jpg\" alt=\"\"></a>
            <span class=\"category\">Modern Condo</span>
            <h6>\$450.000</h6>
            <h4><a href=\"property-details.html\">22 New Street Portland, OR 16540</a></h4>
            <ul>
              <li>Bedrooms: <span>3</span></li>
              <li>Bathrooms: <span>2</span></li>
              <li>Area: <span>165m2</span></li>
              <li>Floor: <span>26th</span></li>
              <li>Parking: <span>3 cars</span></li>
            </ul>
            <div class=\"main-button\">
              <a href=\"property-details.html\">Schedule a visit</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"contact section\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-4 offset-lg-4\">
          <div class=\"section-heading text-center\">
            <h6>| Contact Us</h6>
            <h2>Get In Touch With Our Agents</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"contact-content\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-7\">
          <div id=\"map\">
            <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12469.776493332698!2d-80.14036379941481!3d25.907788681148624!2m3!1f357.26927939317244!2f20.870722720054623!3f0!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x88d9add4b4ac788f%3A0xe77469d09480fcdb!2sSunny%20Isles%20Beach!5e1!3m2!1sen!2sth!4v1642869952544!5m2!1sen!2sth\" width=\"100%\" height=\"500px\" frameborder=\"0\" style=\"border:0; border-radius: 10px; box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);\" allowfullscreen=\"\"></iframe>
          </div>
          <div class=\"row\">
            <div class=\"col-lg-6\">
              <div class=\"item phone\">
                <img src=\"";
        // line 491
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true);
        yield "/assets/images/phone-icon.png\" alt=\"\" style=\"max-width: 52px;\">
                <h6>010-020-0340<br><span>Phone Number</span></h6>
              </div>
            </div>
            <div class=\"col-lg-6\">
              <div class=\"item email\">
                <img src=\"";
        // line 497
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true);
        yield "/assets/images/email-icon.png\" alt=\"\" style=\"max-width: 52px;\">
                <h6>info@villa.co<br><span>Business Email</span></h6>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-lg-5\">
          <form id=\"contact-form\" action=\"\" method=\"post\">
            <div class=\"row\">
              <div class=\"col-lg-12\">
                <fieldset>
                  <label for=\"name\">Full Name</label>
                  <input type=\"name\" name=\"name\" id=\"name\" placeholder=\"Your Name...\" autocomplete=\"on\" required>
                </fieldset>
              </div>
              <div class=\"col-lg-12\">
                <fieldset>
                  <label for=\"email\">Email Address</label>
                  <input type=\"text\" name=\"email\" id=\"email\" pattern=\"[^ @]*@[^ @]*\" placeholder=\"Your E-mail...\" required=\"\">
                </fieldset>
              </div>
              <div class=\"col-lg-12\">
                <fieldset>
                  <label for=\"subject\">Subject</label>
                  <input type=\"subject\" name=\"subject\" id=\"subject\" placeholder=\"Subject...\" autocomplete=\"on\" >
                </fieldset>
              </div>
              <div class=\"col-lg-12\">
                <fieldset>
                  <label for=\"message\">Message</label>
                  <textarea name=\"message\" id=\"message\" placeholder=\"Your Message\"></textarea>
                </fieldset>
              </div>
              <div class=\"col-lg-12\">
                <fieldset>
                  <button type=\"submit\" id=\"form-submit\" class=\"orange-button\">Send Message</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  

<footer>
  <div class=\"container\">
    <div class=\"col-lg-8\">
      ";
        // line 547
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 547)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 548
            yield "        ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 548), "html", null, true);
            yield "
      ";
        } else {
            // line 550
            yield "        <p>Copyright © 2048 Villa Agency Co., Ltd. All rights reserved. 
        Design: <a rel=\"nofollow\" href=\"https://templatemo.com\" target=\"_blank\">TemplateMo</a></p>
      ";
        }
        // line 553
        yield "    </div>
  </div>
</footer>

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "base_path", "directory"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/villa_agency_theme/templates/layout/page--front.html.twig";
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
        return array (  681 => 553,  676 => 550,  670 => 548,  668 => 547,  615 => 497,  606 => 491,  560 => 448,  539 => 430,  518 => 412,  497 => 394,  476 => 376,  455 => 358,  420 => 326,  392 => 301,  363 => 275,  281 => 196,  250 => 168,  243 => 164,  236 => 160,  229 => 156,  176 => 106,  172 => 105,  139 => 74,  133 => 71,  130 => 70,  128 => 69,  115 => 58,  105 => 51,  102 => 50,  96 => 48,  94 => 47,  86 => 42,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/villa_agency_theme/templates/layout/page--front.html.twig", "/home/karnven/drupal_propertyproject/web/themes/custom/villa_agency_theme/templates/layout/page--front.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 47];
        static $filters = ["escape" => 48];
        static $functions = ["url" => 42];

        try {
            $this->sandbox->checkSecurity(
                [0 => "if"],
                [0 => "escape"],
                [0 => "url"],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
