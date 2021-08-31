<template>
    <Head title="Home" />
        <template v-if="$page.props.auth.user" >
            <div>
                <div x-data="{ sidebarOpen: false, darkMode: false }" :class="{ 'dark': darkMode }">
                    <div class="flex min-h-screen max-w-7xl mx-auto bg-white dark:bg-gray-800 font-roboto">
                        <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false"
                            class="fixed z-20 inset-0 bg-black opacity-50 transition-opacity lg:hidden">
                        </div>
                
                        <div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'"
                            class="fixed z-30 inset-y-0 left-0 w-60 transition duration-300 transform bg-white  dark:bg-gray-900 overflow-y-auto lg:translate-x-0 lg:static lg:inset-0">
                            <div class="flex items-center justify-center mt-8">
                                <!-- <div class="flex items-center">
                                    <span class="text-gray-800 dark:text-white text-2xl font-semibold">Dashboard</span>
                                </div> -->
                            </div>
                
                            <nav class="flex flex-col mt-10 px-4 text-center border-r border-gray-200">
                                    <BreezeDashboardNavLink :href="route('manageprofile')" :active="route().current('manageprofile')">
                                    Manage Profile
                                    </BreezeDashboardNavLink>
                                    <BreezeDashboardNavLink :href="route('usertopics')" :active="route().current('usertopics')">
                                    Topics
                                    </BreezeDashboardNavLink>
                                    <BreezeDashboardNavLink :href="route('userlistings')" :active="route().current('userlistings')">
                                    Listings
                                    </BreezeDashboardNavLink>
                                    <BreezeDashboardNavLink :href="route('user_supervising')" :active="route().current('user_supervising')">
                                    Supervision
                                    </BreezeDashboardNavLink>
                            </nav>
                        </div>
                
                        <div class="flex-1 flex flex-col overflow-hidden">
                            <header class="flex justify-between items-center p-6">
                                <div class="flex items-center space-x-4 lg:space-x-0">
                                    <button @click="sidebarOpen = true"
                                        class="text-gray-500 dark:text-gray-300 focus:outline-none lg:hidden">
                                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </div>
                            </header>
                
                            <main>
                            <slot />
                            </main>
                        </div>
                    </div>
                </div>
            </div>

         </template>
         <template v-else>
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 bg-white border-b border-gray-200">
                                You need to login to view dashboard!
                            </div>
                        </div>
                    </div>
                </div>
         </template>
</template>

<script>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue'
import BreezeDashboardNavLink from '@/Components/DashboardNavLink'
import { Head, Link } from '@inertiajs/inertia-vue3';

export default {
    components: {
        BreezeAuthenticatedLayout,
        BreezeDashboardNavLink,
        Head,
        Link,
    },
     props: {
        canLogin: Boolean,
        canRegister: Boolean,
    },
}
</script>
