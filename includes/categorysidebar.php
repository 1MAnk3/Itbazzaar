<?php
// get best sellers (We keep this because it still works!)
$best_sellers = get_best_sellers();
?>

<div class="sidebar has-scrollbar" data-mobile-menu>
  <div class="sidebar-category">
    <div class="sidebar-top">
      <h2 class="sidebar-title">Category</h2>
      <button class="sidebar-close-btn" data-mobile-menu-close-btn>
        <ion-icon name="close-outline"></ion-icon>
      </button>
    </div>

    <ul class="sidebar-menu-category-list">
      
      <li class="sidebar-menu-category">
        <form class="search-form" method="post" action="./search.php">
          <input type="hidden" name="search" value="cpu" />
          <button type="submit" name="submit" class="sidebar-accordion-menu">
            <div class="menu-title-flex">
              <p class="menu-title">Processors (CPU)</p>
            </div>
          </button>
        </form>
      </li>

      <li class="sidebar-menu-category">
        <form class="search-form" method="post" action="./search.php">
          <input type="hidden" name="search" value="gpu" />
          <button type="submit" name="submit" class="sidebar-accordion-menu">
            <div class="menu-title-flex">
              <p class="menu-title">Graphics Cards (GPU)</p>
            </div>
          </button>
        </form>
      </li>

      <li class="sidebar-menu-category">
        <form class="search-form" method="post" action="./search.php">
          <input type="hidden" name="search" value="ram" />
          <button type="submit" name="submit" class="sidebar-accordion-menu">
            <div class="menu-title-flex">
              <p class="menu-title">Memory (RAM)</p>
            </div>
          </button>
        </form>
      </li>

      <li class="sidebar-menu-category">
        <form class="search-form" method="post" action="./search.php">
          <input type="hidden" name="search" value="motherboard" />
          <button type="submit" name="submit" class="sidebar-accordion-menu">
            <div class="menu-title-flex">
              <p class="menu-title">Motherboards</p>
            </div>
          </button>
        </form>
      </li>

      <li class="sidebar-menu-category">
        <form class="search-form" method="post" action="./search.php">
          <input type="hidden" name="search" value="storage" />
          <button type="submit" name="submit" class="sidebar-accordion-menu">
            <div class="menu-title-flex">
              <p class="menu-title">Storage (SSD/HDD)</p>
            </div>
          </button>
        </form>
      </li>

      <li class="sidebar-menu-category">
        <form class="search-form" method="post" action="./search.php">
          <input type="hidden" name="search" value="monitor" />
          <button type="submit" name="submit" class="sidebar-accordion-menu">
            <div class="menu-title-flex">
              <p class="menu-title">Monitors</p>
            </div>
          </button>
        </form>
      </li>

    </ul>
  </div>

  <div class="product-showcase">
    <h3 class="showcase-heading">best sellers</h3>

    <div class="showcase-wrapper">
      <div class="showcase-container">
        <?php while ($row = mysqli_fetch_assoc($best_sellers)) { ?>

          <div class="showcase">
            <a href="./viewdetail.php?id=<?php echo $row['product_id']; ?>&category=<?php echo $row['category_id']; ?>" class="showcase-img-box">
              <img src="./admin/upload/<?php echo $row['product_img']; ?>" alt="best sellers img" width="75" height="75" class="showcase-img" />
            </a>

            <div class="showcase-content">
              <a href="./viewdetail.php?id=<?php echo $row['product_id']; ?>&category=<?php echo $row['category_id']; ?>">
                <h4 class="showcase-title"><?php echo $row['product_title']; ?></h4>
              </a>
              <div class="showcase-rating">
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
              </div>
              <div class="price-box">
                <del>$<?php echo $row['product_price']; ?></del>
                <p class="price">$<?php echo $row['product_price']; ?></p>
              </div>
            </div>
          </div>

        <?php } ?>

      </div>
    </div>
  </div>
</div>