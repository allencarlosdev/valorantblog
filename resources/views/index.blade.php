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
        <div class="container-fluid logo-nav-container">
            <a href="#" class="logo"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="50" height="50" viewBox="0 0 132 129">
                    <image id="Capa_1" data-name="Capa 1" width="132" height="129"
                        xlink:href="data:img/png;base64,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" />
                </svg></a>
            <div class="bar"></div>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="52" height="45"
                viewBox="0 0 52 45">
                <image id="Capa_1" data-name="Capa 1" width="52" height="45"
                    xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAADQAAAAtCAYAAADhoUi4AAAEyUlEQVRoge2ZR0srURTHj0nsvSxs2AtW0LUfwZ2fwA/kyq0grnWhomBbiCiKKLgRFRsq2Hsl1sf/kDPvvkkyc2fiqO/x/nAzIZmZ3N+cem/igsHgB/1D8v1LMPQf6C/QfyAv9PHxwePy8tJ4j+FGge8GgZaXl2lsbIzW1taosrKSR3V1NVVUVFB+fn7YdVb6lrQtILOzszQ1NUWLi4u0s7NDNzc3lJGRQZmZmZSdnc2jqqqKR21tLZWXl1NBQUHY/VR9KRBAXl9fGWR8fJyWlpZof3+fbm9vw84VpaWlMWBOTg7l5uay1WBBQOJ9UVER+Xy/I+fLgB4fH2lmZoYtsrKywhbBZ04lgFlZWQxZVlbG7imu6jnQ9fU1TUxM0OjoKG1sbNDR0REFg8Gw89wqMTGR0tPTeQDSM6CTkxOanJyk4eFh2t3dpePjY3Y3t9lLV5+e5Q4ODgyL7O3tsUXe39/5u0AgYKRk+ezHAm1ubnKgAwZQsIjZGipEXFwcf4+AjqXumBUz0Pr6OkNgIGOdnZ1FnVwkq0T6LBa5BkKmQjFECoZrnZ+fRwX5SjkGmpubo6GhIVpYWOD4uL+//xEgIlsgTPbl5YXm5+dpYGCA2xRksIeHh7Bzf4IsgVD44FKDg4PsYrDI09MTfydB/eOBMEn0VNPT0+xaq6urHOgC4rWkjcEDe3t7iw0IgQ2Q/v5+TsMXFxdRq/pnWwcAGH6/nzOfGxgSoMPDQ+6xUNW3trYYDFXdLDy9WNKslZtKTZL7NzU1UXt7O3V1ddHz83PY+dEU6OnpoZGREdre3qarq6uIIKJYa0YkGBVSrBIfH09tbW3U0dFB3d3dzoD6+voYxqtWxE6qm2HASvgsJSWF10apqalcGnTlS0pK+nIYTFh9jx4PUBTq96Dk5GQ+oot2Ih/WFF4KLb1MUqS6HtwMLiWujveAxLoHR8dAxcXFBCt5obq6Oi7GWICpVjELHqJC4lzMyRUQ1ulYAXohTKqkpIRXleoy2U4CgmtgYUdAWJc7vUhXKMaYHNb/ToHwkOXoCAjrcN2LEG/IOrpCDwhhx0aCXhcIv4OjYwuVlpZSXl6epY9DSKO9vb3U2dnJ6VRHkj3x0JwCweVw1P0tAwibDHA7uwvRAiHztLS08FFHyGAIdjcuh/m4cjlchKC1uxCTw2htbdV2O7EQHoDdBqEqWEfStmMgvMBCOheenp7ybibcT0cChIkhm+q6HawjaduxywmQTvDJVhTqilRyK6kdiK7bqUXVNRA2xFFgEU9Wkua1ublZy0oSQxh4CDoWUhOCa5eD4BJ2VsIeNCbZ0NCgDSRWghfoWkisInBOugXjF3TqEfYRMMn6+notIOmg5f7mni6SzEBwbSduZwDpJAa08QDKDv3NYeeiKhD+OYBb29U7c9w4jSMDCAUWE7WSAEGNjY22icG85auTGMxx47RBNe4OF0IcWT2Nu7s7Y4KII7t6pMYQhbzALjF8moUo9ASt3A5AYiGs+e06BvNmR01NjZaFzEBWczLrj7vbZTrs08kEUfnx75lVoAuQrHV0LWR2Oc+AJMvJBO3St5oUKASUkJAQdp4qc8zEBFRYWMhFNtpTR1JQd4Xs4sjscnAlJB+rTBcJSDeG/H4//QIv8YWTtGSvBwAAAABJRU5ErkJggg==" />
                <image id="Capa_2" data-name="Capa 2" width="52" height="45"
                    xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAADQAAAAtCAYAAADhoUi4AAAB+ElEQVRoge2ZsY0CMRBF546ICJFAtFsBdIBEshGIAkAUgAQ56aXkhGQgCgBBB1QAFdABNHCnQSI4j5Fm7PGeD/mF3xL4j+3vkfejXq9/wxvx+U5mIBn6ByRDscMy1O/3ifYXcObBMjSZTGA0GhG9TObz+WMeKoaQ5XIJ7Xab6GWAK4OGOIjO0G63g1qtRvSQYBGxmFxEhtAMmioL/D80IymiOOWkFfPBZZs7xTYGROiQwDPjkq7O91DIkJCEgInXxRoiJHy3tJch7ZBwCQET79ZHMyQ0trFKL6cREq4hYKLWnPpU1ycETFS7bZeQ0L7XWIau1yvRbEhDQhoC5/OZaCaVarX6RVSD0+kERVFAo9EgYybNZhOyLIPj8UjGTFarFXQ6HaLbuFwuMB6PLSO/Ya3Q7XaD6XQK9/udjNnghIQkBPB/B4MB0W2InrFwAuv1muiv6Ha71m2i9Ts2RKFwOBxgsVgQ/RW2kMjzXBQCs9mMbQakK/Rks9lAr9cjug2cDFb4CRrkxjuGETeQnjgZwknt93totVpkzMZ2u31Uugyc7qEQIaGF19t2yMPtilenoBES2ni3PmiIc4lCSW8SKr0cnie8yTmEfpNQMRRTSKh+8IohJNS/4GHlh8Mh0W3gynIaTgnpk2TsJEOxkwzFTjIUO8lQ1ADAD/g2y2BPMF0WAAAAAElFTkSuQmCC" />
            </svg>
            <span class="menu-icon"><i class="fas fa-bars"></i></span>
            <nav class="navigation">
                <ul class="">
                    <li><a href="#" class="">Home</a></li>
                    <li><a href="#" class="">Patch Notes</a></li>
                    <li><a href="#" class="">Highlights</a></li>
                    <li class="li-contact"><a href="#" class="">Contact</a></li>
                </ul>
            </nav>
            <a class="contact" href="#" class="">Contact</a>
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
        <h4>Created by : @CarlosAllen93</h4>
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
