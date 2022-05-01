(function() {
    $(function() {
        var collapseMyMenu, expandMyMenu, hideMenuTexts, showMenuTexts;
        expandMyMenu = function() {

            $("nav.sidebar").removeClass("sidebar-menu-collapsed").addClass(
                "sidebar-menu-expanded");
            $("#content").addClass('sidebar-expanded');
        };
        collapseMyMenu = function() {
            $("nav.sidebar").removeClass("sidebar-menu-expanded").addClass(
                "sidebar-menu-collapsed");
            $("#content").removeClass('sidebar-expanded').addClass('sidebar-collpased');
        };
        showMenuTexts = function() {
            return $("nav.sidebar ul a span.expanded-element").show();
        };
        hideMenuTexts = function() {
            return $("nav.sidebar ul a span.expanded-element").hide();
        };
        return $("#justify-icon").click(function(e) {
            if ($(this).parent("nav.sidebar").hasClass("sidebar-menu-collapsed")) {
                expandMyMenu();
                showMenuTexts();
                $(this).css({
                    color: "#000"
                });
            } else if ($(this).parent("nav.sidebar").hasClass("sidebar-menu-expanded")) {
                collapseMyMenu();
                hideMenuTexts();
                $(this).css({
                    color: "#FFF"
                });
            }
            return false;
        });
    });

}).call(this);

/* Forms and delete operation */
$("#submit-button").on('click', function() {
    $("#data-form").submit();
    $('#modal').modal('toggle');
});

$(".edit-button").on('click', function() {
    var idEdit = $(this).attr('id');
    var id = idEdit.split('-')[1];

    $("#data-edit" + id).submit();
    $('#modal').modal('toggle');
});

$('.deleteUser').click(function() {
    var id = $(this).attr('rel');
    var token = $("meta[name='csrf-token']").attr("content");

    var msg = confirm('Are you sure?');
    if (msg) {
        $.ajax({
            url: "user/delete/" + id,
            type: 'DELETE',
            data: {
                "id": id,
                "_token": token,
            },
            success: function() {
                $('.item' + id).remove();

            }
        });
    } else {
        return;
    }

});