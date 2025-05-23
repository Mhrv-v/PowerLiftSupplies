
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PowerLift Supplies</title>

  <!--favicon-->
  <link rel="shortcut icon" href="./assets/images/logo/powericon.ico" type="image/x-icon">

  <!--custom css link-->
  <link rel="stylesheet" href="./assets/css/style-prefix.css">
  <link rel="stylesheet" href="./assets/css/cart.css">

  <!--google font link-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"rel="stylesheet"/>
</head>
<body>
  <header>
    <div class="header-top">
      <div class="container">
        <div class="header-alert-news">
          <p>Get up to 50% off new season equipments, limited time only</p>
        </div>

        <ul class="header-social-container">
          <li>
            <a href="#" class="social-link"><ion-icon name="logo-facebook"></ion-icon></a>
          </li>
          <li>
            <a href="#" class="social-link"><ion-icon name="logo-twitter"></ion-icon></a>
          </li>
          <li>
            <a href="#" class="social-link"><ion-icon name="logo-instagram"></ion-icon></a>
          </li>
          <li>
            <a href="#" class="social-link"><ion-icon name="logo-linkedin"></ion-icon></a>
          </li>
        </ul>
      </div>
    </div>

    <div class="header-main">
      <div class="container">
        <a href="index.php" class="header-logo"><img src="./assets/images/logo/logo.svg" alt="Anon's logo" width="160" height="36"></a>
        <div class="header-search-container">
          <input type="search" name="search" class="search-field" placeholder="Search product...">
          <button class="search-btn"><ion-icon name="search-outline"></ion-icon></button>
        </div>

        <div class="header-user-actions">
          <a href="login_register.php"><button class="action-btn"><ion-icon name="person-outline"></ion-icon></button></a>
          <button class="action-btn">
            <ion-icon name="heart-outline"></ion-icon>
            <span class="count">0</span>
          </button>
          <button class="action-btn" id="cart-icon">
            <ion-icon name="bag-handle-outline"></ion-icon>
            <span class="count cart-item-count">0</span>
          </button>
        </div>
      </div>
    </div>

    <nav class="desktop-navigation-menu">
      <div class="container">
        <ul class="desktop-menu-category-list">
          <li class="menu-category">
            <a href="index.php" class="menu-title">Home</a>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">All Products</a>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Cardio</a>
            <ul class="dropdown-list">
              <li class="dropdown-item">
                <a href="#">Stair Master</a>
              </li>
              <li class="dropdown-item">
                <a href="#">Treadmills</a>
              </li>
              <li class="dropdown-item">
                <a href="#">Stationary Bikes</a>
              </li>
              <li class="dropdown-item">
                <a href="#">Rowing Machine</a>
              </li>
            </ul>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Strength</a>
            <ul class="dropdown-list">
              <li class="dropdown-item">
                <a href="#">Kettlebells</a>
              </li>
              <li class="dropdown-item">
                <a href="#">Dumbbells</a>
              </li>
              <li class="dropdown-item">
                <a href="#">Weight Plates</a>
              </li>
              <li class="dropdown-item">
                <a href="#">Power Racks</a>
              </li>
              <li class="dropdown-item">
                <a href="#">Bench Press Station</a>
              </li>
              <li class="dropdown-item">
                <a href="#">Squat Racks</a>
              </li>
              <li class="dropdown-item">
                <a href="#">Cable Machine</a>
              </li>
              <li class="dropdown-item">
                <a href="#">Smith Machine</a>
              </li>
            </ul>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Functional</a>
            <ul class="dropdown-list">
              <li class="dropdown-item">
                <a href="#">Resistance Bands</a>
              </li>
              <li class="dropdown-item">
                <a href="#">Pull-up Bars</a>
              </li>
              <li class="dropdown-item">
                <a href="#">Battle Ropes</a>
              </li>
            </ul>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Leg</a>
            <ul class="dropdown-list">
              <li class="dropdown-item">
                <a href="#">Hip Thrust Machine</a>
              </li>
              <li class="dropdown-item">
                <a href="#">Abductor Machine</a>
              </li>
            </ul>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Recovery</a>
            <ul class="dropdown-list">
              <li class="dropdown-item">
                <a href="#">Foam Rollers</a>
              </li>
            </ul>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Gym Accessories</a>
            <ul class="dropdown-list">
              <li class="dropdown-item">
                <a href="#">Flooring Mats</a>
              </li>
              <li class="dropdown-item">
                <a href="#">Belts</a>
              </li>
              <li class="dropdown-item">
                <a href="#">Gloves</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- MAIN-->
  <main>
 
    <!--BANNER-->
    <div class="banner">
      <div class="container">
        <div class="slider-container has-scrollbar">
          <div class="slider-item">
            <img src="./assets/images/1.png" alt="women's latest fashion sale" class="banner-img">
            <div class="banner-content">
              <p class="banner-subtitle">Trending Gym Equipments</p>
              <h2 class="banner-title">PowerLift's latest Gym Equipment sale</h2>
              <p class="banner-text">starting at ₱ <b>2499</b>.95</p>
              <a href="#" class="banner-btn">Shop now</a>
            </div>
          </div>

          <div class="slider-item">
            <img src="./assets/images/2.png" alt="modern sunglasses" class="banner-img">
            <div class="banner-content">
              <p class="banner-subtitle">Trending Gym Accessories</p>
              <h2 class="banner-title">Flooring Mats</h2>
              <p class="banner-text">starting at ₱ <b>599</b>.99</p>
              <a href="#" class="banner-btn">Shop now</a>
            </div>
          </div>

          <div class="slider-item">
            <img src="./assets/images/3.png" alt="new fashion summer sale" class="banner-img">
            <div class="banner-content">
              <p class="banner-subtitle">Sale Offer</p>
              <h2 class="banner-title">New Gym Equipment Summer sale</h2>
              <p class="banner-text">starting at ₱ <b>2500</b>.00</p>
              <a href="#" class="banner-btn">Shop now</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    

    <!--PRODUCT-->

    <div class="product-container">
      <div class="container">

        <!--SIDEBAR-->

        <div class="sidebar  has-scrollbar" data-mobile-menu>
          <div class="sidebar-category">
            <div class="sidebar-top">
              <h2 class="sidebar-title">Category</h2>
              <button class="sidebar-close-btn" data-mobile-menu-close-btn><ion-icon name="close-outline"></ion-icon></button>
            </div>

            <ul class="sidebar-menu-category-list">
              <li class="sidebar-menu-category">
                <button class="sidebar-accordion-menu" data-accordion-btn>
                  <div class="menu-title-flex">
                    <img src="./assets/images/icons/runner.ico" alt="clothes" width="20" height="20" class="menu-title-img">
                    <p class="menu-title">Cardio</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>
                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Stair Master</p>
                      <data class="stock" title="Available Stock">3</data>
                    </a>
                  </li>
                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Treadmills</p>
                      <data class="stock" title="Available Stock">2</data>
                    </a>
                  </li>
                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Stationary Bikes</p>
                      <data class="stock" title="Available Stock">4</data>
                    </a>
                  </li>
                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Rowing Machine</p>
                      <data class="stock" title="Available Stock">1</data>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="sidebar-menu-category">
                <button class="sidebar-accordion-menu" data-accordion-btn>
                  <div class="menu-title-flex">
                    <img src="./assets/images/icons/weight-lifting.ico" alt="footwear" class="menu-title-img" width="20" height="20">
                    <p class="menu-title">Strength</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>
                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>
                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Kettlebells</p>
                      <data class="stock" title="Available Stock">2</data>
                    </a>
                  </li>
                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Dumbbells</p>
                      <data class="stock" title="Available Stock">3</data>
                    </a>
                  </li>
                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Weight Plates</p>
                      <data class="stock" title="Available Stock">1</data>
                    </a>
                  </li>
                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Power Racks</p>
                      <data class="stock" title="Available Stock">3</data>
                    </a>
                  </li>
                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Bench Press Station</p>
                      <data class="stock" title="Available Stock">4</data>
                    </a>
                  </li>
                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Squat Racks</p>
                      <data class="stock" title="Available Stock">2</data>
                    </a>
                  </li>
                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Cable Machine</p>
                      <data class="stock" title="Available Stock">2</data>
                    </a>
                  </li>
                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Smith Machine</p>
                      <data class="stock" title="Available Stock">3</data>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="sidebar-menu-category">
                <button class="sidebar-accordion-menu" data-accordion-btn>
                  <div class="menu-title-flex">
                    <img src="./assets/images/icons/pull-up.ico" alt="clothes" class="menu-title-img" width="20" height="20">
                    <p class="menu-title">Functional</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>
                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>
                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Resistance Bands</p>
                      <data class="stock" title="Available Stock">3</data>
                    </a>
                  </li>
                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Pull-up Bars</p>
                      <data class="stock" title="Available Stock">2</data>
                    </a>
                  </li>
                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Battle Ropes</p>
                      <data class="stock" title="Available Stock">4</data>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="sidebar-menu-category">
                <button class="sidebar-accordion-menu" data-accordion-btn>
                  <div class="menu-title-flex">
                    <img src="./assets/images/icons/leg-press.ico" alt="perfume" class="menu-title-img" width="20" height="20">
                    <p class="menu-title">Leg</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>
                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>
                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Hip Thrust Machine</p>
                      <data class="stock" title="Available Stock">4</data>
                    </a>
                  </li>
                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Abductor Machine</p>
                      <data class="stock" title="Available Stock">4</data>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="sidebar-menu-category">
                <button class="sidebar-accordion-menu" data-accordion-btn>
                  <div class="menu-title-flex">
                    <img src="./assets/images/icons/physical-therapy.ico" alt="cosmetics" class="menu-title-img" width="20" height="20">
                    <p class="menu-title">Recovery</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>
                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>
                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Foam Rollers</p>
                      <data class="stock" title="Available Stock">4</data>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="sidebar-menu-category">
                <button class="sidebar-accordion-menu" data-accordion-btn>
                  <div class="menu-title-flex">
                    <img src="./assets/images/icons/duffle-bag.ico" alt="glasses" class="menu-title-img" width="20" height="20">
                    <p class="menu-title">Gym Accessories</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>
                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>
                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Floring Mats</p>
                      <data class="stock" title="Available Stock">3</data>
                    </a>
                  </li>
                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Weight Lifting Belts</p>
                      <data class="stock" title="Available Stock">2</data>
                    </a>
                  </li>
                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Weight Lifting Gloves</p>
                      <data class="stock" title="Available Stock">2</data>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>

          <div class="product-showcase">
            <h3 class="showcase-heading">best sellers</h3>
            <div class="showcase-wrapper">
              <div class="showcase-container">
                <div class="showcase">
                  <a href="#" class="showcase-img-box">
                    <img src="./assets/images/equip/bike1.jpg" alt="baby fabric shoes" width="75" height="75" class="showcase-img">
                  </a>

                  <div class="showcase-content">
                    <a href="#"><h4 class="showcase-title">Peleton Bike+</h4></a>
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <div class="price-box">
                      <del>₱140,737.96</del>
                      <p class="price">₱120,999.99</p>
                    </div>
                  </div>
                </div>

                <div class="showcase">
                  <a href="#" class="showcase-img-box">
                    <img src="./assets/images/equip/dumbell1.jpg" alt="baby fabric shoes" width="75" height="75" class="showcase-img">
                  </a>

                  <div class="showcase-content">
                    <a href="#"><h4 class="showcase-title">Rogue Dumbells</h4></a>
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <div class="price-box">
                      <del>₱7,896.56</del>
                      <p class="price">₱3,499.99</p>
                    </div>
                  </div>
                </div>

                <div class="showcase">
                  <a href="#" class="showcase-img-box">
                    <img src="./assets/images/equip/bodypress1.jpg" alt="baby fabric shoes" width="75" height="75" class="showcase-img">
                  </a>

                  <div class="showcase-content">
                    <a href="#"><h4 class="showcase-title">Ultimate Body Press XL</h4></a>
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <div class="price-box">
                      <del>₱6,034.53</del>
                      <p class="price">₱2,999.99</p>
                    </div>
                  </div>
                </div>

                <div class="showcase">
                  <a href="#" class="showcase-img-box">
                    <img src="./assets/images/equip/mat.jpg" alt="baby fabric shoes" width="75" height="75" class="showcase-img">
                  </a>

                  <div class="showcase-content">
                    <a href="#"><h4 class="showcase-title">AmazonBasics High-Density Mat</h4></a>
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <div class="price-box">
                      <del>₱1,239.85</del>
                      <p class="price">₱899.99</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="product-box">
          <!--PRODUCT MINIMAL-->
          <div class="product-minimal">
            <div class="product-showcase">
              <h2 class="title">New Arrivals</h2>
              <div class="showcase-wrapper has-scrollbar">
                <div class="showcase-container">
                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/equip/bodypress1.jpg" alt="relaxed short full sleeve t-shirt" width="70" class="showcase-img">
                    </a>
                    <div class="showcase-content">
                      <a href="#"><h4 class="showcase-title">Rogue Ohio Lifting Belt</h4></a>
                      <a href="#" class="showcase-category">Weight Lifting Belt</a>

                      <div class="price-box">
                        <p class="price">₱1,899.99</p>
                        <del>₱1,972.59</del>
                      </div>
                    </div>
                  </div>

                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/equip/darkiron.jpg" alt="relaxed short full sleeve t-shirt" width="70" class="showcase-img">
                    </a>
                    <div class="showcase-content">
                      <a href="#"><h4 class="showcase-title">Dark Iron Fitness Belt</h4></a>
                      <a href="#" class="showcase-category">Weight Lifting Belt</a>

                      <div class="price-box">
                        <p class="price">₱2,599.99</p>
                        <del>₱2,883.58</del>
                      </div>
                    </div>
                  </div>

                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/equip/glove1.jpg" alt="relaxed short full sleeve t-shirt" width="70" class="showcase-img">
                    </a>
                    <div class="showcase-content">
                      <a href="#"><h4 class="showcase-title">Trideer Weight Lifting Gloves</h4></a>
                      <a href="#" class="showcase-category">Weight Lifting Gloves</a>

                      <div class="price-box">
                        <p class="price">₱849.99</p>
                        <del>₱901.40</del>
                      </div>
                    </div>
                  </div>

                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/equip/glove2.jpg" alt="relaxed short full sleeve t-shirt" width="70" class="showcase-img">
                    </a>
                    <div class="showcase-content">
                      <a href="#"><h4 class="showcase-title">Nordic Lifting Gloves</h4></a>
                      <a href="#" class="showcase-category">Weight Lifting Gloves</a>

                      <div class="price-box">
                        <p class="price">₱1,049.99</p>
                        <del>₱1,296.82</del>
                      </div>
                    </div>
                  </div>

                </div>

                <div class="showcase-container">
                <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/equip/bodypress1.jpg" alt="relaxed short full sleeve t-shirt" width="70" class="showcase-img">
                    </a>
                    <div class="showcase-content">
                      <a href="#"><h4 class="showcase-title">Rogue Ohio Lifting Belt</h4></a>
                      <a href="#" class="showcase-category">Weight Lifting Belt</a>

                      <div class="price-box">
                        <p class="price">₱1,899.99</p>
                        <del>₱1,972.59</del>
                      </div>
                    </div>
                  </div>

                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/equip/darkiron.jpg" alt="relaxed short full sleeve t-shirt" width="70" class="showcase-img">
                    </a>
                    <div class="showcase-content">
                      <a href="#"><h4 class="showcase-title">Dark Iron Fitness Belt</h4></a>
                      <a href="#" class="showcase-category">Weight Lifting Belt</a>

                      <div class="price-box">
                        <p class="price">₱2,599.99</p>
                        <del>₱2,883.58</del>
                      </div>
                    </div>
                  </div>

                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/equip/glove1.jpg" alt="relaxed short full sleeve t-shirt" width="70" class="showcase-img">
                    </a>
                    <div class="showcase-content">
                      <a href="#"><h4 class="showcase-title">Trideer Weight Lifting Gloves</h4></a>
                      <a href="#" class="showcase-category">Weight Lifting Gloves</a>

                      <div class="price-box">
                        <p class="price">₱849.99</p>
                        <del>₱901.40</del>
                      </div>
                    </div>
                  </div>

                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/equip/glove2.jpg" alt="relaxed short full sleeve t-shirt" width="70" class="showcase-img">
                    </a>
                    <div class="showcase-content">
                      <a href="#"><h4 class="showcase-title">Nordic Lifting Gloves</h4></a>
                      <a href="#" class="showcase-category">Weight Lifting Gloves</a>

                      <div class="price-box">
                        <p class="price">₱1,049.99</p>
                        <del>₱1,296.82</del>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="product-showcase">
              <h2 class="title">Trending</h2>
              <div class="showcase-wrapper  has-scrollbar">
                <div class="showcase-container">
                <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/equip/bodypress1.jpg" alt="relaxed short full sleeve t-shirt" width="70" class="showcase-img">
                    </a>
                    <div class="showcase-content">
                      <a href="#"><h4 class="showcase-title">Rogue Ohio Lifting Belt</h4></a>
                      <a href="#" class="showcase-category">Weight Lifting Belt</a>

                      <div class="price-box">
                        <p class="price">₱1,899.99</p>
                        <del>₱1,972.59</del>
                      </div>
                    </div>
                  </div>

                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/equip/darkiron.jpg" alt="relaxed short full sleeve t-shirt" width="70" class="showcase-img">
                    </a>
                    <div class="showcase-content">
                      <a href="#"><h4 class="showcase-title">Dark Iron Fitness Belt</h4></a>
                      <a href="#" class="showcase-category">Weight Lifting Belt</a>

                      <div class="price-box">
                        <p class="price">₱2,599.99</p>
                        <del>₱2,883.58</del>
                      </div>
                    </div>
                  </div>

                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/equip/glove1.jpg" alt="relaxed short full sleeve t-shirt" width="70" class="showcase-img">
                    </a>
                    <div class="showcase-content">
                      <a href="#"><h4 class="showcase-title">Trideer Weight Lifting Gloves</h4></a>
                      <a href="#" class="showcase-category">Weight Lifting Gloves</a>

                      <div class="price-box">
                        <p class="price">₱849.99</p>
                        <del>₱901.40</del>
                      </div>
                    </div>
                  </div>

                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/equip/glove2.jpg" alt="relaxed short full sleeve t-shirt" width="70" class="showcase-img">
                    </a>
                    <div class="showcase-content">
                      <a href="#"><h4 class="showcase-title">Nordic Lifting Gloves</h4></a>
                      <a href="#" class="showcase-category">Weight Lifting Gloves</a>

                      <div class="price-box">
                        <p class="price">₱1,049.99</p>
                        <del>₱1,296.82</del>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="product-showcase">
              <h2 class="title">Top Rated</h2>
              <div class="showcase-wrapper  has-scrollbar">
                <div class="showcase-container">
                <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/equip/bodypress1.jpg" alt="relaxed short full sleeve t-shirt" width="70" class="showcase-img">
                    </a>
                    <div class="showcase-content">
                      <a href="#"><h4 class="showcase-title">Rogue Ohio Lifting Belt</h4></a>
                      <a href="#" class="showcase-category">Weight Lifting Belt</a>

                      <div class="price-box">
                        <p class="price">₱1,899.99</p>
                        <del>₱1,972.59</del>
                      </div>
                    </div>
                  </div>

                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/equip/darkiron.jpg" alt="relaxed short full sleeve t-shirt" width="70" class="showcase-img">
                    </a>
                    <div class="showcase-content">
                      <a href="#"><h4 class="showcase-title">Dark Iron Fitness Belt</h4></a>
                      <a href="#" class="showcase-category">Weight Lifting Belt</a>

                      <div class="price-box">
                        <p class="price">₱2,599.99</p>
                        <del>₱2,883.58</del>
                      </div>
                    </div>
                  </div>

                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/equip/glove1.jpg" alt="relaxed short full sleeve t-shirt" width="70" class="showcase-img">
                    </a>
                    <div class="showcase-content">
                      <a href="#"><h4 class="showcase-title">Trideer Weight Lifting Gloves</h4></a>
                      <a href="#" class="showcase-category">Weight Lifting Gloves</a>

                      <div class="price-box">
                        <p class="price">₱849.99</p>
                        <del>₱901.40</del>
                      </div>
                    </div>
                  </div>

                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/equip/glove2.jpg" alt="relaxed short full sleeve t-shirt" width="70" class="showcase-img">
                    </a>
                    <div class="showcase-content">
                      <a href="#"><h4 class="showcase-title">Nordic Lifting Gloves</h4></a>
                      <a href="#" class="showcase-category">Weight Lifting Gloves</a>

                      <div class="price-box">
                        <p class="price">₱1,049.99</p>
                        <del>₱1,296.82</del>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!--PRODUCT FEATURED-->

          <div class="product-featured">
            <h2 class="title">Deal of the day</h2>
            <div class="showcase-wrapper has-scrollbar">
              <div class="showcase-container">
                <div class="showcase">
                  <div class="showcase-banner">
                    <img src="./assets/images/equip/set1.jpg" alt="shampoo, conditioner & facewash packs" class="showcase-img">
                  </div>
                  <div class="showcase-content">
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>
                    <a href="#"><h3 class="showcase-title">dumbell, kettlebell & weight plate</h3></a>
                    <p class="showcase-desc">Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor dolor sit amet consectetur Lorem ipsum dolor</p>
                    <div class="price-box">
                      <p class="price">₱10,499.99</p>
                      <del>₱11,281.60</del>
                    </div>

                    <button class="add-cart-btn">add to cart</button>

                    <div class="showcase-status">
                      <div class="wrapper">
                        <p>already sold: <b>14</b></p>
                        <p>available: <b>16</b></p>
                      </div>
                      <div class="showcase-status-bar"></div>
                    </div>

                    <div class="countdown-box">
                      <p class="countdown-desc">Hurry Up! Offer ends in:</p>
                      <div class="countdown">
                        <div class="countdown-content">
                          <p class="display-number">360</p>
                          <p class="display-text">Days</p>
                        </div>
                        <div class="countdown-content">
                          <p class="display-number">24</p>
                          <p class="display-text">Hours</p>
                        </div>
                        <div class="countdown-content">
                          <p class="display-number">59</p>
                          <p class="display-text">Min</p>
                        </div>
                        <div class="countdown-content">
                          <p class="display-number">00</p>
                          <p class="display-text">Sec</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="showcase-container">
                <div class="showcase">
                  <div class="showcase-banner">
                    <img src="./assets/images/equip/foamroller.jpg" alt="shampoo, conditioner & facewash packs" class="showcase-img">
                  </div>
                  <div class="showcase-content">
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>
                    <a href="#"><h3 class="showcase-title">foam rollers</h3></a>
                    <p class="showcase-desc">Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor dolor sit amet consectetur Lorem ipsum dolor</p>
                    <div class="price-box">
                      <p class="price">₱1,899.99</p>
                      <del>₱2,303.14</del>
                    </div>

                    <button class="add-cart-btn">add to cart</button>

                    <div class="showcase-status">
                      <div class="wrapper">
                        <p>already sold: <b>21</b></p>
                        <p>available: <b>9</b></p>
                      </div>
                      <div class="showcase-status-bar"></div>
                    </div>

                    <div class="countdown-box">
                      <p class="countdown-desc">Hurry Up! Offer ends in:</p>
                      <div class="countdown">
                        <div class="countdown-content">
                          <p class="display-number">360</p>
                          <p class="display-text">Days</p>
                        </div>
                        <div class="countdown-content">
                          <p class="display-number">24</p>
                          <p class="display-text">Hours</p>
                        </div>
                        <div class="countdown-content">
                          <p class="display-number">59</p>
                          <p class="display-text">Min</p>
                        </div>
                        <div class="countdown-content">
                          <p class="display-number">00</p>
                          <p class="display-text">Sec</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!--PRODUCT GRID-->

          <div class="product-main">
            <h2 class="title">New Products</h2>
            <div class="product-grid">
              <div class="showcase">
                <div class="showcase-banner">
                  <img src="./assets/images/equip/mat.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img default">
                  <img src="./assets/images/equip/foamroller.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img hover">
                  <p class="showcase-badge">15%</p>
                  <div class="showcase-actions">
                    <button class="btn-action ">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
                    <button class="btn-action add-cart">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Treadmill</a>
                  <a href="#"><h3 class="showcase-title">Sole F85</h3></a>

                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>

                  <div class="price-box">
                    <p class="price">₱135,209</p>
                    <del>₱159,070</del>
                  </div>
                </div>
              </div>

              <div class="showcase">
                <div class="showcase-banner">
                  <img src="./assets/images/equip/foamroller.jpg" alt="Pure Garment Dyed Cotton Shirt" class="product-img default" width="300">
                  <img src="./assets/images/equip/glove1.jpg" alt="Pure Garment Dyed Cotton Shirt" class="product-img hover" width="300">
                  <p class="showcase-badge angle black">sale</p>
                  <div class="showcase-actions">
                    <button class="btn-action ">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
                    <button class="btn-action add-cart">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Stair Master</a>
                  <a href="#"><h3 class="showcase-title">Stair Master SM5</h3></a>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">₱199,999</p>
                    <del>₱219,370</del>
                  </div>
                </div>
              </div>

              <div class="showcase">
                <div class="showcase-banner">
                  <img src="./assets/images/equip/mat.jpg" alt="MEN Yarn Fleece Full-Zip Jacket" class="product-img default" width="300">
                  <img src="./assets/images/equip/dumbell1.jpg" alt="MEN Yarn Fleece Full-Zip Jacket" class="product-img hover" width="300">
                  <div class="showcase-actions">
                    <button class="btn-action ">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
                    <button class="btn-action add-cart">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Treadmill</a>
                  <a href="#"><h3 class="showcase-title">ProForm Pro 2000</h3></a>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
                  <div class="price-box">
                    <p class="price">₱138,199.04</p>
                  </div>
                </div>
              </div>

              <div class="showcase">
                <div class="showcase-banner">
                  <img src="./assets/images/equip/mat.jpg" alt="Black Floral Wrap Midi Skirt" class="product-img default" width="300">
                  <img src="./assets/images/equip/set1.jpg" alt="Black Floral Wrap Midi Skirt" class="product-img hover" width="300">
                  <p class="showcase-badge angle pink">new</p>
          
                  <div class="showcase-actions">
                    <button class="btn-action ">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
                    <button class="btn-action add-cart">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Stationary Bike</a>
                  <a href="#"><h3 class="showcase-title">Echelon EX-5S</h3></a>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">₱56,351.59</p>
                  </div>
                </div>
              </div>

              <div class="showcase">
                <div class="showcase-banner">
                  <img src="./assets/images/equip/mat.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img default">
                  <img src="./assets/images/equip/foamroller.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img hover">
                  <p class="showcase-badge">15%</p>
                  <div class="showcase-actions">
                    <button class="btn-action ">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
                    <button class="btn-action add-cart">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Treadmill</a>
                  <a href="#"><h3 class="showcase-title">Sole F85</h3></a>

                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>

                  <div class="price-box">
                    <p class="price">₱135,209</p>
                    <del>₱159,070</del>
                  </div>
                </div>
              </div>

              <div class="showcase">
                <div class="showcase-banner">
                  <img src="./assets/images/equip/foamroller.jpg" alt="Pure Garment Dyed Cotton Shirt" class="product-img default" width="300">
                  <img src="./assets/images/equip/glove1.jpg" alt="Pure Garment Dyed Cotton Shirt" class="product-img hover" width="300">
                  <p class="showcase-badge angle black">sale</p>
                  <div class="showcase-actions">
                    <button class="btn-action ">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
                    <button class="btn-action add-cart">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Stair Master</a>
                  <a href="#"><h3 class="showcase-title">Stair Master SM5</h3></a>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">₱199,999</p>
                    <del>₱219,370</del>
                  </div>
                </div>
              </div>

              <div class="showcase">
                <div class="showcase-banner">
                  <img src="./assets/images/equip/mat.jpg" alt="MEN Yarn Fleece Full-Zip Jacket" class="product-img default" width="300">
                  <img src="./assets/images/equip/dumbell1.jpg" alt="MEN Yarn Fleece Full-Zip Jacket" class="product-img hover" width="300">
                  <div class="showcase-actions">
                    <button class="btn-action ">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
                    <button class="btn-action add-cart">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Treadmill</a>
                  <a href="#"><h3 class="showcase-title">ProForm Pro 2000</h3></a>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
                  <div class="price-box">
                    <p class="price">₱138,199.04</p>
                  </div>
                </div>
              </div>

              <div class="showcase">
                <div class="showcase-banner">
                  <img src="./assets/images/equip/mat.jpg" alt="Black Floral Wrap Midi Skirt" class="product-img default" width="300">
                  <img src="./assets/images/equip/set1.jpg" alt="Black Floral Wrap Midi Skirt" class="product-img hover" width="300">
                  <p class="showcase-badge angle pink">new</p>
          
                  <div class="showcase-actions">
                    <button class="btn-action ">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
                    <button class="btn-action add-cart">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Stationary Bike</a>
                  <a href="#"><h3 class="showcase-title">Echelon EX-5S</h3></a>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">₱56,351.59</p>
                  </div>
                </div>
              </div>

              <div class="showcase">
                <div class="showcase-banner">
                  <img src="./assets/images/equip/mat.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img default">
                  <img src="./assets/images/equip/foamroller.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img hover">
                  <p class="showcase-badge">15%</p>
                  <div class="showcase-actions">
                    <button class="btn-action ">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
                    <button class="btn-action add-cart">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Treadmill</a>
                  <a href="#"><h3 class="showcase-title">Sole F85</h3></a>

                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>

                  <div class="price-box">
                    <p class="price">₱135,209</p>
                    <del>₱159,070</del>
                  </div>
                </div>
              </div>

              <div class="showcase">
                <div class="showcase-banner">
                  <img src="./assets/images/equip/foamroller.jpg" alt="Pure Garment Dyed Cotton Shirt" class="product-img default" width="300">
                  <img src="./assets/images/equip/glove1.jpg" alt="Pure Garment Dyed Cotton Shirt" class="product-img hover" width="300">
                  <p class="showcase-badge angle black">sale</p>
                  <div class="showcase-actions">
                    <button class="btn-action ">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
                    <button class="btn-action add-cart">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Stair Master</a>
                  <a href="#"><h3 class="showcase-title">Stair Master SM5</h3></a>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">₱199,999</p>
                    <del>₱219,370</del>
                  </div>
                </div>
              </div>

              <div class="showcase">
                <div class="showcase-banner">
                  <img src="./assets/images/equip/mat.jpg" alt="MEN Yarn Fleece Full-Zip Jacket" class="product-img default" width="300">
                  <img src="./assets/images/equip/dumbell1.jpg" alt="MEN Yarn Fleece Full-Zip Jacket" class="product-img hover" width="300">
                  <div class="showcase-actions">
                    <button class="btn-action ">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
                    <button class="btn-action add-cart">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Treadmill</a>
                  <a href="#"><h3 class="showcase-title">ProForm Pro 2000</h3></a>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
                  <div class="price-box">
                    <p class="price">₱138,199.04</p>
                  </div>
                </div>
              </div>

              <div class="showcase">
                <div class="showcase-banner">
                  <img src="./assets/images/equip/mat.jpg" alt="Black Floral Wrap Midi Skirt" class="product-img default" width="300">
                  <img src="./assets/images/equip/set1.jpg" alt="Black Floral Wrap Midi Skirt" class="product-img hover" width="300">
                  <p class="showcase-badge angle pink">new</p>
          
                  <div class="showcase-actions">
                    <button class="btn-action ">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
                    <button class="btn-action add-cart">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Stationary Bike</a>
                  <a href="#"><h3 class="showcase-title">Echelon EX-5S</h3></a>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">₱56,351.59</p>
                  </div>
                </div>
              </div>

              <div class="showcase">
                <div class="showcase-banner">
                  <img src="./assets/images/equip/mat.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img default">
                  <img src="./assets/images/equip/foamroller.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img hover">
                  <p class="showcase-badge">15%</p>
                  <div class="showcase-actions">
                    <button class="btn-action ">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
                    <button class="btn-action add-cart">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Treadmill</a>
                  <a href="#"><h3 class="showcase-title">Sole F85</h3></a>

                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>

                  <div class="price-box">
                    <p class="price">₱135,209</p>
                    <del>₱159,070</del>
                  </div>
                </div>
              </div>

              <div class="showcase">
                <div class="showcase-banner">
                  <img src="./assets/images/equip/foamroller.jpg" alt="Pure Garment Dyed Cotton Shirt" class="product-img default" width="300">
                  <img src="./assets/images/equip/glove1.jpg" alt="Pure Garment Dyed Cotton Shirt" class="product-img hover" width="300">
                  <p class="showcase-badge angle black">sale</p>
                  <div class="showcase-actions">
                    <button class="btn-action ">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
                    <button class="btn-action add-cart">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Stair Master</a>
                  <a href="#"><h3 class="showcase-title">Stair Master SM5</h3></a>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">₱199,999</p>
                    <del>₱219,370</del>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--CART-->

    <div class="cart">
      <h2 class="cart-title">Shopping Cart</h2>
      <div class="cart-content">
        <!-- <div class="cart-box">
          <img src="./assets/images/products/shoe-1.jpg" alt="cart-img">
          <div class="cart-detail">
            <div class="cart-info">
              <h2 class="cart-product-title">Milo</h2>
              <span class="cart-price">20</span>
              <div class="cart-quantity">
                <button class="decrement">-</button>
                <span class="number">1</span>
                <button class="increment">+</button>
              </div>
            </div>
            <i class="ri-delete-bin-line cart-remove"></i>
          </div>
        </div> -->
      </div>

      <div class="cart-footer">
        <div class="total">
          <div class="total-title">Total</div>
          <div class="total-price">₱0</div>
        </div>
        <button class="btn-buy">Checkout</button>
      </div>

      <i class="ri-close-line" id="cart-close"></i>
    </div>



    <!--TESTIMONIALS, CTA & SERVICE-->

    <div>
      <div class="container">
        <div class="testimonials-box">

          <!--TESTIMONIALS-->

          <div class="testimonial">
            <h2 class="title">testimonial</h2>
            <div class="testimonial-card">
              <img src="./assets/images/" alt="profile" class="testimonial-banner" width="80" height="80">
              <p class="testimonial-name">GROUP 1</p>
              <p class="testimonial-title">BSIT603</p>
              <img src="./assets/images/icons/quotes.svg" alt="quotation" class="quotation-img" width="26">
              <p class="testimonial-desc">Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor dolor sit amet.</p>
            </div>
          </div>

          <!--CTA-->

          <div class="cta-container">
            <img src="./assets/images/4.png" alt="summer collection" class="cta-banner">
            <a href="#" class="cta-content">
              <p class="discount">25% Discount</p>
              <h2 class="cta-title">Summer collection</h2>
              <p class="cta-text">Starting @ ₱10</p>
              <button class="cta-btn">Shop now</button>
            </a>
          </div>

          <!--SERVICE-->

          <div class="service">
            <h2 class="title">Our Services</h2>
            <div class="service-container">
              <a href="#" class="service-item">
                <div class="service-icon">
                  <ion-icon name="boat-outline"></ion-icon>
                </div>
                <div class="service-content">
                  <h3 class="service-title">Worldwide Delivery</h3>
                  <p class="service-desc">For Order Over ₱100</p>
                </div>
              </a>

              <a href="#" class="service-item">
                <div class="service-icon">
                  <ion-icon name="rocket-outline"></ion-icon>
                </div>
                <div class="service-content">
                  <h3 class="service-title">Next Day delivery</h3>
                  <p class="service-desc">UK Orders Only</p>
                </div>
              </a>

              <a href="#" class="service-item">
                <div class="service-icon">
                  <ion-icon name="call-outline"></ion-icon>
                </div>
                <div class="service-content">
                  <h3 class="service-title">Best Online Support</h3>
                  <p class="service-desc">Hours: 8AM - 11PM</p>
                </div>
              </a>

              <a href="#" class="service-item">
                <div class="service-icon">
                  <ion-icon name="arrow-undo-outline"></ion-icon>
                </div>
                <div class="service-content">
                  <h3 class="service-title">Return Policy</h3>
                  <p class="service-desc">Easy & Free Return</p>
                </div>
              </a>

              <a href="#" class="service-item">
                <div class="service-icon">
                  <ion-icon name="ticket-outline"></ion-icon>
                </div>
                <div class="service-content">
                  <h3 class="service-title">30% money back</h3>
                  <p class="service-desc">For Order Over ₱100</p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <?php include('footer.php');?>

  <!--custom js link-->
  <script src="./assets/js/script.js"></script>
  <script src="./assets/js/cart.js"></script>

  <!--ionicon link-->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>