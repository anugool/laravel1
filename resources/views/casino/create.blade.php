@extends('layouts.master')
@section('content')
<section class="forms">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header d-flex align-items-center">
            <h2 class="h5 display">บันทึกข้อมูลลูกค้า</h2>

          </div>
          <div class="card-body">

            @include('partials.errors')
            @include('partials.success')

            <form action="/customer" method="post" class="form-horizontal">
              {{ csrf_field() }}
              <div class="line"></div>

              <div class="form-group row">
                <label class="col-sm-2 form-control-label">วันที่สมัคร</label>
                <div class="col-sm-10">
                  <input id="dateregis" name="dateregis" type="text" placeholder="วันที่สมัคร" class="form-control" required>
                </div>
              </div>

              <div class="line"></div>
              <div class="form-group row">
                <label class="col-sm-2 form-control-label">คาสิโน</label>
                <div class="col-sm-10">
                  <input id="casino_name" name="casino_name" type="text" placeholder="คาสิโน" class="form-control" required>
                </div>
              </div>

              <div class="line"></div>
              <div class="form-group row">
                <label class="col-sm-2 form-control-label">ชื่อลูกค้า</label>
                <div class="col-sm-10">
                  <input id="customer_name" name="customer_name" type="text" placeholder="ชื่อลูกค้า" class="form-control" required>
                </div>
              </div>

              <div class="line"></div>
              <div class="form-group row">
                <label class="col-sm-2 form-control-label">โปรโมชั่น</label>
                <div class="col-sm-10">
                  <input id="promotion" name="promotion" type="text" placeholder="โปรโมชั่น" class="form-control" required>
                </div>
              </div>

                <div class="line"></div>
              <div class="form-group row">
                <label class="col-sm-2 form-control-label">แหล่งที่มา</label>
                <div class="col-sm-10">

          <input id="optradio" type="radio" name="optradio" value="Facebook" >Facebook
          <input id="optradio" type="radio" name="optradio" value="Google">Google
          <input id="optradio" type="radio" name="optradio" value="Line">Line
          <input id="optradio" type="radio" name="optradio" value="Other">Other
                  <!-- <div class="i-checks">
                    <input id="radioCustom3" type="radio"  checked="" value="option3" class="form-control-custom radio-custom">
                    <label for="radioCustom3">Line</label>
                  </div>
                   <div class="i-checks">
                    <input id="radioCustom4" type="radio" checked="" value="option4" class="form-control-custom radio-custom">
                    <label for="radioCustom4">อื่นๆ</label>
                  </div> -->
                </div>
              </div>
              <div class="line"></div>
              <div class="form-group row">
                <div class="col-sm-4 offset-sm-2">
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
              </div>

            </form>


          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
