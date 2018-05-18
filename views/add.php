<div class="column is-three-quarters">
    <form method="post" action="/add_post.php">
        <div class="field">
            <div class="field-body">
                <div class="field">
                    <p class="control">
                        <input id="title" name="title" class="input" type="text" title="Title" placeholder="Title">
                    </p>
                </div>
            </div>
        </div>
        <div class="field">
            <div class="field-body">
                <div class="field">
                    <p class="control">
                        <input id="category" name="category" class="input" type="text" title="Category" placeholder="Category">
                    </p>
                </div>
            </div>
        </div>
        <div class="field">
            <div class="field-body">
                <div class="field">
                    <p class="control">
                        <input id="date" name="date" class="input date" type="text" title="Date" placeholder="Date">
                    </p>
                </div>
            </div>
        </div>
        <div class="field">
            <div class="field-body">
                <div class="field">
                    <p class="control">
                        <textarea class="textarea" name="body" id="body" cols="30" rows="10" placeholder="Body"></textarea>
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
</div>