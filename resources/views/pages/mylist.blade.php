@extends('layouts.base')

@section('title')
my title
@endsection

@section('content')
<style>
    a {text-decoration: none; color: turquoise;
}
</style>


    <body> 
       
        <section class="btop"> 
        <div class="container">
        <ul id="menuTabs" class="nav nav-tabs nav-justified">
            <li class="active">
                <a href="javascript:void(0);" class="menuItem" id="tab_1">Your Items</a></li>
            <li><a href="javascript:void(0);" class="menuItem" id="tab_2">Your Requests</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="tab_1">
            <div class="container">
                <h4>Shared</h4>
                <table width='100%' style="table-layout:fixed;">
                @foreach($prodcuts as $prodcut) 
                   <tr>
                       <td><img src="/storage/{{$prodcut->filename}}"height="50px" width="50px">{{$prodcut->pname}}</td>
                       <td> </td>
                       <td>who sent request</td>
                       <td>user1 , user2 , user3 , ...</td>
                       <td> </td>
                       <td><a href='edit/{{$prodcut->id}}' style="color: inherit;"><center>Edit</center></a></td>
                       <td><a href='/#delete/{{$prodcut->id}}/' style="color: inherit;"><center>Delete</center></a></td>
                    </tr>
               @endforeach 
               </table> 
            </div>
            </div>
            <div class="tab-pane" id="tab_2">
            <div class="container">
                <h4>Requested</h4>
        <ul><li>'ajax requested product <em>, use loop</em>'</li>
            <li>'ajax requested product <em>, use loop</em>'</li>
            <li>'ajax requested product <em>, use loop</em>'</li>
            <li>'ajax requested product <em>, use loop</em>'</li>
        </ul>
                
                
            </div>
            </div>
        </div>
        </div>
        <p>
        Do you know how much food is wasted every day ? <br>
        <!-- insert data    -->
        </p>
        </section>



        <footer> All rights reserved!</footer>
    </body>
    <script>
        window.onload = function() {   //拿 tabheader的li 
            var theList = document.querySelectorAll('#menuTabs>li'); 
            for (var i = 0; i < theList.length; i++) {
                theList[i].addEventListener("click", function(){
                    // 刪tab內容的 .active
                    var tabs = document.querySelectorAll('.tab-content>.tab-pane');
                    for (var j = 0; j < tabs.length; j++) {
                        tabs[j].className = "tab-pane";
                    }
                    // 刪 tabheader的.active 
                    for (var k = 0; k < theList.length; k++) {
                        theList[k].className = "";
                    }
                    // setting .active in clicked item
                    this.className = "active";
                    // getting target id
                    var linkTab = this.getElementsByTagName("A")[0].id;
                    // showing the selected tab's div
                    var tab = document.querySelectorAll('.tab-content>#'+linkTab)[0];
                    tab.className = "tab-pane active";
                });
            };
        };
    </script>




@endsection