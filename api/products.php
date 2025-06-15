<?php
// Set header agar browser tahu ini adalah JSON
header('Content-Type: application/json');

// Definisikan data produk Anda di sini, sama persis seperti di pricelist.php
$products_data = [
    [ "name" => "AI CHATGPT+", "img" => "https://img.icons8.com/ios7/600/chatgpt.png", "status" => "ready", "price1d" => 0, "price7d" => 16000, "price1m" => 50000, "price3m" => 0, "price1y" => 0 ],
    [ "name" => "AI CLAUDE", "img" => "https://img.icons8.com/fluent/512/claude.png", "status" => "ready", "price1d" => 0, "price7d" => 30000, "price1m" => 70000, "price3m" => 0, "price1y" => 0 ],
    [ "name" => "AI GEMINI ADVANCE", "img" => "https://static.vecteezy.com/system/resources/previews/046/861/646/non_2x/gemini-icon-on-a-transparent-background-free-png.png", "status" => "ready", "price1d" => 0, "price7d" => 0, "price1m" => 20000, "price3m" => 0, "price1y" => 0 ],
    [ "name" => "AI PERPLEXITY", "img" => "https://play.ht/blog/wp-content/uploads/2024/05/perplexityai-logo.webp", "status" => "ready", "price1d" => 0, "price7d" => 0, "price1m" => 0, "price3m" => 0, "price1y" => 0 ],
    [ "name" => "AI YOU.COM", "img" => "https://images.seeklogo.com/logo-png/43/1/you-com-logo-png_seeklogo-435346.png", "status" => "ready", "price1d" => 0, "price7d" => 0, "price1m" => 0, "price3m" => 0, "price1y" => 0 ],
    [ "name" => "ALIGHT MOTION PRO", "img" => "https://premy.id/assets/images/games/1741494001_7de345014f2295f78c0b.webp", "status" => "ready", "price1d" => 2000, "price7d" => 0, "price1m" => 6000, "price3m" => 0, "price1y" => 10000 ],
    [ "name" => "AMAZON PRIME VIDEO", "img" => "https://premy.id/assets/images/games/1741494463_595f35c3057cb28fbcdc.png", "status" => "ready", "price1d" => 0, "price7d" => 0, "price1m" => 21000, "price3m" => 0, "price1y" => 0 ],
    [ "name" => "APPLE MUSIC", "img" => "https://img.freepik.com/free-vector/music-icon_53876-25524.jpg?semt=ais_hybrid&w=740", "status" => "ready", "price1d" => 0, "price7d" => 0, "price1m" => 6000, "price3m" => 0, "price1y" => 0 ],
    [ "name" => "APPLE CODE REDEEM ID", "img" => "https://pngimg.com/uploads/apple_logo/apple_logo_PNG19688.png", "status" => "ready", "price1d" => 0, "price7d" => 0, "price1m" => 0, "price3m" => 0, "price1y" => 0 ],
    [ "name" => "BSTATION PREMIUM", "img" => "https://epstore.id/file/images/4a8ce6bf7af3432c4b59ab041decb7cf.jpg", "status" => "ready", "price1d" => 0, "price7d" => 0, "price1m" => 18000, "price3m" => 0, "price1y" => 0 ],
    [ "name" => "CANVA PRO + DESIGNER", "img" => "https://premy.id/assets/images/games/1741494656_3685111874317a0d0b81.webp", "status" => "ready", "price1d" => 0, "price7d" => 0, "price1m" => 5000, "price3m" => 0, "price1y" => 25000 ],
    [ "name" => "CAPCUT PRO", "img" => "https://premy.id/assets/images/games/1741406710_2def8b55162ab3c31a7d.webp", "status" => "ready", "price1d" => 0, "price7d" => 8000, "price1m" => 16000, "price3m" => 0, "price1y" => 0 ],
    [ "name" => "CEK PLAGIASI - TURNITIN", "img" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPkDw1_dR800p9Sqb8bLIDGoCNIaCMLwAKOg&s", "status" => "pending", "price1d" => 0, "price7d" => 0, "price1m" => 0, "price3m" => 0, "price1y" => 0 ],
    [ "name" => "DEEPL PREMIUM", "img" => "https://images.seeklogo.com/logo-png/50/2/deepl-logo-png_seeklogo-506973.png", "status" => "ready", "price1d" => 3000, "price7d" => 9000, "price1m" => 23000, "price3m" => 56000, "price1y" => 200000 ],
    [ "name" => "DISNEY+ HOTSTAR", "img" => "https://epstore.id/file/images/a5210b6fa02a11a631bd7dcd23eaf74d.jpg", "status" => "pending", "price1d" => 0, "price7d" => 0, "price1m" => 18000, "price3m" => 0, "price1y" => 0 ],
    [ "name" => "DRAMABOX PREMIUM", "img" => "https://pnghdpro.com/wp-content/themes/pnghdpro/download/social-media-and-brands/dramabox-logo-icon.png", "status" => "ready", "price1d" => 2000, "price7d" => 6000, "price1m" => 17000, "price3m" => 46000, "price1y" => 160000 ],
    [ "name" => "DUOLINGO SUPER", "img" => "https://logowik.com/content/uploads/images/232_duolingo_logo.jpg", "status" => "ready", "price1d" => 0, "price7d" => 8000, "price1m" => 12000, "price3m" => 0, "price1y" => 0 ],
    [ "name" => "FIGMA PRO", "img" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT9IQCea8hSpiYjBajC-OQu3h1fXr4qesFAog&s", "status" => "ready", "price1d" => 3500, "price7d" => 9500, "price1m" => 24000, "price3m" => 60000, "price1y" => 220000 ],
    [ "name" => "GOOGLE DRIVE", "img" => "https://upload.wikimedia.org/wikipedia/commons/d/da/Google_Drive_logo.png", "status" => "ready", "price1d" => 0, "price7d" => 0, "price1m" => 20000, "price3m" => 0, "price1y" => 0  ],
    [ "name" => "GOOGLE MEET", "img" => "https://images.seeklogo.com/logo-png/40/1/google-meet-logo-png_seeklogo-406884.png", "status" => "ready", "price1d" => 0, "price7d" => 0, "price1m" => 20000, "price3m" => 0, "price1y" => 0  ],
    [ "name" => "GOOGLE ONE", "img" => "https://images.icon-icons.com/2631/PNG/512/google_one_new_logo_icon_159148.png", "status" => "ready", "price1d" => 0, "price7d" => 0, "price1m" => 20000, "price3m" => 0, "price1y" => 0  ],
    [ "name" => "GOOGLE PHOTOS", "img" => "https://upload.wikimedia.org/wikipedia/commons/f/fb/Google-Photos_icon_logo_%28May-September_2015%29.png", "status" => "ready", "price1d" => 0, "price7d" => 0, "price1m" => 20000, "price3m" => 0, "price1y" => 0  ],
    [ "name" => "GETCONTACT PREMIUM", "img" => "https://iconlogovector.com/uploads/images/2024/11/lg-673aab19909ee-Getcontact-Icon.webp", "status" => "pending", "price1d" => 0, "price7d" => 0, "price1m" => 0, "price3m" => 0, "price1y" => 0 ],
    [ "name" => "HBO GO", "img" => "https://epstore.id/file/images/fc0569cf7d7676c4292a8bfad0fb1aa8.jpg", "status" => "ready", "price1d" => 0, "price7d" => 0, "price1m" => 0, "price3m" => 0, "price1y" => 0 ],
    [ "name" => "IQIYI", "img" => "https://img.icons8.com/?size=512&id=d5TXEddDPJaA&format=png", "status" => "ready", "price1d" => 0, "price7d" => 0, "price1m" => 0, "price3m" => 0, "price1y" => 0 ],
    [ "name" => "JASA CTP NETFLIX", "img" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRp7jIWax21mkx_QnhalZsb-yar--ChsKP1yQ&s", "status" => "pending", "price1d" => 0, "price7d" => 0, "price1m" => 0, "price3m" => 0, "price1y" => 0 ],
    [ "name" => "JASPAY", "img" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRp7jIWax21mkx_QnhalZsb-yar--ChsKP1yQ&s", "status" => "pending", "price1d" => 0, "price7d" => 0, "price1m" => 0, "price3m" => 0, "price1y" => 0 ],
    [ "name" => "LIGHTROOM PREMIUM", "img" => "https://logowik.com/content/uploads/images/adobe-lightroom-cc7429.jpg", "status" => "pending", "price1d" => 0, "price7d" => 0, "price1m" => 0, "price3m" => 0, "price1y" => 0 ],
    [ "name" => "LOKLOK VIP", "img" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT8zz1QckiTE7E2jcCIBcNOHj3LTFYjyl82Zg&s", "status" => "ready", "price1d" => 0, "price7d" => 0, "price1m" => 0, "price3m" => 0, "price1y" => 0 ],
    [ "name" => "MEITU VIP", "img" => "https://images.seeklogo.com/logo-png/34/1/meitu-logo-png_seeklogo-347412.png", "status" => "ready", "price1d" => 0, "price7d" => 0, "price1m" => 0, "price3m" => 0, "price1y" => 0 ],
    [ "name" => "MICROSOFT 365", "img" => "https://images.seeklogo.com/logo-png/16/1/microsoft-office-365-logo-png_seeklogo-168321.png", "status" => "pending", "price1d" => 0, "price7d" => 0, "price1m" => 0, "price3m" => 0, "price1y" => 0 ],
    [ "name" => "NETFLIX PREMIUM UHD", "img" => "https://premy.id/assets/images/games/1741494608_13916cad116dd700e814.png", "status" => "ready", "price1d" => 0, "price7d" => 0, "price1m" => 0, "price3m" => 0, "price1y" => 0 ],
    [ "name" => "OTP (ONE-TIME PASSWORD) 🇮🇩", "img" => "https://img.freepik.com/premium-vector/otp-one-time-password-security-illustration_258153-467.jpg", "status" => "pending", "price1d" => 0, "price7d" => 0, "price1m" => 0, "price3m" => 0, "price1y" => 0 ],
    [ "name" => "PICSART PRO", "img" => "https://images.seeklogo.com/logo-png/37/1/picsart-logo-png_seeklogo-378855.png", "status" => "ready", "price1d" => 0, "price7d" => 0, "price1m" => 0, "price3m" => 0, "price1y" => 0 ],
    [ "name" => "RCTI+ PREMIUM SPORTS", "img" => "https://is1-ssl.mzstatic.com/image/thumb/Purple221/v4/17/ef/7a/17ef7a1f-43c4-fab6-c345-45ac9aca4a5e/AppIcon-0-0-1x_U007emarketing-0-7-0-85-220.png/1200x630wa.png", "status" => "pending", "price1d" => 0, "price7d" => 0, "price1m" => 0, "price3m" => 0, "price1y" => 0 ],
    [ "name" => "REMINI PRO", "img" => "https://dragonflyeditorial.com/wp-content/uploads/2022/04/remini-logo.png", "status" => "ready", "price1d" => 0, "price7d" => 0, "price1m" => 0, "price3m" => 0, "price1y" => 0 ],
    [ "name" => "SCRIBD SUBSCRIPTION", "img" => "https://cdn4.iconfinder.com/data/icons/logos-and-brands/512/290_Scribd_logo-512.png", "status" => "ready", "price1d" => 0, "price7d" => 0, "price1m" => 0, "price3m" => 0, "price1y" => 0 ],
    [ "name" => "SPOTIFY PREMIUM", "img" => "https://premy.id/assets/images/games/1741494763_ff055ddde1a95919e310.webp", "status" => "ready", "price1d" => 0, "price7d" => 0, "price1m" => 0, "price3m" => 0, "price1y" => 0 ],
    [ "name" => "VIDIO PREMIER", "img" => "https://premy.id/assets/images/games/1716206019_3a1a9233fd3e2b700f2b.webp", "status" => "ready", "price1d" => 0, "price7d" => 0, "price1m" => 0, "price3m" => 0, "price1y" => 0 ],
    [ "name" => "VISION+ / K-VISION SPORT", "img" => "https://logowik.com/content/uploads/images/vision-plus-20219005.logowik.com.webp", "status" => "ready", "price1d" => 0, "price7d" => 0, "price1m" => 0, "price3m" => 0, "price1y" => 0 ],
    [ "name" => "VIU PREMIUM", "img" => "https://premy.id/assets/images/games/1716440566_1d882c4abb76c6aca6c0.webp", "status" => "ready", "price1d" => 0, "price7d" => 0, "price1m" => 0, "price3m" => 0, "price1y" => 0 ],
    [ "name" => "VPN EXPRESS", "img" => "https://xv.imgix.net/photos/xv/Red-preview-f8f8e432661063d4ffe1a4b96dd9e4be.png?s=9be796d9e09e46e0414cca1653e07c20", "status" => "ready", "price1d" => 0, "price7d" => 0, "price1m" => 0, "price3m" => 0, "price1y" => 0 ],
    [ "name" => "VPN HMA", "img" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8u9DCTp85Mp2EudJRB_9yemL_6VcnTIbY9A&s", "status" => "ready", "price1d" => 0, "price7d" => 0, "price1m" => 0, "price3m" => 0, "price1y" => 0 ],
    [ "name" => "VPN SURFSHARK", "img" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS51GX3mpbu5zhDfiVBMdf99pJ8QkLDM9XsPA&s", "status" => "ready", "price1d" => 0, "price7d" => 0, "price1m" => 0, "price3m" => 0, "price1y" => 0 ],
    [ "name" => "WETV VIP", "img" => "https://epstore.id/file/images/1e6d73faf08ad3db4eb629b3569cd04a.jpg", "status" => "ready", "price1d" => 0, "price7d" => 0, "price1m" => 0, "price3m" => 0, "price1y" => 0 ],
    [ "name" => "WINK VIP", "img" => "https://is1-ssl.mzstatic.com/image/thumb/Purple211/v4/6a/c3/78/6ac37852-6e65-9d37-db77-f74ef4a0dabb/WinkStudio.png/1200x600wa.png", "status" => "ready", "price1d" => 0, "price7d" => 0, "price1m" => 0, "price3m" => 0, "price1y" => 0 ],
    [ "name" => "YOUTUBE PREMIUM", "img" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2U8mQXb6RVzVWjE4nRS6DDNWcpUFyLuSOqA&s", "status" => "ready", "price1d" => 0, "price7d" => 0, "price1m" => 0, "price3m" => 0, "price1y" => 0 ],
    [ "name" => "ZOOM PRO", "img" => "https://premy.id/assets/images/games/1741494396_03f394b14332a67bc4c4.png", "status" => "ready", "price1d" => 0, "price7d" => 0, "price1m" => 0, "price3m" => 0, "price1y" => 0 ]
];

// Ubah array PHP menjadi format JSON dan tampilkan
echo json_encode($products_data);
?>
