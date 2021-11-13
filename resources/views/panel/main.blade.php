<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

<head>
  <style>  
    body{
    margin-top:20px;
    background:#f5f5f5;
    font-size:16px;
}

/*
    =================================
    CHAT ROOM
    =================================
*/

.chat-room {
    border-collapse: collapse;
    border-spacing: 0;
    display: table;
    table-layout: fixed;
    width: 100%;
    position: relative;
}


.chat-room aside {
    display: table-cell;
    float: none;
    height: 100%;
    padding: 0;
    vertical-align: top;
}

.chat-room .kiri-side {
    width: 25%;
    background: #e5e8ef;
    border-radius: 4px 0 0 4px;
    -webkit-border-radius: 4px 0 0 4px;
}
.chat-room .tengah-side {
    width: 50%;
    background: #fff;
    border-right: 1px solid #e5e8ef;
}

.chat-room .kanan-side {
    width: 25%;
    background: #fff;
}

.chat-room .kiri-side .user-head {
    background: #2980b9;
    color: #FFFFFF;
    min-height: 70px;
    padding: 15px;
}
.chat-room .kanan-side .user-head {
    background: #2980b9;
    color: #FFFFFF;
    min-height: 70px;
    padding: 10px;
    border-left: 1px solid #2980b9;
    margin-left: -1px;
    position: relative;
}


.chat-room .user-head i {
    float: left;
    font-size: 40px;
    margin-right: 10px;
}

.chat-room .user-head h3 {
    margin: 6px 0 0 0;
    font-weight: 100;
    letter-spacing: 1px;
}

.chat-room-head {
    background: #3498db;
    color: #FFFFFF;
    min-height: 70px;
    padding: 15px;
}

.chat-room-head h3 {
    margin: 5px 0 0;
    font-weight: 100;
    letter-spacing: 1px;
    display: inline-block;
}

.chat-room-head .search-btn {
    width: 20px;
    -webkit-transition: all .3s ease;
    -moz-transition: all .3s ease;
    -ms-transition: all .3s ease;
    -o-transition: all .3s ease;
    transition: all .3s ease;
    box-shadow: none;
    background: #01a6b2 url("../img/chat-search.png") no-repeat 12px 9px;
    padding:0 5px 0 35px;
    margin-top: 2px;
    border: none;
    color: #fff;
}

.chat-room-head .search-btn:focus {
    width: 180px;
    box-shadow: none;
    -webkit-transition: all .3s ease;
    -moz-transition: all .3s ease;
    -ms-transition: all .3s ease;
    -o-transition: all .3s ease;
    transition: all .3s ease;
    /*background: #01a6b2;*/
    font-weight: 300;
    color: #fff;
}

.chat-room-head .search-btn:focus::-moz-placeholder {
    color: #fff;
}


ul.chat-list li a {
    color: #6a6a6a;
    display: block;
    padding: 15px;
    font-weight: 300;
    text-decoration: none;
}
ul.chat-list li a:hover, ul.chat-list li.active a {
    color: #00a9b4;
    background: #f2f4f7;
}

ul.chat-list li h4 {
    padding: 17px 15px;
    margin: 0;
    font-size: 14px;
    font-weight: 600;
    border-bottom: 1px solid #D5D7DE;
}

ul.chat-list li h4 i {
    padding-right: 5px;
}

ul.chat-list li a span {
    padding-left: 10px;
}

ul.chat-list li a i.fa-times {
    color: #9fa3b0;
}

ul.chat-list li.active {
    color: #00a9b4;
    background: #f2f4f7;
}

ul.chat-list {
    border-bottom: 1px solid #d5d7de;
    padding-left: 0;
    list-style: none;
}

ul.chat-user  {
    margin-bottom: 200px;
}

ul.chat-user li {
    border-bottom: none;
}

ul.chat-user li a:hover{
    background: none;
    color: #6a6a6a;
}

.chat-room .kiri-side footer {
    background: #d5d7de;
    padding: 15px;
    height: 70px;
    width: 25%;
    position: absolute;
    bottom: 0;
}

.chat-room .tengah-side footer {
    background: #f6f6f6;
    padding: 15px;
    height: 70px;
    width: 50%;
    position: absolute;
    bottom: 0;
    border-right: 1px solid #E5E8EF;
}

.chat-room .kanan-side footer {
    background: #fff;
    padding: 15px;
    height: 70px;
    width: 25%;
    position: absolute;
    bottom: 0;
    border-top: 1px solid #E5E8EF;
}

.chat-room .kiri-side footer .chat-avatar img {
    width: 40px;
    height: 40px;
    border: 2px solid #fff;
    float: left;
}

.chat-room .kiri-side footer .user-status {
    float: left;
    margin: 10px;
}

.chat-room .kiri-side footer .user-status i {
    padding-right: 5px;
}

.chat-room .left-side footer a.chat-dropdown {
    background: #96979a;
    border-radius: 2px;
    color: #fff;
    font-size: 10px;
    margin-top: 10px;
    padding: 3px 5px;
}

.room-desk {
    display: inline-block;
    margin-bottom: 30px;
    width: 100%;
    padding: 15px;
}

.room-desk h4 {
    text-transform: uppercase;
    font-weight: 300;
    font-size: 16px;
    margin: 5px 0 0 0;
}

.room-box {
    border: 1px solid #f7f8fa;
    background: #f7f8fa;
    padding: 10px;
    display: inline-block;
    width: 100%;
    margin-top: 10px;
}

.room-box h5 {
    margin: 0 0 5px 0;
    font-weight: 300;
    font-size: 16px;
}
.room-box h5 a {
    color: #00a9b4;
}

.chat-tools {
    float: right;
    padding: 3px;
    width: 40px;
    height: 35px;
    line-height: 30px;
    border-radius: 3px;
    -webkit-border-radius: 3px;
    text-align: center;
    margin-top: 6px;
    margin-left: 10px;
}

.chat-tools i {
    font-size: 16px !important;
    float: none !important;
    margin-right: 0 !important;
    color: #fff;
}

.btn-key {
    background: #1abc9c;
}

.btn-key:hover {
    background: #16a085;
}

.invite-row {
    background: #E5E8EF;
    padding: 6px 10px;
    display: inline-block;
    width: 100%;
}

.invite-row h4 {
    font-size: 16px;
    font-weight: 300;
}

ul.chat-available-user {
    padding: 10px;
    list-style: none;
}

ul.chat-available-user li {
    margin-bottom: 15px;
}

ul.chat-available-user li a {
    color: #6a6a6a;
    text-decoration: none;
}
ul.chat-available-user li i {
    padding-right: 5px;
    font-size: 10px;
}

.group-rom {
    width: 100%;
    float: left;
    border-bottom: 1px solid #eaebee;
}

.group-rom .first-part,
.group-rom .second-part,
.group-rom .third-part {
    float: left;
    padding: 15px;
    
}

.group-rom .first-part {
    width: 25%;
    border: 2px solid #cfe5ed;
}

.group-rom .first-part.odd {
    background: #f7f8fa;
    background-color: #cfe5ed;

    font-weight: 600;
}



.group-rom .second-part{
    width: 60%;
    border: 2px solid #cfe5ed;
}




.group-rom .third-part{
    width: 10%;
    color:black;
    font-size: 13px;
    
}

a.guest-on {
    color: #6a6a6a;
    margin-top: 8px;
    display: inline-block;
}

a.guest-on i {
    background: #40cabe;
    color: #fff;
    padding: 4px;
    border-radius: 3px;
    -webkit-border-radius: 3px;
    margin-right: 5px;
}

.chat-txt {
    float: left;
    width: 70%;
    margin-right: 5px;
}

.lobby {
    padding: 0 !important;
}

</style>
</head>









<div class="container bootstrap snippets bootdey.com">
<div class="row">
    <div class="col-md-12">
        <!-- start:chat room -->
        <div class="box">
            <div class="chat-room">
            <!-- start:aside kiri chat room -->
            

            <!-- start:aside tengah chat room -->
            
                    <h3>Discussion Panel</h3>
                    
                        <a href="http://127.0.0.1:8000/newmsg">Post</a>
                            <a href="http://127.0.0.1:8000/showmsgs">View my posts</a>
                   
                </div><br>
 
                @foreach($newmsg as $row)
                <div class="group-rom">
                    <div class="first-part odd">{{ $row->name }}</div>
                    <div class="second-part">{{ $row->msg }}</div>
                    <div class="third-part">{{ $row->created_at }}</div>
                </div>
                @endforeach
                
            </aside>
            <!-- end:aside tengah chat room -->

            <!-- start:aside kanan chat room -->
           
            </div>
        </div>
        <!-- end:chat room -->
    </div>
</div>
</div>