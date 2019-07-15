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

/* service/service.html.twig */
class __TwigTemplate_e11fd57a19e4cba401fd38cf432d060b55bee247cb50605a1f191dfe495f86cb extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/service.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/service.html.twig"));

        // line 5
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["formService"]) || array_key_exists("formService", $context) ? $context["formService"] : (function () { throw new RuntimeError('Variable "formService" does not exist.', 5, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "service/service.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "SERVICE";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<br>
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            echo "    <div class=\"alert alert-success\">
        ";
            // line 11
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "

    </div> 
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "flashes", [0 => "danger"], "method", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 16
            echo "    <div class=\"alert alert-danger\">
        ";
            // line 17
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "

    </div> 
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "   <br>
        <h1 align=\"center\">GESTION DES SERVICES</h1>
        <div class=\"container \">
                ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formService"]) || array_key_exists("formService", $context) ? $context["formService"] : (function () { throw new RuntimeError('Variable "formService" does not exist.', 24, $this->source); })()), 'form_start');
        echo "
            <div class=\"row\">
                <div class=\"col-lg-4\">

                </div>
                <div class=\"col-lg-4\">
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formService"]) || array_key_exists("formService", $context) ? $context["formService"] : (function () { throw new RuntimeError('Variable "formService" does not exist.', 30, $this->source); })()), "libelle", [], "any", false, false, false, 30), 'row', ["attr" => ["placeholder" => "Nom du Service"]]);
        echo "

                </div>
                <div class=\"col-lg-4\"></div>

                <div class=\"col-lg-4\">

                    </div>
                    <div class=\"col-lg-4\">
                            <button type=\"submit\" class=\"btn btn-success\">
                            
                        ";
        // line 41
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 41, $this->source); })())) {
            // line 42
            echo "                            ENREGISTRER LES MODIFICATIONS

                        ";
        } else {
            // line 45
            echo "                            AJOUTER UN SERVICE
                        ";
        }
        // line 47
        echo "        
                            
                            
                            </button>

                    </div>
                    <div class=\"col-lg-4\"></div>

            </div>
                

       
            ";
        // line 59
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formService"]) || array_key_exists("formService", $context) ? $context["formService"] : (function () { throw new RuntimeError('Variable "formService" does not exist.', 59, $this->source); })()), 'form_end');
        echo "

        </div>
        
        <br>
        <table class=\"table table-hover\">
                <thead >
                  <tr>
                    <th scope=\"col\">ID SERVICE</th>
                    <th scope=\"col\">NOM SERVICE</th>
                      ";
        // line 70
        echo "                    <th scope=\"col\">MODIFIER</th>
                    ";
        // line 72
        echo "
                    <th scope=\"col\">SUPPRIMER</th>

                  </tr>
                </thead>
                <tbody>
                 
                ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 79, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 80
            echo "                  
                  <tr class=\"table-secondary\">
                    <th scope=\"row\">";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 82), "html", null, true);
            echo "</th>
                    <td>";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "libelle", [], "any", false, false, false, 83), "html", null, true);
            echo "</td>
                    ";
            // line 85
            echo "                    <td>
                        <button class=\"btn btn-success\">
                            <a href=\"/service/";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 87), "html", null, true);
            echo "/modifservice\">MODIFIER</a>
                        </button>
                    </td>
                    ";
            // line 95
            echo "                    <td>
                            <button class=\"btn btn-danger\" onclick=\"supprimer(";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 96), "html", null, true);
            echo ")\">
                                    SUPPRIMER
                                </button>
                    </td>
                  </tr>
                
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "                  
                </tbody>
              </table> 


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 110
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 111
        echo "
<script>
    function supprimer(id){
        if (confirm(\"Voulez-vous vraiment supprimer ce service ?\")){
            document.location.href=\"/service/\"+id+\"/supservice\";
        }
    }
</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "service/service.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 111,  264 => 110,  249 => 103,  236 => 96,  233 => 95,  227 => 87,  223 => 85,  219 => 83,  215 => 82,  211 => 80,  207 => 79,  198 => 72,  195 => 70,  182 => 59,  168 => 47,  164 => 45,  159 => 42,  157 => 41,  143 => 30,  134 => 24,  129 => 21,  119 => 17,  116 => 16,  112 => 15,  102 => 11,  99 => 10,  95 => 9,  92 => 8,  82 => 7,  63 => 3,  52 => 1,  50 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}SERVICE{% endblock %}

{% form_theme formService 'bootstrap_4_layout.html.twig' %}

{% block body %}
<br>
{% for message in app.flashes('success') %}
    <div class=\"alert alert-success\">
        {{ message }}

    </div> 
{% endfor %}
{% for message in app.flashes('danger') %}
    <div class=\"alert alert-danger\">
        {{ message }}

    </div> 
{% endfor %}
   <br>
        <h1 align=\"center\">GESTION DES SERVICES</h1>
        <div class=\"container \">
                {{form_start(formService)}}
            <div class=\"row\">
                <div class=\"col-lg-4\">

                </div>
                <div class=\"col-lg-4\">
                        {{form_row(formService.libelle, {'attr':{'placeholder':\"Nom du Service\"}})}}

                </div>
                <div class=\"col-lg-4\"></div>

                <div class=\"col-lg-4\">

                    </div>
                    <div class=\"col-lg-4\">
                            <button type=\"submit\" class=\"btn btn-success\">
                            
                        {% if editMode %}
                            ENREGISTRER LES MODIFICATIONS

                        {% else %}
                            AJOUTER UN SERVICE
                        {% endif %}
        
                            
                            
                            </button>

                    </div>
                    <div class=\"col-lg-4\"></div>

            </div>
                

       
            {{form_end(formService)}}

        </div>
        
        <br>
        <table class=\"table table-hover\">
                <thead >
                  <tr>
                    <th scope=\"col\">ID SERVICE</th>
                    <th scope=\"col\">NOM SERVICE</th>
                      {# <th scope=\"col\">EFFECTIF</th> #}
                    <th scope=\"col\">MODIFIER</th>
                    {# <th scope=\"col\">LISTER</th> #}

                    <th scope=\"col\">SUPPRIMER</th>

                  </tr>
                </thead>
                <tbody>
                 
                {% for service in services %}
                  
                  <tr class=\"table-secondary\">
                    <th scope=\"row\">{{service.id}}</th>
                    <td>{{service.libelle}}</td>
                    {# <td>{{service | length }}</td> #}
                    <td>
                        <button class=\"btn btn-success\">
                            <a href=\"/service/{{service.id}}/modifservice\">MODIFIER</a>
                        </button>
                    </td>
                    {# <td>
                            <button class=\"btn btn-warning\">
                                    <a href=\"/service/{{service.id}}/lister\">LISTER</a>
                                </button>
                    </td> #}
                    <td>
                            <button class=\"btn btn-danger\" onclick=\"supprimer({{service.id}})\">
                                    SUPPRIMER
                                </button>
                    </td>
                  </tr>
                
              {% endfor %}
                  
                </tbody>
              </table> 


{% endblock %}

{% block javascripts %}

<script>
    function supprimer(id){
        if (confirm(\"Voulez-vous vraiment supprimer ce service ?\")){
            document.location.href=\"/service/\"+id+\"/supservice\";
        }
    }
</script>

{% endblock %}", "service/service.html.twig", "/home/mbacke/Documents/symfony/projet1/templates/service/service.html.twig");
    }
}
