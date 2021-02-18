@extends('v2.layout.master')
@section('title', '登入')
@section('content')
<h1 id="info-identfy">登入</h1>
    <div class="row quention-part">
        <h2>請登入貴單位的管理帳號</h2>
        <p><i class="fas fa-question-circle"></i> 若有登入上有任何疑慮請 聯絡負責人。 </p>
        <div class="col-sm">
            <div class="form-group">
                <div class="input-group mb-3">
                    <span class="input-group-text highlight" id="basic-addon1">
                        帳號
                    </span>
                    <input type="text" class="form-control" placeholder="填寫地區名稱" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text highlight" id="basic-addon1">
                        密碼
                    </span>
                    <input type="text" class="form-control" placeholder="填寫地區名稱" aria-label="Username" aria-describedby="basic-addon1">
                </div>
            </div>
            <button type="submit" class="btn btn-lg btn-rnrs">登入 <i class="fas fa-sign-in-alt"></i></button>

        </div>
    </div>
@endsection