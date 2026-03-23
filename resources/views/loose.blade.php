<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>L O O S E</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   @include('templates.header')
    <!-- STYLES -->
    <style>
        header{
            height:80vh;
        }

        a{
            font-family: "Basement Grosteque";
            color: white;
            letter-spacing:0.5rem;
            font-size: 2rem;
        }

        .jumbotron{
            padding-top:33vh;
            background: none;
        }

        #loose-h1{
            font-family: "Basement Grosteque";
            letter-spacing: 2rem;
            color: white;
            /* -webkit-text-stroke: 2px black; */
            font-size: 4rem;
            text-align: center;
            padding-left: 4rem;
        }

        .massive-cont{
            height: 20vh;
            width: 100%;
            margin: 0;
            
        }

        #menu-cont{
            padding-right: 30vw;
            padding-left: 30vw;
        }
        .list-group-item{
            background-color: transparent;
        }

        a:hover{
            text-decoration: none;
            letter-spacing: 0;
            transition: 1s;
            color: white;
        }


        @media screen and (max-height: 1000px) {
            body{
                height: 140vh;
            }

            .container-fluid::before{
                height: 140vh;
            }

            header{
                height: 60vh;
            }
            
            #loose-h1{
                letter-spacing: 1rem;
                padding-left:2rem;
            }
            .massive-cont{
                margin-top:30vh;
            }

            #menu-cont{
                padding-right: 5vw;
                padding-left: 5vw;
            }

        }

    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>
<body>
    <div class="container-fluid m-0 p-0">    
        <!-- HEADER: MENU + HEROE SECTION -->
        <header class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="col-12 my-auto p-0">
                    <h1 id="loose-h1">LOOSE</h1>
                </div>
            </div>
        </header>

        <!-- CONTENT -->
        <section class="massive-cont row justify-content-center">
            <div id="menu-cont" class="col-12 align-self-center" >
                <div id="menu">            
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-center"  data-aos="fade-left">
                            <a class="text-center" href="">About Us</a>
                        </li>
                        <li class="list-group-item text-center"  data-aos="fade-right">
                            <a class="text-center" href="">What We've Been Up To</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>

<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->


<!-- SCRIPTS -->

<script src="">
</script>

<script> AOS.init()</script>

<!-- -->

</body>
</html>
