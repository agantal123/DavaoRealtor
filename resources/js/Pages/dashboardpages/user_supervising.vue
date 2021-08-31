<template>
    <Head title="Home" />
        <template v-if="$page.props.auth.user" >
             <BreezeAuthenticatedLayout>
                <BreezeDashboard>
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <h1 class="p-6 text-2xl font-semibold text-gray-800 border-b border-gray-200 dark:text-gray-100"> Supervising PRC registered salesperson</h1>
                        </div>
                    </div>
                </div>

            <div class="px-5">
                <button class="bg-transparent border border-green-500 text-green-500 hover:bg-green-500 hover:text-white text-center py-2 px-4 rounded inline-flex items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                  <span>Add new supervising user</span>
                </button>
            </div>

          <section class="text-gray-600 body-font">
            <div class="container px-5 py-16 mx-auto">
              <div class="flex flex-wrap -m-2">
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                  <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                    <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/80x80">
                    <div class="flex-grow">
                      <h2 class="text-gray-900 title-font font-medium">John Doe</h2>
                      <p class="text-gray-500">Real Estate Salesperson</p>
                      <span class="text-red-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1">
                          <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                          </svg>Remove
                        </span>
                    </div>
                  </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                  <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                    <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/84x84">
                    <div class="flex-grow">
                      <h2 class="text-gray-900 title-font font-medium">Jawad Agantal</h2>
                      <p class="text-gray-500">Real Estate Salesperson</p>
                      <span class="text-red-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1">
                          <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                          </svg>Remove
                        </span>
                    </div>
                  </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                  <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                    <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/88x88">
                    <div class="flex-grow">
                      <h2 class="text-gray-900 title-font font-medium">Oskar Blinde</h2>
                      <p class="text-gray-500">Real Estate Salesperson</p>
                      <span class="text-red-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1">
                          <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                          </svg>Remove
                        </span>
                    </div>
                  </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                  <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                    <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/90x90">
                    <div class="flex-grow">
                      <h2 class="text-gray-900 title-font font-medium">John Doe</h2>
                      <p class="text-gray-500">Real Estate Salesperson</p>
                      <span class="text-red-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1">
                          <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                          </svg>Remove
                        </span>
                    </div>
                  </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                  <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                    <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/94x94">
                    <div class="flex-grow">
                      <h2 class="text-gray-900 title-font font-medium">Martin Eden</h2>
                    <p class="text-gray-500">Real Estate Salesperson</p>
                    <span class="text-red-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1">
                          <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                          </svg>Remove
                        </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

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
