// $(document).ready(main);
//
// var contador=1;
//
// function main() {
// $('.menu-bar').click(function () {
//     // $('nav').toggle()
//
//     if(contador==1){
//         $('nav').animate({
//             left:'113'
//         });
//         contador=0;
//     }else {
//         contador=1;
//         $('nav').animate({
//             left: '-100%'
//         });
//     }
// });
// }
$(document).ready(function(){
    $("li").click(function() {
        // remove classes from all
        $("li").removeClass("active");
        // add class to the one we clicked
        $(this).addClass("active");
    });
});//end