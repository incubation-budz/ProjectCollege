$(window).on('load',function(){$('#status').fadeOut(),$('#logo').fadeOut(),$('#preloader').delay(350).fadeOut()});$('.dropdown-trigger').dropdown();$('.burgerbar').fadeOut()
$('#burger-close').fadeOut()
$('#burger-menu').click(function(){$('.burgerbar').toggle()})
$('#burger-menu').click(function(){$('.burgerbar').css({'transform':'translateX(-1%)','transition':'all 400ms linear'})});$('#burger-close').click(function(){$('.burgerbar').css({'transform':'none','transition':'all 400ms linear'})});$('#burger-close').click(function(){$('.burgerbar').toggle()});$('#burger-close').click(function(){$(this).fadeOut()});$('#burger-close').click(function(){$('#burger-menu').fadeIn()});$('#burger-menu').click(function(){$('#burger-close').fadeIn()});$('#burger-menu').click(function(){$(this).fadeOut()});$(function(){$('.toggle-nav').fadeOut()});$(function(){$(window).scroll(function(){if($(window).scrollTop()>20){$('.toggle-nav').fadeIn()}else{$('.toggle-nav').fadeOut(100)}})});$(function(){$(window).resize(function(){if($(window).width()>=980){$(".navbar .dropdown-toggle").hover(function(){$(this).parent().toggleClass("show");$(this).parent().find(".dropdown-menu").toggleClass("show")});$(".navbar .dropdown-menu").mouseleave(function(){$(this).removeClass("show")})}})});$(function(){(function(){var animationDelay=3500,barAnimationDelay=3800,barWaiting=barAnimationDelay-3000,lettersDelay=50,typeLettersDelay=150,selectionDuration=500,typeAnimationDelay=selectionDuration+800,revealDuration=600,revealAnimationDelay=2500;initHeadline();function initHeadline(){singleLetters($('.cd-headline.letters').find('b'));animateHeadline($('.cd-headline'));$('.cd-words-wrapper').css('width','200px')}
function singleLetters($words){$words.each(function(){var word=$(this),letters=word.text().split(''),selected=word.hasClass('is-visible');for(var i in letters){if(word.parents('.rotate-2').length>0)letters[i]='<em>'+letters[i]+'</em>';letters[i]=(selected)?'<i class="in">'+letters[i]+'</i>':'<i>'+letters[i]+'</i>'}
var newLetters=letters.join('');word.html(newLetters).css('opacity',1)})}
function animateHeadline($headlines){var duration=animationDelay;$headlines.each(function(){var headline=$(this);if(headline.hasClass('loading-bar')){duration=barAnimationDelay;setTimeout(function(){headline.find('.cd-words-wrapper').addClass('is-loading')},barWaiting)}else if(headline.hasClass('clip')){var spanWrapper=headline.find('.cd-words-wrapper'),newWidth=spanWrapper.width()+10
spanWrapper.css('width',newWidth)}else if(!headline.hasClass('type')){var words=headline.find('.cd-words-wrapper b'),width=0;words.each(function(){var wordWidth=$(this).width();if(wordWidth>width)width=wordWidth});headline.find('.cd-words-wrapper').css('width',width)};setTimeout(function(){hideWord(headline.find('.is-visible').eq(0))},duration)})}
function hideWord($word){var nextWord=takeNext($word);if($word.parents('.cd-headline').hasClass('type')){var parentSpan=$word.parent('.cd-words-wrapper');parentSpan.addClass('selected').removeClass('waiting');setTimeout(function(){parentSpan.removeClass('selected');$word.removeClass('is-visible').addClass('is-hidden').children('i').removeClass('in').addClass('out')},selectionDuration);setTimeout(function(){showWord(nextWord,typeLettersDelay)},typeAnimationDelay)}else if($word.parents('.cd-headline').hasClass('letters')){var bool=($word.children('i').length>=nextWord.children('i').length)?!0:!1;hideLetter($word.find('i').eq(0),$word,bool,lettersDelay);showLetter(nextWord.find('i').eq(0),nextWord,bool,lettersDelay)}else if($word.parents('.cd-headline').hasClass('clip')){$word.parents('.cd-words-wrapper').animate({width:'2px'},revealDuration,function(){switchWord($word,nextWord);showWord(nextWord)})}else if($word.parents('.cd-headline').hasClass('loading-bar')){$word.parents('.cd-words-wrapper').removeClass('is-loading');switchWord($word,nextWord);setTimeout(function(){hideWord(nextWord)},barAnimationDelay);setTimeout(function(){$word.parents('.cd-words-wrapper').addClass('is-loading')},barWaiting)}else{switchWord($word,nextWord);setTimeout(function(){hideWord(nextWord)},animationDelay)}}
function showWord($word,$duration){if($word.parents('.cd-headline').hasClass('type')){showLetter($word.find('i').eq(0),$word,!1,$duration);$word.addClass('is-visible').removeClass('is-hidden')}else if($word.parents('.cd-headline').hasClass('clip')){$word.parents('.cd-words-wrapper').animate({'width':$word.width()+10},revealDuration,function(){setTimeout(function(){hideWord($word)},revealAnimationDelay)})}}
function hideLetter($letter,$word,$bool,$duration){$letter.removeClass('in').addClass('out');if(!$letter.is(':last-child')){setTimeout(function(){hideLetter($letter.next(),$word,$bool,$duration)},$duration)}else if($bool){setTimeout(function(){hideWord(takeNext($word))},animationDelay)}
if($letter.is(':last-child')&&$('html').hasClass('no-csstransitions')){var nextWord=takeNext($word);switchWord($word,nextWord)}}
function showLetter($letter,$word,$bool,$duration){$letter.addClass('in').removeClass('out');if(!$letter.is(':last-child')){setTimeout(function(){showLetter($letter.next(),$word,$bool,$duration)},$duration)}else{if($word.parents('.cd-headline').hasClass('type')){setTimeout(function(){$word.parents('.cd-words-wrapper').addClass('waiting')},200)}
if(!$bool){setTimeout(function(){hideWord($word)},animationDelay)}}}
function takeNext($word){return(!$word.is(':last-child'))?$word.next():$word.parent().children().eq(0)}
function takePrev($word){return(!$word.is(':first-child'))?$word.prev():$word.parent().children().last()}
<<<<<<< HEAD
function switchWord($oldWord,$newWord){$oldWord.removeClass('is-visible').addClass('is-hidden');$newWord.removeClass('is-hidden').addClass('is-visible')}})()});$('.numbers h4').each(function(){$(this).prop('Counter',0).animate({Counter:$(this).text()},{duration:900,easing:'swing',step:function(now){$(this).text(Math.ceil(now))},},{})});$('#home').circleMagic({elem:'#home',color:'rgba(255,255,255,.5)',radius:10,densety:0.1,clearOffset:0.2})


=======
function switchWord($oldWord,$newWord){$oldWord.removeClass('is-visible').addClass('is-hidden');$newWord.removeClass('is-hidden').addClass('is-visible')}})()});$('.numbers h4').each(function(){$(this).prop('Counter',0).animate({Counter:$(this).text()},{duration:900,easing:'swing',step:function(now){$(this).text(Math.ceil(now))},},{})});


$('#home').ripples();


$(function(){

    $('#burger-menu2').click(function(){
        $('.logo-burger').fadeOut();
        $('.toggle-nav').fadeIn();
        $('.burgerbar').trigger();
    });




})



$(function(){


    $(window).scroll(function(){
        if($(window).scrollTop()>20){}
        else{

            $('.logo-burger').fadeIn();

        }
    })});
>>>>>>> 662bf1ce9fd0fb74e79475202b9a3e050553352e
