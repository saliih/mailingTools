<?php

/* :sonata:standard_layout.html.twig */
class __TwigTemplate_c38b47788d5fdbc016dab2a0182ad7d3856d03670afd458ad6d2337e3770b910 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_attributes' => array($this, 'block_html_attributes'),
            'meta_tags' => array($this, 'block_meta_tags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'sonata_head_title' => array($this, 'block_sonata_head_title'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_header_noscript_warning' => array($this, 'block_sonata_header_noscript_warning'),
            'logo' => array($this, 'block_logo'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'sonata_top_nav_menu' => array($this, 'block_sonata_top_nav_menu'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_side_nav' => array($this, 'block_sonata_side_nav'),
            'sonata_sidebar_search' => array($this, 'block_sonata_sidebar_search'),
            'side_bar_before_nav' => array($this, 'block_side_bar_before_nav'),
            'side_bar_nav' => array($this, 'block_side_bar_nav'),
            'side_bar_after_nav' => array($this, 'block_side_bar_after_nav'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
            'sonata_page_content_header' => array($this, 'block_sonata_page_content_header'),
            'sonata_page_content_nav' => array($this, 'block_sonata_page_content_nav'),
            'tab_menu_navbar_header' => array($this, 'block_tab_menu_navbar_header'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'notice' => array($this, 'block_notice'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28ac26d5ee6f6f7d9fe89e012067a82cd39f85d73b5a1c892e9b4bbb2a4e7e59 = $this->env->getExtension("native_profiler");
        $__internal_28ac26d5ee6f6f7d9fe89e012067a82cd39f85d73b5a1c892e9b4bbb2a4e7e59->enter($__internal_28ac26d5ee6f6f7d9fe89e012067a82cd39f85d73b5a1c892e9b4bbb2a4e7e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":sonata:standard_layout.html.twig"));

        // line 11
        $context["_preview"] = $this->renderBlock("preview", $context, $blocks);
        // line 12
        $context["_form"] = $this->renderBlock("form", $context, $blocks);
        // line 13
        $context["_show"] = $this->renderBlock("show", $context, $blocks);
        // line 14
        $context["_list_table"] = $this->renderBlock("list_table", $context, $blocks);
        // line 15
        $context["_list_filters"] = $this->renderBlock("list_filters", $context, $blocks);
        // line 16
        $context["_tab_menu"] = $this->renderBlock("tab_menu", $context, $blocks);
        // line 17
        $context["_content"] = $this->renderBlock("content", $context, $blocks);
        // line 18
        $context["_title"] = $this->renderBlock("title", $context, $blocks);
        // line 19
        $context["_breadcrumb"] = $this->renderBlock("breadcrumb", $context, $blocks);
        // line 20
        $context["_actions"] = $this->renderBlock("actions", $context, $blocks);
        // line 21
        $context["_navbar_title"] = $this->renderBlock("navbar_title", $context, $blocks);
        // line 22
        echo "<!DOCTYPE html>
<html ";
        // line 23
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
    <head>
        ";
        // line 25
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 29
        echo "
        ";
        // line 30
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 37
        echo "
        ";
        // line 38
        $this->displayBlock('javascripts', $context, $blocks);
        // line 68
        echo "
        <title>
        ";
        // line 70
        $this->displayBlock('sonata_head_title', $context, $blocks);
        // line 90
        echo "        </title>
    </head>
    <body ";
        // line 92
        $this->displayBlock('body_attributes', $context, $blocks);
        echo ">
        ";
        // line 93
        $this->displayBlock('sonata_header', $context, $blocks);
        // line 177
        echo "
        ";
        // line 178
        $this->displayBlock('sonata_wrapper', $context, $blocks);
        // line 335
        echo "    </body>
</html>
";
        
        $__internal_28ac26d5ee6f6f7d9fe89e012067a82cd39f85d73b5a1c892e9b4bbb2a4e7e59->leave($__internal_28ac26d5ee6f6f7d9fe89e012067a82cd39f85d73b5a1c892e9b4bbb2a4e7e59_prof);

    }

    // line 23
    public function block_html_attributes($context, array $blocks = array())
    {
        $__internal_8c8db5e61f36f5770a62c8b1a84336876d02a4a9e1db0731b8109bfcff1020ec = $this->env->getExtension("native_profiler");
        $__internal_8c8db5e61f36f5770a62c8b1a84336876d02a4a9e1db0731b8109bfcff1020ec->enter($__internal_8c8db5e61f36f5770a62c8b1a84336876d02a4a9e1db0731b8109bfcff1020ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        echo "class=\"no-js\"";
        
        $__internal_8c8db5e61f36f5770a62c8b1a84336876d02a4a9e1db0731b8109bfcff1020ec->leave($__internal_8c8db5e61f36f5770a62c8b1a84336876d02a4a9e1db0731b8109bfcff1020ec_prof);

    }

    // line 25
    public function block_meta_tags($context, array $blocks = array())
    {
        $__internal_c35140d6b0ace497749253cc8cb99dd531fd12b10f0f7c91cf26397da812a4a4 = $this->env->getExtension("native_profiler");
        $__internal_c35140d6b0ace497749253cc8cb99dd531fd12b10f0f7c91cf26397da812a4a4->enter($__internal_c35140d6b0ace497749253cc8cb99dd531fd12b10f0f7c91cf26397da812a4a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        // line 26
        echo "            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
        
        $__internal_c35140d6b0ace497749253cc8cb99dd531fd12b10f0f7c91cf26397da812a4a4->leave($__internal_c35140d6b0ace497749253cc8cb99dd531fd12b10f0f7c91cf26397da812a4a4_prof);

    }

    // line 30
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c84f07a0de144d51623afa67f03d01c4bf7cdc8197c144e18ea5b57d88d0fc2f = $this->env->getExtension("native_profiler");
        $__internal_c84f07a0de144d51623afa67f03d01c4bf7cdc8197c144e18ea5b57d88d0fc2f->enter($__internal_c84f07a0de144d51623afa67f03d01c4bf7cdc8197c144e18ea5b57d88d0fc2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 31
        echo "
            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "stylesheets", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 33
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["stylesheet"]), "html", null, true);
            echo "\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
        ";
        
        $__internal_c84f07a0de144d51623afa67f03d01c4bf7cdc8197c144e18ea5b57d88d0fc2f->leave($__internal_c84f07a0de144d51623afa67f03d01c4bf7cdc8197c144e18ea5b57d88d0fc2f_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_259379b21ff5309394b36f5e7681bd56d9b764d27e7d838b03c0eeb16714a281 = $this->env->getExtension("native_profiler");
        $__internal_259379b21ff5309394b36f5e7681bd56d9b764d27e7d838b03c0eeb16714a281->enter($__internal_259379b21ff5309394b36f5e7681bd56d9b764d27e7d838b03c0eeb16714a281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        echo "            <script>
                window.SONATA_CONFIG = {
                    CONFIRM_EXIT: ";
        // line 41
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "confirm_exit"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    USE_SELECT2: ";
        // line 42
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "use_select2"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    USE_ICHECK: ";
        // line 43
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "use_icheck"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        // line 44
        echo "                };
                window.SONATA_TRANSLATIONS = {
                    CONFIRM_EXIT:  '";
        // line 46
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("confirm_exit", array(), "SonataAdminBundle"), "js"), "html", null, true);
        echo "'
               };
            </script>

            ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "javascripts", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
            // line 51
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["javascript"]), "html", null, true);
            echo "\"></script>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['javascript'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "
            ";
        // line 55
        echo "            ";
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "use_select2"), "method"))) {
            // line 56
            echo "                ";
            $context["locale"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array());
            // line 57
            echo "                ";
            if (((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")) == "pt")) {
                $context["locale"] = "pt_PT";
            }
            // line 58
            echo "
                ";
            // line 60
            echo "                ";
            if ((twig_slice($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), 0, 2) != "en")) {
                // line 61
                echo "                    <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((("bundles/sonataadmin/vendor/select2/select2_locale_" . twig_replace_filter((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), array("_" => "-"))) . ".js")), "html", null, true);
                echo "\"></script>
                ";
            }
            // line 63
            echo "            ";
        }
        // line 64
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>

        ";
        
        $__internal_259379b21ff5309394b36f5e7681bd56d9b764d27e7d838b03c0eeb16714a281->leave($__internal_259379b21ff5309394b36f5e7681bd56d9b764d27e7d838b03c0eeb16714a281_prof);

    }

    // line 70
    public function block_sonata_head_title($context, array $blocks = array())
    {
        $__internal_6752e3d977f4116755f30a35f096616eecb126dc46918b081726ed8b8a60ddcb = $this->env->getExtension("native_profiler");
        $__internal_6752e3d977f4116755f30a35f096616eecb126dc46918b081726ed8b8a60ddcb->enter($__internal_6752e3d977f4116755f30a35f096616eecb126dc46918b081726ed8b8a60ddcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        // line 71
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 73
        if ( !twig_test_empty((isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title")))) {
            // line 74
            echo "                ";
            echo (isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title"));
            echo "
            ";
        } else {
            // line 76
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 77
                echo "                    -
                    ";
                // line 78
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 79
                    echo "                        ";
                    if ( !$this->getAttribute($context["loop"], "first", array())) {
                        // line 80
                        echo "                            ";
                        if (($this->getAttribute($context["loop"], "index", array()) != 2)) {
                            // line 81
                            echo "                                &gt;
                            ";
                        }
                        // line 83
                        echo "
                            ";
                        // line 84
                        echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "label", array()), "html", null, true);
                        echo "
                        ";
                    }
                    // line 86
                    echo "                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 87
                echo "                ";
            }
            // line 88
            echo "            ";
        }
        // line 89
        echo "        ";
        
        $__internal_6752e3d977f4116755f30a35f096616eecb126dc46918b081726ed8b8a60ddcb->leave($__internal_6752e3d977f4116755f30a35f096616eecb126dc46918b081726ed8b8a60ddcb_prof);

    }

    // line 92
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_980cb295473eca5e07bbad3726b8dfbc5cb874231e7d6c3ae07b73c2880abc1e = $this->env->getExtension("native_profiler");
        $__internal_980cb295473eca5e07bbad3726b8dfbc5cb874231e7d6c3ae07b73c2880abc1e->enter($__internal_980cb295473eca5e07bbad3726b8dfbc5cb874231e7d6c3ae07b73c2880abc1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc skin-black fixed\"";
        
        $__internal_980cb295473eca5e07bbad3726b8dfbc5cb874231e7d6c3ae07b73c2880abc1e->leave($__internal_980cb295473eca5e07bbad3726b8dfbc5cb874231e7d6c3ae07b73c2880abc1e_prof);

    }

    // line 93
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_e10a6bf609f64ca4bbe94c271c5027299029cf78c90e9211a1ed594e754e56ac = $this->env->getExtension("native_profiler");
        $__internal_e10a6bf609f64ca4bbe94c271c5027299029cf78c90e9211a1ed594e754e56ac->enter($__internal_e10a6bf609f64ca4bbe94c271c5027299029cf78c90e9211a1ed594e754e56ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        // line 94
        echo "            <header class=\"header\">
                ";
        // line 95
        $this->displayBlock('sonata_header_noscript_warning', $context, $blocks);
        // line 102
        echo "                ";
        $this->displayBlock('logo', $context, $blocks);
        // line 114
        echo "                ";
        $this->displayBlock('sonata_nav', $context, $blocks);
        // line 175
        echo "            </header>
        ";
        
        $__internal_e10a6bf609f64ca4bbe94c271c5027299029cf78c90e9211a1ed594e754e56ac->leave($__internal_e10a6bf609f64ca4bbe94c271c5027299029cf78c90e9211a1ed594e754e56ac_prof);

    }

    // line 95
    public function block_sonata_header_noscript_warning($context, array $blocks = array())
    {
        $__internal_57f28bb642974bbbc7906db25f136e32507c82a1a16fb93ef24a3902ef90396d = $this->env->getExtension("native_profiler");
        $__internal_57f28bb642974bbbc7906db25f136e32507c82a1a16fb93ef24a3902ef90396d->enter($__internal_57f28bb642974bbbc7906db25f136e32507c82a1a16fb93ef24a3902ef90396d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        // line 96
        echo "                    <noscript>
                        <div class=\"noscript-warning\">
                            ";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("noscript_warning", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                        </div>
                    </noscript>
                ";
        
        $__internal_57f28bb642974bbbc7906db25f136e32507c82a1a16fb93ef24a3902ef90396d->leave($__internal_57f28bb642974bbbc7906db25f136e32507c82a1a16fb93ef24a3902ef90396d_prof);

    }

    // line 102
    public function block_logo($context, array $blocks = array())
    {
        $__internal_e152b7243ebc17c89001c175f6951e862a1cf663dc26acbd938bcf48bf7467be = $this->env->getExtension("native_profiler");
        $__internal_e152b7243ebc17c89001c175f6951e862a1cf663dc26acbd938bcf48bf7467be->enter($__internal_e152b7243ebc17c89001c175f6951e862a1cf663dc26acbd938bcf48bf7467be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 103
        echo "                    ";
        ob_start();
        // line 104
        echo "                    <a class=\"logo\" href=\"";
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_dashboard");
        echo "\">
                        ";
        // line 105
        if ((("single_image" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")))) {
            // line 106
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "titlelogo", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "title", array()), "html", null, true);
            echo "\">
                        ";
        }
        // line 108
        echo "                        ";
        if ((("single_text" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")))) {
            // line 109
            echo "                            <span>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "title", array()), "html", null, true);
            echo "</span>
                        ";
        }
        // line 111
        echo "                    </a>
                    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 113
        echo "                ";
        
        $__internal_e152b7243ebc17c89001c175f6951e862a1cf663dc26acbd938bcf48bf7467be->leave($__internal_e152b7243ebc17c89001c175f6951e862a1cf663dc26acbd938bcf48bf7467be_prof);

    }

    // line 114
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_912fdb776bd538e51eb9ac7fe2b4072c58c8bd8cb2dc91ca5f640db1bb2c8d34 = $this->env->getExtension("native_profiler");
        $__internal_912fdb776bd538e51eb9ac7fe2b4072c58c8bd8cb2dc91ca5f640db1bb2c8d34->enter($__internal_912fdb776bd538e51eb9ac7fe2b4072c58c8bd8cb2dc91ca5f640db1bb2c8d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        // line 115
        echo "                    ";
        if (array_key_exists("admin_pool", $context)) {
            // line 116
            echo "                        <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                            <a href=\"#\" class=\"navbar-btn sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </a>

                            <div class=\"navbar-left\">
                                ";
            // line 125
            $this->displayBlock('sonata_breadcrumb', $context, $blocks);
            // line 150
            echo "                            </div>

                            ";
            // line 152
            $this->displayBlock('sonata_top_nav_menu', $context, $blocks);
            // line 172
            echo "                        </nav>
                    ";
        }
        // line 174
        echo "                ";
        
        $__internal_912fdb776bd538e51eb9ac7fe2b4072c58c8bd8cb2dc91ca5f640db1bb2c8d34->leave($__internal_912fdb776bd538e51eb9ac7fe2b4072c58c8bd8cb2dc91ca5f640db1bb2c8d34_prof);

    }

    // line 125
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_5db7c416833c9b59e3bb57c1f2296d8aedbac80e968c3709cab768a6781a3c4b = $this->env->getExtension("native_profiler");
        $__internal_5db7c416833c9b59e3bb57c1f2296d8aedbac80e968c3709cab768a6781a3c4b->enter($__internal_5db7c416833c9b59e3bb57c1f2296d8aedbac80e968c3709cab768a6781a3c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        // line 126
        echo "                                    ";
        if (( !twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"))) || array_key_exists("action", $context))) {
            // line 127
            echo "                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            ";
            // line 128
            if (twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb")))) {
                // line 129
                echo "                                                ";
                if (array_key_exists("action", $context)) {
                    // line 130
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 131
                        echo "                                                        ";
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            // line 132
                            echo "                                                            <li>
                                                                ";
                            // line 133
                            if ( !twig_test_empty($this->getAttribute($context["menu"], "uri", array()))) {
                                // line 134
                                echo "                                                                    <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "uri", array()), "html", null, true);
                                echo "\">";
                                echo $this->getAttribute($context["menu"], "label", array());
                                echo "</a>
                                                                ";
                            } else {
                                // line 136
                                echo "                                                                    ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "label", array()), "html", null, true);
                                echo "
                                                                ";
                            }
                            // line 138
                            echo "                                                            </li>
                                                        ";
                        } else {
                            // line 140
                            echo "                                                            <li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "label", array()), "html", null, true);
                            echo "</span></li>
                                                        ";
                        }
                        // line 142
                        echo "                                                    ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 143
                    echo "                                                ";
                }
                // line 144
                echo "                                            ";
            } else {
                // line 145
                echo "                                                ";
                echo (isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"));
                echo "
                                            ";
            }
            // line 147
            echo "                                        </ol>
                                    ";
        }
        // line 149
        echo "                                ";
        
        $__internal_5db7c416833c9b59e3bb57c1f2296d8aedbac80e968c3709cab768a6781a3c4b->leave($__internal_5db7c416833c9b59e3bb57c1f2296d8aedbac80e968c3709cab768a6781a3c4b_prof);

    }

    // line 152
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        $__internal_350831cddd9a9de3a1c6a311554a1afc20c5fe04fc0aa27017d2aee2ee1f2bb5 = $this->env->getExtension("native_profiler");
        $__internal_350831cddd9a9de3a1c6a311554a1afc20c5fe04fc0aa27017d2aee2ee1f2bb5->enter($__internal_350831cddd9a9de3a1c6a311554a1afc20c5fe04fc0aa27017d2aee2ee1f2bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        // line 153
        echo "                                <div class=\"navbar-right\">
                                    <ul class=\"nav navbar-nav\">
                                        <li class=\"dropdown\">
                                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                <i class=\"fa fa-plus-square fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                                            </a>
                                            ";
        // line 159
        $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "add_block"), "method"), ":sonata:standard_layout.html.twig", 159)->display($context);
        // line 160
        echo "                                        </li>
                                        <li class=\"dropdown user-menu\">
                                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                <i class=\"fa fa-user fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                                            </a>
                                            <ul class=\"dropdown-menu dropdown-user\">
                                                ";
        // line 166
        $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "user_block"), "method"), ":sonata:standard_layout.html.twig", 166)->display($context);
        // line 167
        echo "                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            ";
        
        $__internal_350831cddd9a9de3a1c6a311554a1afc20c5fe04fc0aa27017d2aee2ee1f2bb5->leave($__internal_350831cddd9a9de3a1c6a311554a1afc20c5fe04fc0aa27017d2aee2ee1f2bb5_prof);

    }

    // line 178
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_438596bda1e8e1218aa8faa3f1435633b652acf565379b915ab1c6fee810e277 = $this->env->getExtension("native_profiler");
        $__internal_438596bda1e8e1218aa8faa3f1435633b652acf565379b915ab1c6fee810e277->enter($__internal_438596bda1e8e1218aa8faa3f1435633b652acf565379b915ab1c6fee810e277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 179
        echo "            <div class=\"wrapper row-offcanvas row-offcanvas-left\">
                ";
        // line 180
        $this->displayBlock('sonata_left_side', $context, $blocks);
        // line 252
        echo "
                <aside class=\"right-side\">
                    ";
        // line 254
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 331
        echo "                </aside>

            </div>
        ";
        
        $__internal_438596bda1e8e1218aa8faa3f1435633b652acf565379b915ab1c6fee810e277->leave($__internal_438596bda1e8e1218aa8faa3f1435633b652acf565379b915ab1c6fee810e277_prof);

    }

    // line 180
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_2bf7c2432a3a93b387c2c71a12e0587dc8033375c32d98093c5bedabea1d91c8 = $this->env->getExtension("native_profiler");
        $__internal_2bf7c2432a3a93b387c2c71a12e0587dc8033375c32d98093c5bedabea1d91c8->enter($__internal_2bf7c2432a3a93b387c2c71a12e0587dc8033375c32d98093c5bedabea1d91c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        // line 181
        echo "                    <aside class=\"left-side sidebar-offcanvas\">
                        <section class=\"sidebar\">
                            ";
        // line 183
        $this->displayBlock('sonata_side_nav', $context, $blocks);
        // line 249
        echo "                        </section>
                    </aside>
                ";
        
        $__internal_2bf7c2432a3a93b387c2c71a12e0587dc8033375c32d98093c5bedabea1d91c8->leave($__internal_2bf7c2432a3a93b387c2c71a12e0587dc8033375c32d98093c5bedabea1d91c8_prof);

    }

    // line 183
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        $__internal_91a315f2e4ef194a6f313de54d8832622a7daf00c8af597f89a0fea2b4731e2f = $this->env->getExtension("native_profiler");
        $__internal_91a315f2e4ef194a6f313de54d8832622a7daf00c8af597f89a0fea2b4731e2f->enter($__internal_91a315f2e4ef194a6f313de54d8832622a7daf00c8af597f89a0fea2b4731e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        // line 184
        echo "                                ";
        $this->displayBlock('sonata_sidebar_search', $context, $blocks);
        // line 198
        echo "
                                ";
        // line 199
        $this->displayBlock('side_bar_before_nav', $context, $blocks);
        // line 200
        echo "                                ";
        $this->displayBlock('side_bar_nav', $context, $blocks);
        // line 245
        echo "                                ";
        $this->displayBlock('side_bar_after_nav', $context, $blocks);
        // line 248
        echo "                            ";
        
        $__internal_91a315f2e4ef194a6f313de54d8832622a7daf00c8af597f89a0fea2b4731e2f->leave($__internal_91a315f2e4ef194a6f313de54d8832622a7daf00c8af597f89a0fea2b4731e2f_prof);

    }

    // line 184
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        $__internal_bbdbba28a81bb5030fa67c2a1243309c04af269d853972f46f69b21a57691a48 = $this->env->getExtension("native_profiler");
        $__internal_bbdbba28a81bb5030fa67c2a1243309c04af269d853972f46f69b21a57691a48->enter($__internal_bbdbba28a81bb5030fa67c2a1243309c04af269d853972f46f69b21a57691a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        // line 185
        echo "                                    ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "token", array()) && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 186
            echo "                                        <form action=\"";
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_search");
            echo "\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                            <div class=\"input-group custom-search-form\">
                                                <input type=\"text\" name=\"q\" value=\"";
            // line 188
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "q"), "method"), "html", null, true);
            echo "\" class=\"form-control\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("search_placeholder", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
                                                    <span class=\"input-group-btn\">
                                                        <button class=\"btn btn-flat\" type=\"submit\">
                                                            <i class=\"fa fa-search\"></i>
                                                        </button>
                                                    </span>
                                            </div>
                                        </form>
                                    ";
        }
        // line 197
        echo "                                ";
        
        $__internal_bbdbba28a81bb5030fa67c2a1243309c04af269d853972f46f69b21a57691a48->leave($__internal_bbdbba28a81bb5030fa67c2a1243309c04af269d853972f46f69b21a57691a48_prof);

    }

    // line 199
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        $__internal_a1770a6b41de6d09878d21bbd591dafeec8038d9d3e7239d247ebdc2d44c25d3 = $this->env->getExtension("native_profiler");
        $__internal_a1770a6b41de6d09878d21bbd591dafeec8038d9d3e7239d247ebdc2d44c25d3->enter($__internal_a1770a6b41de6d09878d21bbd591dafeec8038d9d3e7239d247ebdc2d44c25d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        echo " ";
        
        $__internal_a1770a6b41de6d09878d21bbd591dafeec8038d9d3e7239d247ebdc2d44c25d3->leave($__internal_a1770a6b41de6d09878d21bbd591dafeec8038d9d3e7239d247ebdc2d44c25d3_prof);

    }

    // line 200
    public function block_side_bar_nav($context, array $blocks = array())
    {
        $__internal_4dae0c997704d04052fd259d354f4c71b1835f62730e9b297b5fc591714f42b7 = $this->env->getExtension("native_profiler");
        $__internal_4dae0c997704d04052fd259d354f4c71b1835f62730e9b297b5fc591714f42b7->enter($__internal_4dae0c997704d04052fd259d354f4c71b1835f62730e9b297b5fc591714f42b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        // line 201
        echo "                                    ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "token", array()) && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 202
            echo "                                        <ul class=\"sidebar-menu\">
                                            ";
            // line 203
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "dashboardgroups", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 204
                echo "                                                ";
                $context["display"] = (twig_test_empty($this->getAttribute($context["group"], "roles", array())) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
                // line 205
                echo "                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "roles", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    if ( !(isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                        // line 206
                        echo "                                                    ";
                        $context["display"] = $this->env->getExtension('security')->isGranted($context["role"]);
                        // line 207
                        echo "                                                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 208
                echo "
                                                ";
                // line 210
                echo "                                                ";
                $context["item_count"] = 0;
                // line 211
                echo "                                                ";
                if ((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                    // line 212
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        if (((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) == 0)) {
                            // line 213
                            echo "                                                        ";
                            if (($this->getAttribute($context["admin"], "hasroute", array(0 => "list"), "method") && $this->getAttribute($context["admin"], "isGranted", array(0 => "LIST"), "method"))) {
                                // line 214
                                echo "                                                            ";
                                $context["item_count"] = ((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) + 1);
                                // line 215
                                echo "                                                        ";
                            }
                            // line 216
                            echo "                                                    ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 217
                    echo "                                                ";
                }
                // line 218
                echo "
                                                ";
                // line 219
                if (((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display")) && ((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) > 0))) {
                    // line 220
                    echo "                                                    ";
                    $context["active"] = false;
                    // line 221
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 222
                        echo "                                                        ";
                        if ((($this->getAttribute($context["admin"], "hasroute", array(0 => "list"), "method") && $this->getAttribute($context["admin"], "isGranted", array(0 => "LIST"), "method")) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_sonata_admin"), "method") == $this->getAttribute($context["admin"], "code", array())))) {
                            // line 223
                            echo "                                                            ";
                            $context["active"] = true;
                            // line 224
                            echo "                                                        ";
                        }
                        // line 225
                        echo "                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 226
                    echo "                                                    <li class=\"treeview";
                    if ((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active"))) {
                        echo " active";
                    }
                    echo "\">
                                                        <a href=\"#\">
                                                            ";
                    // line 228
                    if ((($this->getAttribute($context["group"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group"], "icon", array()))) : (""))) {
                        echo $this->getAttribute($context["group"], "icon", array());
                    }
                    // line 229
                    echo "                                                            <span>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["group"], "label", array()), array(), $this->getAttribute($context["group"], "label_catalogue", array())), "html", null, true);
                    echo "</span>
                                                            <i class=\"fa pull-right fa-angle-left\"></i>
                                                        </a>
                                                        <ul class=\"treeview-menu";
                    // line 232
                    if ((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active"))) {
                        echo " active";
                    }
                    echo "\">
                                                            ";
                    // line 233
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 234
                        echo "                                                                ";
                        if (($this->getAttribute($context["admin"], "hasroute", array(0 => "list"), "method") && $this->getAttribute($context["admin"], "isGranted", array(0 => "LIST"), "method"))) {
                            // line 235
                            echo "                                                                    <li";
                            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_sonata_admin"), "method") == $this->getAttribute($context["admin"], "code", array()))) {
                                echo " class=\"active\"";
                            }
                            echo "><a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "generateUrl", array(0 => "list"), "method"), "html", null, true);
                            echo "\"><i class=\"fa fa-angle-double-right\"></i> ";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["admin"], "label", array()), array(), $this->getAttribute($context["admin"], "translationdomain", array())), "html", null, true);
                            echo "</a></li>
                                                                ";
                        }
                        // line 237
                        echo "                                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 238
                    echo "                                                        </ul>
                                                    </li>
                                                ";
                }
                // line 241
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 242
            echo "                                        </ul>
                                    ";
        }
        // line 244
        echo "                                ";
        
        $__internal_4dae0c997704d04052fd259d354f4c71b1835f62730e9b297b5fc591714f42b7->leave($__internal_4dae0c997704d04052fd259d354f4c71b1835f62730e9b297b5fc591714f42b7_prof);

    }

    // line 245
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        $__internal_afc4f7fdb9d79f39116017ec6609f2fc8fabaf5e852bfb79e2e3f36af54a5758 = $this->env->getExtension("native_profiler");
        $__internal_afc4f7fdb9d79f39116017ec6609f2fc8fabaf5e852bfb79e2e3f36af54a5758->enter($__internal_afc4f7fdb9d79f39116017ec6609f2fc8fabaf5e852bfb79e2e3f36af54a5758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        // line 246
        echo "                                    <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\"><a href=\"http://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a></p>
                                ";
        
        $__internal_afc4f7fdb9d79f39116017ec6609f2fc8fabaf5e852bfb79e2e3f36af54a5758->leave($__internal_afc4f7fdb9d79f39116017ec6609f2fc8fabaf5e852bfb79e2e3f36af54a5758_prof);

    }

    // line 254
    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_66ab9fb372720163cbc79a7d8b75e42c7215c296b0c363d09d98ddcdb5247671 = $this->env->getExtension("native_profiler");
        $__internal_66ab9fb372720163cbc79a7d8b75e42c7215c296b0c363d09d98ddcdb5247671->enter($__internal_66ab9fb372720163cbc79a7d8b75e42c7215c296b0c363d09d98ddcdb5247671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 255
        echo "                        <section class=\"content-header\">
                            ";
        // line 256
        $this->displayBlock('sonata_page_content_header', $context, $blocks);
        // line 290
        echo "                        </section>

                        <section class=\"content\">
                            ";
        // line 293
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 329
        echo "                        </section>
                    ";
        
        $__internal_66ab9fb372720163cbc79a7d8b75e42c7215c296b0c363d09d98ddcdb5247671->leave($__internal_66ab9fb372720163cbc79a7d8b75e42c7215c296b0c363d09d98ddcdb5247671_prof);

    }

    // line 256
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        $__internal_6f726eae7b939e30ecee58efce98cdcfb990cd652ec48396a1618ba6dc93316a = $this->env->getExtension("native_profiler");
        $__internal_6f726eae7b939e30ecee58efce98cdcfb990cd652ec48396a1618ba6dc93316a->enter($__internal_6f726eae7b939e30ecee58efce98cdcfb990cd652ec48396a1618ba6dc93316a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        // line 257
        echo "                                ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 288
        echo "
                            ";
        
        $__internal_6f726eae7b939e30ecee58efce98cdcfb990cd652ec48396a1618ba6dc93316a->leave($__internal_6f726eae7b939e30ecee58efce98cdcfb990cd652ec48396a1618ba6dc93316a_prof);

    }

    // line 257
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        $__internal_e833cdb2fc00e83d70717c21de218cf49f42f9dc21c0b1fb8029217c410f54ce = $this->env->getExtension("native_profiler");
        $__internal_e833cdb2fc00e83d70717c21de218cf49f42f9dc21c0b1fb8029217c410f54ce->enter($__internal_e833cdb2fc00e83d70717c21de218cf49f42f9dc21c0b1fb8029217c410f54ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        // line 258
        echo "                                    ";
        if (( !twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"))) ||  !twig_test_empty((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"))))) {
            // line 259
            echo "                                        <nav class=\"navbar navbar-default\" role=\"navigation\">
                                            ";
            // line 260
            $this->displayBlock('tab_menu_navbar_header', $context, $blocks);
            // line 267
            echo "                                            <div class=\"container-fluid\">
                                                <div class=\"navbar-left\">
                                                    ";
            // line 269
            if ( !twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu")))) {
                // line 270
                echo "                                                        ";
                echo (isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"));
                echo "
                                                    ";
            }
            // line 272
            echo "                                                </div>

                                                ";
            // line 274
            if ( !twig_test_empty(trim(twig_replace_filter((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")), array("<li>" => "", "</li>" => ""))))) {
                // line 275
                echo "                                                    <ul class=\"nav navbar-nav navbar-right\">
                                                        <li class=\"dropdown sonata-actions\">
                                                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 277
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_actions", array(), "SonataAdminBundle"), "html", null, true);
                echo " <b class=\"caret\"></b></a>
                                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                                ";
                // line 279
                echo (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"));
                echo "
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                ";
            }
            // line 284
            echo "                                            </div>
                                        </nav>
                                    ";
        }
        // line 287
        echo "                                ";
        
        $__internal_e833cdb2fc00e83d70717c21de218cf49f42f9dc21c0b1fb8029217c410f54ce->leave($__internal_e833cdb2fc00e83d70717c21de218cf49f42f9dc21c0b1fb8029217c410f54ce_prof);

    }

    // line 260
    public function block_tab_menu_navbar_header($context, array $blocks = array())
    {
        $__internal_df6bf3d5cea3b3b03c9b4094c12a66f6e1ab4ff81c87b1b007024404fbeb2d11 = $this->env->getExtension("native_profiler");
        $__internal_df6bf3d5cea3b3b03c9b4094c12a66f6e1ab4ff81c87b1b007024404fbeb2d11->enter($__internal_df6bf3d5cea3b3b03c9b4094c12a66f6e1ab4ff81c87b1b007024404fbeb2d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        // line 261
        echo "                                                ";
        if ( !twig_test_empty((isset($context["_navbar_title"]) ? $context["_navbar_title"] : $this->getContext($context, "_navbar_title")))) {
            // line 262
            echo "                                                    <div class=\"navbar-header\">
                                                        <span class=\"navbar-brand\">";
            // line 263
            echo (isset($context["_navbar_title"]) ? $context["_navbar_title"] : $this->getContext($context, "_navbar_title"));
            echo "</span>
                                                    </div>
                                                ";
        }
        // line 266
        echo "                                            ";
        
        $__internal_df6bf3d5cea3b3b03c9b4094c12a66f6e1ab4ff81c87b1b007024404fbeb2d11->leave($__internal_df6bf3d5cea3b3b03c9b4094c12a66f6e1ab4ff81c87b1b007024404fbeb2d11_prof);

    }

    // line 293
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        $__internal_df7adb3c1674d2120163a68c14d671c1c99baab6c79f860473a0a878de2e35d4 = $this->env->getExtension("native_profiler");
        $__internal_df7adb3c1674d2120163a68c14d671c1c99baab6c79f860473a0a878de2e35d4->enter($__internal_df7adb3c1674d2120163a68c14d671c1c99baab6c79f860473a0a878de2e35d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        // line 294
        echo "
                                ";
        // line 295
        $this->displayBlock('notice', $context, $blocks);
        // line 298
        echo "
                                ";
        // line 299
        if ( !twig_test_empty((isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview")))) {
            // line 300
            echo "                                    <div class=\"sonata-ba-preview\">";
            echo (isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview"));
            echo "</div>
                                ";
        }
        // line 302
        echo "
                                ";
        // line 303
        if ( !twig_test_empty((isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content")))) {
            // line 304
            echo "                                    <div class=\"sonata-ba-content\">";
            echo (isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content"));
            echo "</div>
                                ";
        }
        // line 306
        echo "
                                ";
        // line 307
        if ( !twig_test_empty((isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show")))) {
            // line 308
            echo "                                    <div class=\"sonata-ba-show\">";
            echo (isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show"));
            echo "</div>
                                ";
        }
        // line 310
        echo "
                                ";
        // line 311
        if ( !twig_test_empty((isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form")))) {
            // line 312
            echo "                                    <div class=\"sonata-ba-form\">";
            echo (isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form"));
            echo "</div>
                                ";
        }
        // line 314
        echo "
                                ";
        // line 315
        if (( !twig_test_empty((isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"))) ||  !twig_test_empty((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"))))) {
            // line 316
            echo "                                    <div class=\"row\">
                                        <div class=\"sonata-ba-list ";
            // line 317
            if (trim((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))) {
                echo "col-md-10";
            } else {
                echo "col-md-12";
            }
            echo "\">
                                            ";
            // line 318
            echo (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"));
            echo "
                                        </div>

                                        ";
            // line 321
            if (trim((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))) {
                // line 322
                echo "                                            <div class=\"sonata-ba-filter col-md-2\">
                                                ";
                // line 323
                echo (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"));
                echo "
                                            </div>
                                        ";
            }
            // line 326
            echo "                                    </div>
                                ";
        }
        // line 328
        echo "                            ";
        
        $__internal_df7adb3c1674d2120163a68c14d671c1c99baab6c79f860473a0a878de2e35d4->leave($__internal_df7adb3c1674d2120163a68c14d671c1c99baab6c79f860473a0a878de2e35d4_prof);

    }

    // line 295
    public function block_notice($context, array $blocks = array())
    {
        $__internal_0c9e138395f51eb4e6836ca023a4507a02f89d9df5274029f3ec5f484e12cb59 = $this->env->getExtension("native_profiler");
        $__internal_0c9e138395f51eb4e6836ca023a4507a02f89d9df5274029f3ec5f484e12cb59->enter($__internal_0c9e138395f51eb4e6836ca023a4507a02f89d9df5274029f3ec5f484e12cb59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        // line 296
        echo "                                    ";
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", ":sonata:standard_layout.html.twig", 296)->display($context);
        // line 297
        echo "                                ";
        
        $__internal_0c9e138395f51eb4e6836ca023a4507a02f89d9df5274029f3ec5f484e12cb59->leave($__internal_0c9e138395f51eb4e6836ca023a4507a02f89d9df5274029f3ec5f484e12cb59_prof);

    }

    public function getTemplateName()
    {
        return ":sonata:standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1189 => 297,  1186 => 296,  1180 => 295,  1173 => 328,  1169 => 326,  1163 => 323,  1160 => 322,  1158 => 321,  1152 => 318,  1144 => 317,  1141 => 316,  1139 => 315,  1136 => 314,  1130 => 312,  1128 => 311,  1125 => 310,  1119 => 308,  1117 => 307,  1114 => 306,  1108 => 304,  1106 => 303,  1103 => 302,  1097 => 300,  1095 => 299,  1092 => 298,  1090 => 295,  1087 => 294,  1081 => 293,  1074 => 266,  1068 => 263,  1065 => 262,  1062 => 261,  1056 => 260,  1049 => 287,  1044 => 284,  1036 => 279,  1031 => 277,  1027 => 275,  1025 => 274,  1021 => 272,  1015 => 270,  1013 => 269,  1009 => 267,  1007 => 260,  1004 => 259,  1001 => 258,  995 => 257,  987 => 288,  984 => 257,  978 => 256,  970 => 329,  968 => 293,  963 => 290,  961 => 256,  958 => 255,  952 => 254,  944 => 246,  938 => 245,  931 => 244,  927 => 242,  921 => 241,  916 => 238,  910 => 237,  898 => 235,  895 => 234,  891 => 233,  885 => 232,  878 => 229,  874 => 228,  866 => 226,  860 => 225,  857 => 224,  854 => 223,  851 => 222,  846 => 221,  843 => 220,  841 => 219,  838 => 218,  835 => 217,  828 => 216,  825 => 215,  822 => 214,  819 => 213,  813 => 212,  810 => 211,  807 => 210,  804 => 208,  797 => 207,  794 => 206,  788 => 205,  785 => 204,  781 => 203,  778 => 202,  775 => 201,  769 => 200,  757 => 199,  750 => 197,  736 => 188,  730 => 186,  727 => 185,  721 => 184,  714 => 248,  711 => 245,  708 => 200,  706 => 199,  703 => 198,  700 => 184,  694 => 183,  685 => 249,  683 => 183,  679 => 181,  673 => 180,  663 => 331,  661 => 254,  657 => 252,  655 => 180,  652 => 179,  646 => 178,  635 => 167,  633 => 166,  625 => 160,  623 => 159,  615 => 153,  609 => 152,  602 => 149,  598 => 147,  592 => 145,  589 => 144,  586 => 143,  572 => 142,  566 => 140,  562 => 138,  556 => 136,  548 => 134,  546 => 133,  543 => 132,  540 => 131,  522 => 130,  519 => 129,  517 => 128,  514 => 127,  511 => 126,  505 => 125,  498 => 174,  494 => 172,  492 => 152,  488 => 150,  486 => 125,  475 => 116,  472 => 115,  466 => 114,  459 => 113,  455 => 111,  449 => 109,  446 => 108,  438 => 106,  436 => 105,  431 => 104,  428 => 103,  422 => 102,  411 => 98,  407 => 96,  401 => 95,  393 => 175,  390 => 114,  387 => 102,  385 => 95,  382 => 94,  376 => 93,  364 => 92,  357 => 89,  354 => 88,  351 => 87,  337 => 86,  332 => 84,  329 => 83,  325 => 81,  322 => 80,  319 => 79,  302 => 78,  299 => 77,  296 => 76,  290 => 74,  288 => 73,  282 => 71,  276 => 70,  266 => 65,  261 => 64,  258 => 63,  252 => 61,  249 => 60,  246 => 58,  241 => 57,  238 => 56,  235 => 55,  232 => 53,  223 => 51,  219 => 50,  212 => 46,  208 => 44,  202 => 43,  194 => 42,  186 => 41,  182 => 39,  176 => 38,  168 => 35,  159 => 33,  155 => 32,  152 => 31,  146 => 30,  137 => 26,  131 => 25,  119 => 23,  110 => 335,  108 => 178,  105 => 177,  103 => 93,  99 => 92,  95 => 90,  93 => 70,  89 => 68,  87 => 38,  84 => 37,  82 => 30,  79 => 29,  77 => 25,  72 => 23,  69 => 22,  67 => 21,  65 => 20,  63 => 19,  61 => 18,  59 => 17,  57 => 16,  55 => 15,  53 => 14,  51 => 13,  49 => 12,  47 => 11,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* {% set _preview      = block('preview') %}*/
/* {% set _form         = block('form') %}*/
/* {% set _show         = block('show') %}*/
/* {% set _list_table   = block('list_table') %}*/
/* {% set _list_filters = block('list_filters') %}*/
/* {% set _tab_menu     = block('tab_menu') %}*/
/* {% set _content      = block('content') %}*/
/* {% set _title        = block('title') %}*/
/* {% set _breadcrumb   = block('breadcrumb') %}*/
/* {% set _actions      = block('actions') %}*/
/* {% set _navbar_title = block('navbar_title') %}*/
/* <!DOCTYPE html>*/
/* <html {% block html_attributes %}class="no-js"{% endblock %}>*/
/*     <head>*/
/*         {% block meta_tags %}*/
/*             <meta charset="UTF-8">*/
/*             <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>*/
/*         {% endblock %}*/
/* */
/*         {% block stylesheets %}*/
/* */
/*             {% for stylesheet in admin_pool.getOption('stylesheets', []) %}*/
/*                 <link rel="stylesheet" href="{{ asset(stylesheet) }}">*/
/*             {% endfor %}*/
/* */
/*         {% endblock %}*/
/* */
/*         {% block javascripts %}*/
/*             <script>*/
/*                 window.SONATA_CONFIG = {*/
/*                     CONFIRM_EXIT: {% if admin_pool is defined and admin_pool.getOption('confirm_exit') %}true{% else %}false{% endif %},*/
/*                     USE_SELECT2: {% if admin_pool is defined and admin_pool.getOption('use_select2') %}true{% else %}false{% endif %},*/
/*                     USE_ICHECK: {% if admin_pool is defined and admin_pool.getOption('use_icheck') %}true{% else %}false{% endif %}*/
/*                 };*/
/*                 window.SONATA_TRANSLATIONS = {*/
/*                     CONFIRM_EXIT:  '{{ 'confirm_exit'|trans({}, 'SonataAdminBundle')|escape('js') }}'*/
/*                };*/
/*             </script>*/
/* */
/*             {% for javascript in admin_pool.getOption('javascripts', []) %}*/
/*                 <script src="{{ asset(javascript) }}"></script>*/
/*             {% endfor %}*/
/* */
/*             {# localize select2 #}*/
/*             {% if admin_pool is defined and admin_pool.getOption('use_select2') %}*/
/*                 {% set locale = app.request.locale %}*/
/*                 {% if locale == 'pt' %}{% set locale = 'pt_PT' %}{% endif %}*/
/* */
/*                 {# omit default EN locale #}*/
/*                 {% if locale[:2] != 'en' %}*/
/*                     <script src="{{ asset('bundles/sonataadmin/vendor/select2/select2_locale_' ~ locale|replace({'_':'-'}) ~ '.js') }}"></script>*/
/*                 {% endif %}*/
/*             {% endif %}*/
/*         <script src="{{ asset('bundles/fosjsrouting/js/router.js') }}"></script>*/
/*         <script src="{{ path('fos_js_routing_js', {'callback': 'fos.Router.setData'}) }}"></script>*/
/* */
/*         {% endblock %}*/
/* */
/*         <title>*/
/*         {% block sonata_head_title %}*/
/*             {{ 'Admin'|trans({}, 'SonataAdminBundle') }}*/
/* */
/*             {% if _title is not empty %}*/
/*                 {{ _title|raw }}*/
/*             {% else %}*/
/*                 {% if action is defined %}*/
/*                     -*/
/*                     {% for menu in admin.breadcrumbs(action) %}*/
/*                         {% if not loop.first %}*/
/*                             {%  if loop.index != 2 %}*/
/*                                 &gt;*/
/*                             {% endif %}*/
/* */
/*                             {{ menu.label }}*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                 {% endif %}*/
/*             {% endif%}*/
/*         {% endblock %}*/
/*         </title>*/
/*     </head>*/
/*     <body {% block body_attributes %}class="sonata-bc skin-black fixed"{% endblock %}>*/
/*         {% block sonata_header %}*/
/*             <header class="header">*/
/*                 {% block sonata_header_noscript_warning %}*/
/*                     <noscript>*/
/*                         <div class="noscript-warning">*/
/*                             {{ 'noscript_warning'|trans({}, 'SonataAdminBundle') }}*/
/*                         </div>*/
/*                     </noscript>*/
/*                 {% endblock %}*/
/*                 {% block logo %}*/
/*                     {% spaceless %}*/
/*                     <a class="logo" href="{{ url('sonata_admin_dashboard') }}">*/
/*                         {% if 'single_image' == admin_pool.getOption('title_mode') or 'both' == admin_pool.getOption('title_mode') %}*/
/*                             <img src="{{ asset(admin_pool.titlelogo) }}" alt="{{ admin_pool.title }}">*/
/*                         {% endif %}*/
/*                         {% if 'single_text' == admin_pool.getOption('title_mode') or 'both' == admin_pool.getOption('title_mode') %}*/
/*                             <span>{{ admin_pool.title }}</span>*/
/*                         {% endif %}*/
/*                     </a>*/
/*                     {% endspaceless %}*/
/*                 {% endblock %}*/
/*                 {% block sonata_nav %}*/
/*                     {% if admin_pool is defined %}*/
/*                         <nav class="navbar navbar-static-top" role="navigation">*/
/*                             <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">*/
/*                                 <span class="sr-only">Toggle navigation</span>*/
/*                                 <span class="icon-bar"></span>*/
/*                                 <span class="icon-bar"></span>*/
/*                                 <span class="icon-bar"></span>*/
/*                             </a>*/
/* */
/*                             <div class="navbar-left">*/
/*                                 {% block sonata_breadcrumb %}*/
/*                                     {% if _breadcrumb is not empty or action is defined %}*/
/*                                         <ol class="nav navbar-top-links breadcrumb">*/
/*                                             {% if _breadcrumb is empty %}*/
/*                                                 {% if action is defined %}*/
/*                                                     {% for menu in admin.breadcrumbs(action) %}*/
/*                                                         {% if not loop.last  %}*/
/*                                                             <li>*/
/*                                                                 {% if menu.uri is not empty %}*/
/*                                                                     <a href="{{ menu.uri }}">{{ menu.label|raw }}</a>*/
/*                                                                 {% else %}*/
/*                                                                     {{ menu.label }}*/
/*                                                                 {% endif %}*/
/*                                                             </li>*/
/*                                                         {% else %}*/
/*                                                             <li class="active"><span>{{ menu.label }}</span></li>*/
/*                                                         {% endif %}*/
/*                                                     {% endfor %}*/
/*                                                 {% endif %}*/
/*                                             {% else %}*/
/*                                                 {{ _breadcrumb|raw }}*/
/*                                             {% endif %}*/
/*                                         </ol>*/
/*                                     {% endif %}*/
/*                                 {% endblock sonata_breadcrumb %}*/
/*                             </div>*/
/* */
/*                             {% block sonata_top_nav_menu %}*/
/*                                 <div class="navbar-right">*/
/*                                     <ul class="nav navbar-nav">*/
/*                                         <li class="dropdown">*/
/*                                             <a class="dropdown-toggle" data-toggle="dropdown" href="#">*/
/*                                                 <i class="fa fa-plus-square fa-fw"></i> <i class="fa fa-caret-down"></i>*/
/*                                             </a>*/
/*                                             {% include admin_pool.getTemplate('add_block') %}*/
/*                                         </li>*/
/*                                         <li class="dropdown user-menu">*/
/*                                             <a class="dropdown-toggle" data-toggle="dropdown" href="#">*/
/*                                                 <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>*/
/*                                             </a>*/
/*                                             <ul class="dropdown-menu dropdown-user">*/
/*                                                 {% include admin_pool.getTemplate('user_block') %}*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             {% endblock %}*/
/*                         </nav>*/
/*                     {% endif %}*/
/*                 {% endblock sonata_nav %}*/
/*             </header>*/
/*         {% endblock sonata_header %}*/
/* */
/*         {% block sonata_wrapper %}*/
/*             <div class="wrapper row-offcanvas row-offcanvas-left">*/
/*                 {% block sonata_left_side %}*/
/*                     <aside class="left-side sidebar-offcanvas">*/
/*                         <section class="sidebar">*/
/*                             {% block sonata_side_nav %}*/
/*                                 {% block sonata_sidebar_search %}*/
/*                                     {% if app.security.token and is_granted('ROLE_SONATA_ADMIN') %}*/
/*                                         <form action="{{ url('sonata_admin_search') }}" method="GET" class="sidebar-form" role="search">*/
/*                                             <div class="input-group custom-search-form">*/
/*                                                 <input type="text" name="q" value="{{ app.request.get('q') }}" class="form-control" placeholder="{{ 'search_placeholder'|trans({}, 'SonataAdminBundle') }}">*/
/*                                                     <span class="input-group-btn">*/
/*                                                         <button class="btn btn-flat" type="submit">*/
/*                                                             <i class="fa fa-search"></i>*/
/*                                                         </button>*/
/*                                                     </span>*/
/*                                             </div>*/
/*                                         </form>*/
/*                                     {% endif %}*/
/*                                 {% endblock sonata_sidebar_search %}*/
/* */
/*                                 {% block side_bar_before_nav %} {% endblock %}*/
/*                                 {% block side_bar_nav %}*/
/*                                     {% if app.security.token and is_granted('ROLE_SONATA_ADMIN') %}*/
/*                                         <ul class="sidebar-menu">*/
/*                                             {% for group in admin_pool.dashboardgroups %}*/
/*                                                 {% set display = (group.roles is empty or is_granted('ROLE_SUPER_ADMIN') ) %}*/
/*                                                 {% for role in group.roles if not display %}*/
/*                                                     {% set display = is_granted(role) %}*/
/*                                                 {% endfor %}*/
/* */
/*                                                 {# Do not display the group label if no item in group is available #}*/
/*                                                 {% set item_count = 0 %}*/
/*                                                 {% if display %}*/
/*                                                     {% for admin in group.items if item_count == 0 %}*/
/*                                                         {% if admin.hasroute('list') and admin.isGranted('LIST') %}*/
/*                                                             {% set item_count = item_count+1 %}*/
/*                                                         {% endif %}*/
/*                                                     {% endfor %}*/
/*                                                 {% endif %}*/
/* */
/*                                                 {% if display and (item_count > 0) %}*/
/*                                                     {% set active = false %}*/
/*                                                     {% for admin in group.items %}*/
/*                                                         {% if admin.hasroute('list') and admin.isGranted('LIST') and app.request.get('_sonata_admin') == admin.code %}*/
/*                                                             {% set active = true %}*/
/*                                                         {% endif %}*/
/*                                                     {% endfor %}*/
/*                                                     <li class="treeview{% if active %} active{% endif %}">*/
/*                                                         <a href="#">*/
/*                                                             {% if group.icon|default() %}{{ group.icon|raw }}{% endif %}*/
/*                                                             <span>{{ group.label|trans({}, group.label_catalogue) }}</span>*/
/*                                                             <i class="fa pull-right fa-angle-left"></i>*/
/*                                                         </a>*/
/*                                                         <ul class="treeview-menu{% if active %} active{% endif %}">*/
/*                                                             {% for admin in group.items %}*/
/*                                                                 {% if admin.hasroute('list') and admin.isGranted('LIST') %}*/
/*                                                                     <li{% if app.request.get('_sonata_admin') == admin.code %} class="active"{% endif %}><a href="{{ admin.generateUrl('list')}}"><i class="fa fa-angle-double-right"></i> {{ admin.label|trans({}, admin.translationdomain) }}</a></li>*/
/*                                                                 {% endif %}*/
/*                                                             {% endfor %}*/
/*                                                         </ul>*/
/*                                                     </li>*/
/*                                                 {% endif %}*/
/*                                             {% endfor %}*/
/*                                         </ul>*/
/*                                     {% endif %}*/
/*                                 {% endblock side_bar_nav %}*/
/*                                 {% block side_bar_after_nav %}*/
/*                                     <p class="text-center small" style="border-top: 1px solid #444444; padding-top: 10px"><a href="http://sonata-project.org" rel="noreferrer" target="_blank">sonata project</a></p>*/
/*                                 {% endblock %}*/
/*                             {% endblock sonata_side_nav %}*/
/*                         </section>*/
/*                     </aside>*/
/*                 {% endblock sonata_left_side %}*/
/* */
/*                 <aside class="right-side">*/
/*                     {% block sonata_page_content %}*/
/*                         <section class="content-header">*/
/*                             {% block sonata_page_content_header %}*/
/*                                 {% block sonata_page_content_nav %}*/
/*                                     {% if _tab_menu is not empty or _actions is not empty %}*/
/*                                         <nav class="navbar navbar-default" role="navigation">*/
/*                                             {% block tab_menu_navbar_header %}*/
/*                                                 {% if _navbar_title is not empty %}*/
/*                                                     <div class="navbar-header">*/
/*                                                         <span class="navbar-brand">{{ _navbar_title|raw }}</span>*/
/*                                                     </div>*/
/*                                                 {% endif %}*/
/*                                             {% endblock %}*/
/*                                             <div class="container-fluid">*/
/*                                                 <div class="navbar-left">*/
/*                                                     {% if _tab_menu is not empty %}*/
/*                                                         {{ _tab_menu|raw }}*/
/*                                                     {% endif %}*/
/*                                                 </div>*/
/* */
/*                                                 {% if _actions|replace({ '<li>': '', '</li>': '' })|trim is not empty %}*/
/*                                                     <ul class="nav navbar-nav navbar-right">*/
/*                                                         <li class="dropdown sonata-actions">*/
/*                                                             <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ 'link_actions'|trans({}, 'SonataAdminBundle') }} <b class="caret"></b></a>*/
/*                                                             <ul class="dropdown-menu" role="menu">*/
/*                                                                 {{ _actions|raw }}*/
/*                                                             </ul>*/
/*                                                         </li>*/
/*                                                     </ul>*/
/*                                                 {% endif %}*/
/*                                             </div>*/
/*                                         </nav>*/
/*                                     {% endif %}*/
/*                                 {% endblock sonata_page_content_nav %}*/
/* */
/*                             {% endblock sonata_page_content_header %}*/
/*                         </section>*/
/* */
/*                         <section class="content">*/
/*                             {% block sonata_admin_content %}*/
/* */
/*                                 {% block notice %}*/
/*                                     {% include 'SonataCoreBundle:FlashMessage:render.html.twig' %}*/
/*                                 {% endblock notice %}*/
/* */
/*                                 {% if _preview is not empty %}*/
/*                                     <div class="sonata-ba-preview">{{ _preview|raw }}</div>*/
/*                                 {% endif %}*/
/* */
/*                                 {% if _content is not empty %}*/
/*                                     <div class="sonata-ba-content">{{ _content|raw }}</div>*/
/*                                 {% endif %}*/
/* */
/*                                 {% if _show is not empty %}*/
/*                                     <div class="sonata-ba-show">{{ _show|raw }}</div>*/
/*                                 {% endif %}*/
/* */
/*                                 {% if _form is not empty %}*/
/*                                     <div class="sonata-ba-form">{{ _form|raw }}</div>*/
/*                                 {% endif %}*/
/* */
/*                                 {% if _list_table is not empty or _list_filters is not empty %}*/
/*                                     <div class="row">*/
/*                                         <div class="sonata-ba-list {% if _list_filters|trim %}col-md-10{% else %}col-md-12{% endif %}">*/
/*                                             {{ _list_table|raw }}*/
/*                                         </div>*/
/* */
/*                                         {% if _list_filters|trim %}*/
/*                                             <div class="sonata-ba-filter col-md-2">*/
/*                                                 {{ _list_filters|raw }}*/
/*                                             </div>*/
/*                                         {% endif %}*/
/*                                     </div>*/
/*                                 {% endif %}*/
/*                             {% endblock sonata_admin_content %}*/
/*                         </section>*/
/*                     {% endblock sonata_page_content %}*/
/*                 </aside>*/
/* */
/*             </div>*/
/*         {% endblock sonata_wrapper %}*/
/*     </body>*/
/* </html>*/
/* */
