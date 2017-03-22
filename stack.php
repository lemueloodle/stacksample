try{

	$status = $_POST['sample'];

	$pdo = new PDO('mysql:host='.$host.';dbname='.$dbname.'',$username, $password);
	
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$fetch = $pdo->prepare("SELECT * from dbname where dbtable = :status");
	$fetch->execute(array(
	':status' = $status
	));

	$fetch->setFetchMode(PDO::FETCH_ASSOC);

	$fetchx = $fetch->fetch();

	$fetchx = $fetch-rowCount();

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$fetch = $pdo->prepare("SELECT * from db where title = :email");
	$fetch->execute(array(
	':email'=>'try'
	));
	$row = $fetch->rowCount();

	$fetch->setFetchMode(PDO::FETCH_ASSOC);
	$fetchx = $fetch->fetch();

	if($status == 1){
	while($fetchx = $fetch->fetch()){

	}
	}
}catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
  }


$(document).ready(function(){
	
	$(document).on('click', '#title', function(){
	var cYx_cAlx = []; 
	//AJAX
	$.ajax({
		url: "",
		type: "POST",
		dataType: "json",
		data: {
			name: "name"
		},
		success:function(dataT){
			$.each(dataT, function(key, val){
				cYx_cAlx.push(dataT[key]);
			});
		}
	});
	
	});

	//FORM SUBMIT
	$("form[name='ad-uploader']").submit(function(e){
		$("#save-ads").button('loading');
		e.preventDefault();
	    var fd = new FormData();
	    var file_data = $('#a_leadphoto')[0].files; // for ad leaderboard
	    for(var i = 0;i<file_data.length;i++){
	        fd.append("f1_"+i, file_data[i]);
	    }
	     var buff_tk = $("#save-ads").attr("data-buff");
	    fd.append("bfx", buff_tk);
	    	var aregion = $(".a_region").val();
	  	fd.append("a_region", aregion);
	  	var e_inert = [];
	    
	    $.ajax({
	        url: '../inr_ds',
	        data: fd,
	        contentType: false,
	        processData: false,
	        type: 'POST',
	        dataType: 'json',
	        cache: false,
	        success: function(dataT){
            	$.each(dataT, function(key, val){
						e_inert.push(dataT[key]);
				});
			)}
		)};
	}
});

//PAGES
//IMAGE GALLERY
    $(document).on("click", ".mgalprevx", function(){
      var e = parseInt($('.mediagalpgx-src').attr('dk-x'));
      e = e - 1;
      $('.mediagalpgx-src').attr('dk-x', e);
      mgaldspgy();
    });
    $(document).on("click", ".mgalnex", function(){
      var e = parseInt($('.mediagalpgx-src').attr('dk-x'));
      e = e + 1;
      $('.mediagalpgx-src').attr('dk-x', e);
      mgaldspgy();
    });
function mgaldspgy(){
    var e = $('.mediagalpgx-src').attr('dk-r');
    var t = $('.mediagalpgx-src').attr('dk-x');
    var n = "";
    if (e != 1) {
        if (t > 1) {
            var r = "minus";
            n += "<button style='float: none; display: inline-block;' class='btn btn-default mgalprevx'>Prev</button>"
        }
        n += "&nbsp;&nbsp;<b>Page " + t + " of " + e + "</b>&nbsp;&nbsp;";
        if (t != e) {
            var i = "add";
            n += "<button style='float: none; display: inline-block;' class='btn btn-default mgalnex'>Next</button>"
        }
    }
    $('.mediagalpgx-src').attr('dk-x', t);
    $('.mediagalpage-num').html(n);
    mgalboomegx();
}
function mgalboomegx(){
  //Initial Load of Results based on
  var spx_opts = {
    lines: 9, // The number of lines to draw
    length: 5, // The length of each line
    width: 5, // The line thickness
    radius: 9, // The radius of the inner circle
    corners: 1, // Corner roundness (0..1)
    rotate: 0, // The rotation offset
    direction: 1, // 1: clockwise, -1: counterclockwise
    color: '#000', // #rgb or #rrggbb or array of colors
    speed: 1.1, // Rounds per second
    trail: 59, // Afterglow percentage
    shadow: false, // Whether to render a shadow
    hwaccel: false, // Whether to use hardware acceleration
    className: 'spinner', // The CSS class to assign to the spinner
    //zIndex: 2e9, // The z-index (defaults to 2000000000)
    top: '50%', // Top position relative to parent
    left: '50%' // Left position relative to parent
  };
  var target = document.getElementById('mediagalspnx');
  var ykl = $('body').attr('dtx-mgalx'); 
  var xp = $('.mediagalpgx-src').attr('dk-p');
  var yp = $('.mediagalpgx-src').attr('dk-r');
  var zp = $('.mediagalpgx-src').attr('dk-x');
  $.ajax({
          url: '../initmgalr',
          data: {
            tkz: ykl,
            xzp: xp,
            yzp: yp,
            zzp: zp
          },
          type: 'POST',
          cache: false,
          beforeSend: function() {
            var spinner = new Spinner(spx_opts).spin(target);
          },
          success: function(dataT){
              $("#mediagalspnx").html('');
              $('#mediagalresult-tabs').html(dataT);
            }
        });
}

class book{
  private $db;

  function __construct($conn){
    $this->db = $con;
  }

  public function newBook($name_book, $price, $stock){
    $dat
  }

  
}

$book = new book($conn);

$new = $book->newBook();


//HTACCESS
RewriteEngine On 

# For linking API for search box
RewriteRule ^search/([\[\]=,\s\%20\;\:\?&@~\{\}\+'\.*!™`A-Za-z0-9_-]+)/([\[\]=,\s\%20\?&@~\{\}\+'\.*!™`A-Za-z0-9_-]+)/([\[\]=,\?&@~\{\}\+'\.*!™`A-Za-z0-9_-]+)$ php/__publicsuggestget.php?t=$1&c=$2&tk=$3

# For linking Home page pagination
RewriteRule ^searchinitxx$ php/__publicpaging.php

# For linking Home page search result
RewriteRule ^searchinitxxx$ php/__publicget.php

# For linking Home page fetch info
RewriteRule ^pfetchinfo$ php/__publicitemgetinfo.php

# For linking Home page Get Overdue Notification
RewriteRule ^goverdue$ php/__getoverduenotification.php

# For linking Sign-In Page
RewriteRule ^admin$ php/__signin.php

# For linking Entry Log Page
RewriteRule ^entrylog/([\[\]=,\?&@~\{\}\+'\.*!™`A-Za-z0-9_-]+)$ php/__entrylog.php?toky=$1

# For linking Register Account Page
RewriteRule ^register/([\[\]=,\?&@~\{\}\+'\.*!™`A-Za-z0-9_-]+)/([\[\]=,\?&@~\{\}\+'\.*!™`A-Za-z0-9_-]+)$ php/__user_register.php?toky=$1&pass=$2
