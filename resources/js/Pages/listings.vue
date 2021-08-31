<template>
  <template v-if="$page.props.auth.user" >
        <BreezeAuthenticatedLayout>

<section class="px-4 py-20 bg-gradient-to-r from-white to-purple-200">
   <div class="grid items-center grid-cols-1 gap-4 mx-auto max-w-7xl lg:grid-cols-2 xl:grid-cols-3">
     <div>
       <h2 class="mb-6 text-3xl font-bold md:leading-tight md:text-4xl md:mb-4">DBRFI Listing Services</h2>
      </div>
   </div>
</section>

<section class="text-gray-700 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -m-4 text-center">
      <div class="p-4 md:w-1/3 sm:w-1/2 w-full">
        <div class="border-2 border-gray-600 px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110">
          
          <svg class="text-indigo-500 w-12 h-12 mb-3 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
            </svg>
          <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-100">Davao Condo</h1>
          
        </div>
      </div>
      <div class="p-4 md:w-1/3 sm:w-1/2 w-full">
        <div class="border-2 border-gray-600 px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110">
          <svg class="text-indigo-500 w-12 h-12 mb-3 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
         <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-100">Davao House & Lot For Sale</h1>
          
        </div>
      </div>
      <div class="p-4 md:w-1/3 sm:w-1/2 w-full">
        <div class="border-2 border-gray-600 px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110">
          <svg class="text-indigo-500 w-12 h-12 mb-3 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
            </svg>
          <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-100">Davao For Rent</h1>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="max-w-2xl px-6 py-8 mx-auto text-center">
    <h1 class="text-3xl font-semibold text-gray-800 dark:text-gray-100">Featured Listings</h1>
</div>

 <section class="text-gray-600 body-font">
  <div class="container px-5 py-16 mx-auto">
    <div class="flex flex-wrap -m-4">                              
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
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
       
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/421x261">
        </a>
        <div class="mt-4">
          <span class="inline-block py-1 px-2 rounded bg-blue-50 text-blue-500 text-xs font-medium tracking-widest">Davao house and lot for sale</span>
           <h2 class="text-gray-900 title-font text-lg font-medium">2-Story House and lot Matina Crossing</h2>
           <p class="mt-1 text-green-500">Php 600,000.00</p>
        </div>
      </div>
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
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
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
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
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/424x264">
        </a>
        <div class="mt-4">
            <span class="inline-block py-1 px-2 rounded bg-blue-50 text-blue-500 text-xs font-medium tracking-widest">Davao For rent</span>
           <h2 class="text-gray-900 title-font text-lg font-medium">2-Story House and lot Matina Crossing</h2>
          <h2 class="text-gray-900 title-font text-lg font-medium">The Catalyzer</h2>
          <p class="mt-1 text-green-500">Php 50,000.00</p>
        </div>
      </div>
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/425x265">
        </a>
        <div class="mt-4">
            <span class="inline-block py-1 px-2 rounded bg-blue-50 text-blue-500 text-xs font-medium tracking-widest">Davao Condominium</span>
          <h2 class="text-gray-900 title-font text-lg font-medium">2-Story House and lot Matina Crossing</h2>
          <h2 class="text-gray-900 title-font text-lg font-medium">Shooting Stars</h2>
          <p class="mt-1 text-green-500">Php 12,000,000.00</p>
        </div>
      </div>
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/427x267">
        </a>
        <div class="mt-4">
            <span class="inline-block py-1 px-2 rounded bg-blue-50 text-blue-500 text-xs font-medium tracking-widest">Davao house and lot for sale</span>
           <h2 class="text-gray-900 title-font text-lg font-medium">2-Story House and lot Matina Crossing</h2>
          <h2 class="text-gray-900 title-font text-lg font-medium">Neptune</h2>
         <p class="mt-1 text-green-500">Php 1,000,000.00</p>
        </div>
      </div>
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/428x268">
        </a>
        <div class="mt-4">
            <span class="inline-block py-1 px-2 rounded bg-blue-50 text-blue-500 text-xs font-medium tracking-widest">Davao Condominium</span>
          <h2 class="text-gray-900 title-font text-lg font-medium">2-Story House and lot Matina Crossing</h2>
          <h2 class="text-gray-900 title-font text-lg font-medium">The 400 Blows</h2>
          <p class="mt-1 text-green-500">Php 9,000,000.00</p>
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
<section class="px-4 py-20 bg-gradient-to-r from-white to-purple-200">
   <div class="grid items-center grid-cols-1 gap-4 mx-auto max-w-7xl lg:grid-cols-2 xl:grid-cols-3">
     <div>
       <h2 class="mb-6 text-3xl font-bold md:leading-tight md:text-4xl md:mb-4">DBRFI Listing Services</h2>
      </div>
   </div>
</section>
                
<section class="text-gray-700 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -m-4 text-center">
      <div class="p-4 md:w-1/3 sm:w-1/2 w-full">
        <div class="border-2 border-gray-600 px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110">
          
          <svg class="text-indigo-500 w-12 h-12 mb-3 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
            </svg>
          <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-100">Davao Condo</h1>
          
        </div>
      </div>
      <div class="p-4 md:w-1/3 sm:w-1/2 w-full">
        <div class="border-2 border-gray-600 px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110">
          <svg class="text-indigo-500 w-12 h-12 mb-3 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
         <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-100">Davao House & Lot For Sale</h1>
          
        </div>
      </div>
      <div class="p-4 md:w-1/3 sm:w-1/2 w-full">
        <div class="border-2 border-gray-600 px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110">
          <svg class="text-indigo-500 w-12 h-12 mb-3 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
            </svg>
          <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-100">Davao For Rent</h1>
          
        </div>
      </div>
    </div>
  </div>
</section>

<div class="max-w-2xl px-6 py-8 mx-auto text-center">
    <h1 class="text-3xl font-semibold text-gray-800 dark:text-gray-100">Featured Listings</h1>
</div>

 <section class="text-gray-600 body-font">
  <div class="container px-5 py-16 mx-auto">
    <div class="flex flex-wrap -m-4">                              
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
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
       
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/421x261">
        </a>
        <div class="mt-4">
          <span class="inline-block py-1 px-2 rounded bg-blue-50 text-blue-500 text-xs font-medium tracking-widest">Davao house and lot for sale</span>
           <h2 class="text-gray-900 title-font text-lg font-medium">2-Story House and lot Matina Crossing</h2>
           <p class="mt-1 text-green-500">Php 600,000.00</p>
        </div>
      </div>
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
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
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
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
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/424x264">
        </a>
        <div class="mt-4">
            <span class="inline-block py-1 px-2 rounded bg-blue-50 text-blue-500 text-xs font-medium tracking-widest">Davao For rent</span>
           <h2 class="text-gray-900 title-font text-lg font-medium">2-Story House and lot Matina Crossing</h2>
          <h2 class="text-gray-900 title-font text-lg font-medium">The Catalyzer</h2>
          <p class="mt-1 text-green-500">Php 50,000.00</p>
        </div>
      </div>
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/425x265">
        </a>
        <div class="mt-4">
            <span class="inline-block py-1 px-2 rounded bg-blue-50 text-blue-500 text-xs font-medium tracking-widest">Davao Condominium</span>
          <h2 class="text-gray-900 title-font text-lg font-medium">2-Story House and lot Matina Crossing</h2>
          <h2 class="text-gray-900 title-font text-lg font-medium">Shooting Stars</h2>
          <p class="mt-1 text-green-500">Php 12,000,000.00</p>
        </div>
      </div>
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/427x267">
        </a>
        <div class="mt-4">
            <span class="inline-block py-1 px-2 rounded bg-blue-50 text-blue-500 text-xs font-medium tracking-widest">Davao house and lot for sale</span>
           <h2 class="text-gray-900 title-font text-lg font-medium">2-Story House and lot Matina Crossing</h2>
          <h2 class="text-gray-900 title-font text-lg font-medium">Neptune</h2>
         <p class="mt-1 text-green-500">Php 1,000,000.00</p>
        </div>
      </div>
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/428x268">
        </a>
        <div class="mt-4">
            <span class="inline-block py-1 px-2 rounded bg-blue-50 text-blue-500 text-xs font-medium tracking-widest">Davao Condominium</span>
          <h2 class="text-gray-900 title-font text-lg font-medium">2-Story House and lot Matina Crossing</h2>
          <h2 class="text-gray-900 title-font text-lg font-medium">The 400 Blows</h2>
          <p class="mt-1 text-green-500">Php 9,000,000.00</p>
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
