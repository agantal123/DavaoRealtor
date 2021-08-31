<template>
  <Head title="Home" />
  <template v-if="$page.props.auth.user" >
    <BreezeAuthenticatedLayout>
      <BreezeDashboard>
    
<div class="m-5">  
  <div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1"> 
      <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
      </div>
    </div>
    <div class="mt-5 md:mt-0 md:col-span-2">
      <form action="#" method="POST">
        <div class="shadow overflow-hidden sm:rounded-md">
          <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">
            <div class="col-span-6">
              <label class="block text-sm font-medium text-gray-700">
                Profile Photo
              </label>
              <div class="mt-1 flex items-center">
                <span class="inline-block h-10 w-10 rounded-full overflow-hidden bg-gray-100 object-cover">
                  <img alt="profil" src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"/>
                </span>
                <button type="button" class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                  Upload Photo
                </button>
              </div>
            </div>
              <div class="col-span-6 sm:col-span-3">
                <label for="first-name" class="block text-sm font-medium text-gray-700">First name</label>
                <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="Jawad">
              </div>
              
              <div class="col-span-6 sm:col-span-3">
                <label for="first-name" class="block text-sm font-medium text-gray-700">Middle initial</label>
                <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="M.">
              </div>

             <div class="col-span-6">
                <label for="last-name" class="block text-sm font-medium text-gray-700">Last name</label>
                <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="Agantal">
              </div>

            <div class="col-span-6 sm:col-span-3">
                <label for="first-name" class="block text-sm font-medium text-gray-700">Email address</label>
                <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="agantal789@gmail.com">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="last-name" class="block text-sm font-medium text-gray-700">Contact number</label>
                <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="09979846150">
              </div>
              <div class="col-span-6">
                <label for="street-address" class="block text-sm font-medium text-gray-700">Business address</label>
                <input type="text" name="street-address" id="street-address" autocomplete="street-address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="Matina, Davao City, Davao del Sur">
              </div>
            <div class="col-span-6">
              <label for="about" class="block text-sm font-medium text-gray-700">
                Bio
              </label>
              <div class="mt-1">
                <textarea id="about" name="about" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="Type here..." value="Fam locavore kickstarter distillery. Mixtape chillwave tumeric sriracha taximy chia microdosing tilde DIY. XOXO fam indxgo juiceramps cornhole raw denim forage brooklyn. "></textarea>
              </div>
              <p class="mt-2 text-sm text-gray-500">
                Brief description for your profile.
              </p>
            </div>
          </div>
         </div>
        </div>
      </form>
    </div>
  </div>

<!-- border start -->
  <div class="hidden sm:block" aria-hidden="true">
  <div class="py-5">
    <div class="border-t border-gray-200"></div>
  </div>
</div>
<!-- border end -->

<div class="mt-10 sm:mt-0">
  <div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1">
      <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium leading-6 text-gray-900">Real Estate Information</h3>
      </div>
    </div>
    <div class="mt-5 md:mt-0 md:col-span-2">
      <form action="#" method="POST">
        <div class="shadow overflow-hidden sm:rounded-md">
          <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">
                
            <div class="col-span-6">
                 <label for="about" class="block text-sm font-bold text-gray-800">
                Real Estate membership type
              </label>
            </div> 
                   <div class="col-span-6 sm:col-span-3">
                    <label class="inline-flex items-center">
                        <input type="checkbox" class="form-checkbox" checked>
                        <span class="ml-2 text-sm font-medium text-gray-700">Real Estate Broker</span>
                    </label>
                    </div>

                     <div class="col-span-6 sm:col-span-3">
                    <label class="inline-flex items-center">
                        <input type="checkbox" class="form-checkbox" checked>
                        <span class="ml-2 text-sm font-medium text-gray-700">Real Estate Salesperson</span>
                    </label>
                    </div>

                     <div class="col-span-6 sm:col-span-3">
                    <label class="inline-flex items-center">
                        <input type="checkbox" class="form-checkbox">
                        <span class="ml-2 text-sm font-medium text-gray-700">Real Estate Consultant</span>
                    </label>
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                    <label class="inline-flex items-center">
                        <input type="checkbox" class="form-checkbox">
                        <span class="ml-2 text-sm font-medium text-gray-700">Real Estate Appraiser</span>
                    </label>
                    </div>
              
             <div class="col-span-6 mt-5">
            </div> 

             <div class="col-span-6 sm:col-span-3">
                <label for="first-name" class="block text-sm font-medium text-gray-700">PRC Reg No.</label>
                <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="092323">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="prc_date" class="block text-sm font-medium text-gray-700">Expires on</label>
                <input type="date" name="prc_date" id="prc_date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="2021-11-18">
              </div>
              
              <div class="col-span-6 sm:col-span-3">
                <label for="first-name" class="block text-sm font-medium text-gray-700">DHSUD Reg No.</label>
                <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="XI-B-01/2020-041">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="prc_date" class="block text-sm font-medium text-gray-700">Expires on</label>
                <input type="date" name="prc_date" id="prc_date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="2020-02-01">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="first-name" class="block text-sm font-medium text-gray-700">PTR No.</label>
                <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="2321443">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="prc_date" class="block text-sm font-medium text-gray-700">Expires on</label>
                <input type="date" name="prc_date" id="prc_date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="2023-08-21">
              </div>

            <div class="col-span-6 sm:col-span-3">
                <label for="last-name" class="block text-sm font-medium text-gray-700">Realty name</label>
                <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="Jawad Agantal">
            </div>

            <div class="col-span-6 sm:col-span-3">
            </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- border start -->
  <div class="hidden sm:block" aria-hidden="true">
  <div class="py-5">
    <div class="border-t border-gray-200"></div>
  </div>
</div>
<!-- border end -->


<div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1"> 
      <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium leading-6 text-gray-900">Social Media Accounts</h3>
      </div>
    </div>
    <div class="mt-5 md:mt-0 md:col-span-2">

      <form action="#" method="POST">
        <div class="shadow overflow-hidden sm:rounded-md">
          <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">
            <div class="col-span-6 sm:col-span-3">
              <label for="company-website" class="block text-sm font-medium text-gray-700">
                  Website
                </label>
               <div class="mt-1 flex rounded-md shadow-sm">
                  <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                    http://
                  </span>
                  <input type="text" name="company-website" id="company-website" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="www.example.com" value="www.jawadagantal.com">
                </div>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="company-website" class="block text-sm font-medium text-gray-700">
                  Facebook Account
                </label>
               <div class="mt-1 flex rounded-md shadow-sm">
                  <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                    <svg viewBox="0 0 24 24" fill="currentColor" class="h-5 text-blue-800">
                        <path
                        d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z"
                        ></path>
                    </svg>
                  </span>
                  <input type="text" name="company-website" id="company-website" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="www.facebook.com/username" value="www.facebook.com/agantal123">
                </div>
            </div>
             <div class="col-span-6 sm:col-span-3">
              <label for="company-website" class="block text-sm font-medium text-gray-600">
                  Twitter Account
                </label>
               <div class="mt-1 flex rounded-md shadow-sm">
                  <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                   <svg viewBox="0 0 24 24" fill="currentColor" class="h-5 text-blue-600">
                    <path
                    d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z"
                    ></path>
                </svg>
                  </span>
                  <input type="text" name="company-website" id="company-website" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="www.twitter.com/@username" value="www.twitter.com/@jawadagantal">
                </div>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="company-website" class="block text-sm font-medium text-gray-700">
                  Instagram Account
                </label>
               <div class="mt-1 flex rounded-md shadow-sm">
                  <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                    <svg viewBox="0 0 30 30" fill="currentColor" class="h-6">
                        <circle cx="15" cy="15" r="4"></circle>
                        <path
                        d="M19.999,3h-10C6.14,3,3,6.141,3,10.001v10C3,23.86,6.141,27,10.001,27h10C23.86,27,27,23.859,27,19.999v-10   C27,6.14,23.859,3,19.999,3z M15,21c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6S18.309,21,15,21z M22,9c-0.552,0-1-0.448-1-1   c0-0.552,0.448-1,1-1s1,0.448,1,1C23,8.552,22.552,9,22,9z"
                        ></path>
                    </svg>
                  </span>
                  <input type="text" name="company-website" id="company-website" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="www.instagram.com/username/" value="www.instagram.com/@agantal123">
                </div>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="company-website" class="block text-sm font-medium text-gray-700">
                  Linkedin Acccount
                </label>
               <div class="mt-1 flex rounded-md shadow-sm">
                  <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                    <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                        <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                        <circle cx="4" cy="4" r="2" stroke="none"></circle>
                    </svg>
                  </span>
                  <input type="text" name="company-website" id="company-website" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="www.linkedin.com/in/name-00000">
                </div>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="company-website" class="block text-sm font-medium text-gray-700">
                  Youtube Account
                </label>
               <div class="mt-1 flex rounded-md shadow-sm">
                  <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="1.25rem" height="1.25rem" viewBox="0 0 350 350" xml:space="preserve">
                    <g id="icon" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(-1.9444444444444287 -1.9444444444444287) scale(3.89 3.89)" >
                        <path d="M 88.119 23.338 c -1.035 -3.872 -4.085 -6.922 -7.957 -7.957 C 73.144 13.5 45 13.5 45 13.5 s -28.144 0 -35.162 1.881 c -3.872 1.035 -6.922 4.085 -7.957 7.957 C 0 30.356 0 45 0 45 s 0 14.644 1.881 21.662 c 1.035 3.872 4.085 6.922 7.957 7.957 C 16.856 76.5 45 76.5 45 76.5 s 28.144 0 35.162 -1.881 c 3.872 -1.035 6.922 -4.085 7.957 -7.957 C 90 59.644 90 45 90 45 S 90 30.356 88.119 23.338 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        <polygon points="36,58.5 59.38,45 36,31.5 " style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                    </g>
                    </svg>
                  </span>
                  <input type="text" name="company-website" id="company-website" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="www.youtube.com/channel/channelname">
                </div>
            </div>
          </div>
         </div>

            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              Save Changes
            </button>
          </div>
        </div>
      </form>

    </div>
  </div>


<!-- border start -->
  <div class="hidden sm:block" aria-hidden="true">
  <div class="py-5">
    <div class="border-t border-gray-200"></div>
  </div>
</div>
<!-- border end -->

<div class="mt-10 sm:mt-0">
  <div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1">
      <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium leading-6 text-gray-900">Change Password</h3>
      </div>
    </div>
    <div class="mt-5 md:mt-0 md:col-span-2">
      <form action="#" method="POST">
        <div class="shadow overflow-hidden sm:rounded-md">
          <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6">
                <label for="first-name" class="block text-sm font-medium text-gray-700">Current password</label>
                <input type="password" name="first-name" id="first-name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Enter your old password">
              </div>

              <div class="col-span-6">
                <label for="prc_date" class="block text-sm font-medium text-gray-700">New password</label>
                <input type="password" name="prc_date" id="prc_date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Enter your new password">
              </div>
              
               <div class="col-span-6">
                <label for="first-name" class="block text-sm font-medium text-gray-700">Confirm new password</label>
                <input type="password" name="first-name" id="first-name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Re-enter your new password">
              </div>
            </div>
          </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              Change Password
            </button>
          </div>
          </div>
        </form>
       </div>
      </div>
    </div>
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
import BreezeDashboard from '@/Pages/Dashboard.vue'
import BreezeMainNavLink from '@/Components/MainNavlink'
import { Head, Link } from '@inertiajs/inertia-vue3';


export default {
    components: {
        BreezeFooter,
        BreezeDashboard,
        BreezeDashboardContent,
        BreezeAuthenticatedLayout,
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
