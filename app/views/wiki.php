<?php
$title = "wiki";
ob_start();
?>

<!-- index -->

<section class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Main -->
        <div id="main">
            <div class="inner">

                <!-- Header -->
                <header id="header">
                    <a href="index.php?action=index" class="logo"><strong>SITE </strong>WIKI</a>
                    <ul class="icons">
                        <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                        <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                        <li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a>
                        </li>
                        <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                        <li><a href="#" class="icon brands fa-medium-m"><span class="label">Medium</span></a></li>
                    </ul>
                </header>

                <!-- Section -->
                <section>
                    <header style="background-color:#5E81E5; color: #fff; padding: 10px; text-align: center;">
                        <h1>
                            <?php echo isset($wiki['title']) ? $wiki['title'] : 'Wiki Title Not Available'; ?>
                        </h1>
                    </header>

                    <div
                        style="max-width: 800px; margin: 20px auto; background-color: #fff; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 5px;">

                        <?php if ($wiki && is_array($wiki)): ?>

                            <p>User:
                                <?php echo isset($wiki['user_id']) ? $wiki['user_id'] : 'User Not Available'; ?>
                            </p>
                            <p>Content:
                                <?php echo isset($wiki['content']) ? $wiki['content'] : 'Content Not Available'; ?>
                            </p>
                            <p>Created at:
                                <?php echo isset($wiki['created_at']) ? $wiki['created_at'] : 'Date Not Available'; ?>
                            </p>

                            <hr>

                            <div>
                                <?php echo isset($wiki['content']) ? $wiki['content'] : 'Content Not Available'; ?>
                            </div>

                        <?php else: ?>

                            <p>Wiki details not available.</p>

                        <?php endif; ?>

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
                    <div>
                        <form action="">
                            <input type="email" placeholder="email"><br>
                            <input type="password" placeholder="password">
                            <p><a href="">sing-up</a></p>
                            <div id="header">
                                <button type="submit">Login</button>
                            </div>
                        </form>

                    </div>

                    <header class="major">
                        <h2>Menu</h2>
                    </header>
                    <ul>
                        <li><a href="index.php?action=index">Homepage</a></li>
                        <li><a href="../app/views/wiki/addwiki.php">Liste Wikis</a></li>
                        <li><a href="addtag.php">Liste Tags</a></li>
                        <li>
                            <span class="opener">Gategory</span>
                            <ul>
                                <li><a href="#">Ajouter</a></li>
                                <li><a href="#">Modification</a></li>
                                <li><a href="#">supprimer</a></li>
                                <li><a href="#">afficher</a></li>
                            </ul>
                        </li>

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