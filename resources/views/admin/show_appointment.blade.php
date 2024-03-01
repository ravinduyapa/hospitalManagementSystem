<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css');
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar');

        @include('admin.nav');

        <!-- partial -->
        <div class="container" style="text-align: center; padding-top: 100px;">

            <div style="padding-top:100px" align="center">
                <table>

                    <tr style="background-color: black">
                        <th style="padding:10px;font-size:20px;color:white">Customer Name</th>
                        <th style="padding:10px;font-size:20px;color:white">Email</th>
                        <th style="padding:10px;font-size:20px;color:white">Phone</th>
                        <th style="padding:10px;font-size:20px;color:white">Doctor Name</th>
                        <th style="padding:10px;font-size:20px;color:white">Date</th>
                        <th style="padding:10px;font-size:20px;color:white">Message</th>
                        <th style="padding:10px;font-size:20px;color:white">Status</th>
                        <th style="padding:10px;font-size:20px;color:white">Approve</th>
                        <th style="padding:10px;font-size:20px;color:white">Cancel</th>

                    </tr>

                    @foreach ($data as $appoint )

                    <tr style="background-color: blue" align="center">
                        <td>{{$appoint->name}}</td>
                        <td>{{$appoint->email}}</td>
                        <td>{{$appoint->phone}}</td>
                        <td>{{$appoint->doctor}}</td>
                        <td>{{$appoint->date}}</td>
                        <td>{{$appoint->message}}</td>
                        <td>{{$appoint->status}}</td>
                        <td><a  class="btn btn-success" onclick="return confirm('Are you sure to Approve this')"   href="{{url('approve',$appoint->id)}}">Approve</a></td>
                        <td><a  class="btn btn-danger" onclick="return confirm('Are you sure to Cancel this')"   href="{{url('cancel',$appoint->id)}}">Cancel</a></td>


                    </tr>
                    @endforeach
                </table>

            </div>

        </div>
    <!-- container-scroller -->
   @include('admin.script');
  </body>
</html>
