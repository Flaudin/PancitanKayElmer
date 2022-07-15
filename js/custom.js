(function ($) {
  "use strict";

  /* ..............................................
	Loader 
    ................................................. */

  $(window).on("load", function () {
    $(".preloader").fadeOut();
    $("#preloader").delay(550).fadeOut("slow");
    $("body").delay(450).css({ overflow: "visible" });
  });

  /* ..............................................
    Fixed Menu
    ................................................. */

  $(window).on("scroll", function () {
    if ($(window).scrollTop() > 50) {
      $(".top-header").addClass("fixed-menu");
    } else {
      $(".top-header").removeClass("fixed-menu");
    }
  });

  /* ..............................................
    Gallery
    ................................................. */

  $("#slides").superslides({
    inherit_width_from: ".cover-slides",
    inherit_height_from: ".cover-slides",
    play: 5000,
    animation: "fade",
  });

  $(".cover-slides ul li").append("<div class='overlay-background'></div>");

  /* ..............................................
    Map Full
    ................................................. */

  $(document).ready(function () {
    $(window).on("scroll", function () {
      if ($(this).scrollTop() > 100) {
        $("#back-to-top").fadeIn();
      } else {
        $("#back-to-top").fadeOut();
      }
    });
    $("#back-to-top").click(function () {
      $("html, body").animate({ scrollTop: 0 }, 600);
      return false;
    });
  });

  /* ..............................................
    Special Menu
    ................................................. */

  var Container = $(".container");
  Container.imagesLoaded(function () {
    var portfolio = $(".special-menu");
    portfolio.on("click", "button", function () {
      $(this).addClass("active").siblings().removeClass("active");
      var filterValue = $(this).attr("data-filter");
      $grid.isotope({
        filter: filterValue,
      });
    });
    var $grid = $(".special-list").isotope({
      itemSelector: ".special-grid",
    });
  });

  /* ..............................................
    BaguetteBox
    ................................................. */

  baguetteBox.run(".tz-gallery", {
    animation: "fadeIn",
    noScrollbars: true,
  });

  var btndelete = false;
  document.getElementById("buttondel").addEventListener("click", function () {
    Swal.fire("Successfully Deleted", "", "success");
  });

  // function validate () {
  //   var prodid = $("#prodname").val();
  //   var details = $("#details").val();
  //   var price = $("#price").val();
  //   var image = $("#image").val();

  //   if (prodid == "" || details == "" || price == "" || image == "") {
  //     Swal.fire("Upload Failed", "Please Complete the fields", "warning");
  //   } else {
  //     Swal.fire("Successfully Uploaded", "", "success");
  //   }
  // });

  /* ..............................................
    Datepicker
    ................................................. */

  // $(".datepicker").pickadate();

  // $(".time").pickatime();

  /* ........................................
	Modal button
	................................*/

  // Get the modal

  // Get the modal
  /* var modal = document.getElementById("myModal");

  // Get the button that opens the modal
  var btn = document.getElementById("myBtn");

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  // When the user clicks the button, open the modal
  btn.onclick = function () {
    modal.style.display = "block";
  };

  // When the user clicks on <span> (x), close the modal
  span.onclick = function () {
    modal.style.display = "none";
  };

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function (event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  };*/
})(jQuery);
