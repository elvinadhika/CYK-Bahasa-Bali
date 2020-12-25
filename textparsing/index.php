<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text Parsing</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="container full-height-grow">
    <header class="main-header">
        <div class="img-wrapper">
            <a href="index.php" class="brand-logo">
                <img src="https://www.flaticon.com/svg/static/icons/svg/2844/2844396.svg" alt="Text-Search">
            </a>
        </div>
        <nav class="main-nav">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="evaluasi.php">Evaluasi</a></li>
                
            </ul>
        </nav>    
    </header>
    <section class="main main-section">
        <div class="tittle">
            <h1>Text Parsing</h1>
        </div>
        <form action="parsing.php" method="POST">
            <div class="input-group">
                <input type="text" name="text" id="text" placeholder="Masukan Kata Bahasa Bali..." style="width: 710px">
                <span><button class="btn">Search</button></span>
            </div>
        </form>

    </section>

</body>
</html>