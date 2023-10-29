<!DOCTYPE html>
<html lang="en">

<?php
$pageTitle = 'Home - ADM Electrical';
$meta_description = "ADM Electrical is a company";
include('includes/headers.php');
include_once '../admin/Classes/Company.php';

$CompanyObject = new Company();
$comp_id = "ADMEL";

?>

<?php
// get company details by unique name
if (isset($comp_id)) {
    $company = $CompanyObject->getCompanyDetailsByUniqueName($comp_id);
}
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
                <?php
                $services = $CompanyObject->getServicesByCompanyID($company['id']);
                foreach ($services as $key => $value) {
                    # code...
                ?>
                    <!-- Service Card 1 -->
                    <div class="bg-white rounded-lg shadow-lg flex flex-col items-center p-6 h-full">
                        <img class="rounded-md w-44 h-30 mb-4" src="<?= $value['image'] ?>" alt="Service 1">
                        <h3 class="text-xl font-semibold mb-4"><?= $value['name'] ?></h3>
                        <p class="text-gray-600"><?= $value['description'] ?></p>
                    </div>

                <?php
                }
                ?>
            </div>
        </div>
    </section>
    <?php include "includes/footer.php" ?>
</body>

</html>