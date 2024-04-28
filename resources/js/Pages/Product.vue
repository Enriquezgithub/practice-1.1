<script setup>
    import SideBarLayout from '@/Layouts/SideBarLayout.vue';
    import { Head, useForm } from '@inertiajs/vue3';

    const props = defineProps({
        product: Array,
        errors: Object
    })

    const form = useForm({
        name: '',
        description: '',
        price: ''
    })

    const submit = () => {
        form.submit('post', '/products', {
            onSuccess: ()=> {
                form.name = '',
                form.description = '',
                form.price = ''
                $('#createModal').modal('hide');
            }
        })
    }
    const delForm = useForm({
        id: null
    });
      
    const onDelete = () => {
        delForm.submit('delete', '/products/' + delForm.id, 
        {
            onSuccess: ()=> {
                $('#deleteModal').modal('hide');
            },
            preserveScroll: true,
        });
    };

    const openDeleteModal = (productId) => {
        delForm.id = productId;
    };

    defineOptions({
        layout: SideBarLayout
    })
</script>
<template>
    <Head title="Product"/>
    
    <div class="flex items-center mt-2 sticky top-16 md:top-11">
        <h1 class="text-4xl font-bold flex-1">Product</h1>
        <div class="flex gap-2">
            <button type="button" class="bg-blue-500 text-white p-2 rounded"  data-bs-toggle="modal" data-bs-target="#createModal">Create</button>
            <a href="/products/pdf" class="p-2 bg-green-500 text-white rounded">
                Export
            </a>
        </div>
    </div>

    <div
        v-if="$page.props.create.message"
        class="p-3 mt-3 text-md text-green-800 bg-green-300 rounded-lg"
        role="alert"
    >
        <span class="font-medium">
            {{ $page.props.create.message }}
        </span>
    </div>

    <div
        v-if="$page.props.delete.message"
        class="p-3 mt-3 text-md text-red-800 bg-red-300 rounded-lg"
        role="alert"
    >
        <span class="font-medium">
            {{ $page.props.delete.message }}
        </span>
    </div>

    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title text-3xl font-bold" id="exampleModalLabel">Create Product</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <form @submit.prevent="submit">
                            <div class="mb-2">
                                <label for="name" class="text-lg font-bold">Product Name</label>
                                <input type="text" v-model="form.name" class="form-control w-full rounded" id="name">
                                <div class="text-red-700" v-if="errors.name">{{ errors.name }}</div>
                            </div>
                            <div class="mb-2">
                                <label for="description" class="text-lg font-bold">Description</label>
                                <input type="text" v-model="form.description" class="form-control w-full rounded" id="description">
                                <div class="text-red-700" v-if="errors.description">{{ errors.description }}</div>
                            </div>
                            <div class="mb-2">
                                <label for="price" class="text-lg font-bold">Price</label>
                                <input type="number" v-model="form.price" step="0.5" class="form-control w-full rounded" id="price">
                                <div class="text-red-700" v-if="errors.price">{{ errors.price }}</div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <div class="border border-black mt-5 h-[60vh] overflow-y-auto md:overflow-x-hidden rounded">
        <table class="w-full">
            <thead class="border-b-2 text-lg font-bold border-gray-300">
                <tr>
                    <th class="p-2 w-[100%] md:w-[30%]">Product</th>
                    <th class="w-[30%]">Description</th>
                    <th class="">Price</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody v-for="product in product" :key="product.id" class="border-b-2 border-gray-300 mb-5">
                <tr>
                    <td class="p-2">{{ product.name }}</td>
                    <td>{{ product.description }}</td>
                    <td class="w-[20%]">{{ product.price }}</td>
                    <div class="p-2 justify-center w-full flex items-center ml-3 gap-2">
                        <button class="p-2 bg-green-500 text-white rounded">view</button>
                        <button class="p-2 bg-red-500 mr-10 rounded text-white" type="button" @click="openDeleteModal(product.id)"  data-bs-toggle="modal" data-bs-target="#deleteModal">delete</button>
                    </div>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Product</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                   Are you sure you want to delete this product?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger" @click="onDelete()">Delete</button>
                </div>
            </div>
        </div>
    </div>
            
</template>