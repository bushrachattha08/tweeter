<!DOCTYPE html>
<html>
<title>Marketing</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
.navbar-fixed {
  top: 0;
  z-index: 100;
  position: fixed;
  width: 100%;
}
.parallax {

    background: url("https://media2.giphy.com/media/Qh6aPCssL8J8I/giphy.gif");

    height: 600px;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.overlay {
	height:800px;
    text-align: center;
    padding: 20px;
}

h1 {
    margin: 0px;
}

body {

    margin: 0px;
    font-family: 'Open Sans', sans-serif;
}
html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}

</style>
<body style="text-align:center; ">


<!--
    <div class="col-lg-10" style="width:70% height:50px;width:50px;padding:0;margin-top:20px> -->

          <div class="col-lg-10"style=" height:15px;padding:50px" >
            <h1><b>New Future</b></h1>
             <div class="header">
        <div class="container">
          <div class="info" style=" width:50px  height:15px;padding:50px;margin-top:6px; ">

            <h1> Tweeter is
              <span class="type" data-wait="3000" data-words=
                    '[
                     " the best Version of Twitter",
                     "Next Step of Future"
                     ]'>
              </span>
            </h1>

          </div>
          <!-- <div class="img center">
            <img src="http://gifimage.net/wp-content/uploads/2017/06/overwatch-tracer-gif-4.gif" style="width:100px" class="img-responsive" alt="">
          </div> -->
        </div>
      </div>
  </div>

<br/>
<br/>

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
  <!-- Slideshow -->
  <div class="container">
    <div class="container mySlides">
      <img src="https://media.giphy.com/media/3ohzdEleMOKhMCerTi/giphy.gif" alt="http://clipart-library.com/images/rcLo9qXGi.jpg" style="width:70%">
      <div class="w3-display-topleft w3-container w3-padding-32">
        <span class="w3-white w3-padding-large w3-animate-bottom">Try It</span>
      </div>
    </div>
    <div class="w3-display-container mySlides">
      <img src="http://clipart-library.com/images/rcLo9qXGi.jpg" alt="http://clipart-library.com/images/rcLo9qXGi.jpg" style="width:100%">
      <div class="w3-display-middle w3-container w3-padding-32">
        <span class="w3-white w3-padding-large w3-animate-bottom">what ever</span>
      </div>
    </div>
    <div class="w3-display-container mySlides">
      <img src="https://blog.hubspot.com/hs-fs/hubfs/Check-new-look-iOS%20Refresh%20Full%20Walkthrough.gif?width=500&height=500&name=Check-new-look-iOS%20Refresh%20Full%20Walkthrough.gif" style="width:100%">
      <div class="w3-display-topright w3-container w3-padding-32">
        <span class="w3-white w3-padding-large w3-animate-bottom">ok boss</span>
      </div>
    </div>

    <div class="w3-container w3-dark-grey w3-padding w3-xlarge">
      <div class="w3-left" onclick="plusDivs(-1)"><i class="fa fa-arrow-circle-left w3-hover-text-teal"></i></div>
      <div class="w3-right" onclick="plusDivs(1)"><i class="fa fa-arrow-circle-right w3-hover-text-teal"></i></div>

      <div class="w3-center">
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
      </div>
    </div>
  </div>




</div>
<div class="parallax"></div>
    <div class="overlay">

        <div class="container">

          <h3>Bushra</h3>
          <p class="col-md-12">Art Director</p>
          <p>build it better.</p>

        </div>
    </div>
    <div class="parallax"></div>
    <div class="overlay">
        <div class="col-md-8">
          <img src="http://clipart-library.com/images/rcLo9qXGi.jpg" alt="http://clipart-library.com/images/rcLo9qXGi.jpg" style="width:100%">

        </div>

    </div>
    <div class="parallax"></div>
<!-- Footer -->




<script>
// Slideshow
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demodots");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-white";
}
document.addEventListener('DOMContentLoaded' , init);

function init(){
    // GRAP ALL ELEMENT & ATTRIBUTE
    const txtElement = document.querySelector('.type');

    const words = JSON.parse(txtElement.getAttribute('data-words')) ;
    const wait = txtElement.getAttribute('data-wait');
    console.log(txtElement);
    console.log(words);
    console.log(wait);
    // INITILIZE TYPE WRITER & WE MAKE IT BY NEW
    new typeWriter(txtElement , words , wait);
}
// TYPE WRITER FUNCTION
const typeWriter = function (txtElement , words , wait = 3000){

    this.txtElement = txtElement;

    this.words = words;

    this.wait = parseInt ( wait , 10 );

    this.txt = '';

    this.indexOfTheWord = 0;

    this.type();

    this.isDeleteing = false ;
}

typeWriter.prototype.type = function() {

    const currnet = this.indexOfTheWord % this.words.length ;
    // console.log(currnet);

    const fullTxt = this.words[currnet];
    // console.log(fullTxt);

    if(this.isDeleteing){

        this.txt = fullTxt.substring(0 , this.txt.length -1);
    }
    else {

        this.txt = fullTxt.substring(0 , this.txt.length +1);
    }

    this.txtElement.innerHTML = `<span class="txt"> ${this.txt} </span>`;

    let typeSpeed = 300 ;
    if (this.isDeleteing){
        typeSpeed /= 2;
    }

    if(!this.isDeleteing && this.txt === fullTxt){

        typeSpeed = this.wait;

        this.isDeleteing = true ;
        console.log('Pasue');

    }  if(this.isDeleteing && this.txt ===''){
        this.isDeleteing = false ;

        this.indexOfTheWord++;

        typeSpeed = 500 ;
        console.log('Delete');
    }
    setTimeout( () => this.type() , typeSpeed);
}
$(window).scroll(function () {
  console.log($(window).scrollTop())
  if ($(window).scrollTop() > 63) {
    $('.navbar').addClass('navbar-fixed');
  }
  if ($(window).scrollTop() < 64) {
    $('.navbar').removeClass('navbar-fixed');
  }
});
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</body>
</html>
