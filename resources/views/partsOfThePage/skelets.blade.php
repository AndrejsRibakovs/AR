
    <header>
        <section>
            <div class='imgblock'>
                <img src="Images/Header.png" alt="Abstrākcija">
                <span>Andreja Ribakova mājas lapa</span>
            </div>
        </section>
        <section>
            <div class="topnav">
                    <a class="active" href="{{'/'}}">Home</a>
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
    
</article>

<script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "180px";
        }
        
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
</script>


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
