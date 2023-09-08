<!DOCTYPE html>
<html lang="en">
<?php
$pageTitle = 'Serivces - ADM Electrical';
include('includes/headers.php');
?>

<body class="bg-[#EDF2EA] min-h-screen min-w-screen">
    <?php include('includes/navbar.php') ?>
    <!-- Header -->
    <header class="text-black text-center py-8">
        <h1 class="text-4xl font-bold">Our Services</h1>
        <p class="text-lg">Discover our range of electrical services that meet your needs and exceed your
            expectations.</p>
    </header>

    <!-- Services Section -->
    <section class="container mx-auto px-4 py-12">
        <!-- Service 1 -->
        <div class="flex flex-col lg:flex-row items-center justify-between mb-16 bg-gray-300 p-4">
            <div class="lg:w-1/2 mb-6 lg:mb-0">
                <img src="service1.jpg" alt="Service 1" class="w-full rounded-lg shadow-lg">
            </div>
            <div class="lg:w-1/2 lg:pl-8">
                <h2 class="text-2xl font-semibold mb-4">Electrical Equipment Sales</h2>
                <p class="text-gray-700">Explore our wide range of high-quality electrical equipment sourced from
                    reputable manufacturers. Choose reliability and excellence.</p>
            </div>
        </div>

        <!-- Service 2 -->
        <div class="flex flex-col lg:flex-row items-center justify-between mb-16 bg-gray-300 p-4">
            <div class="lg:w-1/2 mb-6 lg:mb-0 lg:order-last">
                <img src="service2.jpg" alt="Service 2" class="w-full rounded-lg shadow-lg">
            </div>
            <div class="lg:w-1/2 lg:pr-8">
                <h2 class="text-2xl font-semibold mb-4">Professional Repairs</h2>
                <p class="text-gray-700">Count on our skilled technicians to diagnose and repair electrical systems
                    promptly. Your systems will be running smoothly again in no time.</p>
            </div>
        </div>

        <!-- Service 3 -->
        <div class="flex flex-col lg:flex-row items-center justify-between mb-16 bg-gray-300 p-4">
            <div class="lg:w-1/2 mb-6 lg:mb-0">
                <img src="service3.jpg" alt="Service 3" class="w-full rounded-lg shadow-lg">
            </div>
            <div class="lg:w-1/2 lg:pl-8">
                <h2 class="text-2xl font-semibold mb-4">Solar Electricity System Installation</h2>
                <p class="text-gray-700">Embrace the power of the sun with our custom solar electricity solutions.
                    Reduce your carbon footprint and contribute to a greener future.</p>
            </div>
        </div>
    </section>

    <!-- Call-to-Action Section -->
    <section class="bg-blue-600 text-white text-center py-12">
        <h2 class="text-3xl font-semibold mb-4">Contact Us Today</h2>
        <p class="text-lg mb-8">Get in touch with our team to discuss your electrical needs and receive a quote for
            our services.</p>
        <a href="#contact" class="btn btn-primary">Contact Now</a>
    </section>
    <?php include('includes/footer.php') ?>
</body>

</html>