<div class="column is-half">
    <form method="post" action="/register_post.php">
        <div class="field is-horizontal">
            <div class="field-body">
                <div class="field">
                    <p class="control">
                        <input id="username" name="username" class="input" type="text" required title="Username" placeholder="Username">
                    </p>
                </div>
            </div>
        </div>
        <div class="field is-horizontal">
            <div class="field-body">
                <div class="field">
                    <p class="control">
                        <input id="password" name="password" class="input" type="password" required title="Password" placeholder="Password">
                    </p>
                </div>
            </div>
        </div>

        <div class="field is-horizontal">
            <div class="field-body">
                <div class="field">
                    <p class="control">
                        <input id="password_confirmation" name="password_confirmation" class="input" type="password" required title="Confirm password" placeholder="Confirm password">
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
