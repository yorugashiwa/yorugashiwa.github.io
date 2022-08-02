<!DOCTYPE html>
<html lang="jp">
<?php $head = [
  'title' => 'ニュース',
  'description' => '',
  'keyword' => '',
  'canonical' => '/news.php',
];
//$root = $_SERVER['DOCUMENT_ROOT'].'nahiwa20';
?>
<?php require('assets/inc/head-under.html'); ?>
<?php require('assets/inc/nav.html'); ?>
<h2 class="contents_main_h">
    新着情報<br>
    <span>NEWS</span>
</h2>
<div class="contents_wrap">

    <div class="index_news_list">
        <?php require('assets/inc/news-list.php'); ?>
    </div>
</div>
<?php require('assets/inc/footer.html'); ?>