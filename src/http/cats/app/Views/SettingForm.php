<form class="d-flex align-items-center" method="post" action="../Actions/ApplySettings.php">
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="offline" name="offline" <?= (isset($_SESSION['offline']) && $_SESSION['offline']) ? 'checked' : ''?>>
        <label class="form-check-label" for="offline">Offline mod</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="logging" name="logging" <?= (isset($_SESSION['logging']) && $_SESSION['logging']) ? 'checked' : ''?>>
        <label class="form-check-label" for="logging">Logging</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="cashing" name="cashing" <?= (isset($_SESSION['cashing']) && $_SESSION['cashing']) ? 'checked' : ''?>>
        <label class="form-check-label" for="cashing">Cashing</label>
    </div>
    <button type="submit" name="submit" class="btn btn-success">Apply settings</button>
</form>