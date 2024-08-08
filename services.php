<?php include('header.php') ?>

<main class="services-page inside-page">
  <section class="inside-banner relative">
    <img src="./build/img/banner/services-banner.png" class="block w-full" />
    <div class="banner-caption">
      <h2 class="text-6xl font-montserrat_bold text-white">Services</h2>
    </div>
  </section>

  <section class="max-w-screen-2xl main-container flex mx-auto py-20">
    <div class="sidebar w-4/12">
      <ul class="flex flex-col gap-12">
        <li><a href="#" data-target="designDevelopment"
            class="tab-button text-3xl font-montserrat_bold text-imi-black active">Design and
            Development</a></li>
        <li><a href="#" data-target="3dPrinting"
            class="tab-button text-3xl font-montserrat_bold text-imi-black hover:text-imi-red">3D Printing</a></li>
        <li><a href="#" data-target="designVerification"
            class="tab-button text-3xl font-montserrat_bold text-imi-black hover:text-imi-red">Design Verification</a>
        </li>
        <li><a href="#" data-target="dieSales"
            class="tab-button text-3xl font-montserrat_bold text-imi-black hover:text-imi-red">Die Sales</a></li>
      </ul>
    </div>
    <div class="main-wrapper w-8/12">
      <div id="designDevelopment" class="tab-content">
        <h3 class="text-xl text-imi-black font-montserrat_bold mb-2">Design and Development</h3>
        <p class="text-xl text-imi-black font-montserrat_regular">Provides design, simulation, development and design
          validation services
          for standard and customized power module platforms:</p>
        <img src="./build/img/services-img.png" class="block w-full my-6" />
        <ul class="list-disc columns-2 font-montserrat_medium">
          <li>Mechanical 2D/3D design</li>
          <li>Mechanical and Thermo-Mechanical simulations</li>
          <li>Thermal and CFD simulations</li>
          <li>Electro-thermal simulation</li>
          <li>Package Parasitic Simulation <br />(Resistance/Inductance)</li>
          <li>Power Circuit Simulations <br />(dynamic switching)</li>
          <li>Proto-type Service</li>
        </ul>
      </div>
      <div id="3dPrinting" class="tab-content">
        <h3 class="text-xl text-imi-black font-montserrat_bold mb-2">3D Printing</h3>
        <p class="text-xl text-imi-black font-montserrat_regular">Support fast proto-type using 3D printed housing for
          initial verification.</p>
        <div class="flex gap-6 mt-6">
          <img src="./build/img/3dprinting.png" alt="" class="w-1/3">
          <img src="./build/img/3dprinting.png" alt="" class="w-1/3">
          <img src="./build/img/3dprinting.png" alt="" class="w-1/3">
        </div>
      </div>
      <div id="designVerification" class="tab-content">
        <h3 class="text-xl text-imi-black font-montserrat_bold mb-2">Design Verification</h3>
        <p class="text-xl text-imi-black font-montserrat_regular">Support design verification with internal test
          capability, ATC lab and/or
          external accredited test partner</p>
        <img src="./build/img/services-img.png" class="block w-full my-6" />
      </div>
      <div id="dieSales" class="tab-content">
        <h3 class="text-xl text-imi-black font-montserrat_bold mb-2">Die Sales</h3>
        <p class="text-xl text-imi-black font-montserrat_regular">Provides die sawing and re-packing services for Si and
          SiC wafers.</p>
        <img src="./build/img/services-img.png" class="block w-full my-6" />
      </div>
    </div>
  </section>

</main>
<?php include('footer.php') ?>