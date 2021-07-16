<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Valorant blog</title>
    <!-- icon -->
    <link rel="icon" href="img/logo.png">
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <header class="header">
        <div class="container-fluid  logo-container">
            <div class="nav-container-left">
                <div class="overlayLogo">
                    <a href="https://playvalorant.com/en-us/"><svg xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" width="50" height="50" viewBox="0 0 132 129">
                            <image class="logo" id="Capa_1" data-name="Capa 1" width="132" height="129"
                                xlink:href="data:img/png;base64,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" />
                            <image class="logo2" id="Capa_1" data-name="Capa 1" width="132" height="129"
                                xlink:href="data:img/png;base64,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" />
                        </svg>
                    </a>
                </div>
                <div class="bar"></div>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50"
                    height="50" viewBox="0 0 132 129">
                    <image id="Capa_2" data-name="Capa 2" width="132" height="129"
                        xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAADQAAAAtCAYAAADhoUi4AAAB+ElEQVRoge2ZsY0CMRBF546ICJFAtFsBdIBEshGIAkAUgAQ56aXkhGQgCgBBB1QAFdABNHCnQSI4j5Fm7PGeD/mF3xL4j+3vkfejXq9/wxvx+U5mIBn6ByRDscMy1O/3ifYXcObBMjSZTGA0GhG9TObz+WMeKoaQ5XIJ7Xab6GWAK4OGOIjO0G63g1qtRvSQYBGxmFxEhtAMmioL/D80IymiOOWkFfPBZZs7xTYGROiQwDPjkq7O91DIkJCEgInXxRoiJHy3tJch7ZBwCQET79ZHMyQ0trFKL6cREq4hYKLWnPpU1ycETFS7bZeQ0L7XWIau1yvRbEhDQhoC5/OZaCaVarX6RVSD0+kERVFAo9EgYybNZhOyLIPj8UjGTFarFXQ6HaLbuFwuMB6PLSO/Ya3Q7XaD6XQK9/udjNnghIQkBPB/B4MB0W2InrFwAuv1muiv6Ha71m2i9Ts2RKFwOBxgsVgQ/RW2kMjzXBQCs9mMbQakK/Rks9lAr9cjug2cDFb4CRrkxjuGETeQnjgZwknt93totVpkzMZ2u31Uugyc7qEQIaGF19t2yMPtilenoBES2ni3PmiIc4lCSW8SKr0cnie8yTmEfpNQMRRTSKh+8IohJNS/4GHlh8Mh0W3gynIaTgnpk2TsJEOxkwzFTjIUO8lQ1ADAD/g2y2BPMF0WAAAAAElFTkSuQmCC" />
                </svg>
            </div>
            <div class="nav-container-center">
                <nav class="navigation">
                    <ul class="">
                        <li><a href="#" class="">Home</a></li>
                        <li><a href="#" class="">Patch Notes</a></li>
                        <li><a href="#" class="">Highlights</a></li>
                        <li class="li-contact"><a href="#" class="">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="nav-container-right">
                <span class="menu-icon"><i class="fas fa-bars"></i></span>
                <a class="contact" href="#" class="">Contact</a>
            </div>
        </div>
    </header>

    <main class="main">
        <div class="container">
            <h1>VALORANT BLOG</h1>
            <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos laboriosam iste iusto ipsa,
                ratione dignissimos in ipsum excepturi inventore mollitia! Recusandae, provident maiores inventore quas
                corporis ratione. Libero dolorem excepturi ipsum eligendi, quod odit alias maxime est rem eos, in ut
                provident consequatur magnam veniam ullam sit odio! Facere nihil minima aut ipsam, voluptatum saepe!
                Nisi, maxime consequatur nam voluptates saepe, quisquam deleniti dolores sint obcaecati repellat labore
                praesentium. Veniam recusandae tempore dicta cupiditate saepe magnam officia error numquam, incidunt
                ipsa hic atque optio architecto aut vitae consectetur, quasi dignissimos minima? Voluptatum numquam
                ipsam at ipsa, cupiditate nemo accusantium. Consequatur!</p>

            <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos laboriosam iste iusto ipsa,
                ratione dignissimos in ipsum excepturi inventore mollitia! Recusandae, provident maiores inventore quas
                corporis ratione. Libero dolorem excepturi ipsum eligendi, quod odit alias maxime est rem eos, in ut
                provident consequatur magnam veniam ullam sit odio! Facere nihil minima aut ipsam, voluptatum saepe!
                Nisi, maxime consequatur nam voluptates saepe, quisquam deleniti dolores sint obcaecati repellat labore
                praesentium. Veniam recusandae tempore dicta cupiditate saepe magnam officia error numquam, incidunt
                ipsa hic atque optio architecto aut vitae consectetur, quasi dignissimos minima? Voluptatum numquam
                ipsam at ipsa, cupiditate nemo accusantium. Consequatur!</p>

            <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos laboriosam iste iusto ipsa,
                ratione dignissimos in ipsum excepturi inventore mollitia! Recusandae, provident maiores inventore quas
                corporis ratione. Libero dolorem excepturi ipsum eligendi, quod odit alias maxime est rem eos, in ut
                provident consequatur magnam veniam ullam sit odio! Facere nihil minima aut ipsam, voluptatum saepe!
                Nisi, maxime consequatur nam voluptates saepe, quisquam deleniti dolores sint obcaecati repellat labore
                praesentium. Veniam recusandae tempore dicta cupiditate saepe magnam officia error numquam, incidunt
                ipsa hic atque optio architecto aut vitae consectetur, quasi dignissimos minima? Voluptatum numquam
                ipsam at ipsa, cupiditate nemo accusantium. Consequatur!</p>

            <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos laboriosam iste iusto ipsa,
                ratione dignissimos in ipsum excepturi inventore mollitia! Recusandae, provident maiores inventore quas
                corporis ratione. Libero dolorem excepturi ipsum eligendi, quod odit alias maxime est rem eos, in ut
                provident consequatur magnam veniam ullam sit odio! Facere nihil minima aut ipsam, voluptatum saepe!
                Nisi, maxime consequatur nam voluptates saepe, quisquam deleniti dolores sint obcaecati repellat labore
                praesentium. Veniam recusandae tempore dicta cupiditate saepe magnam officia error numquam, incidunt
                ipsa hic atque optio architecto aut vitae consectetur, quasi dignissimos minima? Voluptatum numquam
                ipsam at ipsa, cupiditate nemo accusantium. Consequatur!</p>
            <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos laboriosam iste iusto ipsa,
                ratione dignissimos in ipsum excepturi inventore mollitia! Recusandae, provident maiores inventore quas
                corporis ratione. Libero dolorem excepturi ipsum eligendi, quod odit alias maxime est rem eos, in ut
                provident consequatur magnam veniam ullam sit odio! Facere nihil minima aut ipsam, voluptatum saepe!
                Nisi, maxime consequatur nam voluptates saepe, quisquam deleniti dolores sint obcaecati repellat labore
                praesentium. Veniam recusandae tempore dicta cupiditate saepe magnam officia error numquam, incidunt
                ipsa hic atque optio architecto aut vitae consectetur, quasi dignissimos minima? Voluptatum numquam
                ipsam at ipsa, cupiditate nemo accusantium. Consequatur!</p>
            <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos laboriosam iste iusto ipsa,
                ratione dignissimos in ipsum excepturi inventore mollitia! Recusandae, provident maiores inventore quas
                corporis ratione. Libero dolorem excepturi ipsum eligendi, quod odit alias maxime est rem eos, in ut
                provident consequatur magnam veniam ullam sit odio! Facere nihil minima aut ipsam, voluptatum saepe!
                Nisi, maxime consequatur nam voluptates saepe, quisquam deleniti dolores sint obcaecati repellat labore
                praesentium. Veniam recusandae tempore dicta cupiditate saepe magnam officia error numquam, incidunt
                ipsa hic atque optio architecto aut vitae consectetur, quasi dignissimos minima? Voluptatum numquam
                ipsam at ipsa, cupiditate nemo accusantium. Consequatur!</p>
            <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos laboriosam iste iusto ipsa,
                ratione dignissimos in ipsum excepturi inventore mollitia! Recusandae, provident maiores inventore quas
                corporis ratione. Libero dolorem excepturi ipsum eligendi, quod odit alias maxime est rem eos, in ut
                provident consequatur magnam veniam ullam sit odio! Facere nihil minima aut ipsam, voluptatum saepe!
                Nisi, maxime consequatur nam voluptates saepe, quisquam deleniti dolores sint obcaecati repellat labore
                praesentium. Veniam recusandae tempore dicta cupiditate saepe magnam officia error numquam, incidunt
                ipsa hic atque optio architecto aut vitae consectetur, quasi dignissimos minima? Voluptatum numquam
                ipsam at ipsa, cupiditate nemo accusantium. Consequatur!</p>

            <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos laboriosam iste iusto ipsa,
                ratione dignissimos in ipsum excepturi inventore mollitia! Recusandae, provident maiores inventore quas
                corporis ratione. Libero dolorem excepturi ipsum eligendi, quod odit alias maxime est rem eos, in ut
                provident consequatur magnam veniam ullam sit odio! Facere nihil minima aut ipsam, voluptatum saepe!
                Nisi, maxime consequatur nam voluptates saepe, quisquam deleniti dolores sint obcaecati repellat labore
                praesentium. Veniam recusandae tempore dicta cupiditate saepe magnam officia error numquam, incidunt
                ipsa hic atque optio architecto aut vitae consectetur, quasi dignissimos minima? Voluptatum numquam
                ipsam at ipsa, cupiditate nemo accusantium. Consequatur!</p>

            <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos laboriosam iste iusto ipsa,
                ratione dignissimos in ipsum excepturi inventore mollitia! Recusandae, provident maiores inventore quas
                corporis ratione. Libero dolorem excepturi ipsum eligendi, quod odit alias maxime est rem eos, in ut
                provident consequatur magnam veniam ullam sit odio! Facere nihil minima aut ipsam, voluptatum saepe!
                Nisi, maxime consequatur nam voluptates saepe, quisquam deleniti dolores sint obcaecati repellat labore
                praesentium. Veniam recusandae tempore dicta cupiditate saepe magnam officia error numquam, incidunt
                ipsa hic atque optio architecto aut vitae consectetur, quasi dignissimos minima? Voluptatum numquam
                ipsam at ipsa, cupiditate nemo accusantium. Consequatur!</p>

            <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos laboriosam iste iusto ipsa,
                ratione dignissimos in ipsum excepturi inventore mollitia! Recusandae, provident maiores inventore quas
                corporis ratione. Libero dolorem excepturi ipsum eligendi, quod odit alias maxime est rem eos, in ut
                provident consequatur magnam veniam ullam sit odio! Facere nihil minima aut ipsam, voluptatum saepe!
                Nisi, maxime consequatur nam voluptates saepe, quisquam deleniti dolores sint obcaecati repellat labore
                praesentium. Veniam recusandae tempore dicta cupiditate saepe magnam officia error numquam, incidunt
                ipsa hic atque optio architecto aut vitae consectetur, quasi dignissimos minima? Voluptatum numquam
                ipsam at ipsa, cupiditate nemo accusantium. Consequatur!</p>
            <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos laboriosam iste iusto ipsa,
                ratione dignissimos in ipsum excepturi inventore mollitia! Recusandae, provident maiores inventore quas
                corporis ratione. Libero dolorem excepturi ipsum eligendi, quod odit alias maxime est rem eos, in ut
                provident consequatur magnam veniam ullam sit odio! Facere nihil minima aut ipsam, voluptatum saepe!
                Nisi, maxime consequatur nam voluptates saepe, quisquam deleniti dolores sint obcaecati repellat labore
                praesentium. Veniam recusandae tempore dicta cupiditate saepe magnam officia error numquam, incidunt
                ipsa hic atque optio architecto aut vitae consectetur, quasi dignissimos minima? Voluptatum numquam
                ipsam at ipsa, cupiditate nemo accusantium. Consequatur!</p>
            <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos laboriosam iste iusto ipsa,
                ratione dignissimos in ipsum excepturi inventore mollitia! Recusandae, provident maiores inventore quas
                corporis ratione. Libero dolorem excepturi ipsum eligendi, quod odit alias maxime est rem eos, in ut
                provident consequatur magnam veniam ullam sit odio! Facere nihil minima aut ipsam, voluptatum saepe!
                Nisi, maxime consequatur nam voluptates saepe, quisquam deleniti dolores sint obcaecati repellat labore
                praesentium. Veniam recusandae tempore dicta cupiditate saepe magnam officia error numquam, incidunt
                ipsa hic atque optio architecto aut vitae consectetur, quasi dignissimos minima? Voluptatum numquam
                ipsam at ipsa, cupiditate nemo accusantium. Consequatur!</p>

        </div>
    </main>
    <footer class="footer">
        <div class="footer-content">
            <h3>Created by : @CarlosAllen93</h3>
            <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga corporis molestias vel fugit nam
                aliquid, vitae eligendi ut rem culpa.</p>
            <ul class="socials">
                <li><a href="#"><i class="fab fa-discord"></i></a></li>
                <li><a href="#"><i class="fa fa-github"></i></a></li>
                <li><a href="#"><i class="fa fa-stack-overflow"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            </ul>
        </div>
        <div class="footer-copyright">
            <p>
            <h4>This is a fan art :</h4>
            All copyrights &copy;
            belong to Riot games " inspired page <a href="https://playvalorant.com/en-us/ "
                target="_blank">https://playvalorant.com/en-us/</a>"</p>

        </div>

    </footer>
    <!-- jQuery-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <!-- JavaScript-->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- icon awesome-->
    <script src="https://kit.fontawesome.com/8d2cede7ac.js" crossorigin="anonymous"></script>
</body>

</html>
