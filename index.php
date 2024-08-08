<?php include('header.php'); ?>

  <main>
    <section 
    id="default-carousel"
    class="relative w-full"
    data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden md:h-[700px]">
          <!-- Item 1 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img
              src="./build/img/banner.png"
              class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
              alt="..."
            />
          </div>
        </div>
      </div>
      <div class="bg-imi-red text-center">
        <p class="text-white text-3xl py-4">POWER SEMICONDUCTOR TECHNOLOGY SOLUTIONS PARTNER</p>
      </div>
    </section>
    <section class="imi-container mx-auto flex gap-6 pt-14 pb-9">
      <div class="w-full md:w-1/2">
        <div class="img-wrapper relative">
          <img src="./build/img/power-discrete.png" alt="..."/>
          <div class="absolute caption bottom-0 text-white left-14 bottom-14">
            <h3 class="text-6xl">Power Discrete</h3>
            <p class="text-3xl min-h-36">Assembly and test services for standard TO's packages, and supports development for enhanced and custom packages.</p>
            <a href="#" class="imi-btn">Learn More</a>
          </div>
        </div>
        <div class="bg-imi-gray text-center py-3 px-3">
          <p class="text-3xl text-white">Coming new packages: <br/>
          TO247 High Creepage and SOT227</p>
        </div>
      </div>
      <div class="w-full md:w-1/2">
        <div class="img-wrapper relative">
          <img src="./build/img/power-modules.png" alt="..."/>
          <div class="absolute caption bottom-0 text-white left-14 bottom-14">
            <h3 class="text-6xl">Power Modules</h3>
            <p class="text-3xl min-h-36">Design, development, proto-type, assembly and test services for standard
              and customize power module platforms for industrial and automotive
              applications.</p>
            <a href="#" class="imi-btn">Learn More</a>
          </div>
        </div>
        <div class="bg-imi-gray text-center py-3 px-3">
          <p class="text-3xl text-white">Coming new packages: <br/>
            Econodual, 62mm and EV drive
            Inverter</p>
        </div>
      </div>
    </section>
    <section class="services-container imi-container py-7 mx-auto">
      <div class="w-full section-title text-center mb-14">
        <h2 class="text-6xl text-imi-red">Services</h2>
      </div>
      <div class="services-wrapper flex gap-6 ">
        <a href="#" class="services w-1/4 relative">
          <img src="./build/img/services/design-and-development.png" class="block w-full" alt="">
          <div class="title transition-all duration-300">
            <p class="text-3xl text-white">Design and Development</p>
          </div>
        </a>
        <a href="#" class="services w-1/4 relative">
          <img src="./build/img/services/3d-printing.png" class="block w-full" alt="">
          <div class="title transition-all duration-300">
            <p class="text-3xl text-white">3D Printing</p>
          </div>
        </a>
        <a href="#" class="services w-1/4 relative">
          <img src="./build/img/services/design-verification.png" class="block w-full" alt="">
          <div class="title transition-all duration-300">
            <p class="text-3xl text-white">Design Verification</p>
          </div>
        </a>
        <a href="#" class="services w-1/4 relative">
          <img src="./build/img/services/die-sales.png" class="block w-full" alt="">
          <div class="title transition-all duration-300">
            <p class="text-3xl text-white">Die Sales</p>
          </div>
        </a>
      </div>
    </section>
    <section class="flex py-14">
      <div class="w-1/2 bg-[#F2F2F2] px-[10%] flex flex-col justify-center items-start">
        <h3 class="text-6xl text-imi-red">Technical Paper</h3>
        <p class="text-imi-black text-3xl my-10">Lorem ipsum dolor sit amet,
          consectetur adipiscing elit, sed do eiusmod
          tempor ut enim ad minim.</p>
          <a href="#" class="imi-btn mt-4">Download Here</a>
      </div>
      <div class="w-1/2 bg-imi-red flex items-center justify-center py-20">
        <img src="./build/img/tech-paper.png" alt="" class="block max-w-[380px]"/>
      </div>
    </section>

    <section class="max-w-screen-2xl py-14 mx-auto flex">
      <div class="w-7/12 pr-10">
        <h5 class="text-imi-red text-3xl mb-6 font-bold">CONNECT WITH US</h5>
        <form class="flex flex-wrap gap-x-8 gap-y-6">
          <div class="relative basis-[48%]">
            <input type="text" id="name" name="name" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="name" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Name</label>
          </div>
          <div class="relative basis-[48%]">
            <input type="email" id="email" name="email" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="email" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Email</label>
          </div>
          <div class="relative basis-[48%]">
            <input type="tel" name="contact_number" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="contact_number" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Contact Number</label>
          </div>
          <div class="relative basis-[48%]">
            <input type="text" name="companyName" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="companyName" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Company Name</label>
          </div>
          <div class="relative basis-[48%]">
            <select id="countries" name="countries" class="border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
              <option selected>Choose a country</option>
              <?php
                $json = file_get_contents('countries.json'); 
                $data = json_decode($json);
                foreach($data as $country) {
                  print'<option value="'.$country->code.'">';print $country->name;print'</option>';
                }
              ?>
            </select>
          </div>
          <div class="relative basis-[48%]">
            <select id="requestType" name="requestType" class="border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
              <option selected>Select request type</option>
              <option value="">Request 1</option>
              <option value="">Request 2</option>
              <option value="">Request 3</option>
            </select>
          </div>
          <div class="relative basis-[48%]">
            <input type="text" name="position" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="position" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Position</label>
          </div>
          <div class="relative basis-[48%]">
            <input type="text" name="industry" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="industry" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Industry</label>
          </div>
          <div class="relative basis-[99.5%]">
            <textarea name="message" rows="5" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "></textarea>
            <label for="message" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 !top-6 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:!top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Message</label>
          </div>
          <div class="flex mb-4 basis-[99.5%]">
            <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
            <label for="default-checkbox" class="ms-2 text-sm text-[#666666]">By checking the box you consent to <strong>Integrated Micro-Electronics Inc.</strong> using your contact details to keep you informed by email about its other products, services and content that may be of interest to you. You can withdraw your consent at any time as set out in our Privacy Notice. By clicking submit you confirm the above preferences and that you have read and agreed the Terms of Use, Privacy Notice and Cookie Notice and that you are aged 18 or over.</label>
        </div>
        <button type="submit" class="imi-btn ml-auto">SUBMIT</button>
        </form>
      </div>
      <div class="w-5/12 flex items-center justify-end">
        <img src="./build/img/connect-with-us-photo.png" class="max-w-[575px]"/>
      </div>
    </section>
  </main>

<?php include('footer.php'); ?>