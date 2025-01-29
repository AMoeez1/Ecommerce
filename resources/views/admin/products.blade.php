@extends('layouts.admin')
@section('title', 'Products - Admin')
@section('content')
    <?php
    $countries = [['label' => 'Men', 'value' => 'men'], ['label' => 'Women', 'value' => 'women'], ['label' => 'Kids', 'value' => 'kids']];
    $type = [['label' => 'Shirts', 'value' => 'sh'], ['label' => 'Tees', 'value' => 'tee'], ['label' => 'Pents', 'value' => 'p'], ['label' => 'Jackets', 'value' => 'jk'], ['label' => 'Traditional', 'value' => 'td'], ['label' => 'Formal', 'value' => 'fr'], ['label' => 'Footwear', 'value' => 'fw'], ['label' => 'Other', 'value' => 'ot']];
    ?>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6">
                <form method="get" class="signup-form">
                    <h1 class="my-2 text-2xl font-light text-blue-900/80">Manage Products</h1>
                    <x-bladewind::input name="pro_name" label="Product Name"
                        error_message="You will need to enter your Product Name" />

                    <div class="grid grid-cols-2 gap-4">
                        <x-bladewind::select name="pro_type" class="w-full col-span-1" placeholder="Product Type"
                            :data="$type" />

                        <x-bladewind::select name="pro_for" class="w-full col-span-1" placeholder="For"
                            :data="$countries" />
                    </div>
                    <x-bladewind::textarea label='Description' name="desc"></x-bladewind::textarea>

                    <div class="text-center">

                        <x-bladewind::button name="btn-save" has_spinner="true" type="secondary" can_submit="true"
                            outline='' class="mt-3">
                            Add Product
                        </x-bladewind::button>
                        <x-bladewind::button name="btn-save" has_spinner="true" color="red" can_submit="true"
                            outline='' class="mt-3">
                            Delete Product
                        </x-bladewind::button>
                        <x-bladewind::button name="btn-save" has_spinner="true" color="green" can_submit="true"
                            outline='' class="mt-3">
                            Edit Product
                        </x-bladewind::button>

                    </div>

                </form>


                <h3 class="mt-6 text-lg font-medium">Product List</h3>
                <ul class="mt-4">
                    {{-- @foreach ($products as $product) --}}
                    <li class="flex justify-between items-center py-2">
                        <span></span>
                        {{-- <form action="{{ route('admin::deleteProduct', $product->id) }}" method="POST" class="ml-2"> --}}
                        {{-- @csrf --}}
                        {{-- @method('DELETE') --}}
                        <button type="submit" class="text-red-600">Delete</button>
                        {{-- </form> --}}
                    </li>
                    {{-- @endforeach --}}
                </ul>
            </div>
        </div>
    </div>
@endsection
