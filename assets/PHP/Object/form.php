<form action="" method="get" class="form-example">
    <div class="form-example">
        <label for="gender">Gender : </label>
        <select name="gender" id="gender">
            <option value="mr">Mr.</option>
            <option value="mrs">Mrs.</option>
        </select>
    </div>
    <div class="form-example">
        <label for="Fname">Enter your first name: </label>
        <input type="text" name="Fname" id="Fname">
    </div>
    <div class="form-example">
        <label for="Lname">Enter your last name: </label>
        <input type="text" name="Lname" id="Lname">
    </div>
    <div class="form-example">
        <label for="email">Enter your email: </label>
        <input type="email" name="email" id="emailB">
    </div>
    <div class="form-example">
        <label for="radio">Reason of contact : </label>
        <div>
            <input type="radio" id="pck" name="reason" value="wallah">
            <label for="wallah">pck wallah</label>
        </div>

        <div>
            <input type="radio" id="avais" name="reason" value="envi">
            <label for="envi">j'avais envi</label>
        </div>

        <div>
            <input type="radio" id="demande" name="reason" value="ASP">
            <label for="ASP">demande d'ASP</label>
        </div>
    </div>
    <div class="form-example">
        <label for="mess">Your message : </label>

        <textarea id="mess" name="mess"
                  rows="5" cols="33">
</textarea>
    </div>
    <div class="form-example">
        <input id="SubscribeButton" type="submit" value="Subscribe!">
    </div>
</form>
