<?php 
    include ("inc/data.php");
    include ("inc/function.php");

    $pageTitle= "Personal Media Library";
    $section=null;
    
    include("inc/header.php"); ?>
        <div class="section catalog random">
            <div class="wrapper">
                <h2>May we suggest something?</h2>
                <ul class="catalog">
                    <?php 
                        $random = array_rand($catalog,4);
                        foreach ($random as $id) {
                            echo get_item_html($id,$catalog[$id]);
                        }
                    ?>
                </ul>
            </div>
        </div>
    </div> <!--end content -->

    <div class="footer">
        <div class="fwrapper">
            <ul>
                <li><a href="http://twitter.com/treehouse">Twitter</a> </li>
                <li><a href="http://www.facebook.com/phyuphyu">Facebook</a></li>
            </ul>

            <p>&copy;<?php echo date("Y"); ?> Personal Media Library</p>
        </div>
    </div>

    <!-- <?php include("inc/footer.php"); ?> -->
    
<!-- </body>
</html> -->