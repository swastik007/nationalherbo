<?php
echo '
<div class="bg-purple-600 text-white py-3">
    <div class="max-w-7xl mx-auto flex justify-center space-x-8 text-sm font-semibold tracking-wider uppercase">
        <div class="group relative">
            <a href="#" class="hover:underline">Brands</a>
            <!-- Dropdown -->
            <div class="absolute hidden group-hover:block bg-white text-black mt-2 shadow-lg rounded">
                <a href="#" class="block px-4 py-2 hover:bg-gray-200">Brand A</a>
                <a href="#" class="block px-4 py-2 hover:bg-gray-200">Brand B</a>
            </div>
        </div>

        <div class="group relative">
            <a href="#" class="hover:underline">Skin</a>
            <div class="absolute hidden group-hover:block bg-white text-black mt-2 shadow-lg rounded">
                <a href="#" class="block px-4 py-2 hover:bg-gray-200">Moisturizer</a>
                <a href="#" class="block px-4 py-2 hover:bg-gray-200">Sunscreen</a>
            </div>
        </div>

        <div class="group relative">
            <a href="#" class="hover:underline">Hair</a>
            <div class="absolute hidden group-hover:block bg-white text-black mt-2 shadow-lg rounded">
                <a href="#" class="block px-4 py-2 hover:bg-gray-200">Shampoo</a>
                <a href="#" class="block px-4 py-2 hover:bg-gray-200">Hair Oil</a>
            </div>
        </div>

        <div>
            <a href="#" class="hover:underline">Makeup</a>
        </div>
        <div>
            <a href="#" class="hover:underline">Dermat Tested</a>
        </div>
        <div>
            <a href="#" class="hover:underline">Summer Essentials</a>
        </div>
    </div>
</div>
';
?>
