<?php

  if (isset($_SESSION["username"])) {
    // Logged in.
    session_start();
  } else {
    // Not logged in.
  }

?>

<html>

  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <head>
    <title>Memelaid - Where memes are laid</title>

    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700'
    rel='stylesheet' type='text/css'>
    <link rel="icon" href="pepe.ico">

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/index.js"></script>
  </head>
  <body>
    <header>
      <div class="headerContent">
        <img id="navControl" class="headerElement" src="assets/open_nav.png"/>
        <form onsubmit="" class="headerElement">
          <table class="headerElement">
            <tr>
              <td>
                <input type="text" placeholder="Search..." name="search" class="headerElement"/>
              </td>
              <td>
                <input type="submit" class="headerElement" id="search" value="Search"/>
              </td>
            </tr>
          </table>
        </form>
        <img id="changeTheme" class="headerElement" src="assets/brush.png"
        style="cursor: pointer"/>
        <img src="assets/message-squared.png" id="notiButton" class="headerElement" style="cursor: pointer">
      </div>
    </header>


    <!-- Meme area -->
    <div class="mainMemeContainer">
      <div class="mainMemeMediaContainer">
        <table style="display: inline-table; margin-left: 10%; margin-top: 10%;">
          <tr class="memeButtonWidth">
            <td>
              <button id="previousMeme" class="memeButton">Previous</button>
            </td>
          </tr>
          <tr class="memeButtonWidth">
            <td>
              <button id="dislikeMeme" class="memeButton">Dislike</button>
            </td>
          </tr>
          <tr class="memeButtonWidth">
            <td>
              <button id="reportMeme" class="memeButton">Report</button>
            </td>
          </tr>
        </table>
        <table style="float: right; display: inline-table; margin-right: 10%; margin-top: 10%;">
          <tr class="memeButtonWidth">
            <td>
              <button id="nextMeme" class="memeButton">Next</button>
            </td>
          </tr>
          <tr class="memeButtonWidth">
            <td>
              <button id="likeMeme" class="memeButton">Like</button>
            </td>
          </tr>
          <tr class="memeButtonWidth">
            <td>
              <button id="shareMeme" class="memeButton">Share</button>
            </td>
          </tr>
        </table>
        <div class="mainMemeMediaContent">

        </div>
      </div>
    </div>

    <div id="loginRegisterDiv" class="hidden2" style="z-index:1">
      <form>
        <table style="width: 100%; height: 30%;">
          <tr>
            <br>
            <td>
              <span style="color: white; float: right" >Username:</span>
            </td>
            <td>
              <input type="text" name="username" style="width: 80%">
            </td>
          </tr>
          <tr>
            <td>
              <span style="color: white; float: right">Password:</span>
            </td>
            <td>
              <input type="password" name="password" style="width: 80%">
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <input type="submit" value="Login" style="width: 73%; display: block; margin: auto;">
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <button style="width: 73%; display: block; margin: auto;">Cancel</button>
            </td>
          </tr>
          <tr>
            <td colspan="2" style="text-align: center;">
              <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Don't have an account? Click here to register.</a>
            </td>
          </tr>
        </table>
      </form>
    </div>

    <!-- Submit menu?-->

    <div id="submit" class="hidden2" style="font: 1vw; z-index: 1">
      <form method="get">
        <table>
          <tr>
            <td>
              <h2 style="text-align: center;color: white">Submit Meme</h2>
              <span style="color: white;">Meme Title:</span>
              <input type="text" name="memeName">
              <br>
              <span style="color: white;">Meme Tags:</span>
              <input type="text" name="memeTags">
            </td>
          </tr>
          <tr>
            <td>
            <br>
              <input type="file" name="fileupload" value="fileupload" id="fileUpload" style="color:white"> <label for="fileupload"> </label>
            </td>
         </tr>
         <tr>
            <td>
            <br>
              <img id="my_image" src="assets/whiteSpace.gif">
            </td>
          </tr>
          <br>
          <tr>
            <td>
              <textarea rows="3" cols="40" name="memeText" form="usrform">Enter text here...</textarea>
            </td>
         </tr>
          <tr>
            <td colspan="2">
            <br>
              <button style="width: 100%;">Submit</button>
              <br>
              <button style="width: 100%;">Cancel</button>
            </td>
          </tr>
        </table>
      </form>
    </div>

    <div id="nav" class="hidden">
      <div id="navContent">
        <a href="index.html"><button class="navButton" type="button">Home</button></a>
        <button id="openNavLoginRegister" class="navButton" type="button">Login</button>
        <button id="submitButton" class="navButton" type="button">Submit</button>
        <button class="navButton" type="button">Channels</button>
        <button class="navButton" type="button">Profile</button>
        <a href="index.html"><button class="navButton" type="button">Logout</button></a>
      </div>
    </div>

    <div id="noti" class="hidden2" style="z-index: 2">
    </div>

    <!-- Comments area -->
    <div id="commentSpace">
      <div id="comments">
          <table border="1">
            <tr>
              <td>
                Username placeholder
              </td>
            </tr>
            <tr>
              <td>
                profile pic placeholder
              </td>
              <td>
                comment placeholder
              </td>
              <td>
                reply placeholder
              </td>
              <td>
                like placeholder
              </td>
              <td>
                dislike placeholder
              </td>
            </tr>
          </table>
      </div>
    </div>
  </body>
</html>
