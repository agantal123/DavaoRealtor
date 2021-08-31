<template>
    <Head title="Home" />
        <template v-if="$page.props.auth.user" >
             <BreezeAuthenticatedLayout>
                <BreezeDashboard>

          <div class="px-5 py-10">
              <button class="bg-transparent border border-green-500 text-green-500 hover:bg-green-500 hover:text-white text-center py-2 px-4 rounded inline-flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                  </svg>
                <span>Add new topic</span>
              </button>
          </div>

          <div class="py-4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
              <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="p-6 bg-white border-b border-gray-200 bg-gradient-to-r from-white to-yellow-200">
                  Pending Topics
                 </div>
               </div>
              </div>
           </div>

<section class="text-gray-600 body-font">
  <div class="container px-5 py-8 mx-auto">
    <div class="flex flex-wrap -m-4">
      <div class="p-4 md:w-1/2">
        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
          <div class="p-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">Marketing</h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Google Analytics</h1>
            <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat. Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing....</p>
            <div class="flex items-center flex-wrap ">
             <span class="text-blue-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>View
              </span>
              <span class="text-green-400 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                </svg>Edit
              </span>
            
              <span class="text-red-400 inline-flex items-center leading-none text-sm">
                 <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                </svg>Archive
              </span>
            </div>
          </div>
        </div>
      </div>
    <div class="p-4 md:w-1/2">
        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
          <div class="p-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">Financing and Credit</h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Escrow Accounts/Earnest Money</h1>
            <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat. Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing...</p>
            <div class="flex items-center flex-wrap ">
              <span class="text-blue-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>View
              </span>
              <span class="text-green-400 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                </svg>Edit
              </span>
              <span class="text-red-400 inline-flex items-center leading-none text-sm">
                 <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                </svg>Archive
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="pt-8">
</div>

<div class="py-8">
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
     <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200 bg-gradient-to-r from-white to-green-200">
           Published Topics
         </div>
      </div>
  </div>
</div>

<section class="text-gray-600 body-font">
  <div class="container px-5 py-8 mx-auto">
    <div class="flex flex-wrap -m-4">
      <div class="p-4 md:w-1/2">
        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
          <div class="p-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">Residential Real Estate</h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Vacation, Resort, and Second Homes</h1>
            <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat. Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.....</p>
            <div class="flex items-center flex-wrap ">
              <span class="text-blue-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>View
              </span>
            </div>
          </div>
        </div>
      </div>

    <div class="p-4 md:w-1/2">
        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
          <div class="p-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">Insurance</h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Tort Reform - Class Action</h1>
            <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat. Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.....</p>
            <div class="flex items-center flex-wrap ">
               <span class="text-blue-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>View
              </span>
             
            </div>
          </div>
        </div>
      </div>
      <div class="p-4 md:w-1/2">
        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
          <div class="p-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">Legal</h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Copyright</h1>
            <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat. Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing....</p>
            <div class="flex items-center flex-wrap ">
             <span class="text-blue-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>View
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="pt-12">
</div>

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
