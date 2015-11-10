
  <script> 
    var time = 0;
  
    var updateTime = function (cb) {
      $.getJSON("<?php echo base_url();?>chat/time", function (data) {
          cb(~~data);
      });
    };
    
    var sendChat = function (message, cb) {
      $.getJSON("<?php echo base_url();?>chat/insert_chat?message=" + message, function (data){
        cb();
      });
    }
    
    var addDataToReceived = function (arrayOfData) {
      arrayOfData.forEach(function (data) {
        $("#textarea").val($("#textarea").val() + "\n" + data[0]);
      });
    }
    
    var getNewChats = function () {
      $.getJSON("<?php echo base_url();?>chat/get_chats?time=" + time, function (data){
        addDataToReceived(data);
        // reset scroll height
        setTimeout(function(){
           $('#textarea').scrollTop($('#textarea')[0].scrollHeight);
        }, 0);
        time = data[data.length-1][1];
      });      
    }
  
    // using JQUERY's ready method to know when all dom elements are rendered
    $( document ).ready ( function () {
      // set an on click on the button
      $("form").submit(function (evt) {
        evt.preventDefault();
        var data = $("#textinput").val();
        $("#textinput").val('');
        // get the time if clicked via a ajax get queury
        sendChat(data, function (){
          alert("dane");
        });
      });
      setInterval(function (){
        getNewChats(0);
      },1500);
    });
    
  </script>

<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<div class ="page-header">
                            Chat Box
                        </div>
<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Text Area</label>
  <div class="col-md-4">                     
      <textarea class="form-control" id="textarea" rows="10" cols="50" name="textarea" readonly=""></textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Text Input</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" placeholder="Input text here" class="form-control input-md" type="text">
  
  </div>
</div>

</fieldset>
</form>