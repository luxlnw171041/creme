@extends('layouts.theme')
  @section('content')
<body>
  <main id="main">
  
    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu" style="margin-top:70px">
      <div class="container">

        <div class="section-title">
          <h2>Check our tasty <span>Menu</span></h2>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">Show All</li>
              <li data-filter=".filter-bakery">Bakery</li>
              <li data-filter=".filter-beverages">Beverages</li>
              <li data-filter=".filter-croissant">Croissant</li>
              <li data-filter=".filter-dippingsauce">Dipping Sauce</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container">

          <div class="col-lg-6 menu-item filter-bakery">
            <div class="menu-content">
              <a href="#">Truffle Butter Cheese Roll</a><span>฿89</span>
            </div>
            <div class="menu-ingredients">
            ทรัฟเฟิลชีสบัตเตอร์โรล
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-bakery">
            <div class="menu-content">
              <a href="#">Cheesy Ham Pizza Roll</a><span>฿89</span>
            </div>
            <div class="menu-ingredients">
            แฮมชีสพิซซ่าโรล
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-bakery">
            <div class="menu-content">
              <a href="#">Creamcheese Garlic Butter Baguette</a><span>฿89</span>
            </div>
            <div class="menu-ingredients">
                ขนมปังเนยกระเทียมครีมชีส
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-bakery">
            <div class="menu-content">
              <a href="#">Butter Cheese Roll</a><span>฿69</span>
            </div>
            <div class="menu-ingredients">
            บัตเตอร์ชีสโรล
            </div>
          </div>
          
          <div class="col-lg-6 menu-item filter-bakery">
            <div class="menu-content">
              <a href="#">Super Cheesy Sandwish</a><span>฿89</span>
            </div>
            <div class="menu-ingredients">
            แซนวิสชีสทะลัก
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-bakery">
            <div class="menu-content">
              <a href="#">Creamcheese Garlic Butter with Clam Roll</a><span>฿89</span>
            </div>
            <div class="menu-ingredients">
            ขนมปังเนยกระเทียมหอยลายครีมชีส
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-bakery">
            <div class="menu-content">
              <a href="#">Cinnamon Roll</a><span>฿65</span>
            </div>
            <div class="menu-ingredients">
              ชินนามอนโรล
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-bakery">
            <div class="menu-content">
              <a href="#">Custard Cream Raisin Danish</a><span>฿65</span>
            </div>
            <div class="menu-ingredients">
              เดนิสครีมลูดเกด
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-bakery">
            <div class="menu-content">
              <a href="#">Raisin Scone</a><span>฿35</span>
            </div>
            <div class="menu-ingredients">
            สโคนลูกเกด
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-bakery">
            <div class="menu-content">
              <a href="#">Amashuko</a><span>฿35</span>
            </div>
            <div class="menu-ingredients">
            อะมาชูคุ
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-bakery">
            <div class="menu-content">
              <a href="#">milk stick</a><span>฿25</span>
            </div>
            <div class="menu-ingredients">
            ขนมปังนม
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-bakery">
            <div class="menu-content">
              <a href="#">Malt Raisin Roll</a><span>฿35</span>
            </div>
            <div class="menu-ingredients">
            ขนมปังธัญพืชลูกเกด
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-bakery">
            <div class="menu-content">
              <a href="#">Fruit cake</a><span>฿55</span>
            </div>
            <div class="menu-ingredients">
            เค้กรัมผลไม้
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-bakery">
            <div class="menu-content">
              <a href="#">Red Bean Moji bun</a><span>฿45</span>
            </div>
            <div class="menu-ingredients">
            ขนมปังไส้ถั่วแดงโมจิ
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-bakery">
            <div class="menu-content">
              <a href="#">Red bean</a><span>฿45</span>
            </div>
            <div class="menu-ingredients">
            ขนมปังไส้ถั่วแดง
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-bakery">
            <div class="menu-content">
              <a href="#">Taro bun</a><span>฿45</span>
            </div>
            <div class="menu-ingredients">
            ขนมปังไส้เผือก
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-bakery">
            <div class="menu-content">
              <a href="#">Chocolate Chiffon Cake</a><span>฿65</span>
            </div>
            <div class="menu-ingredients">
              ช็อคโกแลตชิฟฟอนเค้ก
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-bakery">
            <div class="menu-content">
              <a href="#">Festive Snack</a><span>฿55</span>
            </div>
            <div class="menu-ingredients">ขนมพิเศษช่วงเทศกาล</div>
          </div>

          <div class="col-lg-6 menu-item filter-bakery">
            <div class="menu-content">
              <a href="#">Coco Banana</a><span>฿35</span>
            </div>
            <div class="menu-ingredients">ขนมปังโกโก้กล้วย</div>
          </div>

          <div class="col-lg-6 menu-item filter-bakery">
            <div class="menu-content">
              <a href="#">Crispy and Crunchy Malt Raisin</a><span>฿55</span>
            </div>
            <div class="menu-ingredients">อบกรอบธัญพืชลูกเกด</div>
          </div>

          <div class="col-lg-6 menu-item filter-bakery">
            <div class="menu-content">
              <a href="#">Crispy and Crunchy Butter Sesame</a><span>฿35</span>
            </div>
            <div class="menu-ingredients">อบกรอบน้ำตาลงาดำ</div>
          </div>

          <div class="col-lg-6 menu-item filter-bakery">
            <div class="menu-content">
              <a href="#">Crispy Garlic Milk Sticks</a><span>฿55</span>
            </div>
            <div class="menu-ingredients">ขาไก่กรอบกระเทียม</div>
          </div>

          <div class="col-lg-6 menu-item filter-bakery">
            <div class="menu-content">
              <a href="#">Crispy Black Sesame Sticks</a><span>฿55</span>
            </div>
            <div class="menu-ingredients">ขาไก่กรอบงาดำ</div>
          </div>

          <div class="col-lg-6 menu-item filter-bakery">
            <div class="menu-content">
              <a href="#">Crispy and Savoury Garlic Snacks</a><span>฿55</span>
            </div>
            <div class="menu-ingredients">ขนมปังกรอบกระเทียมเค็ม</div>
          </div>

          <div class="col-lg-6 menu-item filter-bakery">
            <div class="menu-content">
              <a href="#">Croutons</a><span>฿35</span>
            </div>
            <div class="menu-ingredients">ขนมปังลูกเต๋าอบกรอบ</div>
          </div>

          <div class="col-lg-6 menu-item filter-croissant">
            <div class="menu-content">
              <a href="#">Butter Croissant </a><span>฿35</span>
            </div>
            <div class="menu-ingredients">ครัวซองเนย</div>
          </div>

          <div class="col-lg-6 menu-item filter-croissant">
            <div class="menu-content">
              <a href="#">Sausage Croissant</a><span>฿40</span>
            </div>
            <div class="menu-ingredients">ครัวซองไส้กรอก</div>
          </div>

          <div class="col-lg-6 menu-item filter-croissant">
            <div class="menu-content">
              <a href="#">Chocolate Croissant</a><span>฿40</span>
            </div>
            <div class="menu-ingredients">ครัวซองช็อคโกแลต</div>
          </div>

          <div class="col-lg-6 menu-item filter-croissant">
            <div class="menu-content">
              <a href="#">Bacon Croissant</a><span>฿45</span>
            </div>
            <div class="menu-ingredients">ครัวซองเบคอน</div>
          </div>

          <div class="col-lg-6 menu-item filter-croissant">
            <div class="menu-content">
              <a href="#">Bacon Cheese Croissant</a><span>฿79</span>
            </div>
            <div class="menu-ingredients">
            ครัวซองเบคอนชีส
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-beverages">
            <div class="menu-content">
              <a href="#">Thai Milk Tea</a><span>฿45</span>
            </div>
            <div class="menu-ingredients">ชานมไทยสูตรโบราณ</div>
          </div>

          <div class="col-lg-6 menu-item filter-beverages">
            <div class="menu-content">
              <a href="#">Rosella Drink</a><span>฿45</span>
            </div>
            <div class="menu-ingredients">น้ำกระเจี๊ยบเข้มข้นสูตรโบราณ</div>
          </div>

          <div class="col-lg-6 menu-item filter-beverages">
            <div class="menu-content">
              <a href="#">Butterfly pea, Lime and Honey Drink</a><span>฿45</span>
            </div>
            <div class="menu-ingredients">น้ำอัญชันน้ำผึ้งมะนาว</div>
          </div>

          <div class="col-lg-6 menu-item filter-beverages">
            <div class="menu-content">
              <a href="#">Chrysanthemum Tea</a><span>฿45</span>
            </div>
            <div class="menu-ingredients">น้ำเก๊กฮวยสูตรโบราณ</div>
          </div>

          <div class="col-lg-6 menu-item filter-beverages">
            <div class="menu-content">
              <a href="#">Chinese Plum Drink</a><span>฿45</span>
            </div>
            <div class="menu-ingredients">น้ำบ๊วยเข้มข้นสูตรโบราณ</div>
          </div>
          
          <div class="col-lg-6 menu-item filter-dippingsauce">
            <div class="menu-content">
              <a href="#">Cheese Dips - Original</a><span>฿39</span>
            </div>
            <div class="menu-ingredients">ชีสดิปออริจินัล</div>
          </div>

          <div class="col-lg-6 menu-item filter-dippingsauce">
            <div class="menu-content">
              <a href="#">Cheese Dips - Wasabi</a><span>฿39</span>
            </div>
            <div class="menu-ingredients">ชีสดิปวาซาบิ</div>
          </div>

          <div class="col-lg-6 menu-item filter-dippingsauce">
            <div class="menu-content">
              <a href="#">Cheese Dips - Pizza</a><span>฿39</span>
            </div>
            <div class="menu-ingredients">ชีสดิปพิซซ่า</div>
          </div>

          <div class="col-lg-6 menu-item filter-dippingsauce">
            <div class="menu-content">
              <a href="#">Cheese Dips - Spicy Mayo</a><span>฿39</span>
            </div>
            <div class="menu-ingredients">ชีสดิปสไปซี่มาโย</div>
          </div>

          <div class="col-lg-6 menu-item filter-dippingsauce">
            <div class="menu-content">
              <a href="#">Cheese Dips - Truffle</a><span>฿69</span>
            </div>
            <div class="menu-ingredients">ชีสดิปทรัฟเฟิล</div>
          </div>

        </div>

      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Specials Section ======= -->
    <!-- <section id="specials" class="specials">
      <div class="container">

        <div class="section-title">
          <h2>Check our <span>Specials</span></h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Modi sit est</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Unde praesentium sed</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Pariatur explicabo vel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Nostrum qui quasi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Iusto ut expedita aut</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Architecto ut aperiam autem id</h3>
                    <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                    <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="delicious/img/specials-1.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Et blanditiis nemo veritatis excepturi</h3>
                    <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                    <p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna desera vafle de nideran pal</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="delicious/img/specials-2.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Impedit facilis occaecati odio neque aperiam sit</h3>
                    <p class="fst-italic">Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut</p>
                    <p>Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima molestiae sed laboriosam a iste odio. Earum odit nesciunt fugiat sit ullam. Soluta et harum voluptatem optio quae</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="delicious/img/specials-3.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Fuga dolores inventore laboriosam ut est accusamus laboriosam dolore</h3>
                    <p class="fst-italic">Totam aperiam accusamus. Repellat consequuntur iure voluptas iure porro quis delectus</p>
                    <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="delicious/img/specials-4.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
                    <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
                    <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="delicious/img/specials-5.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>End Specials Section -->

    <!-- ======= Events Section ======= -->
    <!-- <section id="events" class="events">
      <div class="container">

        <div class="section-title">
          <h2>Organize Your <span>Events</span> in our Restaurant</h2>
        </div>

        <div class="events-slider swiper-container">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="delicious/img/event-birthday.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Birthday Parties</h3>
                  <div class="price">
                    <p><span>$189</span></p>
                  </div>
                  <p class="fst-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                    <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  </ul>
                  <p>
                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur
                  </p>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="delicious/img/event-private.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Private Parties</h3>
                  <div class="price">
                    <p><span>$290</span></p>
                  </div>
                  <p class="fst-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                    <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  </ul>
                  <p>
                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur
                  </p>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="delicious/img/event-custom.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Custom Parties</h3>
                  <div class="price">
                    <p><span>$99</span></p>
                  </div>
                  <p class="fst-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                    <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  </ul>
                  <p>
                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur
                  </p>
                </div>
              </div>
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>End Events Section -->

    <!-- ======= Book A Table Section ======= -->
    <!-- <section id="book-a-table" class="book-a-table">
      <div class="container">

        <div class="section-title">
          <h2>Book a <span>Table</span></h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="number" class="form-control" name="people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>

      </div>
    </section>End Book A Table Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Some photos from <span>Our Bakery</span></h2>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="delicious/img/gallery/gallery-18.jpg" class="gallery-lightbox">
                <img src="delicious/img/gallery/gallery-18.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="delicious/img/gallery/gallery-14.png" class="gallery-lightbox">
                <img src="delicious/img/gallery/gallery-14.png" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="delicious/img/gallery/gallery-12.jpg" class="gallery-lightbox">
                <img src="delicious/img/gallery/gallery-12.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="delicious/img/gallery/gallery-13.png" class="gallery-lightbox">
                <img src="delicious/img/gallery/gallery-13.png" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="delicious/img/gallery/gallery-11.jpg" class="gallery-lightbox">
                <img src="delicious/img/gallery/gallery-11.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="delicious/img/gallery/gallery-15.png" class="gallery-lightbox">
                <img src="delicious/img/gallery/gallery-15.png" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="delicious/img/gallery/gallery-16.jpg" class="gallery-lightbox">
                <img src="delicious/img/gallery/gallery-16.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="delicious/img/gallery/gallery-9.png" class="gallery-lightbox">
                <img src="delicious/img/gallery/gallery-9.png" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Chefs Section ======= -->
    <!-- <section id="chefs" class="chefs">
      <div class="container">

        <div class="section-title">
          <h2>Our Proffesional <span>Chefs</span></h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="delicious/img/chefs/chefs-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Master Chef</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="delicious/img/chefs/chefs-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Patissier</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="delicious/img/chefs/chefs-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>Cook</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>End Chefs Section -->

    <!-- ======= Testimonials Section ======= -->
    

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2><span>Contact</span> Us</h2>
          </div>
      </div>

      <div class="map">
       
      <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d123986.49563719686!2d100.44832950717279!3d13.804295019815905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29c8f70437425%3A0x86579c110aae6625!2screme%20de%20la%20creme!5e0!3m2!1sth!2sth!4v1622442795971!5m2!1sth!2sth" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container mt-12">
        <div class="info-wrap">
          <div class="row">
            <div class="col-lg-3 col-md-6 info">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>82/25 Cement-Thai, Ladyao,<br>Chatuchak, Bangkok 10900</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-clock"></i>
              <h4>Open Hours:</h4>
              <p>Monday-Saturday:<br>08:00 AM - 05:00 PM</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>Cremedelacreme@hotmail.co.th</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>+66(0)86-977-7677,<br>+66(0)95-556-5411</p>
            </div>
          </div>
        </div>

        <!-- <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form> -->

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  @endsection
</body>

</html>