<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MLBB Topup</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .fade-in {
            opacity: 0;
            transform: translateY(10px);
            transition: opacity 0.5s ease-out, transform 0.5s ease-out;
        }
        .fade-in.show {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body class="bg-gradient-to-br from-purple-600 to-indigo-800 min-h-screen p-6">
    <!-- Main Content -->
    <div class="main-content text-white">
        <h1 class="text-3xl font-bold">Topup Game</h1>
        <div id="product-list" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4 mt-6">
            <!-- Produk akan di-generate oleh JavaScript -->
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            showProducts();
        });

        function showProducts() {
            const products = [
                { name: "Mobile Legends", image: "https://placehold.co/150x150", link: "#" },
                { name: "Minecraft", image: "https://placehold.co/150x150", link: "#" },
                { name: "Delta Force", image: "https://placehold.co/150x150", link: "#" },
                { name: "Magic Chess", image: "https://placehold.co/150x150", link: "#" },
                { name: "AFK Journey", image: "https://placehold.co/150x150", link: "#" },
                { name: "Roblox", image: "https://placehold.co/150x150", link: "#" },
                { name: "Marvel Rivals", image: "https://placehold.co/150x150", link: "#" },
                { name: "Tarisland", image: "https://placehold.co/150x150", link: "#" },
                { name: "Zenless Zone Zero", image: "https://placehold.co/150x150", link: "#" },
                { name: "Stumble Guys", image: "https://placehold.co/150x150", link: "#" },
                { name: "MU Origin 3", image: "https://placehold.co/150x150", link: "#" },
                { name: "FC Mobile", image: "https://placehold.co/150x150", link: "#" },
                { name: "Hyper Front", image: "https://placehold.co/150x150", link: "#" },
                { name: "Clash of Clans", image: "https://placehold.co/150x150", link: "#" },
                { name: "PUBG Mobile", image: "https://placehold.co/150x150", link: "#" },
                { name: "Genshin Impact", image: "https://placehold.co/150x150", link: "#" }
            ];
            
            const productList = document.getElementById("product-list");

            products.forEach((product, index) => {
                const productHTML = `
                    <div class="text-center fade-in">
                        <a href="${product.link}" class="block">
                            <img src="${product.image}" class="w-full h-32 object-cover rounded-lg shadow-lg transform transition-all hover:scale-105 hover:shadow-xl" alt="${product.name}" />
                        </a>
                        <p class="mt-2 text-sm">${product.name}</p>
                    </div>
                `;
                productList.innerHTML += productHTML;

                setTimeout(() => {
                    document.querySelectorAll(".fade-in")[index].classList.add("show");
                }, index * 150);
            });
        }
    </script>
</body>
</html>
