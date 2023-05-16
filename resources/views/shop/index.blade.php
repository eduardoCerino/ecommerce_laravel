


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <script src="https://kit.fontawesome.com/cafafa68cc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/shop/shop.css">

</head>
<body>

<nav>
    <ul>
    <li><a href="{{ route('inicio') }}">Home</a></li>
    <li><a href="{{ route('orders') }}">My orders</a></li>
    <li><p> Hola <span style="color:green;font-weight:bold;"> {{$user_name}}</span> </p></li>
    <li><a href="{{ route('logout') }}">Logout</a></li>
    </ul>
</nav>
 
    <div class="product1">

        <div class="info">
            <h2 class="product-title"> Pw Adidas Tr Mens Nmd Race Sneakers</h2>
            <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                    
            </div>
            <p class="price">$2500</p>
            <p class="description"> Estos estilos llegan a nosotros gracias a un marketplace de tenis especializados y piezas difíciles de conseguir, ya agotadas y sin usar. Cada producto es rigurosamente inspeccionado por expertos que garantizan su autenticidad.</p>

            <form method="post" action="{{ route('shop1.post') }}">
            @csrf
                <input type="hidden" name="article_id" value="1">
                <label for="quantity">Quantity:</label>
                <select name="quantity" id="quantity" required>
                <div class="select-options"></div>
                <option value="" selected disabled hidden>Select</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
                <button id="myButton1"  class="btn-buy">Buy</button>
            </form>



        </div>
        <div class="image">
            <img src="https://freepngimg.com/save/58146-pw-adidas-tr-mens-nmd-race-sneakers/1000x600" alt="">
        </div>
    </div>
    <div class="product2">
        <div class="info">
            <h2 class="product-title"> AIR JORDAN 1 RETRO HIGH OFF-WHITE UNIVERSITY BLUE</h2>
            <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                    
            </div>
            <p class="price">$2500</p>
            <p class="description">For his third edition of the monumental Off-White x Air Jordan 1, Virgil Abloh focused on the "UNC" colorway of Michael Jordan's first signature shoe. Released in June 2018, the Off-White x Air Jordan 1 "UNC" features the recognizable white and Carolina blue leather upper. </p>

            <form method="post" action="{{ route('shop2.post') }}">
            @csrf
                <input type="hidden" name="article_id" value="1">
                <label for="quantity">Quantity:</label>
                <select name="quantity" id="quantity" required>
                    <option value="">Select</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
                <button id="myButton1" class="btn-buy">Buy</button>
            </form>

        </div>
        <div class="image">
            <img src="https://cdn.shopify.com/s/files/1/0575/1560/6175/products/air-jordan-1-retro-high-off-white-university-blue-unc-1-1000.png?v=1634925377" alt="">
        </div>
    </div>
    <div class="product3">
        <div class="info">
            <h2 class="product-title"> G5 | TENIS NIKE OFF-WHITE X DUNK LOW 'UNIVERSITY RED'</h2>
            <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                    
            </div>
            <p class="price">$2500</p>
            <p class="description">For his third edition of the monumental Off-White x Air Jordan 1, Virgil Abloh focused on the "UNC" colorway of Michael Jordan's first signature shoe. Released in June 2018, the Off-White x Air Jordan 1 "UNC" features the recognizable white and Carolina blue leather upper. </p>

            <form method="post" action="{{ route('shop3.post') }}">
            @csrf
                <input type="hidden" name="article_id" value="1">
                <label for="quantity">Quantity:</label>
                <select name="quantity" id="quantity" required>
                    <option value="">Select</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
                <button id="myButton1" class="btn-buy">Buy</button>
            </form>

        </div>
        <div class="image">
            <img src="http://cdn.shopify.com/s/files/1/0118/5293/9360/products/ct0856_600_1_571b7718-f284-443a-9cb9-dcf8f9101af2_1200x1200.png?v=1628832661" alt="">
        </div>
    </div>
   
    
</body>
</html>