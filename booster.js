/*
 * booster.js
 * Skrip untuk mengelola data produk, fungsionalitas pencarian,
 * dan kalkulator profit dinamis.
 *
 * Perubahan: buy_price sekarang sudah termasuk profit 100% dari harga beli awal.
 */

document.addEventListener('DOMContentLoaded', () => {
    // Data produk dengan harga beli yang sudah diubah menjadi harga beli asli + 100% margin
    const products_data = [
        { "name": "TIKTOK LIKES", "img": "tiktok.png", "buy_price": 5.76 },
        { "name": "TIKTOK VIEWS", "img": "tiktok.png", "buy_price": 0.08 },
        { "name": "TIKTOK SHARES", "img": "tiktok.png", "buy_price": 0.58 },
        { "name": "TIKTOK SAVES", "img": "tiktok.png", "buy_price": 2.48 },
        { "name": "TIKTOK FOLLOWERS (1009)", "img": "tiktok.png", "buy_price": 33.96 },
        { "name": "INSTAGRAM LIKES", "img": "instagram.png", "buy_price": 2.88 },
        { "name": "INSTAGRAM VIEWS", "img": "instagram.png", "buy_price": 0.04 },
        { "name": "YOUTUBE LIKES", "img": "youtube.png", "buy_price": 3.72 },
        { "name": "SHOPEE LIVE - Likes", "img": "shopee.png", "buy_price": 6.60 },
        { "name": "SHOPEE LIVE - Shares", "img": "shopee.png", "buy_price": 7.70 },
        { "name": "SHOPEE LIVE - Views (15 Menit)", "img": "shopee.png", "buy_price": 49.32 },
        { "name": "TIKTOK FOLLOWERS (No Refill)", "img": "tiktok.png", "buy_price": 40.40 },
        { "name": "TIKTOK FOLLOWERS (Refill 30D)", "img": "tiktok.png", "buy_price": 43.96 },
        { "name": "TIKTOK LIVE - Likes", "img": "tiktok.png", "buy_price": 2.48 },
        { "name": "TIKTOK LIVE - Views (15 Menit)", "img": "tiktok.png", "buy_price": 17.44 },
        { "name": "TIKTOK LIVE - Views (30 Menit)", "img": "tiktok.png", "buy_price": 34.88 },
        { "name": "TIKTOK LIVE - Views (60 Menit)", "img": "tiktok.png", "buy_price": 69.76 },
        { "name": "FACEBOOK POST - Likes", "img": "facebook.png", "buy_price": 20.10 },
        { "name": "FACEBOOK VIEWS - Reels", "img": "facebook.png", "buy_price": 2.48 },
        { "name": "FACEBOOK PAGE/PROFILE - Followers", "img": "facebook.png", "buy_price": 28.98 },
        { "name": "YOUTUBE LIVE - Views (15 Menit)", "img": "youtube.png", "buy_price": 5.84 },
        { "name": "INSTAGRAM FOLLOWERS", "img": "instagram.png", "buy_price": 59.46 },
        { "name": "TIKTOK VIEWS - Indonesia", "img": "tiktok.png", "buy_price": 2.78 }
    ];

    const tbody = document.querySelector("#priceTable tbody");
    const searchInput = document.getElementById("searchInput");
    const notFoundMessage = document.getElementById("notFoundMessage");

    const productSelect = document.getElementById("productSelect");
    const pcsInput = document.getElementById("pcsInput");
    const profitButtons = document.querySelectorAll(".profit-buttons button");
    const customProfitInput = document.getElementById("customProfitInput");
    const buyPriceTotalSpan = document.getElementById("buyPriceTotal");
    const sellPriceTotalSpan = document.getElementById("sellPriceTotal");
    const netProfitSpan = document.getElementById("netProfit");

    // Default profit percentage, dihitung di atas harga beli baru
    let currentProfitPercentage = 20;

    function formatRupiah(number) {
        return new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR',
            minimumFractionDigits: 2,
            maximumFractionDigits: 2
        }).format(number);
    }

    // Fungsi untuk menghitung harga jual dari harga beli + persentase profit
    function calculateSellPrice(buyPrice, profitPercentage) {
        return buyPrice * (1 + profitPercentage / 100);
    }

    // Fungsi untuk me-render ulang tabel harga
    function renderTable(filter = "") {
        tbody.innerHTML = "";
        notFoundMessage.style.display = "none";
        const filtered = products_data.filter(p =>
            p.name.toLowerCase().includes(filter.toLowerCase())
        );

        if (filtered.length === 0) {
            notFoundMessage.style.display = "block";
            return;
        }

        filtered.forEach(p => {
            const tr = document.createElement("tr");
            tr.innerHTML = `
                <td data-label="Gambar" class="product-image-cell"><img src="${p.img}" alt="${p.name}" class="product-image" loading="lazy" /></td>
                <td data-label="Produk">${p.name}</td>
                <td data-label="Harga Beli">${formatRupiah(p.buy_price)}</td>
                <td data-label="Harga Jual 20%">${formatRupiah(calculateSellPrice(p.buy_price, 20))}</td>
                <td data-label="Harga Jual 40%">${formatRupiah(calculateSellPrice(p.buy_price, 40))}</td>
                <td data-label="Harga Jual 60%">${formatRupiah(calculateSellPrice(p.buy_price, 60))}</td>
                <td data-label="Harga Jual 80%">${formatRupiah(calculateSellPrice(p.buy_price, 80))}</td>
                <td data-label="Harga Jual 100%">${formatRupiah(calculateSellPrice(p.buy_price, 100))}</td>
            `;
            tbody.appendChild(tr);
        });
    }

    // Fungsi untuk mengisi dropdown di kalkulator
    function populateCalculator() {
        productSelect.innerHTML = "";
        products_data.forEach((p, index) => {
            const option = document.createElement("option");
            option.value = index;
            option.textContent = p.name;
            productSelect.appendChild(option);
        });
        calculateProfit();
    }

    // Fungsi utama untuk menghitung profit di kalkulator
    function calculateProfit() {
        const selectedIndex = productSelect.value;
        const pcs = parseInt(pcsInput.value, 10) || 0;
        const profitPercentage = parseFloat(currentProfitPercentage) || 0;

        if (selectedIndex === "" || pcs <= 0) {
            buyPriceTotalSpan.textContent = formatRupiah(0);
            sellPriceTotalSpan.textContent = formatRupiah(0);
            netProfitSpan.textContent = formatRupiah(0);
            return;
        }

        const product = products_data[selectedIndex];
        const buyPrice = product.buy_price;

        const totalBuyPrice = buyPrice * pcs;
        const totalSellPrice = calculateSellPrice(totalBuyPrice, profitPercentage);
        const netProfit = totalSellPrice - totalBuyPrice;

        buyPriceTotalSpan.textContent = formatRupiah(totalBuyPrice);
        sellPriceTotalSpan.textContent = formatRupiah(totalSellPrice);
        netProfitSpan.textContent = formatRupiah(netProfit);
    }

    // Event Listeners untuk kalkulator
    productSelect.addEventListener('change', calculateProfit);
    pcsInput.addEventListener('input', calculateProfit);
    searchInput.addEventListener('input', (e) => renderTable(e.target.value));

    profitButtons.forEach(button => {
        button.addEventListener('click', () => {
            profitButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            currentProfitPercentage = button.dataset.profit;
            customProfitInput.value = "";
            calculateProfit();
        });
    });

    customProfitInput.addEventListener('input', () => {
        profitButtons.forEach(btn => btn.classList.remove('active'));
        currentProfitPercentage = customProfitInput.value;
        calculateProfit();
    });

    // Render awal saat halaman dimuat
    renderTable();
    populateCalculator();
});
