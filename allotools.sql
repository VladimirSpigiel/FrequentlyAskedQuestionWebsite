-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 16 Avril 2014 à 15:41
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `allotools`
--
CREATE DATABASE IF NOT EXISTS `allotools` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `allotools`;

-- --------------------------------------------------------

--
-- Structure de la table `arbre`
--

CREATE TABLE IF NOT EXISTS `arbre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categorie_id` int(11) DEFAULT NULL,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `actif` tinyint(1) NOT NULL,
  `nb_vue` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_9057F1EBCF5E72D` (`categorie_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=43 ;

--
-- Contenu de la table `arbre`
--

INSERT INTO `arbre` (`id`, `categorie_id`, `libelle`, `actif`, `nb_vue`) VALUES
(41, 11, 'L''application ne fonctionne pas, que faire ?', 1, 4),
(42, 13, 'Erreur #2330, que faire ?', 1, 7);

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `server_id` int(11) DEFAULT NULL,
  `idFaq` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auteur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contenu` longtext COLLATE utf8_unicode_ci NOT NULL,
  `keywords` longtext COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `actif` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_CD8737FA1844E6B7` (`server_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `server_id`, `idFaq`, `titre`, `auteur`, `contenu`, `keywords`, `date`, `actif`) VALUES
(1, 1, 1, 'Installation de Flash Player', 'Gestionnaire', '<p id="AUTO_ID_db_p_about_text_01">Adobe® Flash® Player est un module externe de navigation léger et une application d&#39;exécution sur Internet riche qui offre des expériences cohérentes et engageante pour l&#39;utilisateur, la lecture audio/vidéo et un principe de jeu étonnant.</p>\r\n<p id="AUTO_ID_db_p_about_text_02">Installé sur plus de 1,3 milliard d&#39;ordinateurs, Flash Player est la norme de référence pour afficher un contenu Web riche avec un fort impact.</p>\r\n<p>Pour télécharger et installer Flash Player, veuillez suivre ce lien :</p>\r\n<p><a title="http://get.adobe.com/fr/flashplayer/" href="http://get.adobe.com/fr/flashplayer/" target="_blank">http://get.adobe.com/fr/flashplayer/</a></p>', 'Flash problème installation exception', '2014-04-08 13:30:19', 1),
(4, 1, 2, 'Installer Firefox sous Windows', 'Gestionnaire', '<h1 class="title">Installer Firefox sous Windows</h1>\r\n<p>Cet article décrit comment installer Firefox sous Windows.</p>\r\n<ul>\r\n<li>Si vous mettez Firefox à jour depuis une version précédente, consultez <a href="https://support.mozilla.org/fr/kb/mettre-jour-firefox-derniere-version">Mettre à jour Firefox vers la dernière version</a>.</li>\r\n</ul>\r\n<div class="note"><strong>Avant d&#39;installer Firefox :<br /><br /></strong>\r\n<ul>\r\n<li>Assurez-vous que votre ordinateur dispose de la <a href="http://www.mozilla.org/firefox/system-requirements.html">configuration suffisante</a> à la bonne marche de Firefox.</li>\r\n<li>N&#39;installez pas Firefox avec un <a href="http://www.labo-microsoft.org/articles/win/xp_groupes/#type">compte limité de Windows XP</a>.</li>\r\n</ul>\r\n</div>\r\n<ol>\r\n<li>Visitez la <a href="http://www.getfirefox.com/">page de téléchargement de Firefox</a> avec n&#39;importe quel navigateur (p.ex. Microsoft Internet Explorer). Le site va détecter automatiquement votre plate-forme et la langue de votre ordinateur afin de vous recommander la(les) meilleure(s) version(s) de Firefox pour vous.<br /><br /><img class="wiki-image frameless" title="" src="https://support.cdn.mozilla.net/media/uploads/gallery/images/2012-01-25-03-15-42-57f336.png" alt="télécharger-firefox-ie9.png" /><br /><br /></li>\r\n<li>Cliquez sur le lien vert de téléchargement afin de récupérer le fichier d&#39;installation sur votre ordinateur. Suivant votre débit, le téléchargement peut prendre quelques minutes. Merci de vos patience… cela vaut le coup d&#39;attendre !</li>\r\n<li>Démarrez le processus en cliquant sur <span class="button">Exécuter</span>.<br /><br /><img class="wiki-image frameless" title="" src="https://support.cdn.mozilla.net/media/uploads/gallery/images/2012-01-25-03-21-27-caab85.png" alt="exécuter-fichier-installation-ie9.png" /></li>\r\n<li>Ensuite, il suffit simplement de suivre la procédure (le processus est indolore).<br /><br /><img class="wiki-image frameless" title="" src="https://support.cdn.mozilla.net/media/uploads/gallery/images/2012-01-25-03-25-35-24880e.png" alt="assistant-installation-firefox.png" />\r\n<div class="note"><strong>Félicitations ! Vous venez d&#39;installer Firefox.</strong></div>\r\n</li>\r\n<li>Double-cliquez sur l&#39;icône Firefox lorsque vous souhaitez naviguer sur le Web.<br /><br /><img class="wiki-image frameless" title="" src="https://support.cdn.mozilla.net/media/uploads/gallery/images/2011-10-02-07-09-19-9af3b2.png" alt="Installing Firefox - Win4" /></li>\r\n</ol>\r\n<h2 id="w_vous-avez-des-problaemesa">Vous avez des problèmes ?</h2>\r\n<p>Voici quelques articles qui peuvent vous aider :</p>\r\n<ul>\r\n<li><a href="https://support.mozilla.org/fr/kb/firefox-demarre-pas-trouver-solutions">Firefox ne démarre pas – trouver des solutions</a></li>\r\n<li><a href="https://support.mozilla.org/fr/kb/message-firefox-en-cours-execution-ne-repond-pas-resoudre-probleme">Message : « Firefox est déjà en cours d’exécution mais ne répond pas » — Résoudre le problème</a></li>\r\n</ul>', 'Firefox,problème,installation', '2014-04-08 13:35:50', 1),
(5, 1, 3, 'Installer Firefox sur Mac', 'admin', '<h1 class="title">Installer Firefox sur Mac</h1>\r\n<p>Cet article explique comment télécharger et installer Firefox sur un Mac.</p>\r\n<ul>\r\n<li>Si vous mettez à jour depuis une ancienne version de Firefox, consultez <a href="https://support.mozilla.org/fr/kb/mettre-jour-firefox-derniere-version">Mettre à jour Firefox vers la dernière version</a>.</li>\r\n</ul>\r\n<div class="for">\r\n<div class="note"><strong>Note :</strong> Cet article ne concerne que Mac.</div>\r\n</div>\r\n<div class="warning">Firefox nécessite un <strong>processeur Intel</strong> et <strong>Mac OS X 10.5</strong> ou supérieur <strong>jusqu&#39;à Firefox 16</strong>, <strong>Mac OS X 10.6</strong> ou supérieur <strong>à partir de Firefox 17</strong>. Pour en savoir plus, consultez la <a href="http://www.mozilla.org/firefox/system-requirements.html">configuration requise</a>. Si vous utilisez une ancienne version de Mac OS, consultez<a href="https://support.mozilla.org/fr/kb/firefox-fonctionne-plus-mac-os-10-4-ou-powerpc">Firefox ne fonctionne plus avec Mac OS X 10.4 ou les processeurs PowerPC</a> ou <a href="https://support.mozilla.org/fr/kb/firefox-fonctionne-plus-mac-os-x-105">Firefox ne fonctionne plus avec Mac OS X 10.5</a> pour de l&#39;aide.</div>\r\n<h1 id="w_installer-firefox-sur-mac">Installer Firefox sur Mac</h1>\r\n<ol>\r\n<li>Visitez <a href="http://mozilla.org/firefox">http://mozilla.org/firefox</a> sur n&#39;importe quel navigateur (p. ex. Safari d&#39;Apple). Il détectera alors automatiquement la plate-forme et la langue de votre ordinateur, et vous recommandera la (les) version(s) de Firefox qui vous convienne(nt) le mieux.</li>\r\n<li>Cliquez sur le bouton de téléchargement vert pour télécharger Firefox.<dl><dd><img class="wiki-image frameless" title="" src="https://support.cdn.mozilla.net/media/uploads/gallery/images/2012-01-26-16-39-53-6c7215.png" alt="Mac Install 1" /></dd></dl></li>\r\n<li>Une fois le téléchargement terminé, le fichier (Firefox.dmg) devrait s&#39;ouvrir tout seul et une fenêtre du Finder contenant l&#39;application Firefox devrait apparaître. Glissez l&#39;icône Firefox en haut du dossier « Applications » afin de le copier là.<dl><dd><img class="wiki-image frameless" title="" src="https://support.cdn.mozilla.net/media/uploads/gallery/images/2012-01-26-17-04-06-2b7732.png" alt="Mac Install 2a" /></dd><dd>\r\n<div class="note"><strong>Note :</strong> Si vous ne voyez pas cette fenêtre, cliquez sur le fichier Firefox.dmg que vous avez téléchargé pour l&#39;ouvrir.</div>\r\n</dd><dd><img class="wiki-image frameless" title="" src="https://support.cdn.mozilla.net/media/uploads/gallery/images/2012-01-26-16-40-27-46f364.png" alt="Mac Install 2" /></dd></dl></li>\r\n<li>Une fois que Firefox a été glissé dans le dossier « Applications », maintenez la touche<span class="key">Ctrl</span> enfoncée pendant que vous cliquez dans la fenêtre et sélectionnez <span class="menu">Éjecter « Firefox »</span> depuis le menu.<dl><dd><img class="wiki-image frameless" title="" src="https://support.cdn.mozilla.net/media/uploads/gallery/images/2012-01-26-17-03-33-c2c6b3.png" alt="Mac Install 4" /></dd></dl></li>\r\n<li>Vous pouvez ajouter Firefox à votre dock pour un accès rapide. Il suffit simplement d&#39;ouvrir votre dossier « Applications » et de glisser Firefox vers le dock.<dl><dd><img class="wiki-image frameless" title="" src="https://support.cdn.mozilla.net/media/uploads/gallery/images/2012-01-26-17-20-16-69a9fb.png" alt="Add to Dock" /></dd><dd>Firefox est maintenant prêt à fonctionner. Il suffit de cliquer sur son icône dans le dock pour le démarrer.</dd></dl></li>\r\n</ol>\r\n<h1 id="w_daemarrer-firefox-pour-la-premiaere-fois">Démarrer Firefox pour la première fois</h1>\r\n<p>Quand vous démarrerez Firefox pour la première fois, vous serez averti que vous avez téléchargé Firefox à partir d&#39;Internet. Puisque vous avez téléchargé Firefox depuis un site officiel, vous pouvez cliquer sur <span class="button">Ouvrir</span>.<br /><br /><img class="wiki-image frameless" title="" src="https://support.cdn.mozilla.net/media/uploads/gallery/images/installingonmac-5-jpg60.jpg" alt="installingonmac-5-jpg60.jpg" /> </p>\r\n<p>Firefox ne sera également pas considéré comme votre navigateur par défaut et vous en serez notifié. Cela signifie que lorsque vous ouvrez un lien dans votre application de courrier électronique, un raccourci Internet ou un document HTML, il ne s&#39;ouvrira pas dans Firefox. Si vous souhaitez que Firefox soit votre navigateur par défaut, alors cliquez <span class="button">Oui</span> pour le configurer ainsi. Si vous ne le souhaitez pas ou que vous êtes simplement en train d&#39;essayer Firefox, cliquez <span class="button">Non</span>.<br /><br /><img class="wiki-image frameless" title="" src="https://support.cdn.mozilla.net/media/uploads/gallery/images/installingonmac-6-jpg60.jpg" alt="installingonmac-6-jpg60.jpg" /></p>', 'Firefox, Mac', '2014-04-08 13:49:09', 1),
(6, 1, 4, 'Installer Firefox sous Linux', 'admin', '<h1 class="title">Installer Firefox sous Linux</h1>\r\n<p>Avoir Firefox installé sur votre ordinateur est la première chose à faire pour l&#39;utiliser. Cet article va vous montrer comment installer Firefox sous Linux. Pour d&#39;autres systèmes d&#39;exploitation, consultez <a href="https://support.mozilla.org/fr/kb/installer-firefox-windows">Installer Firefox sous Windows</a> et <a href="https://support.mozilla.org/fr/kb/installer-firefox-mac">Installer Firefox sur Mac</a>.</p>\r\n<p>Beaucoup de distributions Linux incluent Firefox par défaut et la plupart ont un système de gestion de paquets qui vous permet d&#39;installer Firefox facilement. Normalement, vous devriez faire l&#39;installation depuis ce gestionnaire de paquets. Ce gestionnaire va :</p>\r\n<ul>\r\n<li>S&#39;assurer que vous avez les librairies requises.</li>\r\n<li>Installer Firefox de la meilleure façon pour qu&#39;il fonctionne avec votre distribution.</li>\r\n<li>Créer des raccourcis pour lancer Firefox.</li>\r\n<li>Rendre Firefox disponible pour tous les utilisateurs de votre ordinateur.</li>\r\n<li>Permettre la désinstallation de Firefox comme n&#39;importe quelle autre application.</li>\r\n</ul>\r\n<p>Le gestionnaire de paquets a aussi quelques inconvénients :</p>\r\n<ul>\r\n<li>Il se peut que vous n&#39;ayez pas la dernière version de Firefox.</li>\r\n<li>Il se peut que votre version n&#39;ait pas la marque Firefox.</li>\r\n</ul>\r\n<h1 id="w_installation-par-un-gestionnaire-de-paquets">Installation par un gestionnaire de paquets</h1>\r\n<p>Pour installer Firefox en utilisant le gestionnaire de paquets, veuillez vous référer à la documentation de la distribution Linux que vous utilisez.</p>\r\n<h1 id="w_installation-en-dehors-dun-gestionnaire-de-paquets">Installation en dehors d&#39;un gestionnaire de paquets</h1>\r\n<p>Les instructions complètes pour installer Firefox en dehors d&#39;un gestionnaire de paquet peuvent être récupérées sur le site d&#39;assistance de votre distribution. Par exemple :</p>\r\n<ul>\r\n<li><a href="http://doc.ubuntu-fr.org/firefox">Installer Firefox sous Ubuntu</a></li>\r\n<li><a href="http://fr.opensuse.org/Firefox">Installer Firefox sous OpenSuse</a></li>\r\n</ul>\r\n<div class="note">\r\n<ul>\r\n<li><strong>Avant d&#39;installer Firefox</strong>, assurez-vous que votre ordinateur a les<strong><a href="http://www.mozilla.org/firefox/system-requirements.html">bibliothèques requises</a></strong> installées. L&#39;absence des bibliothèques entraînera le dysfonctionnement de Firefox.</li>\r\n<li>Le fichier d&#39;installation fourni par Mozilla au format <strong>.tar.bz2</strong> ne contient pas les sources mais des fichiers binaires pré-compilés, donc vous pouvez simplement les décompacter et les exécuter. Il n&#39;y a pas besoin de compiler le programme depuis les sources.</li>\r\n<li>Les instructions suivantes vont installer Firefox dans votre dossier personnel et<strong>seul l&#39;utilisateur courant</strong> sera capable de <strong>l&#39;utiliser</strong>.</li>\r\n</ul>\r\n</div>\r\n<ol>\r\n<li>Téléchargez Firefox depuis <a href="http://www.mozilla.com/">mozilla.com</a> dans votre dossier personnel.</li>\r\n<li>Ouvrez un <strong>Terminal</strong> et allez dans votre dossier personnel : <code>cd ~</code></li>\r\n<li>Décompressez le contenu du fichier téléchargé : <code>tar xjf firefox-*.tar.bz2</code></li>\r\n<li>Fermez Firefox, s&#39;il était ouvert.</li>\r\n<li>Pour démarrer Firefox, lancez le script <span class="filepath">firefox</span> dans le dossier <span class="filepath">firefox</span> :<code>~/firefox/firefox</code></li>\r\n</ol>\r\n<p>Firefox devrait maintenant se lancer. Vous pouvez créer une icône sur votre bureau pour lancer cette commande.</p>\r\n<h2 id="w_erreur-libstdca5">Erreur libstdc++ 5</h2>\r\n<p>Comme mentionné précédemment, vous avez besoin d&#39;installer les <a href="http://www.mozilla.org/firefox/system-requirements.html">bibliothèques requises</a>pour que Firefox fonctionne. Beaucoup de distributions n&#39;incluent pas libstdc++ 5 par défaut.</p>\r\n<h2 id="w_message-eafirefox-nest-pas-installaeak-ou-la-mauvaise-version-de-firefox-daemarre">Message « firefox n&#39;est pas installé » ou la mauvaise version de Firefox démarre.</h2>\r\n<p>Si Firefox a été installé en suivant les instructions données ci-dessus, il doit être lancé (dans un<strong>Terminal</strong> ou dans un lanceur depuis le bureau, par exemple) avec la commande :<code>~/firefox/firefox</code>.</p>\r\n<p>Si vous essayez de lancer Firefox avec la commande <code>firefox</code>, cela va soit lancer la version de Firefox installée par votre gestionnaire de paquets, soit vous dire que le programme n&#39;est pas installé.</p>', 'Firefox,Linux', '2014-04-08 13:55:17', 1),
(7, 1, 5, 'Installer Google Chrome pour Windows', 'admin', '<p>Pour installer Google Chrome sur votre compte utilisateur, suivez les étapes ci-dessous. Au cours de l&#39;opération, vous serez peut-être invité à installer le navigateur pour tous les comptes utilisateur de votre ordinateur. Si cette option ne s&#39;affiche pas, découvrez comment <a href="https://support.google.com/chrome/answer/answer.py?answer=118663">installer Chrome pour plusieurs comptes utilisateur</a>.</p>\r\n<ol>\r\n<li><a href="https://www.google.com/chrome?brand=CHMO#eula" target="_blank">Téléchargez le fichier du programme d&#39;installation</a>.</li>\r\n<li>Si vous y êtes invité, cliquez sur "Exécuter" ou sur "Enregistrer".</li>\r\n<li>Si vous avez enregistré le programme, double-cliquez sur le fichier correspondant pour lancer le processus d&#39;installATI on. Les paramètres de votre page d&#39;accueil et l&#39;historique de votre navigateur seront automATI quement importés à partir de votre navigateur par défaut.</li>\r\n<li>\r\n<p><strong>Windows 7/Vista/XP</strong><br />Une fois la configurATI on terminée, une fenêtre Google Chrome s&#39;ouvre. La première fois que vous lancez le navigateur, un message vous informe que vous pouvez effectuer des recherches Google directement depuis la barre d&#39;adresse, également appelée "Omnibox" (barre d&#39;adresse et de recherche). Pour changer le <a href="https://support.google.com/chrome/answer/answer.py?answer=95653">moteur de recherche par défaut</a>, cliquez sur <strong>Modifier</strong>.</p>\r\n<p><img src="https://www.google.com/help/hc/images/chrome/chrome_95426_firstrunbubble_en.png" alt="Sélectionner un moteur de recherche" height="80" /></p>\r\n<p><strong>Windows 8</strong><br />Une boîte de dialogue de bienvenue s&#39;affiche. Cliquez sur <strong>Suivant</strong> pour sélectionner votre navigateur par défaut. Si vous sélectionnez <strong>Google Chrome</strong>, il est exécuté en tant qu&#39;applicATI on Windows 8 à partir de l&#39;écran de démarrage.</p>\r\n</li>\r\n</ol>\r\n<p>Vous rencontrez des problèmes lors de l&#39;installation ou du démarrage de Google Chrome ? <a href="https://support.google.com/chrome/table/3097092">Consultez les informATI ons de la section de dépannage</a>.</p>', 'Chrome,Windows', '2014-04-08 13:58:30', 1),
(8, 1, 6, 'Votre problème persiste ? Contactez-nous !', 'admin', '<p>Si votre problème persiste, veuillez nous contacter directement via ce numéro :</p>\r\n<p>01 23 45 67 89</p>', '', '2014-04-08 14:12:15', 1),
(9, 1, 7, 'Installer Java sur Windows', 'admin', '<p><span>Cet article s&#39;applique aux éléments suivants ::</span></p>\r\n<ul>\r\n<li><strong>Plate(s)-forme(s):</strong> Windows 8, Windows 7, Vista, Windows XP, Windows 2008 Server</li>\r\n<li><strong>Version(s) de Java:</strong> 6.0, 7.0</li>\r\n</ul>\r\n<hr />\r\n<p><span class="bodytext"><span class="bodytext">La procédure d&#39;installation de Java consiste principalement à :</span></span></p>\r\n<ol>\r\n<li><a href="http://www.java.com/fr/download/help/windows_manual_download.xml#download">Télécharger et installer</a></li>\r\n<li><a href="http://www.java.com/fr/download/help/windows_manual_download.xml#test">Tester l&#39;installation</a></li>\r\n</ol>\r\n<p><span class="bodytext">» <a href="http://www.java.com/fr/download/help/sysreq.xml">Configuration système requise pour Windows</a> <br /><br /></span><span class="bodytext">La taille normale du fichier est de 10 Mo, ce qui correspond au téléchargement minimal. <a href="http://www.java.com/fr/download/faq/java_size.xml">La taille du fichier peut augmenter si vous sélectionnez des fonctions supplémentaires.</a> <br /><br /></span><span class="bodytext"><strong>Remarque :</strong> l&#39;installation de Java exige que vous disposiez d&#39;un accès administrateur à Windows sur votre ordinateur. <br /><br /></span></p>\r\n<hr />\r\n<h5><a name="download"></a>Télécharger et installer</h5>\r\n<p><span class="bodytext">Il est recommandé, mais non obligatoire, de désactiver votre pare-feu Internet avant de continuer l&#39;installation en ligne. Dans certains cas, les paramètres par défaut du pare-feu sont définis pour rejeter toute installation automatique ou en ligne, telle que l&#39;installation de Java en ligne. Si le pare-feu n&#39;est pas configuré correctement, il peut parfois bloquer l&#39;opération de téléchargement/installation de Java. Consultez le manuel de votre pare-feu Internet pour obtenir des instructions sur la désactivation de votre pare-feu Internet. <br /><br /></span></p>\r\n<ul>\r\n<li>Rendez-vous sur la page <a href="http://www.java.com/fr/download/manual.jsp">Téléchargement manuel</a></li>\r\n<li>Cliquez sur <strong>Windows Online</strong>.</li>\r\n<li>La boîte de dialogue Téléchargement de fichier apparaît et vous invite à exécuter ou enregistrer le fichier à télécharger. <br />\r\n<ul>\r\n<li>Pour exécuter le programme d&#39;installation, cliquez sur <strong>Exécuter</strong>.</li>\r\n<li>Pour sauvegarder le fichier en vue d&#39;une installation ultérieure, cliquez sur <strong>Sauvegarder.</strong> <br />Choisissez l&#39;emplacement du dossier et enregistrez le fichier sur votre système local.<br />Conseil : enregistrez le fichier dans un emplacement connu de votre ordinateur, par exemple, sur votre bureau.<br />Double-cliquez sur le fichier enregistré pour démarrer le processus d&#39;installation.</li>\r\n</ul>\r\n</li>\r\n</ul>\r\n<ul>\r\n<li>Le processus d&#39;installation commence. Cliquez sur le bouton <strong>Installer</strong> pour accepter les termes de la licence et poursuivre l&#39;installation. <br />\r\n<div class="hcenter"><img src="http://www.java.com/fr/img/download/welcome_6u21.jpg" alt="" /> </div>\r\n</li>\r\n<li>Oracle est partenaire de sociétés qui proposent des produits très diversifiés. Le programme d&#39;installation vous proposera peut-être d&#39;installer ces programmes lors de l&#39;installation du logiciel Java. Après avoir vérifié que les programmes de votre choix sont bien sélectionnés, cliquez sur le bouton <strong>Suivant</strong> pour poursuivre l&#39;installation.</li>\r\n<li>Plusieurs boîtes de dialogue confirment brièvement les dernières étapes du processus d&#39;installation. Cliquez sur <strong>Fermer</strong> dans la dernière boîte de dialogue. Cette opération terminera le processus d&#39;installation de Java. <br />\r\n<div class="hcenter"><img class="hcenter" src="http://www.java.com/fr/img/download/finish_6u21.jpg" alt="" /></div>\r\n</li>\r\n</ul>\r\n<p><span class="bodytext"><br /><br /></span><span class="bodytext">REMARQUE : <span class="termhighlight">vous devrez peut-être redémarrer (fermer puis réouvrir) votre navigateur pour activer l&#39;installation Java dans votre navigateur.</span> <br /><br /></span></p>\r\n<h5 class="sub">Notifications sur la désactivation de Java et restauration des invites</h5>\r\n<p><span class="bodytext">Le programme d&#39;installation vous indique si le contenu Java est désactivé dans les navigateurs Web et fournit des instructions pour l&#39;activer. Si vous avez choisi de masquer certaines invites de sécurité pour les applets et les applications Java Web Start, le programme d&#39;installation fournit une option pour la restauration des invites. Le programme d&#39;installation peut vous demander de redémarrer l&#39;ordinateur si vous avez choisi de ne pas redémarrer le navigateur Internet lorsque vous y avez été invité. <br /><br /></span></p>\r\n<hr />\r\n<p><span class="bodytext"><span class="titleblack"><a name="test"></a>Tester l&#39;installation</span><br />Pour vérifier que Java est installé et qu&#39;il fonctionne correctement sur votre ordinateur, exécutez cet <a href="http://www.java.com/fr/download/help/testvm.xml">applet test</a>. </span></p>', 'Windows, Java', '2014-04-08 15:13:15', 1);

-- --------------------------------------------------------

--
-- Structure de la table `articleutile`
--

CREATE TABLE IF NOT EXISTS `articleutile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `article_id` int(11) DEFAULT NULL,
  `utile` int(11) NOT NULL,
  `compteur` int(11) NOT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_944CED5C7294869C` (`article_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=25 ;

--
-- Contenu de la table `articleutile`
--

INSERT INTO `articleutile` (`id`, `article_id`, `utile`, `compteur`, `date`) VALUES
(2, 1, 2, 40, '02-2014'),
(3, 1, 1, 3, '02-2014'),
(4, 1, 0, 5, '02-2014'),
(5, 4, 2, 21, '04-2014'),
(6, 4, 0, 1, '04-2014'),
(7, 4, 1, 2, '04-2014'),
(8, 5, 2, 2, '04-2014'),
(9, 5, 1, 1, '04-2014'),
(10, 6, 2, 3, '04-2014'),
(11, 1, 2, 16, '12-2013'),
(12, 1, 1, 4, '12-2013'),
(13, 1, 0, 4, '12-2013'),
(14, 8, 2, 3, '04-2014'),
(15, 8, 0, 1, '04-2014'),
(16, 1, 2, 28, '03-2014'),
(17, 1, 0, 8, '03-2014'),
(18, 1, 1, 8, '03-2014'),
(19, 1, 2, 69, '01-2014'),
(20, 1, 1, 12, '01-2014'),
(21, 1, 0, 8, '01-2014'),
(22, 1, 2, 1, '04-2014'),
(23, 9, 0, 1, '04-2014'),
(24, 9, 1, 1, '04-2014');

-- --------------------------------------------------------

--
-- Structure de la table `article_categorie`
--

CREATE TABLE IF NOT EXISTS `article_categorie` (
  `article_id` int(11) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  PRIMARY KEY (`article_id`,`categorie_id`),
  KEY `IDX_934886107294869C` (`article_id`),
  KEY `IDX_93488610BCF5E72D` (`categorie_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `article_categorie`
--

INSERT INTO `article_categorie` (`article_id`, `categorie_id`) VALUES
(1, 11),
(4, 11),
(4, 12),
(5, 11),
(5, 12),
(6, 11),
(6, 12),
(7, 11),
(7, 12),
(8, 11),
(8, 12),
(8, 13),
(9, 13);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lib` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `route` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `public` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id`, `lib`, `route`, `public`) VALUES
(11, 'Flash', 'Flash', 1),
(12, 'Navigateur', 'Navigateur', 1),
(13, 'Autre', 'Autre', 0);

-- --------------------------------------------------------

--
-- Structure de la table `categorie_profil`
--

CREATE TABLE IF NOT EXISTS `categorie_profil` (
  `categorie_id` int(11) NOT NULL,
  `profil_id` int(11) NOT NULL,
  PRIMARY KEY (`categorie_id`,`profil_id`),
  KEY `IDX_60F018AEBCF5E72D` (`categorie_id`),
  KEY `IDX_60F018AE275ED078` (`profil_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `categorie_profil`
--

INSERT INTO `categorie_profil` (`categorie_id`, `profil_id`) VALUES
(11, 1),
(11, 6),
(12, 1),
(12, 6),
(13, 1),
(13, 6);

-- --------------------------------------------------------

--
-- Structure de la table `fils`
--

CREATE TABLE IF NOT EXISTS `fils` (
  `id` int(11) NOT NULL,
  `arbre_id` int(11) NOT NULL,
  `question_id` int(11) DEFAULT NULL,
  `article_id` int(11) DEFAULT NULL,
  `filso` int(11) DEFAULT NULL,
  `filsn` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`,`arbre_id`),
  KEY `IDX_D8792C7F1E27F6BF` (`question_id`),
  KEY `IDX_D8792C7F7294869C` (`article_id`),
  KEY `IDX_D8792C7F5142B8A3` (`arbre_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `fils`
--

INSERT INTO `fils` (`id`, `arbre_id`, `question_id`, `article_id`, `filso`, `filsn`) VALUES
(0, 41, 1, NULL, 4, 14),
(0, 42, 10, NULL, 2, 1),
(1, 42, NULL, 9, NULL, NULL),
(2, 42, NULL, 8, NULL, NULL),
(4, 41, 5, NULL, 11, 5),
(5, 41, 8, NULL, 8, 6),
(6, 41, 9, NULL, 9, 10),
(8, 41, NULL, 5, NULL, NULL),
(9, 41, NULL, 6, NULL, NULL),
(10, 41, NULL, 8, NULL, NULL),
(11, 41, NULL, 4, NULL, NULL),
(14, 41, NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `fos_user`
--

CREATE TABLE IF NOT EXISTS `fos_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `profil_id` int(11) DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`),
  KEY `IDX_957A6479275ED078` (`profil_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `fos_user`
--

INSERT INTO `fos_user` (`id`, `profil_id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`) VALUES
(1, 1, 'admin', 'admin', 'admin@admin', 'admin@admin', 1, 'l0havwja0hwksgsw0skgsogsgkg0so8', '9IeLupoCqc+G1h5P0aiI2SN/0M2T31sChuApmCIqHjJ2xDDPbMqhSsAuAhXHlVVitkC+q82Yz/YcI5z9Pko3pA==', '2014-04-16 12:27:28', 0, 0, NULL, NULL, NULL, 'a:2:{i:0;s:10:"ROLE_ADMIN";i:1;s:8:"ROLE_CLI";}', 0, NULL),
(3, 6, 'dupont', 'dupont', 'dupont@mail.fr', 'dupont@mail.fr', 1, '54033pkfakws8cskkcg0w8g08w8gogc', 'rg/xMmRR257PDV+VJjeAYg/Tr4RBotjbv9pK/CHT7s7DWbKoXbqAp3OOI6jY2MUdFCPV/Ge87tQUU9s2hoqZOA==', '2014-02-28 00:25:29', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:8:"ROLE_CLI";}', 0, NULL),
(4, 6, 'client', 'client', 'client@client.fr', 'client@client.fr', 1, 'tgzovcb3aeosgkgs88sso8g404o4c4g', 'Hlk2vDMjDN/QOkHOipb0pNA7wWxitDhiprDHdozxV3Sgx7OaPmKXY/8h0aeq7jw6V1i0LYG3s4NqtP6Zzh0x0w==', '2014-04-15 19:59:38', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:8:"ROLE_CLI";}', 0, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `profil`
--

CREATE TABLE IF NOT EXISTS `profil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Contenu de la table `profil`
--

INSERT INTO `profil` (`id`, `role`, `libelle`, `description`) VALUES
(1, 'a:2:{i:1;s:10:"ROLE_ADMIN";i:2;s:8:"ROLE_CLI";}', 'Administrateur', 'Administrateur de l''application'),
(6, 'a:1:{i:0;s:8:"ROLE_CLI";}', 'Client', 'Profil client type');

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Contenu de la table `question`
--

INSERT INTO `question` (`id`, `libelle`) VALUES
(1, 'Avez vous déjà installé Flash Player ?'),
(2, 'Utilisez-vous Firefox ?'),
(5, 'Utilisez-vous Windows 8 ?'),
(6, 'Utilisez-vous Google Chrome ?'),
(8, 'Utilisez-vous Mac ?'),
(9, 'Utilisez-vous Linux ?'),
(10, 'Avez-vous installé Java sur votre ordinateur ?');

-- --------------------------------------------------------

--
-- Structure de la table `server`
--

CREATE TABLE IF NOT EXISTS `server` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lib` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `host` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pwd` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dbname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tbname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type_bdd` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type_service` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `server`
--

INSERT INTO `server` (`id`, `lib`, `host`, `user`, `pwd`, `dbname`, `tbname`, `type_bdd`, `type_service`) VALUES
(1, 'PhpMyFaq', 'localhost', 'root', NULL, 'phpmyfaq', 'faqdata', 'mysql', 'ServiceMajPHPMyFaq');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `arbre`
--
ALTER TABLE `arbre`
  ADD CONSTRAINT `FK_9057F1EBCF5E72D` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id`);

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `FK_CD8737FA1844E6B7` FOREIGN KEY (`server_id`) REFERENCES `server` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `articleutile`
--
ALTER TABLE `articleutile`
  ADD CONSTRAINT `FK_944CED5C7294869C` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `article_categorie`
--
ALTER TABLE `article_categorie`
  ADD CONSTRAINT `FK_934886107294869C` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_93488610BCF5E72D` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `categorie_profil`
--
ALTER TABLE `categorie_profil`
  ADD CONSTRAINT `FK_60F018AE275ED078` FOREIGN KEY (`profil_id`) REFERENCES `profil` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_60F018AEBCF5E72D` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `fils`
--
ALTER TABLE `fils`
  ADD CONSTRAINT `FK_D8792C7F1E27F6BF` FOREIGN KEY (`question_id`) REFERENCES `question` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_D8792C7F5142B8A3` FOREIGN KEY (`arbre_id`) REFERENCES `arbre` (`id`),
  ADD CONSTRAINT `FK_D8792C7F7294869C` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`) ON DELETE SET NULL;

--
-- Contraintes pour la table `fos_user`
--
ALTER TABLE `fos_user`
  ADD CONSTRAINT `FK_957A6479275ED078` FOREIGN KEY (`profil_id`) REFERENCES `profil` (`id`) ON DELETE SET NULL;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
