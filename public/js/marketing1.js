// 
// AOS.init({
//   duration: 1000
// });

   // AOS.init({
   //    offset: 200,
   //    duration: 600,
   //    easing: 'ease-in-sine',
   //    delay: 100,
   //  });
   var TxtRotate = function(el, toRotate, period) {
     this.toRotate = toRotate;
     this.el = el;
     this.loopNum = 0;
     this.period = parseInt(period, 10) || 2000;
     this.txt = '';
     this.tick();
     this.isDeleting = false;
   };

   TxtRotate.prototype.tick = function() {
     var i = this.loopNum % this.toRotate.length;
     var fullTxt = this.toRotate[i];

     if (this.isDeleting) {
       this.txt = fullTxt.substring(0, this.txt.length - 1);
     } else {
       this.txt = fullTxt.substring(0, this.txt.length + 1);
     }

     this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

     var that = this;
     var delta = 300 - Math.random() * 100;

     if (this.isDeleting) { delta /= 2; }

     if (!this.isDeleting && this.txt === fullTxt) {
       delta = this.period;
       this.isDeleting = true;
     } else if (this.isDeleting && this.txt === '') {
       this.isDeleting = false;
       this.loopNum++;
       delta = 500;
     }

     setTimeout(function() {
       that.tick();
     }, delta);
   };

   window.onload = function() {
     var elements = document.getElementsByClassName('txt-rotate');
     for (var i=0; i<elements.length; i++) {
       var toRotate = elements[i].getAttribute('data-rotate');
       var period = elements[i].getAttribute('data-period');
       if (toRotate) {
         new TxtRotate(elements[i], JSON.parse(toRotate), period);
       }
     }
     // INJECT CSS
     var css = document.createElement("style");
     css.type = "text/css";
     css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
     document.body.appendChild(css);
   };
   document.addEventListener('DOMContentLoaded' , init);
   // INIT FUNCTION
   function init(){
       // GRAP ALL ELEMENT & ATTRIBUTE
       const txtElement = document.querySelector('.type');
       // GET THE ATTRIBUTES OF TXT ELEMENT AND PARSE ITS DATA & REMEMBER JSON DATA SHOULD BE ON "" NOT ''
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
       // TEXT ELEMENT THAT PASSED IN
       this.txtElement = txtElement;
       // WORDS THAT PASSEF IN
       this.words = words;
       // WAIT TIME THAT PASSEF IN
       this.wait = parseInt ( wait , 10 );
       // TXT YOU WILL SEE AT RELOAD
       this.txt = '';
       // ARRAY OF WORDS
       this.indexOfTheWord = 0;
       // THE MAIN METHOD THAT WILL BE WORK WITH TYPE WRITER
       this.type();
       // REPRESENT THE STATE IF IT DELETING OR NOT
       this.isDeleteing = false ;
   }
   // CREATE OUR TYPE METHOD
   typeWriter.prototype.type = function() {
       // GET THE CURRNET INDEX OF THE WORD
       const currnet = this.indexOfTheWord % this.words.length ;
       // console.log(currnet);
       // GET THE FULL TEXT OF A CURRNET WIRD
       const fullTxt = this.words[currnet];
       // console.log(fullTxt);

       if(this.isDeleteing){
           // REMOVE CHAR
           this.txt = fullTxt.substring(0 , this.txt.length -1);
       }
       else {
           // ADD CHAR
           this.txt = fullTxt.substring(0 , this.txt.length +1);
       }
       // INSERT TXT INTO TXTELEMENT
       this.txtElement.innerHTML = `<span class="txt"> ${this.txt} </span>`;
       // LETS MAKE THE TYPE SPEED
       let typeSpeed = 300 ;
       if (this.isDeleteing){
           typeSpeed /= 2;
       }
       // CHECK IF THE WORD IS COMPELETE GO TO THE OTHER WORD
       if(!this.isDeleteing && this.txt === fullTxt){
           // MAKE THE COMPELETE WORD PAUSE
           typeSpeed = this.wait;
           // SET ISDELETING VARIABLE TO TRUE
           this.isDeleteing = true ;
           console.log('Pasue');

       }  if(this.isDeleteing && this.txt ===''){
           this.isDeleteing = false ;
           // MOVE TO THE NEXT WORD
           this.indexOfTheWord++;
           // PAUSE BEFORE START TYPING
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
   // $('.tlt').textillate({
   //   in: { effect: 'splat' },
   //   out: { effect: 'foldUnfold', sync: true },
   //   loop: true
   // });
