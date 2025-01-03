<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuliner Nusantara - Sunrise Theme</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Caveat:wght@600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #FF4500; /* Oranye terang */
            --secondary-color: #FFD700; /* Kuning keemasan */
            --accent-color: #FF6347; /* Tomat */
            --text-color: #8B0000; /* Merah gelap */
            --background-color: #FF7E50; /* Oranye salmon */
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background: linear-gradient(135deg, var(--background-color), #FFDAB9); /* Oranye salmon ke peach */
            color: var(--text-color);
            line-height: 1.6;
            overflow-x: hidden;
        }

        .culinary-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 2rem;
            background: rgba(255, 140, 0, 0.9); /* Oranye transparan */
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(255, 69, 0, 0.5); /* Bayangan oranye terang */
        }

        .banner {
            position: relative;
            width: 100%;
            height: 70vh;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 25px 50px rgba(255, 140, 0, 0.5);
            margin-bottom: 4rem;
        }

        .banner-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .banner-image.active {
            opacity: 1;
        }

        .banner-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, rgba(255, 140, 0, 0.7), rgba(255, 215, 0, 0.7));
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }

        .banner-overlay h1 {
            font-family: 'Caveat', cursive;
            font-size: 5rem;
            text-shadow: 3px 3px 10px rgba(255, 99, 71, 0.7); /* Bayangan tomat */
            letter-spacing: 2px;
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
            color: var(--primary-color);
            font-weight: 700;
        }

        .culinary-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 2.5rem;
        }

        .culinary-card {
            background: linear-gradient(to right, #FFA07A, #FFD700); /* Oranye muda ke kuning */
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(255, 140, 0, 0.5);
            transition: all 0.4s ease-in-out;
        }

        .culinary-card-image {
            width: 100%;
            height: 300px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .culinary-card:hover .culinary-card-image {
            transform: scale(1.1);
        }

        .culinary-card-content {
            padding: 1.5rem;
            background: linear-gradient(to right, #FFA500, #FFDAB9); /* Oranye ke peach */
        }

        .culinary-card-title {
            color: var(--secondary-color);
            font-size: 1.4rem;
            margin-bottom: 0.8rem;
            font-weight: 600;
        }

        .culinary-card:hover .culinary-card-title {
            color: var(--accent-color);
        }

        .culinary-card-location {
            color: var(--text-color);
            font-size: 1rem;
            opacity: 0.8;
        }

        @media (max-width: 1200px) {
            .culinary-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .culinary-grid {
                grid-template-columns: 1fr;
            }

            .banner-overlay h1 {
                font-size: 3rem;
            }
        }
    </style>
</head>

<body>
    <div class="culinary-container">
        <!-- Banner Slider -->
        <div class="banner">
            <div class="banner-image active" style="background-image: url('https://via.placeholder.com/1500x500?text=Sunrise+1')"></div>
            <div class="banner-image" style="background-image: url('https://via.placeholder.com/1500x500?text=Sunrise+2')"></div>
            <div class="banner-image" style="background-image: url('https://via.placeholder.com/1500x500?text=Sunrise+3')"></div>
            <div class="banner-overlay">
                <h1>Selamat Datang DiKulineran Indonesia</h1>
            </div>
        </div>

        <!-- Makanan Section -->
        <h2 class="section-title">Makanan Khas Indonesia</h2>
        <div class="culinary-grid">
            <div class="culinary-card">
                <img src="images/makanan/1.jpg" alt="Ayam Betutu" class="culinary-card-image">
                <div class="culinary-card-content">
                    <h3 class="culinary-card-title">Ayam Betutu</h3>
                    <p class="culinary-card-location">📍 Bali</p>
                </div>
            </div>
            <div class="culinary-card">
                <img src="images/makanan/2.jpg" alt="Papeda" class="culinary-card-image">
                <div class="culinary-card-content">
                    <h3 class="culinary-card-title">Papeda</h3>
                    <p class="culinary-card-location">📍 Papua</p>
                </div>
            </div>
            <div class="culinary-card">
                <img src="images/makanan/3.jpg" alt="Rendang" class="culinary-card-image">
                <div class="culinary-card-content">
                    <h3 class="culinary-card-title">Rendang</h3>
                    <p class="culinary-card-location">📍 Padang</p>
                </div>
            </div>
            <div class="culinary-card">
                <img src="images/makanan/4.jpg" alt="Pempek" class="culinary-card-image">
                <div class="culinary-card-content">
                    <h3 class="culinary-card-title">Pempek</h3>
                    <p class="culinary-card-location">📍 Palembang</p>
                </div>
            </div>
        </div>

        <!-- Minuman Section -->
        <h2 class="section-title">Minuman Khas Indonesia</h2>
        <div class="culinary-grid">
            <div class="culinary-card">
                <img src="images/minuman/1.jpg" alt="Wedang Jahe" class="culinary-card-image">
                <div class="culinary-card-content">
                    <h3 class="culinary-card-title">Wedang Jahe</h3>
                    <p class="culinary-card-location">📍 Jawa Tengah</p>
                </div>
            </div>
            <div class="culinary-card">
                <img src="images/minuman/2.jpg" alt="Teh Tarik" class="culinary-card-image">
                <div class="culinary-card-content">
                    <h3 class="culinary-card-title">Teh Tarik</h3>
                    <p class="culinary-card-location">📍 Aceh</p>
                </div>
            </div>
            <div class="culinary-card">
                <img src="images/minuman/3.jpg" alt="Bajigur" class="culinary-card-image">
                <div class="culinary-card-content">
                    <h3 class="culinary-card-title">Bajigur</h3>
                    <p class="culinary-card-location">📍 Jawa Barat</p>
                </div>
            </div>
            <div class="culinary-card">
                <img src="images/minuman/4.jpg" alt="Es Teler" class="culinary-card-image">
                <div class="culinary-card-content">
                    <h3 class="culinary-card-title">Es Teler</h3>
                    <p class="culinary-card-location">📍 Jakarta</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const bannerImages = document.querySelectorAll('.banner-image');
            let currentBanner = 0;

            setInterval(() => {
                bannerImages[currentBanner].classList.remove('active');
                currentBanner = (currentBanner + 1) % bannerImages.length;
                bannerImages[currentBanner].classList.add('active');
            }, 5000);
        });
    </script>
</body>

</html>
