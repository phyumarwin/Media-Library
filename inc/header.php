<html>
<head>
    <title> <?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
    <div class="header">
        <div class="hwrapper">
            <h1 class="branding-title"><a href="/">Personal Media Library</a> </h1>
                <ul class="nav">
                       <li class="books<?php if($section=="books") {
                        echo " on";} ?> "><img src="img/logoBook.png" alt="bookLogo"/><a href="catalog.php?cat=books">Books</a>
                        </li>
                       <li class="movies<?php if($section=="movies") {
                        echo " on";} ?>"><img src="img/logoMovies.png" alt="movieLogo"/><a href="catalog.php?cat=movies">Movies</a></li>
                       <li class="music"<?php if($section=="music") {
                        echo " on";} ?>><img src="img/logoMusic.png" alt="musicLogo"/><a href="catalog.php?cat=music">Music</a></li>
                       <li class="suggest"<?php if($section=="suggest") {
                        echo " on";} ?>><img src="img/logoSuggest.png" alt="suggestLogo"/><a href="suggest.php">Suggest</a></li>
                </ul>
        </div> 
    </div>
</body>
</html>