<template>
    <Head title="Home" />
        <template v-if="$page.props.auth.user" >
             <BreezeAuthenticatedLayout>
                <BreezeDashboard>
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <h1 class="p-6 text-2xl font-semibold text-gray-800 border-b border-gray-200 dark:text-gray-100"> Manage members</h1>
                        </div>
                    </div>
                </div>

            <div class="px-5">
                
                 <BreezeMainNavLink :href="route('newmember')">    
                <button class="bg-transparent border border-blue-500 text-blue-500 hover:bg-blue-500 hover:text-white text-center py-2 px-4 rounded inline-flex items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                  <span>Add new member</span>
                </button>
                 </BreezeMainNavLink>
            </div>

            <!-- table for members -->
                <div class="mx-4 my-8 flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Membership type
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Membership starts
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">View</span>
                            </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10">
                                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">
                                    Jane Cooper
                                    </div>
                                    <div class="text-sm text-gray-500">
                                    jane.cooper@example.com
                                    </div>
                                </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Real Estate Broker</div>
                                <!-- <div class="text-sm text-gray-500">Optimization</div> -->
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Active
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                June 12, 2020 - 8:30 PM
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900">View</a>
                            </td>
                            </tr>
                                                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10">
                                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">
                                    Jane Cooper
                                    </div>
                                    <div class="text-sm text-gray-500">
                                    jane.cooper@example.com
                                    </div>
                                </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Real Estate Broker</div>
                                <div class="text-sm text-gray-900">Real Estate Salesperson</div>
                                <!-- <div class="text-sm text-gray-500">Optimization</div> -->
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Active
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                June 12, 2020 - 8:30 PM
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900">View</a>
                            </td>
                            </tr>

                            <!-- More people... -->
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                </div>
                <!-- end for table users -->


                </BreezeDashboard>
               <BreezeFooter />
            </BreezeAuthenticatedLayout>
         </template>
         <template v-else>
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 bg-white border-b border-gray-200">
                              Login to view
                            </div>
                        </div>
                    </div>
                </div>
         </template>
       
</template>

<script>
import BreezeDashboardContent from '@/Components/DashboardContent.vue'
import BreezeFooter from '@/Layouts/Footer.vue'
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue'
import BreezeGuestLayout from '@/Layouts/Guest.vue'
import BreezeMainNavLink from '@/Components/MainNavlink'
import BreezeDashboard from '@/Pages/Dashboard.vue'
import { Head, Link } from '@inertiajs/inertia-vue3';


export default {
    components: {
        BreezeFooter,
        BreezeDashboardContent,
        BreezeAuthenticatedLayout,
        BreezeGuestLayout,
        BreezeMainNavLink,
        BreezeDashboard,
        Head,
        Link,
    },
     props: {
        canLogin: Boolean,
        canRegister: Boolean,
    },
}
</script>
