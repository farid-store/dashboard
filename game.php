<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Game Topup</title>
  <style>
    .breadcrumb {
      opacity: 0.8;
      font-size: 0.9rem;
      margin-top: 4px;
    }
    
    .header {
      background: linear-gradient(135deg, #7367f0 0%, #9b8cfb 100%);
      padding: 20px;
      border-radius: 8px 8px 0 0;
      color: white;
    }

    .header h2 {
      margin: 0;
      font-size: 1.5rem;
    }
    .game-container {
      padding: 20px;
      background-color: #ffffff;
      max-width: 1100px;
      margin: auto;
      
      min-height: 100vh;
    }
    

    .main-content {
      max-width: 1100px;
      margin: 0 auto;
      background: #ffffff;
      border-radius: 15px;
      padding: 30px 25px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    h1 {
      font-size: 1.75rem;
      font-weight: 600;
      color: #4a4a4a;
      margin-bottom: 25px;
    }

    #search {
      width: 300px;
      padding: 10px 15px;
      font-size: 1rem;
      margin-bottom: 25px;
      border-radius: 10px;
      border: 1px solid #ddd;
      box-shadow: inset 0 2px 4px rgba(0,0,0,0.1);
      transition: border-color 0.3s ease;
    }
    #search:focus {
      outline: none;
      border-color: #7367f0;
      box-shadow: 0 0 8px #9b8cfb;
    }

    #product-list {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(140px, 1fr));
      gap: 20px;
    }

    .fade-in {
      opacity: 0;
      transform: translateY(10px);
      transition: opacity 0.5s ease-out, transform 0.5s ease-out;
    }

    .fade-in.show {
      opacity: 1;
      transform: translateY(0);
    }

    .product-card {
      text-align: center;
    }

    .product-card img {
      width: 100%;
      aspect-ratio: 1 / 1;
      object-fit: cover;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.12);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .product-card img:hover {
      transform: scale(1.05);
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
    }

    .product-card p {
      margin-top: 10px;
      font-size: 0.88rem;
      color: #555;
    }

    .no-results {
      text-align: center;
      color: #999;
      font-style: italic;
      grid-column: 1 / -1;
    }
  </style>
</head>
<body>
  <section class="game-container">
    <div class="header">
      <h2>Topup Game</h2>
      <p class="breadcrumb">Prabayar &gt; Topup Game</p>
    </div>
    <div class="main-content">
    
      <input type="text" id="search" placeholder="Cari game..." />
      <div id="product-list"></div>
    </div>
  </section>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const products = [
        { name: "Mobile Legends", image: "https://uniplay.id/cdn/e9d13e3b49b78e4f8134b7d74a32a44d-large.jpeg", link: "mobilelegends.php" },
        { name: "Valorant", image: "https://digivospaces.b-cdn.net/UniPlay/Products/ac7dbc6c7f97282313b7d1c9f18f8dee.jpeg", link: "#" },
        { name: "Delta Force", image: "https://uniplay.id/cdn/1cff4f7bb7de5540b36f4ad73aa0b749-large.jpeg", link: "#" },
        { name: "Magic Chess", image: "https://uniplay.id/cdn/1c25d5b96830e42572e86b1d6c53bdf9-large.jpeg", link: "#" },
        { name: "Free Fire", image: "https://uniplay.id/cdn/27f1a02395e94ada15b932beb3efbd62-large.jpeg", link: "#" },
        { name: "Honkai Imoact", image: "https://digivospaces.b-cdn.net/UniPlay/Products/585df1cdced30710e55903868111ad5b.jpeg", link: "#" },
        { name: "Call Of Dutty", image: "https://uniplay.id/cdn/6298ebc274f0a63bdf75af13e74c66d7-large.jpeg", link: "#" },
        { name: "Tarisland", image: "https://digivospaces.b-cdn.net/UniPlay/Products/c6bb708998ac19d839744c5a68f4a0d5-large.jpeg", link: "#" },
        { name: "NBA Infinity", image: "https://digivospaces.b-cdn.net/UniPlay/Products/4c4d5504075b0088a7d08365b420db87-large.jpeg", link: "#" },
        { name: "Regnarok Origin", image: "https://digivospaces.b-cdn.net/UniPlay/Products/88ed8714bdcea576420f13ea8acb5a98.jpeg", link: "#" },
        { name: "Growtopia", image: "https://digivospaces.b-cdn.net/UniPlay/Products/4d9546e2978bf81810ba38464e5f7a01.jpeg", link: "#" },
        { name: "FC Mobile", image: "https://uniplay.id/cdn/93b818e39dfa3fa222ecbbea3b456e12-large.jpeg", link: "#" },
        { name: "Marvel", image: "https://digivospaces.b-cdn.net/UniPlay/Products/17fa1d0e6992a0e3b941c18a254a3a2e-large.jpeg", link: "#" },
        { name: "Arena Of Valor", image: "https://uniplay.id/cdn/66b3adc2cc297cd4420f76666861a5a6-large.png", link: "#" },
        { name: "PUBG Mobile", image: "https://uniplay.id/cdn/545804e159a684694cdb9973c9f5b0ab-large.jpeg", link: "#" },
        { name: "Genshin Impact", image: "https://uniplay.id/cdn/8e36e04e087baaba89db4cda2b154936-large.jpeg", link: "#" },
        { name: "Sausage Man", image: "https://digivospaces.b-cdn.net/UniPlay/Products/6473c415507aed3dedd6e641c7be3cb0.png", link: "#" },
        { name: "Point Blank", image: "https://digivospaces.b-cdn.net/UniPlay/Products/e3511e24e789254cb6e4dd275e21ed65-large.jpeg", link: "#" },
        { name: "Arena Breakout", image: "https://uniplay.id/cdn/9bb94217f43f140029a2149a892d3aaf-large.jpeg", link: "#" },
        { name: "Blood Strike", image: "https://uniplay.id/cdn/5c49a7a04cda43bd3694b78c7d8ebcca-large.jpeg", link: "#" }
      ];

      const productList = document.getElementById("product-list");
      const searchInput = document.getElementById("search");

      function renderProducts(list) {
        productList.innerHTML = "";
        if (list.length === 0) {
          productList.innerHTML = `<p class="no-results">Game tidak ditemukan.</p>`;
          return;
        }
        list.forEach((product, index) => {
          const card = document.createElement("div");
          card.className = "product-card fade-in";
          card.innerHTML = `
            <a href="${product.link}">
              <img src="${product.image}" alt="${product.name}" />
            </a>
            <p>${product.name}</p>
          `;
          productList.appendChild(card);
          setTimeout(() => {
            card.classList.add("show");
          }, index * 100);
        });
      }

      searchInput.addEventListener("input", () => {
        const query = searchInput.value.trim().toLowerCase();
        const filtered = products.filter(p => p.name.toLowerCase().includes(query));
        renderProducts(filtered);
      });

      renderProducts(products);
    });
  </script>
</body>
</html>
