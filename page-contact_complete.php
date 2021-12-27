<?php
/* Template Name: Contact Complete Page */
get_header(); ?>
<div class="l-wrap">
    <div class="p-jumbotron">
        <p class="p-jumbotron__sub">
            お問い合わせ
        </p>
        <p class="p-jumbotron__main">
            Contact
        </p>
    </div>
    <div class="p-multiStepForm">
        <ul class="p-multiStepForm__stepList">
            <li class="p-multiStepForm__stepList__item">
                <a href="#" class="">01 入力画面</a>
            </li>
            <li class="p-multiStepForm__stepList__item">
                <a href="#" class="">02 確認画面</a>
            </li>
            <li class="p-multiStepForm__stepList__item isCurrent">
                <a href="#" class="">03 送信完了</a>
            </li>
        </ul>
        <div class="p-multiStepForm__form p-multiStepForm__form--complete">
            <div class="container">
                <p class="heading">この度はお問い合わせ <br> ありがとうございました。</p>
                <p class="text">メールの場合、ご連絡にお時間をいただく場合がございます。<br>
                    お急ぎの方はお電話（03-6418-2475）にてお問合せください。<br>
                    受付時間：10:00-19:00</p>
                <a href="#" class="c-button01 c-button01--main c-button01--xl">TOPページ戻る</a>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>