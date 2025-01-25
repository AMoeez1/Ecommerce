@extends('layouts.pages')
@section('content')
<style>
    .bg-image {
        background-image: url({{asset('storage/banner.png')}});
        background-repeat: no-repeat;
        background-size: 20%;
        background-size: contain; 
        background-position: right center;
        width: 100%;
        height: 30rem;
        /* background-size: 100% 100%; */
    }
    .select {
  -webkit-user-select: none; /* Safari */
  -ms-user-select: none; /* IE 10 and IE 11 */
  user-select: none; /* Standard syntax */
}

</style>
<section class="bg-image p-8 bg-[#c2946f]  grid grid-cols-2">
    <div class="col-span-1 content-center text-center">
        <h1 class="text-6xl font-bold mb-4 text-white select">Welcome to our Ecommerce Store</h1>
        <p class="text-xl mb-8">Discover the best deals on your favorite products</p>
        <a href="#" class="bg-white hover:bg-[#b17f57] hover:text-white text-gray-800 font-bold px-8 py-3 rounded-lg duration-300 ease-in">Shop Now</a>
    </div>
    {{-- <img src="{{asset('storage/banner.png')}}" class="col-span-1 w-[550px]" alt="banner-image"> --}}
</section>


<section class="bg-gray-50 h-[100vh] grid grid-cols-1 md:grid-cols-3 gap-8 p-8">
    
    <div class="bg-card p-4 rounded-lg">
        <img src="https://placehold.co/300" alt="Product 1" class="w-full h-48 object-cover rounded-lg" />
        <h2 class="text-lg font-semibold my-2">Product 1</h2>
        <p class="text-sm text-muted-foreground">Description of Product 1</p>
        <span class="text-primary mt-2">$19.99</span>
        <button class="bg-primary hover:bg-primary/80 text-primary-foreground px-4 py-2 rounded-lg mt-4">Add to Cart</button>
    </div>

    
    <div class="bg-card p-4 rounded-lg">
        <img src="https://placehold.co/300" alt="Product 2" class="w-full h-48 object-cover rounded-lg" />
        <h2 class="text-lg font-semibold my-2">Product 2</h2>
        <p class="text-sm text-muted-foreground">Description of Product 2</p>
        <span class="text-primary mt-2">$24.99</span>
        <button class="bg-primary hover:bg-primary/80 text-primary-foreground px-4 py-2 rounded-lg mt-4">Add to Cart</button>
    </div>

    
    <div class="bg-card p-4 rounded-lg">
        <img src="https://placehold.co/300" alt="Product 3" class="w-full h-48 object-cover rounded-lg" />
        <h2 class="text-lg font-semibold my-2">Product 3</h2>
        <p class="text-sm text-muted-foreground">Description of Product 3</p>
        <span class="text-primary mt-2">$29.99</span>
        <button class="bg-primary hover:bg-primary/80 text-primary-foreground px-4 py-2 rounded-lg mt-4">Add to Cart</button>
    </div>
</section>
@endsection