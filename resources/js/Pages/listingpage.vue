<template>
    <Head title="Home" />
       <template v-if="$page.props.auth.user" >
         <BreezeAuthenticatedLayout>

<section class="text-gray-600 body-font overflow-hidden">
  <div class="container px-5 py-24 mx-auto">
    <div class="lg:w-4/5 mx-auto flex flex-wrap ">
      <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="https://dummyimage.com/400x400">
      <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
         <span class="inline-block py-1 px-2 rounded bg-blue-50 text-blue-500 text-xs font-medium tracking-widest">Davao house and lot for sale</span>
        <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">2-Story House and Lot for sale</h1>
       
        <div class="w-full mb-5">
             <a href="#" class="mx-auto text-blue-500 text-s font-small inline-flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
            </svg>
            <p class="font-semibold">Falcon Street, Damosa Fairlane Subdivision, Mamay Road, Davao City </p>
            </a>
        </div>

       <div>
        <p class="font-bold text-3x1">Key Feature</p>
         <p>4-Bedroom </p>
         <p>2 Toilet and Bathroom</p>
         <p>Lot Size: 126 sq.m.</p>
         <p>Floor Area: 100 sq.m.</p>
       </div>
       <div class="my-3">
        <p class="font-bold text-3x1">Details</p>
         <p>Brand-new, unused house</p>
         <p>Inside a community of beautiful upscale homes</p>
         <p>Flood-free area</p>
         <p>Well-built 2-storey residential houses</p>
         <p>Close-to-town, fully developed high-end subdivision</p>
        </div>
        <div class="w-full my-5">
            <a href="#" class="mx-auto text-blue-500 text-s font-small inline-flex items-center">
            <p>view more details </p>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 13l-7 7-7-7m14-8l-7 7-7-7" />
            </svg>
            </a>
        </div>

        <div class="flex">
          <span class="title-font font-medium text-2xl text-gray-900">Selling price: <b>₱ 12,000,000.00 </b></span>
        
        </div>
      </div>
    </div>
  </div>
</section>

<section class="text-gray-600 body-font">
  <div class="container px-5 py-16 mx-auto flex flex-col border-t border-gray-300">
    <div class="lg:w-5/12 mx-auto">
       <div class="flex items-center">
            <h1 class="mx-auto font-bold text-gray-900 text-2xl title-font font-medium">Contact Broker </h1>
      </div> 
      <div class="flex flex-col sm:flex-row mt-10">
        <div class="sm:w-1/2 text-center sm:pr-8 sm:py-8">
          <div class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-gray-200 text-gray-400">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
              <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
              <circle cx="12" cy="7" r="4"></circle>
            </svg>
          </div>
          <div class="flex flex-col items-center text-center justify-center">
            <h2 class="font-bold font-medium title-font mt-4 text-gray-900 text-lg">John Doe</h2>
            <div class="w-12 h-1 bg-indigo-500 rounded mt-2 mb-4"></div>
            <p class="text-base">Real Estate Broker</p>
          </div>
        </div>
        <div class="sm:w-1/2 sm:pl-8 sm:py-8 sm:border-l border-gray-200 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left">
            
            <div class="mx-5">
             <a href="#" class="mx-auto text-s font-small items-center">
             <p class="font-semibold"> Email: john_doe@gmail.com</p>
            </a>

             <a href="#" class="mx-auto text-s font-small items-center">
             <p class="font-semibold"> Contact: 09123456789</p>
            </a>
           <div class="mt-3">
            <a href="#" class="mx-auto text-blue-500 text-s font-small inline-flex items-center">
            <p>View Profile </p>
            </a>
           </div>

            </div>
        </div>
      </div>
    </div>
  </div>
</section>

        <BreezeFooter />
     </BreezeAuthenticatedLayout>
</template>
<template v-else>
    <BreezeGuestLayout>

<section class="text-gray-600 body-font overflow-hidden">
  <div class="container px-5 py-24 mx-auto">
    <div class="lg:w-4/5 mx-auto flex flex-wrap ">
      <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="https://dummyimage.com/400x400">
      <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
         <span class="inline-block py-1 px-2 rounded bg-blue-50 text-blue-500 text-xs font-medium tracking-widest">Davao house and lot for sale</span>
        <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">2-Story House and Lot for sale</h1>
       
        <div class="w-full mb-5">
             <a href="#" class="mx-auto text-blue-500 text-s font-small inline-flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
            </svg>
            <p class="font-semibold">Falcon Street, Damosa Fairlane Subdivision, Mamay Road, Davao City </p>
            </a>
        </div>
       <div>
        <p class="font-bold text-3x1">Key Feature</p>
         <p>4-Bedroom </p>
         <p>2 Toilet and Bathroom</p>
         <p>Lot Size: 126 sq.m.</p>
         <p>Floor Area: 100 sq.m.</p>
       </div>
       <div class="my-3">
        <p class="font-bold text-3x1">Details</p>
         <p>Brand-new, unused house</p>
         <p>Inside a community of beautiful upscale homes</p>
         <p>Flood-free area</p>
         <p>Well-built 2-storey residential houses</p>
         <p>Close-to-town, fully developed high-end subdivision</p>
        </div>
        <div class="w-full my-5">
            <a href="#" class="mx-auto text-blue-500 text-s font-small inline-flex items-center">
            <p>view more details </p>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 13l-7 7-7-7m14-8l-7 7-7-7" />
            </svg>
            </a>
        </div>

        <div class="flex">
          <span class="title-font font-medium text-2xl text-gray-900">Selling price: <b>₱ 12,000,000.00 </b></span>
          <!-- <button class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Contact Broker</button> -->
        </div>
      </div>
    </div>
  </div>
</section>

<section class="text-gray-600 body-font">
  <div class="container px-5 py-16 mx-auto flex flex-col border-t border-gray-300">
    <div class="lg:w-5/12 mx-auto">
       <div class="flex items-center">
            <h1 class="mx-auto font-bold text-gray-900 text-2xl title-font font-medium">Contact Broker </h1>
      </div> 
      <div class="flex flex-col sm:flex-row mt-10">
        <div class="sm:w-1/2 text-center sm:pr-8 sm:py-8">
          <div class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-gray-200 text-gray-400">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
              <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
              <circle cx="12" cy="7" r="4"></circle>
            </svg>
          </div>
          <div class="flex flex-col items-center text-center justify-center">
            <h2 class="font-bold font-medium title-font mt-4 text-gray-900 text-lg">John Doe</h2>
            <div class="w-12 h-1 bg-indigo-500 rounded mt-2 mb-4"></div>
            <p class="text-base">Real Estate Broker</p>
          </div>
        </div>
        <div class="sm:w-1/2 sm:pl-8 sm:py-8 sm:border-l border-gray-200 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left">
            
            <div class="mx-5">
             <a href="#" class="mx-auto text-s font-small inline-flex items-center">
             <p class="font-semibold"> Email: john_doe@gmail.com</p>
            </a>

             <a href="#" class="mx-auto text-s font-small inline-flex items-center">
             <p class="font-semibold"> Contact: 09123456789</p>
            </a>
             <div class="mt-3">
            <a href="#" class="mx-auto text-blue-500 text-s font-small inline-flex items-center">
            <p>View Profile </p>
            </a>
           </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>

      <BreezeFooter />
    </BreezeGuestLayout>
  </template>
       
       


</template>

<script>
import BreezeDashboardContent from '@/Components/DashboardContent.vue'
import BreezeFooter from '@/Layouts/Footer.vue'
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue'
import BreezeGuestLayout from '@/Layouts/Guest.vue'
import BreezeMainNavLink from '@/Components/MainNavlink'
import { Head, Link } from '@inertiajs/inertia-vue3';


export default {
    components: {
        BreezeFooter,
        BreezeDashboardContent,
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
