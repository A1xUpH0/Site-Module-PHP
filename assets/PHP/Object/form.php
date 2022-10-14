<?php session_start();?>

<form action="" method="post" class="form-example">
    <div class="form-example">
        <label for="gender">Gender : </label>
        <select name="gender" id="gender">
            <option value="<?php echo($_SESSION["gender"]); ?>"><?php echo($_SESSION["gender"]); ?></option>
            <option value="Mr.">Mr.</option>
            <option value="Mrs.">Mrs.</option>
        </select>
    </div>
    <div class="form-example">
        <input type="text" name="Fname" id="Fname" placeholder=" First name" value="<?php
        echo($_SESSION["firstName"]); ?>">
            </div>
    <div class="form-example">
        <input type="text" name="Lname" id="Lname" placeholder=" Last name" value="<?php
        echo($_SESSION["lastName"]);
        ?>">
    </div>
    <div class="form-example">
        <input type="email" name="email" id="emailB" placeholder=" Email Address" value="<?php
        echo($_SESSION["email"]);
        ?>">
    </div>
    <div class="form-example">
        <label for="radio">Reason of contact : </label>
        <div>
            <input type="radio" id="one" name="reason" value="Option One" <?php echo($_SESSION["tabReason"][0]);?>>
            <label for="Option One">Option #1</label>
        </div>

        <div>
            <input type="radio" id="two" name="reason" value="Option Two" <?php echo($_SESSION["tabReason"][1]);?>>
            <label for="Option Two">Option #2</label>
        </div>

        <div>
            <input type="radio" id="three" name="reason" value="Option Three" <?php echo($_SESSION["tabReason"][2]);?>>
            <label for="Option Three">Option #3</label>
        </div>
    </div>
    <div class="form-example">
        <textarea id="mess" name="mess"
                  rows="5" cols="33" placeholder=" Your message"> <?php
            echo($_SESSION["message"]);?>
</textarea>
    </div>
    <div class="form-example">
        <input id="SubscribeButton" type="submit" value="Subscribe">
    </div>
    <p id="errorMessage"> <?php echo ($ErrorMess); ?> </p>
</form>
