@extends('layouts.base')

@section('title')
my title
@endsection

@section('content')
<style>
    a {text-decoration: none; 
} 
    li { list-style: none;}
</style>


    <body> 
       
        <section class="btop"> 
        <div class="container">
       <!-- <ul id="menuTabs" class="nav nav-tabs nav-justified">
            <li class="active">
            <a href="javascript:void(0);" class="menuItem" id="tab_2">Your Requests</a> </li>
            <li>-<a href="javascript:void(0);" class="menuItem" id="tab_1">Your Items</a></li>
        </ul>
        -->
        <ul id="menuTabs" class="nav nav-tabs ">
            <!-- <li class="active"> -->
            <li class="nav-item">
                <a class="nav-link active" href="javascript:void(0);" class="menuItem" id="tab_2">Your Requestss</a>
            </li>
            <li>
                <a class="nav-link active" href="javascript:void(0);" class="menuItem" id="tab_1">Your Items</a>
            </li>
            <li class="nav-item">
          </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane " id="tab_1">
            <div class="container">
                <h4>Shared</h4>
                <table class="table table-hover">
                  @foreach($prodcuts as $prodcut) 
                    @if($prodcut->pstatus =='hide')
                        <tr class="table-secondary">
                            <td><a href="/mylist/{{$userid}}_{{$prodcut->id}}"><img src="/storage/{{$prodcut->filename}}"height="60px" width="60px">{{$prodcut->pname}}</a></td>
                            <td> </td>
                            
                            <td>{{$prodcut->created_at}} </td>
                            <td>{{$prodcut->pstatus}} </td>
                            <!--<td><a href='edit/{{$prodcut->id}}' style="color: inherit;"><center>Edit</center></a></td>-->
                            <td><a href='/#delete/{{$prodcut->id}}/' style="color: inherit;"><center>Delete</center></a></td>
                            </tr>
                    @else
                        <tr>
                        <td><a href="/mylist/{{$userid}}_{{$prodcut->id}}"><img src="/storage/{{$prodcut->filename}}"height="60px" width="60px">{{$prodcut->pname}}</a></td>
                        <td> </td>
                        
                        <td>{{$prodcut->created_at}} </td>
                        <td>{{$prodcut->pstatus}} </td>
                        <!--<td><a href='edit/{{$prodcut->id}}' style="color: inherit;"><center>Edit</center></a></td>-->
                        <td><a href='/delete/{{$prodcut->id}}/' style="color: inherit;"><center>Delete</center></a></td>
                        </tr>
                    @endif
                    
                  @endforeach 
               </table> 
            </div>
            </div>
            <div class="tab-pane active" id="tab_2">
            <div class="container">
                <h4>Requested</h4>
                <table class="table table-hover" width="100%" style="table-layout:fixed">
                    @foreach($r_ps as $r_p)
                    <tr> 
                        <td><img src="/storage/{{$r_p->filename}}"height="60px" width="60px">
                            {{$r_p->pname}} 
                        </td>
                        <td style="vertical-align:middle; text-align:center;">    
                            @if($r_p->status=='w') 
                            <span class="badge badge-info">Await Response...</span>
                                @elseif($r_p->status=='accept')
                                <span class="badge badge-pill badge-warning"><em>Don't forget to collect them!</em></span>
                                
                                @else($r_p->status=='reject')
                                <span class="badge badge-pill badge-dark"><em>Sorry you were rejected</em></span>
                            @endif
                        </td>
                        <td style="text-align:right;">    
                            {{$r_p->rcreated_at}}
                        </td>  
                    </tr> 
                    @endforeach
                
                </table>
                
        <div id="chat">
                <ul style="height:20%;border-color:aquamarine"> 
                <li>  
                <?php
                //<img src="https://diz36nn4q02zr.cloudfront.net/webapi/imagesV3/Original/SalePage/6406391/1/637394070056530000?v=1">
               
                // $dbhost = 'localhost';
                // $dbname = 'food';
                // $dbuser = 'root';
                // $dbpass = '';

                // try{
                // $dsnpdo= new PDO("mysql:dbhost=$dbhost;dbname=$dbname",$dbuser,$dbpass);
                // } catch( PDOException $e){
                // echo $e->getMessage();
                // }

                // $stmt = $dsnpdo->prepare('SELECT * FROM messages');
                // $stmt->execute();
                // $messages = $stmt->fetchAll();

                // foreach ($messages as $user)
                // {
                // $person = $user['user'];
                // $sidenote= $user['message'];
                // $coltime= $user['dato'];
                // }

                // $colreq = $dsnpdo->prepare('SELECT * FROM upload');
                // $colreq->execute();
                // $upload = $colreq->fetchAll();
                // foreach ($upload as $user)
                // {   
                // $itemname = $user['pname'];
                // }
                // echo 'user '. $person . ' requested your item '. $itemname .' at '. $coltime . '<br>' .'note:' . $sidenote ;
                //  <button>Da</button> <button>Nah</button> </li>
                ?>       

                   
           
                </div>
                
            </div>
            </div>
        </div>
        </div>
        
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