@extends('user.guest.layout')
@section('content')
<style>
    .menu{
        height: auto;
        width: 100%;
        margin-top: 50px;
        display: block;
    }
    .type{
        float: left;
        width: 20%;
        height: auto;
    }
    .products{
        float: right;
        width: 75%;
        height: auto;
       
        
    }
    .category{
        display: none;
    }
    .type .category ul li{
        list-style: none;
        padding-bottom: 10px;
        
    }
    .type .category ul li a{
        text-decoration: none;
        font-size: 25px;
        color: black;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        margin-left: 50px;
    }
    .product{
        height: 500px;
        width: 350px;
        padding-left: 50px;
        cursor: pointer;
        display: inline-table;
        color: black;
        padding-bottom: 30px;
    }
    .product img{
        height: 350px;
        width: 350px;
    }
    .product h3{
        font-size: 35px;
        font-weight: bold;
        color: red;
    }
    .product p{
        font-size: 25px;
        color: red;
        display: inline;
        padding-right: 50px; 
    }

    .type .name .icon{
        
        margin-left: 300px;
        border: 0;
        font-size: 20px;
        
    }
    .type .name .icon i{
        font-size: 20px;
    }
    .type .name{
        height: 50px;
        width: 300px;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-size: 35px;    
        margin-left: 50px; 
        padding: 0;
        position: relative;
        cursor: pointer;
    }
    .product h2{
        height: 40px;
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
            <li><a href="{{route('guest.search.category', $category_ao->id)}}">{{$category_ao->name}}</a></li>
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
            <li><a href="{{route('guest.search.category', $category_quan->id)}}">{{$category_quan->name}}</a></li>
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
            <li><a href="{{route('guest.search.category', $category_nha->id)}}">{{$category_nha->name}}</a></li>
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
            <li><a href="{{route('guest.search.category', $category_ngoai->id)}}">{{$category_ngoai->name}}</a></li>
            @endforeach
        </ul>
        </div>
    </div>
    </div>
<h1>Kêt quả tìm kiếm: {{$condition}}</h1>
<div class="products">
    @foreach($Product as $product)
    <a href="{{route('product.detail', $product->id)}}">
    <div class="product">
        <img src="{{asset('product/image/'.$image[0]->path)}}" alt=""><br>
        <h2>{{$product->name}}</h2>
        <h3>Price: {{$product->price}}$</h3>
        <p>{{$product->description}}</p>
    </div>
    </a>
    @endforeach
</div>



@endsection