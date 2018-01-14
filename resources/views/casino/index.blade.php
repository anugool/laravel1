@extends('layouts.master')
@section('content')

      <section class="forms">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h2 class="h5 display">แสดงรายชื่อลูกค้า</h2>
                </div>
                <div class="card-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>วันที่สมัคร</th>
                        <th>คาสิโน</th>
                        <th>ชื่อลูกค้า</th>
                        <th>โปรโมชั่น</th>
                        <th>Line_id</th>
                        <th>แหล่งที่มา</th>
                      </tr>
                      @foreach($customers as $customer)

                      <tr>
                        <td>
                          {{$num = $num+1}}
                        </td>
                        <td>{{ $customer->dateregis }}</td>
                        <td>{{ $customer->casino_name }}</td>
                        <td>{{ $customer->customer_name }}</td>
                        <td>{{ $customer->promotion }}</td>
                        <td>{{ $customer->line_id }}</td>
                        <td>{{ $customer->optradio }}</td>
                      </tr>
                      @endforeach
                    </thead>
                    <tbody>

                    </tbody>
                  </table>
                </div>
              </div>

                </div>
              </div>
        </div>
      </section>
@endsection
