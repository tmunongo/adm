<!DOCTYPE html>
<html lang="en">
<?php
$pageTitle = 'Contact Us - ADM Electrical';
include('includes/headers.php');
?>

<body class="bg-[#EDF2EA] min-h-screen min-w-screen">
    <?php include('includes/navbar.php') ?>
    <!-- Contact Form Section -->
    <section class="container mx-auto px-4 py-12">
        <div class="max-w-md mx-auto bg-white rounded-lg shadow-lg p-8">
            <h1 class="text-2xl md:text-4xl">
                Contact Us
            </h1>
            <h3 class="text-xl md:text-lg">
                Leave us a message and we'll get back to you!
            </h3>
            <form action="#" method="POST">
                <div class="mb-6">
                    <label for="name" class="block font-semibold text-gray-700">Name</label>
                    <input type="text" id="name" name="name" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" required>
                </div>
                <div class="mb-6">
                    <label for="email" class="block font-semibold text-gray-700">Email</label>
                    <input type="email" id="email" name="email" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" required>
                </div>
                <div class="mb-6">
                    <label for="message" class="block font-semibold text-gray-700">Message</label>
                    <textarea id="message" name="message" class="w-full p-2 border border-gray-300 rounded-lg resize-none h-32 focus:outline-none focus:border-blue-500" required></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Send Message</button>
                </div>
            </form>
        </div>
    </section>

    <!-- Contact Info Section -->
    <section class="container mx-auto px-4 py-12">
        <div class="max-w-md mx-auto bg-white rounded-lg shadow-lg p-8 text-center">
            <h2 class="text-2xl font-semibold mb-4">Contact Information</h2>
            <p class="text-gray-700">Have any questions or need assistance? Reach out to us via the information below:</p>
            <ul class="list-none mt-6">
                <li><span class="font-semibold">Email:</span> info@admelectrical.co.zw</li>
                <li><span class="font-semibold">Phone:</span> +263772330969</li>
                <li><span class="font-semibold">Address:</span> 1234 Main Street, City, State, ZIP</li>
            </ul>
        </div>
    </section>
    <?php include('includes/footer.php') ?>

</body>

</html>