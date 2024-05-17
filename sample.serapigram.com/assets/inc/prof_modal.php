<div id="remodal_prof_modal" class="modal micromodal-slide" aria-hidden="true">
<div class="overlay" tabindex="-1" data-micromodal-close>
<div class="modal-container_prof" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
<div class="close_prof">
<button class="modal-close" aria-label="Close modal" data-micromodal-close></button>
</div>
<div class="modal__content_prof menu_cont">
<div class="container_prof">
<div class="profile-container">
<div class="profile-header_story">
<img src="<?=$com_href?>/img/samp03.jpg" loading="lazy">
<div class="profile-info">
<h2>
  <i class="fa-solid fa-shield-heart"></i>セラピスト名
</h2>
<span>21歳 / T155</span>
</div>
</div>
<div class="grid-prof_b">
<button class="like-button" onclick="">お気に入り</button>
<button class="like-button" onclick="">訪問済み</button>
</div>
<h3 class="shop_modal">
  <span class="stat-count2">
    <i class="fa-solid fa-shop"></i>
  </span>
  <span class="shop_modaltxt">エリア名</span>
  <a :href="'shop.php?id=' + modals.shop_id">店舗名</a>
</h3>
<ul class="profile-stats">
  <li>
    <span class="stat-count">
      <i class="fa-solid fa-timer"></i>
    </span>
    <span class="stat-label">12:00-24:00</span>
  </li>
  <li>
    <span class="stat-count">
      <i class="fa-solid fa-sack-dollar"></i>
    </span>
    <span class="stat-label">60分10,000円〜</span>
  </li>
</ul>
<div class="profile-description">
<p>プロフィールが入るプロフィールが入るプロフィールが入るプロフィールが入るプロフィールが入るプロフィールが入る</p>
</div>
<div class="grid-prof_b">
<button class="follow-button" onclick="redirectTo('shop.php')">在籍店舗</button>
<button class="messa-button" @click="redirectTo('https://twitter.com/' + modals.x_id)">
  <i class="fa-brands fa-x-twitter"></i>エックス
</button>
</div>
<button class="fan-button_fan" @click="redirectTo('tel:' + modals.tel)">電話で問い合わせる</button>
<div class="girl_box">
<ul>
  <li v-if="modals.images_one">
    <img src="<?=$com_href?>/img/samp01.jpg" loading="lazy">
  </li>
  <li v-if="modals.images_two">
    <img src="<?=$com_href?>/img/samp02.jpg" loading="lazy">
  </li>
  <li v-if="modals.images_three">
    <img src="<?=$com_href?>/img/samp03.jpg" loading="lazy">
  </li>
</ul>
</div>
<div class="week-container">
<div class="week-table week-table-date" v-html="scheduleDates[0]">2月16日（金）
</div>
<div class="week-table">11:00-20:00
</div>
<div class="week-table week-table-date" v-html="scheduleDates[1]">2月17日
<span class="satday">（土）</span>
</div>
<div class="week-table">-
</div>
<div class="week-table week-table-date" v-html="scheduleDates[2]">2月18日
<span class="sanday">（日）</span>
</div>
<div class="week-table">11:00-20:00
</div>
<div class="week-table week-table-date" v-html="scheduleDates[3]">2月19日（月）
</div>
<div class="week-table">11:00-20:00
</div>
<div class="week-table week-table-date" v-html="scheduleDates[4]">2月20日（火）
</div>
<div class="week-table">11:00-20:00
</div>
<div class="week-table week-table-date" v-html="scheduleDates[5]">2月21日（水）
</div>
<div class="week-table">-
</div>
<div class="week-table week-table-date" v-html="scheduleDates[6]">2月22日（木）
</div>
<div class="week-table">-
</div>
</div>
</div>
</div>
</div>
</div>
</div>
