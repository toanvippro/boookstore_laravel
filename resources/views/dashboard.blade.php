{{-- Đăng nhập thành công    --}}
<x-app-layout/>
<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Chào mừng đến với Bookstore
                </div>
            </div>
        </div>
    </div> --}}
<style>
    .Dashboard{
        display: none;
    }
    .shrink-0 {
        display: none;
    }
</style>
@include('include.header')
@include('include.slider')
<div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>Sách nổi bật</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
	      <div class="section group">
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="preview.php"><img src="image_books/home/3.jpg" alt="" /></a>
					 <h2>Kiếp Nào Ta Cũng Tìm Thấy Nhau</h2>
					 <p>Kiếp nào ta cũng tìm thấy nhau là cuốn sách thứ ba của...</p>
					 <p><span class="price">72.000 đ</span></p>
					 <!-- https://www.fahasa.com/kiep-nao-ta-cung-tim-thay-nhau-tai-ban-2022.html -->
				     <div class="button"><span><a href="preview.php" class="details">Thông tin chi tiết</a></span></div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<a href="preview.php"><img src="image_books/home/7.jpg" alt="" /></a>
					 <h2>Thiên Tài Bên Trái, Kẻ Điên...</h2>
					 <p>Hỡi những con người đang oằn mình trong cuộc sống, bạn biết gì về ...</p>
					 <p><span class="price">125.000 đ</span></p>   
					 <!-- https://www.fahasa.com/thien-tai-ben-trai-ke-dien-ben-phai-tai-ban-2021.html -->
				     <div class="button"><span><a href="preview.php" class="details">Thông tin chi tiết</a></span></div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<a href="preview.php"><img src="image_books/home/8.jpg" alt="" /></a>
					 <h2>Xin Lỗi Em Chỉ Là Con Đĩ</h2>
					 <p>Đây không phải tiểu thuyết dâm loạn, đây chỉ là một câu chuyện xúc động...</p>
					 <p><span class="price">48.750 đ</span></p> 
					 <!-- https://www.fahasa.com/xin-loi-em-chi-la-con-di.html -->
				     <div class="button"><span><a href="preview.php" class="details">Thông tin chi tiết</a></span></div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<img src="image_books/home/9.jpg" alt="" />
					 <h2>Clean Code - Mã Sạch Và ...</h2>
					 <p>Hiện nay, lập trình viên là một trong những nghề nghiệp được nhiều người...</p>
					 <p><span class="price">366.000 đ</span></p>  
					 <!-- https://www.fahasa.com/clean-code-ma-sach-va-con-duong-tro-thanh-lap-trinh-vien-gioi.html -->
				     <div class="button"><span><a href="preview.php" class="details">Thông tin chi tiết</a></span></div>
				</div>
			</div>
			<div class="content_bottom">
    		<div class="heading">
    		<h3>Sách bán chạy nhất 2022</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
			<div class="section group">
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="preview.php"><img src="./image_books/home/1.jpg" alt="" /></a>
					 <h2>Putin - Logic Của Quyền Lực </h2>
					 <p><span class="price">114.240 đ</span></p>
					 <!-- https://www.fahasa.com/putin-logic-cua-quyen-luc-putin-innenansichten-der-macht.html -->
				     <div class="button"><span><a href="preview.php" class="details">Thông tin chi tiết</a></span></div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<a href="preview.php"><img src="./image_books/home/2.jpg" alt="" /></a>
					 <h2>Đắc Nhân Tâm (Khổ Nhỏ)  </h2>
					 <p><span class="price">46.240 đ</span></p> 
					 <!-- https://www.fahasa.com/dac-nhan-tam-kho-nho-tai-ban-2022.html -->
				     <div class="button"><span><a href="preview.php" class="details">Thông tin chi tiết</a></span></div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<a href="preview.php"><img src="./image_books/home/5.jpg" alt="" /></a>
					 <h2>Đọc Vị Bất Kỳ Ai 2019</h2>
					 <p><span class="price">57.000 đ</span></p>
					 <!-- \https://www.fahasa.com/doc-vi-bat-ky-ai-tai-ban-2019.html -->
				     <div class="button"><span><a href="preview.php" class="details">Thông tin chi tiết</a></span></div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
				 <img src="./image_books/home/6.jpg" alt="" />
					 <h2>Tâm Lý Học Về Tiền</h2>					 
					 <p><span class="price">122.000 đ</span></p>
					 <!-- https://www.fahasa.com/tam-ly-hoc-ve-tien.html -->
				     <div class="button"><span><a href="preview.php" class="details">Thông tin chi tiết</a></span></div>
				</div>
			</div>
    </div>
 </div>

@include('include.footer')
</x-app-layout>
