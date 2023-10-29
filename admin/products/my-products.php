<?php
$pageTitle = "My Products";
include_once '../../includes/headers.php';
?>

<body class="bg-gray-100 font-sans flex">
    <?php include_once '../includes/sidebar.php'; ?>

    <!-- Left Column: Table of Existing Products -->
    <div class="w-2/3 p-4">
        <h2 class="text-2xl font-semibold mb-4">Existing Products</h2>
        <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead class="bg-indigo-600 text-white">
                <tr>
                    <th class="py-2 px-4">Product Name</th>
                    <th class="py-2 px-4">Product Description</th>
                    <th class="py-2 px-4">Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Replace this with PHP code to fetch and display existing products -->
                <tr>
                    <td class="py-2 px-4">Product 1</td>
                    <td class="py-2 px-4">Description of Product 1</td>
                    <td class="py-2 px-4">
                        <button class="bg-blue-500 text-white px-2 py-1 rounded hover:bg-blue-700">Edit</button>
                        <button class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-700">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td class="py-2 px-4">Product 2</td>
                    <td class="py-2 px-4">Description of Product 2</td>
                    <td class="py-2 px-4">
                        <button class="bg-blue-500 text-white px-2 py-1 rounded hover:bg-blue-700">Edit</button>
                        <button class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-700">Delete</button>
                    </td>
                </tr>
                <!-- End of example data -->
            </tbody>
        </table>
    </div>

    <!-- Right Column: Add New Product Form -->
    <div class="w-1/3 p-4">
        <div class="bg-white rounded-lg shadow-lg p-8">
            <h2 class="text-2xl font-semibold mb-4">Add New Product</h2>
            <form id="productForm">
                <!-- Form fields as in your original code -->
                <!-- ... -->

                <div class="text-center">
                    <button type="button" id="addProduct" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Add Product</button>
                </div>
            </form>
        </div>
    </div>

</body>