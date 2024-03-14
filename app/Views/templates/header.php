<!doctype html>
<html>

<head>
    <title>True News</title>
    <link href="<?= base_url('css/output.css'); ?>" rel="stylesheet">
</head>

<?php
$session = session();
// var_dump($session->get('user'));
?>

<body class="bg-font pt-24">
    <nav class="bg-font fixed w-full z-20 top-0 start-0">
        <div class="flex flex-wrap items-center justify-between mx-auto py-4 lg:px-24 px-4">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="<?= base_url('/assets/images/TrueNewsLogo.webp') ?>" alt="Logo" class="h-12">
                <span class="self-center text-2xl font-semibold whitespace-nowrap text-primary">True News</span>
            </a>
            <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-primary rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-500 bg-font rounded-lg md:flex-row md:space-x-6 rtl:space-x-reverse md:mt-0 md:border-0">
                    <li>
                        <a href="/live" class="block py-2 px-3 text-primary lg:text-xl rounded hover:bg-primary hover:text-font ease-in-out duration-500">Live</a>
                    </li>
                    <li>
                        <a href="/news" class="block py-2 px-3 text-primary lg:text-xl rounded hover:bg-primary hover:text-font ease-in-out duration-500">News</a>
                    </li>
                    <?php if ($session->get('user')) : ?>
                        <li>
                            <a href="/profile" class="block py-2 px-3 text-primary lg:text-xl rounded hover:bg-primary hover:text-font ease-in-out duration-500">Profile</a>
                        </li>
                        <li>
                            <a href="/logout" class="block py-2 px-3 text-primary lg:text-xl rounded hover:bg-primary hover:text-font ease-in-out duration-500">Logout</a>
                        </li>
                    <?php else : ?>
                        <li>
                            <a href="/login" class="block py-2 px-3 text-primary lg:text-xl rounded hover:bg-primary hover:text-font ease-in-out duration-500">Login</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <main class="lg:px-24 px-4">