<template>
    <Head title="Home" />
        <template v-if="$page.props.auth.user" >
             <BreezeAuthenticatedLayout>
                <section class="px-4 py-20 bg-gradient-to-r from-white to-purple-200">
                <div class="grid items-center grid-cols-1 gap-4 mx-auto max-w-7xl lg:grid-cols-2 xl:grid-cols-3">
                    <div>
                    <h2 class="mb-6 text-3xl font-bold md:leading-tight md:text-4xl md:mb-4">DBRFFI News & Events</h2>
                    <div class="flex flex-col mb-2 space-x-0 space-y-2 sm:flex-row sm:space-x-2 sm:space-y-0">
                       <p class="mt-2 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro beatae error laborum ab amet sunt recusandae? Reiciendis natus perspiciatis optio.</p>
                    </div>
                    </div>
                </div>
                </section>

                 <div class="py-1">
                    <div class="container mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="px-6 py-12 bg-white border-b border-gray-200">

                            <h2 class="text-3xl font-extrabold text-gray-800 dark:text-white sm:text-3xl">
                                <span class="block">
                                    Newsroom
                                </span>
                            </h2>
                            <h3 class="text-lg font-extrabold text-gray-400 dark:text-white sm:text-lg">
                                <span class="block">
                                    Latest news from DBRFI
                                </span>
                            </h3> 

                            <section class="text-gray-600 body-font overflow-hidden">
                            <div class="container px-5 py-24 mx-auto">
                                <div class="-my-8 divide-y-2 divide-gray-100">
                                <div class="py-8 flex flex-wrap md:flex-nowrap">
                                    <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                                    <span class="font-semibold title-font text-gray-700">News</span>
                                    <span class="mt-1 text-gray-500 text-sm">12 Jun 2019</span>
                                    </div>
                                    <div class="md:flex-grow">
                                    <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">Bitters hashtag waistcoat fashion axe chia unicorn</h2>
                                    <p class="leading-relaxed">Glossier echo park pug, church-key sartorial biodiesel vexillologist pop-up snackwave ramps cornhole. Marfa 3 wolf moon party messenger bag selfies, poke vaporware kombucha lumbersexual pork belly polaroid hoodie portland craft beer.</p>
                                    <BreezeMainNavLink :href="route('newspage')">
                                    <a class="text-purple-500 inline-flex items-center mt-4">Read More
                                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                      </BreezeMainNavLink>
                                    </div>
                                </div>
                                <div class="py-8 flex flex-wrap md:flex-nowrap">
                                    <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                                    <span class="font-semibold title-font text-gray-700">News</span>
                                    <span class="mt-1 text-gray-500 text-sm">12 Jun 2019</span>
                                    </div>
                                    <div class="md:flex-grow">
                                    <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">Meditation bushwick direct trade taxidermy shaman</h2>
                                    <p class="leading-relaxed">Glossier echo park pug, church-key sartorial biodiesel vexillologist pop-up snackwave ramps cornhole. Marfa 3 wolf moon party messenger bag selfies, poke vaporware kombucha lumbersexual pork belly polaroid hoodie portland craft beer.</p>
                                    <a class="text-purple-500 inline-flex items-center mt-4">Read More
                                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                    </div>
                                </div>
                                <div class="py-8 flex flex-wrap md:flex-nowrap">
                                    <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                                    <span class="font-semibold title-font text-gray-700">News</span>
                                    <span class="text-sm text-gray-500">12 Jun 2019</span>
                                    </div>
                                    <div class="md:flex-grow">
                                    <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">Woke master cleanse drinking vinegar salvia</h2>
                                    <p class="leading-relaxed">Glossier echo park pug, church-key sartorial biodiesel vexillologist pop-up snackwave ramps cornhole. Marfa 3 wolf moon party messenger bag selfies, poke vaporware kombucha lumbersexual pork belly polaroid hoodie portland craft beer.</p>
                                    <a class="text-purple-500 inline-flex items-center mt-4">Read More
                                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </section>

                             <h2 class="text-3xl font-extrabold text-gray-800 dark:text-white sm:text-3xl">
                                <span class="block">
                                    Events
                                </span>
                            </h2>
                            <h4 class="text-lg font-extrabold text-gray-400 dark:text-white sm:text-lg">
                                <span class="block">
                                   All DBRFFI events
                                </span>
                            </h4> 


                            <section class="text-gray-600 body-font">
                            <div class="container px-5 py-24 mx-auto">
                            
                            <div class="mb-3">
                            <h4 class="text-lg font-extrabold text-gray-400 dark:text-white sm:text-lg">
                                <span class="block">
                                   Sort by: 
                                </span>
                            </h4> 
                            <select class="block w-52 text-gray-700 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500" name="animals">
                                <option value="">
                                    All events
                                </option>
                                <option value="dog">
                                    Upcoming events
                                </option>
                            </select>
                            </div>

                                <div class="flex flex-wrap -m-4">
                                <div class="p-4 lg:w-1/3">
                                    <div class="h-full bg-gray-100 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
                                    <span class="inline-block py-1 px-2 rounded bg-pink-50 text-pink-500 text-xs font-medium tracking-widest">UPCOMING EVENT</span>
                                    <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">Raclette Blueberry Nextious Level</h1>
                                    <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                                     <BreezeMainNavLink :href="route('eventpage')">
                                    <a class="text-pink-500 inline-flex items-center">Learn More
                                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                    </BreezeMainNavLink>
                                    <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                                    <span class="mt-1 text-gray-500 text-sm">September 9, 2021</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="p-4 lg:w-1/3">
                                    <div class="h-full bg-gray-100 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
                                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">&nbsp;</h2>
                                    <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">Ennui Snackwave Thundercats</h1>
                                    <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                                    <a class="text-pink-500 inline-flex items-center">Learn More
                                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                    <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                                        <span class="mt-1 text-gray-500 text-sm">January 27, 2021</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="p-4 lg:w-1/3">
                                    <div class="h-full bg-gray-100 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
                                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">&nbsp;</h2>
                                    <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">Selvage Poke Waistcoat Godard</h1>
                                    <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                                    <a class="text-pink-500 inline-flex items-center">Learn More
                                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                    <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                                       <span class="mt-1 text-gray-500 text-sm">December 1, 2020</span>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </section>


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
                    <h2 class="mb-6 text-3xl font-bold md:leading-tight md:text-4xl md:mb-4">DBRFFI News & Events</h2>
                    <div class="flex flex-col mb-2 space-x-0 space-y-2 sm:flex-row sm:space-x-2 sm:space-y-0">
                       <p class="mt-2 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro beatae error laborum ab amet sunt recusandae? Reiciendis natus perspiciatis optio.</p>
                    </div>
                    </div>
                </div>
                </section>


                 <div class="py-1">
                    <div class="container mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="px-6 py-12 bg-white border-b border-gray-200">

                            <h2 class="text-3xl font-extrabold text-gray-800 dark:text-white sm:text-3xl">
                                <span class="block">
                                    Newsroom
                                </span>
                            </h2>
                            <h3 class="text-lg font-extrabold text-gray-400 dark:text-white sm:text-lg">
                                <span class="block">
                                    Latest news from DBRFI
                                </span>
                            </h3> 

                            <section class="text-gray-600 body-font overflow-hidden">
                            <div class="container px-5 py-24 mx-auto">
                                <div class="-my-8 divide-y-2 divide-gray-100">
                                <div class="py-8 flex flex-wrap md:flex-nowrap">
                                    <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                                    <span class="font-semibold title-font text-gray-700">News</span>
                                    <span class="mt-1 text-gray-500 text-sm">12 Jun 2019</span>
                                    </div>
                                    <div class="md:flex-grow">
                                    <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">Bitters hashtag waistcoat fashion axe chia unicorn</h2>
                                    <p class="leading-relaxed">Glossier echo park pug, church-key sartorial biodiesel vexillologist pop-up snackwave ramps cornhole. Marfa 3 wolf moon party messenger bag selfies, poke vaporware kombucha lumbersexual pork belly polaroid hoodie portland craft beer.</p>
                                    <BreezeMainNavLink :href="route('newspage')">
                                    <a class="text-purple-500 inline-flex items-center mt-4">Read More
                                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                      </BreezeMainNavLink>
                                    </div>
                                </div>
                                <div class="py-8 flex flex-wrap md:flex-nowrap">
                                    <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                                    <span class="font-semibold title-font text-gray-700">News</span>
                                    <span class="mt-1 text-gray-500 text-sm">12 Jun 2019</span>
                                    </div>
                                    <div class="md:flex-grow">
                                    <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">Meditation bushwick direct trade taxidermy shaman</h2>
                                    <p class="leading-relaxed">Glossier echo park pug, church-key sartorial biodiesel vexillologist pop-up snackwave ramps cornhole. Marfa 3 wolf moon party messenger bag selfies, poke vaporware kombucha lumbersexual pork belly polaroid hoodie portland craft beer.</p>
                                    <a class="text-purple-500 inline-flex items-center mt-4">Read More
                                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                    </div>
                                </div>
                                <div class="py-8 flex flex-wrap md:flex-nowrap">
                                    <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                                    <span class="font-semibold title-font text-gray-700">News</span>
                                    <span class="text-sm text-gray-500">12 Jun 2019</span>
                                    </div>
                                    <div class="md:flex-grow">
                                    <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">Woke master cleanse drinking vinegar salvia</h2>
                                    <p class="leading-relaxed">Glossier echo park pug, church-key sartorial biodiesel vexillologist pop-up snackwave ramps cornhole. Marfa 3 wolf moon party messenger bag selfies, poke vaporware kombucha lumbersexual pork belly polaroid hoodie portland craft beer.</p>
                                    <a class="text-purple-500 inline-flex items-center mt-4">Read More
                                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </section>

                             <h2 class="text-3xl font-extrabold text-gray-800 dark:text-white sm:text-3xl">
                                <span class="block">
                                    Events
                                </span>
                            </h2>
                            <h4 class="text-lg font-extrabold text-gray-400 dark:text-white sm:text-lg">
                                <span class="block">
                                   All DBRFFI events
                                </span>
                            </h4> 


                            <section class="text-gray-600 body-font">
                            <div class="container px-5 py-24 mx-auto">
                            
                            <div class="mb-3">
                            <h4 class="text-lg font-extrabold text-gray-400 dark:text-white sm:text-lg">
                                <span class="block">
                                   Sort by: 
                                </span>
                            </h4> 
                            <select class="block w-52 text-gray-700 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500" name="animals">
                                <option value="">
                                    All events
                                </option>
                                <option value="dog">
                                    Upcoming events
                                </option>
                            </select>
                            </div>

                                <div class="flex flex-wrap -m-4">
                                <div class="p-4 lg:w-1/3">
                                    <div class="h-full bg-gray-100 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
                                    <span class="inline-block py-1 px-2 rounded bg-pink-50 text-pink-500 text-xs font-medium tracking-widest">UPCOMING EVENT</span>
                                    <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">Raclette Blueberry Nextious Level</h1>
                                    <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                                     <BreezeMainNavLink :href="route('eventpage')">
                                    <a class="text-pink-500 inline-flex items-center">Learn More
                                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                    </BreezeMainNavLink>
                                    <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                                    <span class="mt-1 text-gray-500 text-sm">September 9, 2021</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="p-4 lg:w-1/3">
                                    <div class="h-full bg-gray-100 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
                                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">&nbsp;</h2>
                                    <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">Ennui Snackwave Thundercats</h1>
                                    <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                                    <a class="text-pink-500 inline-flex items-center">Learn More
                                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                    <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                                        <span class="mt-1 text-gray-500 text-sm">January 27, 2021</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="p-4 lg:w-1/3">
                                    <div class="h-full bg-gray-100 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
                                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">&nbsp;</h2>
                                    <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">Selvage Poke Waistcoat Godard</h1>
                                    <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                                    <a class="text-pink-500 inline-flex items-center">Learn More
                                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                    <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                                       <span class="mt-1 text-gray-500 text-sm">December 1, 2020</span>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </section>


                            </div>
                        </div>
                    </div>
                 </div>

                <BreezeFooter />
            </BreezeGuestLayout>
         </template>
</template>
<style scoped>
@media screen and (min-width: 375px) {
    .custom-width {
        width: 40rem;
    }
}

@media screen and (min-width: 1300px) {
    .custom-width {
        width: 50%;
    }
}
</style>

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
