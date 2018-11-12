<!DOCTYPE html>
<html>
<head>
    <title>Blog</title>
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
                    <a href="#contact">Contact</a>
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
            <a href="#">Clients</a>
            <a href="#">Contact</a>
        </div>
    </section>
    </article>

    <div class="container">
        <div class="row justify-content-center app--header align-items-center">
            <div class="col-12 col-sm-9 col-md-5 text-md-center">
                <h1>Mani blogi</h1>
            </div>
            <div class="col-12 col-sm-3 col-md-1 text-md-right">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addNote">Add New Blog</button>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="card-columns">
                    @foreach ($blogs as $single_blog)

                    <div class="card">
                        <div class="card-body">
                            <button type="button" class="close" aria-label="Close">
                                <a href="/delete/{{$single_blog->id}}"><span aria-hidden="true">&times;</span></a>
                            </button>
                            <blockquote class="blockquote mb-0">
                                <h2> {{ $single_blog -> title}} </h2>
                            </blockquote>
                            <p class="card-text">
                            	<small class="text-muted"> {{ $single_blog -> created_at -> toFormattedDateString() }} </small>
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="addNote" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add new Blog</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="addnew">
                    @csrf
                    <div class="modal-body">
                        <textarea name="note2" class="form-control" id="noteTextArea" rows="1"></textarea>
                        <textarea name="note" class="form-control" id="noteTextArea" rows="10"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-secondary">Add Blog</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </section>

<script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "180px";
        }
        
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
</script>

<footer>
    <p>Andrejs Ribakovs.</p>
</footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>