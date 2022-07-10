var menu = document.getElementById("menu");
var hum = document.getElementById("hum");

hum.onclick = function (){
    menu.classList.toggle("visi");

}
$('#menu a[href]').on('click', function(event) {
    $('#hum').trigger('click');
});
$('#menu ').on('click', function(event) {
    $('#hum').trigger('click');
});

	$(".inline-0").modaal({
        fullscreen:true
    });
    $(".inline-1").modaal({
        fullscreen:true
    });
    $(".inline-2").modaal({
        fullscreen:true
    });
    $(".inline-3").modaal({
        fullscreen:true
    });
    $(".inline-4").modaal({
        fullscreen:true
    });
    $(".inline-5").modaal({
        fullscreen:true
    });$('.image-1').modaal({
        type: 'image'
    });$('.image-2').modaal({
        type: 'image'
    });
      $('.move a[href*="#"]').click(function () {//全てのページ内リンクに適用させたい場合はa[href*="#"]のみでもOK
        var elmHash = $(this).attr('href'); //ページ内リンクのHTMLタグhrefから、リンクされているエリアidの値を取得
        var pos = $(elmHash).offset().top;	//idの上部の距離を取得
        $('body,html').animate({scrollTop: pos}, 500); //取得した位置にスクロール。500の数値が大きくなるほどゆっくりスクロール
        return false;
    });