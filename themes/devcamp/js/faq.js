(function($) {
  var button = $(".faq__button");
  var answer = $(".faq__answer");
  var speed = "500";
  faq();

  function faq() {
    $(document).ready(function() {
      button.on("click", function() {
        $(this)
          .next()
          .slideToggle(speed)
          .toggleAttrVal('aria-expanded', 'true', 'false');
      });
    });
  }
})(jQuery);
