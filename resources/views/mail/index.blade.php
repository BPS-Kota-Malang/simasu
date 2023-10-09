<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <link href="https://unpkg.com/@tailwindcss/custom-forms/dist/custom-forms.min.css" rel="stylesheet">
</head>
<body>
    <!--Container-->
    <div class="container flex flex-wrap w-full px-2 pt-8 mx-auto mt-16 lg:pt-16">
        <div class="w-full px-6 text-xl leading-normal text-gray-800 lg:w-1/5">
            <p class="py-2 text-base font-bold text-gray-700 lg:pb-6">Menu</p>
            <div class="sticky inset-0 block lg:hidden">
                <button id="menu-toggle" class="flex justify-end w-full px-3 py-3 bg-white border border-gray-600 rounded appearance-none lg:bg-transparent hover:border-yellow-600 focus:outline-none">
                    <svg class="float-right h-3 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                    </svg>
                </button>
            </div>
            <div class="sticky inset-0 z-20 hidden w-full my-2 mt-0 overflow-x-hidden overflow-y-auto bg-white border border-gray-400 shadow max-h-64 lg:h-auto lg:overflow-y-hidden lg:block lg:my-0 lg:border-transparent lg:shadow-none lg:bg-transparent" style="top:6em;" id="menu-content">
                <ul class="py-2 list-reset md:py-0">
                    <li class="py-1 border-l-4 border-transparent md:my-2 hover:bg-yellow-100 lg:hover:bg-transparent">
                        <a href='#sectionBuatSurat' class="block pl-4 text-gray-700 no-underline align-middle hover:text-yellow-600">
                            <span class="pb-1 text-sm md:pb-0">Buat Surat</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!--Section container-->
        <section class="w-full lg:w-4/5">

            <!--divider-->
            <hr class="my-12 bg-gray-300">

            <!--Title-->
            <!-- <h3 class="px-2 pb-8 font-sans text-xl font-bold text-gray-700 break-normal">Pembuatan Surat</h3> -->

            <!--Card-->
            <div id='sectionBuatSurat' class="p-8 mt-6 bg-white rounded shadow lg:mt-0">
                <form>
                <h3 class="px-2 pb-8 font-sans text-xl font-bold text-gray-700 break-normal">Pembuatan Surat</h3>


                    <div class="mb-6 md:flex">
                        <div class="md:w-1/3">
                            <label class="block pr-4 mb-3 font-bold text-gray-600 md:text-left md:mb-0" for="my-select">
                                Nomor Surat
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <select name="types" class="block w-full form-select focus:bg-white" id="my-select">
                            <option value="Default">Silakan Pilih Nomor Surat</option>
                            <option value="A">A</option>
                            <option value="B">B</option>

                         </select>
                        </div>
                    </div>

                    <div class="mb-6 md:flex">
                        <div class="md:w-1/3">
                            <label class="block pr-4 mb-3 font-bold text-gray-600 md:text-left md:mb-0" for="my-select"  required>
                                Tujuan
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <select name="types" class="block w-full form-select focus:bg-white" id="my-select">
                            <option value="Default">Silakan Pilih Tujuan</option>
                         </select>
                         </div>
                    </div>

                    <div class="mb-6 md:flex">
                        <div class="md:w-1/3">
                            <label class="block pr-4 mb-3 font-bold text-gray-600 md:text-left md:mb-0" for="my-radio"  required>
                               Sifat Surat
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <div class="mt-2">
                                <label class="inline-flex items-center">
                                    <input type="radio" class="text-green-500 form-radio" name="radioOption" value="A">
                                    <span class="ml-2">Rahasia</span>
                                </label>
                                <label class="inline-flex items-center ml-6">
                                    <input type="radio"  class="form-radio text-green-500"name="radioOption" value="B">
                                    <span class="ml-2">Umum</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-6 md:flex">
                        <div class="md:w-1/3">
                            <label class="block pr-4 mb-3 font-bold text-gray-600 md:text-left md:mb-0" for="my-textfield">
                                Perihal
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <input class="block w-full form-input focus:bg-white" id="my-textfield" type="text" value=""  placeholder="Silakan isi perihal surat anda" required>
                        </div>
                    </div>
                    <div class="mb-6 md:flex">
                        <div class="md:w-1/3">
                            <label class="block pr-4 mb-3 font-bold text-gray-600 md:text-left md:mb-0" for="my-textfield">
                                Lampiran
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <input class="block w-full form-input focus:bg-white" id="my-textfield" type="text" value="" placeholder="Silakan isi jumlah lampiran surat anda" required>
                        </div>
                    </div>

                    <div class="mb-6 md:flex">
                    <div class="md:w-1/3">
                        <label class="block pr-4 mb-3 font-bold text-gray-600 md:text-left md:mb-0" for="tanggal">
                            Tanggal
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input type="date" id="tanggal" name="tanggal" class="block w-full form-input focus:bg-white" id="my-select" required>
                    </div>
                </div>


                    <!-- <blockquote class="pl-8 my-4 italic border-l-4 border-yellow-600 md:pl-12">Silakan Periksa Kembali, agar tidak ada kekeliruan!</blockquote> -->

                    <div class="pt-8">

                        <button class="px-4 py-2 mr-4 font-bold text-white bg-yellow-700 rounded shadow hover:bg-yellow-500" type="button">
                        Buat surat
                        </button>
<!-- 
                        <button class="px-4 py-2 mr-4 font-bold text-gray-700 bg-yellow-100 rounded shadow hover:bg-yellow-200 focus:shadow-outline focus:outline-none" type="button">
                            Buat surat
                        </button> -->
                    </div>

                </div>
                </form>
            </div>

        </section>
        <!--/Section container-->

        <!--Back link -->
        <div class="w-full px-4 py-24 mb-12 text-base text-gray-600 lg:w-4/5 lg:ml-auto md:text-sm">
          <span class="text-base font-bold text-yellow-600">&lt;</span> <a href="#" class="text-base font-bold text-yellow-600 no-underline md:text-sm hover:underline">Back link</a>
         </div>

      </div>
      <!--/container-->

      <!-- Toggle dropdown list -->
<script>
    /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

    var userMenuDiv = document.getElementById("userMenu");
    var userMenu = document.getElementById("userButton");

     var helpMenuDiv = document.getElementById("menu-content");
     var helpMenu = document.getElementById("menu-toggle");

    document.onclick = check;

    function check(e){
      var target = (e && e.target) || (event && event.srcElement);

      //User Menu
      if (!checkParent(target, userMenuDiv)) {
        // click NOT on the menu
        if (checkParent(target, userMenu)) {
          // click on the link
          if (userMenuDiv.classList.contains("invisible")) {
            userMenuDiv.classList.remove("invisible");
          } else {userMenuDiv.classList.add("invisible");}
        } else {
          // click both outside link and outside menu, hide menu
          userMenuDiv.classList.add("invisible");
        }
      }

       //Help Menu
       if (!checkParent(target, helpMenuDiv)) {
        // click NOT on the menu
        if (checkParent(target, helpMenu)) {
          // click on the link
          if (helpMenuDiv.classList.contains("hidden")) {
            helpMenuDiv.classList.remove("hidden");
          } else {helpMenuDiv.classList.add("hidden");}
        } else {
          // click both outside link and outside menu, hide menu
          helpMenuDiv.classList.add("hidden");
        }
       }

    }

    function checkParent(t, elm) {
      while(t.parentNode) {
        if( t == elm ) {return true;}
        t = t.parentNode;
      }
      return false;
    }

    </script>

    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!-- Scroll Spy -->
    <script>
    /* http://jsfiddle.net/LwLBx/ */

    // Cache selectors
    var lastId,
        topMenu = $("#menu-content"),
        topMenuHeight = topMenu.outerHeight()+175,
        // All list items
        menuItems = topMenu.find("a"),
        // Anchors corresponding to menu items
        scrollItems = menuItems.map(function(){
          var item = $($(this).attr("href"));
          if (item.length) { return item; }
        });

    // Bind click handler to menu items
    // so we can get a fancy scroll animation
    menuItems.click(function(e){
      var href = $(this).attr("href"),
          offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
      $('html, body').stop().animate({
          scrollTop: offsetTop
      }, 300);
      if (!helpMenuDiv.classList.contains("hidden")) {
            helpMenuDiv.classList.add("hidden");
          }
      e.preventDefault();
    });

    // Bind to scroll
    $(window).scroll(function(){
       // Get container scroll position
       var fromTop = $(this).scrollTop()+topMenuHeight;

       // Get id of current scroll item
       var cur = scrollItems.map(function(){
         if ($(this).offset().top < fromTop)
           return this;
       });
       // Get the id of the current element
       cur = cur[cur.length-1];
       var id = cur && cur.length ? cur[0].id : "";

       if (lastId !== id) {
           lastId = id;
           // Set/remove active class
           menuItems
             .parent().removeClass("font-bold border-yellow-600")
             .end().filter("[href='#"+id+"']").parent().addClass("font-bold border-yellow-600");
       }
    });

    </script>
</body>
</html>

