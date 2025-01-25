<nav class="bg-[#c2946f] shadow-lg p-4 sticky top-0 z-10">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
        <!-- Logo -->
        <div class="text-white text-2xl font-bold">
            <a href="#">MyLogo</a>
        </div>

        <!-- Desktop Menu -->
        <div class="hidden md:flex space-x-8">
            <a href="#" class="text-white hover:text-gray-200 transition">Home</a>
            <a href="#" class="text-white hover:text-gray-200 transition">About</a>
            <a href="#" class="text-white hover:text-gray-200 transition">Services</a>
            <a href="#" class="text-white hover:text-gray-200 transition">Contact</a>
        </div>

        <!-- Mobile Menu Button -->
        <div class="md:hidden flex items-center">
            <button id="hamburger" class="text-white focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden bg-[#c2946f] px-4 py-2 space-y-4 hidden">
        <a href="#" class="text-white block hover:text-gray-200 transition">Home</a>
        <a href="#" class="text-white block hover:text-gray-200 transition">About</a>
        <a href="#" class="text-white block hover:text-gray-200 transition">Services</a>
        <a href="#" class="text-white block hover:text-gray-200 transition">Contact</a>
    </div>
</nav>

<script>
    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobile-menu');

    hamburger.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>

</body>

</html>
