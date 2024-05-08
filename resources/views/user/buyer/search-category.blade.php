@extends('user.buyer.layout')
@section('content')
<style>
    body{
    height: auto;
    width: 100%;
    background-color: #F5F5F5;
}
body{
    height: auto;
    width: 100%;
    background-color: #F5F5F5;
}
header {
  height: auto;
  width: 100%;
  margin-top: 20px;
}
.header ul {
  display: flex;
  align-items: center;
}
.header ul li img {
  width: 95%; 
  max-width: 150px; 
  height: auto;
  margin-left: 10%; 
}
.header ul li {
  list-style-type: none;
  display: inline-flex;
  font-size: 1.5vw; 
  margin-left: 2%; 
  font-weight: bold;
  cursor: pointer;
}
.header ul li a {
  text-decoration: none;
  color: black;
}
header ul li:nth-of-type(6) {
  margin-left: 25%; /* Sử dụng phần trăm */
}
.slideshow-containerheight{
  width: 100%;
  height: 900px;
}
.slideshow-container {
    width: 100%;
    height: 100%;
    position: relative;
    display: none;
    overflow: hidden;
  }
  
  .slide {
    width: 100%;
    height: 100%;
    display: none;
    position: absolute;
    top: 0;
    left: 0;
  }
  
  .slide img {
    width: 100%;
    height: 100%;
  }
  
  .active {
    display: block;
  }
  .prevBtn{
    margin-left: 50px;
    position: absolute;
    font-size: 25px;
    top: 45%;
    width: 80px;
    height: 80px;
    border-radius: 50%;
  }
  .nextBtn{
    position: absolute;
    right: 0;
    font-size: 25px;
    top: 45%;
    margin-right: 50px;
    width: 80px;
    height: 80px;
    border-radius: 50%;
  }
 
  #accounts ul li{
    margin-left: 1rem;
    position: relative;
  }

#accounts ul li img {
    width: 100%; /* Sử dụng phần trăm cho chiều rộng hình ảnh */
    max-width: 100px;
    max-height: 100%;
    height: auto;
    
    
    border-radius: 50%;
}


 
 
 .form_search{
  display: none;
  margin-top: 20px;
 }
 .form_search input[type="search"]{
  height: 35px;
  width: 950px;
  margin-left: 600px;
  position: relative;
  
 }
 .form_search input[type="submit"]{
  height: 35px;
  width: 90px;
  cursor: pointer;
 }
 .close_form_search{
  border: 0;
  position: absolute;
  margin-top: 1px;
  margin-left: 5px;
  cursor: pointer;
 }
 .close_form_search i{
  font-size: 35px;
  
 }
 #management-account{
    display: none;
 }
  
  #management-account >ul {
      display: block;
      height: 8vw;
      width: 8vw;
      position: absolute;
      right: 0;
      background-color: black;
      top:0;
      margin-top: 2vw;
      border-radius: 25%;
      
   }
  
 
 #management-account a{
  text-decoration: none;
  font-size: 1vw;
  color: white;
 }
 #management-account ul li{
  list-style-type: none;
  margin-left: 0;
  padding-bottom: 0.5vw;
  color: aliceblue;
  display: block;
 }

 .menu{
        height: auto;
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
    .products{
        flex: 2.5;
        float: right;
        width: 75%; 
        height: auto;
       
        
    }
    /* .category{
        display: none;
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

        /* font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; */
        /* margin-left: 5vw; */
    }
    
    .product{
        height: 20vw;
        width: 15vw;
        padding-left: 50px;
        cursor: pointer;
        display: inline-table;
        color: black;
        padding-bottom: 30px;
    }
    .product img{
        height: 15vw;
        width: 15vw;
    }
    .product h3{
        font-size: 1.5vw;
        font-weight: bold;
        color: red;
    }
    .product p{
        font-size: 1.2vw;
        color: red;
        display: inline;
        padding-right: 1vw; 
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
    .product h2{
        height: 4vw;
        font-size: 1.5vw;   
    }
    footer {
  
  height: auto;
  width: 100%;
  background-color: #968e8e;
}
footer .content-footer{
  display: inline-block;
  margin-left: 10vw;
}
.footer-header{
  height: 3vw;
  width: 12vw;
  
  margin-top: 1vw;
  font-size: 1.2vw;
}
.footer-information{
  padding-bottom: 1vw;
}
.footer-information a{
  font-size: 1vw;
  text-decoration: none;
  color: black;
   
}
.footer-icon{
  display: inline;
}
.footer-icon a{
  text-decoration: none;
  color: black;
  margin-right: 1vw;
}
.footer-icon i{
  font-size: 2vw;
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
    
    <div class="products">
        @foreach($Product as $product)
        <a href="{{route('product.detail', $product->id)}}">
        <div class="product">
          
            <img src="{{asset('product/image/'.$product->image[0]->path)}}" alt=""><br>
            
            <h2>{{$product->name}}</h2>
            <h3>Price: {{$product->price}}$</h3>
            <p>Color: {{$product->color}}</p>
            <p>Brand: {{$product->brand}}</p>
        </div>
        </a>
        @endforeach
    </div>
</div>
<script>
    var name1s = document.querySelectorAll('.name');
    
    var category = document.querySelectorAll('.category');
    
    name1s.forEach((name1, index)=> {
        name1.onclick = function(e) {
            
            if(category[index].style.display==="none"){
                category[index].style.display="block";
            }
            else{
                category[index].style.display="none";
            }
        }
    })
</script>
@endsection