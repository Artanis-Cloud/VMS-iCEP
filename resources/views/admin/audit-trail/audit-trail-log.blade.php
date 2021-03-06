@extends('layouts.app-user')

@section('content')
<div class="p-4 page-body text-dark">
    <div  style="font-size: 180%;color: rgb(0, 0, 0);" >
        <i class="fa fa-signal" aria-hidden="true" style="color: rgb(0, 0, 0);"></i>
        Audit Trails
      </div>
      <hr style="background-color: black !important;">
      <div style="padding:5px;"></div>
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
              @if ($message = Session::get('success'))
              <div id=alert>
                  <div class="alert alert-card alert-success" role="alert">
                      <strong>Operation Success! </strong>
                      {{$message}}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
              </div>
              @elseif ($message = Session::get('error'))
              <div id="alert">
                <div class="alert alert-card alert-danger" role="alert">
                    <strong>Ralat! </strong>
                    {{$message}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
              </div>
              @endif
                  <div class="card" style="padding: 10px;">

                    <div style="padding: 5px;"></div>
                    <div class="card-header" style="text-align:center; border-color: #003473 !important; font-size: 130%; font-weight: bold;"> Audit Trails</div>
                      <div class="p-0 card-body">
                          <br>
                        <div class="table-responsive">
                          <table class="table table-striped table-bordered" id="defaultOrderingDataTable" style="width: 100%;">
                            <!-- Table head -->
                            <thead>
                                <tr>
                                  <th class="all">No</th>
                                  <th class="all">User Name</th>
                                  <th class="all">Email</th>
                                  <th class="all">IP Address</th>
                                  <th class="all">Time</th>
                                  <th class="all">Database</th>
                                  <th class="all">Event</th>
                                  <th class="all">Old Data</th>
                                  <th class="all">New Data</th>

                                </tr>
                            </thead>
                            <!-- Table body -->
                            <tbody>
                              @foreach($data as $datas)
                                @if( $datas->user_id != NULL)
                                <tr>
                                @if($datas->users->name == NULL)
                                <td>Tiada</td>
                                @else
                                <td>{{ $datas->id }}</td>
                                <td>{{  ucfirst($datas->users->name) }}</td>
                                @endif
                                <td>{{ $datas->users->email }}</td>
                                @if($datas->ip_address == NULL)
                                <td>-</td>
                                @else
                                <td>{{ $datas->ip_address }}</td>
                                @endif
                                <!-- <td>{!!  Carbon\Carbon::parse($datas->updated_at)->format('M-d-Y h:i:s')  !!}</td> -->
                                <td>{{  Carbon\Carbon::parse($datas->updated_at)->format('Y-m-d h:i:s')  }}</td>
                                <td>{{ substr($datas->auditable_type, strpos($datas->auditable_type, "/") + 11) }}</td>
                                <td>{{  ucfirst($datas->event) }}</td>

                                @if( $datas->old_values == "[]")
                                <td>-</td>
                                @else
                                  <td>
                                  <table>
                                    @foreach(explode(',', $datas->old_values) as $info)
                                      <tr>
                                        <td>{{  preg_replace('/[{}]/',"",$info) }}</td>
                                      </tr>
                                    @endforeach
                                  </table>
                                  </td>
                                @endif
                                @if( $datas->new_values == "[]")
                                <td>-</td>
                                @else
                                  <td>
                                  <table>
                                    @foreach(explode(',', $datas->new_values) as $info)
                                      <tr>
                                        <td>{{  preg_replace('/[{}]/',"",$info) }}</td>
                                      </tr>
                                    @endforeach
                                  </table>
                                  </td>
                                @endif

                              </tr>
                                @endif
                              @endforeach
                            </tbody>
                          </table>
                          <div class="modal fade" id="diactivate_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Pengesahan</h5>
                                          <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                  </a>
                                      </div>
                                      <div class="modal-body">
                                          <p>Anda pasti mahu menyahaktif pengguna ini?</p>
                                      </div>
                                      <div class="modal-footer">
                                          <a href="#" class="btn btn-secondary" data-dismiss="modal">Batal</a>
                                          <form class="" action="" method="post">
                                            @csrf
                                            <button type="submit" name="button" class="btn btn-primary">Nyahaktifkan Pengguna</button>
                                            <input type="hidden" id="id_disable" name="id_disable">

                                          </form>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <div class="modal fade" id="activate_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Pengesahan</h5>
                                          <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                  </a>
                                      </div>
                                      <div class="modal-body">
                                        <p>Anda pasti mahu mengaktifkan pengguna ini?</p>
                                      </div>
                                      <div class="modal-footer">
                                          <a href="#" class="btn btn-secondary" data-dismiss="modal">Batal</a>
                                          <form class="" action="" method="post">
                                            @csrf
                                          <button type="submit" name="button" class="btn btn-primary">Aktifkan</button>
                                          <input type="hidden" id="id_activate" name="id_activate">

                                          </form>

                                      </div>
                                  </div>
                              </div>
                          </div>
                        </div>
                      </div>
                  </div>
            </div>
        </div>
    </div>

        <script type="text/javascript">
           function pass_id_disable(id){
            $(".modal-footer #id_disable").val( id );
          }

           function pass_id_activate(id){
            $(".modal-footer #id_activate").val( id );
          }
        </script>

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>

        <script type="text/javascript">
        $("document").ready(function(){
          setTimeout(function(){
             $("div.alert").remove();
          }, 5000 ); // 5 secs

        });
        </script>
@endsection
