$('form').submit(function() {
    var search = $("#search").val();
    var searchType = $("#searchType").val();
    $.ajax({
        url : 'php/search.php',
        type: "POST",
        data : {
            search: search,
            searchType: searchType
        },
        success: function(data) {
            $("#searchResults").html(data);
        }
    });
    return false
});
