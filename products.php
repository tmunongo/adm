<!DOCTYPE html>
<html lang="en">
<?php
$pageTitle = 'Products - ADM Electrical';
include('includes/headers.php');
?>

<body class="bg-[#EDF2EA] min-h-screen min-w-screen">
    <?php include('includes/navbar.php') ?>
    <!-- Header -->
    <header class="text-black text-center py-8">
        <h1 class="text-4xl font-bold">Our Products</h1>
        <p class="text-lg">Explore our wide range of electrical products to meet your needs.</p>
    </header>

    <!-- Products Section -->
    <section class="container mx-auto px-4 py-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Product 1 -->
        <div class="   rounded-lg  ">
            <div class="aspect-w-2 aspect-h-3">
                <img src="assets/images/product1.jpg" alt="Product 1" class="object-cover rounded-t-lg">
            </div>
            <div class="p-4">
                <h2 class="text-xl font-semibold mb-2">Product 1</h2>
                <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis libero nec
                    orci aliquet gravida eget id dolor.</p>
            </div>
        </div>

        <!-- Product 2 -->
        <div class="   rounded-lg  ">
            <div class="aspect-w-2 aspect-h-4">
                <img src="assets/images/product2.jpg" alt="Product 2" class="object-cover rounded-t-lg">
            </div>
            <div class="p-4">
                <h2 class="text-xl font-semibold mb-2">Product 2</h2>
                <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis libero nec
                    orci aliquet gravida eget id dolor.</p>
            </div>
        </div>

        <!-- Product 3 -->
        <div class="   rounded-lg  ">
            <div class="aspect-w-2 aspect-h-2">
                <img src="assets/images/product3.jpg" alt="Product 3" class="object-cover rounded-t-lg">
            </div>
            <div class="p-4">
                <h2 class="text-xl font-semibold mb-2">Product 3</h2>
                <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis libero nec
                    orci aliquet gravida eget id dolor.</p>
            </div>
        </div>

        <!-- Product 4 -->
        <div class="   rounded-lg  ">
            <div class="aspect-w-3 aspect-h-4">
                <img src="assets/images/product4.jpg" alt="Product 4" class="object-cover rounded-t-lg">
            </div>
            <div class="p-4">
                <h2 class="text-xl font-semibold mb-2">Product 4</h2>
                <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis libero nec
                    orci aliquet gravida eget id dolor.</p>
            </div>
        </div>

        <!-- Product 5 -->
        <div class=" rounded-lg  ">
            <div class="aspect-w-3 aspect-h-5">
                <img src="assets/images/product5.jpg" alt="Product 5" class="object-cover rounded-t-lg">
            </div>
            <div class="p-4">
                <h2 class="text-xl font-semibold mb-2">Product 5</h2>
                <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis libero nec
                    orci aliquet gravida eget id dolor.</p>
            </div>
        </div>

        <!-- Product 6 -->
        <div class=" rounded-lg  ">
            <div class="aspect-w-2 aspect-h-3">
                <img src="assets/images/product6.jpg" alt="Product 6" class="object-cover rounded-t-lg">
            </div>
            <div class="p-4">
                <h2 class="text-xl font-semibold mb-2">Product 6</h2>
                <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis libero nec
                    orci aliquet gravida eget id dolor.</p>
            </div>
        </div>
    </section>


    <!-- Call-to-Action Section -->
    <section class="bg-red-500 text-white text-center py-12">
        <h2 class="text-3xl font-semibold mb-4">Can't Find What You're Looking For?</h2>
        <p class="text-lg mb-8">We are here to assist you. If you have specific requirements or need further
            information about our products, please feel free to get in touch with our team.</p>
        <a href="#contact" class="btn btn-warning">Contact Us</a>
    </section>
    <?php include('includes/footer.php') ?>

</body>

</html>