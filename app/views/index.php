<?php
$title = "Category";
ob_start();
?>

<section class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Main -->
        <div id="main">
            <div class="inner">

                <!-- Header -->
                <header id="header">
                    <a href="index.php?action=index" class="logo"><strong>SITE  </strong>wiki</a>
                    <ul class="icons">
                        <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                        <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                        <li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a>
                        </li>
                        <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                        <li><a href="#" class="icon brands fa-medium-m"><span class="label">Medium</span></a></li>
                    </ul>
                </header>

                <!-- Banner -->
                <section id="banner">
                    <div class="content">
                        <header>
                            <h1>Hi, I’m Editorial<br />
                                yassine</h1>
                            <p>hello</p>
                        </header>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque cupiditate maxime, nisi
                            eveniet excepturi et libero hic perspiciatis at repellat?</p>
                        <ul class="actions">
                            <li><a href="#" class="button big">Learn More</a></li>
                        </ul>
                    </div>
                    <span class="image object">
                        <img src="../app/images/word.jpg" alt="00" />
                    </span>
                </section>

                <!-- Section -->
                <section>
                    <header class="major">
                        <h2>Derniers Wikis</h2>
                    </header>
                    <div class="features">
                        <?php foreach ($latestWikis as $wiki) { ?>
                            <article>
                                <span class="icon fa-gem"></span>
                                <div class="content">
                                    <h3><a href="index.php?action=wiki&id=<?php echo $wiki['wiki_id']; ?>">
                                            <?php echo $wiki['title']; ?>
                                        </a></h3>
                                    <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam
                                        facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                                </div>
                            </article>

                        <?php } ?>


                    </div>
                </section>

                <!-- Section -->
                <section>
                    <header class="major">
                        <h2>Dernières Catégories</h2>
                    </header>
                    <div class="posts">
                        <?php foreach ($latestCategories as $catego) { ?>
                            <article>
                                <a href="#" class="image"><img src="../app/images/one.jpg" alt="" /></a>
                                <h3>
                                    <?php echo $catego['name']; ?>
                                </h3>
                                <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam
                                    facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                                <ul class="actions">
                                    <li><a href="index.php?action=category&id=<?php echo $catego['category_id']; ?>"
                                            class="button">More</a></li>
                                </ul>
                            </article>
                        <?php } ?>


                    </div>
                </section>

            </div>
        </div>

        <!-- Sidebar -->
        <div id="sidebar">
            <div class="inner">

                <!-- Search -->
                <section id="search" class="alt">
                    <form method="post" action="#">
                        <input type="text" name="query" id="query" placeholder="Search" />
                    </form>
                </section>

                <!-- Menu -->
                <nav id="menu">
                    <header class="major">
                        <h2>Menu</h2>
                    </header>
                    <ul>
                        <li><a href="index.html">Homepage</a></li>
                        <li><a href="generic.html">Generic</a></li>
                        <li><a href="elements.html">Elements</a></li>
                        <li>
                            <span class="opener">Submenu</span>
                            <ul>
                                <li><a href="#">Lorem Dolor</a></li>
                                <li><a href="#">Ipsum Adipiscing</a></li>
                                <li><a href="#">Tempus Magna</a></li>
                                <li><a href="#">Feugiat Veroeros</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Etiam Dolore</a></li>
                        <li><a href="#">Adipiscing</a></li>
                        <li>
                            <span class="opener">Another Submenu</span>
                            <ul>
                                <li><a href="#">Lorem Dolor</a></li>
                                <li><a href="#">Ipsum Adipiscing</a></li>
                                <li><a href="#">Tempus Magna</a></li>
                                <li><a href="#">Feugiat Veroeros</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Maximus Erat</a></li>
                        <li><a href="#">Sapien Mauris</a></li>
                        <li><a href="#">Amet Lacinia</a></li>
                    </ul>
                </nav>

                <!-- Section -->
                <section>
                    <header class="major">
                        <h2>Ante interdum</h2>
                    </header>
                    <div class="mini-posts">
                        <article>
                            <a href="#" class="image"><img src="../app/images/image.jpg" alt="" /></a>
                            <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
                        </article>
                        <article>
                            <a href="#" class="image"><img src="../app/images/image.jpg" alt="" /></a>
                            <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
                        </article>
                        <article>
                            <a href="#" class="image"><img src="../app/images/image.jpg" alt="" /></a>
                            <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
                        </article>
                    </div>
                    <ul class="actions">
                        <li><a href="#" class="button">More</a></li>
                    </ul>
                </section>

                <!-- Section -->
                <section>
                    <header class="major">
                        <h2>Contact</h2>
                    </header>
                    <p>Sed varius enim lorem ullamcorper dolore aliquam aenean ornare velit lacus, ac varius enim lorem
                        ullamcorper dolore. Proin sed aliquam facilisis ante interdum. Sed nulla amet lorem feugiat
                        tempus aliquam.</p>
                    <ul class="contact">
                        <li class="icon solid fa-envelope"><a href="#">youcode@gmail.com</a></li>
                        <li class="icon solid fa-phone">(000) 000-0000</li>
                        <li class="icon solid fa-home">1234 youcode<br />
                            Asafi, TN 00000-0000</li>
                    </ul>
                </section>

                <!-- Footer -->
                <footer id="footer">
                    <p class="copyright">&copy; 2024-2025 YASSINE ELMIRI</p>
                </footer>

            </div>
        </div>

    </div>

    <!-- Scripts -->
    <script src="../app/assets/js/jquery.min.js"></script>
    <script src="../app/assets/js/browser.min.js"></script>
    <script src="../app/assets/js/breakpoints.min.js"></script>
    <script src="../app/assets/js/util.js"></script>
    <script src="../app/assets/js/main.js"></script>
</section>
<?php $content = ob_get_clean(); ?>
<?php include 'layout/layout.php'; ?>