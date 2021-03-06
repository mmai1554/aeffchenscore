<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Aeffchenscore
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body class="h-full w-full font-mono text-gray-900 antialiased"
      x-data="{
        navIsOpen: false,
        searchIsOpen: false,
        search: '',
    }"
>
<div id="page" class="relative overflow-auto">

    <div id="MncFlexer" class="relative lg:flex lg:items-start">

    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Weiter zum Hauptinhalt', 'aeffchenscore' ); ?></a>


        <aside x-data="{
                    navIsOpen: false,
                    init() {
                        this.$watch('navIsOpen', (val) => {
                            if (val) {
                                document.body.classList.add('overflow-hidden');
                            } else {
                                document.body.classList.remove('overflow-hidden');
                            }
                        });
                    }
                }" class="hidden fixed top-0 bottom-0 left-0 z-20 h-full w-16 flex flex-col bg-gradient-to-b from-gray-100 to-white transition-all duration-300 overflow-hidden lg:sticky lg:w-80 lg:flex-shrink-0 lg:flex lg:justify-end lg:items-end 2xl:max-w-lg 2xl:w-full dark:from-dark-800 dark:to-dark-700" :class="{ 'w-64': navIsOpen }" @click.away="navIsOpen = false" @keydown.window.escape="navIsOpen = false">
            <div class="relative min-h-0 flex-1 flex flex-col xl:w-80">
                <a href="/" class="flex items-center py-8 px-4 lg:px-8 xl:px-16">
                    <img src="/wp-content/themes/aeffchenscore/assets/aeffchenlogo.svg" title="Klickeda!"
                         alt="Das Logo von Dr. Aeffchenbrot, Sprechzeiten: Nie! Alle Kassen"/>
                </a>
                <div class="overflow-y-auto overflow-x-hidden px-4 lg:overflow-hidden lg:px-8 xl:px-16">
                    <nav x-show="navIsOpen" class="mt-4 lg:hidden" style="display: none;">
                        <div class="docs_sidebar">
                            <ul>
                                <li>
                                    <h2>Mobile Abenteuer Jack</h2>
                                    <ul>
                                        <li><a href="/">AJ und so weiter</a></li>
                                        <li><a href="/docs/8.x/upgrade">AJ 2</a></li>
                                        <li><a href="/docs/8.x/contributions">AJ 3</a></li>
                                    </ul>
                                </li>

                                <li><a href="/api/8.x">API Documentation</a></li>
                            </ul>
                        </div>
                    </nav>
                    <nav id="indexed-nav" class="hidden lg:block lg:mt-4">
                        <div class="mnc-menu-sidebar">
                            <ul>
                                <li>
                                    <h2>Desktop Abenteuer Jack</h2>
                                    <ul>
                                        <li><a href="/docs/8.x/releases">The Funny Too</a></li>
                                        <li><a href="/docs/8.x/upgrade">Toastbrotz</a></li>
                                        <li><a href="/docs/8.x/contributions">Aktion: Suppen f??r Reiche</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>


                </div>
                <div class="sticky bottom-0 flex-1 flex flex-col justify-end lg:hidden">
                    <div class="py-4 px-4 bg-white">
                        <button class="relative ml-1 w-6 h-6 text-red-600 lg:hidden focus:outline-none focus:shadow-outline" aria-label="Menu" @click.prevent="navIsOpen = !navIsOpen">
                            <svg x-show.transition.opacity="! navIsOpen" class="absolute inset-0 w-6 h-6" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                            <svg x-show.transition.opacity="navIsOpen" class="absolute inset-0 w-6 h-6" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" style="display: none;"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                        </button>
                    </div>
                </div>
            </div>
        </aside>
        <header class="lg:hidden" @keydown.window.escape="navIsOpen = false" @click.away="navIsOpen = false">
            <div class="relative mx-auto w-full py-2 bg-white transition duration-200 dark:bg-dark-700">
                <div class="mx-auto px-4 sm:px-16 flex items-center justify-between">
                    <a href="/" class="flex items-center">
                        <img src="/wp-content/themes/aeffchenscore/assets/aeffchenlogo.svg" title="Klickeda!"
                             alt="Das Logo von Dr. Aeffchenbrot, Sprechzeiten: Nie! Alle Kassen"/>
                    </a>
                    <div class="flex-1 flex items-center justify-end">
                        <button class="ml-2 relative w-10 h-10 p-2 text-red-600 lg:hidden focus:outline-none focus:shadow-outline" aria-label="Menu" @click.prevent="navIsOpen = !navIsOpen">
                            <svg x-show.transition.opacity="! navIsOpen" class="absolute inset-0 mt-2 ml-2 w-6 h-6" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" style=""><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                            <svg x-show.transition.opacity="navIsOpen" class="absolute inset-0 mt-2 ml-2 w-6 h-6" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" style="display: none;"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                        </button>
                    </div>
                </div>
                <span :class="{ 'shadow-sm': navIsOpen }" class="absolute inset-0 z-20 pointer-events-none"></span>
            </div>
            <div x-show="navIsOpen" x-transition:enter="duration-150" x-transition:leave="duration-100 ease-in" class="" style="display: none;">
                <nav x-show="navIsOpen" class="absolute w-full transform origin-top shadow-sm z-10" x-transition:enter="duration-150 ease-out" x-transition:enter-start="opacity-0 -translate-y-8 scale-75" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="duration-100 ease-in" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 -translate-y-8 scale-75" style="display: none;">
                    <div class="relative p-8 bg-white docs_sidebar dark:bg-dark-600">
                        <ul>
                            <li>
                                <h2>Watt is datt denn?</h2>
                                <ul>
                                    <li><a href="/docs/8.x/releases">Release Notes</a></li>
                                    <li><a href="/docs/8.x/upgrade">Upgrade Guide</a></li>
                                    <li><a href="/docs/8.x/contributions">Contribution Guide</a></li>
                                </ul>
                            </li>
                            <li><a href="/api/8.x">API Documentation</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
