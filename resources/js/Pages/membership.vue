<template>
        <template v-if="$page.props.auth.user" >
             <BreezeAuthenticatedLayout>
                <section class="px-4 py-20 bg-gradient-to-r from-white to-purple-200">
                <div class="grid items-center grid-cols-1 gap-4 mx-auto max-w-7xl lg:grid-cols-2 xl:grid-cols-3">
                    <div>
                    <h2 class="mb-6 text-3xl font-bold md:leading-tight md:text-4xl md:mb-4">DBRFI Membership</h2>
                    <div class="flex flex-col mb-2 space-x-0 space-y-2 sm:flex-row sm:space-x-2 sm:space-y-0">
                       <p class="mt-2 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro beatae error laborum ab amet sunt recusandae? Reiciendis natus perspiciatis optio.</p>
                    </div>
                        <button class="w-full px-3 py-2 mt-6 text-xs font-medium text-white uppercase transition-colors duration-200 transform bg-indigo-600 rounded-md lg:w-auto hover:bg-indigo-500 focus:outline-none focus:bg-indigo-500">Become a member</button>
                    </div>
                </div>
                </section>
                
                <div class="py-12">
                    <div class="container mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="px-6 py-12 bg-white border-b border-gray-200">
                            
                            <section class="bg-white dark:bg-gray-800">
                                <div class="max-w-5xl px-6 py-16 mx-auto text-center">
                                    <h1 class="text-3xl font-semibold text-gray-800 dark:text-gray-100">DBRFI Members</h1>
                                    <div class="flex flex-col mt-8 space-y-3 sm:space-y-0 sm:flex-row sm:justify-center sm:-mx-2">
                                        <input id="name" type="text" class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md sm:mx-2 dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" placeholder="Find a user">
                                        <button class="px-4 py-2 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-700 rounded-md sm:mx-2 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-600">
                                            Search
                                        </button>
                                    </div>

                                   <div class="relative mt-6">
                                                <div class="absolute inset-0 flex items-center">
                                                  <div class="w-full border-t border-gray-300">
                                                    </div>
                                                </div>
                                                <div class="relative flex justify-center text-sm leading-5">
                                                    <span class="px-2 text-gray-500 bg-white">
                                                        Filter search
                                                    </span>
                                                </div>
                                    </div>
                                     <div class="flex flex-col mt-6 space-y-3 sm:space-y-0 sm:flex-row sm:justify-center sm:-mx-2">
                                          <label class="flex items-center space-x-3 mx-3">
                                            <input type="checkbox" name="checked-demo" class="form-tick appearance-none bg-white bg-check h-6 w-6 border border-gray-300 rounded-md checked:bg-blue-500 checked:border-transparent focus:outline-none"/>
                                                <span class="text-gray-700 dark:text-white font-normal">
                                                   Real Estate Broker
                                                </span>
                                            </label>
                                            
                                           <label class="flex items-center space-x-3 mb-3 mx-3">
                                            <input type="checkbox" name="checked-demo" class="form-tick appearance-none bg-white bg-check h-6 w-6 border border-gray-300 rounded-md checked:bg-blue-500 checked:border-transparent focus:outline-none"/>
                                                <span class="text-gray-700 dark:text-white font-normal">
                                                   Real Estate Salesperson
                                                </span>
                                            </label>

                                            <label class="flex items-center space-x-3 mb-3 mx-3">
                                            <input type="checkbox" name="checked-demo" class="form-tick appearance-none bg-white bg-check h-6 w-6 border border-gray-300 rounded-md checked:bg-blue-500 checked:border-transparent focus:outline-none"/>
                                                <span class="text-gray-700 dark:text-white font-normal">
                                                   Real Estate Consultant
                                                </span>
                                            </label>

                                             <label class="flex items-center space-x-3 mb-3 mx-3">
                                            <input type="checkbox" name="checked-demo" class="form-tick appearance-none bg-white bg-check h-6 w-6 border border-gray-300 rounded-md checked:bg-blue-500 checked:border-transparent focus:outline-none"/>
                                                <span class="text-gray-700 dark:text-white font-normal">
                                                   Real Estate Appraiser
                                                </span>
                                            </label>
                                     </div>

                                </div>
                            </section>
                             <div class="flex items-center justify-center">
                                 <div class="grid gap-8 mt-8 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">

                                <div class="max-w-xs mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
                                    <img class="object-cover w-full h-56" src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="avatar">
                                    
                                    <div class="py-5 text-center">
                                        <BreezeMainNavLink :href="route('memberpage')">
                                         <a href="#" class="block text-2xl font-bold text-gray-800 dark:text-white">John Doe</a>
                                        <span class="text-sm text-gray-700 dark:text-gray-200">Real Estate Broker</span>
                                        </BreezeMainNavLink>
                                    </div>
                                </div>

                                
                                <div class="max-w-xs mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
                                    <img class="object-cover w-full h-56" src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="avatar">
                                    
                                    <div class="py-5 text-center">
                                        <a href="#" class="block text-2xl font-bold text-gray-800 dark:text-white">John Doe</a>
                                        <span class="text-sm text-gray-700 dark:text-gray-200">Real estate Broker</span>
                                    </div>
                                </div>

                                <div class="max-w-xs mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
                                    <img class="object-cover w-full h-56" src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="avatar">
                                    
                                    <div class="py-5 text-center">
                                        <a href="#" class="block text-2xl font-bold text-gray-800 dark:text-white">John Doe</a>
                                        <span class="text-sm text-gray-700 dark:text-gray-200">Real estate Broker</span>
                                    </div>
                                </div>

                                <div class="max-w-xs mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
                                    <img class="object-cover w-full h-56" src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="avatar">
                                    
                                    <div class="py-5 text-center">
                                        <a href="#" class="block text-2xl font-bold text-gray-800 dark:text-white">John Doe</a>
                                        <span class="text-sm text-gray-700 dark:text-gray-200">Real estate Broker</span>
                                    </div>
                                </div>

                                <div class="max-w-xs mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
                                    <img class="object-cover w-full h-56" src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="avatar">
                                    
                                    <div class="py-5 text-center">
                                        <a href="#" class="block text-2xl font-bold text-gray-800 dark:text-white">John Doe</a>
                                        <span class="text-sm text-gray-700 dark:text-gray-200">Real Estate Broker</span>
                                    </div>
                                </div>

                                <div class="max-w-xs mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
                                    <img class="object-cover w-full h-56" src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="avatar">
                                    
                                    <div class="py-5 text-center">
                                        <a href="#" class="block text-2xl font-bold text-gray-800 dark:text-white">John Doe</a>
                                        <span class="text-sm text-gray-700 dark:text-gray-200">Real Estate Broker</span>
                                    </div>
                                </div>

                                 </div>
                             </div>

                            </div>
                        </div>
                    </div>
                </div>

                <BreezeFooter />
             </BreezeAuthenticatedLayout>
         </template>
         <template v-else>
             <BreezeGuestLayout>

                <section class="px-4 py-20 bg-gradient-to-r from-white to-purple-200">
                <div class="grid items-center grid-cols-1 gap-4 mx-auto max-w-7xl lg:grid-cols-2 xl:grid-cols-3">
                    <div>
                    <h2 class="mb-6 text-3xl font-bold md:leading-tight md:text-4xl md:mb-4">DBRFI Membership</h2>
                    <div class="flex flex-col mb-2 space-x-0 space-y-2 sm:flex-row sm:space-x-2 sm:space-y-0">
                       <p class="mt-2 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro beatae error laborum ab amet sunt recusandae? Reiciendis natus perspiciatis optio.</p>
                    </div>
                        <button class="w-full px-3 py-2 mt-6 text-xs font-medium text-white uppercase transition-colors duration-200 transform bg-indigo-600 rounded-md lg:w-auto hover:bg-indigo-500 focus:outline-none focus:bg-indigo-500">Become a member</button>
                    </div>
                </div>
                </section>

                <div class="py-12">
                    <div class="container mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="px-6 py-12 bg-white border-b border-gray-200">
                            
                            <section class="bg-white dark:bg-gray-800">
                                <div class="max-w-2xl px-6 py-16 mx-auto text-center">
                                    <h1 class="text-3xl font-semibold text-gray-800 dark:text-gray-100">DBRFI Members</h1>
                                    <div class="flex flex-col mt-8 space-y-3 sm:space-y-0 sm:flex-row sm:justify-center sm:-mx-2">
                                        <input id="name" type="text" class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md sm:mx-2 dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" placeholder="Find a user">
                                        <button class="px-4 py-2 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-700 rounded-md sm:mx-2 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-600">
                                            Search
                                        </button>
                                    </div>

                                   <div class="relative mt-6">
                                                <div class="absolute inset-0 flex items-center">
                                                  <div class="w-full border-t border-gray-300">
                                                    </div>
                                                </div>
                                                <div class="relative flex justify-center text-sm leading-5">
                                                    <span class="px-2 text-gray-500 bg-white">
                                                        Filter search
                                                    </span>
                                                </div>
                                    </div>
                                     <div class="flex flex-col mt-6 space-y-3 sm:space-y-0 sm:flex-row sm:justify-center sm:-mx-2">
                                          <label class="flex items-center space-x-3 mx-3">
                                            <input type="checkbox" name="checked-demo" class="form-tick appearance-none bg-white bg-check h-6 w-6 border border-gray-300 rounded-md checked:bg-blue-500 checked:border-transparent focus:outline-none"/>
                                                <span class="text-gray-700 dark:text-white font-normal">
                                                   Real Estate Broker
                                                </span>
                                            </label>
                                            
                                           <label class="flex items-center space-x-3 mb-3 mx-3">
                                            <input type="checkbox" name="checked-demo" class="form-tick appearance-none bg-white bg-check h-6 w-6 border border-gray-300 rounded-md checked:bg-blue-500 checked:border-transparent focus:outline-none"/>
                                                <span class="text-gray-700 dark:text-white font-normal">
                                                   Real Estate Salesperson
                                                </span>
                                            </label>

                                            <label class="flex items-center space-x-3 mb-3 mx-3">
                                            <input type="checkbox" name="checked-demo" class="form-tick appearance-none bg-white bg-check h-6 w-6 border border-gray-300 rounded-md checked:bg-blue-500 checked:border-transparent focus:outline-none"/>
                                                <span class="text-gray-700 dark:text-white font-normal">
                                                   Real Estate Consultant
                                                </span>
                                            </label>

                                             <label class="flex items-center space-x-3 mb-3 mx-3">
                                            <input type="checkbox" name="checked-demo" class="form-tick appearance-none bg-white bg-check h-6 w-6 border border-gray-300 rounded-md checked:bg-blue-500 checked:border-transparent focus:outline-none"/>
                                                <span class="text-gray-700 dark:text-white font-normal">
                                                    Real Estate Appraiser
                                                </span>
                                            </label>
                                     </div>

                                </div>
                            </section>    
                             <div class="flex items-center justify-center">
                                 <div class="grid gap-8 mt-8 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">

                                <div class="max-w-xs mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
                                    <img class="object-cover w-full h-56" src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="avatar">
                                    
                                    <div class="py-5 text-center">
                                        <BreezeMainNavLink :href="route('memberpage')">
                                         <a href="#" class="block text-2xl font-bold text-gray-800 dark:text-white">John Doe</a>
                                        <span class="text-sm text-gray-700 dark:text-gray-200">Real Estate Broker</span>
                                        </BreezeMainNavLink>
                                    </div>
                                </div>
                                <div class="max-w-xs mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
                                    <img class="object-cover w-full h-56" src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="avatar">
                                    <div class="py-5 text-center">
                                        <a href="#" class="block text-2xl font-bold text-gray-800 dark:text-white">John Doe</a>
                                        <span class="text-sm text-gray-700 dark:text-gray-200">Real estate Broker</span>
                                    </div>
                                </div>

                                <div class="max-w-xs mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
                                    <img class="object-cover w-full h-56" src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="avatar">
                                    
                                    <div class="py-5 text-center">
                                        <a href="#" class="block text-2xl font-bold text-gray-800 dark:text-white">John Doe</a>
                                        <span class="text-sm text-gray-700 dark:text-gray-200">Real estate Broker</span>
                                    </div>
                                </div>

                                <div class="max-w-xs mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
                                    <img class="object-cover w-full h-56" src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="avatar">
                                    
                                    <div class="py-5 text-center">
                                        <a href="#" class="block text-2xl font-bold text-gray-800 dark:text-white">John Doe</a>
                                        <span class="text-sm text-gray-700 dark:text-gray-200">Real estate Broker</span>
                                    </div>
                                </div>

                                <div class="max-w-xs mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
                                    <img class="object-cover w-full h-56" src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="avatar">
                                    
                                    <div class="py-5 text-center">
                                        <a href="#" class="block text-2xl font-bold text-gray-800 dark:text-white">John Doe</a>
                                        <span class="text-sm text-gray-700 dark:text-gray-200">Real Estate Broker</span>
                                    </div>
                                </div>

                                <div class="max-w-xs mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
                                    <img class="object-cover w-full h-56" src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="avatar">
                                    
                                    <div class="py-5 text-center">
                                        <a href="#" class="block text-2xl font-bold text-gray-800 dark:text-white">John Doe</a>
                                        <span class="text-sm text-gray-700 dark:text-gray-200">Real Estate Broker</span>
                                    </div>
                                </div>

                                 </div>
                             </div>

                            </div>
                        </div>
                    </div>
                </div>
                
                <BreezeFooter />
            </BreezeGuestLayout>
         </template>
</template>
<script>
import BreezeFooter from '@/Layouts/Footer.vue'
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue'
import BreezeGuestLayout from '@/Layouts/Guest.vue'
import BreezeMainNavLink from '@/Components/MainNavlink'
import { Head, Link } from '@inertiajs/inertia-vue3';

export default {
    components: {
        BreezeFooter,
        BreezeAuthenticatedLayout,
        BreezeGuestLayout,
        BreezeMainNavLink,
        Head,
        Link,
    },
     props: {
        canLogin: Boolean,
        canRegister: Boolean,
    },
}
</script>
