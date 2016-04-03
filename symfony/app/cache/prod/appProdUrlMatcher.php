<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // allotools_faq_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'allotools_faq_homepage');
            }

            return array (  '_controller' => 'Allotools\\FaqBundle\\Controller\\DefaultController::indexAction',  '_route' => 'allotools_faq_homepage',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // allotools_faq_admin
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'allotools_faq_admin');
                }

                return array (  '_controller' => 'Allotools\\FaqBundle\\Controller\\AdminController::indexAction',  '_route' => 'allotools_faq_admin',);
            }

            if (0 === strpos($pathinfo, '/admin/gestion')) {
                // allotools_faq_updateall
                if (rtrim($pathinfo, '/') === '/admin/gestionServeurs/updateAll') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'allotools_faq_updateall');
                    }

                    return array (  '_controller' => 'Allotools\\FaqBundle\\Controller\\ServerController::updateAllArticlesAction',  '_route' => 'allotools_faq_updateall',);
                }

                if (0 === strpos($pathinfo, '/admin/gestionUtilisateurs')) {
                    // allotools_faq_manageusers
                    if (rtrim($pathinfo, '/') === '/admin/gestionUtilisateurs') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'allotools_faq_manageusers');
                        }

                        return array (  '_controller' => 'Allotools\\FaqBundle\\Controller\\UserController::displayUsersAction',  '_route' => 'allotools_faq_manageusers',);
                    }

                    // allotools_faq_manageusersedit
                    if (0 === strpos($pathinfo, '/admin/gestionUtilisateurs/Modifier') && preg_match('#^/admin/gestionUtilisateurs/Modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'allotools_faq_manageusersedit')), array (  '_controller' => 'Allotools\\FaqBundle\\Controller\\UserController::editUserAction',));
                    }

                    // allotools_faq_manageusersdelete
                    if (0 === strpos($pathinfo, '/admin/gestionUtilisateurs/Supprimer') && preg_match('#^/admin/gestionUtilisateurs/Supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'allotools_faq_manageusersdelete')), array (  '_controller' => 'Allotools\\FaqBundle\\Controller\\UserController::deleteUserAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/gestionProfils')) {
                    // allotools_faq_manageprofiles
                    if (rtrim($pathinfo, '/') === '/admin/gestionProfils') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'allotools_faq_manageprofiles');
                        }

                        return array (  '_controller' => 'Allotools\\FaqBundle\\Controller\\ProfilController::displayProfilesAction',  '_route' => 'allotools_faq_manageprofiles',);
                    }

                    // allotools_faq_manageprofilesadd
                    if ($pathinfo === '/admin/gestionProfils/Ajouter') {
                        return array (  '_controller' => 'Allotools\\FaqBundle\\Controller\\ProfilController::addProfileAction',  '_route' => 'allotools_faq_manageprofilesadd',);
                    }

                    // allotools_faq_manageprofilesedit
                    if (0 === strpos($pathinfo, '/admin/gestionProfils/Modifier') && preg_match('#^/admin/gestionProfils/Modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'allotools_faq_manageprofilesedit')), array (  '_controller' => 'Allotools\\FaqBundle\\Controller\\ProfilController::editProfileAction',));
                    }

                    // allotools_faq_manageprofilesdelete
                    if (0 === strpos($pathinfo, '/admin/gestionProfils/Supprimer') && preg_match('#^/admin/gestionProfils/Supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'allotools_faq_manageprofilesdelete')), array (  '_controller' => 'Allotools\\FaqBundle\\Controller\\ProfilController::deleteProfileAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/gestionServeurs')) {
                    // allotools_faq_manageservers
                    if (rtrim($pathinfo, '/') === '/admin/gestionServeurs') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'allotools_faq_manageservers');
                        }

                        return array (  '_controller' => 'Allotools\\FaqBundle\\Controller\\ServerController::displayServersAction',  '_route' => 'allotools_faq_manageservers',);
                    }

                    // allotools_faq_manageserversadd
                    if ($pathinfo === '/admin/gestionServeurs/Ajouter') {
                        return array (  '_controller' => 'Allotools\\FaqBundle\\Controller\\ServerController::addServerAction',  '_route' => 'allotools_faq_manageserversadd',);
                    }

                    // allotools_faq_manageserversedit
                    if (0 === strpos($pathinfo, '/admin/gestionServeurs/Modifier') && preg_match('#^/admin/gestionServeurs/Modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'allotools_faq_manageserversedit')), array (  '_controller' => 'Allotools\\FaqBundle\\Controller\\ServerController::editServerAction',));
                    }

                    // allotools_faq_manageserversdelete
                    if (0 === strpos($pathinfo, '/admin/gestionServeurs/Supprimer') && preg_match('#^/admin/gestionServeurs/Supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'allotools_faq_manageserversdelete')), array (  '_controller' => 'Allotools\\FaqBundle\\Controller\\ServerController::deleteServerAction',));
                    }

                    // allotools_faq_manageserversupdate
                    if (0 === strpos($pathinfo, '/admin/gestionServeurs/Update') && preg_match('#^/admin/gestionServeurs/Update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'allotools_faq_manageserversupdate')), array (  '_controller' => 'Allotools\\FaqBundle\\Controller\\ServerController::updateServerAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/gestionCategories')) {
                    // allotools_faq_manage_categories
                    if (rtrim($pathinfo, '/') === '/admin/gestionCategories') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'allotools_faq_manage_categories');
                        }

                        return array (  '_controller' => 'Allotools\\FaqBundle\\Controller\\CategorieController::displayCategoriesAction',  '_route' => 'allotools_faq_manage_categories',);
                    }

                    // allotools_faq_managecategories_add
                    if ($pathinfo === '/admin/gestionCategories/Ajouter') {
                        return array (  '_controller' => 'Allotools\\FaqBundle\\Controller\\CategorieController::addCategoryAction',  '_route' => 'allotools_faq_managecategories_add',);
                    }

                    // allotools_faq_managecategoriesedit
                    if (0 === strpos($pathinfo, '/admin/gestionCategories/Modifier') && preg_match('#^/admin/gestionCategories/Modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'allotools_faq_managecategoriesedit')), array (  '_controller' => 'Allotools\\FaqBundle\\Controller\\CategorieController::editCategoryAction',));
                    }

                    // allotools_faq_managecategoriesdelete
                    if (0 === strpos($pathinfo, '/admin/gestionCategories/Supprimer') && preg_match('#^/admin/gestionCategories/Supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'allotools_faq_managecategoriesdelete')), array (  '_controller' => 'Allotools\\FaqBundle\\Controller\\CategorieController::deleteCategoryAction',));
                    }

                }

            }

        }

        // allotools_faq_display_category_content
        if (0 === strpos($pathinfo, '/Categorie') && preg_match('#^/Categorie/(?P<route>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'allotools_faq_display_category_content')), array (  '_controller' => 'Allotools\\FaqBundle\\Controller\\CategorieController::displayCategoryContentAction',));
        }

        if (0 === strpos($pathinfo, '/admin/gestionArticles')) {
            // allotools_faq_manage_articles
            if (rtrim($pathinfo, '/') === '/admin/gestionArticles') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'allotools_faq_manage_articles');
                }

                return array (  '_controller' => 'Allotools\\FaqBundle\\Controller\\ArticleController::displayArticlesAction',  '_route' => 'allotools_faq_manage_articles',);
            }

            // allotools_faq_manage_articles_edit
            if (0 === strpos($pathinfo, '/admin/gestionArticles/Modifier') && preg_match('#^/admin/gestionArticles/Modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'allotools_faq_manage_articles_edit')), array (  '_controller' => 'Allotools\\FaqBundle\\Controller\\ArticleController::editArticleAction',));
            }

        }

        if (0 === strpos($pathinfo, '/Article')) {
            // allotools_faq_display_article_content
            if (preg_match('#^/Article/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'allotools_faq_display_article_content')), array (  '_controller' => 'Allotools\\FaqBundle\\Controller\\ArticleController::displayArticleContentAction',));
            }

            // allotools_faq_feedback_article
            if (preg_match('#^/Article/(?P<id>[^/]++)/Feedback/(?P<bool>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'allotools_faq_feedback_article')), array (  '_controller' => 'Allotools\\FaqBundle\\Controller\\StatistiqueController::feedbackArticleAction',));
            }

        }

        // allotools_faq_search
        if ($pathinfo === '/recherche') {
            return array (  '_controller' => 'Allotools\\FaqBundle\\Controller\\RechercheController::searchAction',  '_route' => 'allotools_faq_search',);
        }

        if (0 === strpos($pathinfo, '/question')) {
            // allotools_question
            if (preg_match('#^/question/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'allotools_question')), array (  '_controller' => 'Allotools\\FaqBundle\\Controller\\ArbreController::afficheQuestionAction',));
            }

            // allotools_boucle_recherche
            if (preg_match('#^/question/(?P<idFils>[^/]++)/(?P<reponse>[^/]++)/(?P<idArbre>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'allotools_boucle_recherche')), array (  '_controller' => 'Allotools\\FaqBundle\\Controller\\ArbreController::boucleRechercheAction',));
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/gestionArbres')) {
                // allotools_faq_manage_arbres
                if (rtrim($pathinfo, '/') === '/admin/gestionArbres') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'allotools_faq_manage_arbres');
                    }

                    return array (  '_controller' => 'Allotools\\FaqBundle\\Controller\\ArbreController::displayArbresAction',  '_route' => 'allotools_faq_manage_arbres',);
                }

                // allotools_faq_manage_arbres_ajoute
                if ($pathinfo === '/admin/gestionArbres/Ajouter') {
                    return array (  '_controller' => 'Allotools\\FaqBundle\\Controller\\ArbreController::ajouteArbreAction',  '_route' => 'allotools_faq_manage_arbres_ajoute',);
                }

                // allotools_faq_manage_arbres_modifie
                if (0 === strpos($pathinfo, '/admin/gestionArbres/Modifier') && preg_match('#^/admin/gestionArbres/Modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'allotools_faq_manage_arbres_modifie')), array (  '_controller' => 'Allotools\\FaqBundle\\Controller\\ArbreController::modifieArbreAction',));
                }

                // allotools_faq_manage_arbres_supprime
                if (0 === strpos($pathinfo, '/admin/gestionArbres/Supprime') && preg_match('#^/admin/gestionArbres/Supprime/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'allotools_faq_manage_arbres_supprime')), array (  '_controller' => 'Allotools\\FaqBundle\\Controller\\ArbreController::supprimeArbreAction',));
                }

                // allotools_faq_manage_arbres_construit
                if (rtrim($pathinfo, '/') === '/admin/gestionArbres/Construit') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'allotools_faq_manage_arbres_construit');
                    }

                    return array (  '_controller' => 'Allotools\\FaqBundle\\Controller\\ArbreController::construitArbreAction',  '_route' => 'allotools_faq_manage_arbres_construit',);
                }

                // allotools_faq_manage_arbres_reconstruit
                if (rtrim($pathinfo, '/') === '/admin/gestionArbres/Reconstruit') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'allotools_faq_manage_arbres_reconstruit');
                    }

                    return array (  '_controller' => 'Allotools\\FaqBundle\\Controller\\ArbreController::reconstruitArbreAction',  '_route' => 'allotools_faq_manage_arbres_reconstruit',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/statistiques')) {
                // allotools_faq_statistiques_articles
                if (rtrim($pathinfo, '/') === '/admin/statistiques') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'allotools_faq_statistiques_articles');
                    }

                    return array (  '_controller' => 'Allotools\\FaqBundle\\Controller\\StatistiqueController::statistiquesArticlesAction',  '_route' => 'allotools_faq_statistiques_articles',);
                }

                if (0 === strpos($pathinfo, '/admin/statistiques/categorie')) {
                    // allotools_faq_statistiques_categories
                    if (rtrim($pathinfo, '/') === '/admin/statistiques/categories') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'allotools_faq_statistiques_categories');
                        }

                        return array (  '_controller' => 'Allotools\\FaqBundle\\Controller\\StatistiqueController::statistiquesCategoriesAction',  '_route' => 'allotools_faq_statistiques_categories',);
                    }

                    // allotools_faq_statistiques_article_dans_categorie
                    if (preg_match('#^/admin/statistiques/categorie/(?P<route>[^/]++)/?$#s', $pathinfo, $matches)) {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'allotools_faq_statistiques_article_dans_categorie');
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'allotools_faq_statistiques_article_dans_categorie')), array (  '_controller' => 'Allotools\\FaqBundle\\Controller\\StatistiqueController::statistiquesArticlesDansCategorieAction',));
                    }

                    // allotools_faq_statistiques_articles_annee
                    if (0 === strpos($pathinfo, '/admin/statistiques/categorie/article') && preg_match('#^/admin/statistiques/categorie/article/(?P<route>[^/]++)/(?P<article>[^/]++)/?$#s', $pathinfo, $matches)) {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'allotools_faq_statistiques_articles_annee');
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'allotools_faq_statistiques_articles_annee')), array (  '_controller' => 'Allotools\\FaqBundle\\Controller\\StatistiqueController::statistiquesArticlesDansCategorieAnneeAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/gestionQuestions')) {
                // allotools_faq_manage_questions
                if (rtrim($pathinfo, '/') === '/admin/gestionQuestions') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'allotools_faq_manage_questions');
                    }

                    return array (  '_controller' => 'Allotools\\FaqBundle\\Controller\\QuestionController::displayQuestionsAction',  '_route' => 'allotools_faq_manage_questions',);
                }

                // allotools_faq_manage_questions_add
                if ($pathinfo === '/admin/gestionQuestions/Ajouter') {
                    return array (  '_controller' => 'Allotools\\FaqBundle\\Controller\\QuestionController::addQuestionAction',  '_route' => 'allotools_faq_manage_questions_add',);
                }

                // allotools_faq_manage_questions_edit
                if (0 === strpos($pathinfo, '/admin/gestionQuestions/Modifier') && preg_match('#^/admin/gestionQuestions/Modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'allotools_faq_manage_questions_edit')), array (  '_controller' => 'Allotools\\FaqBundle\\Controller\\QuestionController::editQuestionAction',));
                }

                // allotools_faq_manage_questions_delete
                if (0 === strpos($pathinfo, '/admin/gestionQuestions/Supprimer') && preg_match('#^/admin/gestionQuestions/Supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'allotools_faq_manage_questions_delete')), array (  '_controller' => 'Allotools\\FaqBundle\\Controller\\QuestionController::deleteQuestionAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/connexion')) {
            // fos_user_security_login
            if ($pathinfo === '/connexion') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
            }

            // fos_user_security_check
            if ($pathinfo === '/connexion_check') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
            }

        }

        // fos_user_security_logout
        if ($pathinfo === '/deconnexion') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
        }

        if (0 === strpos($pathinfo, '/compte')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/compte') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/compte/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/inscription')) {
            // fos_user_registration_register
            if (rtrim($pathinfo, '/') === '/inscription') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_registration_register;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'Allotools\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
            }
            not_fos_user_registration_register:

            if (0 === strpos($pathinfo, '/inscription/c')) {
                // fos_user_registration_check_email
                if ($pathinfo === '/inscription/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_registration_check_email;
                    }

                    return array (  '_controller' => 'Allotools\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/inscription/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/inscription/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_fos_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'Allotools\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ($pathinfo === '/inscription/confirmed') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_confirmed;
                        }

                        return array (  '_controller' => 'Allotools\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    }
                    not_fos_user_registration_confirmed:

                }

            }

        }

        if (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ($pathinfo === '/resetting/request') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_send_email
            if ($pathinfo === '/resetting/send-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ($pathinfo === '/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
            }
            not_fos_user_resetting_reset:

        }

        // fos_user_change_password
        if ($pathinfo === '/compte/changer_mot_passe') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
