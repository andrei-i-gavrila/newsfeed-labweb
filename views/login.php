<form method="post" action="/login_post.php">
    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label" for="username">Username: </label>
        </div>
        <div class="field-body">
            <div class="field">
                <p class="control">
                    <input id="username" name="username" class="input" type="text" required>
                </p>
            </div>
        </div>
    </div>
    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label" for="password">Password</label>
        </div>
        <div class="field-body">
            <div class="field">
                <p class="control">
                    <input id="password" name="password" class="input" type="password" required>
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