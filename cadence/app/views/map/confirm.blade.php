<div class="side-confirm">
    <div class="confirm-main">
        <div class="side-header">
            <h3>You're Almost Done!</h3>
        </div>

        <div class="inner inputs">
            <div class="body-overflow">
                <div class="route-name spacer">
                    <h3>Route name<sup>*</sup></h3>
                    <input id="name" type="text" class="form-control" placeholder="Eg. My Weekly Commute" name="map[name]" maxlength="50"></input>
                    <span class="warning">Character limit reached.</span>
                    <span class="required">A route name is required.</span>
                </div>

                <div class="route-desc spacer">
                    <h3>Description for this route</h3>
                    <textarea id="desc" class="form-control" rows="7" name="map[desc]" maxlength="500"></textarea>
                    <span class="warning">Character limit reached.</span>
                </div>
            </div>
        </div>

        <div class="panel-btn-bottom">
            <div class="btn btn-submit-panel dismiss-submit btn-negative">GO BACK</div>
            <button type="submit" id="search" class="btn btn-submit-panel btn-place-marker btn-positive">SUBMIT YOUR JOURNEY</button>
        </div>
    </div>

    <div class="thanks">
        <div class="body">
            <h1>Thank You! </br><small>Your route has been saved.</small></h1>
            <div class="body-overflow top-padding">
                Return to homepage.

                Submit a new route.
            </div>
        </div>
    </div>
</div>
