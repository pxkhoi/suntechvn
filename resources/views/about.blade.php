<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Menu </h1>
                                        
                    <a href="{{ route('user') }}">User</a>  |
                    <a href="/product">Product</a> |
                    <a href="/new">New</a> |
                    <a href="/service">Service</a> |
                    
    <hr>
    <h1> Bafi viet </h1>
    <ul>
        <li><a href="/new/11/cat/1010">Bai viet so 1</a></li>
        <li><a href="/new/2/cat/1002">Bai viet so 2</a></li>
        <li><a href="/new/3/cat/1003">Bai viet so 3</a></li>
        <li><a href="/new/4/cat/1004">Bai viet so 4</a></li>
        <li><a href="/new/5/cat/1005">Bai viet so 5</a></li>
        
    </ul>
    <h1> User </h1>
    <ul>
        <li><a href="{{ route('user.show',['id'=>1]) }}">User so 1</a></li>
        <li><a href="{{ route('user.show',['id'=>31]) }}">User so 31</a></li>
        <li><a href="{{ route('user.show',['id'=>41]) }}">User so 41</a></li>
        <li><a href="{{ route('user.show',['id'=>51]) }}">User so 51</a></li>
    
       
        
        
    </ul
><h1> User by branch</h1>
    <ul>
        <li><a href="{{ route('user.show.branch', ['id'=>1,'branchID'=>1]) }}">User so 1</a></li>
        <li><a href="{{ route('user.show.branch', ['id'=>12,'branchID'=>12]) }}">User so 12</a></li>
        <li><a href="{{ route('user.show.branch', ['id'=>13,'branchID'=>13]) }}">User so 13</a></li>
        <li><a href="{{ route('user.show.branch', ['id'=>14,'branchID'=>14]) }}">User so 14</a></li>
         
        
        
    </ul>
                  
</body>
</html>