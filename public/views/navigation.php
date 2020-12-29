<nav class="w-screen">

    <ul class="w-full flex justify-around dark:text-gray-100">
        <li class="">
            <a class=" <?= $_SERVER['SCRIPT_NAME'] === '/index.php' ? 'active' : ''; ?>" href="/index.php"><?= $config['title']; ?></a>
        </li><!-- /nav-item -->

        <li class="">
            <a class=" <?= $_SERVER['SCRIPT_NAME'] === '/profile.php' ? 'active' : ''; ?>" href="/profile.php">Profile</a>
        </li><!-- /nav-item -->

        <li class="">
            <?php if (isset($_SESSION['user'])) : ?>
                <a class="" href="/app/users/logout.php">Logout</a>
            <?php else : ?>
                <a class=" <?= $_SERVER['SCRIPT_NAME'] === '/login.php' ? 'active' : ''; ?>" href="login.php">Login</a>
            <?php endif; ?>
        </li><!-- /nav-item -->
    </ul><!-- /navbar-nav -->
</nav><!-- /navbar -->
