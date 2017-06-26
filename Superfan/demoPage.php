<!--
Credits for base template and navigation toolbar:
http://ettrics.com/code/vertical-layout-navigation/
-->

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>SUPERFAN</title>

 
<meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">
</head>

      <form action="member/memberPage.html" method="get">
  <button type="submit">Other Search Options</button><br>
</form>

<!--
<header>
<a href="http://s1244.photobucket.com/user/teehuynhsama/media/superda_zpsyq9iqyrb.png.html" target="_blank"><img src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/superda_zpsyq9iqyrb.png" border="0" alt=" photo superda_zpsyq9iqyrb.png"/></a>
</header>
-->
<body>
  <nav class="nav">
  <div class="burger">
    <div class="burger__patty"></div>
  </div>

  <ul class="nav__list">
    <li class="nav__item">
      <a href="#4" target="_blank" class="nav__link c-blue"><i class="fa fa-camera-retro"></i><img src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/user_zpskznzaxsa.png" border="0" alt=" photo user_zpskznzaxsa.png" width="25" height="25"/></a>
    </li>
    <li class="nav__item">
      <a href="#2" target="_blank" class="nav__link c-blue"><i class="fa fa-camera-retro"></i><img src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/movie_zps9cnjiuab.png" border="0" alt=" photo movie_zps9cnjiuab.png" width="25" height="25"/></a>
    </li>
    <li class="nav__item">
      <a href="#3" target="_blank" class="nav__link c-blue"><i class="fa fa-camera-retro"></i><img src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/tv_zpsgcttyiix.png" border="0" alt=" photo tv_zpsgcttyiix.png" width="25" height="25"/></a>
    </li>
    <li onclick="loadPage();" class="nav__item">
      <a href="#1" target="_blank" class="nav__link c-blue"><i class="fa fa-camera-retro"></i><img src="http://i1244.photobucket.com/albums/gg568/teehuynhsaincepma/about_zps8ldpebl6.png" border="0" alt=" photo about_zps8ldpebl6.png" width="25" height="25"/></a>
    </li>
  </ul>
</nav>



<section class="panel b-blue" id="4">
  <article class="panel__wrapper">
    <div class="panel__content">
      <h1 class="panel__headline"><i class="fa fa-paper-plane"></i>&nbsp;SUPERFAN</h1>
      <div class="panel__block"></div>
  <div class="login-wrap">
  <div class="login-html">
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
    <div class="login-form">
      <div class="sign-in-htm">
                  <form action="member/memberPage.php" method="post">

        <div class="group">
          <label for="user" class="label">Username</label>
          <input id="username" type="text" name= "username" class="input">
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="password" name= "password" type="password" class="input" data-type="password">
        </div>
        <div class="group">
          <input id="check" type="checkbox" class="check" checked>
          <label for="check"><span class="icon"></span> Keep Me Signed In</label>
        </div>
        <div class="group">
          <input type="submit" class="button" value="Sign In">
        </div>
        </form>

        <div class="hr"></div>
        <div class="foot-lnk">
          <a href="#forgot">Forgot Password?</a>
        </div>
      </div>
      <div class="sign-up-htm">
                    <form action="newUser.php" method="post">

                        
                        
                        
        <div class="group">
          <label for="username" class="label">Username</label>
          <input id="username" name="login_username" type="text" class="input">
        </div>
                        
                        
                                               
        <div class="group">
          <label for="favorite_quote" class="label">Favorite Quote</label>
          <input id="favorite_quote" name="fav_quote" type="text" class="input">
        </div>
                
                        
                        
        <div class="group">
          <label for="password" class="label">Password</label>
          <input id="password" name="login_password" type="password" class="input" data-type="password">
        </div>
        <div class="group">
          <label for="about_me" class="label">About me</label>
          <input id="about_me" name="about_me" type="text" class="input">
        </div>
                        
                      <div class="group">
          <label for="password" class="label">Email Address</label>
          <input id="pass" name="email" type="text" class="input">
        </div> 
                        
           <div class="group">
          <label for="image" class="label"> Image url</label>
          <input id="image" name="image" type="text" class="input">
        </div>   
                                                
           <div class="group">
          <label for="image" class="label"> Name of user </label>
          <input id="login_name" name="name" type="text" class="input">
        </div>   
                        
                        
                       <label for="tab-1">Already Member?</a>
           
        <div class="group">
          <input type="submit" class="button" value="Sign Up">
        </div>
                                                  </form>

        <div class="hr"></div>
        <div class="foot-lnk">
        </div>
      </div>
    </div>
  </div>
</div>
    </div>
  </article>
</section>



<section class="panel b-yellow" id="2">
  <article class="panel__wrapper">
      <div class="panel__content">
      <h1 class="panel__headline"><i class="fa fa-bolt"></i>&nbsp;MOVIES</h1>
      
      <!-- the get movie form to change -->
      <form action="searchResults.php" method="post">  <!-- was getMovieByName.php-->
        <b>Input Name of MOVIE:</b><br />
        <button type="submit">Search</button><br>

          <div class="group">
            <label for="searchfieldmovie" class="label">searchfield</label>
            <input id="searchfieldmovie" type="text" name= "searchfieldmovie" class="input">
          </div>


          <input type ="text" name = "movie_name" size=40><br />
       </form>
      
      <form action="movietabber/movieTab.html" method="get">
  <button type="submit">Other Search Options</button><br>
</form>
      <br>
      <br>
      <div class="panel__block"></div>
      <div id="f1_container">
      <div id="f1_card" class="shadow">
        <div class="front face">
          <a href="" target="_blank"><img src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/action_zpsjhmnddva.png" border="0" alt=" photo action_zpsjhmnddva.png" width="200" height="200"/></a>
        </div>
    </div>
    </div>
      <div id="f1_container2">
      <div id="animation" class="shadow">
        <div class="front face">
          <a href="animation.html" target="_blank"><img src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/ANIMATION_zpseprvl39k.png" border="0" alt=" photo ANIMATION_zpseprvl39k.png" width="200" height="200"/></a>
        </div>
      </div>
    </div>
      <div id="f1_container3">
      <div id="romancemovie" class="shadow">
        <div class="front face">
          <a href="romancemovie.html" target="_blank"><img src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/romance_zpsgzmwrd8r.png" border="0" alt=" photo romance_zpsgzmwrd8r.png" width="200" height="200"/></a>
        </div>
      </div>
    </div>

      <div id="f1_container4">
      <div id="f1_card4" class="shadow">
        <div class="front face">
          <a href="" target="_blank"><img src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/sci_zpsgkyrwxzp.png" border="0" alt=" photo sci_zpsgkyrwxzp.png" width="200" height="200"/></a>
        </div>
      </div>
    </div>    

      <div id="f1_container5">
      <div id="f1_card5" class="shadow">
        <div class="front face">
          <a href="" target="_blank"><img src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/FANTASY_zps4fjpmie4.png" border="0" alt=" photo FANTASY_zps4fjpmie4.png" width="200" height="200"/></a>
        </div>
      </div>
    </div>  

      <div id="f1_container6">
      <div id="comedymovie" class="shadow">
        <div class="front face">
          <a href="comedymovie.html" target="_blank"><img src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/COMEDY2_zpsrtntcl8c.png" border="0" alt=" photo COMEDY2_zpsrtntcl8c.png" width="200" height="200"/></a>
        </div>
      </div>
    </div>  

      <div id="f1_container7">
      <div id="f1_card7" class="shadow">
        <div class="front face">
          <a href="" target="_blank"><img src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/MYSERTY_zpsyc8qsq9s.png" border="0" alt=" photo MYSERTY_zpsyc8qsq9s.png" width="200" height="200"/></a>
        </div>
      </div>
    </div>    

      <div id="f1_container8">
      <div id="dramamovie" class="shadow">
        <div class="front face">
          <a href="dramamovie.html" target="_blank"><img src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/DRAMA_zpsg6cn4lva.png" border="0" alt=" photo DRAMA_zpsg6cn4lva.png" width="200" height="200"/></a>
        </div>
      </div>
    </div>  

      <div id="f1_container9">
      <div id="f1_card9" class="shadow">
        <div class="front face">
          <a href="" target="_blank"><img src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/horoor_zpswk5avzcg.png" border="0" alt=" photo horoor_zpswk5avzcg.png" width="200" height="200"/></a>
        </div>
      </div>
    </div> 
    </div>
  </article>
</section>

<section class="panel b-red" id="3">
  <article class="panel__wrapper">
    <div class="panel__content">
      <h1 class="panel__headline"><i class="fa fa-music"></i>&nbsp;TELEVISION</h1>
      <form action="searchResultsTV.php" method="post">

            <b>Input Name of TV SERIES:</b><br />
            <button type="submit">Search</button><br>

            <div class="group">
            <label for="searchfieldtv" class="label">searchfield</label>
            <input id="searchfieldtv" type="text" name= "searchfieldtv" class="input">
            </div>

      </form>
      
      
      <form action="tabber/tabActivity.html" method="get">

  <button type="submit">Other Search Options</button><br>
</form>
      
      

      <div class="panel__block"></div>
        <a href="anime.html" onclick="newPage('6');">
        <div id="cf">
         <img class="bottom" src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/anime1_zpswnugygzx.png" width="200" height="200" />
         <img class="top" src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/anime2_zpsogwd5wb6.png" width="200" height="200" />
        </div>
        </a>
        <a href="scifi.html" onclick="newPage('7');">
        <div id="cf2">
         <img class="bottom" src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/SCIFI1_zpsdswzyoam.png" width="200" height="200" />
         <img class="top" src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/SCIFI2_zpsbunpvrhy.png" width="200" height="200" />
        </div>
        </a>
        <a href="drama.html" onclick="newPage('8');">
        <div id="cf3">
         <img class="bottom" src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/drama1_zpsxaxgq1tt.png" width="200" height="200" />
         <img class="top" src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/drama2_zpsnjpeyf6u.png" width="200" height="200" />
        </div>
        </a>
        <a href="mystery.html" onclick="newPage('9');">
        <div id="cf4">
         <img class="bottom" src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/mystery2_zps0wgtmosb.png" width="200" height="200" />
         <img class="top" src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/mystery1_zpsulhfbr5e.png" width="200" height="200" />
        </div>
        </a>
        <a href="fantasy.html" onclick="newPage('10');">
        <div id="cf5">
         <img class="bottom" src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/fantasy2_zpsbhqyvo8i.png" width="200" height="200" />
         <img class="top" src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/fantasy1_zpsqjpxyaul.png" width="200" height="200" />
        </div>
        </a>
        <a href="romance.html" onclick="newPage('11');">
        <div id="cf6">
         <img class="bottom" src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/tvrom1_zpswslmrqop.png" width="200" height="200" />
         <img class="top" src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/tvrom2_zpssjonxnjq.png" width="200" height="200" />
        </div>
        </a>
        <a href="comedy.html" onclick="newPage('12');">
        <div id="cf7">
         <img class="bottom" src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/comedy1_zps9dkl83is.png" width="200" height="200" />
         <img class="top" src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/COMEDY2_zpsptnperfw.png" width="200" height="200" />
        </div>
        </a>
        <a href="horror.html" onclick="newPage('13');">
        <div id="cf8">
         <img class="bottom" src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/horror1_zpsnvjpkhix.png" width="200" height="200" />
         <img class="top" src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/horror2_zpssubvcmn5.png" width="200" height="200" />
        </div>
        </a>
        <a href="child.html" onclick="newPage('14');">
        <div id="cf9">
         <img class="bottom" src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/child2_zpsganyrw8r.png" width="200" height="200" />
         <img class="top" src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/child1_zpsbe9y2to5.png" width="200" height="200" />
        </div>
        </a>
    </div>
  </article>
</section>



<section class="panel b-green" id="1">
  <article class="panel__wrapper">
    <div class="panel__content">
      <h1 class="panel__headline"><i class="fa fa-camera-retro"></i>&nbsp;ABOUT</h1>
      <div class="panel__block"></div>
      <p>Welcome to SUPERFAN! Join our SUPERFAM.</p>
      <a href="" target="_blank"><img src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/about_zpscfj9csqa.png"/></a>
    </div>
  </article>
</section>

<section class="panel b-pink" id="5" style="display:none">
  <article class="panel__wrapper">
    <div class="panel__content">
      <h1 class="panel__headline"><i class="fa fa-music"></i>&nbsp;ADD A TV SHOW</h1>
      <div class="panel__block"></div>
              <form action="tv.php" method="post">

        <div class="group">
            
            
            
            
          <label for="user" class="label">Name</label>
          <input id="name" name="name" type="text" class="input">
        </div>      
        <div class="group">
          <label for="user" class="label">Year</label>
          <input id="tvyear" name="tvyear" type="text" class="input">
        </div>
        <div class="group">
          <label for="user" class="label">Created By</label>
          <input id="tvcreatedby" name="created" type="text" class="input">
        </div>
        <div class="group">
          <label for="user" class="label">Number of Episodes</label>
          <input id="tvepisodes" name="tvepisodes"type="text" class="input">
        </div>      
        <div class="group">
          <label for="user" class="label">Director</label>
          <input id="tvdirector" name="tvdirector" type="text" class="input">
        </div>
        <div class="group">
          <label for="user" class="label">Writer</label>
          <input id="tvwriter" name="tvwriter" type="text" class="input">
        </div>
        <div class="group">
          <label for="user" class="label">Syndication Status</label>
          <input id="tvss" name="tvss" type="text" class="input">
        </div>      
        <div class="group">
          <label for="user" class="label">Network Exclusivity</label>
          <input id="tvne" name="tvne" type="text" class="input">
            <button type="submit"> Add </button><br>

        </div>
</form>
      <br>
      <br>
      <br>
      <h1 class="panel__headline"><i class="fa fa-music"></i>&nbsp;ADD A Movie</h1>
     
        <form action="newMovie.php" method="post">
        <div class="group">
          <label for="user" class="label">Release</label>
          <input id="name" name="release" type="text" class="input">
        </div>      
        <div class="group">
          <label for="user" class="label">Synopsis</label>
          <input id="tvyear" name="synopsis" type="text" class="input">
        </div>
        <div class="group">
          <label for="user" class="label">title</label>
          <input id="tvyear" name="title" type="text" class="input">
        </div>
        <button type="submit"> Add </button><br>
</form>

</div>
</article>
</section>


<!-- this is for the industry professional -->
<!-- refer to css for the panel b coloring and ensure proper ID tagging -->
<section class="panel b-black" id="666" style="display:none">
  <article class="panel__wrapper">
    <div class="panel__content">
      <h1 class="panel__headline"><i class="fa fa-music"></i>&nbsp;Are you an Industry Professional?</h1>
      <div class="panel__block"></div>
        <div class="group">
          <label for="user" class="label">Name</label>
          <input id="indusName" type="text" class="input">
        </div>      
        <div class="group">
          <label for="user" class="label">Email Contact</label>
          <input id="indusEmail" type="text" class="input">
        </div>
        <div class="group">
          <label for="user" class="label">Agent contact (blank if N/A)</label>
          <input id="indusAgent" type="text" class="input">
        </div>
        <div class="group">
          <label for="user" class="label">Current/Most Recent Studio employer</label>
          <input id="indusEmployer" type="text" class="input">
        </div>      

        <form>
        <a href="#3" id="submit" target="_blank"><img src="http://i1339.photobucket.com/albums/o707/eazykrisp/black_check_zpsv9ga4fli.png" border="0" alt="lackchecker photo black_check_zpsv9ga4fli.png" onclick="grabIndustry('666')"/></a>
</form>

    </div>
  </article>
</section>
<!-- end for the industry professional -->



<!-- this is the form code to edit a movie or tv show  -->
<!-- refer to css for the panel b coloring and ensure proper ID tagging -->
<section class="panel b-red" id="76" style="display:none">
  <article class="panel__wrapper">
    <div class="panel__content">
      <h1 class="panel__headline"><i class="fa fa-music"></i>&nbsp;EDIT A TV SHOW</h1>
      <div class="panel__block"></div>
      <form action="UpdateTV.php" method="post">  <!-- // TODO change to edit.php or whatever-->
        
        <div class="group">
            <label for="user" class="label">Name To Change</label>
            <input id ="name_to_change" name="name_to_change" type="text" class="input">
        </div>          
        
        <div class="group">
          <label for="user" class="label">Name</label>
          <input id="name" name="name" type="text" class="input">
        </div>      
        <div class="group">
          <label for="user" class="label">Year</label>
          <input id="tvyear" name="tvyear" type="text" class="input">
        </div>
        <div class="group">
          <label for="user" class="label">Created By</label>
          <input id="tvcreatedby" name="created" type="text" class="input">
        </div>
        <div class="group">
          <label for="user" class="label">Number of Episodes</label>
          <input id="tvepisodes" name="tvepisodes"type="text" class="input">
        </div>      
        <div class="group">
          <label for="user" class="label">Director</label>
          <input id="tvdirector" name="tvdirector" type="text" class="input">
        </div>
        <div class="group">
          <label for="user" class="label">Writer</label>
          <input id="tvwriter" name="tvwriter" type="text" class="input">
        </div>
        <div class="group">
          <label for="user" class="label">Syndication Status</label>
          <input id="tvss" name="tvss" type="text" class="input">
        </div>      
        <div class="group">
          <label for="user" class="label">Network Exclusivity</label>
          <input id="tvne" name="tvne" type="text" class="input">
            <button type="submit"> Change </button><br>
        </div>
</form>
      <br>
      <br>
      <br>
      <h1 class="panel__headline"><i class="fa fa-music"></i>&nbsp;EDIT A Movie</h1>
     
        <form action="UpdateMovie.php" method="post"> <!-- //to do change the newMovie.php to the whatever-->
        
        <div class="group">
          <label for="user" class="label">Movie title to change</label>
          <input id="name" name="movie_to_change" type="text" class="input">
        </div>      

        <div class="group">
          <label for="user" class="label">Release</label>
          <input id="name" name="movie_release" type="text" class="input">
        </div>      
        <div class="group">
          <label for="user" class="label">Synopsis</label>
          <input id="tvyear" name="synopsis" type="text" class="input">
        </div>
        <div class="group">
          <label for="user" class="label">New title</label>
          <input id="tvyear" name="title" type="text" class="input">
        </div>
        <button type="submit"> Change </button><br>
</form>

</div>
</article>
</section>
<!-- end for the industry professional -->

<section class="panel b-black" id="6" style="display:none">
  <article class="panel__wrapper">
    <div class="panel__content">
      <h1 class="panel__headline__media"><i class="fa fa-music"></i>&nbsp;ANIME</h1>
      <div class="panel__block__media"></div>
      <p>Hey boi</p>
    </div>
  </article>
</section>

<!-- this is for the general add button-->
<a href="#5" class="logo" target="_blank" onclick="newPage('5');">
 <img class="logo" src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/add_zpsketqweds.png" alt="" /> 
</a>

<!-- this is for the industry add button-->
<a href="#666" class="resize" id="tinaislit" target="_blank" onclick="newPage('666');">
 <img class="logo" src="http://i1339.photobucket.com/albums/o707/eazykrisp/industrypro_button_zpsjqznt9ac.png" alt="are you pro?..." /> 
</a>

<!-- this is for the edit entity button-->
<a href="#76" class="resize" id="editEntity" target="_blank" onclick="newPage('76');">
 <img class="logo" src="http://i1339.photobucket.com/albums/o707/eazykrisp/edit_button_zpsacrkwuss.png" alt="Change an entity?..." /> 
</a>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

<script>




function newPage(i){
  document.getElementById(i).style.display="flex";
}

function grabTV(i) {
    var tvname = document.getElementById("tvname").value;
    var tvyear = document.getElementById("tvyear").value;  
    var tvcreatedby = document.getElementById("tvcreatedby").value;
    var tvepisodes = document.getElementById("tvepisodes").value; 
    var tvdirector = document.getElementById("tvdirector").value;
    var tvwriter = document.getElementById("tvwriter").value;  
    var tvss = document.getElementById("tvss").value;
    var tvne = document.getElementById("tvne").value;
    document.getElementById(i).style.display="none";
}

</script>



<!-- code for grabbing the form for industry professional -->
<script>

function newPage(i){
  document.getElementById(i).style.display="flex";
}

function grabIndustry(i) {
    var indusName = document.getElementById("indusName").value;
    var indusEmail = document.getElementById("indusEmail").value;  
    var indusAgent = document.getElementById("indusAgent").value;
    var indusEmployer = document.getElementById("indusEmployer").value; 

    document.getElementById(i).style.display="none";
}

</script>



<script type = "text/javascript">
          function displayNextImage() {
              x = (x === images.length - 1) ? 0 : x + 1;
              document.getElementById("urmom").src = images[x];
          }

          function displayPreviousImage() {
              x = (x <= 0) ? images.length - 1 : x - 1;
              document.getElementById("urmom").src = images[x];
          }

          function startTimer() {
              setInterval(displayNextImage, 4000);
          }

          var images = [], x = -1;
          images[0] = "http://i1244.photobucket.com/albums/gg568/teehuynhsama/banner1_zpsbax2fucm.png";
          images[1] = "http://i1244.photobucket.com/albums/gg568/teehuynhsama/banner2_zpsyomqpdzk.png";
      </script>


</body>
</html>