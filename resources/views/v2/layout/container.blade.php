<!-- container-fluid -->
<section class="scrolltop-btn" id="scrolltop">
    <a href="#" class="btn btn-rnrs"><i class="fas fa-arrow-up"></i></a>
    <a href="#info-toc" class="btn btn-rnrs"><i class="fas fa-list-ol"></i></a>
    <a href="#navbar" class="btn btn-rnrs" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars"></i></a>
</section>

<section class="info-container container" style="display:none;">
    <div class="">
        <h1 id="info-toc">先了解行程</h1>
        <p>
            在開始之前，<span class="highlight">想先讓您了解這一頁的主要資訊</span>。<br>
            您可以直接<span class="highlight">點擊下方導覽的名稱</span>跳往欲了解的區塊，亦可<span class="highlight">使用頁面右下方導覽列</span>進行更多操作。
        </p>
        <hr>
        <div class="row">
            <div class="col-sm">
                <h2>頁面導覽目錄</h2>
                <div id="toc" class="toc-container list-group">
                    <a class="list-group-item list-group-item-action" href="#info-identfy">填報身分資料</a>
                    <a class="list-group-item list-group-item-action" href="#info-cdc-healthy">填報健康聲明書</a>
                    <a class="list-group-item list-group-item-action" href="#info-nofitication">注意事項</a>
                </div>
                <hr id="col-sm-hr">
            </div>
            <div class="col-sm">
                <h2>右下方導覽圖樣說明</h2>
                <div id="toc-icon-guide" class="toc-container">
                    <ol>
                        <li>
                            <span class="btn btn-rnrs"><i class="fas fa-arrow-up"></i> 回網頁頂端</span>
                        </li>
                        <li>
                            <span class="btn btn-rnrs"><i class="fas fa-list-ol"></i> 跳回此處目錄</span>
                        </li>
                        <li>
                            <span class="btn btn-rnrs"><i class="fas fa-bars"></i> 至最上方選單列</span>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        
        
    </div>
</section>

<section class="info-container container" id="main">
@yield('content')
</section>

<section class="info-container container" style="display:none;">
    <form id="form-register">
        <div class="">
            <h1 id="info-identfy">身分資料填報</h1>
            <div class="row quention-part">
                <h2>活動資訊</h2>
                <div class="col-sm">
                    <div class="form-group">
                        <label for="form-register-time"><i class="far fa-clock"></i> 時間</label>
                        <input type="text" class="form-control disable" id="form-register-time"
                            placeholder="系統自動填入，請勿更動" disabled value="2020/12/25">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label for="form-register-localtion"><i class="fas fa-location-arrow"></i> 地點</label>
                        <input type="text" class="form-control disable" id="form-register-localtion"
                            placeholder="系統自動填入，請勿更動" disabled value="高雄中學">
                    </div>
                </div>
            </div>
            <div class="row quention-part">
                <h2>身分別</h2>
                <div class="col-sm">
                    <div class="form-group">
                        <label for="form-register-school"><i class="fas fa-school"></i> 單位</label>
                        <select id="form-register-school" class="form-select" autocomplete="off">
                            <option value="" disabled selected>請選擇學校</option>
                            <option value="KGHS">雄女 KGHS</option>
                            <option value="KSHS">雄中 KSHS</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="form-register-status"><i class="fas fa-user-tie"></i> 身分別</label>
                        <select id="form-register-status" class="form-select" autocomplete="off">
                            <option value="" disabled selected>請選擇學校</option>
                            <option>學生</option>
                            <option>老師</option>
                            <option>廠商</option>
                            <option>家長</option>
                            <option>訪客</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row quention-part">
                <h2>個人資訊</h2>
                <div class="col-sm">
                    <div class="form-group">
                        <label for="form-register-name"><i class="far fa-user"></i> 姓名</label>
                        <input type="text" class="form-control" id="form-register-name" placeholder="姓名"
                            autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="form-register-studentid"><i class="far fa-id-card"></i> 身分證字號</label>
                        <input type="text" class="form-control" id="form-register-studentid" placeholder="學號"
                            autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="form-register-studentid"><i class="fas fa-venus-mars"></i> 性別</label>
                        <select id="form-register-status" class="form-select" autocomplete="off">
                            <option value="" disabled selected>請選擇學校</option>
                            <option>學生</option>
                            <option>老師</option>
                            <option>廠商</option>
                            <option>家長</option>
                            <option>訪客</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row quention-part">
                <h2>聯絡管道</h2>
                <div class="col-sm">
                    <div class="form-group">
                        <label for="form-register-class"><i class="fas fa-mobile-alt"></i> 個人手機</label>
                        <input type="text" class="form-control" id="form-register-class" placeholder="班級"
                            autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="form-register-seat"><i class="far fa-envelope"></i> 電子郵件</label>
                        <input type="number" min="1" class="form-control" id="form-register-seat" placeholder="座號"
                            autocomplete="off">
                    </div>
                </div>
            </div>
            <a type="submit" href="#info-cdc-healthy" class="btn btn-lg btn-rnrs">前往下一步：健康聲明書</a>
        </div>
        <hr>
        <div class="">
            <h1 id="info-cdc-healthy">健康聲明書</h1>
            <div class="">
                <div class="row quention-part">
                    <h2>出境史調查</h2>
                    <div class="col-sm">
                        <div class="form-group">
                            <label for="form-register-time"><i class="fas fa-question-circle"></i> (2021/1/27~2021/2/10)近14天內是否曾經出國 </label>
                            <div class="quention-part" id="answer">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">是</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">否</label>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text highlight" id="basic-addon1">
                                        入境來源
                                    </span>
                                    <select id="form-register-status" class="form-select" autocomplete="off">
                                        <option value="" disabled selected>選擇區域</option>
                                        <option>亞州</option>
                                        <option>歐洲</option>
                                        <option>美洲</option>
                                        <option>非洲</option>
                                        <option>大洋洲</option>
                                        <option>其他</option>
                                    </select>
                                    <input type="text" class="form-control" placeholder="填寫地區名稱" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text highlight" id="basic-addon1">
                                        停留時間
                                    </span>
                                    <span class="input-group-text" id="basic-addon1">起</span>
                                    <input type="date" class="form-control" name="visit_trip_dt_beg362" id="visit_trip_dt_beg30" min="2019-01-01" max="2021-12-31" value="" onchange="">
                                    <span class="input-group-text" id="basic-addon1">訖</span>
                                    <input type="date" class="form-control" name="visit_trip_dt_beg362" id="visit_trip_dt_beg30" min="2019-01-01" max="2021-12-31" value="" onchange="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row quention-part">
                    <h2>身心狀況調查</h2>
                    <div class="col-sm">
                        <div class="form-group">
                            <label for="form-register-time"><i class="fas fa-question-circle"></i> (2021/1/27~2021/2/10)近14天內是否曾經出現以下症狀 </label>
                            <div class="quention-part" id="answer">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">是</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">否</label>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text highlight" id="basic-addon1">
                                        入境來源
                                    </span>
                                    <select id="form-register-status" class="form-select" autocomplete="off">
                                        <option value="" disabled selected>選擇區域</option>
                                        <option>亞州</option>
                                        <option>歐洲</option>
                                        <option>美洲</option>
                                        <option>非洲</option>
                                        <option>大洋洲</option>
                                        <option>其他</option>
                                    </select>
                                    <input type="text" class="form-control" placeholder="填寫地區名稱" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text highlight" id="basic-addon1">
                                        停留時間
                                    </span>
                                    <span class="input-group-text" id="basic-addon1">起</span>
                                    <input type="date" class="form-control" name="visit_trip_dt_beg362" id="visit_trip_dt_beg30" min="2019-01-01" max="2021-12-31" value="" onchange="">
                                    <span class="input-group-text" id="basic-addon1">訖</span>
                                    <input type="date" class="form-control" name="visit_trip_dt_beg362" id="visit_trip_dt_beg30" min="2019-01-01" max="2021-12-31" value="" onchange="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-lg btn-rnrs">送出填報 <i class="fab fa-telegram-plane"></i></button>
        </div>
    </form>
</section>
<section class="info-container container">
    <div class="">
        <h1 id="info-nofitication">注意事項</h1>
        <div class="entry-content">
            <p>本同意書網頁畫面說明高雄市立三民高級中學班聯會（以下簡稱本會）將如何處理本表單所蒐集到的個人資料。</p>
            <p>當您「送出任何與本會有關之表單內容」時，表示您已閱讀、瞭解並同意接受本同意條款之所有內容及其後修改變更規定。若您未滿二十歲，應於您的法定代理人閱讀、瞭解並同意本同意書之所有內容及其後修改變更規定後，方得使用本服務，但若您已接受本服務，視為您已取得法定代理人之同意，並遵守以下所有規範。</p>
            <p>一、基本資料之蒐集、更新及保管</p>
            <ol><li>本會蒐集您的個人資料在中華民國「個人資料保護法」與相關法令之規範下，依據該法說明，本會將進行蒐集、處理及利用您的個人資料。</li><li>請於申請時提供您本人正確、最新及完整的個人資料。</li><li>若您的個人資料有任何異動，請主動向本會申請更正，使其保持正確、最新及完整。</li><li>若您提供錯誤、不實、過時或不完整或具誤導性的資料，您將損失相關權益。</li><li>您可依中華民國「個人資料保護法」，就您的個人資料行使以下權利：<ul><li>請求查詢或閱覽。</li><li>製給複製本。</li><li>請求補充或更正。</li><li>請求停止蒐集、處理及利用。</li><li>請求刪除。</li></ul></li></ol>
            <p>二、蒐集個人資料之目的</p>
            <ol><li>本會完善活動辦理之資料完善及相關業務，需蒐集您的個人資料。</li><li>當您的個人資料使用方式與當初本會蒐集的目的不同時，我們會在使用前先徵求您的書面同意，您可以拒絕向本會提供個人資料，但您可能因此喪失您的權益。</li><li>本會利用您的個人資料期間為即日起持續辦理至該項活動不再辦理日止，利用地區為台灣地區。</li></ol>
            <p>三、基本資料之保密</p>
            <ol><li>您的個人資料受到個人資料保護法之保護及規範。本會如違反「個人資料保護法」規定或因天災、事變或其他不可抗力所致者，致您的個人資料被竊取、洩漏、竄改、遭其他侵害者，本會將於查明後以電話、信函、電子郵件或網站公告等方法，擇適當方式通知您。</li><li>因本會執行職務或業務所必須者，本會得拒絕之。若您欲執行上述（一－5）權利時，請利用網站中聯絡方式與本會連繫。但因您行使上述權利，而導致權益受損時，本會將不負相關賠償責任。</li></ol>
            <p>四、同意書之效力</p>
            <ol><li>當您「送出任何與本會有關之表單內容」時，即表示您已閱讀、瞭解並同意本同意書之所有內容，您如違反相關法律時，本會得隨時終止對您所提供之所有權益或服務。</li><li>本會保留隨時修改本同意條款之權利，本會將於修改規範時，於本會網頁(站)公告修改之事實，不另作個別通知。如果您不同意修改的內容，請勿繼續接受本服務。否則將視為您已同意並接受本同意書該等增訂或修改內容之拘束。</li><li>您自本同意書取得的任何建議或資訊，無論是書面或口頭形式，除非本同意書條款有明確規定，均不構成本同意條款以外之任何保證。</li></ol>
        </div>
    </div>
</section>