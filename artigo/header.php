<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header class="header">
        <a href="../home/index.php" class="logo"><img src="img/logo.png"></a>
        <input type="checkbox" id="check">
        <label for="check" class="icons">
            <i class='bx bx-menu' id="menu-icon"></i>
            <i class='bx bx-x' id="close-icon"></i>
        </label>
       
    </header>

    <script>
         const scrollToVagasButton = document.getElementById("scrollToVagasButton");
  
            scrollToVagasButton.addEventListener("click", () => {
                window.scrollTo({
                top: 1300,
                behavior: "smooth",
            });
        });
        
        const scrollToUpButton = document.getElementById("scrollToUpButton");
  
            scrollToUpButton.addEventListener("click", () => {
                window.scrollTo({
                top: 0,
                behavior: "smooth",
            });
        });
    </script>
</body>
</html>