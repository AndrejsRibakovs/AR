<!DOCTYPE html>
<html>
<head>
    <title>My site</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style/Stili.css">
</head>
<body>
    <header>
        <section>
            <div class='imgblock'>
                <img src="Images/Header.png" alt="Abstrākcija">
                <span>Andreja Ribakova mājas lapa</span>
            </div>
        </section>
        <section>
            <div class="topnav">
                    <a class="active" href="#home">Home</a>
                    <a href="#news">News</a>
                    <a href="{{'/site2'}}">Blog page</a>
                    <a href="#about">About</a>
            </div>
        </section>
    </header>
<article class="clearfix">
    <section>
    <span style="font-size:30px;cursor:pointer; float:left" onclick="openNav()">&#9776; open</span>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="{{'/site3'}}">Static page</a>
            <a href="#">Contact</a>
        </div>
    </section>
    <section class="textBox">
        <h1>Lorem ipsum</h1>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. 
            Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
            Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
            Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, 
            imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. 
            Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, 
            porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, 
            feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet.
            Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. 
            Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque 
            sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante 
            tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci 
            eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. 
            Sed consequat, leo eget bibendum sodales, augue velit cursus nunc.
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. 
            Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
            Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
            Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, 
            imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. 
            Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, 
            porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, 
            feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet.
            Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. 
            Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque 
            sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante 
            tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci 
            eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. 
            Sed consequat, leo eget bibendum sodales, augue velit cursus nunc.
    </section>
    
</article>

<script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "180px";
        }
        
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
</script>
<section>
    <div class="slideshow-container">
        <div class="mySlides fade show">
            
          <div class="numbertext">1 / 3</div>
          <img src="Images/Riga1.jpg" style="width:100%">
          <div class="text">Rīga 1</div>
        </div>
        
        <div class="mySlides fade show">
          <div class="numbertext">2 / 3</div>
          <img src="Images/Riga2.jpg" style="width:100%">
          <div class="text">Rīga 2</div>
        </div>
        
        <div class="mySlides fade show">
                <div class="numbertext">3 / 3</div>
                <img src="Images/Riga3.jpg" style="width:100%">
                <div class="text">Rīga 3</div>
          
        </div>
        
       
        <br>
        
        <div style="text-align:center; margin-bottom: 40px; margin-top: 20px">
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
        </div>
    </div>
        <script>
        var slideIndex = 0;
        showSlides();
        
        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
               slides[i].style.display = "none";  
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}    
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 5000); 
        }
        </script>
</section>



<footer>
    <pre style="color: rgb(38,63,249)"> © Copyright  {{ date('Y') }}                                           Developed by  Andrejs Ribakovs</pre>   
</footer>

<div class="top"><a href="" class="ToTop">Uz augšu</a></div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
              <script>
 	
                    /*Click event to scroll to top*/
                    $('.scrollToTop').click(function(){
                        $('html, body').animate({Top : 0},800);
                        return false;
                    });
                    $(window).scroll(function(){
                        if ($(this).scrollTop() > 100) {
                $( ".top" ).addClass( "ABC" );
                        }  else {
                            $('.top').removeClass( "ABC" );
                        }
                    });
               
                </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>