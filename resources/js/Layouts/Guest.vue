<template>
    <div>
        <div class="min-h-screen bg-white">
            <nav class="bg-white border-b border-gray-100">
                <!-- Primary Navigation Menu -->
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex">
                            <!-- Logo -->
                            <div class="flex-shrink-0 flex items-center">
                                <Link :href="route('dashboard')">
                                    <BreezeApplicationLogo class="block h-9 w-auto" />
                                </Link>
                                  <a class="mx-2 text-sm font-bold text-gray-800 dark:text-white lg:text-base hover:text-gray-700 dark:hover:text-gray-300" href="#">DBRFI</a>
                            </div>

                            <!-- Navigation Links -->
                            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                <BreezeNavLink :href="route('home')" :active="route().current('home')">
                                    Home
                                </BreezeNavLink>
                            </div>
                            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                <BreezeNavLink :href="route('aboutus')" :active="route().current('aboutus')">
                                    About Us
                                </BreezeNavLink>
                            </div>
                        </div>

                        <div class="hidden sm:flex sm:items-center sm:ml-6">
                            <!-- Settings Dropdown -->
                            <div class="ml-3 relative">
                                 <BreezeButton class="ml-4">
                                   <a :href="route('login')"> Log in </a>
                                </BreezeButton>
                            </div>
                        </div>

                        <!-- Hamburger -->
                        <div class="-mr-2 flex items-center sm:hidden">
                            <button @click="showingNavigationDropdown = ! showingNavigationDropdown" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path :class="{'hidden': showingNavigationDropdown, 'inline-flex': ! showingNavigationDropdown }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                    <path :class="{'hidden': ! showingNavigationDropdown, 'inline-flex': showingNavigationDropdown }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Responsive Navigation Menu -->
                <div :class="{'block': showingNavigationDropdown, 'hidden': ! showingNavigationDropdown}" class="sm:hidden">
                    <div class="pt-2 pb-3 ml-4 space-y-1">
                        <BreezeNavLink :href="route('home')" :active="route().current('home')">
                            Home
                        </BreezeNavLink>

                         <BreezeNavLink :href="route('aboutus')" :active="route().current('aboutus')" class="ml-4">
                             About Us
                        </BreezeNavLink>
                    </div>
                   
                    <!-- Responsive Settings Options -->
                    <div class="pt-4 pb-1 border-t border-gray-200">
                        <div class="px-4">
                             <BreezeButton>
                                  <a :href="route('login')"> Log in </a>
                            </BreezeButton>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Page Heading -->
          
            <BreezeNavbar />
            <!-- Page Content -->
            <main>
                <slot />
            </main>
        </div>
    </div>
</template>

<script>
import BreezeButton from '@/Components/Button.vue'
import BreezeApplicationLogo from '@/Components/ApplicationLogo.vue'
import BreezeDropdown from '@/Components/Dropdown.vue'
import BreezeNavbar from '@/Layouts/navbar.vue'
import BreezeNavLink from '@/Components/NavLink'
import { Link } from '@inertiajs/inertia-vue3';


export default {
    components: {
        BreezeButton,
        BreezeApplicationLogo,
        BreezeDropdown,
        BreezeNavbar,
        BreezeNavLink,
        Link,
    },

    data() {
        return {
            showingNavigationDropdown: false,
        }
    },
}
</script>
