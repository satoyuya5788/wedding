$(function(){
    history.pushState(null, null, null); //ブラウザバック無効化
    //ブラウザバックボタン押下時
    $(window).on("popstate", function (event) {
      history.pushState(null, null, null);
      window.alert('前のページに戻る場合, 「招待状へ戻る」ボタンから戻って下さい');
    });
   });