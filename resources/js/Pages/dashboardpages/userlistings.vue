<template>
    <Head title="Home" />
        <template v-if="$page.props.auth.user" >
             <BreezeAuthenticatedLayout>
                <BreezeDashboard>
         
   <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <h1 class="p-6 text-2xl font-semibold text-gray-800 border-b border-gray-200 dark:text-gray-100"> My Listings</h1>
        </div>
      </div>
  </div>

  <div class="px-5">
      <button class="bg-transparent border border-green-500 text-green-500 hover:bg-green-500 hover:text-white text-center py-2 px-4 rounded inline-flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
          </svg>
        <span>Add new listing</span>
      </button>
  </div>

 <section class="text-gray-600 body-font">
  <div class="container px-5 py-16 mx-auto">
    <div class="flex flex-wrap -m-4">                     
      <div class="lg:w-1/3 md:w-1/2 p-4 w-full">
      <BreezeMainNavLink :href="route('listingpage')">  
        <a class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/420x260">
        </a>
        <div class="mt-4">
          <span class="inline-block py-1 px-2 rounded bg-blue-50 text-blue-500 text-xs font-medium tracking-widest">Davao house and lot for sale</span>
          <h2 class="text-gray-900 title-font text-lg font-medium">2-Story House and lot Matina Crossing</h2>
          <p class="mt-1 text-green-500">Php 12,000,000.00</p>
        </div>
        </BreezeMainNavLink>
      </div>
      <div class="lg:w-1/3 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/421x261">
        </a>
        <div class="mt-4">
          <span class="inline-block py-1 px-2 rounded bg-blue-50 text-blue-500 text-xs font-medium tracking-widest">Davao house and lot for sale</span>
           <h2 class="text-gray-900 title-font text-lg font-medium">2-Story House and lot Matina Crossing</h2>
           <p class="mt-1 text-green-500">Php 600,000.00</p>
        </div>
      </div>
      <div class="lg:w-1/3 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/422x262">
        </a>
        <div class="mt-4">
            <span class="inline-block py-1 px-2 rounded bg-blue-50 text-blue-500 text-xs font-medium tracking-widest">Davao Condominium</span>
           <h2 class="text-gray-900 title-font text-lg font-medium">2-Story House and lot Matina Crossing</h2>
          <h2 class="text-gray-900 title-font text-lg font-medium">Neptune</h2>
          <p class="mt-1 text-green-500">Php 1,000,000.00</p>
        </div>
      </div>
      <div class="lg:w-1/3 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/423x263">
        </a>
        <div class="mt-4">
            <span class="inline-block py-1 px-2 rounded bg-blue-50 text-blue-500 text-xs font-medium tracking-widest">Davao For rent</span>
           <h2 class="text-gray-900 title-font text-lg font-medium">2-Story House and lot Matina Crossing</h2>
          <h2 class="text-gray-900 title-font text-lg font-medium">Ivory Residence</h2>
          <p class="mt-1 text-green-500">Php 25,000.00</p>
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
