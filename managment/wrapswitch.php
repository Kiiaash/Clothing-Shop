<?php   

       if(isset($_GET["m"])){
        $m=$_GET["m"];
            switch($m){
           
                case "dashbored":
                    include("dashbored/dashbored.php");
                    break;
        
                case "aboutus":
                    include("aboutus/aboutus.php");
                    break;
                
                case "contact":
                    include("contact/contact.php");
                    break;
                
                case "slider":
                    include("slider/slider.php");
                    break;
        
                case "product":
                    include("productregistration/product.php");
                    break;

                case "category":
                    include("categoryinsert/catinsert.php");
                    break;

                case "contact.reply":
                    include("../managment/contact/contact.reply.php");
                    break;

                case "contact.reply.search":
                    include("../managment/contact/contact.reply.search.php");
                    break;

                case "product.editor":
                    include("../managment/productregistration/product.editor.php");
                    break;

                case "product.update":
                    include("../managment/productregistration/product.update.php");
                    break;

                case "banner.under.slider":
                    include("bannerunderslider/banner.under.slider.php");
                    break;
                
                case "special.offer":
                    include("specialoffer/special.offer.php");
                    break;
                
                case "topchoices":
                    include("topchoices/topchoices.php");
                    break;
                
                case "u.tp.option":
                    include("under.topch.option/u.tp.option.php");
                    break;

                case "faq.mang":
                    include("faq/faq.mang.php");
                    break;  

                case "need.help":
                    include("help/need.help.main.php");
                    break;

                case "asktheAI":
                    include("akstheai/asktheai.php");
                    break;

                case "compare":
                    include("compare/comparee.php");
                    break;

                case "newsletter":
                    include("newsletter/newsletter.php");
                    break;

                case "sm":
                    include("socialmedia.icons/sm.php");
                    break; 

                case "footer":
                    include("footer/footer.php");
                    break; 

                case "addressandphon":
                    include("addressandphone/addressandphon.php");
                    break;

                case "logoswitch":
                    include("logoswitch/logoswitch.php");
                    break;
                    
                case "productcount":
                    include("productcount/product.count.php");
                    break; 
                
                case "orsandship":
                    include("orders/orandship.php");
                    break;

                case "comments":
                    include("comments/comments.php");
                    break;
    
                default:
                     include("dashbored/dashbored.php");
                    break;
            }
       }else{
        echo "<h1>welcome to the managment panel</h1>";
       }
?>