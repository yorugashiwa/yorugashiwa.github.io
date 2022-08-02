<!DOCTYPE html>
<html lang="jp">
<?php $head = [
  'title' => '',
  'description' => '',
  'keyword' => '',
  'canonical' => '/',
];
//$root = $_SERVER['DOCUMENT_ROOT'].'nahiwa20';
?>
<?php require('assets/inc/head.html'); ?>
<?php require('assets/inc/nav.html'); ?>

<div class="scroll_wrap">
    <section class="section index_mainImg_wrap" id="top">
        <!--
            <svg class="index_img_nahiwa">
            <use xlink:href="#word_nahiwa">
        </svg>
-->
        <p class="index_scrollnav">
            <span class="only_pc">scroll<br></span>
            <span class="only_sp">swipe<br></span>
            <svg class="icon_arrow_down">
                <use xlink:href="#arrow_down">
            </svg>
        </p>

        <div class="caution">
            <p><a href="/news/2205-suspension.php">【重要なお知らせ】<br>『ナ･ヒヴァヒヴァ･ハワイ2022』の開催中止について</a></p>
        </div>
        <div class="index_header_info_wrap">
            <div class="container row">
                <div class="index_header_news_wrap col span_6">
                    <div class="row">
                        <h3 class="col span_3">新着情報</h3>
                        <a href="news.php" class="col span_9 anime_bg_x btn_min">一覧</a>
                    </div>
                    <!--news headline-->
                    <?php require('assets/inc/news-list.php'); ?>

                    <!--/news headline-->
                </div>
                <!--fb-->
                <div class="only_pc">
                    <div id="fb-root"></div>
                    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v6.0"></script>
                    <div class="fb-page" data-href="https://www.facebook.com/nahiwa/" data-width="410" data-height="160" data-hide-cover="false" data-show-facepile="false"></div>
                </div>
                <div class="only_sp">
                    <p class="index_header_info_fb">
                        <svg class="icon_fb">
                            <use xlink:href="#icon_fb">
                        </svg>　<a href="https://www.facebook.com/nahiwa/" target="_blank" class="anime_line_x">facebookページ</a>
                    </p>
                </div>
            </div>


    </section>
    <section class="section index_img_wrap02">
        <h4 class="fade"><span class="txt_underline_navy">ハワイ2大イベント唯一の公認。<br>日本最大規模。<br>
                歴史あるフラ･フェスティバル。</span></h4>
        <p class="index_scrollnav fade">
            <span class="only_pc">scroll<br></span>
            <span class="only_sp">swipe<br></span>

            <svg class="icon_arrow_down">
                <use xlink:href="#arrow_down">
            </svg>
        </p>
    </section>
    <section class="section index_img_wrap03">
        <h4 class="fade"><span class="txt_underline_navy">ミス･アロハ･フラによる<br>圧巻のパフォーマンス。</span></h4>
        <p class="index_scrollnav fade">
            <span class="only_pc">scroll<br></span>
            <span class="only_sp">swipe<br></span>

            <svg class="icon_arrow_down">
                <use xlink:href="#arrow_down">
            </svg>
        </p>
    </section>
    <section class="section index_img_wrap04">
        <h4 class="fade"><span class="txt_underline_navy">至高の<br class="only_sp">ハワイアン・ミュージックで、<br>ハワイの時間が流れる。</span></h4>
        <p class="index_scrollnav fade">
            <span class="only_pc">scroll<br></span>
            <span class="only_sp">swipe<br></span>

            <svg class="icon_arrow_down">
                <use xlink:href="#arrow_down">
            </svg>
        </p>
    </section>
    <section class="section index_img_wrap05">
        <h4 class="fade"><span class="txt_underline_navy">心を揺さぶる、<br>古典フラのプリミティヴィティ。</span></h4>
        <p class="index_scrollnav fade">
            <span class="only_pc">scroll<br></span>
            <span class="only_sp">swipe<br></span>

            <svg class="icon_arrow_down">
                <use xlink:href="#arrow_down">
            </svg>
        </p>
    </section>
    <section class="section index_img_wrap06">
        <h4 class="fade"><span class="txt_underline_navy">現代フラの陽気で、<br>楽園ハワイを感じる。</span></h4>
        <p class="index_scrollnav fade">
            <span class="only_pc">scroll<br></span>
            <span class="only_sp">swipe<br></span>

            <svg class="icon_arrow_down">
                <use xlink:href="#arrow_down">
            </svg>
        </p>
    </section>
    <section class="section index_sec_wrap07">
        <div class="container">
            <h2 class="fade only_pc"><img src="assets/images/cmn_img_logo_l.svg" alt="フェスティバル･ナ･ヒヴァヒヴァ･ハワイ2021 〜 メリー･モナークとナ･ホク･ハノハノがやってくる！Festival Nā Hiwahiwa o Hawai`i 2020"></h2>

            <div class="row footer_news_list">
                <h3 id="news">新着情報</h3>
                <p><a href="news.php" class="anime_bg_x btn_min">一覧</a></p>
            </div>
            <div class="index_news_list">
                <?php require('assets/inc/news-list.php'); ?>

            </div>
        </div>
        <footer class="index_footer_wrap">
            <p>
                <svg class="icon_fb">
                    <use xlink:href="#icon_fb">
                </svg>　<a href="https://www.facebook.com/nahiwa/" target="_blank" class="anime_line_x">facebookページ</a>
            </p>
            <p class="pagetop">
                <a href="/#top">
                    <svg class="icon_arrow_up">
                        <use xlink:href="#arrow_up">
                    </svg><br>
                    <span>PAGE TOP</span>
                </a>
            </p>
            <copy>
                <p>
                    Copyright © フェスティバル･ナ･ヒヴァヒヴァ･ハワイ 2021 〜 メリー･モナークとナ･ホク･ハノハノがやってくる!<br>
                    Festival Nā Hiwahiwa o Hawai`i <script type="text/javascript">
                    document.write(new Date().getFullYear());
                    </script> All Rights Reserved.
                </p>
            </copy>
        </footer>
    </section>
</div>
</div>

<script src="assets/js/observer.js"></script>
</body>