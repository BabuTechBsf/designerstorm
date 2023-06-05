
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
        $.when(
            $.getJSON(dstormData.root_url + '/wp-json/dstorm/v1/search?searchfor=' + $("#search_txt").val()),
        )
            .then((posts) => {
                var combinedRes = posts;
                $('#showResults').html(`
            ${combinedRes.map(item => `<a href='${item.permalink}'> <li>${item.title}</li>`)}
            `)
            })
        // $.when(
        //     $.getJSON(dstormData.root_url + '/wp-json/wp/v2/posts?search=' + $("#search_txt").val()),
        //     $.getJSON(dstormData.root_url + '/wp-json/wp/v2/breed?search=' + $("#search_txt").val())
        // )
        //     .then((posts, breeds) => {
        //         var combinedRes = posts[0].concat(breeds[0]);
        //         $('#showResults').html(`
        //     ${combinedRes.map(item => `<a href='${item.link}'> <li>${item.title.rendered} ${item.authName? `by ${item.authName}`:""}</li>`)}
        //     `)
        //     })
    }

});