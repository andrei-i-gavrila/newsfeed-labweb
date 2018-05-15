<form method="post" action="/add_post.php">
    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label" for="title">Title</label>
        </div>
        <div class="field-body">
            <div class="field">
                <p class="control">
                    <input id="title" name="title" class="input" type="text">
                </p>
            </div>
        </div>
    </div>
    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label" for="category">Category</label>
        </div>
        <div class="field-body">
            <div class="field">
                <p class="control">
                    <input id="category" name="category" class="input" type="text">
                </p>
            </div>
        </div>
    </div>
    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label" for="producer">Producer</label>
        </div>
        <div class="field-body">
            <div class="field">
                <p class="control">
                    <input id="producer" name="producer" class="input" type="text">
                </p>
            </div>
        </div>
    </div>
    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label" for="date">Data</label>
        </div>
        <div class="field-body">
            <div class="field">
                <p class="control">
                    <input id="date" name="date" class="input" type="date">
                </p>
            </div>
        </div>
    </div>
    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label" for="body">Body</label>
        </div>
        <div class="field-body">
            <div class="field">
                <p class="control">
                    <textarea class="textarea" name="body" id="body" cols="30" rows="10"></textarea>
                </p>
            </div>
        </div>
    </div>
    <div class="field">
        <div class="control">
            <button class="button is-primary is-fullwidth">Submit</button>
        </div>
    </div>
</form>