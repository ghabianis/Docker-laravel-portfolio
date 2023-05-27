<!DOCTYPE html>
<html>
<head>
    <title>Sell-Online</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
    /* Reset CSS */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* Body styles */
    body {
        font-family: Arial, sans-serif;
    }

    /* Navbar styles */
    .navbar {
        background-color: #2c3e50; /* Update with your desired color */
        color: #fff;
        padding: 10px;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 999;
        display: flex;
        align-items: center;
    }

    .navbar-logo {
        margin: 0;
        font-size: 20px;
        margin-right: auto;
        padding-right: 20px;
    }

    .navbar-menu {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 50%;
    }

    .navbar-menu-item {
        margin-right: 10px;
        color: white;
        text-decoration: none;
    }

    /* Content styles */
    .content {
        margin-left: 0;
        padding: 20px;
        transition: margin 0.3s ease-in-out;
        margin-top: 60px; /* Account for the fixed navbar */
    }

    /* Product list styles */
    .product-list {
        display: flex;
        flex-wrap: wrap;
    }

    .product {
        width: calc(33.33% - 20px);
        margin: 10px;
        padding: 20px;
        background-color: #f9f9f9;
        border: 1px solid #ddd;
        text-align: center;
    }

    .product-description {
        /* ... */
        flex-grow: 1;
    }

    .product-button-container {
        display: flex;
        justify-content: flex-end;
        margin-top: 10px;
    }

    /* ... */
    .product img {
        max-width: 100%;
        height: auto;
    }

    /* Toggle button styles */
    .toggle-button {
        position: absolute;
        top: 10px;
        left: 10px;
        background-color: #333;
        color: #fff;
        border: none;
        padding: 5px 10px;
        cursor: pointer;
    }
    .product-image {
        position: relative;
    }

    .product-image .product-name {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        color: #fff;
        padding: 8px;
        opacity: 0;
        transition: opacity 0.3s;
    }

    .product-image:hover .product-name {
        opacity: 1;
    }
    /* Footer styles */
    .footer {
        background-color: #f9f9f9;
        padding: 20px;
        text-align: center;
    }
    .pagination-arrows {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    .pagination-arrow {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 30px;
        height: 30px;
        border: 1px solid #ccc;
        margin: 0 5px;
        cursor: pointer;
    }
</style>
<!-- CSS here -->
<link rel="stylesheet" href="./css/bootstrap.min.css">
	<link rel="stylesheet" href="./css/owl.carousel.min.css">
	<link rel="stylesheet" href="./css/slicknav.css">
    <link rel="stylesheet" href="./css/flaticon.css">
    <link rel="stylesheet" href="./css/progressbar_barfiller.css">
    <link rel="stylesheet" href="./css/gijgo.css">
    <link rel="stylesheet" href="./css/animate.min.css">
    <link rel="stylesheet" href="./css/animated-headline.css">
	<link rel="stylesheet" href="./css/magnific-popup.css">
	<link rel="stylesheet" href="./css/fontawesome-all.min.css">
	<link rel="stylesheet" href="./css/themify-icons.css">
	<link rel="stylesheet" href="./css/slick.css">
	<link rel="stylesheet" href="./css/nice-select.css">
	<link rel="stylesheet" href="./css/style.css">
</head>
<body>
   <!-- Preloader Start-->
   <header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header ">
                <div class="header-top ">
                   <div class="container-fluid">
                       <div class="col-xl-12">
                            <div class="row d-flex justify-content-lg-between align-items-center">
                                <div class="header-info-left">
                                    <li class="d-none d-lg-block">
                                        <div class="form-box f-right ">
                                            <input type="text" name="Search" placeholder="Search your interest...">
                                            <div class="search-icon">
                                                <i class="ti-search"></i>
                                            </div>
                                        </div>
                                     </li>
                                </div>
                                <div class="header-info-mid">
                                    <!-- logo -->
                                    <div class="logo">
                                        <a href="index.html"><img src="./img/logo/logo.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="header-info-right d-flex align-items-center">
                                   <ul>                                          
                                       <li><a href="about.html">About</a></li>
                                       <li><a href="contact.html">Contact</a></li>
                                       <li><a href="login.html">Log In  or  Sign Up</a></li>
                                   </ul>
                                   <!-- Social -->
                                   <div class="header-social">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                            </div>
                       </div>
                   </div>
                </div>
               <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <!-- logo 2 -->
                                <div class="logo2">
                                    <a href="index.html"><img src="./img/logo/logo.png" alt=""></a>
                                </div>
                                <!-- logo 3 -->
                                <div class="logo3 d-block d-sm-none">
                                    <a href="index.html"><img src="./img/logo/logo-mobile.png" alt=""></a>
                                </div>
                                <!-- Main-menu -->
                                <div class="main-menu text-center d-none d-lg-block">
                                    <nav>                                                
                                        <ul id="navigation">                                                                                                                                     
                                            <li><a href="category.html">All Products</a></li>
                                            <li><a href="category.html">Business</a></li>
                                            <li><a href="category.html">Fashion</a></li>
                                            <li><a href="category.html">Design</a></li>
                                            <li><a href="category.html">Health</a></li>
                                            <li><a href="category.html">Harmful</a></li>
                                            <li><a href="category.html">Technology</a></li>
                                            <li><a href="category.html">Travel</a></li>
                                            <li><a href="category.html">Food</a></li>
                                            <li><a href="category.html">Creative</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div> 
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>
            <!-- Filter -->
        <div class="filter" style="width:10%">
            <label for="category">Filter by Category:</label>
            <select id="category">
                <option value="">All</option>
                <option value="Unbranded">Unbranded</option>
                <option value="Branded">Branded</option>
                <!-- Add more category options as needed -->
            </select>
        </div>
    <div class="content">
        <!-- Product list -->
        <div class="product-list">
            @foreach ($data['products'] as $product)
            <div class="product">
                <div class="product-image">
                    <img src="{{ $product['imageUrl'] }}" alt="{{ $product['productName'] }}"
                        data-toggle="modal" data-target="#productModal{{ $loop->index }}">
                    <div class="product-name">{{ $product['productName'] }}</div>
                </div>
                <h3>{{ $product['productName'] }}</h3>
                <div class="product-description">{{ $product['description'] }}</div>

                <!-- Product Modal -->
                <div class="modal fade" id="productModal{{ $loop->index }}" tabindex="-1" role="dialog"
                    aria-labelledby="productModalLabel{{ $loop->index }}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="productModalLabel{{ $loop->index }}">
                                    {{ $product['productName'] }}
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p><img src="{{ $product['imageUrl'] }}" alt="{{ $product['productName'] }}"></p>
                                <p>Description: {{ $product['description'] }} </p>
                                <p>Price: {{ $product['price'] }} $</p>
                                <p>Category: {{ $product['category'] }}</p>
                                <!-- Add more product information as needed -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Pagination Arrows -->
        <div class="pagination-arrows">
            <div class="pagination-arrow" id="goUp">
                <i class="fas fa-chevron-up"></i>
            </div>
            <div class="pagination-arrow" id="goDown">
                <i class="fas fa-chevron-down"></i>
            </div>
        </div>
    </div>
<footer class="footer">
    <p>&copy;CopyRight for Anis Ghabi : 2023</p>
</footer>
<!-- JS here -->

<script src="./js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./js/owl.carousel.min.js"></script>
    <script src="./js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./js/wow.min.js"></script>
    <script src="./js/animated.headline.js"></script>
    <script src="./js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="./js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="./js/jquery.nice-select.min.js"></script>
    <script src="./js/jquery.sticky.js"></script>
    <!-- Progress -->
    <script src="./js/jquery.barfiller.js"></script>
    
    <!-- counter , waypoint,Hover Direction -->
    <script src="./js/jquery.counterup.min.js"></script>
    <script src="./js/waypoints.min.js"></script>
    <script src="./js/jquery.countdown.min.js"></script>
    <script src="./js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="./js/contact.js"></script>
    <script src="./js/jquery.form.js"></script>
    <script src="./js/jquery.validate.min.js"></script>
    <script src="./js/mail-script.js"></script>
    <script src="./js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="./js/plugins.js"></script>
    <script src="./js/main.js"></script>
    <script>
        // Add this script to enable filtering based on category selection

        const categoryFilter = document.getElementById('category');
        const products = document.querySelectorAll('.product');

        categoryFilter.addEventListener('change', () => {
            const selectedCategory = categoryFilter.value;

            products.forEach((product) => {
                const productCategory = product.getAttribute('data-category');

                if (selectedCategory === '' || productCategory === selectedCategory) {
                    product.style.display = 'block';
                } else {
                    product.style.display = 'none';
                }
            });
        });
    </script>
     <!-- Scroll Up -->
     <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>
</body>
</html>
