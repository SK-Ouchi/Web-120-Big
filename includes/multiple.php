<?php
/**
 * multiple.php is a postback application designed to provide a 
 * contact form for users to email our clients.  
 * 
 * multiple.php provides a larger form with more elements to provide 
 * a richer example form.
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 2 2019/10/13
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @todo none
 */

#--------------END CONFIG AREA ------------------------#
?>

<!-- START HTML FORM -->
<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
<div>
    <label>
        Name:<br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="44" autofocus />
    </label>
</div>
<div>	
    <label>
        Email:<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
    </label>
</div>
<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
<div>	
    <fieldset>
        <legend>What Services Are You Interested In?</legend>
        <input type="checkbox" name="Interested_In[]" value="New Website" tabindex="40" /> New Website <br />
        <input type="checkbox" name="Interested_In[]" value="Website Redesign" /> Website Redesign <br />
    </fieldset>
</div>

<div>
    <label>
        Short Description of Your Website:<br />
        <textarea name="Description" cols="36" rows="4" placeholder="" tabindex="60"></textarea>
    </label>
</div>

<div>	
    <label>
        What Does Your Website Seek to Accomplish?:<br />
        <textarea name="Goals" cols="36" rows="4" placeholder="" tabindex="60">
    </textarea>
    </label>
</div>

<div>	
    <label>
        What Are Some of Your Important Website Features?:<br />
        <textarea name="Features" cols="36" rows="4" placeholder="Images Galleries? Accessibility? Content Sharing?" tabindex="60"></textarea>
    </label>
</div>

<fieldset>
    <legend>Rate the Following On a Scale of 1 to 5:</legend>
<div>	
        <div>User Experience</div>
        <input type="radio" name="User Experience" value="1" tabindex="40" />1
        <input type="radio" name="User Experience" value="2" />2 
        <input type="radio" name="User Experience" value="3" />3
        <input type="radio" name="User Experience" value="4" />4
        <input type="radio" name="User Experience" value="5" />5
   
</div>

<div>	
        <div>Personal Branding</div>
        <input type="radio" name="Personal Branding" value="1" tabindex="40" />1
        <input type="radio" name="Personal Branding" value="2" />2 
        <input type="radio" name="Personal Branding" value="3" />3
        <input type="radio" name="Personal Branding" value="4" />4
        <input type="radio" name="Personal Branding" value="5" />5
</div>

<div>	
        <div>Mobile And Tablet Design</div>
        <input type="radio" name="Mobile And Tablet Design" value="1" tabindex="40" />1
        <input type="radio" name="Mobile And Tablet Design" value="2" />2 
        <input type="radio" name="Mobile And Tablet Design" value="3" />3
        <input type="radio" name="Mobile And Tablet Design" value="4" />4
        <input type="radio" name="Mobile And Tablet Design" value="5" />5
</div>

<div>	
        <div>User Interaction</div>
        <input type="radio" name="User Interaction" value="1" tabindex="40" />1
        <input type="radio" name="User Interaction" value="2" />2 
        <input type="radio" name="User Interaction" value="3" />3
        <input type="radio" name="User Interaction" value="4" />4
        <input type="radio" name="User Interaction" value="5" />5
</div>

<div>	
        <div>Marketing</div>
        <input type="radio" name="Marketing" value="1" tabindex="40" />1
        <input type="radio" name="Marketing" value="2" />2 
        <input type="radio" name="Marketing" value="3" />3
        <input type="radio" name="Marketing" value="4" />4
        <input type="radio" name="Marketing" value="5" />5
</div>
</fieldset>
<div>	
    <label>
        Other Comments:<br />
        <textarea name="Comments" cols="36" rows="4" placeholder="" tabindex="60">
        </textarea>
    </label>
</div>	
<div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div>
<div>
    <input type="submit" value="submit" />
</div>
</form>
<!-- END HTML FORM -->

