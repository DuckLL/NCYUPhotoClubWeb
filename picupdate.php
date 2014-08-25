<?php
if($_FILES['info1']['error']==UPLOAD_ERR_OK){
	if(move_uploaded_file($_FILES['info1']['tmp_name'], "img/info1.jpg")){
		echo "info1 update success";
	}
	else{
		echo "error";
	}
}
if($_FILES['info2']['error']==UPLOAD_ERR_OK){
	if(move_uploaded_file($_FILES['info2']['tmp_name'], "img/info2.jpg")){
		echo "info1 update success";
	}
	else{
		echo "error";
	}
}
if($_FILES['teacher']['error']==UPLOAD_ERR_OK){
	if(move_uploaded_file($_FILES['teacher']['tmp_name'], "img/teacher.jpg")){
		echo "update success";
	}
	else{
		echo "error";
	}
}
if($_FILES['leader']['error']==UPLOAD_ERR_OK){
	if(move_uploaded_file($_FILES['leader']['tmp_name'], "img/1.jpg")){
		echo " update success";
	}
	else{
		echo "error";
	}
}
if($_FILES['vleader']['error']==UPLOAD_ERR_OK){
	if(move_uploaded_file($_FILES['vleader']['tmp_name'], "img/2.jpg")){
		echo " update success";
	}
	else{
		echo "error";
	}
}
if($_FILES['general']['error']==UPLOAD_ERR_OK){
	if(move_uploaded_file($_FILES['general']['tmp_name'], "img/3.jpg")){
		echo "update success";
	}
	else{
		echo "error";
	}
}
if($_FILES['device']['error']==UPLOAD_ERR_OK){
	if(move_uploaded_file($_FILES['device']['tmp_name'], "img/4.jpg")){
		echo " update success";
	}
	else{
		echo "error";
	}
}
if($_FILES['instruments']['error']==UPLOAD_ERR_OK){
	if(move_uploaded_file($_FILES['instruments']['tmp_name'], "img/5.jpg")){
		echo " update success";
	}
	else{
		echo "error";
	}
}
if($_FILES['PR']['error']==UPLOAD_ERR_OK){
	if(move_uploaded_file($_FILES['PR']['tmp_name'], "img/6.jpg")){
		echo " update success";
	}
	else{
		echo "error";
	}
}
 ?>