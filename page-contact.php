<?php
/* Template Name: Contact Page */
get_header(); ?>
<div class="page_contact">
    <div class="p-jumbotron">
        <div class="l-wrap">
            <p class="p-jumbotron__sub">
                お問い合わせ
            </p>
            <p class="p-jumbotron__main">
                Contact
            </p>
            <?php if (function_exists('aioseo_breadcrumbs')) aioseo_breadcrumbs(); ?>
        </div>
    </div>
    <div class="l-wrap">
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
            <!-- <ul class="p-multiStepForm__form">
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
                                    ブランディング</span>
                            </label>
                        </li>
                        <li class="c-checkbox03">
                            <input class="c-checkbox03__input" type="checkbox" name="xxxx[]" id="c-checkbox032" value="xxxx">
                            <label class="c-checkbox03__label" for="c-checkbox032">
                                <span class="c-checkbox03__check"></span>
                                <span class="c-checkbox03__name">
                                    ダイレクトマーケティング</span>
                            </label>
                        </li>
                        <li class="c-checkbox03">
                            <input class="c-checkbox03__input" type="checkbox" name="xxxx[]" id="c-checkbox033" value="xxxx">
                            <label class="c-checkbox03__label" for="c-checkbox033">
                                <span class="c-checkbox03__check"></span>
                                <span class="c-checkbox03__name">
                                    デジタルプロモーション</span>
                            </label>
                        </li>
                        <li class="c-checkbox03">
                            <input class="c-checkbox03__input" type="checkbox" name="xxxx[]" id="c-checkbox034" value="xxxx">
                            <label class="c-checkbox03__label" for="c-checkbox034">
                                <span class="c-checkbox03__check"></span>
                                <span class="c-checkbox03__name">
                                    メディアプランニング</span>
                            </label>
                        </li>
                        <li class="c-checkbox03">
                            <input class="c-checkbox03__input" type="checkbox" name="xxxx[]" id="c-checkbox035" value="xxxx">
                            <label class="c-checkbox03__label" for="c-checkbox035">
                                <span class="c-checkbox03__check"></span>
                                <span class="c-checkbox03__name">
                                    映像クリエイティブ</span>
                            </label>
                        </li>
                        <li class="c-checkbox03">
                            <input class="c-checkbox03__input" type="checkbox" name="xxxx[]" id="c-checkbox036" value="xxxx">
                            <label class="c-checkbox03__label" for="c-checkbox036">
                                <span class="c-checkbox03__check"></span>
                                <span class="c-checkbox03__name">
                                    その他お問い合わせ</span>
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
                <li class="p-multiStepForm__form__item--privacy">
                    <div class="p-multiStepForm__form__item--privacy__item">
                        <input class="c-checkbox03__input" type="checkbox" name="xxxx[]" id="privacy" value="xxxx">
                        <label class="c-checkbox03__label" for="privacy">
                            <span class="c-checkbox03__check"></span>
                            <span class="c-checkbox03__name">
                                <a href="#">プライバシーポリシー</a>に同意する</span>
                        </label>
                    </div>
                </li>
                <li class="p-multiStepForm__form__item--privacy">
                    <div class="p-multiStepForm__form__item--privacy__item">
                        <button class="c-button01 c-button01--main c-button01--xl">入力内容を確認する</button>
                    </div>
                </li>
            </ul> -->
            <?php echo do_shortcode('[contact-form-7 id="36" title="Contact form 1"]'); ?>
            <script>
                window.addEventListener('DOMContentLoaded', (event) => {
                    let element = document.querySelector("#company");
                    const target = element;
                    const checkGeneralOptions = {
                        attributes: true,
                        attributeFilter: ['readonly'],
                        attributeOldValue: true,
                    };
                    let state = false;
                    var observeChanges = new MutationObserver(function(mutations) {
                        mutations.forEach(function(mutation) {
                            setTimeout(function() {
                                console.log([mutation, mutation.oldValue, mutation.type, "is read only = " + mutation.target.getAttribute('readOnly'), "Im always checking"]);
                            }, 30);
                            mutation.target.getAttribute('readOnly') != null ? state = true : state;
                            if (state && mutation.oldValue === null) {
                                getinputValue();
                            } else if (mutation.oldValue === 'readonly') {
                                resetInputValue();
                            }
                        });
                    });
                    observeChanges.observe(target, checkGeneralOptions);

                    getinputValue = (e) => {
                        document.querySelector('.p-multiStepForm__form').classList.add("isConfirmation");
                        document.querySelectorAll('.p-multiStepForm__stepList__item')[0].classList.remove("isCurrent");
                        document.querySelectorAll('.p-multiStepForm__stepList__item')[1].classList.add("isCurrent");

                        // GET COMPANY NAME VALUE
                        let companyname = document.querySelector('input[name="read-company-name"]');
                        let companyElem = document.createElement("p");
                        let companyNode = document.createTextNode(companyname.value);
                        companyname.style.display = "none";
                        companyElem.appendChild(companyNode);
                        companyname.parentElement.appendChild(companyElem);

                        // GET NAME VALUE
                        let yourname = document.querySelector('input[name="read-your-name"]');
                        let nameElem = document.createElement("p");
                        let nameNode = document.createTextNode(yourname.value);
                        yourname.style.display = "none";
                        nameElem.appendChild(nameNode);
                        yourname.parentElement.appendChild(nameElem);

                        // GET FURIGANA VALUE
                        let furigana = document.querySelector('input[name="read-furigana"]');
                        let furiganaElem = document.createElement("p");
                        let furiganaNode = document.createTextNode(furigana.value);
                        furigana.style.display = "none";
                        furiganaElem.appendChild(furiganaNode);
                        furigana.parentElement.appendChild(furiganaElem);

                        // GET TEL VALUE
                        let tel = document.querySelector('input[name="read-tel-num"]');
                        let telElem = document.createElement("p");
                        let telNode = document.createTextNode(tel.value);
                        tel.style.display = "none";
                        telElem.appendChild(telNode);
                        tel.parentElement.appendChild(telElem);

                        // GET EMAIL VALUE
                        let email = document.querySelector('input[name="read-email-address"]');
                        let emailElem = document.createElement("p");
                        let emailNode = document.createTextNode(email.value);
                        email.style.display = "none";
                        emailElem.appendChild(emailNode);
                        email.parentElement.appendChild(emailElem);

                        // GET TEXTAREA ELEMENT VALUE
                        let textValue = document.querySelector('.wpcf7-textarea');
                        let textElem = document.createElement("p");
                        let textNode = document.createTextNode(textValue.value);
                        textValue.style.display = "none";
                        textElem.appendChild(textNode);
                        textValue.parentElement.appendChild(textElem);

                        // GET CHECKBOX ELEMENT VALUE
                        let inquiryEle = document.querySelector('.read-inquiry');
                        let checkboxesValue = Array.from(document.querySelectorAll('input[name="read-inquiry[]"]'))
                            .filter((checkbox) => checkbox.checked)
                            .map((checkbox) => checkbox.value);
                        console.log(checkboxesValue)
                        let inquiryElem = document.createElement("p");
                        let inquiryNode = document.createTextNode(checkboxesValue);
                        inquiryEle.style.display = "none";
                        inquiryElem.appendChild(inquiryNode);
                        inquiryEle.parentElement.appendChild(inquiryElem);
                    }

                    resetInputValue = (e) => {
                        document.querySelector('.p-multiStepForm__form').classList.remove("isConfirmation");
                        document.querySelectorAll('.p-multiStepForm__stepList__item')[0].classList.add("isCurrent");
                        document.querySelectorAll('.p-multiStepForm__stepList__item')[1].classList.remove("isCurrent");

                        //  GET COMPANY NAME VALUE
                        let companyname = document.querySelector('input[name="read-company-name"]');
                        companyname.style.display = "block";
                        companyname.parentElement.querySelector('p').remove();

                        //  GET NAME VALUE
                        let yourname = document.querySelector('input[name="read-your-name"]');
                        yourname.style.display = "block";
                        yourname.parentElement.querySelector('p').remove();

                        //  GET NAME VALUE
                        let furigana = document.querySelector('input[name="read-furigana"]');
                        furigana.style.display = "block";
                        furigana.parentElement.querySelector('p').remove();

                        //  GET TEL VALUE
                        let tel = document.querySelector('input[name="read-tel-num"]');
                        tel.style.display = "block";
                        tel.parentElement.querySelector('p').remove();

                        //  GET EMAIL VALUE
                        let email = document.querySelector('input[name="read-email-address"]');
                        email.style.display = "block";
                        email.parentElement.querySelector('p').remove();

                        // // GET TEXTAREA ELEMENT VALUE
                        let textValue = document.querySelector('.wpcf7-textarea');
                        textValue.style.display = "block";
                        textValue.parentElement.querySelector('p').remove();

                        // // GET CHECKBOX ELEMENT VALUE
                        let inquiryEle = document.querySelector('.read-inquiry');
                        inquiryEle.style.display = "block";
                        inquiryEle.parentElement.querySelector('p').remove();
                    }

                    privacyLink = (e) => {
                        let privacy = document.querySelector('#privacy .wpcf7-list-item label .wpcf7-list-item-label');
                        let privacyElem = document.createElement("a");
                        privacyElem.setAttribute('href', "privacy");
                        privacyElem.setAttribute("target", "_blank");
                        let privacyNode = document.createTextNode("プライバシーポリシー");
                        privacyElem.appendChild(privacyNode);
                        privacy.appendChild(privacyElem);
                    }
                    privacyLink();
                });
            </script>
        </div>
    </div>
</div>
<?php get_footer(); ?>