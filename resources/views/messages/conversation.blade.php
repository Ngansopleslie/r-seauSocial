@extends('layouts.app1')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Message</title>
  <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .chat-container {
        max-width: 400px;
        margin: 20px auto;
        border: 1px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
      }
      .message {
        padding: 10px 15px;
        border-radius: 15px;
        margin: 20px;
        max-width: 75%;
      }
      .message.user {
        background-color: #e5f5ff;
        align-self: flex-end;
        text-align: right;
      }
      .message.contact{
        background-color: #f1f1f1;
        align-self: flex-start;
      }
      .chat-box{
        display: flex;
        flex-direction: column;
        padding: 15px;
        height: 400px;
        overflow-y: scroll;
        background-color: #fff;
      }
      .input-box{
        padding: 10px;
        border-top: 1px solid #ddd;
      }
      .conversation
      {
        color: blue;
        padding-left: 25%;
        
      }
    </style>
</head>
<body>

  <hr>
  <br>
  <label for="" class="h1 conversation fw-b">Discution</label>
  <br>
  <div class="chat-container">
    <div class="input-box" style="border-bottom: gray;">
      <div class="row" >
        <div  class="col-md-1"   >
          <img class="  rounded-circle" src="WIN_20240323_13_03_01_Pro.jpg" width="50" height="50">   
      </div>
      <div class="col-md-11">
        <div class="row" style="margin-left: 20px;">
          <div class="col-md-12">user name</div>
          <div class="col-md-12"><small>en ligne i y a 6h</small></div>
        </div>
      </div>
      </div>
    </div>


    <div class="chat-box">
     <div class="d-flex" >
        <div  class="col-md-1" style="margin-left: 10px;"  >
          <img class="rounded-circle" src="WIN_20240323_13_03_01_Pro.jpg" width="25" height="25">   
      </div>
      <div class="col-md-11">
        <div class="row" style="margin-left: 2">
          <div class="message contact"> No probleme</div>
        </div>
      </div>
      </div>
      <div class="message user"> No probleme</div>
      <div class="d-flex" >
        <div  class="col-md-1" style="margin-left: 10px;"  >
          <img class="rounded-circle" src="WIN_20240323_13_03_01_Pro.jpg" width="25" height="25">   
      </div>
      <div class="col-md-11">
        <div class="row" style="margin-left: 2">
          <div class="message contact"> No probleme</div>
        </div>
      </div>
      </div>
      <div class="message user"> No probleme</div>
    </div>
    <div class="input-box">
      <form class="d-flex">
        <input type="text" class="form-control" placeholder="Type a message...">
        <button class="btn btn-primary ml-2">Send</button>
      </form>
    </div>
  </div>

  
</body>
</html>
@endsection