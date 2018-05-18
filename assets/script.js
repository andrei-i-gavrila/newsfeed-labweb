$('.delete').click(() => {
    return $(event.target.parentElement).fadeOut();
});

$(() => {
    new bulmaCalendar('.date');
    getNews();
});


function getNews() {
    if (!!event) event.preventDefault();
    let category = $('#category').val();
    let date = $('#dateFilter').val();

    $.get('/news.php?category=' + category + '&date=' + date, response => {
        let target = $('#news');
        target.empty();

        if (response.length === 0) {
            target.append("Sorry man, no news for you");
            return;
        }

        response.forEach(post => showPost(post, target));

    })
}

function showPost(post, target) {
    console.log(post);
    target.append($(`
<div class='card'>
    <div class='card-header'>
        <div class='card-header-title is-size-4'>${post.title}</div>
        ${post.editable ? "<a href='/edit.php?id=" + post.id + "' class='card-header-icon'><span class='icon'><i class='fa fa-edit'></i></span></a>" : ""}
    </div>
    <div class='card-content'>
        <div class='content'>${post.body}</div>
    </div>
    <div class='card-footer'>
        <p class='card-footer-item'>${post.category}</p>
        <p class='card-footer-item'>posted by ${post.author} at ${post.published_at}</p>
    </div>
</div>
<br>`
    ));
}