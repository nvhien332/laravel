@extends('back_end.master')
@section('title','Cập nhật sản phẩm ')
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
					<div class="panel-heading">Thêm thông tin sử dụng đất </div>
					<div class="panel-body">
						<form method="post" enctype="multipart/form-data">
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									<div class="form-group" >
										<label>Tên lô</label>
										<input required type="text" name="name" class="form-control" value="{{$product->prod_name}}">
									</div>
									<div class="form-group" >
										<label>Giá lô đất</label>
										<input required type="number" name="price" class="form-control" value="{{$product->prod_price}}">
									</div>
									<div class="form-group" > 
										<label>Ảnh sản phẩm</label> 
										<input id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)"> <img id="avatar" class="thumbnail" width="300px" src="{{asset('lib/storage/app/avata/'.$product->prod_img)}}"> </div>
								

									
									<div class="form-group" >
										<label>Khuyến mãi</label>
										<input required type="text" name="promotion" class="form-control" value="{{$product->prod_promotion}}">
									</div>
									<div class="form-group" >
										<label>Tình trạng</label>
										<input required type="text" name="condition" class="form-control" value="{{$product->prod_condition}}">
									</div>
									<div class="form-group" >
										<label>Trạng thái</label>
										<select required name="status" class="form-control">
											<option value="1" @if($product->prod_status==1) checked @endif >Còn </option>
											<option value="0" @if($product->prod_status==0) checked @endif>Hết </option>
					                    </select>
									</div>
									<div class="form-group" >
										<label>Miêu tả</label>
										<textarea class="ckeditor" required name="description">{{$product->prod_description}}</textarea>

<script type="text/javascript">
	var editor = CKEDITOR.replace('description',{
		language:'vi',
		filebrowserImageBrowseUrl: '../../editor/ckfinder/ckfinder.html?Type=Images',
		filebrowserFlashBrowseUrl: '../../editor/ckfinder/ckfinder.html?Type=Flash',
		filebrowserImageUploadUrl: '../../editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
		filebrowserFlashUploadUrl: '../../editor/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
	});
</script>
										
									</div>
									<div class="form-group" >
										<label>Danh mục</label>
										<select required name="cate" class="form-control">
											<option value="1">Biệt thự </option>
											<option value="2">Nhà phố </option>
											<option value="3">Nhà đất</option>
										
					                    </select>
									</div>
								
									<input type="submit" name="submit" value="cap nhap" class="btn btn-primary">
									<a href="#" class="btn btn-danger">Hủy bỏ</a>
								</div>
							</div>
							{{csrf_field()}}
						</form>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@stop
	