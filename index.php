<!DOCTYPE html>
<html lang="en">

<?php
$pageTitle = 'Home - ADM Electrical';
$meta_description = "ADM Electrical is a company";
include('includes/headers.php');
?>

<body class="bg-[#EDF2EA] min-h-screen min-w-screen">
    <?php include "includes/navbar.php" ?>
    <!-- Banner -->
    <div id="banner" class="hero min-h-screen">
        <div class="hero-content text-center">
            <div class="max-w-md">
                <div class="">
                    <img src="assets/images/6.png" alt="logo" class="block mx-auto z-10">
                </div>
                <h1 class="text-5xl font-bold py-8">Innovative Solutions Delivering Power to the People</h1>
                <div class="flex items-center justify-around">
                    <button class="btn btn-info">
                        Learn More
                    </button>
                    <button class="btn btn-warning">
                        Solar Solutions
                    </button>
                </div>
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