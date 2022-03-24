function filter(campo) {
    let v = $("#sel-" + campo).val();
    if (v) {
        $(".card").addClass('hide-by-' + campo);
        $("." + v).removeClass('hide-by-' + campo);
    } else {
        $(".card").removeClass('hide-by-' + campo);
    }
}
$("#sel-class").change(function () {
    filter("class");
});
$("#sel-part").change(function () {
    filter("part");
});
$(function () {
    filter("class");
    filter("part");
});
