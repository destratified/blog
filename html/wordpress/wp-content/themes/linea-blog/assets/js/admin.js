jQuery(document).ready(function ($) {
  $("#dismiss-wpopus").on("click", function (e) {
    e.preventDefault();

    const userConfirm = confirm(wpopusAjax.dismiss_confirm);
    var $dismissButton = $(this);
    var $notice = $dismissButton.closest(".notice"); // Target the notice container

    if (userConfirm) {
      $.ajax({
        url: wpopusAjax.ajax_url,
        method: "POST",
        data: {
          action: "remove_wpopus_recommendation",
          nonce_dismiss: wpopusAjax.nonce_dismiss,
        },
        success: function (response) {
          if (response.success) {
            $notice.remove();
          } else {
            $notice.append(
              '<p class="wpopus-message error">' +
                (response.data?.message || wpopusAjax.error_label) +
                "</p>"
            );
          }
        },
        error: function () {
            console.log('Error:', response);
          // Display general error message
          $notice.append(
            '<p class="wpopus-message error">' + wpopusAjax.error_label + "</p>"
          );
        },
      });
    }
  });

  $("#install-wpopus").on("click", function (e) {
    e.preventDefault();

    var $button = $(this);
    var $notice = $button.closest(".notice"); // Target the notice container

    // Clear any previous messages
    $notice.find(".wpopus-message").remove();

    $button.prop("disabled", true).text("Installing...");

    $.ajax({
      url: wpopusAjax.ajax_url,
      method: "POST",
      data: {
        action: "install_wpopus_plugin",
        nonce: wpopusAjax.nonce,
      },
      success: function (response) {
        if (response.success) {
          // Display success message
          $notice.append(
            '<p class="wpopus-message success">' +
              response.data.message +
              "</p>"
          );
          $button
            .text(wpopusAjax.success_label)
            .removeClass("button-primary")
            .addClass("button-disabled");
          setTimeout(function() {
            window.location.href = "admin.php?page=wpopus";
          }, 1500);
        } else {
          // Display error message
          $notice.append(
            '<p class="wpopus-message error">' + response.data.message + "</p>"
          );
          $button.prop("disabled", false).text(wpopusAjax.label);
        }
      },
      error: function () {
        // Display general error message
        $notice.append(
          '<p class="wpopus-message error">' + wpopusAjax.error_label + "</p>"
        );
        $button.prop("disabled", false).text(wpopusAjax.label);
      },
    });
  });
});
