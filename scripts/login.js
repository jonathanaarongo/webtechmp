$(document).ready(() => {
  $('.message .close')
    .on('click', function() {
      $(this)
        .closest('.message')
        .transition('fade')
      ;
    });
  
  $("#login").on("submit", (e) => {
    e.preventDefault();

    $.ajax({
      url: "./actions/login.php",
      method: "POST",
      data: {
        ajax: true,
        username: $("input[name=username]").val(),
        password: $("input[name=password]").val(),
      },
      success: (data) => {
        $(".ui.message").removeClass("success");
        $(".ui.message").removeClass("error");
        $(".ui.message").css("display", "block");
        
        $(".ui.message > span").text(data.message);
        if (data.status === 1) {
          $(".ui.message").addClass("success");
          location.reload();
        } else {
          $(".ui.message").addClass("error");
        }
      },
      error: () => {
        $(".ui.message").removeClass("success");
        $(".ui.message").removeClass("error");
        $(".ui.message").css("display", "block");
        
        $(".ui.message").addClass("error");
        $(".ui.message > span").text("An error occured while logging in...");
      }
    })
  })
})