<?php include "includes/header.php";?>
<section>
<?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "satoru.ouchi@seattlecolleges.edu";  //place your/your client's email address here
        $toName = "Satoru Ouchi"; //place your client's name here
        $website = "Web 120 Form";  //place NAME of your client's website

        echo loadContact('multiple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
</section>
<aside>

<h3>Design Cycle Sources</h3>

<div class = "asideContent">
<a href = "https://penji.co/website-design-questions/">https://penji.co/website-design-questions/</a><br/><br/>
<a href = "https://www.websitebuilderexpert.com/designing-websites/how-to-hire-website-designer-graphic-developer/">https://www.websitebuilderexpert.com/designing-websites...</a><br/><br/>
<a href = "https://webflow.com/blog/the-web-design-process-in-7-simple-steps">https://webflow.com/blog/the-web-design-process...</a><br/><br/>
</div>

</aside>

<?php include "includes/footer.php";?>