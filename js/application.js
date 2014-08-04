$(document).ready(function(){

  $('#info').on('click', function(){
    var message = $('<div id="main">\
      <img style="width: 49%; height: auto;" src="img/info1.jpg" title=""><img style="width: 49%; height: auto;" src="img/info2.jpg" title=""> \
      不論你對<a>傳統底片式相機</a>有興趣，亦或是<a>數位相機</a>，都可以來我們社團學習、研究及交流喔！ \
      <br><br>    社團重視<a>基礎拍攝技巧</a>，還有<a>實際外拍體驗</a>，<a>步調輕鬆、內容有趣、沒有壓力</a>，是培養正當休閒與社交的好去處。\
      社團內有傳統相機與數位單眼相機，供給社團教學實際操作還有實際外拍時使用，讓社員有親手玩到專業相機的機會。 \
      <br><br> 漸進式的教學方式，讓我們從最底層的原理開始，從基礎的<a>光圈、快門、景深、曝光量以及構圖</a>\
      ，深入探討照片。唯有真正了解這些，才是踏入攝      影的最基本的一步，不管是傳統相機、亦或是最新型的數位相機，始終是脫離不了這些元素，因此，\
      做好 基本功夫，將是由拍照進入到攝影的一個轉戾點！    <br><br>   我們採取專題研究的課程方式，滿足各種主題的拍攝需求，我們的主題涵蓋\
      <a>人物、色溫、花卉、旅行、風景、夜間攝影</a>等等。      以不定期的實地外      拍，來確實地練習、實習所學會的技巧。\
      藉由上課中與老師、社員們的討論、檢討，分析每張照片，以便追求更優秀的作品。\
      <br><br>    您可以<a>不用擁有傳統相機，也不用花錢去購買昂貴的器材</a>，或是您只是想要學會更進階的數位相機使用。\
      這些都是沒問題的！只要能夠體會捕捉畫面的快感，那表示您已經踏入攝影的第一步了！<a>與我們一同享受捕捉畫面的感覺吧！一同進入攝影的領域！</a>	\
      </div>');
    $('#start').append(message);
    $('#main').remove();
  });

  $('#teacher').on('click', function(){
    var message = $('<div id="main"> \
     <img style="width: 40%; height: auto; float: left; margin-left:10%" alt="teacher"      src="img/teacher.jpg"> \
     <br><br><br><br><br> &nbsp&nbsp <h1><span  class="label label-info">  &nbsp&nbsp   \
     Kosir 紐約紐約婚紗公司攝影師   &nbsp   </span></h1> <br><br><br><br><br><br><br><br><br>\
     </div>');
    $('#start').append(message);
    $('#main').remove();
  });
  $('#leader').on('click', function(){
    var message = $('<div id="main">\
      </div>');
    $('#start').append(message);
    $('#main').remove();
  });

});

