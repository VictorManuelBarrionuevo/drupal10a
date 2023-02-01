(function ($) {
  var hostname = $(location).attr("hostname");
  $(".axxon-button").click(function () {
    alert(hostname);
  });
})(jQuery);
