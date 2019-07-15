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

/* service/employe.html.twig */
class __TwigTemplate_ec98105f2e68c2ad8f67b78bb4720639631ce4ffbfaa1650af089eed9b87824e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/employe.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/employe.html.twig"));

        // line 4
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["formEmploye"]) || array_key_exists("formEmploye", $context) ? $context["formEmploye"] : (function () { throw new RuntimeError('Variable "formEmploye" does not exist.', 4, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "service/employe.html.twig", 1);
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

        echo "EMPLOYE";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
<br>
";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 12
            echo "<div class=\"alert alert-success\">
    ";
            // line 13
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "

</div> 
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "flashes", [0 => "danger"], "method", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 18
            echo "<div class=\"alert alert-danger\">
    ";
            // line 19
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "

</div> 
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "   <br>
        <h1  align=\"center\">GESTION DES EMPLOYES</h1>

        <div class=\"container \">
                ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formEmploye"]) || array_key_exists("formEmploye", $context) ? $context["formEmploye"] : (function () { throw new RuntimeError('Variable "formEmploye" does not exist.', 27, $this->source); })()), 'form_start');
        echo "
            <div class=\"row\">
                <div class=\"col-lg-4\"></div>
                <div class=\"col-lg-4\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEmploye"]) || array_key_exists("formEmploye", $context) ? $context["formEmploye"] : (function () { throw new RuntimeError('Variable "formEmploye" does not exist.', 31, $this->source); })()), "matricule", [], "any", false, false, false, 31), 'row', ["attr" => ["placeholder" => "Matricule de l'Employé"]]);
        echo "

                </div>
                <div class=\"col-lg-4\"></div>

                <div class=\"col-lg-4\"></div>
                    <div class=\"col-lg-4\">
                            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEmploye"]) || array_key_exists("formEmploye", $context) ? $context["formEmploye"] : (function () { throw new RuntimeError('Variable "formEmploye" does not exist.', 38, $this->source); })()), "nom", [], "any", false, false, false, 38), 'row', ["attr" => ["placeholder" => "Nom Complet de L'employé"]]);
        echo "
    
                    </div>
                    <div class=\"col-lg-4\"></div>

                    <div class=\"col-lg-4\"></div>
                    <div class=\"col-lg-4\">
                            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEmploye"]) || array_key_exists("formEmploye", $context) ? $context["formEmploye"] : (function () { throw new RuntimeError('Variable "formEmploye" does not exist.', 45, $this->source); })()), "datenaissance", [], "any", false, false, false, 45), 'row', ["attr" => ["placeholder" => "Date de Naissance"]]);
        echo "
    
                    </div>
                    <div class=\"col-lg-4\"></div>

                    <div class=\"col-lg-4\"></div>
                    <div class=\"col-lg-4\">
                            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEmploye"]) || array_key_exists("formEmploye", $context) ? $context["formEmploye"] : (function () { throw new RuntimeError('Variable "formEmploye" does not exist.', 52, $this->source); })()), "salaire", [], "any", false, false, false, 52), 'row', ["attr" => ["placeholder" => "Montant du Salaire"]]);
        echo "
    
                    </div>
                    <div class=\"col-lg-4\"></div>
                    <div class=\"col-lg-4\"></div>
                    <div class=\"col-lg-4\">
                            ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEmploye"]) || array_key_exists("formEmploye", $context) ? $context["formEmploye"] : (function () { throw new RuntimeError('Variable "formEmploye" does not exist.', 58, $this->source); })()), "idService", [], "any", false, false, false, 58), 'row', ["attr" => ["placeholder" => "Montant du Salaire"]]);
        echo "
    
                    </div>
                    <div class=\"col-lg-4\"></div>

                <div class=\"col-lg-4\"></div>
                    <div class=\"col-lg-4\">
                            <button type=\"submit\" class=\"btn btn-success\">
                           
                            
                                    ";
        // line 68
        if ((isset($context["editEmploye"]) || array_key_exists("editEmploye", $context) ? $context["editEmploye"] : (function () { throw new RuntimeError('Variable "editEmploye" does not exist.', 68, $this->source); })())) {
            // line 69
            echo "                                    ENREGISTRER LES MODIFICATIONS
                                    ";
        } else {
            // line 71
            echo "                                    AJOUTER UN SERVICE
                                    ";
        }
        // line 73
        echo "                 
                                    </button>
    
                    </div>
                    <div class=\"col-lg-4\"></div>

            </div>
                
       
            ";
        // line 82
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formEmploye"]) || array_key_exists("formEmploye", $context) ? $context["formEmploye"] : (function () { throw new RuntimeError('Variable "formEmploye" does not exist.', 82, $this->source); })()), 'form_end');
        echo "

        </div>

        <br>
        <table class=\"table table-hover\">
                <thead >
                  <tr>
                    <th scope=\"col\">ID EMPLOYE</th>
                    <th scope=\"col\">MATRICULE</th>
                    <th scope=\"col\">NOM COMPLET</th>
                    <th scope=\"col\">DATEN NAISSANCE</th>
                    <th scope=\"col\">SALAIRE</th>
                    <th scope=\"col\">SERVICE</th>
                    <th scope=\"col\">MODIFIER</th>
                    <th scope=\"col\">SUPPRIMER</th>

                  </tr>
                </thead>
                <tbody>
                 
                ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["employes"]) || array_key_exists("employes", $context) ? $context["employes"] : (function () { throw new RuntimeError('Variable "employes" does not exist.', 103, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["employe"]) {
            // line 104
            echo "                  
                  <tr class=\"table-secondary\">
                    <th scope=\"row\">";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "id", [], "any", false, false, false, 106), "html", null, true);
            echo "</th>
                    <td>";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "matricule", [], "any", false, false, false, 107), "html", null, true);
            echo "</td>
                    <td>";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "nom", [], "any", false, false, false, 108), "html", null, true);
            echo "</td>
                    <td>";
            // line 109
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "datenaissance", [], "any", false, false, false, 109), "d/m/Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "salaire", [], "any", false, false, false, 110), "html", null, true);
            echo " FCFA</td>
                    <td>";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["employe"], "idService", [], "any", false, false, false, 111), "libelle", [], "any", false, false, false, 111), "html", null, true);
            echo "</td>
                    <td>
                            <button class=\"btn btn-success\">
                            <a href=\"/service/";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "id", [], "any", false, false, false, 114), "html", null, true);
            echo "/modifemploye\">MODIFIER</a>                  
                            </button>
                        </td>
                       
                        <td>
                                <button class=\"btn btn-danger\" onclick=\"supprimer(";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "id", [], "any", false, false, false, 119), "html", null, true);
            echo ")\">
                                        SUPPRIMER
                                </button>
                        </td>

                    

                  </tr>
                
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "                  
                </tbody>
              </table> 



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 138
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 139
        echo "
<script>
    function supprimer(id){
        if (confirm(\"Voulez-vous vraiment supprimer cet Employé ?\")){
            document.location.href=\"/service/\"+id+\"/supemploye\";
        }
    }
</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "service/employe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 139,  314 => 138,  298 => 129,  282 => 119,  274 => 114,  268 => 111,  264 => 110,  260 => 109,  256 => 108,  252 => 107,  248 => 106,  244 => 104,  240 => 103,  216 => 82,  205 => 73,  201 => 71,  197 => 69,  195 => 68,  182 => 58,  173 => 52,  163 => 45,  153 => 38,  143 => 31,  136 => 27,  130 => 23,  120 => 19,  117 => 18,  113 => 17,  103 => 13,  100 => 12,  96 => 11,  92 => 9,  82 => 8,  63 => 3,  52 => 1,  50 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}EMPLOYE{% endblock %}
{% form_theme formEmploye 'bootstrap_4_layout.html.twig' %}



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
        <h1  align=\"center\">GESTION DES EMPLOYES</h1>

        <div class=\"container \">
                {{form_start(formEmploye)}}
            <div class=\"row\">
                <div class=\"col-lg-4\"></div>
                <div class=\"col-lg-4\">
                        {{form_row(formEmploye.matricule, {'attr':{'placeholder':\"Matricule de l'Employé\"}})}}

                </div>
                <div class=\"col-lg-4\"></div>

                <div class=\"col-lg-4\"></div>
                    <div class=\"col-lg-4\">
                            {{form_row(formEmploye.nom, {'attr':{'placeholder':\"Nom Complet de L'employé\"}})}}
    
                    </div>
                    <div class=\"col-lg-4\"></div>

                    <div class=\"col-lg-4\"></div>
                    <div class=\"col-lg-4\">
                            {{form_row(formEmploye.datenaissance, {'attr':{'placeholder':\"Date de Naissance\"}})}}
    
                    </div>
                    <div class=\"col-lg-4\"></div>

                    <div class=\"col-lg-4\"></div>
                    <div class=\"col-lg-4\">
                            {{form_row(formEmploye.salaire, {'attr':{'placeholder':\"Montant du Salaire\"}})}}
    
                    </div>
                    <div class=\"col-lg-4\"></div>
                    <div class=\"col-lg-4\"></div>
                    <div class=\"col-lg-4\">
                            {{form_row(formEmploye.idService,  {'attr':{'placeholder':\"Montant du Salaire\"}})}}
    
                    </div>
                    <div class=\"col-lg-4\"></div>

                <div class=\"col-lg-4\"></div>
                    <div class=\"col-lg-4\">
                            <button type=\"submit\" class=\"btn btn-success\">
                           
                            
                                    {% if editEmploye %}
                                    ENREGISTRER LES MODIFICATIONS
                                    {% else %}
                                    AJOUTER UN SERVICE
                                    {% endif %}
                 
                                    </button>
    
                    </div>
                    <div class=\"col-lg-4\"></div>

            </div>
                
       
            {{form_end(formEmploye)}}

        </div>

        <br>
        <table class=\"table table-hover\">
                <thead >
                  <tr>
                    <th scope=\"col\">ID EMPLOYE</th>
                    <th scope=\"col\">MATRICULE</th>
                    <th scope=\"col\">NOM COMPLET</th>
                    <th scope=\"col\">DATEN NAISSANCE</th>
                    <th scope=\"col\">SALAIRE</th>
                    <th scope=\"col\">SERVICE</th>
                    <th scope=\"col\">MODIFIER</th>
                    <th scope=\"col\">SUPPRIMER</th>

                  </tr>
                </thead>
                <tbody>
                 
                {% for employe in employes %}
                  
                  <tr class=\"table-secondary\">
                    <th scope=\"row\">{{employe.id}}</th>
                    <td>{{employe.matricule}}</td>
                    <td>{{employe.nom}}</td>
                    <td>{{employe.datenaissance |date('d/m/Y')}}</td>
                    <td>{{employe.salaire}} FCFA</td>
                    <td>{{employe.idService.libelle}}</td>
                    <td>
                            <button class=\"btn btn-success\">
                            <a href=\"/service/{{employe.id}}/modifemploye\">MODIFIER</a>                  
                            </button>
                        </td>
                       
                        <td>
                                <button class=\"btn btn-danger\" onclick=\"supprimer({{employe.id}})\">
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
        if (confirm(\"Voulez-vous vraiment supprimer cet Employé ?\")){
            document.location.href=\"/service/\"+id+\"/supemploye\";
        }
    }
</script>

{% endblock %}
", "service/employe.html.twig", "/home/mbacke/Documents/symfony/projet1/templates/service/employe.html.twig");
    }
}
