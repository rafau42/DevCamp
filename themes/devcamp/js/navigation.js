(function($) {
  var navigation_wrap = $(".navigation");
  var navigation = $(".navigation__nav");
  navigation.before(
    '<button class="navigation__toggle" type="button" aria-label ="Toggle Menu" aria-controls="Main Menu" aria-expanded="false" title="Toggle Menu"><span class = "sr-only">Open Menu</span>Devcamp</button>'
  );
  var navigation_toggle = $(".navigation__toggle");
  navigation_toggle.append('<i class="navigation__icon" aria-hidden="true"></i>');
  var navigation_icon = $(".navigation__icon");
  navigation_icon.addClass("navigation__icon-menu");
  var navigation_list = $(".navigation__list");
  toggleNav();

  function toggleNav() {
    navigation_toggle.click(function() {
      navigation_toggle.toggleAttrVal("aria-expanded", "true", "false");
      navigation_toggle.find(".sr-only").toggleText("Close Menu", "Open Menu");
      navigation_list.slideToggle(200);
      navigation_icon.toggleClass(
        "navigation__icon-menu-close",
        "navigation__icon-menu"
      );
    });
  }
})(jQuery);
