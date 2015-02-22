<?php

/* layout.twig */
class __TwigTemplate_9e34a98c6fa86bf5add22d9339f59d2c0b301ce5aac155a2293a9794513e0ee1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'page_title' => array($this, 'block_page_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        ";
        // line 7
        if (array_key_exists("image", $context)) {
            // line 8
            echo "            <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "description", array())) ? ($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "description", array())) : ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "tagline", array()))), "html", null, true);
            echo "\">
        ";
        } else {
            // line 10
            echo "            <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "tagline", array()), "html", null, true);
            echo "\">
        ";
        }
        // line 12
        echo "        <meta name=\"author\" content=\"Jeremy Kendall\">
        ";
        // line 13
        $this->displayBlock('meta', $context, $blocks);
        // line 15
        echo "
        <link rel=\"shortcut icon\" href=\"/img/icons/favicon.ico\" type=\"image/x-icon\">
        <link rel=\"alternate\" type=\"application/rss+xml\" title=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "site_name", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/feed\">

        <title>";
        // line 19
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>

        <!-- Latest compiled and minified CSS -->
        <link rel=\"stylesheet\" href=\"css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"css/styles.css\">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <![endif]-->

        ";
        // line 31
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 32
        echo "    </head>

    <body>
        <div class=\"navbar navbar-default navbar-fixed-top\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"/\" class=\"navbar-brand\">";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "brand", array()), "html", null, true);
        echo "</a>
                    <button class=\"navbar-toggle\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbar-main\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>
                <div class=\"navbar-collapse collapse\" id=\"navbar-main\">
                    <ul class=\"nav navbar-nav\">
                        ";
        // line 47
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["navigation"]) ? $context["navigation"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 48
            echo "                        <li class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "class", array()), "html", null, true);
            echo "\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "href", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "caption", array()), "html", null, true);
            echo "</a></li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                    </ul>

                </div>
            </div>
        </div>
        <div class=\"container\">
            ";
        // line 56
        if (array_key_exists("home", $context)) {
            // line 57
            echo "            ";
            if ((isset($context["home"]) ? $context["home"] : null)) {
                // line 58
                echo "            <div id=\"banner\">
                <div class=\"col-lg-12\">
                    <h1>";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "site_name", array()), "html", null, true);
                echo "</h1>
                    <p class=\"lead\">
                        ";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "tagline", array()), "html", null, true);
                echo "
                    </p>
                </div>
            </div>
            ";
            }
            // line 67
            echo "            ";
        }
        // line 68
        echo "
            <div class=\"row photos\">
                ";
        // line 70
        $this->displayBlock('content', $context, $blocks);
        // line 71
        echo "            </div>         
        </div>

            <footer class=\"footer\" align=\"center\">
                <p class=\"text-muted credit\">
                    &copy; <a href=\"tikataweb.com\" target=\"_blank\">Gerhantara</a>.
                </p>
            </footer>

        <script src=\"js/jquery.js\"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src=\"js/bootstrap.min.js\"></script>

        ";
        // line 84
        $this->displayBlock('javascript', $context, $blocks);
        // line 85
        echo "    </body>
</html>";
    }

    // line 13
    public function block_meta($context, array $blocks = array())
    {
        // line 14
        echo "        ";
    }

    // line 19
    public function block_page_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "site_name", array()), "html", null, true);
    }

    // line 31
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 70
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    // line 84
    public function block_javascript($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 84,  195 => 70,  190 => 31,  184 => 19,  180 => 14,  177 => 13,  172 => 85,  170 => 84,  155 => 71,  153 => 70,  149 => 68,  146 => 67,  138 => 62,  133 => 60,  129 => 58,  126 => 57,  124 => 56,  116 => 50,  103 => 48,  99 => 47,  87 => 38,  79 => 32,  77 => 31,  62 => 19,  55 => 17,  51 => 15,  49 => 13,  46 => 12,  40 => 10,  34 => 8,  32 => 7,  24 => 1,);
    }
}
