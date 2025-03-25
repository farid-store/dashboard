<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deposit Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body class="bg-gray-100 p-6">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 max-w-4xl mx-auto">
        <!-- Kiri Atas: Memilih Metode Pembayaran -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="text-lg font-semibold mb-4">Deposit</div>
            <label class="block text-gray-700 font-semibold mb-2">Tipe <span class="text-red-500">*</span></label>
            <div class="flex items-center mb-2">
                <input type="radio" id="otomatis" name="tipe" class="mr-2" onclick="tampilkanQRIS()">
                <label for="otomatis">Otomatis</label>
                <input type="radio" id="manual" name="tipe" class="mr-2 ml-4" onclick="toggleDropdown(true)">
                <label for="manual">Manual</label>
            </div>
            <div id="dropdown-payment" class="hidden mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Pilih Pembayaran Manual <span class="text-red-500">*</span></label>
                <select id="payment-method" class="w-full p-2 border border-gray-300 rounded" onchange="tampilkanGambar()">
                    <option value="">Pilih Metode</option>
                    <option value="seabank">SeaBank</option>
                    <option value="gopay">Gopay</option>
                    <option value="dana">Dana</option>
                    <option value="ovo">OVO</option>
                    <option value="shopee-pay">ShopeePay</option>
                    <option value="qris">QRIS</option>
                    <option value="bank-bsi">Bank BSI</option>
                    <option value="bank-jago">Bank Jago</option>
                    <option value="bank-mandiri">Bank Mandiri</option>
                    <option value="usdt">USDT / Crypto</option>
                </select>
            </div>

            <!-- Input Kontak -->
            <label class="block text-gray-700 font-semibold mb-2">Jumlah <span class="text-red-500">*</span></label>
            <input type="text" id="jumlah" class="w-full p-2 border border-gray-300 rounded" placeholder="Rp" oninput="formatRupiah(this)">

            <script>
            function formatRupiah(input) {
                let angka = input.value.replace(/[^0-9]/g, ""); // Hapus karakter selain angka
                let angkaFormatted = angka.replace(/\B(?=(\d{3})+(?!\d))/g, "."); // Tambahkan titik ribuan
                input.value = angkaFormatted; // Set ulang nilai input
            }
            </script>
            <!-- Input Kontak -->
            <label class="block text-gray-700 font-semibold mb-2">Email atau No. WhatsApp <span class="text-red-500">*</span></label>
            <input type="text" id="user-contact" class="w-full p-2 border border-gray-300 rounded mb-4" placeholder="Email atau No WA">

            <div class="flex justify-between mt-4">
                <button class="bg-red-500 text-white px-4 py-2 rounded w-full sm:w-auto" onclick="resetForm()">Ulangi</button>
                <button class="bg-blue-500 text-white px-4 py-2 rounded w-full sm:w-auto" onclick="cekDanKirimDeposit();">Kirim Deposit</button>
            </div>
        </div>

        <!-- Kanan Atas: Gambar Metode Pembayaran & Nomor Rekening -->
        <div class="bg-white p-6 rounded-lg shadow-md flex flex-col items-center">
            <h2 class="text-lg font-semibold mb-4">Detail Pembayaran</h2>
            <img id="payment-image" src="" alt="" class="w-48 h-48 hidden object-contain cursor-pointer" onclick="bukaModal(this.src)"><br><h3>Hanya a/n Farid Ja'far Siddiq</h3>
            <div class="flex items-center mt-2">
                <p id="rekening-number" class="font-semibold text-gray-700 cursor-pointer" onclick="copyRekening()"></p>
                <i class="fas fa-copy text-gray-500 ml-2 cursor-pointer" onclick="copyRekening()"></i>
            </div>
        </div>

        <!-- Modal untuk Preview Gambar -->
        <div id="image-modal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden">
            <div class="bg-white p-4 rounded-lg shadow-lg max-w-sm">
                    <span class="text-gray-500 text-xl cursor-pointer float-right" onclick="tutupModal()">&times;</span>
                    <img id="modal-image" src="" class="w-full h-auto rounded">
            </div>
        </div>

        <!-- Kiri Bawah: Riwayat Pembayaran -->
<div class="bg-white p-6 rounded-lg shadow-md col-span-1 lg:col-span-2">
    <h2 class="text-lg font-semibold mb-4">Riwayat Pembayaran</h2>
    <div class="overflow-x-auto">
        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border p-2">Tanggal</th>
                    <th class="border p-2">Metode</th>
                    <th class="border p-2">Jumlah</th>
                    <th class="border p-2">Alamat IP</th>
                </tr>
            </thead>
            <tbody id="riwayat-pembayaran"></tbody>
        </table>
    </div>
    <button class="mt-4 bg-red-500 text-white px-4 py-2 rounded w-full sm:w-auto" onclick="hapusRiwayat()">Hapus Riwayat</button>
</div>


        <!-- Kanan Bawah: Announcement -->
        <div class="bg-white p-6 rounded-lg shadow-md col-span-1 lg:col-span-2">
            <h2 class="text-lg font-semibold mb-2">Penting:</h2>
            <ul class="list-disc list-inside text-sm">
                <li>Kesalahan Transfer Nominal Akan <span class="text-red-500 font-bold">Dipotong 1000</span> (<span class="font-bold">PASTIKAN SESUAI NOMINAL</span>)</li>
                <li>Anda hanya dapat memiliki maksimal 3 permintaan deposit pending, jadi jangan melakukan <span class="font-bold">spam</span> dan segera lunasi pembayaran.</li>
                <li>Jika permintaan deposit tidak dibayar dalam waktu lebih dari <span class="text-yellow-500 font-bold">24 jam</span>, maka permintaan deposit akan otomatis <span class="font-bold">dibatalkan</span>.</li>
            </ul>
        </div>
    </div>

    <script>
        const paymentData = {
            "dana": { img: "bank.png", rekening: "081233014523" },
            "bank-bsi": { img: "bank.png", rekening: "7211388627" },
            "bank-jago": { img: "bank.png", rekening: "105140476589" },
            "bank-mandiri": { img: "bank.png", rekening: "1080028958644" },
            "seabank": { img: "bank.png", rekening: "901203701880" },
            "shopee-pay": { img: "bank.png", rekening: "081233014523" },
            "gopay": { img: "bank.png", rekening: "081233014523" },
            "ovo": { img: "bank.png", rekening: "Coming Soon" },
            "qris": { img: "qris.png", rekening: "" },
            "usdt": { img: "crypto.jpg", rekening: "HUBUNGI ADMIN" }
        };

        function toggleDropdown(show) {
            document.getElementById('dropdown-payment').classList.toggle('hidden', !show);
        }

        function resetForm() {
            document.getElementById("jumlah").value = "";
        }

        function cekDanKirimDeposit() {
            let jumlah = document.getElementById("jumlah").value.trim();
            let userContact = document.getElementById("user-contact").value.trim();
            
            if (!jumlah || !userContact) {
                alert("Silakan Lengkapi Data Anda!");
                return;
            }

            alert("Deposit dikonfirmasi!");

            localStorage.setItem("user_contact", userContact);

            rekamRiwayat();
        }

        function copyRekening() {
            let rekeningText = document.getElementById("rekening-number").textContent;
            if (rekeningText) {
                navigator.clipboard.writeText(rekeningText).then(() => {
                    alert("Nomor rekening berhasil disalin!");
                });
            }
        }

        function tampilkanQRIS() {
            document.getElementById("payment-image").src = "qris.png";
            document.getElementById("payment-image").classList.remove("hidden");
            document.getElementById("rekening-number").textContent = "";
            toggleDropdown(false);
        }

        function tampilkanGambar() {
            let paymentMethod = document.getElementById("payment-method").value;
            let img = document.getElementById("payment-image");
            let rekening = document.getElementById("rekening-number");

            if (paymentMethod && paymentData[paymentMethod]) {
                img.src = paymentData[paymentMethod].img;
                img.classList.remove("hidden");
                rekening.textContent = paymentData[paymentMethod].rekening;
            } else {
                img.classList.add("hidden");
                rekening.textContent = "";
            }
        }

        function tampilkanRiwayat() {
            let riwayat = JSON.parse(localStorage.getItem('riwayat_pembayaran')) || [];
            let tbody = document.getElementById('riwayat-pembayaran');
            tbody.innerHTML = riwayat.map(p => `
                <tr>
                    <td class="border p-2">${p.tanggal}</td>
                    <td class="border p-2">${p.metode}</td>
                    <td class="border p-2">Rp ${p.jumlah}</td>
                    <td class="border p-2">${p.ip}</td>
                </tr>
            `).join('');
        }

        function hapusRiwayat() {
            localStorage.removeItem('riwayat_pembayaran');
            tampilkanRiwayat();
        }

        function bukaModal(src) {
            if (src) {
                document.getElementById("modal-image").src = src;
                document.getElementById("image-modal").classList.remove("hidden");
            }
        }

        function tutupModal() {
            document.getElementById("image-modal").classList.add("hidden");
        }

        function getUserContact() {
            return localStorage.getItem("user_contact") || "Tidak Tersedia";
        }

        async function getUserIP() {
            try {
                const response = await fetch("https://api64.ipify.org?format=json");
                const data = await response.json();
                return data.ip;
            } catch (error) {
                console.error("Gagal mendapatkan IP:", error);
                return "Tidak Diketahui";
            }
        }

        async function rekamRiwayat() {
            const jumlah = document.getElementById("jumlah").value;
            const metode = document.getElementById("payment-method").value || "QRIS";
            const tanggal = new Date().toLocaleString("id-ID");
            const ip = await getUserIP();
            const contact = getUserContact();

            let riwayat = JSON.parse(localStorage.getItem("riwayat_pembayaran")) || [];
            riwayat.push({ tanggal, metode, jumlah, ip, contact });
            localStorage.setItem("riwayat_pembayaran", JSON.stringify(riwayat));

            kirimKeTelegram(jumlah, metode, tanggal, ip, contact);
        }

        function kirimKeTelegram(jumlah, metode, tanggal, ip, contact) {
            const TOKEN_BOT = "7819700390:AAEO8_9_5Xr8msBPZd2hOQ4CkxDnlHVS3b8";
            const CHAT_ID = "5775563021";

            const pesan = `
📌 *Deposit Baru* 📌
────────────────────
📅 *Tanggal*: ${tanggal}
💰 *Jumlah*: Rp ${jumlah}
🏦 *Metode*: ${metode}
🌍 *IP Address*: ${ip}
📞 *Kontak*: ${contact}
            `;

            const url = `https://api.telegram.org/bot${TOKEN_BOT}/sendMessage`;
            fetch(url, {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({ chat_id: CHAT_ID, text: pesan, parse_mode: "Markdown" }),
            })
            .then(response => response.json())
            .then(data => console.log("Pesan terkirim:", data))
            .catch(error => console.error("Gagal mengirim pesan:", error));
        }

        function resetForm() {
            document.getElementById("jumlah").value = "";
            document.getElementById("payment-method").value = "";
            document.getElementById("user-contact").value = "";
        }

        tampilkanRiwayat();
    </script>
</body>
</html>
