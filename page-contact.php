<?php
/* Template Name: Contact Page */
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
            <li class="p-multiStepForm__stepList__item isCurrent">
                <a href="#" class="">01 入力画面</a>
            </li>
            <li class="p-multiStepForm__stepList__item">
                <a href="#" class="">02 確認画面</a>
            </li>
            <li class="p-multiStepForm__stepList__item">
                <a href="#" class="">03 送信完了</a>
            </li>
        </ul>
        <ul class="p-multiStepForm__form">
            <li class="p-multiStepForm__form__item">
                <label for="#" class="p-multiStepForm__form__label">
                    <span class="c-seal01 required">
                        必須
                    </span>
                    会社名
                </label>
                <div class="p-multiStepForm__form__field ">
                    <input type="text" class="c-text01 p-multiStepForm__form__inputText" placeholder="例)株式会社リード">
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
                    <input type="text" class="c-text01 p-multiStepForm__form__inputText" placeholder="例)山田花子">
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
                    <input type="text" class="c-text01 p-multiStepForm__form__inputText" placeholder="例)やまだはなこ">
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
                    <input type="text" class="c-text01 p-multiStepForm__form__inputText" placeholder="例)0123456789">
                    <span>未入力です。</span>
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
                    <input type="text" class="c-text01 p-multiStepForm__form__inputText" placeholder="例)read@xxxxx.jp">
                    <span>未入力です。</span>
                </div>
            </li>
            <li class="p-multiStepForm__form__item">
                <label for="#" class="p-multiStepForm__form__label p-multiStepForm__form__label--flexStart">
                    <span class="c-seal01 required">
                        必須
                    </span>
                    お問い合わせ種別
                </label>
                <ul class="p-multiStepForm__form__field p-multiStepForm__form__field--checkbox">
                    <li class="c-checkbox03">
                        <input class="c-checkbox03__input" type="checkbox" name="xxxx[]" id="c-checkbox031" value="xxxx">
                        <label class="c-checkbox03__label" for="c-checkbox031">
                            <span class="c-checkbox03__check"></span>
                            <span class="c-checkbox03__name">
                                c-checkbox03</span>
                        </label>
                    </li>
                    <li class="c-checkbox03">
                        <input class="c-checkbox03__input" type="checkbox" name="xxxx[]" id="c-checkbox032" value="xxxx">
                        <label class="c-checkbox03__label" for="c-checkbox032">
                            <span class="c-checkbox03__check"></span>
                            <span class="c-checkbox03__name">
                                c-checkbox03</span>
                        </label>
                    </li>
                    <li class="c-checkbox03">
                        <input class="c-checkbox03__input" type="checkbox" name="xxxx[]" id="c-checkbox033" value="xxxx">
                        <label class="c-checkbox03__label" for="c-checkbox033">
                            <span class="c-checkbox03__check"></span>
                            <span class="c-checkbox03__name">
                                c-checkbox03</span>
                        </label>
                    </li>
                </ul>
            </li>
            <li class="p-multiStepForm__form__item">
                <label for="#" class="p-multiStepForm__form__label p-multiStepForm__form__label--flexStart">
                    <span class="c-seal01 required">
                        必須
                    </span>
                    お問い合わせ内容
                </label>
                <div class="p-multiStepForm__form__field">
                    <textarea name="" id="" class="c-textarea01 " cols="30" rows="10" placeholder="お問い合わせ内容をご記⼊ください"></textarea>
                </div>
            </li>
            <li class="p-multiStepForm__form__item p-multiStepForm__form__item--privacy">
                <div class="p-multiStepForm__form__field">
                    <input class="c-checkbox03__input" type="checkbox" name="xxxx[]" id="privacy" value="xxxx">
                    <label class="c-checkbox03__label" for="privacy">
                        <span class="c-checkbox03__check"></span>
                        <span class="c-checkbox03__name">
                            <a href="#">プライバシーポリシー</a>に同意する</span>
                    </label>
                </div>
            </li>
            <li class="p-multiStepForm__form__item p-multiStepForm__form__item--privacy">
                <div class="p-multiStepForm__form__field">
                    <button class="c-button01 c-button01--main c-button01--xl">入力内容を確認する</button>
                </div>
            </li>
        </ul>
    </div>
</div>
<?php get_footer(); ?>