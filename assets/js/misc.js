$(document).ready(function() {
  $("input[type=button]").attr("class", "btn btn-default btn-sm");
  $(".button_submit").attr("class", "btn btn-info btn-sm");
  $("#advanced_search input[type=\'text\'], #search_term_input input[type=\'text\']").removeAttr("size");
  $(".table_grid").addClass("table table-striped");
  $("img[alt=\'', $txt['new'], '\'], img.new_posts").replaceWith("<span class=\'label label-warning\'>', $txt['new'], '</span>");
  $("#profile_success").removeAttr("id").removeClass("windowbg").addClass("alert alert-success");
  $("#profile_error").removeAttr("id").removeClass("windowbg").addClass("alert alert-danger");
});
