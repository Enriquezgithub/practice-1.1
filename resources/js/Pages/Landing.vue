<script setup>
    import SideBarLayout from '@/Layouts/SideBarLayout.vue';
    import { Head } from '@inertiajs/vue3';

    const props = defineProps({
        product: Array
    })
  
    defineOptions({
        layout: SideBarLayout
    })
</script>
<template>
    <Head title="Dashboard"/>
    <div class="md:grid grid-cols-1 md:grid-cols-3 md:gap-4" >  
        <div class="my-5 border rounded border-black w-full h-[20vh]">
            <div class="p-2 flex flex-col h-full">
                <h1 class="text-3xl flex-1">Total Product</h1>
                <span class="text-3xl mb-5 text-red-400">0</span>
            </div>
        </div>

        <div class="my-5 border rounded border-black w-full h-[20vh]">
            <div class="p-2 flex flex-col h-full">
                <h1 class="text-3xl flex-1">Total Employee</h1>
                <span class="text-3xl mb-5 text-red-400">0</span>
            </div>
        </div>

        <div class="my-5 border rounded border-black w-full h-[20vh]">
            <div class="p-2 flex flex-col h-full">
                <h1 class="text-3xl flex-1">User Online</h1>
                <span class="text-3xl mb-5 text-red-400">0</span>
            </div>
        </div>
    </div>
</template>