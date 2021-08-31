<template>

           <header class="bg-blue-600 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <header class="bg-blue-600 dark:bg-gray-800">
                        <nav>
                            <div class="container px-6 py-4 mx-auto lg:flex lg:justify-start lg:items-center">
                                <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
                                <div class="items-center lg:flex">
                                    <div class="flex flex-col mt-4 space-y-8 lg:flex-row lg:items-center lg:mt-0 lg:space-y-0 lg:space-x-16">
                                        <!-- <a class="block font-medium text-white dark:text-gray-200 hover:text-gray-900 dark:hover:text-gray-400 hover:underline" href="#">Real Estate Topics</a> -->
                                        <BreezeMainNavLink :href="route('topics')">
                                           <a class="text-white"> Real Estate Topics </a>
                                        </BreezeMainNavLink>
                                        <BreezeMainNavLink :href="route('listings')">
                                           <a class="text-white"> Listings </a>
                                        </BreezeMainNavLink>
                                        <BreezeMainNavLink :href="route('membership')">
                                         <a class="text-white"> Membership </a>  
                                        </BreezeMainNavLink>
                                        <BreezeMainNavLink :href="route('NewsAndEvents')">
                                         <a class="text-white"> News & Events </a>
                                        </BreezeMainNavLink>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </header>
                </div>
            </header>
</template>

<script>

import { Head, Link } from '@inertiajs/inertia-vue3'
import BreezeMainNavLink from '@/Components/NavLink'

export default {
    components: {
        BreezeMainNavLink,
        Head,
        Link,
    }
}
</script>
