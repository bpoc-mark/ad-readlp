<?php
/* Template Name: Contact Confirmation Page */
get_header(); ?>
<div class="p-jumbotron">
    <div class="l-wrap">
        <p class="p-jumbotron__sub">
            お問い合わせ
        </p>
        <p class="p-jumbotron__main">
            Contact
        </p>
        <?php if( function_exists( 'aioseo_breadcrumbs' ) ) aioseo_breadcrumbs(); ?>
    </div>
</div>
<div class="l-wrap">
    <div class="p-multiStepForm">
        <ul class="p-multiStepForm__stepList">
            <li class="p-multiStepForm__stepList__item">
                <a href="#" class="">01 入力画面</a>
            </li>
            <li class="p-multiStepForm__stepList__item isCurrent">
                <a href="#" class="">02 確認画面</a>
            </li>
            <li class="p-multiStepForm__stepList__item">
                <a href="#" class="">03 送信完了</a>
            </li>
        </ul>
        <ul class="p-multiStepForm__form p-multiStepForm__form--confirmation">
            <li class="p-multiStepForm__form__item">
                <label for="#" class="p-multiStepForm__form__label">
                    <span class="c-seal01 required">
                        必須
                    </span>
                    会社名
                </label>
                <div class="p-multiStepForm__form__field ">
                    <input type="hidden" class="c-text01 p-multiStepForm__form__inputText" placeholder="例)株式会社リード">
                    <p>株式会社リード</p>
                </div>
            </li>
            <li class="p-multiStepForm__form__item">
                <label for="#" class="p-multiStepForm__form__label">
                    <span class="c-seal01 required">
                        必須
                    </span>
                    お名前
                </label>
                <div class="p-multiStepForm__form__field ">
                    <input type="hidden" class="c-text01 p-multiStepForm__form__inputText" placeholder="例)山田花子">
                    <p>株式会社リード</p>
                </div>
            </li>
            <li class="p-multiStepForm__form__item">
                <label for="#" class="p-multiStepForm__form__label">
                    <span class="c-seal01 required">
                        必須
                    </span>
                    ふりがな
                </label>
                <div class="p-multiStepForm__form__field ">
                    <input type="hidden" class="c-text01 p-multiStepForm__form__inputText" placeholder="例)やまだはなこ">
                    <p>株式会社リード</p>
                </div>
            </li>
            <li class="p-multiStepForm__form__item">
                <label for="#" class="p-multiStepForm__form__label">
                    <span class="c-seal01 required">
                        必須
                    </span>
                    電話番号
                </label>
                <div class="p-multiStepForm__form__field isError">
                    <input type="hidden" class="c-text01 p-multiStepForm__form__inputText" placeholder="例)0123456789">
                    <p>株式会社リード</p>
                </div>
            </li>
            <li class="p-multiStepForm__form__item">
                <label for="#" class="p-multiStepForm__form__label">
                    <span class="c-seal01 required">
                        必須
                    </span>
                    メールアドレス
                </label>
                <div class="p-multiStepForm__form__field isError">
                    <input type="hidden" class="c-text01 p-multiStepForm__form__inputText" placeholder="例)read@xxxxx.jp">
                    <p>株式会社リード</p>
                </div>
            </li>
            <li class="p-multiStepForm__form__item">
                <label for="#" class="p-multiStepForm__form__label p-multiStepForm__form__label--flexStart">
                    <span class="c-seal01 required">
                        必須
                    </span>
                    お問い合わせ種別
                </label>
                <div class="p-multiStepForm__form__field">
                    <p>株式会社リード</p>
                </div>
            </li>
            <li class="p-multiStepForm__form__item">
                <label for="#" class="p-multiStepForm__form__label p-multiStepForm__form__label--flexStart">
                    <span class="c-seal01 required">
                        必須
                    </span>
                    お問い合わせ内容
                </label>
                <div class="p-multiStepForm__form__field">
                    <p>株式会社リード</p>
                </div>
            </li>
            <li class="p-multiStepForm__form__item ">
                <div class="p-multiStepForm__form__field p-multiStepForm__form__field--confirmation">
                    <button class="c-button01 c-button01--main c-button01--xl">入力内容を確認する</button>
                    <button class="c-button01 c-button01--main--w c-button01--xl">入力内容を確認する</button>
                </div>
            </li>
        </ul>
    </div>
</div>
<?php get_footer(); ?>