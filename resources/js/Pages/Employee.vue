<script setup>
    import SideBarLayout from '@/Layouts/SideBarLayout.vue';
    import { Head } from '@inertiajs/vue3';
    defineOptions({
            layout: SideBarLayout
        })
</script>
<template>
    <Head title="Employee"/>
    <div>
        <h1 class="text-4xl font-bold">Employee</h1>
    </div>
</template>