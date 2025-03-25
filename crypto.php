<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deposit Crypto</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body class="bg-gray-100 font-sans p-6">

<div class="grid grid-cols-1 gap-6 max-w-5xl mx-auto">
    
    <!-- Kiri Atas: Memilih Metode Pembayaran -->
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <div class="text-2xl font-semibold text-gray-700 mb-6">Deposit Crypto</div>

        <!-- Pilih Wallet atau Exchange -->
        <label class="block text-gray-600 mb-3 font-medium">Pilih Metode Pembayaran</label>
        <ul class="space-y-3">
            <li>
                <label class="flex items-center space-x-3 cursor-pointer text-gray-700">
                    <input type="radio" name="wallet" value="exchange" class="form-radio text-blue-500" onclick="pilihMetode(this)"> 
                    <span class="text-lg">Exchange</span>
                </label>
            </li>
            <li>
                <label class="flex items-center space-x-3 cursor-pointer text-gray-700">
                    <input type="radio" name="wallet" value="wallet" class="form-radio text-blue-500" onclick="pilihMetode(this)"> 
                    <span class="text-lg">Wallet</span>
                </label>
            </li>
        </ul>

        <!-- Input Jaringan Exchange -->
        <div id="exchange-options" class="hidden mt-4">
            <label class="block text-gray-600 font-medium mb-2">Pilih Jaringan</label>
            <select id="select-exchange" class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500">
                <option value="">Pilih Exchange</option>
                <option value="binance">Binance</option>
                <option value="bybit">Bybit</option>
                <option value="bitget">Bitget</option>
                <option value="mexc">MEXC</option>
                <option value="gateio">GATE.IO</option>
                <option value="okx">OKX</option>
            </select>
        </div>

        <!-- Input Jaringan Wallet -->
        <div id="wallet-options" class="hidden mt-4">
            <label class="block text-gray-600 font-medium mb-2">Pilih Jaringan</label>
            <select id="wallet-network" class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500">
                <option value="">Pilih Jaringan</option>
                <option value="wallet-bsc">Wallet - BSC</option>
                <option value="wallet-ton">Wallet - TON</option>
                <option value="wallet-avax">Wallet - AVAX</option>
                <option value="wallet-base">Wallet - Base</option>
                <option value="wallet-optimism">Wallet - Optimism</option>
                <option value="wallet-polygon">Wallet - Polygon</option>
                <option value="wallet-aptos">Wallet - Aptos</option>
                <option value="wallet-solana">Wallet - Solana</option>
                <option value="wallet-arbitrum">Wallet - Arbitrum</option>
            </select>
        </div>

        <!-- Input Alamat Wallet -->
        <label class="block text-gray-600 font-medium mb-2 mt-6">Alamat Wallet <span class="text-red-500">*</span></label>
        <input type="text" id="wallet-address" class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500" placeholder="Masukkan alamat wallet" disabled>

        <!-- Input Jumlah Deposit -->
        <label class="block text-gray-600 font-medium mb-2 mt-6">Jumlah <span class="text-red-500">*</span></label>
        <input type="text" id="jumlah" class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500" placeholder="Jumlah Deposit" oninput="formatRupiah(this)">

        <div class="flex justify-between mt-6 gap-4 flex-col sm:flex-row">
            <button class="bg-red-500 text-white px-6 py-3 rounded-md hover:bg-red-600 transition-all duration-300" onclick="resetForm()">Ulangi</button>
            <button class="bg-blue-500 text-white px-6 py-3 rounded-md hover:bg-blue-600 transition-all duration-300" onclick="cekDanKirimDeposit()">Kirim Deposit</button>
        </div>
    </div>

    <!-- Data Exchange -->
    <div id="data-exchange" class="bg-white p-6 rounded-lg shadow-lg flex flex-col items-center hidden mt-6">
        <h2 class="text-2xl font-semibold text-gray-700 mb-4">Detail Pembayaran</h2>
        <img id="payment-image" src="" alt="" class="w-48 h-48 hidden object-contain cursor-pointer mb-4" onclick="bukaModal(this.src)">
        <h3 class="text-gray-600 mb-4">Hanya a/n Farid Ja'far Siddiq</h3>

        <!-- Data Exchange yang bisa disalin -->
<div class="space-y-4 w-full">
    <div class="w-full flex justify-between items-center bg-gray-50 p-4 rounded-lg shadow-md hover:bg-gray-100 transition-all duration-300">
        <p class="font-semibold text-gray-800"><strong>Binance:</strong> 753964271</p>
        <button class="bg-blue-500 text-white px-4 py-2 rounded-lg" onclick="copyText('binance')">Salin</button>
    </div>
    <div class="w-full flex justify-between items-center bg-gray-50 p-4 rounded-lg shadow-md hover:bg-gray-100 transition-all duration-300">
        <p class="font-semibold text-gray-800"><strong>Bybit:</strong> 369816695</p>
        <button class="bg-blue-500 text-white px-4 py-2 rounded-lg" onclick="copyText('bybit')">Salin</button>
    </div>
    <div class="w-full flex justify-between items-center bg-gray-50 p-4 rounded-lg shadow-md hover:bg-gray-100 transition-all duration-300">
        <p class="font-semibold text-gray-800"><strong>Bitget:</strong> 6338607804</p>
        <button class="bg-blue-500 text-white px-4 py-2 rounded-lg" onclick="copyText('bitget')">Salin</button>
    </div>
    <div class="w-full flex justify-between items-center bg-gray-50 p-4 rounded-lg shadow-md hover:bg-gray-100 transition-all duration-300">
        <p class="font-semibold text-gray-800"><strong>MEXC:</strong> 11632278</p>
        <button class="bg-blue-500 text-white px-4 py-2 rounded-lg" onclick="copyText('mexc')">Salin</button>
    </div>
    <div class="w-full flex justify-between items-center bg-gray-50 p-4 rounded-lg shadow-md hover:bg-gray-100 transition-all duration-300">
        <p class="font-semibold text-gray-800"><strong>GATE.IO:</strong> 20588127</p>
        <button class="bg-blue-500 text-white px-4 py-2 rounded-lg" onclick="copyText('gateio')">Salin</button>
    </div>
    <div class="w-full flex justify-between items-center bg-gray-50 p-4 rounded-lg shadow-md hover:bg-gray-100 transition-all duration-300">
        <p class="font-semibold text-gray-800"><strong>OKX:</strong> 588033787167427589</p>
        <button class="bg-blue-500 text-white px-4 py-2 rounded-lg" onclick="copyText('okx')">Salin</button>
    </div>
    <div class="w-full flex justify-between items-center bg-gray-50 p-4 rounded-lg shadow-md hover:bg-gray-100 transition-all duration-300">
        <p class="font-semibold text-gray-800"><strong>On-Chain:</strong> [harap konfirmasi ke admin]</p>
        <button class="bg-blue-500 text-white px-4 py-2 rounded-lg" onclick="copyText('onchain')">Salin</button>
    </div>
    <div class="w-full flex justify-between items-center bg-gray-50 p-4 rounded-lg shadow-md hover:bg-gray-100 transition-all duration-300">
        <p class="font-semibold text-gray-800"><strong>ALTERNATIF:</strong> farid04siddiq@gmail.com</p>
        <button class="bg-blue-500 text-white px-4 py-2 rounded-lg" onclick="copyText('alternatif')">Salin</button>
    </div>
</div>

<script>
    function copyText(id) {
        var text = '';
        switch (id) {
            case 'binance': text = '753964271'; break;
            case 'bybit': text = '369816695'; break;
            case 'bitget': text = '6338607804'; break;
            case 'mexc': text = '11632278'; break;
            case 'gateio': text = '20588127'; break;
            case 'okx': text = '588033787167427589'; break;
            case 'onchain': text = '[harap konfirmasi ke admin]'; break;
            case 'alternatif': text = 'farid04siddiq@gmail.com'; break;
        }
        navigator.clipboard.writeText(text).then(function() {
            alert('Teks berhasil disalin: ' + text);
        }).catch(function(err) {
            alert('Gagal menyalin teks: ', err);
        });
    }
</script>


        <!-- Kanan Atas: Data Exchange (Hanya Tampil Setelah Metode Dipilih) -->
        

        <!-- Riwayat Pembayaran dan Pengumuman -->
        <div id="riwayat-pembayaran-section" class="bg-white p-6 rounded-lg shadow-lg col-span-2 md:col-span-1 mt-6 ">
            <h2 class="text-2xl font-semibold text-gray-700 mb-6">Riwayat Pembayaran</h2>
            <div class="overflow-x-auto">
                <table class="w-full border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="border p-4 text-gray-700">Tanggal</th>
                            <th class="border p-4 text-gray-700">Metode</th>
                            <th class="border p-4 text-gray-700">Jumlah</th>
                            <th class="border p-4 text-gray-700">Alamat Wallet</th>
                        </tr>
                    </thead>
                    <tbody id="riwayat-pembayaran"></tbody>
                </table>
            </div>
            <button class="mt-6 bg-red-500 text-white px-6 py-3 rounded-md hover:bg-red-600" onclick="hapusRiwayat()">Hapus Riwayat</button>
        </div>

    </div>
</body>




</body>


    <script>
        // Fungsi untuk format Rupiah
        function formatRupiah(input) {
            let angka = input.value.replace(/[^0-9]/g, "");
            let angkaFormatted = angka.replace(/\B(?=(\d{3})+(?!\d))/g, ".");
            input.value = angkaFormatted;
        }

        // Fungsi Pilih Metode Pembayaran
function pilihMetode(metode) {
    let walletAddressField = document.getElementById("wallet-address");
    let walletOptions = document.getElementById("wallet-options");
    let dataExchange = document.getElementById("data-exchange");
    let exchangeOptions = document.getElementById("exchange-options"); // Ambil elemen exchange-options
    let exchange = document.querySelector('input[name="wallet"]:checked').value;

    // Menyembunyikan atau menampilkan opsi wallet
    if (metode.value === "wallet") {
        walletOptions.classList.remove("hidden");
        walletAddressField.disabled = false;
        walletAddressField.placeholder = "Masukkan alamat wallet untuk jaringan yang dipilih";
        exchangeOptions.classList.add("hidden"); // Sembunyikan dropdown exchange
    } else {
        walletOptions.classList.add("hidden");
        walletAddressField.disabled = false;
        walletAddressField.placeholder = "Masukkan UID Exchange Anda";
        exchangeOptions.classList.remove("hidden"); // Tampilkan dropdown exchange
    }

    // Tampilkan data exchange jika metode dipilih
    if (exchange === "exchange" || exchange === "wallet") {
        document.getElementById("data-exchange").classList.remove("hidden");
    } else {
        document.getElementById("data-exchange").classList.add("hidden");
    }
}


        // Fungsi untuk menyalin teks
        function copyText(id) {
            var copyText = document.getElementById(id);
            var textArea = document.createElement("textarea");
            textArea.value = copyText.innerText || copyText.textContent;
            document.body.appendChild(textArea);
            textArea.select();
            document.execCommand("copy");
            document.body.removeChild(textArea);
            alert("Data telah disalin ke clipboard.");
        }

        // Fungsi untuk reset form
        function resetForm() {
            document.getElementById("wallet-address").value = "";
            document.getElementById("jumlah").value = "";
            document.getElementById("wallet-network").value = "";
        }

        // Fungsi untuk menghapus riwayat pembayaran
function hapusRiwayat() {
    const riwayatTable = document.getElementById("riwayat-pembayaran");

    // Hapus semua baris dalam tabel, kecuali header
    while (riwayatTable.rows.length > 0) {
        riwayatTable.deleteRow(0);
    }
}


        // Fungsi untuk mengecek dan mengirim deposit
        function cekDanKirimDeposit() {
            const walletAddress = document.getElementById("wallet-address").value;
            const jumlah = document.getElementById("jumlah").value;

            if (!jumlah) {
                alert("Alamat Wallet dan Jumlah Deposit harus diisi!");
                return;
            }

            rekamRiwayat();  // Panggil fungsi untuk rekam riwayat dan kirim ke Telegram
        }

        // Fungsi untuk merekam riwayat deposit
function rekamRiwayat() {
    let jumlah = document.getElementById("jumlah").value;
    let walletAddress = document.getElementById("wallet-address").value;
    let walletNetwork = document.getElementById("wallet-network").value; // Ambil nilai jaringan wallet
    let exchange = document.getElementById("select-exchange").value; // Ambil nilai dari dropdown select-exchange

    if (!walletNetwork && !exchange) { // Pastikan jaringan wallet atau exchange dipilih
        alert("Pilih jaringan wallet atau exchange terlebih dahulu!");
        return;
    }

    // Menambah riwayat ke tabel
    const riwayatTable = document.getElementById("riwayat-pembayaran");
    const row = riwayatTable.insertRow();
    row.innerHTML = `
        <td class="border p-4">${new Date().toLocaleString()}</td>
        <td class="border p-4">${walletNetwork ? `Wallet (${walletNetwork})` : `Exchange (${exchange})`}</td> <!-- Tampilkan jaringan yang dipilih atau exchange -->
        <td class="border p-4">${jumlah}</td>
        <td class="border p-4">${walletAddress}</td>
    `;

    // Kirim pesan ke Telegram
    kirimTelegram(walletAddress, jumlah, walletNetwork, exchange);  // Kirim informasi jaringan atau exchange ke Telegram
}

// Fungsi untuk mengirim pesan ke Telegram
function kirimTelegram(walletAddress, jumlah, walletNetwork, exchange) {
    // Tentukan apakah kita mengirimkan data wallet atau exchange
    let networkOrExchange = walletNetwork ? walletNetwork : exchange;
    
    const telegramAPI = `https://api.telegram.org/bot7819700390:AAEO8_9_5Xr8msBPZd2hOQ4CkxDnlHVS3b8/sendMessage?chat_id=5775563021&text=Deposit%20Diterima%0A%0AAlamat%20Wallet%20%3A%20${walletAddress}%0AJumlah%3A%20Rp. ${jumlah}%0AJaringan%20%3A%20${networkOrExchange}`; // Tambahkan informasi jaringan atau exchange
    
    // Pastikan URL valid
    fetch(telegramAPI)
        .then(response => {
            if (response.ok) {
                return response.json();
            }
            throw new Error('Telegram API Error');
        })
        .then(data => {
            alert("Deposit berhasil dikirim ke Telegram!");
        })
        .catch(error => {
            console.error("Error:", error);
            alert("Gagal mengirim data ke Telegram. Periksa koneksi bot atau token Anda.");
        });
}


    </script>
</body>

</html>
