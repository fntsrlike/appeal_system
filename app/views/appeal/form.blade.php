<div id="appeal-form" class="row tab-pane fade in">
  <div class="div-center wd-600">
    <form id="appeal_form" class="form-horizontal" role="form" method="post" action="{{action('API_CaseController@store')}}">
      <div class="login_hidden alert alert-danger" style="margin-bottom: 5px;">
        您現在還未登入，無法送出資料，請先登入，再將表單送出！
      </div>
      <div class="login_show">
        <div class="alert bg-white">
          <h4 class="text-center">申訴資料</h4>
          <div class="form-group">
            <label for="input_title" class="col-sm-3 control-label">標題</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="title" id="input_title" placeholder="讓我們快速了解您的訴求"></div>
          </div>
          <div class="form-group">
            <label for="input_target" class="col-sm-3 control-label">申訴對象</label>
            <div class="col-sm-7">
              <input type="target" class="form-control" name="target" id="input_target" placeholder="讓您感到不滿的對象是誰"></div>
          </div>
          <div class="form-group">
            <label for="input_place" class="col-sm-3 control-label">事發地點</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="place" id="input_place" placeholder="關於此申訴的發生地點"></div>
          </div>
          <div class="form-group">
            <label for="input_date" class="col-sm-3 control-label">事發日期</label>
            <div class="col-sm-7">
              <input type="date" class="form-control" name="date" id="input_date" placeholder="關於此申訴的發生時間"></div>
          </div>
        </div>
        <div class="alert bg-white">
          <h4 class="text-center">申訴內容</h4>
          <textarea id="input_content" class="form-control" rows="8" name="content" placeholder="將您所申訴的敘述填寫在這。若有圖片請用網址附上。"></textarea>
        </div>
        <div class="alert bg-white">
          <div class="row">
            <div class="col-md-12">
              <h4 class="text-center">隱私設定</h4>
              <em>
                <p>
                  以下設定僅針對一般訪客與使用者。為了有效率的處理案件，管理員是看得到您的個人資料，以方便與您聯絡的。
                </p>
                <p>
                  為了避免您的個資外洩，在申訴者資訊上，若您願意讓大家知道該申訴是您提的，我們也用「使用者名稱」替代「姓名」作為「名稱」的主要辨識，減少真實資料在網路上的使用。
                </p>
              </em>
            </div>
          </div>
          <div class="row">

            <div class="col-md-8">
              <h5>案件資料</h5>
              <div class="radio">
                <label>
                  <input type="radio" name="privacy_case" value="public">
                  公開案件內容、結案報告與留言
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="privacy_case" value="protect">
                  僅公開案件內容與結案報告
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="privacy_case" value="private">
                  僅在清單上顯示案件日期、標題與處理狀態
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="privacy_case" value="secret">
                  全部隱藏
                </label>
              </div>
            </div>
            <div class="col-md-4">
              <h5>申訴者資訊</h5>
              <div class="radio">
                <label>
                  <input type="radio" name="privacy_complainant" value="public">
                  公開名稱與系級
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="privacy_complainant" value="protect-dep">
                  隱藏系級，僅公開名稱
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="privacy_complainant" value="protect-name">
                  隱藏名稱，僅公開系級
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="privacy_complainant" value="private">
                  全部隱藏
                </label>
              </div>
            </div>
          </div>
        </div>

        <div class="form-group">
          <p id="form_error_msg">
          </p>
          <p class="text-center">
            <button type="submit" class="btn btn-default">送出</button>
          </p>
        </div>
      </div>

    </form>
  </div>
</div>