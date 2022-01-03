jQuery(function () {
  //ハンバーガーメニュー
  jQuery(".hamburger-btn").click(function () {
    jQuery(this).toggleClass("active");

    if (jQuery(this).hasClass("active")) {
      jQuery(".hamburger").addClass("active");
    } else {
      jQuery(".hamburger").removeClass("active");
    }
  });
  jQuery(".hamburger__list").click(function () {
    jQuery(".hamburger,.hamburger-btn").removeClass("active");
  });

  //ヘッダー固定(SP)
  //fvを超えたらスクロールでheaderに色を付ける
  var mainPos = jQuery(".fv").height();

  jQuery(window).scroll(function () {
    if (jQuery(window).scrollTop() > mainPos) {
      jQuery(".header__inner").addClass("addColor");
    } else {
      jQuery(".header__inner").removeClass("addColor");
    }
  });

  // よくある質問
  // アコーディオンメニューの開閉
  jQuery('.top_question__ttl').on('click', function(){
    var findElm = jQuery(this).next(".top_question__box");
    jQuery(findElm).slideToggle();
    if(jQuery(this).hasClass('close')){
      jQuery(this).removeClass('close');
    } else {
      jQuery(this).addClass('close');
    }
  });

  // ページ読み込まれた時にopenクラスがついていたら開く
  jQuery(window).on('load', function(){
	  jQuery('.top_questions__area .top_question:first-of-type section').addClass("open"); //accordion-areaのはじめのliにあるsectionにopenクラスを追加
	  jQuery(".open").each(function(index, element){	//openクラスを取得
		  var Title =jQuery(element).children('.top_question__ttl');	//openクラスの子要素のtitleクラスを取得
		  jQuery(Title).addClass('close');				//タイトルにクラス名closeを付与し
		  var Box =jQuery(element).children('.top_question__box');	//openクラスの子要素boxクラスを取得
		  jQuery(Box).slideDown(500);					//アコーディオンを開く
	  });
  });

});