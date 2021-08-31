<template>
    <Head title="Home" />

        <template v-if="$page.props.auth.user" >
             <BreezeAuthenticatedLayout>
                <BreezeDashboardContent />
                <BreezeFooter />
             </BreezeAuthenticatedLayout>
         </template>
         <template v-else>
             <BreezeGuestLayout>
                <BreezeDashboardContent />
                <BreezeFooter />
            </BreezeGuestLayout>
         </template>
</template>

<script>
import BreezeDashboardContent from '@/Components/DashboardContent.vue'
import BreezeFooter from '@/Layouts/Footer.vue'
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue'
import BreezeGuestLayout from '@/Layouts/Guest.vue'
import BreezeNavbar from '@/Layouts/navbar.vue'
import { Head, Link } from '@inertiajs/inertia-vue3';


export default {
    components: {
        BreezeFooter,
        BreezeDashboardContent,
        BreezeAuthenticatedLayout,
        BreezeGuestLayout,
        BreezeNavbar,
        Head,
        Link,
    },
     props: {
        canLogin: Boolean,
        canRegister: Boolean,
    },
}
</script>
