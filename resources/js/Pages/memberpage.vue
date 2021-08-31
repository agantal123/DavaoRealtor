<template>
  <template v-if="$page.props.auth.user" >
    <BreezeAuthenticatedLayout>
        
<div class="py-12">
  <div class="container mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="px-6 py-8 bg-white border-b border-gray-200">
          <section class="bg-white dark:bg-gray-800">
           <div class="max-w-2xl px-6 mx-auto text-center">
             <h1 class="text-3xl font-semibold text-gray-800 dark:text-gray-100">DBRFFI Members</h1>
           </div>
         </section>
       </div>
     </div>
   </div>
</div>

<section class="text-gray-600 body-font overflow-hidden">
  <div class="container px-5 py-24 mx-auto border-b border-gray-200">
    <div class="lg:w-4/5 mx-auto flex flex-wrap">
      <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60">
      <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0 ">
      
        <h1 class="text-gray-900 text-4xl title-font font-medium mb-1"><b>John Doe</b></h1>
        <h2 class="text-sm title-font text-gray-500 tracking-widest">PRC REGISTERED BROKER</h2>
    
        <div class="border-t-2 border-gray-300 border-opacity-100 my-6">
        <nav class="flex flex-wrap list-none -mb-1 mt-3">
        <li class="lg:w-1/2 w-full">
         <p>PRC Reg No.:<b> 092323 </b></p>
        </li>
        <li class="lg:w-1/2 w-full">
        <p>Expires on:<b> Sep 8, 2021 </b></p>
        </li>
        <li class="lg:w-1/2 w-full">
          <p>DHSUD Reg No.: <b> XI-B-01/2020-041 </b></p>
        </li>
        <li class="lg:w-1/2 w-full">
         <p>Expires on:<b> Aug 6, 2020 </b></p>
        </li>
         <li class="lg:w-1/2 w-full">
           <p>PTR No.: <b> 2321443 </b></p>
        </li>
        <li class="lg:w-1/2 w-full">
         <p>PTR Dated:<b> Jan 2, 2019 </b></p>
        </li>
     </nav>
        <p>Realty name: <b> Lorem ipsum </b></p>
        <p>Website: <b> www.website.com </b></p>
        <p>Business address: <b> Matina, Davao City, Davao del Sur </b></p>
        <p>Contact number: <b> 09123456789 </b></p>
        <p>Email address: <b> john_doe@email.com </b></p>
        </div>

        <div class="flex my-6">
    <div>   
      <div class="flex items-center mt-1 space-x-3">
        <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-400">
          <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
            <path
              d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z"
            ></path>
          </svg>
        </a>
        <a href="https://www.twitter.com/@jagantal" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-400">
          <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
            <path
              d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z"
            ></path>
          </svg>  
        </a>
        <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-400">
          <svg viewBox="0 0 30 30" fill="currentColor" class="h-6">
            <circle cx="15" cy="15" r="4"></circle>
            <path
              d="M19.999,3h-10C6.14,3,3,6.141,3,10.001v10C3,23.86,6.141,27,10.001,27h10C23.86,27,27,23.859,27,19.999v-10   C27,6.14,23.859,3,19.999,3z M15,21c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6S18.309,21,15,21z M22,9c-0.552,0-1-0.448-1-1   c0-0.552,0.448-1,1-1s1,0.448,1,1C23,8.552,22.552,9,22,9z"
            ></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
            <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
            <circle cx="4" cy="4" r="2" stroke="none"></circle>
          </svg>
        </a>
      </div>
     <p class="leading-relaxed mt-6">Fam locavore kickstarter distillery. Mixtape chillwave tumeric sriracha taximy chia microdosing tilde DIY. XOXO fam indxgo juiceramps cornhole raw denim forage brooklyn. Everyday carry +1 seitan poutine tumeric. Gastropub blue bottle austin listicle pour-over, neutra jean shorts keytar banjo tattooed umami cardigan.</p> 
    </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
     <p class="text-lg text-gray-900 md:text-lg">
        Supervising  <b>6</b> PRC Registered Salesperson
      </p> 
    </div>
    <div class="grid gap-10 row-gap-8 mx-auto sm:row-gap-10 lg:max-w-screen-lg sm:grid-cols-2 lg:grid-cols-3">
      <div class="flex">
        <img class="object-cover w-20 h-20 mr-4 rounded-full shadow" src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=3&amp;h=750&amp;w=1260" alt="Person" />
        <div class="flex flex-col justify-center">
          <p class="text-lg font-bold">Oliver Aguilerra</p>
          <p class="text-sm text-gray-800">Real Estate Salesperson</p>
        </div>
      </div>
      <div class="flex">
        <img class="object-cover w-20 h-20 mr-4 rounded-full shadow" src="https://images.pexels.com/photos/2381069/pexels-photo-2381069.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" alt="Person" />
        <div class="flex flex-col justify-center">
          <p class="text-lg font-bold">Marta Clermont</p>
          <p class="text-sm text-gray-800">Real Estate Salesperson</p>
        </div>
      </div>
      <div class="flex">
        <img class="object-cover w-20 h-20 mr-4 rounded-full shadow" src="https://images.pexels.com/photos/2379004/pexels-photo-2379004.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" alt="Person" />
        <div class="flex flex-col justify-center">
          <p class="text-lg font-bold">Anthony Geek</p>
          <p class="text-sm text-gray-800">Real Estate Salesperson</p>
        </div>
      </div>
      <div class="flex">
        <img class="object-cover w-20 h-20 mr-4 rounded-full shadow" src="https://images.pexels.com/photos/3747435/pexels-photo-3747435.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" alt="Person" />
        <div class="flex flex-col justify-center">
          <p class="text-lg font-bold">Alice Melbourne</p>
          <p class="text-sm text-gray-800">Real Estate Salesperson</p>
        </div>
      </div>
      <div class="flex">
        <img class="object-cover w-20 h-20 mr-4 rounded-full shadow" src="https://images.pexels.com/photos/3785077/pexels-photo-3785077.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;w=500" alt="Person" />
        <div class="flex flex-col justify-center">
          <p class="text-lg font-bold">Martin Garix</p>
          <p class="text-sm text-gray-800">Real Estate Salesperson</p>
        </div>
      </div>
      <div class="flex">
        <img class="object-cover w-20 h-20 mr-4 rounded-full shadow" src="https://images.pexels.com/photos/3931603/pexels-photo-3931603.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" alt="Person" />
        <div class="flex flex-col justify-center">
          <p class="text-lg font-bold">Andrew Larkin</p>
          <p class="text-sm text-gray-800">Real Estate Salesperson</p>
        </div>
      </div>
    </div>
  </div>

    <BreezeFooter />
  </BreezeAuthenticatedLayout>
</template>
<template v-else>
 <BreezeGuestLayout>

<div class="py-12">
  <div class="container mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="px-6 py-8 bg-white border-b border-gray-200">
          <section class="bg-white dark:bg-gray-800">
           <div class="max-w-2xl px-6 mx-auto text-center">
             <h1 class="text-3xl font-semibold text-gray-800 dark:text-gray-100">DBRFFI Members</h1>
           </div>
         </section>
       </div>
     </div>
   </div>
</div>

<section class="text-gray-600 body-font overflow-hidden">
  <div class="container px-5 py-24 mx-auto border-b border-gray-200">
    <div class="lg:w-4/5 mx-auto flex flex-wrap">
      <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60">
      <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0 ">
      
        <h1 class="text-gray-900 text-4xl title-font font-medium mb-1"><b>John Doe</b></h1>
        <h2 class="text-sm title-font text-gray-500 tracking-widest">PRC REGISTERED BROKER</h2>
    
        <div class="border-t-2 border-gray-300 border-opacity-100 my-6">
        <nav class="flex flex-wrap list-none -mb-1 mt-3">
        <li class="lg:w-1/2 w-full">
         <p>PRC Reg No.:<b> 092323 </b></p>
        </li>
        <li class="lg:w-1/2 w-full">
        <p>Expires on:<b> Sep 8, 2021 </b></p>
        </li>
        <li class="lg:w-1/2 w-full">
          <p>DHSUD Reg No.: <b> XI-B-01/2020-041 </b></p>
        </li>
        <li class="lg:w-1/2 w-full">
         <p>Expires on:<b> Aug 6, 2020 </b></p>
        </li>
         <li class="lg:w-1/2 w-full">
           <p>PTR No.: <b> 2321443 </b></p>
        </li>
        <li class="lg:w-1/2 w-full">
         <p>PTR Dated:<b> Jan 2, 2019 </b></p>
        </li>
     </nav>
        <p>Realty name: <b> Lorem ipsum </b></p>
        <p>Website: <b> www.website.com </b></p>
        <p>Business address: <b> Matina, Davao City, Davao del Sur </b></p>
        <p>Contact number: <b> 09123456789 </b></p>
        <p>Email address: <b> john_doe@email.com </b></p>
        </div>
        <div class="flex my-6">
    <div>   
      <div class="flex items-center mt-1 space-x-3">
        <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-400">
          <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
            <path
              d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z"
            ></path>
          </svg>
        </a>
        <a href="https://www.twitter.com/@jagantal" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-400">
          <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
            <path
              d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z"
            ></path>
          </svg>  
        </a>
        <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-400">
          <svg viewBox="0 0 30 30" fill="currentColor" class="h-6">
            <circle cx="15" cy="15" r="4"></circle>
            <path
              d="M19.999,3h-10C6.14,3,3,6.141,3,10.001v10C3,23.86,6.141,27,10.001,27h10C23.86,27,27,23.859,27,19.999v-10   C27,6.14,23.859,3,19.999,3z M15,21c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6S18.309,21,15,21z M22,9c-0.552,0-1-0.448-1-1   c0-0.552,0.448-1,1-1s1,0.448,1,1C23,8.552,22.552,9,22,9z"
            ></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
            <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
            <circle cx="4" cy="4" r="2" stroke="none"></circle>
          </svg>
        </a>
      </div>
     <p class="leading-relaxed mt-6">Fam locavore kickstarter distillery. Mixtape chillwave tumeric sriracha taximy chia microdosing tilde DIY. XOXO fam indxgo juiceramps cornhole raw denim forage brooklyn. Everyday carry +1 seitan poutine tumeric. Gastropub blue bottle austin listicle pour-over, neutra jean shorts keytar banjo tattooed umami cardigan.</p> 
    </div>
        </div>
      </div>
    </div>
  </div>
</section>


<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
     <p class="text-lg text-gray-900 md:text-lg">
        Supervising  <b>6</b> PRC Registered Salesperson
      </p> 
    </div>
    <div class="grid gap-10 row-gap-8 mx-auto sm:row-gap-10 lg:max-w-screen-lg sm:grid-cols-2 lg:grid-cols-3">
      <div class="flex">
        <img class="object-cover w-20 h-20 mr-4 rounded-full shadow" src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=3&amp;h=750&amp;w=1260" alt="Person" />
        <div class="flex flex-col justify-center">
          <p class="text-lg font-bold">Oliver Aguilerra</p>
          <p class="text-sm text-gray-800">Real Estate Salesperson</p>
        </div>
      </div>
      <div class="flex">
        <img class="object-cover w-20 h-20 mr-4 rounded-full shadow" src="https://images.pexels.com/photos/2381069/pexels-photo-2381069.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" alt="Person" />
        <div class="flex flex-col justify-center">
          <p class="text-lg font-bold">Marta Clermont</p>
          <p class="text-sm text-gray-800">Real Estate Salesperson</p>
        </div>
      </div>
      <div class="flex">
        <img class="object-cover w-20 h-20 mr-4 rounded-full shadow" src="https://images.pexels.com/photos/2379004/pexels-photo-2379004.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" alt="Person" />
        <div class="flex flex-col justify-center">
          <p class="text-lg font-bold">Anthony Geek</p>
          <p class="text-sm text-gray-800">Real Estate Salesperson</p>
        </div>
      </div>
      <div class="flex">
        <img class="object-cover w-20 h-20 mr-4 rounded-full shadow" src="https://images.pexels.com/photos/3747435/pexels-photo-3747435.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" alt="Person" />
        <div class="flex flex-col justify-center">
          <p class="text-lg font-bold">Alice Melbourne</p>
          <p class="text-sm text-gray-800">Real Estate Salesperson</p>
        </div>
      </div>
      <div class="flex">
        <img class="object-cover w-20 h-20 mr-4 rounded-full shadow" src="https://images.pexels.com/photos/3785077/pexels-photo-3785077.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;w=500" alt="Person" />
        <div class="flex flex-col justify-center">
          <p class="text-lg font-bold">Martin Garix</p>
          <p class="text-sm text-gray-800">Real Estate Salesperson</p>
        </div>
      </div>
      <div class="flex">
        <img class="object-cover w-20 h-20 mr-4 rounded-full shadow" src="https://images.pexels.com/photos/3931603/pexels-photo-3931603.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" alt="Person" />
        <div class="flex flex-col justify-center">
          <p class="text-lg font-bold">Andrew Larkin</p>
          <p class="text-sm text-gray-800">Real Estate Salesperson</p>
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
