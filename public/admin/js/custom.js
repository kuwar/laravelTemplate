// $("#getting-started")
// .countdown("2018/06/25", function(event) {
//   $(this).text(
//     event.strftime('%m %n %H %M')
//   );
// });
/*  var $countdown_date = '2018/05/25';
  $('#getting-started').countdown($countdown_date, function(event) {
    var $this = $(this).html(event.strftime(''

      + '<span>%m</span> :&nbsp;&nbsp; '
      + ' <span> %n</span> :&nbsp;&nbsp; '
      + ' <span> %H</span> :&nbsp;&nbsp; '
      + ' <span> %M</span>'));
  });

  $('#getting-started-days').countdown($countdown_date, function(event) {
    var $this = $(this).html(event.strftime(''

      + ' <span> %D</span> :&nbsp;&nbsp; '
      + ' <span> %H</span> :&nbsp;&nbsp; '
      + ' <span>%M</span> :&nbsp;&nbsp; '
      + ' <span> %S</span>'));
  });*/


$(function () {
    $('input').keyup(function () {
        if ($.trim($(this).val()) == "") {
            $(this).val($.trim($(this).val()));
        }
    })

    $(".isVat").hide();

    if ($("#select_currency").val() == "GBP") {
        $(".isVat").show();
    }

    $("#select_currency").change(function () {
        if ($("#select_currency").val() == "GBP") {
            $(".isVat").show();
        } else {
            $(".isVat").hide();
        }
    });
});

function set_countdown($time) {
    $('#getting-started, #getting-started-days').countdown($time, function (event) {
        var $this = $(this).html(event.strftime(''

            + '<span>%m</span> :&nbsp;&nbsp; '
            + ' <span> %n</span> :&nbsp;&nbsp; '
            + ' <span> %H</span> :&nbsp;&nbsp; '
            + ' <span> %M</span>'));
    });
}

function show_deadline(status) {
    if (status) {
        $('.counter-main').show();
    }
    else {
        $('.counter-main').attr('style', 'display: none !important');
    }
}