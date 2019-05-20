<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <title>Document</title>
</head>

<body class="pt-0" style="background: url('https://images.wallpaperscraft.com/image/food_pepper_herbs_sauce_84898_1920x1080.jpg') no-repeat; background-size: cover;">
    <div class="sticky-top bg-secondary border-bottom border-danger">
        <nav class="navbar navbar-expand-md sticky-top pb-0 pt-0 mb-0 border-">
            <button class="navbar-toggler" data-toggle="collapse" data-target="#hehe">
                <span class="navbar-toggler-icon"><i class="fas fa-bars text-white"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="hehe">
                <a class="navbar-brand p-0"><img src="Logo15.jpg" id="lit" class="rounded-circle" alt=""></a>
                <span class="navbar-text p-0 text-warning">Epitome</span>
                <ul class="navbar-nav">
                    <li class="nav-item p-0">
                        <a class="nav-link text-light p-0 pl-2 pr-2" href="main1.php">Home</a>
                    </li>
                    <li class="nav-item p-0">
                        <a class="nav-link text-light p-0 pl-2 pr-2" href="main2.php">Menu</a>
                    </li>
                    <li class="nav-item p-0">
                        <a class="nav-link text-light p-0 pl-2 pr-2" href="main3.php">Registration</a>
                    </li>
                    <li class="nav-item p-0">
                        <a class="nav-link text-light p-0 pl-2 pr-2" href="main4.php">Press</a>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse justify-content-end">
                <a href="#" class="nav-link  text-light h5"><i class="fab fa-instagram text-dark"></i></a>
                <a href="#" class="nav-link  text-light h5"><i class="fab fa-twitter text-dark"></i></a>
                <a href="#" class="nav-link text-light h5"><i class="fab fa-youtube  text-dark"></i></a>
            </div>
        </nav>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4 mr-3">
                <div class="tab position-relative">
                    <button class="tablinks text-center ml-5" onclick="openCity(event, 'London')" id="defaultOpen">Hors d'ouvre</button>
                    <button class="tablinks text-center ml-5" onclick="openCity(event, 'Paris')">Soups</button>
                    <button class="tablinks text-center ml-5" onclick="openCity(event, 'Tokyo')">Salads</button>
                    <button class="tablinks text-center ml-5" onclick="openCity(event, 'manila')">Entrées</button>
                    <button class="tablinks text-center ml-5" onclick="openCity(event, 'china')">Main course</button>
                    <button class="tablinks text-center ml-5" onclick="openCity(event, 'israel')">Desserts</button>
                </div>
            </div>
            <div class="col-md-7 justify-content-center text-center row" id="menu">

                <div id="London" class="tabcontent">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade bg-dark" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="card-body">
                                    <img class="card-img-top" src="https://img.taste.com.au/0YxLCH-K/w643-h428-cfill-q90/taste/2016/11/herb-and-creme-fraiche-tarts-with-caviar-77332-1.jpeg" height="200px" width="350px" alt="Card image">
                                    <h5 class="card-title">Caviar & creme fraiche tartlets</h5>
                                    <p class="card-text">crispy salty roe of sturgeon fish accompanied with tangy-creamy small tarts</p>
                                    <a href="#" class="btn btn-warning pull-right">Php 250.00</a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card-body">
                                    <img class="card-img-top" src="https://media3.s-nbcnews.com/j/newscms/2016_47/1176300/crostini-ricotta-brussels-sprouts-maple-bacon-bobby-flay-211116-tease_280c3c65dbd216d7e8078e5f756c4f5a.today-inline-large.jpg" height="200px" width="350px" alt="Card image">
                                    <h5 class="card-title">Shredded Brussels sprouts and ricotta toast</h5>
                                    <p class="card-text">bright tangle of shredded Brussels sprouts, raisins & pine nuts topped with silky ricotta in snappy, satisfying toast</p>
                                    <a href="#" class="btn btn-warning pull-right">Php 220.00</a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card-body">
                                    <img class="card-img-top" src="https://lh3.googleusercontent.com/LuL3v6enYj8V9gc8QS6w88pdFq7SCfXW4BbfyckMEc4CzI592FqjQ7C6kDyXKUAS8yzAdVgOWYZ5ckBonTRgMw=s640-c-rw-v1-e365" height="200px" width="350px" alt="Card image">
                                    <h5 class="card-title">Lobster toasts with avocado & espellete pepper</h5>
                                    <p class="card-text">zesty lobster salad instantly turns avocado toast into elegant cocktail favotite</p>
                                    <a href="#" class="btn btn-warning pull-right">Php 200.00</a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card-body">
                                    <img class="card-img-top" src="https://www.onceuponachef.com/images/2014/08/Buttermilk-Ranch-Dressing-760x532.jpg" height="200px" width="350px" alt="Card image">
                                    <h5 class="card-title">Hand salad with buttermilk & mixed seeds</h5>
                                    <p class="card-text">pieces of romaine lettuce drizzled with dressing mixture of buttermilk and savory seeds</p>
                                    <a href="#" class="btn btn-warning pull-right">Php 180.00</a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card-body">
                                    <img class="card-img-top" src="https://www.seriouseats.com/recipes/images/20110421-shrimp-toast-5.jpg" height="200px" width="350px" alt="Card image">
                                    <h5 class="card-title">Shrimp toasts with sesame seeds & scallion</h5>
                                    <p class="card-text">dimsum-style shrimp toasts with lavishing mingling of toasted and salty taste</p>
                                    <a href="#" class="btn btn-warning pull-right">Php 180.00</a>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div id="Paris" class="tabcontent">
                    <div class="bd-example bg-dark">
                        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="card-body">
                                        <img class="card-img-top" src="https://steamykitchen.com/wp-content/uploads/2011/06/bouillabaisse-recipe-9355.jpg" height="200px" width="350px" alt="Card image">
                                        <h5 class="card-title">Bouillabaise</h5>
                                        <p class="card-text">Provençale thin stew from fish and shellfish in olive oil & tomatoes served with baguette slices</p>
                                        <a href="#" class="btn btn-warning pull-right">Php 290.00 </a>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="card-body">
                                        <img class="card-img-top" src="https://images-gmi-pmc.edge-generalmills.com/e63c567f-de9b-44d2-bb2c-c2a60c5b8fbe.jpg" height="200px" width="350px" alt="Card image">
                                        <h5 class="card-title">Shrimp bisque</h5>
                                        <p class="card-text">a thick cream soup made of puréed shrimp then thickened with rice</p>
                                        <a href="#" class="btn btn-warning pull-right">Php 275.00 </a>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="card-body">
                                        <img class="card-img-top" src="https://s3.amazonaws.com/finecooking.s3.tauntonclud.com/app/uploads/2017/04/18152251/fc57kt078-01-main.jpg" height="200px" width="350px" alt="Card image">
                                        <h5 class="card-title">Potato and leek soup</h5>
                                        <p class="card-text">cozy and comforting soup made from combined potatoes, leek and rich broth</p>
                                        <a href="#" class="btn btn-warning pull-right">Php 260.00</a>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="card-body">
                                        <img class="card-img-top" src="https://cdn-image.foodandwine.com/sites/default/files/styles/medium_2x/public/200809-r-xl-smoky-tomato-soup-with-gruyere-toasts.jpg?itok=cY-dRliZ" height="200px" width="350px" alt="Card image">
                                        <h5 class="card-title">French tomato soup</h5>
                                        <p class="card-text">rich soup made from extracted juices of tomato thickened with broth and cream</p>
                                        <a href="#" class="btn btn-warning pull-right">Php 250.00</a>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="card-body">
                                        <img class="card-img-top" src="https://hh2983bckk73apigx3cu5b3t23-wpengine.netdna-ssl.com/wp-content/uploads/2013/12/French-Onion-Soup-served-in-white-bowls.jpg" height="200px" width="350px" alt="Card image">
                                        <h5 class="card-title">French onion soup</h5>
                                        <p class="card-text">an iconic soup made from caramelized onions simmered in beefy broth then reduced to rich consistency</p>
                                        <a href="#" class="btn btn-warning pull-right">Php 250.00</a>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div id="Tokyo" class="tabcontent">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner bg-dark">
                            <div class="carousel-item active">
                                <div class="card-body">
                                    <img class="card-img-top" src="https://ichef.bbci.co.uk/food/ic/food_16x9_832/recipes/saladenicoise_6572_16x9.jpg" height="200px" width="350px" alt="Card image">
                                    <h5 class="card-title">Nicoise salad</h5>
                                    <p class="card-text">from Nice, composed of tomatoes, hard-boiled egg, Nicoise olives, anchovies dressed with olive oil</p>
                                    <a href="card-text" class="btn btn-warning pull-right">Php 550.00</a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card-body">
                                    <img class="card-img-top" src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/shot-5-0456-1522856490.png?resize=768:*" height="200px" width="350px" alt="Card image">
                                    <h5 class="card-title">Waldorf salad</h5>
                                    <p class="card-text">fruit and nut salad made from fresh apples, celery, grapes and walnuts dressed in light mayonnaise</p>
                                    <a href="#" class="btn btn-warning pull-right">Php 500.00</a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card-body">
                                    <img class="card-img-top" src="http://www.kvalifood.com/kvalifood.files/image/large/1e76782d-7e78-11e7-b219-06944f3d741b.jpg" height="200px" width="350px" alt="Card image">
                                    <h5 class="card-title">Agustin salad</h5>
                                    <p class="card-text">named after the famous theologian, made from complementing beans, peas and eggs drizzled with white dressing</p>
                                    <a href="#" class="btn btn-warning pull-right">Php 450.00</a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card-body">
                                    <img class="card-img-top" src="http://www.kvalifood.com/kvalifood.files/image/large/e5d4aa8b-7ce1-11e7-b219-06944f3d741b.jpg" height="200px" width="350px" alt="Card image">
                                    <h5 class="card-title">Andalouse salad</h5>
                                    <p class="card-text">made from cooked rice along with tomatoes, pimientos and garlic dressed with french dressing</p>
                                    <a href="#" class="btn btn-warning pull-right">Php 450.00</a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card-body">
                                    <img class="card-img-top" src="http://www.kvalifood.com/kvalifood.files/image/large/4156a1ea-7c1c-11e7-b219-06944f3d741b.jpg" height="200px" width="350px" alt="Card image">Americaine salad</h5>
                                    <p class="card-text">composed of fresh romaine, purple lettuce, sliced sweet apples, creamy feta cheese and candied walnuts tossed with raspberry vinaigrette</p>
                                    <a href="#" class="btn btn-warning pull-right">Php 420.00</a>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div id="manila" class="tabcontent">
                    <div id="carouselExampleInterval" class="carousel slide bg-dark" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-interval="10000">
                                <div class="card-body">
                                    <img class="card-img-top" src="https://img.taste.com.au/nxBmlG07/w643-h428-cfill-q90/taste/2016/11/coq-au-vin-93335-1.jpeg" height="200px" width="350px" alt="Card image">
                                    <h5 class="card-title">Coq au vin</h5>
                                    <p class="card-text">classical French stew, chicken slowly braised in red wine yielding rich sauce filled with bacon bits, mushroom and burnished pearl onions</p>
                                    <a href="#" class="btn btn-warning pull-right">Php 600.00</a>
                                </div>
                            </div>
                            <div class="carousel-item" data-interval="2000">
                                <div class="card-body">
                                    <img class="card-img-top" src="https://www.gourmetdirect.co.nz/images/recipe/graham-browns-lamb-neck-fillets-in-pancetta-with-cannellini-cassoulet_lg.jpg?i=1531283446" height="200px" width="350px" alt="Card image">
                                    <h5 class="card-title">Cassoulet</h5>
                                    <p class="card-text">classical stew of white beans, sausages, pork or lamb and preserved goose or duck flavored with a bouquet garni and studded with onion, cloves and garlic</p>
                                    <a href="#" class="btn btn-warning pull-right">Php 550.00</a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card-body">
                                    <img class="card-img-top" src="https://noseychef.com/wp-content/uploads/2017/09/IMG_2269.jpg" height="200px" width="350px" alt="Card image">
                                    <h5 class="card-title">Confit de canard</h5>
                                    <p class="card-text">traditional dish of Aquitaine region, basically a preserved duck cooked in its own fat the stored in a pot covered with the same fat</p>
                                    <a href="#" class="btn btn-warning pull-right">Php 500.00</a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card-body">
                                    <img class="card-img-top" src="https://static.cuisineaz.com/240x192/i114199-flamiche-aux-poireaux.jpeg" height="200px" width="350px" alt="Card image">
                                    <h5 class="card-title">Flamiche</h5>
                                    <p class="card-text">originated in Picardy, made from brioche puff pastry made with leeks and cream embedded with bacon bits or sausages</p>
                                    <a href="#" class="btn btn-warning pull-right">Php 450.00</a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card-body">
                                    <img class="card-img-top" src="https://d3awvtnmmsvyot.cloudfront.net/api/file/fNLQF8ADS2uzcrwiB1ZL" height="200px" width="350px" alt="Card image">
                                    <h5 class="card-title">Ratatoille</h5>
                                    <p class="card-text">originated from Provence region made of tomatoes, eggplant, zucchini, onios, garlic, sweet peppers and herbs simmered in olive oil</p>
                                    <a href="#" class="btn btn-warning pull-right">Php 420.00</a>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div id="china" class="tabcontent">
                    <div id="carouselExampleControls" class="carousel slide bg-dark" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="card-body">
                                    <img class="card-img-top" src="https://cdn.shopify.com/s/files/1/1727/0315/products/DSC3541small_1024x1024.jpg?v=1484940910" height="200px" width="350px" alt="Card image">
                                    <h5 class="card-title">Grilled filet mignon with bearnaise sauce</h5>
                                    <p class="card-text">tender cut of melt-in-your-mouth beef texture served alongside with herb-enhanced bearnaise sauce</p>
                                    <a href="#" class="btn btn-warning pull-right">Php 850.00</a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="card-img-top" src="https://thumbor.thedailymeal.com/hAWwze7r9gRSh_ZBbD9xdCrwbkQ=/870x565/filters:format(webp)/https://www.thedailymeal.com/sites/default/files/2014/12/05/cc5f3d982620988c049c51b6ef1ec2ad.jpg" height="200px" width="350px" alt="Card image">
                                <h5 class="card-title">Crunchy almond-crusted duck breast with chanterelle salad</h5>
                                <p class="card-text">broiled duck meat pleasant sugar-burnt flavor resulting to bittersweet crust, topped with chopped sugar-coated almonds served with slivers of greens and mushrooms</p>
                                <a href="#" class="btn btn-warning pull-right">Php 790.00</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card-body">
                                <img class="card-img-top" src="https://cdn-image.foodandwine.com/sites/default/files/styles/medium_2x/public/201110-xl-marseille-style-shrimp-stew.jpg?itok=48ATZVAe" height="200px" width="350px" alt="Card image">
                                <h5 class="card-title">Merseille-style shrimp stew</h5>
                                <p class="card-text">large shrimp pieces spread with garlicky rouille on toasts for dipping in the stew</p>
                                <a href="#" class="btn btn-warning pull-right">Php 760.00</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card-body">
                                <img class="card-img-top" src="https://i.pinimg.com/originals/87/32/72/873272d8c9c0d68506b60233982fbe67.jpg" height="200px" width="350px" alt="Card image">
                                <h5 class="card-title">Lyon-style chicken with vinegar sauce</h5>
                                <p class="card-text">tender chicken meat cooked in the presence of onions sauteed in butter then finished off with drippings then deglazed with vinegar</p>
                                <a href="#" class="btn btn-warning pull-right">Php 650.00</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card-body">
                                <img class="card-img-top" src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fcdn-image.foodandwine.com%2Fsites%2Fdefault%2Ffiles%2Fstyles%2Fmedium_2x%2Fpublic%2Fbraised-pork-with-pearl-onions-and-grapes-xl-recipe2016.jpg%3Fitok%3DujvVvTJV&w=450&c=sc&poi=face&q=85" height="200px" width="350px" alt="Card image">
                                <h5 class="card-title">Braised pork with pearl onion and grapes</h5>
                                <p class="card-text">crusted rib-end pork added with pearl onion and grapes producing sweet-juicy flavor of the dish</p>
                                <a href="#" class="btn btn-warning pull-right">Php 600.00</a>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div id="israel" class="tabcontent">
                    <div id="carouselExampleIndicators" class="carousel slide bg-dark" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="card-body">
                                    <img class="card-img-top" src="https://live.staticflickr.com/7018/6776996071_ebd8992632_b.jpg" height="200px" width="350px" alt="Card image">
                                    <h5 class="card-title">Croquembouche</h5>
                                    <p class="card-text">small, custard-filled cream puffs coated with caramel, stacked into tall pyramid elaborately decorated with spun sugar and sugar flowers</p>
                                    <a href="#" class="btn btn-warning pull-right">Php 450.00</a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card-body">
                                    <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/1/11/VanillaMacaron.jpg" height="200px" width="350px" alt="Card image">
                                    <h5 class="card-title">French macarons</h5>
                                    <p class="card-text">sweet meringue-based confectioner made with egg-white, icing sugar, granulated sugar, almond powder and food coloring</p>
                                    <a href="#" class="btn btn-warning pull-right">Php 420.00</a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card-body">
                                    <img class="card-img-top" src="https://images.media-allrecipes.com/userphotos/560x315/5925138.jpg" height="200px" width="350px" alt="Card image">
                                    <h5 class="card-title">Chocolate soufflé</h5>
                                    <p class="card-text">delightly soft baked dessert made from eggyolk, cocoa powder, and beaten egg whites</p>
                                    <a href="#" class="btn btn-warning pull-right">Php 350.00</a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card-body">
                                    <img class="card-img-top" src="http://img.food.com/food/Creme-Brulee+1.JPG" height="200px" width="350px" alt="Card image">
                                    <h5 class="card-title">Crème brûleé</h5>
                                    <p class="card-text">a rich custard topped witha crust of caramelized sugar</p>
                                    <a href="#" class="btn btn-warning pull-right">Php 350.00</a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card-body">
                                    <img class="card-img-top" src="http://foodthinkers.com/assets/hazelnutDacquoiseFI.jpg" height="200px" width="350px" alt="Card image">
                                    <h5 class="card-title">Dacquoise</h5>
                                    <p class="card-text">made with layers of baked meringue filled with whipped cream or buttercream</p>
                                    <a href="#" class="btn btn-warning pull-right">Php </a>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-3">
            <div class="row">
                <div class="jumbotron mb-0 col-md-6" style="background-color:#FFFB7E;">

                    <h1 class="text-danger font-weight-bolder display-1 col-sm-5 p-0 m-0">Menu</h1>
                    <br>
                    <p class="text-danger font-weight-bold">Guests have a wide-variety of selection for every dish. <br> <span>Take a peak of our best-sellers for every category.</span></p>
                    <hr class="my-2">
                    <p class="lead">
                        <a class="btn btn-primary" href="main3.php" role="button">Book Now</a>
                    </p>
                </div>
                <div class="col-md-6" style="background-color:#FFFB7E;">
                    <div class="card mt-5 bg-transparent border-0">
                        <img src="https://archivio.letitwine.com/wp-content/uploads/2016/09/shutterstock_248932531.jpg" width="400" height="200" class="rounded shadow-lg">
                        <span href="wine.php" class="btn btn-info w-50 ml-5 mt-2">Enter Wine Cellar</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer-copyright bg-dark text-center text-light p-2">© 2019 Copyright:
            <span>MarkJen</span>
        </div>
    </footer>
    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
        document.getElementById("defaultOpen").click();
    </script>
</body>

</html>