let count = 2;

// Ajax function to load data.
$(document).on("click", '.load-data', function (e) {
  $.ajax({
    url: "Controller/ajax-load.php",
    type: "POST",
    data: {
      count: count
    },
    success: function (data) {
      $(".content").append(data);
      count += 2;
    }
  });
});

// Ajax function to make post.
$(document).on("click", '#submit', function (e) {
  e.preventDefault();
  let text = $('#text').val();
  let fd = new FormData();
  let files = $('#image')[0].files[0];
  fd.append('file', files);
  fd.append('text', text);
  $.ajax({
    url: "Controller/ajax-post.php",
    type: "POST",
    data: fd,
    contentType: false,
    processData: false,
    success: function (data) {
      $("#image, #text").val("");
    }
  });
});

// Ajax function to load data of initial post when logged in.
$(window).on('load', function (e) {
  $.ajax({
    url: "Controller/ajax-preload.php",
    type: "POST",
    success: function (data) {
      $(".content1").html(data);
    }
  });
});

// Ajax function to search data.
$('#search-name').on("keyup", function () {
  let search_term = $(this).val();
  $.ajax({
    url: 'Controller/ajax-search.php',
    type: 'POST',
    data: {
      search: search_term
    },
    success: function (data) {
      $('.total').html(data);
    }
  })
});

// Ajax function to load data.
$('.update').on('click', function (e) {
  e.preventDefault();
  $('.update-form').css({ "display": "block" });
})

// Ajax function to update profile information.
$('#submit-update').on('click', function (e) {
  e.preventDefault;
  let first_name = $('#firstname').val();
  let last_name = $('#lastname').val();
  $.ajax({
    url: 'Controller/ajax-update.php',
    type: 'POST',
    data: {
      first_name: first_name,
      last_name: last_name
    },
    success: function (data) {
      $('.in-b').html(data);
    }
  })
});

// Function to clear form fields.
$('#submit-update').on('click', function (e) {
  $('#firstname').val("");
  $('#lastname').val("");
  $('.update-form').css({ "display": "none" });
})
