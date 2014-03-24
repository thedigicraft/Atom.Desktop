<?php
// This document needs cleaned up!  Please ignore the mess :-)

?>

<!-- Google Web Fonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,700,800,600,300' rel='stylesheet' type='text/css'>

<!-- Font Awesome 4.0 -->
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">



<!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="css/bootstrap-normalize.css">
<link rel="stylesheet" href="css/bootstrap-text.css">
<link rel="stylesheet" href="css/bootstrap-grid.css">
<link rel="stylesheet" href="css/bootstrap-tables.css">
<link rel="stylesheet" href="css/bootstrap-forms.css">
<link rel="stylesheet" href="css/bootstrap-buttons.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-icons.css">
<link rel="stylesheet" href="css/bootstrap-navigation.css">

<link rel="stylesheet" href="css/clock.css">

<!-- Optional theme -->
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">

<!-- Custom styles for this template -->
<link href="css/jquery-ui.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="css/style.css" rel="stylesheet">

<style>


  .dialog-open {
      
    display:block;  
  }
  .dialog-close {
      
    display:none;  
  } 
  .btn-sound {
        
        padding-top:5px;
        padding-bottom:5px;
        margin:2px;
        font-size: 11px;    
        
   }
   
  .btn-taskbar {
        
        padding-top:5px;
        padding-bottom:5px;

        font-size: 14px; 
        
        color:#FFFFFF;  
        text-shadow: 0px 0px 5px #999; 
        border-radius:0px;
        
        border:1px solid rgba(150,150,150,.0);
        
   }
   
    
   
  .btn-taskbar:hover {
        
        color:#EFEFEF;  
        text-shadow: 0px 0px 5px #555; 
        
        border-radius:0px;
        
   }      
  .btn-taskbar-active {
        
        padding-top:5px;
        padding-bottom:5px;

        font-size: 13px; 
        font-weight:bold;
        color:#111111;   
        border-radius:2px;
        background-color: rgba(250,250,250,.5); 
        border:1px solid #FFFFFF;
   }
  .dialog-soundbank {
      

  
  }  
  .dialog-soundbank .btn-sound {
        
        padding-top:5px;
        padding-bottom:5px;
        margin:2px;
        font-size: 11px;    
        text-align:left;
        min-width:150px;
        display:block;
        
    }    
    
    .list-items {
    	
    	font-size: 11px;
    	
    }
    
    body {
        
        background-image:url('images/backdrop.jpg');
        
    }
    
	button.story, button.story-edit {
		
		font-size:11px;
	
	}
	
	button.story {
		width:226px; 
		text-overflow: clip ellipsis;
		text-align:left;
	}	
	.reader-contain img, .reader-contain iframe {
	
		width: 100%;
			
	
	}
	
.ui-dialog {
	
box-shadow:2px 2px 5px #999;
	
}

.ui-dialog .console {
	
	background-color:#000000;
	color:#4CAE4C;
	font-family:Courier;
	
}

.ui-dialog .console ul li {
	
	list-style:square;
	
}	

div.icon {
	text-align:center;
	width:90px;
	height:90px;
	padding:15px 15px 15px 15px;
	color:#FFFFFF;
	text-shadow:1px 1px 2px #222222;
	border:1px dotted #94c0d9;
	border-radius:2px;
	cursor: pointer;
	
	position:absolute;
	left:0px;
}

div.icon span {
	display:block;
	font-size: 11px;
}

.ui-dialog #dialog-user pre{
	
	padding:20px;
	margin:0px;
	background:none;
	border:none;

}

#taskbar-user {
	position:absolute;
	bottom:0px;
	left:0px;
	
	border:1px solid rgba(100,100,100,.8);
	
	border-radius:0px 5px 0px 0px;
	background-color: rgba(93,96,103,.2);
	/*background:#888A8D;*/
}

#taskbar-user .btn {
	padding:0px 0px 0px 0px;
	margin:2px 2px 2px 2px;
}

#taskbar-user .img-thumbnail {
	/*background:rgba(150,150,150,.7);*/
	border-radius:0px 5px 0px 0px;
	padding:0px 0px 0px 0px;
	border:1px solid rgba(100,100,100,.8);
	
}

#taskbar #taskbar-tasks {
	position:absolute;
	bottom:1px;
	left:76px;

}

#icon-user {
	top: 0px;
}
#icon-update {
	top: 90px;
}
#icon-clock {
	top: 180px;
}
#icon-console {
	top: 270px;
}

pre {
	background-color:none;
}	   
    <?php 
    
    $q = "SELECT * FROM settings WHERE id LIKE 'widget-type%'";
    $r = mysqli_query($dbc, $q);
    
    while($style = mysqli_fetch_assoc($r)) { 
        $type = str_replace('widget-type-', '', $style['id'])
        ?>
        
        .widget-type-<?php echo $type; ?> { background-color: <?php echo $style['value']; ?>; }
        
    <?php } ?>
    
.ui-dialog .ui-dialog-content {
    padding: 0;
    margin: 0;
}

    
</style>