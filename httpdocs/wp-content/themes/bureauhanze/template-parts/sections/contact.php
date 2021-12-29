<section class="contact">
    <div class="container">


    <form>
        <div class="form__item">
            <div class="form__row">
                <input type="text" name="sender-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Voornaam" required>
                <label for="Voornaam">Voornaam</label>
            </div>
        </div>

        <div class="form__item">
            <div class="form__row">
                <input type="text" name="lastname" placeholder="Achternaam" id="last_name" required>
                <label for="Achternaam">Achternaam</label>
            </div>
        </div>

        <div class="form__item">
            <div class="form__row">
                <input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="E-mailadres">
                <label for="E-mailadres">E-mail adres</label>
            </div>
        </div>



        <div class="form__item">
            <div class="form__row">
                <input type="text" name="phone" placeholder="Voorbeeld: ( 0612345678 ) of ( 0332653457 )" pattern="(^\+[0-9]{2}|^\+[0-9]{2}\(0\)|^\(\+[0-9]{2}\)\(0\)|^00[0-9]{2}|^0)([0-9]{9}$|[0-9\-\s]{10}$)" id="phone_input" required>
                <label for="phone">Telefoonnummer</label>
            </div>
        </div>


        <div class="form__item">
            <div class="form__row">
                <input type="text" name="subject" placeholder="Onderwerp van uw vraag" id="subject_input" required>
                <label for="contactperson">Onderwerp</label>
            </div>
        </div>



        <div class="form__item">
            <div class="form__row">
                <textarea name="body" placeholder="Typ hier je tekst..." id="body_input" required></textarea>
                <label for="body">Uw bericht</label>
            </div>        
        </div>




        <div class="form__item">
            <div class="form__row">
                <input type="submit" value="Verzenden" class="wpcf7-form-control has-spinner wpcf7-submit">
                <div class="wpcf7-response-output" aria-hidden="true"></div>
            </div>
        </div>
    </form>




    
    </div>
</section> 