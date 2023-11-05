<?php
/**
 * The template for displaying 404 pages (Not Found)
 */
get_header(); ?>

<aside class="hg_left">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
</aside>

<main class="hg_main">

<header>
    <hgroup>
      <h1 class="entry-title"><?php _e( 'Oups ! Il semblerait que vous soyez perdu(e)', 'kibina' ); ?></h1>
      <h2 class="entry-title-no-result"><?php _e( '☠ Page non-trouvé ☠', 'kibina' ); ?></h2>
    </hgroup>
</header>

<article id="post-0" class="post error404 hentry not-found">
  <div class="entry-content">
    <p>Vous
    <?php
    $adminemail = get_option('admin_email'); #Adresse email de l'administrateur WordPress
    $siteweb = get_bloginfo('url'); #URL du site Web
    $nomdusiteweb = get_bloginfo('name'); #Nom du site Web
    if (!isset($_SERVER['HTTP_REFERER'])) {
    #Mesage à l'utilisateur
    echo "avez essayé de vous rendre sur "; #construction du message
    $message404 = "Tout n'est pas perdu!";
    } elseif (isset($_SERVER['HTTP_REFERER'])) {
    #Proposition de solutions à l'utilisateur et envoi d'une alerte mail à l'administrateur
    echo "avez cliqué sur le lien <code>";
    #Construction de l'alerte admin
    $messageerreur = "Un utilisateur a essayé de se rendre sur $siteweb"
    .$_SERVER['REQUEST_URI']." et a reçu une erreur 404 (page non trouvée). ";
    $messageerreur .= "Ce n'était pas sa faute, il faut donc intervenir sur cet incident.
    Url d'origine ".$_SERVER['HTTP_REFERER'];
    mail($adminemail, "Erreur 404 pour ".$_SERVER['REQUEST_URI'],
    $messageerreur, "From: $nomdusiteweb <noreply@$siteweb>");
    $message404 = "Un administrateur a été averti de cet incident.";#L'alerte mail admin a été envoyé
    }
    echo " ".$siteweb.$_SERVER['REQUEST_URI']; ?></code>
    mais cette page n'existe plus ou a été déplacée. <?php echo $message404; ?> Vous pouvez revenir en arrière en cliquant sur le bouton "Précédent" de votre navigateur ou essayer une des ces solutions :
    </p>
  </div>
</article>

<ul>
  <li><?php _e( 'Effectuer une recherche :', 'kibina' ); ?></li>
</ul>
<p><?php get_search_form(); ?></p>

<ul>
  <li><?php _e( 'Parcourir nos catégories :', 'kibina' ); ?></li>
</ul>
<p>
  <form action="<?php bloginfo('url'); ?>/" method="get">
    <div>
      <?php
      $select = wp_dropdown_categories('show_option_none=Sélectionner une catégorie&show_count=1&orderby=name&echo=0');
      $select = preg_replace("#<select([^>]*)>#", "<select$1 onchange='return this.form.submit()'>", $select);
      echo $select;
      ?>
      <noscript><div><input type="submit" value="View" /></div></noscript>
    </div>
  </form><!-- listecategories -->
</p>

<ul>
  <li>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Retourner à la page d'accueil" rel="home"><?php _e( 'Se rendre à la page d\'accueil', 'kibina' ); ?></a>
    </li>
</ul>

</main>

<aside class="hg_right">
    <ul>
        <?php dynamic_sidebar( 'main-sidebar' ); ?>
    </ul>
</aside>

<?php get_footer(); ?>