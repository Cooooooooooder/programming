
@extends('admin.master')
  @section('title')
      {{ __('admin_sidebar_trans.products') }}
  @endsection
@section('content')

<h1 class="text-center fw-bold py-3 my-0">
    {{ __('admin_sidebar_trans.products') }}
</h1>



<div class="container-fluid">
  <div class="card w-100" >
              <div class="card-header">
              <a href="{{ route('products.create') }}" class="btn btn-primary">
                      {{ __('admin_sidebar_trans.create') }}
              </a>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>{{ __('admin_sidebar_trans.name') }}</th>
                    <th>{{ __('admin_sidebar_trans.category') }}</th>
                    <th>{{ __('admin_sidebar_trans.image') }}</th>
                    <th>{{ __('admin_sidebar_trans.is_showing') }}</th>
                    <th>{{ __('admin_sidebar_trans.is_popular') }}</th>
                    <th>{{ __('admin_sidebar_trans.actions') }}</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                  @php $i = 1; @endphp
                  @foreach($products as $product)
                  
                  <tr>

                    <td>{{$i++}}</td>
                    <td>{{$product -> name}}</td>
                    <td>
                    @foreach($categories as $category)
                      @if ($product -> category_id == $category -> id ) 
                      
                       {{  $category -> name    }}
                      
                      @endif
                    @endforeach
                    </td>
                    <td>
                      <img src="{{ asset('storage/' . $product->image) }}" 
                          alt="{{ $product->name }}" 
                          width="80" height="60">
                    </td>

                    <td>
                        @if($product->status)
                            <span class="badge bg-success">{{ __('admin_sidebar_trans.showing') }}</span>
                        @else
                            <span class="badge bg-secondary">{{ __('admin_sidebar_trans.hidden') }}</span>
                        @endif
                    </td>

                    <td>
                        @if($product->trend)
                            <span class="badge bg-primary">{{ __('admin_sidebar_trans.trend') }}</span>
                        @else
                            <span class="badge bg-dark">{{ __('admin_sidebar_trans.normal') }}</span>
                        @endif
                    </td>

                    <td>
                          <a href="{{ route('products.show' , ['id' => $product->id]) }}" class="btn btn-success">
                              {{ __('admin_sidebar_trans.show') }}
                          </a>

                          <a href="{{ route('products.edit', ['id' => $product->id]) }}" class="btn btn-warning">
                              {{ __('admin_sidebar_trans.edit') }}
                          </a>

                          <form action="{{ route('products.destroy', ['id' => $product->id]) }}" 
                              method="POST" style="display:inline;" 
                              onsubmit="return confirm('{{ __('admin_sidebar_trans.confirmDelete') }}');">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger">
                                  {{ __('admin_sidebar_trans.delete') }}
                              </button>
                          </form>

                      </td>


                  </tr>
                  @endforeach
                  </tbody>   
                </table>
              </div>
            </div>
      </div>
</div>

      

@endsection
@section('js')
    <script src="{{asset('assets/plugins/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
    <script>
        $(function () {
            $("#example1").DataTable();
            // $('#example2').DataTable({
            // "paging": true,
            // "lengthChange": false,
            // "searching": false,
            // "ordering": true,
            // "info": true,
            // "autoWidth": false,
            // });
            });
        </script>
@endsection