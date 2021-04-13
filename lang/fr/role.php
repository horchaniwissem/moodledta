<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'role', language 'fr', version '3.10'.
 *
 * @package     role
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addinganewrole'] = 'Ajout d\'un nouveau rôle';
$string['addrole'] = 'Ajouter un nouveau rôle';
$string['advancedoverride'] = 'Dérogation de rôle avancée';
$string['allow'] = 'Autoriser';
$string['allowassign'] = 'Autoriser l\'attribution des rôles';
$string['allowed'] = 'Autorisé';
$string['allowoverride'] = 'Autoriser la définition de dérogations aux rôles';
$string['allowroletoassign'] = 'Autoriser les utilisateurs ayant le rôle {$a->fromrole} à attribuer le rôle {$a->targetrole}';
$string['allowroletooverride'] = 'Autoriser les utilisateurs ayant le rôle {$a->fromrole} à définir des dérogations pour le rôle {$a->targetrole}';
$string['allowroletoswitch'] = 'Autoriser les utilisateurs ayant le rôle {$a->fromrole} à changer de rôle vers le rôle {$a->targetrole}';
$string['allowroletoview'] = 'Permettre aux utilisateurs ayant le rôle {$a->fromrole} de voir le rôle {$a->targetrole}';
$string['allowswitch'] = 'Autoriser le changement de rôle';
$string['allowview'] = 'Autoriser le rôle à voir';
$string['allsiteusers'] = 'Tous les utilisateurs du site';
$string['analytics:listinsights'] = 'Lister les indications';
$string['analytics:listowninsights'] = 'Lister ses propres indications';
$string['analytics:managemodels'] = 'Gérer les modèles';
$string['archetype'] = 'Modèle de rôle';
$string['archetype_help'] = 'Le modèle de rôle détermine les permissions attribuées à un rôle lors de son initialisation. Il détermine également les nouvelles permissions lors d\'une mise à jour du site.';
$string['archetypecoursecreator'] = 'MODÈLE : Créateur de cours';
$string['archetypeeditingteacher'] = 'MODÈLE : Enseignant';
$string['archetypefrontpage'] = 'MODÈLE : Utilisateur authentifié sur la page d\'accueil';
$string['archetypeguest'] = 'MODÈLE : Visiteur anonyme';
$string['archetypemanager'] = 'MODÈLE : Gestionnaire';
$string['archetypestudent'] = 'MODÈLE : Étudiant';
$string['archetypeteacher'] = 'MODÈLE : Enseignant non éditeur';
$string['archetypeuser'] = 'MODÈLE : Utilisateur authentifié';
$string['assignanotherrole'] = 'Attribuer un autre rôle';
$string['assignedroles'] = 'Rôles attribués';
$string['assignerror'] = 'Erreur lors de l\'attribution du rôle {$a->role} à l\'utilisateur {$a->user}.';
$string['assignglobalroles'] = 'Attribution des rôles système';
$string['assignmentcontext'] = 'Contexte d\'attribution';
$string['assignmentoptions'] = 'Options d\'attribution';
$string['assignrole'] = 'Attribuer rôle';
$string['assignrolenameincontext'] = 'Attribuer le rôle « {$a->role} » dans {$a->context}';
$string['assignroles'] = 'Attribution des rôles';
$string['assignroles_help'] = 'En attribuant un rôle à un utilisateur dans un certain contexte, vous lui accordez les permissions correspondant à ce rôle, pour le contexte en question et tous les contextes inférieurs. Par exemple, si dans un cours vous attribuez un rôle d\'étudiant à un utilisateur, cet utilisateur aura ce rôle dans le cours, mais également dans les blocs et activités de ce cours.';
$string['assignrolesin'] = 'Attribuer les rôles dans {$a}';
$string['assignrolesrelativetothisuser'] = 'Attribuer des rôles relativement à cet utilisateur';
$string['backtoallroles'] = 'Retour à la liste des rôles';
$string['backup:anonymise'] = 'Anonymiser les données utilisateur des sauvegardes';
$string['backup:backupactivity'] = 'Sauvegarder des activités';
$string['backup:backupcourse'] = 'Sauvegarder des cours';
$string['backup:backupsection'] = 'Sauvegarder des sections';
$string['backup:backuptargetimport'] = 'Sauvegarder pour importation';
$string['backup:configure'] = 'Configurer les réglages de sauvegarde';
$string['backup:downloadfile'] = 'Télécharger des fichiers des zones de sauvegarde';
$string['backup:userinfo'] = 'Sauvegarder les données des utilisateurs';
$string['badges:awardbadge'] = 'Décerner un badge à un utilisateur';
$string['badges:configurecriteria'] = 'Définir/modifier des critères de badge';
$string['badges:configuredetails'] = 'Définir/modifier les informations de badge';
$string['badges:configuremessages'] = 'Configurer les messages de badge';
$string['badges:createbadge'] = 'Créer/dupliquer des badges';
$string['badges:deletebadge'] = 'Supprimer des badges';
$string['badges:earnbadge'] = 'Recevoir des badges';
$string['badges:manageglobalsettings'] = 'Gérer les réglages globaux des badges';
$string['badges:manageownbadges'] = 'Voir et gérer ses propres badges reçus';
$string['badges:revokebadge'] = 'Révoquer un badge pour un utilisateur';
$string['badges:viewawarded'] = 'Voir les utilisateurs ayant reçus un badge sans pouvoir recevoir un badge';
$string['badges:viewbadges'] = 'Voir les badges disponibles sans les avoir obtenus';
$string['badges:viewotherbadges'] = 'Voir les badges publics d\'autres profils utilisateur';
$string['block:edit'] = 'Modifier les réglages d\'un bloc';
$string['block:view'] = 'Voir les blocs';
$string['blog:create'] = 'Créer des articles de blog';
$string['blog:manageentries'] = 'Modifier et gérer des articles de blog';
$string['blog:manageexternal'] = 'Modifier et gérer des blogs externes';
$string['blog:search'] = 'Rechercher dans des articles de blog';
$string['blog:view'] = 'Voir les articles de blog';
$string['blog:viewdrafts'] = 'Voir les articles de blog en brouillon';
$string['calendar:manageentries'] = 'Gérer tous les événements du calendrier';
$string['calendar:managegroupentries'] = 'Gérer les événements de groupes du calendrier';
$string['calendar:manageownentries'] = 'Gérer ses propres événements du calendrier';
$string['capabilities'] = 'Capacités';
$string['capability'] = 'Capacité';
$string['category:create'] = 'Créer les catégories de cours';
$string['category:delete'] = 'Supprimer les catégories de cours';
$string['category:manage'] = 'Gérer les catégories';
$string['category:update'] = 'Modifier les catégories de cours';
$string['category:viewcourselist'] = 'Consulter la liste des cours dans lesquels on n\'est pas inscrit';
$string['category:viewhiddencategories'] = 'Voir les catégories cachées';
$string['category:visibility'] = 'Voir les catégories de cours cachées';
$string['checkglobalpermissions'] = 'Vérifier les permissions système';
$string['checkpermissions'] = 'Voir les permissions';
$string['checkpermissionsin'] = 'Voir les permissions de {$a}';
$string['checksystempermissionsfor'] = 'Vérifier les permissions système de {$a->fullname}';
$string['checkuserspermissionshere'] = 'Voir les permissions de {$a->fullname} dans ce {$a->contextlevel}';
$string['chooseroletoassign'] = 'Veuillez choisir un rôle à attribuer';
$string['cohort:assign'] = 'Ajouter et retirer des membres aux cohortes';
$string['cohort:manage'] = 'Créer, déplacer et supprimer des cohortes';
$string['cohort:view'] = 'Voir les cohortes du site';
$string['comment:delete'] = 'Supprimer des commentaires';
$string['comment:post'] = 'Écrire des commentaires';
$string['comment:view'] = 'Consulter les commentaires';
$string['competency:competencygrade'] = 'Évaluer une compétence';
$string['competency:competencymanage'] = 'Gérer les référentiels de compétences';
$string['competency:competencyview'] = 'Consulter les référentiels de compétences';
$string['competency:coursecompetencyconfigure'] = 'Configurer les réglages des compétences de cours';
$string['competency:coursecompetencygradable'] = 'Recevoir des évaluations de compétences';
$string['competency:coursecompetencymanage'] = 'Gérer les compétences de cours';
$string['competency:coursecompetencyview'] = 'Consulter les compétences de cours';
$string['competency:evidencedelete'] = 'Supprimer une preuve';
$string['competency:plancomment'] = 'Commenter un plan de formation';
$string['competency:plancommentown'] = 'Commenter son propre plan de formation';
$string['competency:planmanage'] = 'Gérer les plans de formation';
$string['competency:planmanagedraft'] = 'Gérer les brouillons de plans de formation';
$string['competency:planmanageown'] = 'Gérer ses propres plans de formations';
$string['competency:planmanageowndraft'] = 'Gérer ses propres brouillons de plans de formation';
$string['competency:planrequestreview'] = 'Demander la validation d\'un plan de formation';
$string['competency:planrequestreviewown'] = 'Demander la validation d\'un des ses propres plans de formation';
$string['competency:planreview'] = 'Valider un plan de formation';
$string['competency:planview'] = 'Consulter tous les plans de formation';
$string['competency:planviewdraft'] = 'Consulter les brouillons de plans de formation';
$string['competency:planviewown'] = 'Consulter ses propres plans de formation';
$string['competency:planviewowndraft'] = 'Consulter ses propres brouillons de plans de formation';
$string['competency:templatemanage'] = 'Gérer les modèles de plan de formation';
$string['competency:templateview'] = 'Consulter un modèle de plan de formation';
$string['competency:usercompetencycomment'] = 'Commenter une compétence utilisateur';
$string['competency:usercompetencycommentown'] = 'Commenter une de ses propres compétences utilisateur';
$string['competency:usercompetencyrequestreview'] = 'Demander la validation d\'une compétence utilisateur';
$string['competency:usercompetencyrequestreviewown'] = 'Demander la validation d\'une de ses propres compétences utilisateur';
$string['competency:usercompetencyreview'] = 'Valider une compétence utilisateur';
$string['competency:usercompetencyview'] = 'Consulter une compétence utilisateur';
$string['competency:userevidencemanage'] = 'Gérer les preuves d\'acquis';
$string['competency:userevidencemanageown'] = 'Gérer ses propres preuves d\'acquis';
$string['competency:userevidenceview'] = 'Consulter les preuves d\'acquis d\'un utilisateur';
$string['confirmaddadmin'] = 'Voulez-vous vraiment ajouter l\'utilisateur <strong>{$a}</strong> comme nouvel administrateur du site ?';
$string['confirmdeladmin'] = 'Voulez-vous vraiment retirer l\'utilisateur <strong>{$a}</strong> de la liste des administrateurs du site ?';
$string['confirmroleprevent'] = 'Voulez-vous vraiment retirer le rôle « <strong>{$a->role}</strong> » de la liste des rôles avec permission pour la capacité « {$a->cap} » dans le contexte « {$a->context} » ?';
$string['confirmroleunprohibit'] = 'Voulez-vous vraiment retirer le rôle « <strong>{$a->role}</strong> » de la liste des rôles avec interdiction pour la capacité « {$a->cap} » dans le contexte « {$a->context} » ?';
$string['confirmunassign'] = 'Voulez-vous vraiment retirer ce rôle à cet utilisateur ?';
$string['confirmunassignno'] = 'Annuler';
$string['confirmunassigntitle'] = 'Confirmer le changement de rôle';
$string['confirmunassignyes'] = 'Retirer';
$string['contentbank:access'] = 'Accéder à la banque de contenus';
$string['contentbank:deleteanycontent'] = 'Supprimer tout contenu de la banque de contenus';
$string['contentbank:deleteowncontent'] = 'Supprimer du contenu de sa propre banque de contenus';
$string['contentbank:downloadcontent'] = 'Télécharger du contenu depuis la banque de contenus';
$string['contentbank:manageanycontent'] = 'Gérer tout contenu de la banque de contenus';
$string['contentbank:manageowncontent'] = 'Gérer le contenu de sa propre banque de contenus';
$string['contentbank:upload'] = 'Déposer un nouveau contenu dans la banque de contenus';
$string['contentbank:useeditor'] = 'Créer ou modifier du contenu avec un éditeur de type de contenu';
$string['context'] = 'Contexte';
$string['course:activityvisibility'] = 'Cacher/afficher les activités';
$string['course:bulkmessaging'] = 'Envoyer des messages à plusieurs utilisateurs';
$string['course:changecategory'] = 'Modifier la catégorie du cours';
$string['course:changefullname'] = 'Modifier le nom du cours';
$string['course:changeidnumber'] = 'Modifier le n° d\'identification du cours';
$string['course:changelockedcustomfields'] = 'Modifier les champs personnalisés verrouillés';
$string['course:changeshortname'] = 'Modifier le nom abrégé du cours';
$string['course:changesummary'] = 'Modifier le résumé du cours';
$string['course:configurecustomfields'] = 'Configurer les champs personnalisés';
$string['course:configuredownloadcontent'] = 'Configurer le téléchargement de contenus de cours';
$string['course:create'] = 'Créer des cours';
$string['course:creategroupconversations'] = 'Créer des conversations de groupe';
$string['course:delete'] = 'Supprimer des cours';
$string['course:downloadcoursecontent'] = 'Télécharger les contenus du cours';
$string['course:enrolconfig'] = 'Configurer les instances d\'inscription dans les cours';
$string['course:enrolreview'] = 'Vérifier les inscriptions aux cours';
$string['course:ignoreavailabilityrestrictions'] = 'Ignorer les restrictions de disponibilité';
$string['course:ignorefilesizelimits'] = 'Utiliser des fichiers de taille dépassant toutes les restrictions de taille';
$string['course:isincompletionreports'] = 'Être affiché dans les rapports d\'achèvement';
$string['course:manageactivities'] = 'Gérer les activités';
$string['course:managefiles'] = 'Gérer les fichiers';
$string['course:managegrades'] = 'Gérer les notes';
$string['course:managegroups'] = 'Gérer les groupes';
$string['course:managescales'] = 'Gérer les barèmes';
$string['course:markcomplete'] = 'Marquer les utilisateurs comme ayant terminé un cours';
$string['course:movesections'] = 'Déplacer les sections';
$string['course:overridecompletion'] = 'Écraser le statut d\'achèvement de l\'activité';
$string['course:recommendactivity'] = 'Recommander des activités dans le sélecteur d\'activités';
$string['course:renameroles'] = 'Renommer les rôles';
$string['course:request'] = 'Demander de nouveaux cours';
$string['course:reset'] = 'Réinitialiser les cours';
$string['course:reviewotherusers'] = 'Consulter les autres utilisateurs';
$string['course:sectionvisibility'] = 'Contrôler la visibilité des sections';
$string['course:setcurrentsection'] = 'Déterminer la section actuelle';
$string['course:setforcedlanguage'] = 'Imposer la langue du cours';
$string['course:tag'] = 'Modifier les tags de cours';
$string['course:togglecompletion'] = 'Marquer manuellement les activités comme achevées';
$string['course:update'] = 'Modifier les réglages des cours';
$string['course:useremail'] = 'Activer/désactiver les adresses de courriel';
$string['course:view'] = 'Voir les cours sans y participer';
$string['course:viewcoursegrades'] = 'Voir les notes du cours';
$string['course:viewhiddenactivities'] = 'Voir les activités cachées';
$string['course:viewhiddencourses'] = 'Voir les cours cachés';
$string['course:viewhiddensections'] = 'Voir les sections cachées';
$string['course:viewhiddenuserfields'] = 'Voir les champs utilisateur cachés';
$string['course:viewparticipants'] = 'Voir les participants';
$string['course:viewscales'] = 'Voir les barèmes';
$string['course:viewsuspendedusers'] = 'Voir les utilisateurs suspendus';
$string['course:visibility'] = 'Cacher/afficher les cours';
$string['createrolebycopying'] = 'Créer un rôle en copiant {$a}';
$string['createthisrole'] = 'Créer ce rôle';
$string['currentcontext'] = 'Contexte actuel';
$string['currentrole'] = 'Rôle actuel';
$string['customroledescription'] = 'Description personnalisée';
$string['customroledescription_help'] = 'Les descriptions des rôles standards sont fournies automatiquement dans la langue adéquate si la description personnalisée n\'est pas renseignée.';
$string['customrolename'] = 'Nom complet personnalisé';
$string['customrolename_help'] = 'Les noms des rôles standards sont fournis automatiquement dans la langue adéquate si le nom complet personnalisé n\'est pas renseigné. Pour tous les autres rôles, un nom complet doit être fourni.';
$string['defaultrole'] = 'Rôle par défaut';
$string['defaultx'] = 'Défaut : {$a}';
$string['defineroles'] = 'Définition des rôles';
$string['deletecourseoverrides'] = 'Supprimer toutes les dérogations du cours';
$string['deletelocalroles'] = 'Supprimer toutes les attributions de rôles locales';
$string['deleterolesure'] = '<p>Voulez-vous vraiment supprimer le rôle « {$a->name} ({$a->shortname}) » ?</p><p>Ce rôle est actuellement attribué à {$a->count} utilisateurs.</p>';
$string['deletexrole'] = 'Supprimer le rôle {$a}';
$string['duplicaterole'] = 'Dupliquer le rôle';
$string['duplicaterolesure'] = '<p>Voulez-vous vraiment dupliquer le rôle « {$a->name} ({$a->shortname}) » ?</p>';
$string['editingrolex'] = 'Modification du rôle « {$a} »';
$string['editrole'] = 'Modifier rôle';
$string['editxrole'] = 'Modifier le rôle {$a}';
$string['errorbadrolename'] = 'Nom de rôle incorrect';
$string['errorbadroleshortname'] = 'Nom abrégé du rôle incorrect';
$string['errorexistsrolename'] = 'Ce nom de rôle existe déjà';
$string['errorexistsroleshortname'] = 'Ce nom de rôle abrégé existe déjà';
$string['errorroleshortnametoolong'] = 'Le nom abrégé ne peut pas dépasser 100 caractères';
$string['eventcapabilityassigned'] = 'Capacité attribuée';
$string['eventcapabilityunassigned'] = 'Capacité non attribuée';
$string['eventroleallowassignupdated'] = 'Attribution de rôle autorisée';
$string['eventroleallowoverrideupdated'] = 'Dérogation de rôle autorisée';
$string['eventroleallowswitchupdated'] = 'Changement de rôle autorisé';
$string['eventroleallowviewupdated'] = 'Permettre au rôle d\'être vu';
$string['eventroleassigned'] = 'Rôle attribué à un utilisateur';
$string['eventrolecapabilitiesupdated'] = 'Capacités de rôle modifiées';
$string['eventroledeleted'] = 'Rôle supprimé';
$string['eventroleunassigned'] = 'Rôle retiré à un utilisateur';
$string['eventroleupdated'] = 'Rôle mis à jour';
$string['existingadmins'] = 'Administrateurs du site actuels';
$string['existingusers'] = '{$a} utilisateurs existants';
$string['explanation'] = 'Explication';
$string['export'] = 'Exporter';
$string['extusers'] = 'Utilisateurs existants';
$string['extusersmatching'] = 'Utilisateurs existants correpondant à « {$a} »';
$string['filter:manage'] = 'Gérer les réglages des filtres locaux';
$string['frontpageuser'] = 'Utilisateur authentifié sur la page d\'accueil';
$string['frontpageuserdescription'] = 'Tous les utilisateurs connectés sur le cours page d\'accueil.';
$string['globalrole'] = 'Rôle système';
$string['globalroleswarning'] = 'ATTENTION ! Les rôles que vous attribuez sur cette page s\'appliqueront aux utilisateurs concernés pour l\'intégralité du système, y compris pour la page d\'accueil et pour tous les cours.';
$string['gotoassignroles'] = 'Aller à l\'attribution des rôles pour ce {$a->contextlevel}';
$string['gotoassignsystemroles'] = 'Aller à l\'attribution des rôles système';
$string['grade:edit'] = 'Modifier les notes';
$string['grade:export'] = 'Exporter les notes';
$string['grade:hide'] = 'Cacher/afficher les notes ou éléments';
$string['grade:import'] = 'Importer les notes';
$string['grade:lock'] = 'Verrouiller les notes ou éléments';
$string['grade:manage'] = 'Gérer les éléments d\'évaluation';
$string['grade:managegradingforms'] = 'Gérer les méthodes d\'évaluation avancées';
$string['grade:manageletters'] = 'Gérer les notes lettres';
$string['grade:manageoutcomes'] = 'Gérer les objectifs d\'évaluation';
$string['grade:managesharedforms'] = 'Gérer les modèles de formulaires d\'évaluation avancée';
$string['grade:override'] = 'Court-circuiter les notes';
$string['grade:sharegradingforms'] = 'Partager les modèles de formulaires d\'évaluation avancée';
$string['grade:unlock'] = 'Déverrouiller les notes ou éléments';
$string['grade:view'] = 'Voir ses propres notes';
$string['grade:viewall'] = 'Voir les notes d\'autres utilisateurs';
$string['grade:viewhidden'] = 'Voir ses propres notes cachées';
$string['h5p:deploy'] = 'Déployer contenu H5P';
$string['h5p:setdisplayoptions'] = 'Options d\'affichage H5P';
$string['h5p:updatelibraries'] = 'Gérer les types de contenus H5P';
$string['highlightedcellsshowdefault'] = 'Les cellules en surbrillance dans le tableau ci-dessous indiquent les permissions par défaut pour le modèle de rôle spécifié ci-dessus.';
$string['highlightedcellsshowinherit'] = 'Les cellules en surbrillance dans le tableau ci-dessous indiquent s\'il y a lieu la permission qui sera héritée. À part les capacités dont vous voulez modifier les permissions, il est suggéré de laisser le tout sur Hériter.';
$string['inactiveformorethan'] = 'inactif depuis plus de {$a->timeperiod}';
$string['ingroup'] = 'dans le groupe « {$a->group} »';
$string['inherit'] = 'Hériter';
$string['invalidpresetfile'] = 'Fichier de définition de rôle non valide';
$string['legacy:admin'] = 'RÔLE HISTORIQUE : Administrateur';
$string['legacy:coursecreator'] = 'RÔLE HISTORIQUE : Créateur de cours';
$string['legacy:editingteacher'] = 'RÔLE HISTORIQUE : Enseignant (éditeur)';
$string['legacy:guest'] = 'RÔLE HISTORIQUE : Visiteur anonyme';
$string['legacy:student'] = 'RÔLE HISTORIQUE : Étudiant';
$string['legacy:teacher'] = 'RÔLE HISTORIQUE : Enseignant (non éditeur)';
$string['legacy:user'] = 'RÔLE HISTORIQUE : Utilisateur authentifié';
$string['legacytype'] = 'Type de rôle historique';
$string['listallroles'] = 'Liste de tous les rôles';
$string['localroles'] = 'Rôles attribués localement';
$string['mainadmin'] = 'Administrateur principal';
$string['mainadminset'] = 'Définir l\'administrateur principal';
$string['manageadmins'] = 'Gérer les administrateurs du site';
$string['manager'] = 'Gestionnaire';
$string['managerdescription'] = 'Les gestionnaires peuvent accéder aux cours et les modifier, mais en général, ils n\'y participent pas.';
$string['manageroles'] = 'Gérer les rôles';
$string['maybeassignedin'] = 'Types de contextes où ce rôle peut être attribué';
$string['morethan'] = 'Plus de {$a}';
$string['multipleroles'] = 'Plusieurs rôles';
$string['my:configsyspages'] = 'Configurer les modèles système pour les pages « Tableau de bord »';
$string['my:manageblocks'] = 'Gérer les blocs des pages « Tableau de bord »';
$string['neededroles'] = 'Rôles avec permission';
$string['nocapabilitiesincontext'] = 'Aucune capacité dans ce contexte';
$string['noneinthisx'] = 'Aucun dans {$a}';
$string['noneinthisxmatching'] = 'Aucun utilisateur correspondant à « {$a->search} » dans ce {$a->contexttype}';
$string['norole'] = 'Aucun rôle';
$string['noroleassignments'] = 'Aucun rôle n\'est attribué à cet utilisateur dans ce site.';
$string['noroles'] = 'Aucun rôle';
$string['notabletoassignroleshere'] = 'L\'attribution de rôles dans ce contexte n\'a pas été activée par un administrateur.';
$string['notabletooverrideroleshere'] = 'Vous ne pouvez modifier ici aucune permission pour aucun rôle';
$string['notes:manage'] = 'Gérer les annotations';
$string['notes:view'] = 'Voir les annotations';
$string['notset'] = 'Non défini';
$string['novisibleroles'] = 'Aucun rôle';
$string['overrideanotherrole'] = 'Définir une dérogation pour un autre rôle';
$string['overridecontext'] = 'Contexte de dérogation';
$string['overridepermissions'] = 'Définir des dérogations aux permissions';
$string['overridepermissions_help'] = 'Les dérogations aux permissions permettent d\'accorder ou de retirer des permissions spécifiques pour certaines capacités d\'un rôle dans un contexte spécifique.';
$string['overridepermissionsforrole'] = 'Définir des dérogations pour le rôle « {$a->role} » dans {$a->context}';
$string['overridepermissionsin'] = 'Définir des dérogations aux permissions dans {$a}';
$string['overrideroles'] = 'Définir des dérogations aux rôles';
$string['overriderolesin'] = 'Définir des dérogations aux rôles dans {$a}';
$string['overrides'] = 'Dérogations';
$string['overridesbycontext'] = 'Dérogations (par contexte)';
$string['payment:manageaccounts'] = 'Gérer les comptes';
$string['payment:viewpayments'] = 'Consulter les paiements';
$string['permission'] = 'Permission';
$string['permission_help'] = 'Les permissions sont les réglages que vous accordez pour des capacités spécifiques. Il y a quatre possibilités pour les permissions :

* Non défini
* Autoriser : la permission est accordée pour cette capacité
* Empêcher : la permission n\'est pas accordée pour cette capacité
* Interdire : la permission est totalement refusée pour cette capacité et ne peut pas être accordée dans un contexte inférieur (ou plus spécifique)';
$string['permissions'] = 'Permissions';
$string['permissionsforuser'] = 'Permissions de l\'utilisateur {$a}';
$string['permissionsincontext'] = 'Permissions dans {$a}';
$string['portfolio:export'] = 'Exporter vers des portfolios';
$string['potentialusers'] = '{$a} utilisateurs potentiels';
$string['potusers'] = 'Utilisateurs potentiels';
$string['potusersmatching'] = 'Utilisateurs potentiels correspondant à « {$a} »';
$string['prevent'] = 'Empêcher';
$string['privacy:metadata:preference:showadvanced'] = 'Gère le bouton d\'activation/désactivation de mode avancé.';
$string['privacy:metadata:role_assignments'] = 'Attribution de rôles';
$string['privacy:metadata:role_assignments:component'] = 'Plugin responsable de l\'attributions du rôle. Vide si le rôle est attribué manuellement.';
$string['privacy:metadata:role_assignments:itemid'] = 'L\'identifiant de l\'instance d\'authentification/d\'inscription responsable de cette attribution de rôle';
$string['privacy:metadata:role_assignments:modifierid'] = 'L\'identifiant de l\'utilisateur qui a créé ou modifié l\'attribution de rôle';
$string['privacy:metadata:role_assignments:roleid'] = 'L\'identifiant du rôle';
$string['privacy:metadata:role_assignments:tableexplanation'] = 'Cette table enregistre les rôles attribués dans chaque contexte.';
$string['privacy:metadata:role_assignments:timemodified'] = 'La date et l\'heure de la création ou de la modification de l\'attribution du rôle.';
$string['privacy:metadata:role_assignments:userid'] = 'L\'identifiant de l\'utilisateur';
$string['privacy:metadata:role_capabilities'] = 'Les capacités du rôle.';
$string['privacy:metadata:role_capabilities:capability'] = 'Le nom de la capacité.';
$string['privacy:metadata:role_capabilities:modifierid'] = 'L\'identifiant de l\'utilisateur qui a créé ou modifié la capacité';
$string['privacy:metadata:role_capabilities:permission'] = 'La permission pour une capacité : hériter, autoriser, empêcher ou interdire.';
$string['privacy:metadata:role_capabilities:roleid'] = 'L\'identifiant du rôle';
$string['privacy:metadata:role_capabilities:tableexplanation'] = 'Les capacités et dérogations de capacités pour un rôle particulier dans un contexte spécifique';
$string['privacy:metadata:role_capabilities:timemodified'] = 'La date et l\'heure de la création ou de la modification de la capacité.';
$string['privacy:metadata:role_cohortroles'] = 'Rôles de cohorte';
$string['prohibit'] = 'Interdire';
$string['prohibitedroles'] = 'Interdit';
$string['question:add'] = 'Ajouter des questions';
$string['question:config'] = 'Configurer les types de question';
$string['question:editall'] = 'Modifier toutes les questions';
$string['question:editmine'] = 'Modifier ses propres questions';
$string['question:flag'] = 'Marquer les questions auxquelles on répond';
$string['question:managecategory'] = 'Modifier les catégories de questions';
$string['question:moveall'] = 'Déplacer toutes les questions';
$string['question:movemine'] = 'Déplacer ses propres questions';
$string['question:tagall'] = 'Tagger toutes les questions';
$string['question:tagmine'] = 'Tagger vos propres questions';
$string['question:useall'] = 'Utiliser toutes les questions';
$string['question:usemine'] = 'Utiliser ses propres questions';
$string['question:viewall'] = 'Voir toutes les questions';
$string['question:viewmine'] = 'Voir ses propres questions';
$string['rating:rate'] = 'Ajouter des notes aux éléments';
$string['rating:view'] = 'Voir sa propre note globale';
$string['rating:viewall'] = 'Voir toutes les notes brutes reçues';
$string['rating:viewany'] = 'Voir les notes globales de tout le monde';
$string['resetrole'] = 'Réinitialiser';
$string['resettingrole'] = 'Réinitialisation du rôle « {$a} »';
$string['restore:configure'] = 'Configurer les réglages de restauration';
$string['restore:createuser'] = 'Créer des utilisateurs lors des restaurations';
$string['restore:restoreactivity'] = 'Restaurer des activités';
$string['restore:restorecourse'] = 'Restaurer des cours';
$string['restore:restoresection'] = 'Restaurer des sections';
$string['restore:restoretargetimport'] = 'Restaurer à partir de fichiers pour importation';
$string['restore:rolldates'] = 'Autoriser la modification des dates des activités lors des restaurations';
$string['restore:uploadfile'] = 'Déposer des fichiers dans les zones de sauvegarde';
$string['restore:userinfo'] = 'Restaurer les données des utilisateurs';
$string['restore:viewautomatedfilearea'] = 'Restaurer des cours à partir des sauvegardes automatiques';
$string['risks'] = 'Risques';
$string['role:assign'] = 'Attribuer des rôles aux utilisateurs';
$string['role:manage'] = 'Créer et gérer les rôles';
$string['role:override'] = 'Définir des dérogations pour d\'autres utilisateurs';
$string['role:review'] = 'Vérifier les permissions pour autres';
$string['role:safeoverride'] = 'Définir des dérogations aux capacités sûres pour d\'autres utilisateurs';
$string['role:switchroles'] = 'Prendre d\'autres rôles';
$string['roleallowheader'] = 'Permettre le rôle';
$string['roleallowinfo'] = 'Sélectionner un rôle à ajouter à la liste des rôles autorisés pour la capacité « {$a->cap} » dans le contexte « {$a->context} » :';
$string['roleassignments'] = 'Attributions de rôle';
$string['roledefinitions'] = 'Définitions des rôles';
$string['rolefullname'] = 'Nom';
$string['roleincontext'] = '{$a->role} dans {$a->context}';
$string['roleprohibitheader'] = 'Interdire le rôle';
$string['roleprohibitinfo'] = 'Sélectionner un rôle à ajouter à la liste des rôles avec interdiction pour la capacité « {$a->cap} » dans le contexte « {$a->context} » :';
$string['rolerepreset'] = 'Utiliser un préréglage de rôle';
$string['roleresetdefaults'] = 'Défauts';
$string['roleresetrole'] = 'Utiliser rôle ou modèle de rôle';
$string['rolerisks'] = 'Risques du rôle';
$string['roles'] = 'Rôles';
$string['roles_help'] = 'Un rôle est un ensemble de permissions définies pour la totalité d\'un système, et que l\'on peut attribuer à des utilisateurs déterminés dans des contextes déterminés.';
$string['roleselect'] = 'Sélectionner rôle';
$string['rolesforuser'] = 'Rôles de l\'utilisateur {$a}';
$string['roleshortname'] = 'Nom abrégé';
$string['roleshortname_help'] = 'Le nom abrégé du rôle est un identifiant dans lequel seuls les caractères alphanumériques ASCII sont permis. Veuillez ne pas modifier les noms abrégés des rôles standards.';
$string['roletoassign'] = 'Rôle à attribuer';
$string['roletooverride'] = 'Rôle pour lequel définir des dérogations';
$string['safeoverridenotice'] = 'Remarque : les capacités comportant des risques élevés sont verrouillées, car vous n\'avez les permissions requises pour définir des dérogations que pour des capacités sûres.';
$string['search:query'] = 'Effectuer des recherches globales';
$string['selectanotheruser'] = 'Sélectionner un autre utilisateur';
$string['selectauser'] = 'Sélectionner un utilisateur';
$string['selectrole'] = 'Sélectionner un rôle';
$string['showallroles'] = 'Afficher tous les rôles';
$string['showthisuserspermissions'] = 'Afficher les permissions de cet utilisateur';
$string['site:accessallgroups'] = 'Accéder à tous les groupes';
$string['site:approvecourse'] = 'Approuver la création de cours';
$string['site:backup'] = 'Sauvegarder les cours';
$string['site:config'] = 'Modifier la configuration du site';
$string['site:configview'] = 'Consulter l\'arbre de l\'administration du site (mais non toutes ses pages)';
$string['site:deleteanymessage'] = 'Supprimer des messages de la plateforme';
$string['site:deleteownmessage'] = 'Supprimer ses propres messages envoyés ou reçus';
$string['site:doanything'] = 'Permettre de tout faire';
$string['site:doclinks'] = 'Afficher les liens vers la documentation de Moodle';
$string['site:forcelanguage'] = 'Passer outre la langue du cours';
$string['site:import'] = 'Importer d\'autres cours dans un cours';
$string['site:maintenanceaccess'] = 'Accéder à la plateforme en mode de maintenance';
$string['site:manageallmessaging'] = 'Ajouter, supprimer, bloquer et débloquer des contacts pour n\'importe quel utilisateur';
$string['site:manageblocks'] = 'Gérer les blocs sur une page';
$string['site:managecontextlocks'] = 'Gérer le gel des contextes';
$string['site:messageanyuser'] = 'Passer outre les préférences de confidentialité utilisateur pour envoyer un message à tous les utilisateurs';
$string['site:mnetloginfromremote'] = 'Se connecter depuis une application distante via MNet';
$string['site:mnetlogintoremote'] = 'Accéder à une application distante via MNet';
$string['site:readallmessages'] = 'Lire tous les messages sur le site';
$string['site:restore'] = 'Restaurer les cours';
$string['site:senderrormessage'] = 'Envoyer un message à l\'assistance utilisateur depuis la page d\'erreur';
$string['site:sendmessage'] = 'Envoyer des messages aux utilisateurs';
$string['site:trustcontent'] = 'Utiliser des contenus potentiellement dangereux';
$string['site:uploadusers'] = 'Importer de nouveaux utilisateurs à partir d\'un fichier';
$string['site:viewanonymousevents'] = 'Consulter les événements anonymes dans les rapports';
$string['site:viewfullnames'] = 'Toujours voir les noms complets des utilisateurs';
$string['site:viewparticipants'] = 'Voir les participants';
$string['site:viewreports'] = 'Consulter les rapports';
$string['site:viewuseridentity'] = 'Voir l\'identité complète des utilisateurs dans les listes';
$string['siteadministrators'] = 'Administrateurs du site';
$string['tag:edit'] = 'Modifier les tags existants';
$string['tag:editblocks'] = 'Modifier les blocs sur les pages de tags';
$string['tag:flag'] = 'Signaler les tags comme inappropriés';
$string['tag:manage'] = 'Gérer tous les tags';
$string['thisnewrole'] = 'Ce nouveau rôle';
$string['thisusersroles'] = 'Rôles de cet utilisateur';
$string['unassignarole'] = 'Retirer l\'attribution du rôle {$a}';
$string['unassignconfirm'] = 'Voulez-vous vraiment retirer l\'attribution du rôle « {$a->role} » de l\'utilisateur « {$a->user} » ?';
$string['unassignerror'] = 'Erreur lors du retrait du rôle {$a->role} de l\'utilisateur {$a->user}.';
$string['user:changeownpassword'] = 'Modifier son propre mot de passe';
$string['user:create'] = 'Créer les utilisateurs';
$string['user:delete'] = 'Supprimer les utilisateurs';
$string['user:editmessageprofile'] = 'Modifier les réglages de notification des messages des utilisateurs';
$string['user:editownmessageprofile'] = 'Modifier ses propres réglages de notification des messages des utilisateurs';
$string['user:editownprofile'] = 'Modifier son propre profil';
$string['user:editprofile'] = 'Modifier le profil de l\'utilisateur';
$string['user:ignoreuserquota'] = 'Ignorer les quotas utilisateurs';
$string['user:loginas'] = 'Se connecter en tant que d\'autres utilisateurs';
$string['user:manageblocks'] = 'Gérer les blocs sur le profil d\'autres utilisateurs';
$string['user:manageownblocks'] = 'Gérer les blocs sur son propre profil public';
$string['user:manageownfiles'] = 'Gérer ses propres fichiers personnels';
$string['user:managesyspages'] = 'Configurer la disposition par défaut de la page des profils publics';
$string['user:readuserblogs'] = 'Voir les blogs de tous les utilisateurs';
$string['user:readuserposts'] = 'Voir les messages de tous les utilisateurs';
$string['user:update'] = 'Mettre à jour les profils des utilisateurs';
$string['user:viewalldetails'] = 'Voir toutes les infos utilisateur';
$string['user:viewdetails'] = 'Voir les profils des utilisateurs';
$string['user:viewhiddendetails'] = 'Voir les informations cachées des utilisateurs';
$string['user:viewlastip'] = 'Afficher la dernière adresse IP de l\'utilisateur';
$string['user:viewuseractivitiesreport'] = 'Voir les rapports d\'activités des utilisateurs';
$string['user:viewusergrades'] = 'Voir les notes des utilisateurs';
$string['usersfrom'] = 'Utilisateurs de {$a}';
$string['usersfrommatching'] = 'Utilisateurs de {$a->contextname} correspondant à « {$a->search} »';
$string['usersinthisx'] = 'Utilisateurs dans {$a}';
$string['usersinthisxmatching'] = 'Utilisateurs dans ce {$a->contexttype} correspondant à « {$a->search} »';
$string['userswithrole'] = 'Tous les utilisateurs avec un rôle';
$string['userswiththisrole'] = 'Utilisateurs avec ce rôle';
$string['useshowadvancedtochange'] = 'Utiliser « Afficher éléments supplémentaires » pour effectuer des modifications';
$string['viewingdefinitionofrolex'] = 'Affichage de la définition du rôle « {$a} »';
$string['viewrole'] = 'Afficher les détails du rôle';
$string['webservice:createmobiletoken'] = 'Créer un jeton de service web pour accès mobile';
$string['webservice:createtoken'] = 'Créer un jeton de service web';
$string['webservice:managealltokens'] = 'Gérer les jetons de service web de tous les utilisateurs';
$string['whydoesuserhavecap'] = 'Pourquoi {$a->fullname} a la capacité {$a->capability} dans le contexte {$a->context} ?';
$string['whydoesusernothavecap'] = 'Pourquoi {$a->fullname} n\'a pas la capacité {$a->capability} dans le contexte {$a->context} ?';
$string['xroleassignments'] = 'Attributions de rôles de {$a}';
$string['xuserswiththerole'] = 'Utilisateurs ayant le rôle « {$a->role} »';
