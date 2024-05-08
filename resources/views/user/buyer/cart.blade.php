@extends('user.buyer.layout')
@section('content')
    <style>
          .menu{
        height: 100%;
        width: 100%;
        margin-top: 50px;
        display: flex;
    }
    .type{
        flex: 1;
        float: left;
        width: 20%;
        height: auto;
    }
    .table{
        flex: 3;
        float: right;
        width: 75%; 
        height: auto;
        
    }
        .image img{
            height: 100px;

        }
        .image{
            font-size: 20px;
        }
        .buy{
            height: 30px;
            width: 100px;
            font-size: 20px;
            background-color: greenyellow;
            margin-left: 110px;
            cursor: pointer;
            border-radius: 10%;
        }
        #delete{
            height:30px;
            width: 100px;
            font-size: 20px;
            background-color: greenyellow;
            margin-left: 110px;
            margin-top: 10px;
            border-radius: 10%;
            color: black;
        }
        .edit{
            height:30px;
            width: 100px;
            font-size: 20px;
            background-color: greenyellow;
            margin-left: 110px;
            margin-top: 10px;
            border-radius: 10%;
        }
        .form-buy{
            height: 450px;
            width: 500px;
            background-color: bisque;
            position: relative;
            margin-left: 800px;
            display: none;
            border-radius: 25px;
        }
        .form-buy label{
            font-size: 25px;
            margin-top: 5px;
            margin-left: 20px;
        }
       
        .form-buy input[type="text"]{
            height: 30px;
            width: 300px;
            font-size: 25px;
            margin-top: 10px;
            margin-left: 20px;
        }
        .form-buy input[type="textarea"]{
            height: 80px;
            width: 300px;
            font-size: 15px;
            margin-left: 20px;
        }
        .form-buy input[type="submit"]{
            font-size: 20px;
            margin-left: 380px;
            height: 35px;
            width: 100px;
            background-color: antiquewhite;
            cursor: pointer ;
        }
        .close{
            margin-left: 450px;
            font-size: 20px;
            margin-top: 10px;
            cursor: pointer;
        }
        .order-detail{
            background: #F5F5F5;
           
            margin-left: 1000px;
            width: 300px;
            height: 200px;
            position: relative;
            border: 1px solid black;
            display: none;
        }

        .order-detail label{
            font-size: 25px;
        
        }
        .order-detail input[type="number"]{
            margin-top: 50px;
            height: 30px;
            font-size: 15px;
        }
        .order-detail input[type="submit"]{
            margin-top: 15px;
            margin-left: 180px;
            font-size: 20px;
            
        }
        .order-detail #close-edit{
            margin-left: 250px;
            font-size: 20px;
            cursor: pointer;
        }
        .close-edit{
            border: 0;
        }
        /* section{
            height: 800px;
        } */
        .type .category ul{
        margin-top: -1vw;
    }
    .type .category ul li {
    list-style: none;
    padding-bottom: 1vw; 
    }

    .type .category ul li a {
        text-decoration: none;
        font-size: 1.5vw; /* Sử dụng vw cho kích thước chữ */
        color: black;
    }
    .type .name .icon {
        border: 0;
        font-size: 1.5vw; /* Sử dụng vw cho kích thước chữ */
        position: absolute;
        margin-left: 15vw;
        margin-top: 0.5vh; /* Sử dụng vh cho bottom */
    }
    .type .name h3{
        margin-left: -4vw;
        font-size: 2.5vw;
    }
    .type .name .icon i {
        font-size: 1vw; /* Sử dụng vw cho kích thước chữ */
        
    }

    .type .name {
        height: 5vw; /* Sử dụng vw cho chiều cao */
        width: 80%; /* Sử dụng phần trăm cho chiều rộng */
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-size: 1.5vw; /* Sử dụng vw cho kích thước chữ */
        margin-left: 5vw; /* Sử dụng vw cho margin */
        padding: 0;
        position: relative;
        cursor: pointer;
    }
    table td{
        border: 1px solid black;
    }
    </style>
    
    <div class="menu">
        <div class="type">
            
            <div class="name">
                <button class="icon"><i class="fa-solid fa-chevron-down"></i></button>
                <h3>Áo</h3>
                
            </div>
           
            <div class="category">
            <ul>
                @foreach($Category_ao as $category_ao)
                <li><a href="{{route('search.category', $category_ao->id)}}">{{$category_ao->name}}</a></li>
                @endforeach
            </ul>
            </div>
            <div class="name">
                <button class="icon"><i class="fa-solid fa-chevron-down"></i></button>
                <h3>Quần</h3>
                
            </div>
           
            <div class="category">
            <ul>
                @foreach($Category_quan as $category_quan)
                <li><a href="{{route('search.category', $category_quan->id)}}">{{$category_quan->name}}</a></li>
                @endforeach
            </ul>
            </div>
            <div class="name">
                <button class="icon"><i class="fa-solid fa-chevron-down"></i></button>
                <h3>Đồ Mặc Nhà</h3>
                
            </div>
           
            <div class="category">
            <ul>
                @foreach($Category_nha as $category_nha)
                <li><a href="{{route('search.category', $category_nha->id)}}">{{$category_nha->name}}</a></li>
                @endforeach
            </ul>
            </div>
            <div class="name">
                <button class="icon"><i class="fa-solid fa-chevron-down"></i></button>
                <h3>Đồ Mặc Ngoài</h3>
                
            </div>
           
            <div class="category">
            <ul>
                @foreach($Category_ngoai as $category_ngoai)
                <li><a href="{{route('search.category', $category_ngoai->id)}}">{{$category_ngoai->name}}</a></li>
                @endforeach
            </ul>
            </div>
        </div>
        <div class="table">
       <table>
        <tr>
            <th style="width:500px; text-align:center;font-size:30px ">Product</th>
            <th style="width:300px; font-size:30px">Price</th>
            <th style="width:300px; font-size:30px">Amount</th>
            <th style="width:300px; font-size:30px">Total</th>
            <th style="width:300px; font-size:30px">Action</th>
        </tr>
        @forEach($Order_detail as $order_detail)
        <tr>
            <td>
                <div class="image">
                    <img src="{{asset('product/image/'.$order_detail->product->image[0]->path)}}" alt="">
                    <p>{{$order_detail->product->name}}</p>
                   
                </div>
               
            </td>
            <td style="text-align:center; font-size:20px;">{{$order_detail->product->price}}$</td>
            <td style="text-align:center; font-size:20px;">{{$order_detail->amount}}</td>
            <td style="text-align:center; font-size:20px;">{{$order_detail->total}}$</td>
            <td style="text-align:center; font-size:20px;;">
                <div class="buy">Buy</div>
            <div id="delete"><a style="text-decoration: none;cursor: pointer;" href="{{route('delete.cart', $order_detail->id)}}">Delete</a></div>
        

            <div class="edit" id="edit"><p style="text-decoration: none;cursor: pointer;">Edit</p></div></td>
            
        </tr>
        @endforeach
       </table>
   
       @forEach($Order_detail as $order_detail)
       <div class="form-buy" id="form-buy">
       <button style="border: 0;" class="close"> <i id="close" class="fa-solid fa-xmark"></i> </button>
        <form action="{{route('product.order')}}" method="post">
            @csrf
            <div>
                <label for="full-name">Full name</label><br>
                <input type="text" name="full_name" id="">
            </div>
            <div>
                <label for="address">Address</label><br>
                <input type="text" name="address" id="">
            </div>
            <div>
                <label for="number">Number</label><br>
                <input type="text" name="number" id="">
            </div>
            <div>
                <label for="note">Note</label> <br>
                <input type="textarea" name="note" id="">
            </div>
            <input type="hidden" name="order_detail" value="{{$order_detail->id}}">
            <input type="submit" value="Order">
        </form>
       </div>
       @endforeach
       <div class="background">
        @foreach($Order_detail as $order_detail)
        <div class="order-detail">
    
            <button class="close-edit"><i id="close-edit" class="fa-solid fa-xmark"></i></button>
            <form action="{{route('edit.cart', $order_detail->id)}}" method="POST">
                @csrf
                <div>
                    <label for="amount">Amount</label>
                    <input type="number" name="amount" id="" value="{{$order_detail->amount}}">
                </div>
                <input type="submit" value="Change">
            </form>
        </div>
    </div>
    @endforeach
</div>
</div>
    </section>
    <script>
       
    // Hiển thị slide đầu tiên khi trang được tải
    
    var Edit = document.querySelectorAll('.edit');
    
    var order_detail = document.querySelectorAll(".order-detail");
    console.log(order_detail)
    var Close = document.querySelectorAll('.close-edit');
    Edit.forEach((edit, index) => {
        edit.onclick = function(e) {
        order_detail[index].style.display = "block";
    }
    })
    Close.forEach((close, index) => {
        close.onclick = function(e) {
        order_detail[index].style.display = "none";
    }
    })
    
    
    
        var buys = document.querySelectorAll('.buy');
        var form = document.querySelectorAll('.form-buy');
        var closes = document.querySelectorAll('.close');
        console.log(buys);
        console.log(form);
        console.log(closes);
        buys.forEach((buy, index)=> {
        buy.onclick = function(e) {
            form[index].style.display = "block";
        }
         });
        closes.forEach((close, index)=> {
        close.onclick = function() {
            form[index].style.display = "none";
        }
         });
    </script>
@endsection