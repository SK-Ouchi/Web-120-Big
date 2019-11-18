<?php include "includes/header.php";?>
<section>

<div class = "researchContent">

    <p>It is hard to talk about flexbox without talking a little about grids. Both flexbox and grid are used to perform 
        similar actions: expand and contract, align content, and order items. All of these can be used to leverage 
        responsive web pages. They do have some differences that give them more defined roles. Grid is better for building page layouts. 
        Flexbox on the other hand, is best suited for ordering small pieces of content.</p>

    <p>Flexboxes work on a single axis, making them effective in ordering content of various sizes. Chris Coyier of CSS Tricks writes, 
        “While flexbox can make rows and columns in the sense that it allows elements to wrap, there's no way to declaratively control 
        where elements end up since the elements merely push along a single axis and then wrap or not wrap accordingly (Coyier).” The 
        rows Coyier is referring to are independent on the last piece of content in the row and the viewport. This may be useful for 
        displaying content that has no specific layout, dynamic data for example.</p>

    <p>Although most browsers now support flexbox, something to note is its compatibility. Rachel Andrew of MDN web docs writes, 
        “Browser support for flexbox is excellent, and the majority of browsers do not need a prefix at this point. Safari was the 
        last of the major browsers to remove prefixes, with the release of Safari 9 in 2015. The two browsers you should still keep 
        in mind for cross-browser compatibility are:</p>

    <ul>
        <li>Internet Explorer 10, which implemented the display: flexbox version of the specification with the -ms- prefix.</li>
        <li>UC Browser, which still supports the 2009 display: box version only with the -webkit- prefix.</li>
    </ul>

    <p>Note also that Internet Explorer 11 supports the modern display: flex specification however it has a number of bugs in the 
        implementation (Andrew).” While this should not be an issue with the widespread use of modern browsers, we still should 
        consider who our client is and their equipment.</p>

</div>

</section>
<aside>

<h3>Works Cited</h3>

<div class = "asideContent">
Coyier, Chris. “Using Flexbox: Mixing Old and New for the Best Browser Support.” CSS-Tricks, 18 Feb. 2013, 
https://css-tricks.com/using-flexbox/ Accessed November 1, 2019<br/><br/>
Andrew, Rachel. “Backwards Compatibility of Flexbox.” MDN Web Docs, Mozilla, 18 Mar. 2019, 
https://developer.mozilla.org/en-US/docs/Web/
CSS/CSS_Flexible_Box_Layout/Backwards_Compatibility
_of_Flexbox Accessed November 1, 2019
</div>

</aside>

<?php include "includes/footer.php";?>