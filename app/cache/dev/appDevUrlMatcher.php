<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/css/52b6146')) {
            // _assetic_52b6146
            if ($pathinfo === '/css/52b6146.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '52b6146',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_52b6146',);
            }

            // _assetic_52b6146_0
            if ($pathinfo === '/css/52b6146_page_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '52b6146',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_52b6146_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js/41f0308')) {
            // _assetic_41f0308
            if ($pathinfo === '/js/41f0308.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '41f0308',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_41f0308',);
            }

            if (0 === strpos($pathinfo, '/js/41f0308_')) {
                // _assetic_41f0308_0
                if ($pathinfo === '/js/41f0308_define_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '41f0308',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_41f0308_0',);
                }

                if (0 === strpos($pathinfo, '/js/41f0308_boot')) {
                    // _assetic_41f0308_1
                    if ($pathinfo === '/js/41f0308_bootstrap-notify.min_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '41f0308',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_41f0308_1',);
                    }

                    // _assetic_41f0308_2
                    if ($pathinfo === '/js/41f0308_bootbox.min_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '41f0308',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_41f0308_2',);
                    }

                }

                // _assetic_41f0308_3
                if ($pathinfo === '/js/41f0308_underscore_4.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '41f0308',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_41f0308_3',);
                }

                if (0 === strpos($pathinfo, '/js/41f0308_back')) {
                    // _assetic_41f0308_4
                    if ($pathinfo === '/js/41f0308_backbone_5.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '41f0308',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_41f0308_4',);
                    }

                    // _assetic_41f0308_5
                    if ($pathinfo === '/js/41f0308_backform_6.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '41f0308',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_41f0308_5',);
                    }

                }

                // _assetic_41f0308_6
                if ($pathinfo === '/js/41f0308_app_7.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '41f0308',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_41f0308_6',);
                }

                // _assetic_41f0308_7
                if ($pathinfo === '/js/41f0308_rooter_8.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '41f0308',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_41f0308_7',);
                }

                // _assetic_41f0308_8
                if ($pathinfo === '/js/41f0308_template_9.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '41f0308',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_41f0308_8',);
                }

                if (0 === strpos($pathinfo, '/js/41f0308_Option')) {
                    // _assetic_41f0308_9
                    if ($pathinfo === '/js/41f0308_OptionForm_10.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '41f0308',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_41f0308_9',);
                    }

                    if (0 === strpos($pathinfo, '/js/41f0308_Options')) {
                        // _assetic_41f0308_10
                        if ($pathinfo === '/js/41f0308_OptionsModel_11.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '41f0308',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_41f0308_10',);
                        }

                        // _assetic_41f0308_11
                        if ($pathinfo === '/js/41f0308_OptionsCollection_12.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '41f0308',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_41f0308_11',);
                        }

                    }

                }

                // _assetic_41f0308_12
                if ($pathinfo === '/js/41f0308_TemplateCrud_13.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '41f0308',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_41f0308_12',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/preview')) {
            // previewmailing
            if (0 === strpos($pathinfo, '/preview/view') && preg_match('#^/preview/view/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'previewmailing')), array (  '_controller' => 'MailingBundle\\Controller\\PreviewController::indexAction',));
            }

            // dropmailing
            if (0 === strpos($pathinfo, '/preview/dropmailing') && preg_match('#^/preview/dropmailing/(?P<email>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dropmailing')), array (  '_controller' => 'MailingBundle\\Controller\\PreviewController::dropAction',));
            }

            // imlgmailing
            if (0 === strpos($pathinfo, '/preview/imgmailing') && preg_match('#^/preview/imgmailing/(?P<email>[^/]++)/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'imlgmailing')), array (  '_controller' => 'MailingBundle\\Controller\\PreviewController::imgAction',));
            }

        }

        // print_homepage
        if (rtrim($pathinfo, '/') === '/ddd') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'print_homepage');
            }

            return array (  '_controller' => 'PrintBundle\\Controller\\DefaultController::indexAction',  '_route' => 'print_homepage',);
        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        // sonata_admin_redirect
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
            }

            return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
        }

        // sonata_admin_dashboard
        if ($pathinfo === '/dashboard') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
        }

        if (0 === strpos($pathinfo, '/core')) {
            // sonata_admin_retrieve_form_element
            if ($pathinfo === '/core/get-form-field-element') {
                return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
            }

            // sonata_admin_append_form_element
            if ($pathinfo === '/core/append-form-field-element') {
                return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
            }

            // sonata_admin_short_object_information
            if (0 === strpos($pathinfo, '/core/get-short-object-description') && preg_match('#^/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
            }

            // sonata_admin_set_object_field_value
            if ($pathinfo === '/core/set-object-field-value') {
                return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
            }

        }

        // sonata_admin_search
        if ($pathinfo === '/search') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
        }

        // sonata_admin_retrieve_autocomplete_items
        if ($pathinfo === '/core/get-autocomplete-items') {
            return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
        }

        if (0 === strpos($pathinfo, '/mailing')) {
            if (0 === strpos($pathinfo, '/mailing/mailinglist')) {
                // admin_mailing_mailinglist_list
                if ($pathinfo === '/mailing/mailinglist/list') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.mailinglist',  '_sonata_name' => 'admin_mailing_mailinglist_list',  '_route' => 'admin_mailing_mailinglist_list',);
                }

                // admin_mailing_mailinglist_create
                if ($pathinfo === '/mailing/mailinglist/create') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.mailinglist',  '_sonata_name' => 'admin_mailing_mailinglist_create',  '_route' => 'admin_mailing_mailinglist_create',);
                }

                // admin_mailing_mailinglist_batch
                if ($pathinfo === '/mailing/mailinglist/batch') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.mailinglist',  '_sonata_name' => 'admin_mailing_mailinglist_batch',  '_route' => 'admin_mailing_mailinglist_batch',);
                }

                // admin_mailing_mailinglist_edit
                if (preg_match('#^/mailing/mailinglist/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_mailing_mailinglist_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.mailinglist',  '_sonata_name' => 'admin_mailing_mailinglist_edit',));
                }

                // admin_mailing_mailinglist_delete
                if (preg_match('#^/mailing/mailinglist/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_mailing_mailinglist_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.mailinglist',  '_sonata_name' => 'admin_mailing_mailinglist_delete',));
                }

                // admin_mailing_mailinglist_show
                if (preg_match('#^/mailing/mailinglist/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_mailing_mailinglist_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.mailinglist',  '_sonata_name' => 'admin_mailing_mailinglist_show',));
                }

                // admin_mailing_mailinglist_export
                if ($pathinfo === '/mailing/mailinglist/export') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.mailinglist',  '_sonata_name' => 'admin_mailing_mailinglist_export',  '_route' => 'admin_mailing_mailinglist_export',);
                }

                if (0 === strpos($pathinfo, '/mailing/mailinglisttest')) {
                    // admin_mailing_mailinglisttest_list
                    if ($pathinfo === '/mailing/mailinglisttest/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.mailinglisttest',  '_sonata_name' => 'admin_mailing_mailinglisttest_list',  '_route' => 'admin_mailing_mailinglisttest_list',);
                    }

                    // admin_mailing_mailinglisttest_create
                    if ($pathinfo === '/mailing/mailinglisttest/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.mailinglisttest',  '_sonata_name' => 'admin_mailing_mailinglisttest_create',  '_route' => 'admin_mailing_mailinglisttest_create',);
                    }

                    // admin_mailing_mailinglisttest_batch
                    if ($pathinfo === '/mailing/mailinglisttest/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.mailinglisttest',  '_sonata_name' => 'admin_mailing_mailinglisttest_batch',  '_route' => 'admin_mailing_mailinglisttest_batch',);
                    }

                    // admin_mailing_mailinglisttest_edit
                    if (preg_match('#^/mailing/mailinglisttest/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_mailing_mailinglisttest_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.mailinglisttest',  '_sonata_name' => 'admin_mailing_mailinglisttest_edit',));
                    }

                    // admin_mailing_mailinglisttest_delete
                    if (preg_match('#^/mailing/mailinglisttest/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_mailing_mailinglisttest_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.mailinglisttest',  '_sonata_name' => 'admin_mailing_mailinglisttest_delete',));
                    }

                    // admin_mailing_mailinglisttest_show
                    if (preg_match('#^/mailing/mailinglisttest/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_mailing_mailinglisttest_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.mailinglisttest',  '_sonata_name' => 'admin_mailing_mailinglisttest_show',));
                    }

                    // admin_mailing_mailinglisttest_export
                    if ($pathinfo === '/mailing/mailinglisttest/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.mailinglisttest',  '_sonata_name' => 'admin_mailing_mailinglisttest_export',  '_route' => 'admin_mailing_mailinglisttest_export',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/mailing/cfgmailing')) {
                // admin_mailing_cfgmailing_list
                if ($pathinfo === '/mailing/cfgmailing/list') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.mailingcfg',  '_sonata_name' => 'admin_mailing_cfgmailing_list',  '_route' => 'admin_mailing_cfgmailing_list',);
                }

                // admin_mailing_cfgmailing_batch
                if ($pathinfo === '/mailing/cfgmailing/batch') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.mailingcfg',  '_sonata_name' => 'admin_mailing_cfgmailing_batch',  '_route' => 'admin_mailing_cfgmailing_batch',);
                }

                // admin_mailing_cfgmailing_edit
                if (preg_match('#^/mailing/cfgmailing/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_mailing_cfgmailing_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.mailingcfg',  '_sonata_name' => 'admin_mailing_cfgmailing_edit',));
                }

                // admin_mailing_cfgmailing_show
                if (preg_match('#^/mailing/cfgmailing/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_mailing_cfgmailing_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.mailingcfg',  '_sonata_name' => 'admin_mailing_cfgmailing_show',));
                }

                // admin_mailing_cfgmailing_export
                if ($pathinfo === '/mailing/cfgmailing/export') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.mailingcfg',  '_sonata_name' => 'admin_mailing_cfgmailing_export',  '_route' => 'admin_mailing_cfgmailing_export',);
                }

            }

            if (0 === strpos($pathinfo, '/mailing/modelmailing')) {
                // admin_mailing_modelmailing_list
                if ($pathinfo === '/mailing/modelmailing/list') {
                    return array (  '_controller' => 'MailingBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.template',  '_sonata_name' => 'admin_mailing_modelmailing_list',  '_route' => 'admin_mailing_modelmailing_list',);
                }

                // admin_mailing_modelmailing_create
                if ($pathinfo === '/mailing/modelmailing/create') {
                    return array (  '_controller' => 'MailingBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.template',  '_sonata_name' => 'admin_mailing_modelmailing_create',  '_route' => 'admin_mailing_modelmailing_create',);
                }

                // admin_mailing_modelmailing_batch
                if ($pathinfo === '/mailing/modelmailing/batch') {
                    return array (  '_controller' => 'MailingBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.template',  '_sonata_name' => 'admin_mailing_modelmailing_batch',  '_route' => 'admin_mailing_modelmailing_batch',);
                }

                // admin_mailing_modelmailing_edit
                if (preg_match('#^/mailing/modelmailing/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_mailing_modelmailing_edit')), array (  '_controller' => 'MailingBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.template',  '_sonata_name' => 'admin_mailing_modelmailing_edit',));
                }

                // admin_mailing_modelmailing_delete
                if (preg_match('#^/mailing/modelmailing/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_mailing_modelmailing_delete')), array (  '_controller' => 'MailingBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.template',  '_sonata_name' => 'admin_mailing_modelmailing_delete',));
                }

                // admin_mailing_modelmailing_show
                if (preg_match('#^/mailing/modelmailing/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_mailing_modelmailing_show')), array (  '_controller' => 'MailingBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.template',  '_sonata_name' => 'admin_mailing_modelmailing_show',));
                }

                // admin_mailing_modelmailing_export
                if ($pathinfo === '/mailing/modelmailing/export') {
                    return array (  '_controller' => 'MailingBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.template',  '_sonata_name' => 'admin_mailing_modelmailing_export',  '_route' => 'admin_mailing_modelmailing_export',);
                }

                // admin_mailing_modelmailing_appercu
                if (preg_match('#^/mailing/modelmailing/(?P<id>[^/]++)/appercu$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_mailing_modelmailing_appercu')), array (  '_controller' => 'MailingBundle\\Controller\\CRUDController::appercuAction',  '_sonata_admin' => 'admin.template',  '_sonata_name' => 'admin_mailing_modelmailing_appercu',));
                }

                // admin_mailing_modelmailing_sendtest
                if (preg_match('#^/mailing/modelmailing/(?P<id>[^/]++)/sendtest$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_mailing_modelmailing_sendtest')), array (  '_controller' => 'MailingBundle\\Controller\\CRUDController::sendtestAction',  '_sonata_admin' => 'admin.template',  '_sonata_name' => 'admin_mailing_modelmailing_sendtest',));
                }

                // admin_mailing_modelmailing_send
                if (preg_match('#^/mailing/modelmailing/(?P<id>[^/]++)/send$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_mailing_modelmailing_send')), array (  '_controller' => 'MailingBundle\\Controller\\CRUDController::sendAction',  '_sonata_admin' => 'admin.template',  '_sonata_name' => 'admin_mailing_modelmailing_send',));
                }

                // admin_mailing_modelmailing_ajaxsend
                if (preg_match('#^/mailing/modelmailing/(?P<id>[^/]++)/ajaxsend$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_mailing_modelmailing_ajaxsend')), array (  '_controller' => 'MailingBundle\\Controller\\CRUDController::ajaxsendAction',  '_sonata_admin' => 'admin.template',  '_sonata_name' => 'admin_mailing_modelmailing_ajaxsend',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/print/pdf')) {
            if (0 === strpos($pathinfo, '/print/pdfmerge')) {
                // admin_print_pdfmerge_list
                if ($pathinfo === '/print/pdfmerge/list') {
                    return array (  '_controller' => 'PrintBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.pdfmerge',  '_sonata_name' => 'admin_print_pdfmerge_list',  '_route' => 'admin_print_pdfmerge_list',);
                }

                // admin_print_pdfmerge_create
                if ($pathinfo === '/print/pdfmerge/create') {
                    return array (  '_controller' => 'PrintBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.pdfmerge',  '_sonata_name' => 'admin_print_pdfmerge_create',  '_route' => 'admin_print_pdfmerge_create',);
                }

                // admin_print_pdfmerge_batch
                if ($pathinfo === '/print/pdfmerge/batch') {
                    return array (  '_controller' => 'PrintBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.pdfmerge',  '_sonata_name' => 'admin_print_pdfmerge_batch',  '_route' => 'admin_print_pdfmerge_batch',);
                }

                // admin_print_pdfmerge_edit
                if (preg_match('#^/print/pdfmerge/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_print_pdfmerge_edit')), array (  '_controller' => 'PrintBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.pdfmerge',  '_sonata_name' => 'admin_print_pdfmerge_edit',));
                }

                // admin_print_pdfmerge_delete
                if (preg_match('#^/print/pdfmerge/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_print_pdfmerge_delete')), array (  '_controller' => 'PrintBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.pdfmerge',  '_sonata_name' => 'admin_print_pdfmerge_delete',));
                }

                // admin_print_pdfmerge_show
                if (preg_match('#^/print/pdfmerge/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_print_pdfmerge_show')), array (  '_controller' => 'PrintBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.pdfmerge',  '_sonata_name' => 'admin_print_pdfmerge_show',));
                }

                // admin_print_pdfmerge_export
                if ($pathinfo === '/print/pdfmerge/export') {
                    return array (  '_controller' => 'PrintBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.pdfmerge',  '_sonata_name' => 'admin_print_pdfmerge_export',  '_route' => 'admin_print_pdfmerge_export',);
                }

                // admin_print_pdfmerge_pdflist_list
                if (preg_match('#^/print/pdfmerge/(?P<id>[^/]++)/pdflist/list$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_print_pdfmerge_pdflist_list')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.pdfmerge|admin.pdflist',  '_sonata_name' => 'admin_print_pdfmerge_pdflist_list',));
                }

                // admin_print_pdfmerge_pdflist_create
                if (preg_match('#^/print/pdfmerge/(?P<id>[^/]++)/pdflist/create$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_print_pdfmerge_pdflist_create')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.pdfmerge|admin.pdflist',  '_sonata_name' => 'admin_print_pdfmerge_pdflist_create',));
                }

                // admin_print_pdfmerge_pdflist_batch
                if (preg_match('#^/print/pdfmerge/(?P<id>[^/]++)/pdflist/batch$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_print_pdfmerge_pdflist_batch')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.pdfmerge|admin.pdflist',  '_sonata_name' => 'admin_print_pdfmerge_pdflist_batch',));
                }

                // admin_print_pdfmerge_pdflist_edit
                if (preg_match('#^/print/pdfmerge/(?P<id>[^/]++)/pdflist/(?P<childId>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_print_pdfmerge_pdflist_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.pdfmerge|admin.pdflist',  '_sonata_name' => 'admin_print_pdfmerge_pdflist_edit',));
                }

                // admin_print_pdfmerge_pdflist_delete
                if (preg_match('#^/print/pdfmerge/(?P<id>[^/]++)/pdflist/(?P<childId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_print_pdfmerge_pdflist_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.pdfmerge|admin.pdflist',  '_sonata_name' => 'admin_print_pdfmerge_pdflist_delete',));
                }

                // admin_print_pdfmerge_pdflist_show
                if (preg_match('#^/print/pdfmerge/(?P<id>[^/]++)/pdflist/(?P<childId>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_print_pdfmerge_pdflist_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.pdfmerge|admin.pdflist',  '_sonata_name' => 'admin_print_pdfmerge_pdflist_show',));
                }

                // admin_print_pdfmerge_pdflist_export
                if (preg_match('#^/print/pdfmerge/(?P<id>[^/]++)/pdflist/export$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_print_pdfmerge_pdflist_export')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.pdfmerge|admin.pdflist',  '_sonata_name' => 'admin_print_pdfmerge_pdflist_export',));
                }

                // admin_print_pdfmerge_generatepdf
                if (preg_match('#^/print/pdfmerge/(?P<id>[^/]++)/generatepdf$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_print_pdfmerge_generatepdf')), array (  '_controller' => 'PrintBundle\\Controller\\CRUDController::generatepdfAction',  '_sonata_admin' => 'admin.pdfmerge',  '_sonata_name' => 'admin_print_pdfmerge_generatepdf',));
                }

            }

            if (0 === strpos($pathinfo, '/print/pdflist')) {
                // admin_print_pdflist_list
                if ($pathinfo === '/print/pdflist/list') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.pdflist',  '_sonata_name' => 'admin_print_pdflist_list',  '_route' => 'admin_print_pdflist_list',);
                }

                // admin_print_pdflist_create
                if ($pathinfo === '/print/pdflist/create') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.pdflist',  '_sonata_name' => 'admin_print_pdflist_create',  '_route' => 'admin_print_pdflist_create',);
                }

                // admin_print_pdflist_batch
                if ($pathinfo === '/print/pdflist/batch') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.pdflist',  '_sonata_name' => 'admin_print_pdflist_batch',  '_route' => 'admin_print_pdflist_batch',);
                }

                // admin_print_pdflist_edit
                if (preg_match('#^/print/pdflist/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_print_pdflist_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.pdflist',  '_sonata_name' => 'admin_print_pdflist_edit',));
                }

                // admin_print_pdflist_delete
                if (preg_match('#^/print/pdflist/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_print_pdflist_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.pdflist',  '_sonata_name' => 'admin_print_pdflist_delete',));
                }

                // admin_print_pdflist_show
                if (preg_match('#^/print/pdflist/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_print_pdflist_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.pdflist',  '_sonata_name' => 'admin_print_pdflist_show',));
                }

                // admin_print_pdflist_export
                if ($pathinfo === '/print/pdflist/export') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.pdflist',  '_sonata_name' => 'admin_print_pdflist_export',  '_route' => 'admin_print_pdflist_export',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/sonata/user')) {
            if (0 === strpos($pathinfo, '/sonata/user/user')) {
                // admin_sonata_user_user_list
                if ($pathinfo === '/sonata/user/user/list') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_list',  '_route' => 'admin_sonata_user_user_list',);
                }

                // admin_sonata_user_user_create
                if ($pathinfo === '/sonata/user/user/create') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_create',  '_route' => 'admin_sonata_user_user_create',);
                }

                // admin_sonata_user_user_batch
                if ($pathinfo === '/sonata/user/user/batch') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_batch',  '_route' => 'admin_sonata_user_user_batch',);
                }

                // admin_sonata_user_user_edit
                if (preg_match('#^/sonata/user/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_edit',));
                }

                // admin_sonata_user_user_delete
                if (preg_match('#^/sonata/user/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_delete',));
                }

                // admin_sonata_user_user_show
                if (preg_match('#^/sonata/user/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_show',));
                }

                // admin_sonata_user_user_export
                if ($pathinfo === '/sonata/user/user/export') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_export',  '_route' => 'admin_sonata_user_user_export',);
                }

            }

            if (0 === strpos($pathinfo, '/sonata/user/group')) {
                // admin_sonata_user_group_list
                if ($pathinfo === '/sonata/user/group/list') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_list',  '_route' => 'admin_sonata_user_group_list',);
                }

                // admin_sonata_user_group_create
                if ($pathinfo === '/sonata/user/group/create') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_create',  '_route' => 'admin_sonata_user_group_create',);
                }

                // admin_sonata_user_group_batch
                if ($pathinfo === '/sonata/user/group/batch') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_batch',  '_route' => 'admin_sonata_user_group_batch',);
                }

                // admin_sonata_user_group_edit
                if (preg_match('#^/sonata/user/group/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_edit',));
                }

                // admin_sonata_user_group_delete
                if (preg_match('#^/sonata/user/group/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_delete',));
                }

                // admin_sonata_user_group_show
                if (preg_match('#^/sonata/user/group/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_show',));
                }

                // admin_sonata_user_group_export
                if ($pathinfo === '/sonata/user/group/export') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_export',  '_route' => 'admin_sonata_user_group_export',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

            if (0 === strpos($pathinfo, '/login')) {
                // sonata_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::loginAction',  '_route' => 'sonata_user_security_login',);
                }

                // sonata_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_sonata_user_security_check;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::checkAction',  '_route' => 'sonata_user_security_check',);
                }
                not_sonata_user_security_check:

            }

            // sonata_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::logoutAction',  '_route' => 'sonata_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ($pathinfo === '/resetting/request') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_send_email
            if ($pathinfo === '/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ($pathinfo === '/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

            if (0 === strpos($pathinfo, '/resetting/re')) {
                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::resetAction',));
                }
                not_fos_user_resetting_reset:

                // sonata_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sonata_user_resetting_request;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::requestAction',  '_route' => 'sonata_user_resetting_request',);
                }
                not_sonata_user_resetting_request:

            }

            // sonata_user_resetting_send_email
            if ($pathinfo === '/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_sonata_user_resetting_send_email;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::sendEmailAction',  '_route' => 'sonata_user_resetting_send_email',);
            }
            not_sonata_user_resetting_send_email:

            // sonata_user_resetting_check_email
            if ($pathinfo === '/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_sonata_user_resetting_check_email;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::checkEmailAction',  '_route' => 'sonata_user_resetting_check_email',);
            }
            not_sonata_user_resetting_check_email:

            // sonata_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_sonata_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_user_resetting_reset')), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::resetAction',));
            }
            not_sonata_user_resetting_reset:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            if (0 === strpos($pathinfo, '/profile/edit-')) {
                // fos_user_profile_edit_authentication
                if ($pathinfo === '/profile/edit-authentication') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editAuthenticationAction',  '_route' => 'fos_user_profile_edit_authentication',);
                }

                // fos_user_profile_edit
                if ($pathinfo === '/profile/edit-profile') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editProfileAction',  '_route' => 'fos_user_profile_edit',);
                }

            }

            // sonata_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_sonata_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_user_profile_show');
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::showAction',  '_route' => 'sonata_user_profile_show',);
            }
            not_sonata_user_profile_show:

            if (0 === strpos($pathinfo, '/profile/edit-')) {
                // sonata_user_profile_edit_authentication
                if ($pathinfo === '/profile/edit-authentication') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editAuthenticationAction',  '_route' => 'sonata_user_profile_edit_authentication',);
                }

                // sonata_user_profile_edit
                if ($pathinfo === '/profile/edit-profile') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editProfileAction',  '_route' => 'sonata_user_profile_edit',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if (rtrim($pathinfo, '/') === '/register') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::registerAction',  '_route' => 'fos_user_registration_register',);
            }

            if (0 === strpos($pathinfo, '/register/c')) {
                // fos_user_registration_check_email
                if ($pathinfo === '/register/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_registration_check_email;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/register/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::confirmAction',));
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ($pathinfo === '/register/confirmed') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_confirmed;
                        }

                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    }
                    not_fos_user_registration_confirmed:

                }

            }

            // sonata_user_registration_register
            if (rtrim($pathinfo, '/') === '/register') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_user_registration_register');
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::registerAction',  '_route' => 'sonata_user_registration_register',);
            }

            if (0 === strpos($pathinfo, '/register/c')) {
                // sonata_user_registration_check_email
                if ($pathinfo === '/register/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sonata_user_registration_check_email;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::checkEmailAction',  '_route' => 'sonata_user_registration_check_email',);
                }
                not_sonata_user_registration_check_email:

                if (0 === strpos($pathinfo, '/register/confirm')) {
                    // sonata_user_registration_confirm
                    if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sonata_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_user_registration_confirm')), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::confirmAction',));
                    }
                    not_sonata_user_registration_confirm:

                    // sonata_user_registration_confirmed
                    if ($pathinfo === '/register/confirmed') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sonata_user_registration_confirmed;
                        }

                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::confirmedAction',  '_route' => 'sonata_user_registration_confirmed',);
                    }
                    not_sonata_user_registration_confirmed:

                }

            }

        }

        if (0 === strpos($pathinfo, '/profile/change-password')) {
            // fos_user_change_password
            if ($pathinfo === '/profile/change-password') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ChangePasswordFOSUser1Controller::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

            // sonata_user_change_password
            if ($pathinfo === '/profile/change-password') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_sonata_user_change_password;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ChangePasswordFOSUser1Controller::changePasswordAction',  '_route' => 'sonata_user_change_password',);
            }
            not_sonata_user_change_password:

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // sonata_user_admin_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::loginAction',  '_route' => 'sonata_user_admin_security_login',);
                }

                // sonata_user_admin_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_sonata_user_admin_security_check;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::checkAction',  '_route' => 'sonata_user_admin_security_check',);
                }
                not_sonata_user_admin_security_check:

            }

            // sonata_user_admin_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::logoutAction',  '_route' => 'sonata_user_admin_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/resetting')) {
            // sonata_user_admin_resetting_request
            if ($pathinfo === '/resetting/request') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_sonata_user_admin_resetting_request;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminResettingController::requestAction',  '_route' => 'sonata_user_admin_resetting_request',);
            }
            not_sonata_user_admin_resetting_request:

            // sonata_user_admin_resetting_send_email
            if ($pathinfo === '/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_sonata_user_admin_resetting_send_email;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminResettingController::sendEmailAction',  '_route' => 'sonata_user_admin_resetting_send_email',);
            }
            not_sonata_user_admin_resetting_send_email:

            // sonata_user_admin_resetting_check_email
            if ($pathinfo === '/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_sonata_user_admin_resetting_check_email;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminResettingController::checkEmailAction',  '_route' => 'sonata_user_admin_resetting_check_email',);
            }
            not_sonata_user_admin_resetting_check_email:

            // sonata_user_admin_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_sonata_user_admin_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_user_admin_resetting_reset')), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminResettingController::resetAction',));
            }
            not_sonata_user_admin_resetting_reset:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
