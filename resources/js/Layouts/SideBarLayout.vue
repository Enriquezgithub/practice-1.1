<script setup>
    import {Link} from '@inertiajs/vue3'
    import MainHead from '@/Components/MainHead.vue'
</script>
<template>
    <!-- Main Wrapper <sidebar>-->
    <div class="w-full flex min-h-[100vh]">
        <div class="bg-gray-800 w-[20%] text-white ">
            <div class="flex flex-col w-full h-[100vh] items-center p-3">
                <div class="mb-11">
                    <a href="/dashboard"><h1>Logo/Brand</h1></a>
                </div>
                <nav class="mt-8 flex-1 w-full flex flex-col gap-7 text-center">
                    <div class="w-full flex items-center justify-center gap-2 p-2" :class="{' transition ease-linear duration-200 bg-blue-600 p-2 w-full rounded text-white  font-bold text-xl' : $page.component == 'Landing'}">
                        <a href="/dashboard" class="group relative inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[20px] h-[20px]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.712 4.33a9.027 9.027 0 0 1 1.652 1.306c.51.51.944 1.064 1.306 1.652M16.712 4.33l-3.448 4.138m3.448-4.138a9.014 9.014 0 0 0-9.424 0M19.67 7.288l-4.138 3.448m4.138-3.448a9.014 9.014 0 0 1 0 9.424m-4.138-5.976a3.736 3.736 0 0 0-.88-1.388 3.737 3.737 0 0 0-1.388-.88m2.268 2.268a3.765 3.765 0 0 1 0 2.528m-2.268-4.796a3.765 3.765 0 0 0-2.528 0m4.796 4.796c-.181.506-.475.982-.88 1.388a3.736 3.736 0 0 1-1.388.88m2.268-2.268 4.138 3.448m0 0a9.027 9.027 0 0 1-1.306 1.652c-.51.51-1.064.944-1.652 1.306m0 0-3.448-4.138m3.448 4.138a9.014 9.014 0 0 1-9.424 0m5.976-4.138a3.765 3.765 0 0 1-2.528 0m0 0a3.736 3.736 0 0 1-1.388-.88 3.737 3.737 0 0 1-.88-1.388m2.268 2.268L7.288 19.67m0 0a9.024 9.024 0 0 1-1.652-1.306 9.027 9.027 0 0 1-1.306-1.652m0 0 4.138-3.448M4.33 16.712a9.014 9.014 0 0 1 0-9.424m4.138 5.976a3.765 3.765 0 0 1 0-2.528m0 0c.181-.506.475-.982.88-1.388a3.736 3.736 0 0 1 1.388-.88m-2.268 2.268L4.33 7.288m6.406 1.18L7.288 4.33m0 0a9.024 9.024 0 0 0-1.652 1.306A9.025 9.025 0 0 0 4.33 7.288" />
                                </svg>

                                <span
                                class="absolute z-50 hidden group-hover:flex md:group-hover:hidden -top-1 -right-3 translate-x-full w-32 p-2 bg-gray-700 rounded-lg text-center text-white text-sm before:content-[''] before:absolute before:top-1/2  before:right-[100%] before:-translate-y-1/2 before:border-8 before:border-y-transparent before:border-l-transparent before:border-r-gray-700">
                                Dashboard</span>
                        </a>
                        <Link href="/dashboard" class="hidden md:block">Dashboard</Link>
                    </div>
                    <div  class="w-full flex items-center justify-center gap-2 p-2" :class="{' transition ease-linear duration-200 bg-blue-600 p-2 w-full rounded text-white  font-bold text-xl' : $page.component == 'Product'}">
                        <a href="/products" class="group relative inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[20px] h-[20px]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75Z" />
                            </svg>

                            <span
                                class="absolute z-50 hidden group-hover:flex md:group-hover:hidden -top-1 -right-3 translate-x-full w-32 p-2 bg-gray-700 rounded-lg text-center text-white text-sm before:content-[''] before:absolute before:top-1/2  before:right-[100%] before:-translate-y-1/2 before:border-8 before:border-y-transparent before:border-l-transparent before:border-r-gray-700">
                                Product</span>
                        </a>
                        <Link href="/products" class="hidden md:block">Product</Link>
                    </div>
                    <div  class="w-full flex items-center justify-center gap-2 p-2" :class="{' transition ease-linear duration-200 bg-blue-600 p-2 w-full rounded text-white  font-bold text-xl' : $page.component == 'Employee'}">
                        <a href="/employees" class="group relative inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"  class="w-[20px] h-[20px]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>

                            <span
                                class="absolute z-50 hidden group-hover:flex md:group-hover:hidden -top-1 -right-3 translate-x-full w-32 p-2 bg-gray-700 rounded-lg text-center text-white text-sm before:content-[''] before:absolute before:top-1/2  before:right-[100%] before:-translate-y-1/2 before:border-8 before:border-y-transparent before:border-l-transparent before:border-r-gray-700">
                                Employee</span>
                        </a>
                        <Link href="/employees" class="hidden md:block">Employee</Link>
                    </div>
                </nav>
                <div>
                    <a href="/login" class="md:flex items-center gap-1 group relative inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                        </svg>

                        <span
                                class="absolute z-50 hidden group-hover:flex md:group-hover:hidden -top-1 -right-3 translate-x-full w-32 p-2 bg-gray-700 rounded-lg text-center text-white text-sm before:content-[''] before:absolute before:top-1/2  before:right-[100%] before:-translate-y-1/2 before:border-8 before:border-y-transparent before:border-l-transparent before:border-r-gray-700">
                                Log Out</span>
                        <h1 class="md:block hidden">Log Out</h1>
                    </a>
                </div>
            </div>
        </div>
        <!-- Content <slot> -->
        <div class="w-full overflow-auto h-[100vh]">
            <div class="md:mb-11 mb-2 z-50">
                <MainHead />
            </div>
            <div class="p-2 flex flex-col h-[100vh] md:overflow-auto z-0 ">
                <div class="flex-1 mt-6 mx-7 relative">
                    <slot />
                </div>
                <div class="p-3 text-center">   
                    <span>Copyright @!2024</span>
                </div>
            </div>
        </div>
    </div>
</template>