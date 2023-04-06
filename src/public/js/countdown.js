function showCountdown(){
    var now = new Date();
    var point = new Date("2022/05/29");
    var id_day = document.getElementById('countDown_date');
    var id_hours = document.getElementById('countDown_date_hours');
    var id_minutes = document.getElementById('countDown_date_minutes');
    var id_seconds = document.getElementById('countDown_date_seconds');

    var nowDate = new Date();
      var dnumNow = nowDate.getTime();
      var targetDate = new Date('2022/5/29');
      var dnumTarget = targetDate.getTime();
      var diff2Dates = dnumTarget - dnumNow;
      if( dnumTarget < dnumNow ) {
      // 期限が過ぎた場合は -1 を掛けて正の値に変換
      diff2Dates *= -1;
      }
      var dDays  = diff2Dates / ( 1000 * 60 * 60 * 24 );
      diff2Dates = diff2Dates % ( 1000 * 60 * 60 * 24 );
      var dHour  = diff2Dates / ( 1000 * 60 * 60 );   // 時間
      diff2Dates = diff2Dates % ( 1000 * 60 * 60 );
      var dMin   = diff2Dates / ( 1000 * 60 );    // 分
      diff2Dates = diff2Dates % ( 1000 * 60 );
      var dSec   = diff2Dates / 1000; // 秒
      var day = Math.floor(dDays);
      var hour = Math.floor(dHour);
      var minute = Math.floor(dMin) ;
      var second = Math.floor(dSec) ;
    var countdown = Math.ceil((point.getTime() - now.getTime()) / (1000 * 60 * 60 * 24));
    if (countdown > 0) {
        id_day.textContent = day;
        id_hours.textContent = hour;
        id_minutes.textContent = minute;
        id_seconds.textContent = second;
      }
  }
    setInterval('showCountdown()',1000);
