@extends('back_end.master')
@section('title','Danh mục sản phẩm')
@section('main')

		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Sản phẩm</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách thông tin các lô đất</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<a href="{{asset('admin/product/add')}}" class="btn btn-primary">Thêm thông tin sử dụng đất</a>
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th width="30%">Tên lô</th>
											<th>Giá lô đất</th>
											<th width="20%">Ảnh lô đất </th>
											<th>Danh mục</th>
											<th>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
									@foreach($productlist as $product)
										<tr>
											<td>{{$product->prod_id}}</td>
											<td>{{$product->prod_name}}</td>
											<td>{{number_format($product->prod_price,0,',','.')}} TRIỆU </td>
											<td>
												<img height="150px" src="{{asset('lib/storage/app/avata/'.$product->prod_img)}}" class="thumbnail">
											</td>
											<td>{{$product->cate_name}}</td>
											<td>
												<a href="{{url('admin/product/edit',$product->prod_id)}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>

												<a onclick="return confirm('ban co chac muon xoa ko ? ')" href="{{url('admin/product/delete/'.$product->prod_id)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
											</td>
										</tr>//
										<!-- <tr>
											<td>2</td>
											<td>Đất biệt thự mặt tiền 15m</td>
											<td>800 TRIỆU </td>
											<td>
												<img width="200px" src="http://bdskyanh.com/uploads/images/product/1548726317_50937081_291127404862790_2945519821778845696_n1.jpg" class="thumbnail">
											</td>
											<td>iPhone</td>
											<td>
												<a href="#" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
												<a href="#" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
											</td>
										</tr>
										<tr>
										</tr>
										<tr>
											<td>4</td>
											<td>Đất nên biệt thự lô 2 góc mặt tiền </td>
											<td>1,96 tỷ</td>
											<td>
												<img width="200px" src="http://bdskyanh.com/uploads/images/product/1543660245_dji_0068.jpg" class="thumbnail">
											</td>
											<td>iPhone</td>
											<td>
												<a href="#" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
												<a href="#" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
											</td>
										</tr -->>
									@endforeach	
									
									</tbody>
								</table>							
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@stop
	