<!DOCTYPE html>
<html lang="en">

<?php
$pageTitle = 'Taiwan Farm Produce';
include('includes/headers.php');
?>

<body class="bg-[#EDF2EA] min-h-screen min-w-screen">
    <?php include "includes/navbar.php" ?>
    <!-- Banner -->
    <div id="banner" class="h-3/4 bg-[url('assets/images/taiwan/banner.jpg')] bg-center bg-cover mb-4">
        <div class="hero-content text-center backdrop-brightness-50 min-h-[480px] min-w-full">
            <div class="flex flex-row justify-around items-center w-full">
                <div class="flex flex-col items-start text-white text-left">
                    <p class="text-lg md:text-2xl uppercase">
                        Welcome to <br><br>
                    </p>
                    <p class="text-2xl md:text-5xl">
                        Taiwan Farm Produce <br>
                    </p>
                    <p class="text-base md:text-lg text-gray-300">
                        Farm Fresh Every Time
                    </p>
                </div>
                <div>
                    <img src="assets/images/taiwan/hens.png" alt="hens" srcset="">
                </div>
            </div>
        </div>
    </div>
    <div id="ribbon" class="bg-[#EDF2EA] h-32 flex justify-center items-center p-4 text-blue-600">
        <div class="flex space-x-2 md:space-x-8">
            <div class="flex flex-col items-center">
                <i class="fas fa-apple-alt text-6xl mb-1"></i>
                <span class="text-lg">Fruit Farming</span>
            </div>
            <div class="flex flex-col items-center">
                <i class="fas fa-carrot text-6xl mb-1"></i>
                <span class="text-lg">Vegetable Farming</span>
            </div>
            <div class="flex flex-col items-center">
                <i class="fas fa-egg text-6xl mb-1"></i>
                <span class="text-lg">Grain Farming</span>
            </div>
            <div class="flex flex-col items-center">
                <i class="fa-regular fa-cow text-6xl mb-1"></i>
                <span class="text-lg">Agri Machinery</span>
            </div>
        </div>
    </div>

    <section class="md:h-screen bg-gray-100 flex items-center justify-center">
        <div class="max-w-6xl px-8 py-16 mx-auto">
            <!-- Section Heading -->
            <h2 class="text-3xl font-bold text-center mb-6">Our Services</h2>
            <!-- Subheading -->
            <p class="text-lg text-center text-gray-600 mb-12">Discover our range of electrical services that meet your
                needs and exceed your expectations.</p>

            <!-- Services Row -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <!-- Service Card 1 -->
                <div class="bg-white rounded-lg shadow-lg flex flex-col items-center p-6 h-full">
                    <img class="rounded-md w-44 h-30 mb-4" src="assets/images/equipment.jpg" alt="Service 1">
                    <h3 class="text-xl font-semibold mb-4">Electrical Equipment Sales</h3>
                    <p class="text-gray-600">Explore our wide range of high-quality electrical equipment sourced from
                        reputable manufacturers. Choose reliability and excellence.</p>
                </div>

                <!-- Service Card 2 -->
                <div class="bg-white rounded-lg shadow-lg flex flex-col items-center p-6 h-full">
                    <img class="rounded-md w-44 h-30 mb-4" src="assets/images/repairs.jpg" alt="Service 2">
                    <h3 class="text-xl font-semibold mb-4">Professional Repairs</h3>
                    <p class="text-gray-600">Count on our skilled technicians to diagnose and repair electrical systems
                        promptly. Your systems will be running smoothly again in no time.</p>
                </div>

                <!-- Service Card 3 -->
                <div class="bg-white rounded-lg shadow-lg flex flex-col items-center p-6 h-full">
                    <img class="rounded-md w-44 h-30 mb-4" src="assets/images/solar.jpg" alt="Service 3">
                    <h3 class="text-xl font-semibold mb-4">Solar Electricity System Installation</h3>
                    <p class="text-gray-600">Embrace the power of the sun with our custom solar electricity solutions.
                        We offer both commercial and residential installations.</p>
                </div>

                <!-- Service Card 4 -->
                <div class="bg-white rounded-lg shadow-lg flex flex-col items-center p-6 h-full">
                    <img class="rounded-md w-44 h-30 mb-4" src="assets/images/pulling-lines.jpg" alt="Service 4">
                    <h3 class="text-xl font-semibold mb-4">Pulling Lines</h3>
                    <p class="text-gray-600">Description for the fourth service goes here. Tailor-made for your
                        electrical needs.</p>
                </div>
            </div>
        </div>
    </section>
    <?php include "includes/footer.php" ?>
</body>

</html>