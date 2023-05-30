
$(document).ready(function () {
    var searchTimeout;
    // On button click, get value
    // of input control Show alert
    // message box
    $("#search_txt").on('keydown', function () {
        clearTimeout(searchTimeout);
        searchTimeout = setTimeout(() => {
            // alert(this.value);
            getWpData()
        }, 2000);;
    });
    const getWpData = () => {
        $.getJSON('http://localhost:10004/wp-json/wp/v2/posts?search=' + $("#search_txt").val(),
            (posts) => {
                $('#showResults').html(`
                ${posts.map(item=> `<li>${item.title.rendered}</li>`)}
                `)
                // alert(posts[0].title.rendered)
            })
    }

});