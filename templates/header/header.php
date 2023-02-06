<!--	Header	-->
<div id="header">
	<div class="container">
    	<div class="row">
        	<div id="logo" class="col-lg-3 col-md-3 col-sm-12">
            	<h1><a href="index.php"><img class="img-fluid" src="images/bteclogo.png" width="136px" height="42px"></a></h1>
            </div>
            <div id="search" class="col-lg-6 col-md-6 col-sm-12">
                <form class="form-inline" method="post" action="index.php?page_layout=search">
                    <input name="keyword" class="form-control mt-3" type="search" placeholder="Enter a product name" aria-label="Search">
                    <button class="btn btn-danger mt-3" type="submit">Search</button>
                </form>
            </div>
            <div id="cart" class="col-lg-3 col-md-3 col-sm-12">
            	<a class="mt-4 mr-2" href="index.php?page_layout=cart">Shopping Cart</a>
                <span class="mt-3">
                    <?php
                        if(isset($_SESSION['cart'])){
                            echo count($_SESSION['cart']);
                        }else echo '0';
                    ?>
                </span>
            </div>
        </div>
    </div>
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#menu">
    	<span class="navbar-toggler-icon"></span>
    </button>
</div>
<!--	End Header	-->