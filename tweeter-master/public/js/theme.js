;(function ($) {
    "use strict";

    //* SearchFrom
    function searchFrom(){
        if ( $('.search_here').length ){
             $('.search_icon').on('click',function(){
                $('.search_from').toggleClass('show');
                return false
            });
            $('.form_hide').on('click',function(){
                $('.searchForm').removeClass('show')
            });
        };
    };

    // Code Here
    function calendar() {
        if ($('.calendar').length) {
            $('.calendar').dcalendar();
        }
    }

    //* modal_popup
    function modal_popup() {
        if ($('body').length) {
              $('.modal').modal({
                  dismissible: true,
                  opacity: 1,
              });
        }
    }

    //* Tags
    function tagPlaceholder() {
        if ($('body').length) {
                $('.chips-placeholder').material_chip({
                    placeholder: 'Add tags...',
                    secondaryPlaceholder: '+Tag',
                });
        }
    }

    // Loding next
    function infiniteScroll() {
        if ($('.middle_section, .notifications_area').length) {
           $('.middle_section').jscroll({
                loadingHtml: '<img src="images/preloader.svg" alt="Loading" />',
                padding: 0,
                autoTriggerUntil: 2,
                nextSelector: 'a.load-mor:last',
                contentSelector: '.post',
                callback: false,
           });

           $('.notifications_content').jscroll({
                loadingHtml: '<img src="images/preloader.svg" alt="Loading" />',
                padding: 0,
                autoTriggerUntil: 3,
                contentSelector: '.notifications_content li',
                callback: false,
           });
        }
    }

    //* Check button
    function flipswitch() {
        if ($('.flipswitch').length) {
            $(".flipswitch").flipswitch({
                texts : {
                    left  : "YES",
                    right : "NO"
                }
            });
        };
    };

    //* Graph Chart
    function graphChart() {
        if ($('#bars').length) {
              $("#bars li .bar").each(function (key, bar) {
                  var percentage = $(this).data('percentage');
                  $(this).css('height', percentage + '%');
              });
        };
    };


    /*Function Calls*/
    $(".button-collapse").sideNav();
    $('select').material_select();
    searchFrom();
    calendar();
    infiniteScroll();
    modal_popup ();
    tagPlaceholder ();
    flipswitch ();
    graphChart ();

})(jQuery);
// SELECT ELEMENTS FROM OUR DOM
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
    // CHECK IF DELETING
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
