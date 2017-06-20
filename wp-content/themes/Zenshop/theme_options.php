<?php
function zn_options(){
$themename = "Zenshop";
$shortname = "zens";

$zm_categories_obj = get_terms("product-category",'hide_empty=1');
$zm_categories = array();
foreach ($zm_categories_obj as $zm_cat) {
$zm_categories[$zm_cat->term_id] = $zm_cat->name;
}
$categories_tmp = array_unshift($zm_categories, "Select a category:");	

$options = array (

	array(  "name" => "Настройки главной страницы",
            "type" => "title",
			"desc" => "",
        ),
		
	array(  "type" => "open"),
	
	array( 	"name" => "Изображение логотипа",
			"desc" => "Введите ссылку на изображение логотипа",
			"id" => $shortname."_logo",
			"std" => get_bloginfo('template_directory')."/images/logo.png",
            "type" => "text"), 		
	
	
	array(  "name" => "Содержимое главной страницы",
			"desc" => "Выберите между списком товаров или записей в блоге",
			"id" => $shortname."_home",
            "type" => "select",		
			"options" => array('shop', 'blog'),		
   		    "std" => ""),
			
	array( 	"name" => "Количество товаров на главной странице",
			"desc" => "Применимо в случае выбора отображения списка товаров на главной странице",
			"id" => $shortname."_home_count",
			"std" => "12",
            "type" => "text"), 
			
	
	array(  "type" => "close"),
	
	
	array(  "name" => "Настройки слайдера",
            "type" => "title",
			"desc" => "В этом разделе вы можете настроить слайдер.",
       	),
	   
	array(    "type" => "open"),	
	
	array( 	"name" => "Рубрика для слайдера",
			"desc" => "Выберите рубрику для отображения в слайдере.",
			"id" => $shortname."_slide_cat",
			"std" => "Выберите рубрику:",
			"type" => "select",
			"options" =>$zm_categories),	

	array( 	"name" => "Количество записей в слайдере",
			"desc" => "Задать количество записей в слайдере.",
			"id" => $shortname."_slide_count",
			"std" => "",
            "type" => "text"), 				
	
	array(    "type" => "close"),	
	
   		
	array(  "name" => "Настройки баннера 125 x 125",
            "type" => "title",
			"desc" => "Вы можете настроить 4 баннера размером 125 x 125 в вашем сайдбаре",
       ), 
	 
	array("type" => "open"),
	
	
	array("name" => "Изображение баннера №1",
			"desc" => "Введите ссылку на изображение баннера 125 x 125.",
            "id" => $shortname."_banner1",
        	"std" => "http://web2feel.com/images/webhostinghub.png",
            "type" => "text"), 
			
	array("name" => "Альтернативный текст баннера №1",
			"desc" => "Введите альтернативный текст баннера.",
            "id" => $shortname."_alt1",
        	"std" => "Дешевый хостинг от WebHostingHub.com",
            "type" => "text"),    
	  
	array("name" => "Ссылка для баннера №1",
			"desc" => "Введите ссылку для баннера тут.",
            "id" => $shortname."_url1",
            "std" => "http://www.webhostinghub.com/",
            "type" => "text"),    
			
	array("name" => "Заголовок баннера №1",
			"desc" => "Введите заголовок баннера тут.",
            "id" => $shortname."_lab1",
            "std" => "Web Hosting Hub - дешевый и доступный хостинг.",
            "type" => "text"),   
	
	array("type" => "break"),
	
	array("name" => "Изображение баннера №2",
			"desc" => "Введите ссылку на изображение баннера 125 x 125..",
            "id" => $shortname."_banner2",
            "std" => "http://web2feel.com/images/pcnames.png",
            "type" => "text"),    
	
	array("name" => "Альтернативный текст баннера №2",
			"desc" => "Введите альтернативный текст баннера.",
            "id" => $shortname."_alt2",
        	"std" => "Поиск доменов и проверка доступности от PCNames.com.",
            "type" => "text"),    	   
	   
	   
	array("name" => "Ссылка для баннера №2",
			"desc" => "Введите ссылку для баннера тут.",
            "id" => $shortname."_url2",
            "std" => "http://www.pcnames.com/",
            "type" => "text"), 

	array("name" => "Заголовок баннера №2",
			"desc" => "Введите заголовок баннера тут.",
            "id" => $shortname."_lab2",
            "std" => "PC Names - поиск доменов и проверка доступности",
            "type" => "text"),   

	array("type" => "break"),		
			
	array("name" => "Изображение баннера №3",
			"desc" => "Введите ссылку на изображение баннера 125 x 125.",
            "id" => $shortname."_banner3",
            "std" => "http://web2feel.com/images/designcontest.png",
            "type" => "text"),  

	array("name" => "Альтернативный текст баннера №3",
			"desc" => "Введите альтернативный текст баннера.",
            "id" => $shortname."_alt3",
        	"std" => "Разработка дизайнов и логотипов от DesignContest.com.",
            "type" => "text"),    			
	   
	array("name" => "Ссылка для баннера 3",
			"desc" => "Введите ссылку для баннера тут.",
            "id" => $shortname."_url3",
            "std" => "http://www.designcontest.com/",
            "type" => "text"),

	array("name" => "Заголовок баннера №3",
			"desc" => "Введите заголовок баннера тут.",
            "id" => $shortname."_lab3",
            "std" => "Design Contest - разработка дизайнов и логотипов",
            "type" => "text"), 		

	array("type" => "break"),
			
	array(  "name" => "Изображение баннера №4",
			"desc" => "Введите ссылку на изображение баннера.",
            "id" => $shortname."_banner4",
            "std" => "http://web2feel.com/images/webhostingrating.png",
            "type" => "text"),    

	array(  "name" => "Альтернативный текст баннера №4",
			"desc" => "Введите альтернативный текст баннера.",
            "id" => $shortname."_alt4",
        	"std" => "Обзоры самых дешевых хостинг провайдеров WebHostingRating.com",
            "type" => "text"),    
			
	array(  "name" => "Ссылка для баннера 4",
			"desc" => "Введите ссылку для баннера тут.",
            "id" => $shortname."_url4",
            "std" => "http://webhostingrating.com",
            "type" => "text"),
	
	array(  "name" => "Заголовок баннера 4",
			"desc" => "Введите заголовок баннера тут.",
            "id" => $shortname."_lab4",
            "std" => "Web Hosting Rating - обзоры самых дешевых хостинг провайдеров",
            "type" =>"text"), 	
		
	array("type" => "close"),	
				

	
);

update_option('zn_template',$options);update_option('zn_themename',$themename);update_option('zn_shortname',$shortname);  
		  
	}
add_action('init','zn_options');

 function mytheme_add_admin() {

 $options =  get_option('zn_template'); $themename =  get_option('zn_themename');$shortname =  get_option('zn_shortname');    

    if ( $_GET['page'] == basename(__FILE__) ) {
    
        if ( 'save' == $_REQUEST['action'] ) {

                foreach ($options as $value) {
                    update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }

                foreach ($options as $value) {
                    if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }

                header("Location: themes.php?page=theme_options.php&saved=true");
                die;

        } else if( 'reset' == $_REQUEST['action'] ) {

            foreach ($options as $value) {
                delete_option( $value['id'] ); 
                update_option( $value['id'], $value['std'] );}

            header("Location: themes.php?page=theme_options.php&reset=true");
            die;

        }
    }

    add_theme_page($themename." настройки", "$themename настройки", 'edit_themes', basename(__FILE__), 'mytheme_admin');
	//add_menu_page( $themename." Options", "$themename Options", 'edit_themes', basename(__FILE__), 'mytheme_admin');  
}



function mytheme_admin() {

  $options =  get_option('zn_template');$themename =  get_option('zn_themename');$shortname =  get_option('zn_shortname');  


    
    
?>
<div class="wrap">
<div class="opwrap" style="background:#fff; margin:20px auto; width:80%; padding:30px; border:1px solid #ddd;" >



<h2 class="wraphead" style="margin:10px 0px; padding:15px 10px; font-family:arial black; font-style:normal; background:#B3D5EF;"><b><?php echo $themename; ?> настройки</b></h2>
   <?php
   if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' настройки сохранены.</strong></p></div>';
    if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' настройки сброшены.</strong></p></div>';
	?>
<form method="post">

<?php foreach ($options as $value) {


switch ( $value['type'] ) {

case "image":
?>


<tr>
<td width="30%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
<td width="70%"><img src="<?php echo $value['id']; ?>" /></td>
</tr>
<tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #ffffff;">&nbsp;</td></tr>
<tr><td colspan="2">&nbsp;</td></tr>

<?php break;

case "open":
?>
<table width="100%" border="0" style="background-color:#eef5fb; padding:10px;">

<?php break;

case "close":
?>

</table><br />
<?php break;

case "break":
?>
<tr><td colspan="2" style="border-top:1px solid #C2DCEF;">&nbsp;</td></tr>

<?php break;

case "title":
?>

<table width="100%" border="0" style="background-color:#dceefc; padding:5px 10px;"><tr>
    <td colspan="2"><h3 style="font-size:18px;font-family:Georgia,'Times New Roman',Times,serif;"><?php echo $value['name']; ?></h3></td>
</tr>

<?php break;

case 'text':
?>

<tr>
    <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
    <td width="80%"><input style="width:400px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo get_settings( $value['id'] ); } else { echo $value['std']; } ?>" /></td>

	</tr>

<tr>
    <td><small><?php echo $value['desc']; ?></small></td>
</tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #ffffff;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>

<?php
break;

case 'textarea':
?>

<tr>
    <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
    <td width="80%"><textarea name="<?php echo $value['id']; ?>" style="width:400px; height:200px;" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( get_settings( $value['id'] ) != "") { echo stripslashes (get_settings( $value['id'] )); } else { echo $value['std']; } ?></textarea></td>

</tr>

<tr>
    <td><small><?php echo $value['desc']; ?></small></td>
</tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #ffffff;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>

<?php
break;

case 'select':
?>
<tr>
    <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
    <td width="80%"><select style="width:240px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>"><?php foreach ($value['options'] as $option) { ?><option<?php if ( get_settings( $value['id'] ) == $option) { echo ' selected="selected"'; } elseif ($option == $value['std']) { echo ' selected="selected"'; } ?>><?php echo $option; ?></option><?php } ?></select></td>
</tr>

<tr>
    <td><small><?php echo $value['desc']; ?></small></td>
</tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #ffffff;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>

<?php
break;

case "checkbox":
?>
    <tr>
    <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
        <td width="80%"><? if(get_settings($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = ""; } ?>
                <input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
                </td>
    </tr>

    <tr>
        <td><small><?php echo $value['desc']; ?></small></td>
   </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #ffffff;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>

<?php         break;

}
}
?>

<p class="submit">
<input name="save" type="submit" value="Сохранить" />
<input type="hidden" name="action" value="Сохранить" />
</p>
</form>
<form method="post">
<p class="submit">
<input name="reset" type="submit" value="Сбросить" />
<input type="hidden" name="action" value="Сбросить" />
</p>
</form>
</div>
<?php
}
add_action('admin_menu', 'mytheme_add_admin'); ?>